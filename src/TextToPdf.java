import java.io.File;
import java.io.IOException;
import java.nio.charset.StandardCharsets;
import java.nio.file.Files;
import java.nio.file.Path;
import java.util.ArrayList;
import java.util.List;
import org.apache.pdfbox.pdmodel.PDDocument;
import org.apache.pdfbox.pdmodel.PDPage;
import org.apache.pdfbox.pdmodel.PDPageContentStream;
import org.apache.pdfbox.pdmodel.font.PDType1Font;

public class TextToPdf {

    public static void main(String[] args) {
        String inputFolderPath = "upload/"; 
        String outputFolderPath = "converted/";
    
        try {
            
            File inputFolder = new File(inputFolderPath);
            File[] files = inputFolder.listFiles((dir, name) -> name.toLowerCase().endsWith(".txt"));
    
            if (files != null) {
                for (File file : files) {
                    String inputTextFilePath = file.getAbsolutePath();
                    convertTextToPdf(inputTextFilePath, outputFolderPath);
                   
                }
            }
        } catch (IOException e) {
            e.printStackTrace();
        }
    }
    

    public static void convertTextToPdf(String inputTextFilePath, String outputFolderPath) throws IOException {
        // Read the input text file content with UTF-8 encoding
        String outputFileName = new File(inputTextFilePath).getName().replaceAll("\\.txt$", ".pdf");
        String outputPdfFilePath = outputFolderPath + File.separator + outputFileName;

        PDDocument document = new PDDocument();
        PDPage page = new PDPage();
        document.addPage(page);

        float margin = 50; // Set a margin
        float yStart = page.getMediaBox().getHeight() - margin;
        float yPosition = yStart;
        float lineHeight = 12; // Adjust as needed
        float pageWidth = page.getMediaBox().getWidth() - 2 * margin; // Adjust for left and right margins

        try (PDPageContentStream contentStream = new PDPageContentStream(document, page)) {
            contentStream.setFont(PDType1Font.HELVETICA_BOLD, 12); // Change font to Helvetica-Bold

            // Read the text file and add each line to the PDF with margins
            for (String line : Files.readAllLines(Path.of(inputTextFilePath), StandardCharsets.UTF_8)) {
                float textWidth = PDType1Font.HELVETICA_BOLD.getStringWidth(line) / 1000 * 12;

                if (textWidth > pageWidth) {
                    // Line is too long, break it into multiple lines
                    List<String> lines = breakTextIntoLines(line, pageWidth);

                    for (String brokenLine : lines) {
                        yPosition -= lineHeight;
                        contentStream.beginText();
                        contentStream.newLineAtOffset(margin, yPosition);
                        contentStream.showText(brokenLine);
                        contentStream.endText();
                    }
                } else {
                    // Line fits within the page width
                    yPosition -= lineHeight;
                    contentStream.beginText();
                    contentStream.newLineAtOffset(margin, yPosition);
                    contentStream.showText(line);
                    contentStream.endText();
                }
            }
        }

        // Create the output folder if it doesn't exist
        Files.createDirectories(Path.of(outputFolderPath));

        document.save(outputPdfFilePath);
        document.close();
    }

    private static List<String> breakTextIntoLines(String text, float maxWidth) throws IOException {
        List<String> lines = new ArrayList<>();
        int start = 0;
        int end = 0;

        while (start < text.length()) {
            float width = PDType1Font.HELVETICA_BOLD.getStringWidth(text.substring(start, end)) / 1000 * 12;

            if (width > maxWidth) {
                lines.add(text.substring(start, end - 1));
                start = end - 1;
            }

            if (end == text.length()) {
                lines.add(text.substring(start));
                break;
            }

            end++;
        }

        return lines;
    }
}
