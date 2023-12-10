<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> ConvertEase  </title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Caveat&family=Libre+Baskerville&family=Lora:ital@1&family=Poppins:wght@600;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css" />
   
</head>

<body>
  
      <nav>
            <img src="images/logo.png" class="logo"> </div>
            <div class="navigation">
               <ul> 
                   <li><a class="btn active" href="index.php" > Home </a></li>
                   <li> <a class="btn" href="index.php#students"> About Us </a> </li>
                   <li><a class="btn" href="pdf2txt.php"> PDF to TXT</a></li>
                   <li><a class="btn" href="txt2pdf.php"> TXT to PDF</a></li>
               </ul>
            </div>  
        </nav>

       <section id="home">
        <div class="content">
        <h1> Welcome to <br>Convert<span id="redword">Ease</span>  </h1>
        <h2>Where you can change <span class="multiText" id="redword"></span></h2>
        <div class="homebox">
            <p> Convert wih peace, choose with ease </p>
            <div class="btn">
                <a class="blue" href="txt2pdf.php"> Convert TXT To PDF </a>
                <a class="yellow" href="pdf2txt.php"> Convert PDF To TXT </a>
            </div>
        </div>
        </div>
        <div class="ImgCon">
            <img src="images/landingImage.png" class="landingImg">
        </div>
    </section>

     <section id="features">
    <h2> How It Works </h2>
      <p class="Transform"> 
        Effortlessly convert between <span id="redword">PDF</span> and <span id="redword">TXT</span> formats with a few clicks.</p>
     <div class="fea-base"> 
         <div class=" fea-box">
             <i class="fa-regular fa-file-excel"></i>
             <h3> Supports Multiple File Conversion </h3>
             <p> Seamlessly convert multiple files between .PDF and .TXT within seconds.  </p>
         </div>
         <div class=" fea-box">
             <i class="fa-solid fa-user"></i>
             <h3> Ease of Use </h3>
             <p> Our user-friendly interface makes the process hassle-free. </p>
         </div>
         <div class=" fea-box">
           <i class="fa-solid fa-download"></i>
             <h3> Instant Download  </h3>
             <p> Download the converted files within seconds.</p>
         </div>
     </div>
     </section>
     
<div class="student">
     <section id="students">
        <h1> Meet Our Team </h1>
        <p> We are currently second-year computer science students from Universiti Sains Malaysia </p>
        <div class="student-container">
            <div class="profile">
                <img src="./images/KeJun.png" alt="Jillian">
                <h6> Tan Ke Jun</h6>
                <p> Year 2 Intelligent Computing Student </p>
              
            </div>
            <div class="profile">
                <img src="./images/Jillian.png" alt="">
                <h6>Jillian Yeow En Yu </h6>
                <p> Year 2 Sofware Engineering Student</p>
              
            </div>
            <div class="profile">
                <img src="./images/Stelly.png" alt="">
                <h6> Stelly Tan Xin Mei </h6>
                <p> Year 2 Sofware Engineering Student </p>
            
            </div>
            <div class="profile">
                <img src="./images/ChuEn.png" alt="">
                <h6> Lim Chu En  </h6>
                <p> Year 2 Intelligent Computing Student</p>

            </div>
            <div></div>
        </div>
    </section>
</div>
</div>

<script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>
<script>
    var typingEffect = new Typed(".multiText",{
        strings:["PDF to TXT","TXT to PDF"],
        loop: true,
        typeSpeed: 80,
        backSpeed: 60,
        backDelay: 200,
    })
</script>

</body>
</html>