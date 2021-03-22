<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Products</title>
   
    <!--    JQuery import  -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    

    <!--    Less preproccesor import  --> 
    <link rel="stylesheet/less" href="<?php echo url('/'); ?>/less/styles.less" type="text/css"/>
    <script src="http://lesscss.googlecode.com/files/less-1.0.30.min.js"></script>
    
    
    <!--    Custom Style   -->
    <link rel="stylesheet" href="<?php echo url('/'); ?>/css/ourProductsStyles.css">
    
    <!--    Font Awesome   -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">

    <!--    Font Families  -->
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">
    
    <!--    Bootstrap Styles  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
   
</head>
<body>    
    <nav class="nav navbar navbar-expand-lg navbar-light bg-light fixed-top">
      <a class="navbar-brand" href="index.blade.php"><img src="images/curver-logo-removebg-preview.png" height="60vh" alt="logo"></a>
      <button class="navbar-toggler dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-item nav-link" href="#"><b>OUR PRODUCTS</b></a>
          <a class="nav-item nav-link" href="blog.blade.php">BLOG</a>
          <a class="nav-item nav-link" href="brand.blade.php">BRAND</a>
          <a class="nav-item nav-link" href="innoSus.blade.php">INNOVATION & SUSTAINABILITY</a>
          <a class="nav-item nav-link" href="contactUs.blade.php">CONTACT US</a>
        </div>
      </div>
    </nav>

    <div class="ourProductsImg" >
        <div class="t-ourPs" style="text-align: center;">
            <h1>OUR PRODUCTS</h1>
            <h3>Storage and organization: Anywhere in your home… We definitely have the solution for you!</h3>
        </div>
    </div>
    
    <div class="products">
        <div class="pr">
            <div class="pr-img-1" style="background-image: url(images/ourPs1.jpg); background-size: cover; background-position: center; background-repeat: no-repeat; height: 100vh;">
                <div class="storage" style=" width: 320px; height: 30vh; background-color: white; position: relative; top: 30%; left: 6vw;">
                    <h2 style="margin-left: 4vw; margin-right: 4vw; letter-spacing: 0.3vw;">STORAGE</h2>
                    <h5 style="margin-left: 4vw; margin-right: 4vw;">Where a box is not just a box</h5>
                    <button class="p-btns">DISCOVER</button>
                </div>
            </div>
        </div>
        <div class="pr">
            <div class="pr-img-2" style="background-image: url(images/ourPs2.jpg); background-size: cover; background-position: center; background-repeat: no-repeat; height: 100vh;">
                <div class="storage" style=" width: 320px; height: 30vh; background-color: white; position: relative; top: 30%; left: 60vw;">
                    <h2 style="margin-left: 4vw; margin-right: 4vw; letter-spacing: 0.3vw;">WASTE BIN</h2>
                    <h5 style="margin-left: 4vw; margin-right: 4vw;">Your bin can take center stage</h5>
                    <button class="p-btns">DISCOVER</button>
                </div>
            </div>
        </div>
        <div class="pr">
            <div class="pr-img-3" style="background-image: url(images/ourPs3.jpg); background-size: cover; background-position: center; background-repeat: no-repeat; height: 100vh;">
                <div class="storage" style=" width: 320px; height: 30vh; background-color: white; position: relative; top: 30%; left: 6vw;">
                    <h2 style="margin-left: 4vw; margin-right: 4vw; letter-spacing: 0.3vw;">KITCHEN</h2>
                    <h5 style="margin-left: 4vw; margin-right: 4vw;">We make the kitchen ... the heart of your home</h5>
                    <button class="p-btns">DISCOVER</button>
                </div>
            </div>
        </div>
        <div class="pr">
            <div class="pr-img-4" style="background-image: url(images/ourPs4.jpg); background-size: cover; background-position: center; background-repeat: no-repeat; height: 100vh;">
                <div class="storage" style=" width: 320px; height: 30vh; background-color: white; position: relative; top: 30%; left: 60vw;">
                    <h2 style="margin-left: 4vw; margin-right: 4vw; letter-spacing: 0.3vw;">LAUNDRY</h2>
                    <h5 style="margin-left: 4vw; margin-right: 4vw;">Where Elegance doesn’t have any boundaries</h5>
                    <button class="p-btns">DISCOVER</button>
                </div>
            </div>
        </div>
        <div class="pr">
            <div class="pr-img-5" style="background-image: url(images/ourPs5.jpg); background-size: cover; background-position: center; background-repeat: no-repeat; height: 100vh;">
                <div class="storage" style=" width: 320px; height: 30vh; background-color: white; position: relative; top: 30%; left: 6vw;">
                    <h2 style="margin-left: 4vw; margin-right: 4vw; letter-spacing: 0.3vw;">CLEANING</h2>
                    <h5 style="margin-left: 4vw; margin-right: 4vw;">Cleaning is no longer a chore</h5>
                    <button class="p-btns">DISCOVER</button>
                </div>
            </div>
        </div>
        <div class="pr">
            <div class="pr-img-6" style="background-image: url(images/ourPs6.jpg); background-size: cover; background-position: center; background-repeat: no-repeat; height: 100vh;">
                <div class="storage" style=" width: 320px; height: 30vh; background-color: white; position: relative; top: 30%; left: 60vw;">
                    <h2 style="margin-left: 4vw; margin-right: 4vw; letter-spacing: 0.3vw;">KIDS & LICENCES</h2>
                    <h5 style="margin-left: 4vw; margin-right: 4vw;">Your children won’t want to stop tidying up</h5>
                    <button class="p-btns">DISCOVER</button>
                </div>
            </div>
        </div>
        <div class="pr">
            <div class="pr-img-7" style="background-image: url(images/ourPs7.jpg); background-size: cover; background-position: center; background-repeat: no-repeat; height: 100vh;">
                <div class="storage" style=" width: 320px; height: 30vh; background-color: white; position: relative; top: 30%; left: 6vw;">
                    <h2 style="margin-left: 4vw; margin-right: 4vw; letter-spacing: 0.3vw;">PETS</h2>
                    <h5 style="margin-left: 4vw; margin-right: 4vw;">Your pet deserves only the best</h5>
                    <button class="p-btns">DISCOVER</button>
                </div>
            </div>
        </div>
        <div class="pr">
            <div class="pr-img-8" style="background-image: url(images/ourPs8.jpg); background-size: cover; background-position: center; background-repeat: no-repeat; height: 100vh;">
                <div class="storage" style=" width: 320px; height: 30vh; background-color: white; position: relative; top: 30%; left: 60vw;">
                    <h2 style="margin-left: 4vw; margin-right: 4vw; letter-spacing: 0.3vw;">CROSS RANGE</h2>
                    <h5 style="margin-left: 4vw; margin-right: 4vw;">A world full of colour and textures</h5>
                    <button class="p-btns">DISCOVER</button>
                </div>
            </div>
        </div>
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