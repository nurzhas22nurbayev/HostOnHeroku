<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--    Less preproccesor import  --> 
    <link rel="stylesheet/less" href="<?php echo url('/'); ?>/less/styles.less" type="text/css"/>
    <script src="http://lesscss.googlecode.com/files/less-1.0.30.min.js"></script>
    
    
    <!--    Custom Style   -->
    <link rel="stylesheet" href="<?php echo url('/'); ?>/css/styles.css">
    
    <!--    Font Awesome   -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">

    <!--    Font Families  -->
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">
    
    <!--    Bootstrap Styles  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>{{__('Curver | Designed by people for people curver.com')}} </title>

    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
</head>

<body>
    <header id="header">
        
        <nav class="nav navbar navbar-expand-lg navbar-light bg-light fixed-top">
          <a class="navbar-brand" href="index.blade.php"><img src="images/curver-logo-removebg-preview.png" height="80vh" alt="logo"></a>
          <button class="navbar-toggler dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
              <a class="nav-item nav-link" href="ourProducts.blade.php">{{__('OUR PRODUCTS')}}</a>
              <a class="nav-item nav-link" href="blog.blade.php">{{__('BLOG')}}</a>
              <a class="nav-item nav-link" href="brand.blade.php">{{__('BRAND')}}</a>
              <a class="nav-item nav-link" href="innoSus.blade.php">{{__('INNOVATION & SUSTAINABILITY')}}</a>
              <a class="nav-item nav-link" href="contactUs.blade.php">{{__('CONTACT US')}}</a>
            </div>
        </div>
        
        
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#useraddmodal">
            {{__('Sign up')}}    
        </button>  

          <div class="dropdown" style="margin-right: 7vw;">  
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <img src="images/country-code.png" alt="cntry" height="25px">
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
              <button class="dropdown-item" type="button"><img src="images/usa.png" alt="aus" height="8px"> USA</button>
              <button class="dropdown-item" type="button"><img src="images/uk.svg"  alt="aus" height="8px"> UK</button>
              <button class="dropdown-item" type="button"><img src="images/aus.svg" alt="aus" height="10px"> Austria</button>
              <button class="dropdown-item" type="button"><img src="images/ita.svg" alt="aus" height="10px"> Italy (Italia)</button>
              <button class="dropdown-item" type="button"><img src="images/ger.svg" alt="aus" height="10px"> Germany (Deutchland)</button>
              <button class="dropdown-item" type="button"><img src="images/fra.svg" alt="aus" height="10px"> France </button>
              <button class="dropdown-item" type="button"><img src="images/bel.svg" alt="aus" height="12px"> Belgium</button>
              <button class="dropdown-item" type="button"><img src="images/spa.svg" alt="aus" height="10px"> Spain (España)</button>
              <button class="dropdown-item" type="button"><img src="images/rus.svg" alt="aus" height="10px"> Russia (Россия)</button>
              <button class="dropdown-item" type="button"><img src="images/por.svg" alt="aus" height="10px"> Portugal (Portuguese)</button>
              <button class="dropdown-item" type="button"><img src="images/mis.jpg" alt="aus" height="10px"> Egypt (<bdi>مصر</bdi>)</button>

            </div>
          </div>
        </nav>

        <div class="under-nav">
                <h1 class="main-word">{{__("STYLE : COMBINE ELEGANCE AND PRACTICALITY")}}</h1>
                <div>
                    <a href="ourProducts.blade.php">
                        <button class="button">
                            {{__('DISCOVER')}}</button>
                    </a>
                </div>
            <i id="1" class="fas fa-mouse fa-2x"></i>
        </div>
    </header>
    
    <!-- USER ADD MODAL -->
<div class="modal fade" id="useraddmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

    <form id="addform">
        <div class="modal-body">
            {{ csrf_field() }}
            <div class="form-group">
                <label>First Name</label>
                <input type="text" class="form-control" name="fname" placeholder="Enter First Name">
            </div>
            <div class="form-group">
                <label>Last Name</label>
                <input type="text" class="form-control" name="lname" placeholder="Enter Last Name">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="text" class="form-control" name="email" placeholder="Enter Email">
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="text" class="form-control" name="password" placeholder="Enter Password">
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save changes</button>
        </div>
    </form>
    </div>
  </div>
</div>

        <div class="sm-text">
            <p class="para">{{__("Whether it's tidying your kitchen, optimising the space in your fridge, organising your office, tidying up your children’s rooms or sorting out your laundry, we have smart solutions, tips and ideas, with all kinds of storage solutions to organise your home! Do you like tidying up? Sorting things out? Organising? Is your motto “a place for everything and everything in its place”? At Curver we know that home organisation is no easy task! To help you, we’ve designed a wide range of accessories and storage solutions, which are both practical and attractive. On our Storage blog we also share lots of ideas and tips for a perfectly organised home. We offer a wide range of solutions to meet all your everyday needs, including plastic storage boxes, decorated baskets, kitchen waste bins, dish drainers, food storage boxes and vacuum flasks.")}} </p>
        </div>
        

        
        <!------    GRID ITEMS WRAPPER      ------>
        <div class="grid-items-wrapper">
            
            <div class="grid-item-wrapper">
                <div class="grid-img g-img-1" style="background-image: url(images/img3.jpg);"><i class="fas fa-suitcase-rolling fa-4x" id="logo"></i></div>                
            </div>
            <div class="grid-item-wrapper">
                <div class="grid-img g-img-2" style="background-image: url(images/wastebin.jpg);"><i class="fas fa-trash-alt fa-4x" id="logo"></i></div>                
            </div>
            <div class="grid-item-wrapper">
                <div class="grid-img g-img-3" style="background-image: url(images/kit.jpg);"><i class="fas fa-drumstick-bite fa-4x" id="logo"></i></div>                
            </div>
            <div class="grid-item-wrapper">
                <div class="grid-img g-img-4" style="background-image: url(images/pet.jpg);"><i class="fas fa-dog fa-4x" id="logo"></i></div>                
            </div>
            <div class="grid-item-wrapper" id="grid-item-ins">
                <div class="grid-img">
                    <h2 class="range">{{__('CURVER RANGE')}}</h2>
                    <h3>{{__('Find the perfect solution for your home with')}}</h3>
                    <h4>{{__("Curver's wide variety of products")}}</h4>
                    <div class="browse">
                        <a href="ourProducts.blade.php">
                            <button class="button2">
                            {{__('BROWSE THE CURVER RANGE')}}</button>
                        </a>
                    </div> 
                </div>                
            </div>
            <div class="grid-item-wrapper">
                <div class="grid-img g-img-5" style="background-image: url(images/cross.jpg);"><i class="fas fa-tint fa-4x" id="logo"></i></div>                
            </div>
            <div class="grid-item-wrapper">
                <div class="grid-img g-img-6" style="background-image: url(images/laundry.jpg);"><i class="fas fa-broom  fa-4x" id="logo"></i></div>                
            </div>
            <div class="grid-item-wrapper">
                <div class="grid-img g-img-7" style="background-image: url(images/clean.jpg);"><i class="fas fa-spray-can fa-4x" id="logo"></i></div>                
            </div>
            <div class="grid-item-wrapper">
                <div class="grid-img g-img-8" style="background-image: url(images/kids.jpg);"><i class="fas fa-car fa-4x" id="logo"></i></div>                
            </div>
            
        </div>
    
        <!------    BLOG CONTENT       ------>
        <div class="blog-content">
            
            <div class="texts">    
                <div class="sub-head"><h2>{{__('Follow our latest news, tips & advice and more at #CurverBlog')}}</h2></div>
                

                <h1 class="title"
                >{{__('CURVER HAS IDEAS FOR YOU!')}}</h1>
                
                <div class="blog-description">{{__('Welcome to the Curver blog! There we discuss organisation, storage, décor ideas, suggestions and tips, recipes and pets. Are you looking for solutions to all your storage problems? Décor trends? A new recipe? Would you appreciate suggestions and tips to make your daily organisation and storage easier, or help with training your dog? You’ve come to the right place! On the Curver blog we help you to organise your home better and to optimise space through articles and videos. You will also have exclusive access to our news and the advice of our associate expert bloggers, who share their suggestions and tips for Curver, as well as all their décor ideas and their advice on pets. Enjoy your visit!')}}
                </div>       
            </div>

            <div class="layout">
                <div class="left">
                    <iframe class="left-img" width="560px" height="315px" src="https://www.youtube.com/embed/GVeJ1RPDffo?playlist=GVeJ1RPDffo&loop=1&controls=1"></iframe>
                    <!-- <img  src="images/left-img-blog.jpg" class="left-img"> -->
                </div>
                <div class="right">
                    <h2 class="h2e">{{__('HOW TO BRIGHTEN UP YOUR HOME')}}</h2>
                    <p class="pe">{{__('MWe’d all like a home bathed in natural light, but often various factors make this impossible. Windows that are too small, building facing north, flat on one of the lower floors, obstacles...')}}
                    </p>
                    <div>
                        <audio controls class="embed-responsive-item">
                            <source src="images/Mommys_Helper_House_Cleaning.mp3">
                        </audio>
                    </div> 
                </div>
            </div>
        
        </div>

        <!------    UNDER BLOG CONTENT      ------>
        <div class="under-blog">
           
            <div class="curver-story" >
                
                <div class="since-head">
                    <h2 class="curv">Curver</h2>
                    <h3 class="since">SINCE 1949</h3>
                </div>
                <div class="und-head" >
                    <h1>{{__('OUR STORY - HOW IT ALL')}} <br>{{__('STARTED')}}</h1>
                </div>
                <div class="sub-und-head" >
                    <h4>{{__('Following the creation of the #CurverBrand by Peter')}} <br><bdo dir="rtl">{{__('CURtis and Ad VERschuren')}}</bdo></h4>
                </div>
                <div class="disc-mr" >
                    <a href="brand.blade.php"><button class="disc">{{__('DISCOVER MORE')}}</button></a>
                </div>
        
            </div>
            
            <div class="follow">
                
                <div class="flw-us">
                     <h2 class="fol" >{{__('FOLLOW US')}}</h2>
                     <span class="brands">
                        <i id="l-1" class="fab fa-pinterest-p fa-2x"></i>
                        <i id="l-2" class="fab fa-facebook-f fa-2x"></i>
                        <i id="l-3" class="fab fa-youtube fa-2x"></i>
                        <i id="l-4" class="fab fa-linkedin-in fa-2x"></i>
                        <i id="l-5" class="fab fa-instagram fa-2x"></i>
                     </span>      
                </div>

                <div class="flw-cata">
                    <img src="images/curver-2018.jpg" alt="curver2018" height="220px">
                    <div class="cata-info">
                        <h3 class="cata18">{{__('2018 CATALOG')}}</h3>
                        <h5 class="browse">{{__('Browse our whole')}} <br> {{__('range of products')}}</h5>
                    
                        <span class="brw-cata">
                            <i class="fas fa-eye"></i>
                            <h5>{{__('BROWSE OUR CATALOG')}}</h5>
                        </span>
                    </div>
                </div>
           
            </div>

        </div>

        <!------    LAST BLOG CONTENT      ------>
        <div class="last-blog">
            <div class="left-blog">

                <div class="blog-cont">
                    <div class="text-cont">
                        <div class="inno-sus" >
                        {{__('INNOVATION &')}} <br> {{__('SUSTAINABILITY')}}
                        </div>
                        <div class="desc-of-up">
                        {{__('Learn how useful and durable our')}} <br> {{__('products are designed, with')}} <br> {{__('sustainability in mind at all times.')}} 
                        </div>
                    </div>            
                        <a href="innoSus.blade.php">
                            <button class="pinkback-btn">
                            {{__('OUR APPROACH')}}</button>
                        </a>
                </div>
            </div>
            
            <div class="right-blog">
                
                <div class="blog-cont">
                    <div class="text-cont">
                        <div class="con-us">
                        {{__('CONTACT US')}} 
                        </div>
                        <div class="desc-of-up">
                        {{__('Whether you are looking for')}} <br> {{__('answers, would like to solve a')}} <br> {{__('problem or just share your thoughts,')}} <br> {{__('please use our online contact form')}} <br> {{__('to get in touch with our Service')}}
                        </div>
                    </div>
                    <a href="contactUs.blade.php">
                        <button class="blueback-btn">
                        {{__('CONTACT CURVER')}}</button>
                    </a>         
                </div>
            </div>
        </div>  

        <canvas id="myChart1" ></canvas>
        <canvas id="myChart2" ></canvas>
        <canvas id="myChart3" ></canvas>
          
        <!------    FOOTER CONTENT      ------>
        
            <div class="footer">
           
                <div class="footer1">
                    <img src="images/curver-logo-removebg-preview.png" height="60px" alt="logo"></a>
                </div>
                
                <div class="ftr-all">
                    <div class="footer2">
                        <h4>{{__('ABOUT CURVER')}}</h4>
                        <a href="#">{{__('OUR PRODUCTS')}}</a>
                        <a href="#">{{__('OUR BLOG')}}</a>
                        <a href="#">{{__('OUR STORY')}}</a>
                        <a href="#">{{__('INNOVATION & SUSTAINABILITY')}}</a>
                    </div>

                    <div class="footer3" >
                        <h4>{{__('FOLLOW US')}}</h4>
                        <div class="icon-brands">
                            <i class="fab fa-pinterest-p"></i>
                            <i class="fab fa-facebook-f"></i>
                            <i class="fab fa-youtube"></i>
                            <i class="fab fa-linkedin-in"></i>
                            <i class="fab fa-instagram"></i> 
                        </div>
                        <a href="#">{{__('CONTACT US')}}</a>
                        <a href="#">{{__('JOIN US')}}</a>
                    </div>

                    <div class="footer4">
                        <h4>{{__('FIND US')}}</h4>
                        <span>
                            <i class="fas fa-map-marker-alt fa-2x"></i>
                            <a href="find-curver.blade.php">
                                <button class="footer-btn" >
                                {{__('FIND CURVER PRODUCT')}}</button>
                            </a>
                        </span>
                    </div>
                </div>
            </div>

        <a href="#header" id="to-header"><i class="fas fa-arrow-up"></i>
        </a> 

        <hr style="opacity: 0.5;">
        
        <div class="ftr-down">
            <div class="des-by-peop">{{__('DESIGNED BY PEOPLE FOR PEOPLE')}}</div>
            <div class="flex-foot">
                <div><a href="#">{{__('SITEMAP')}}</a> </div>
                <div><a href="#">{{__('TERMS & CONDITION')}}</a></div>
                <div><a href="#">{{__('LEGAL NOTICE')}}</a></div>
            </div>
            <div>{{__('2018 Curver Ltd. All rights reserved. Disney')}}</div>
        </div>
    </body>

                    

<script type="text/javascript">
    /* -------------- AJAX ------------------*/
    $(document).ready(function(){
        $('#addform').on('submit', function(e){
            e.preventDefault();

            $.ajax({
                type: "POST",
                url: "http://localhost/test/public/useradd",
                data: $('#addform').serialize(),
                success: function(response){
                    console.log(response);
                    $('#useraddmodal').modal('hide');
                    alert("Data saved");
                },
                error: function(error){
                    console.log(error)
                    alert("Data Not Saved");
                }
            });
        });
    });


    /* -----------------------   CHART JS IMPLEMENTATION   ------------------------- */

    var ctx1 = document.getElementById("myChart1");
    var myChart1 = new Chart(ctx1, {
        type: 'bar',
        data:{
            labels: ["2005", "2007", "2009", "2012", "2014"],
            datasets: [
                {
                    label:'product purchase indicators',
                    data: [50,80,90,100,110],
                    backgroundColor :['yellow',
                    'green',
                    'cyan',
                    'orange',
                    'pink',
                    ],
                }
            ]
        },
        options: {
            scales:{
                yAxes:[{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });


    var ctx2 = document.getElementById("myChart2");
    var myChart2 = new Chart(ctx2, {
        type: 'pie',
        data:{
            labels: ["Waste Bin", "Kitchen", "Laundry", "Storage", "Kids&Licenses", "Pets", "Cross Range", "Cleaning"],
            datasets: [
                {
                    label:'Our products',
                    data: [10,20,30,15,35, 10, 30, 40],
                    backgroundColor :['red',
                    'purple',
                    'yellow',
                    'brown',
                    'green',
                    'cyan',
                    'orange',
                    'blue',
                    ],
                }
            ]
        },
        options: {
            scales:{
                yAxes:[{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });

    var ctx3 = document.getElementById("myChart3");
    var myChart3 = new Chart(ctx3, {
        "type":"line",
        "data":{
            "labels":["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul"],
            "datasets":[{"label":"Growing", "data":[15,25,30, 59,80,81, 100],
            "fill":false, "borderColor":"rgb(75,192,192)", "lineTension":0.1}]},
            "options":{}});

</script>

</html>