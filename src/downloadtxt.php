<?php

// Java executable path
$javaPath = "java";

// Java classpath
$classPath = "pdfbox-app-2.0.30.jar;pdfbox-app-3.0.1.jar";

// Java class name 
$className = "PdfToText.java";

// Java command
$javaCommand = "$javaPath -cp $classPath $className";


// Output directory within the "src" directory
$outputDirectory = "converted/";

// Ensure the output directory exists
if (!file_exists($outputDirectory)) {
    mkdir($outputDirectory, 0777, true);
}

// Execute the Java command to convert PDF to text
exec("$javaCommand upload/", $output, $resultCode);

// Check if the Java program executed successfully
if ($resultCode === 0) {
    // Create a custom zip file name
    $customZipFileName = "folder.zip";
    $zipFilePath = __DIR__ . DIRECTORY_SEPARATOR . $customZipFileName;

    $zip = new ZipArchive();
    if ($zip->open($zipFilePath, ZipArchive::CREATE) === TRUE) {
        // Add all text files to the zip file
        $textFiles = glob("$outputDirectory/*.txt");
        foreach ($textFiles as $textFile) {
            $zip->addFile($textFile, basename($textFile));
        }

        // Close the zip file
        $zip->close();

        // Set headers for file download
        header('Content-Type: application/zip');
        header('Content-Disposition: attachment; filename=' . $customZipFileName);
        header('Content-Length: ' . filesize($zipFilePath));

        // Read the zip file and output it to the user
        readfile($zipFilePath);

        // Delete the zip file after download (optional)
        unlink($zipFilePath);

        // Delete original PDF files in the "upload" directory
        $pdfFiles = glob("upload/*.pdf");
        foreach ($pdfFiles as $pdfFile) {
            unlink($pdfFile);
        }

        // Delete generated text files in the "converted" directory
        $textFiles = glob("$outputDirectory/*.txt");
        foreach ($textFiles as $textFile) {
            unlink($textFile);
        }

    } 
} 

?>