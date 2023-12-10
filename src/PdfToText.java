import java.io.File;
import java.io.FileOutputStream;
import java.io.IOException;
import org.apache.pdfbox.pdmodel.PDDocument;
import org.apache.pdfbox.text.PDFTextStripper;

public class PdfToText {

    // Convert PDF to text
    public static void pdfToText(String pdfFilePath, String outputDirectory) {
        try (PDDocument document = PDDocument.load(new File(pdfFilePath))) {
            // Use PDFTextStripper directly on the entire document
            PDFTextStripper pdfTextStripper = new PDFTextStripper();
            String text = pdfTextStripper.getText(document);

            // Determine the output text file name based on the input PDF file name
            String outputFileName = new File(pdfFilePath).getName().replaceAll("\\.pdf$", ".txt");
            String outputPath = outputDirectory + File.separator + outputFileName;

            // Create the output file and write the text content
            File outputFile = new File(outputPath);
            try (FileOutputStream fos = new FileOutputStream(outputFile)) {
                fos.write(text.getBytes());

            } catch (IOException e) {
                e.printStackTrace();
            }

        } catch (IOException e) {
            e.printStackTrace();
        }
    }

    public static void main(String[] args) {
        // Input and output directories
        String inputDirectory = "upload/";
        String outputDirectory = "converted/";

        // Get all PDF files in the input directory
        File inputDir = new File(inputDirectory);
        File[] pdfFiles = inputDir.listFiles((dir, name) -> name.toLowerCase().endsWith(".pdf"));

        if (pdfFiles != null) {
            for (File pdfFile : pdfFiles) {
                // Convert PDF to text
                pdfToText(pdfFile.getAbsolutePath(), outputDirectory);
            }
        }
    }
}
