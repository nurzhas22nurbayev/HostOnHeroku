<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brand</title>

    <link rel="stylesheet" href="<?php echo url('/'); ?>/css/brandStyles.css">
   
    <!--    Bootstrap Styles  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
   
    <!--    Font Awesome   -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">

    <!--    Google Fonts   -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Alex+Brush&display=swap" rel="stylesheet">
</head>
<body>
    
    <nav class="nav navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <a class="navbar-brand" href="index.blade.php"><img src="images/curver-logo-removebg-preview.png" height="60vh" alt="logo"></a>
        <button class="navbar-toggler dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-item nav-link" href="ourProducts.blade.php">OUR PRODUCTS</a>
            <a class="nav-item nav-link" href="blog.blade.php">BLOG</a>
            <a class="nav-item nav-link" href="#"><b>BRAND</b></a>
            <a class="nav-item nav-link" href="innoSus.blade.php">INNOVATION & SUSTAINABILITY</a>
            <a class="nav-item nav-link" href="contactUs.blade.php">CONTACT US</a>
          </div>
        </div>
    </nav>


    <div class="how-it">
        <div class="t-ourPs" style="text-align: center; ">
            <h1>HOW IT ALL STARTED</h1>
            <p>Within 65 years, Curver has become an international company <br> and the market leader in Europe and beyond specializing in the production and sale of plastic household products for home and leisure.</p>    
        </div>
    </div>

    <div class="curver">
        <h1>Curver</h1>
        <h2>SINCE 1949</h3>
    </div>
    
    <div class="vid">
        <iframe width="560" height="315" class="left" src="https://www.youtube.com/embed/GVeJ1RPDffo?playlist=GVeJ1RPDffo&loop=1&controls=1"  allowfullscreen></iframe>
        <iframe width="560" height="315" class="rigth" src="https://www.youtube.com/embed/jftb65rhGDo" frameborder="0"  allowfullscreen></iframe>
    </div>
    
    <div class="old" >
        
    </div>



      <!------    FOOTER CONTENT      ------>
        
      <div class="footer">
           
        <div class="footer1">
            <img src="images/curver-logo-removebg-preview.png" height="60px" alt="logo"></a>
        </div>
        
        <div class="ftr-all">
            <div class="footer2">
                <h4>ABOUT CURVER</h4>
                <a href="#">OUR PRODUCTS</a>
                <a href="#">OUR BLOG</a>
                <a href="#">OUR STORY</a>
                <a href="#">INNOVATION & SUSTAINABILITY</a>
            </div>

            <div class="footer3" >
                <h4>FOLLOW US</h4>
                <div class="icon-brands">
                    <i class="fab fa-pinterest-p"></i>
                    <i class="fab fa-facebook-f"></i>
                    <i class="fab fa-youtube"></i>
                    <i class="fab fa-linkedin-in"></i>
                    <i class="fab fa-instagram"></i> 
                </div>
                <a href="#">CONTACT US</a>
                <a href="#">JOIN US</a>
            </div>

            <div class="footer4">
                <h4>FIND US</h4>
                <span>
                    <i class="fas fa-map-marker-alt fa-2x"></i>
                    <button class="footer-btn" >
                    FIND CURVER PRODUCT</button>
                </span>
            </div>
        </div>
    </div>

<a href="#header" id="to-header"><i class="fas fa-arrow-up"></i>
</a> 

<hr style="opacity: 0.5;">

<div class="ftr-down">
    <div class="des-by-peop">DESIGNED BY PEOPLE FOR PEOPLE</div>
    <div class="flex-foot">
        <div><a href="#">SITEMAP</a> </div>
        <div><a href="#">TERMS & CONDITION</a></div>
        <div><a href="#">LEGAL NOTICE</a></div>
    </div>
    <div>2018 Curver Ltd. All rights reserved. Disney</div>
</div>
</body>
</html>