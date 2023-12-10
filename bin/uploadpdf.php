<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Convert PDF To TXT </title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Caveat&family=Libre+Baskerville&family=Lora:ital@1&family=Poppins:wght@600;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css" />

</head>

<body>

    <nav>
        <img src="images/logo.png" class="logo">
        <div class="navigation">
            <ul>
                <li><a href="index.php"> Home </a></li>
                <li><a href="index.php#students"> About Us </a></li>
            </ul>
        </div>
    </nav>

    <section id="page">
        <h2> Uploaded Successfully </h2>
        <p>One Click Away: Download Your Transformed PDFs Instantly </p>

        <div class="btn">
            <a class="blue" href="downloadtxt.php"> Download here </a>
        </div>
        <div class="ImgCon">
            <img src="images/downloadpage.png" class="landingImg">
        </div>
    </section>

    </body>

</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES["pdfFiles"]["tmp_name"])) {
    $targetDir = "upload/";

    // Loop through each uploaded file
    foreach ($_FILES["pdfFiles"]["tmp_name"] as $key => $tmp_name){

        // Construct the full path for the destination file where the uploaded file will be moved to
        $targetFile = $targetDir . basename($_FILES["pdfFiles"]["name"][$key]);

        // Move the uploaded file to the destination directory
        if (move_uploaded_file($tmp_name, $targetFile)) {
            // No need to log the successful upload
        } else {
            // No need to log the error
        }
    }
}
?>

