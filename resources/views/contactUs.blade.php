<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:100,600" type="text/css">


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">  


    

<style>
    .container {
        margin-top:2%;
    }
</style>

    <title>Contact Us</title>
</head>

<!--    JQuery import  -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    

<!--    Less preproccesor import  --> 
<link rel="stylesheet/less" href="<?php echo url('/'); ?>/less/contactStyles.less" type="text/css"/>
<script src="http://lesscss.googlecode.com/files/less-1.0.30.min.js"></script>


<!--    Custom Style   -->
<link rel="stylesheet" href="<?php echo url('/'); ?>/css/contactStyles.css">

<!--    Font Awesome   -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">

<!--    Font Families  -->
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">

<!--    Bootstrap Styles  -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>


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
            <a class="nav-item nav-link" href="brand.blade.php">BRAND</a>
            <a class="nav-item nav-link" href="innoSus.blade.php">INNOVATION & SUSTAINABILITY</a>
            <a class="nav-item nav-link" href="#"><b>CONTACT US</b></a>
          </div>
        </div>
    </nav>

    <div class="cont-us-blog">
        <h1>CONTACT US</h1>
        <p>Whether you are looking for answers, would like to solve a problem or just share your thoughts, please use our online contact form to get in touch with our Customer Service.</p>
    </div>
    

    @if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <div class="container">
        <div class="row">
            <div class="col-md-6"><h2>file uploading</h2></div>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <form action="http://localhost/test/public/multiuploads" method="post" enctype="multipart/form-data" >
                {{ csrf_field() }}
                <div class="form-droup">
                    <label for="Product Name">Product Name</label>
                    <input type="text" name="name" class="form-control" placeholder="Product Name" >
                    </div>
                    <label for="Product Name">Product photos (can attach more than one): </label>
                    <br>
                    <input type="file" class="form-control" name="photos[]" multiple>
                    <br> <br>
                    <input type="submit" class="btn btn-primary" value="Upload">
            </form>
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