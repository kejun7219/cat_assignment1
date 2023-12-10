<?php

// Java executable path
$javaPath = "java";

// Java classpath
$classPath = "pdfbox-app-2.0.30.jar;pdfbox-app-3.0.1.jar";

// Java class name (without the .java extension)
$className = "TextToPdf.java";

// Java command
$javaCommand = "$javaPath -cp $classPath $className";

// Output directory within the "src" directory
$outputDirectory = "converted/";

// Ensure the output directory exists
if (!file_exists($outputDirectory)) {
    mkdir($outputDirectory, 0777, true);
}

// Execute the Java command to convert Text to PDF
exec("$javaCommand /upload", $output, $resultCode);

// Check if the Java program executed successfully
if ($resultCode === 0) {
    // Create a custom zip file name
    $customZipFileName = "folder.zip";
    $zipFilePath = __DIR__ . DIRECTORY_SEPARATOR . $customZipFileName;

    $zip = new ZipArchive();
    if ($zip->open($zipFilePath, ZipArchive::CREATE) === TRUE) {
        // Add all pdf files to the zip file
        $pdfFiles = glob("$outputDirectory/*.pdf");
        foreach ($pdfFiles as $pdfFile) {
            $zip->addFile($pdfFile, basename($pdfFile));
        }

        // Close the zip file
        $zip->close();

        // Delete original text files in the "upload" directory
        $textFiles = glob("upload/*.txt");
        foreach ($textFiles as $textFile) {
            unlink($textFile);
        }

        // Delete generated PDF files in the "converted" directory
        $pdfFiles = glob("$outputDirectory/*.pdf");
        foreach ($pdfFiles as $pdfFile) {
            unlink($pdfFile);
        }

        // Set headers for file download
        header('Content-Type: application/zip');
        header('Content-Disposition: attachment; filename=' . $customZipFileName);
        header('Content-Length: ' . filesize($zipFilePath));

        // Read the zip file and output it to the user
        readfile($zipFilePath);

        // Delete the zip file after download (optional)
        unlink($zipFilePath);
    }
}

?>