<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <script src="https://api-maps.yandex.ru/2.1/?apikey=840a21fc-fd91-481d-8052-fed6b4509534&lang=en_US" type="text/javascript">
    </script>

    <script type="text/javascript">
        ymaps.ready(function () {
    var myMap = new ymaps.Map('map', {
            center: [37.778062, -122.417376],
            zoom: 12
        }, {
            searchControlProvider: 'yandex#search'
        }),

        MyIconContentLayout = ymaps.templateLayoutFactory.createClass(
            '<div style="color: #FFFFFF; font-weight: bold;">$[properties.iconContent]</div>'
        ),

        myPlacemark = new ymaps.Placemark(myMap.getCenter(), {
            hintContent: 'My placemark',
            balloonContent: 'pretty place'
        }, {
          
            iconLayout: 'default#image',
            iconImageHref: 'images/place-mark.png',
            
            iconImageSize: [30, 42],
            iconImageOffset: [-5, -38]
        });

    myMap.geoObjects
        .add(myPlacemark);

        var myGeoObject = new ymaps.GeoObject({
            geometry: {
                type: "LineString",
                coordinates: [
                    [37.778062, -122.417376],
                    [37.836484, -122.478426]
                ]
            },
            properties:{
                hintContent: "geo object",
                balloonContent: "You can drag me"
            }
        }, {
            draggable: true,
            strokeColor: "#00FFFF",
            strokeWidth: 5
        });

        myMap.geoObjects
        .add(myGeoObject);


        myGeoObject = new ymaps.GeoObject({
        geometry: {
            type: 'Rectangle',
            coordinates: [
                [37.768062, -122.417376],
                [37.748062, -122.427376]
            ]
        },
        properties: {
            hintContent: 'Drag me!',
            balloonContent: 'That is an Rectangle'
        }
    }, {
        draggable: true,
        fillColor: '#ffff0022',
        strokeColor: '#3caa3c88',
        strokeWidth: 7
    });

    myMap.geoObjects
        .add(myGeoObject);
});

    </script>


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
    
    <div class="address">
        <div class="addImg-div">
            <img src="images/loc.png" height="5rem" width="5rem" alt="loc">   
        </div>
        <div class="add-div">
            <address>
                Visit us at:<br>
                curver.com<br>
                Customer Service Department
                ZI Haneboesch, L-4562
                Niedercorn, LUXEMBOURG<br>
            </address>
        </div>
    </div>


    <div class="input-fields">
      <div class="yan-map" id="map">

      </div>
      <div class="inputs-container">
        <div class="ten-inputs">
          <form class="myForm">
            <input type="text" class="form-control" placeholder="Last Name*">
            <input type="text" class="form-control" placeholder="First Name*">
            <input type="text" class="form-control" placeholder="Address*">
            <input type="text" class="form-control" placeholder="Zip Code*">
            <select class="form-control">
              <option value="" selected disabled hidden>Select your country</option>
              <option>Australia</option>
              <option>Great Britain</option>
              <option>United States of America</option>
            </select>        
            <input type="text"  class="form-control" placeholder="Town*">
            <input type="email" class="form-control" id="email" name="email" placeholder="Email*" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" title="there">
            <input type="text"  class="form-control" placeholder="Phone*">
            <select class="form-control">
              <option value="" selected disabled hidden>Demand object*</option>
              <option>Product details</option>
              <option>How to use or maintain a product</option>
              <option>Spare parts</option>
              <option>Where to buy</option>
              <option>Spare parts</option>
              <option>Ideas or suggestions to share</option>
              <option>Others</option>
            </select>
            <select class="form-control">
              <option value="" selected disabled hidden>Category*</option>
              <option>Storage</option>
              <option>Waste bin</option>
              <option>Kitchen</option>
              <option>Laundry</option>
              <option>Cleaning</option>
              <option>Kids & Licences</option>
              <option>Pets</option>
              <option>Cross range</option>
              <option>Others</option>
            </select>
            <div class="area">
              <textarea class="form-control" id="text-area"></textarea>
            </div>
            <input class="form-control" type="reset" value="Reset">
            <input type="submit" id="submit-btn" value="Submit">
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