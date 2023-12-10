<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Convert TXT To PDF </title>

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
                <li><a class="btn" href="index.php"> Home </a></li>
                <li><a class="btn" href="index.php#students"> About Us </a></li>
                <li><a class="btn" href="pdf2txt.php"> PDF to TXT</a></li>
                <li><a class="btn active" href="txt2pdf.php"> TXT to PDF</a></li>
            </ul>
        </div>
    </nav>

    <section id="home">
        <div class="content">
        <h1> Convert <span id='redword'>TXT</span> To <span id='redword'>PDF</span> </h1>
        <span class="multiText fasttext"></span>
        <div class="container">
            <div class="upload-container">

                <!-- Choose Form -->
                <form method="POST" action="uploadtxt.php" enctype="multipart/form-data" class="upload-form">
                    <!-- Choose File button without the icon -->
                    <label for="file-input" class="button choose-file-button">
                        Choose File
                        <input type="file" id="file-input" name="txtFiles[]" required accept=".txt" multiple style="display: none;">
                    </label>
                    <div class="afterbox" style="display: none">
                        <!-- Display the count of uploaded TXT files below the buttons -->
                    <div class="upload-count">
                        <p id="file-count" style="display: none;"></p>
                    </div>

                    <!-- Upload button styled similarly to Choose File button -->
                    <button type="submit" class="button upload-button" style="display: none;  margin: 1rem 0 0 0;">
                        <i class="fa-solid fa-upload" style='font-size:15px; font-weight:bold'></i> Upload
                    </button>
                    </div>
                    
                </form>
            </div>
        </div>
        </div>
        <div class="ImgCon">
            <img src="images/uploadpage.png" class="landingImg">
        </div>
    </section>

    <section id="features">
        <h2> How To Use It </h2>
        <p class="Transform">
            Effortlessly convert <span id="redword">TXT</span> to <span id="redword">PDF</span> formats with a few
            clicks.</p>
        <div class="fea-base">
            <div class=" fea-box">
                <i class="fa-solid fa-folder-open"></i>
                <h3> Select Files in One Go </h3>
                <p> Choose multiple files at once by holding 'Ctrl' (Windows) or 'Command' (Mac) for one-click
                    selection. </p>
            </div>
            <div class=" fea-box">
                <i class="fa-solid fa-upload"></i>
                <h3> Upload to Convert </h3>
                <p> Click 'Choose File' to select your TXTs, and experience rapid conversion into pdf format within
                    seconds. </p>
            </div>
            <div class=" fea-box">
                <i class="fa-solid fa-file-archive"></i>
                <h3> Download the Zip File </h3>
                <p> After conversion, download the zip file to instantly access your converted pdf documents.</p>
            </div>
        </div>
    </section>

    <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>
    <script src="script1.js"></script>

</body>

</html>

