<?php
$title = "Home";
include "header.php" ?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="styleAsror.css">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&amp;family=Sofia+Sans:wght@200&amp;display=swap"
        rel="stylesheet">
    <title><?php echo $title  ?></title>

    <link rel="icon" href="https://png.pngtree.com/png-vector/20220623/ourmid/pngtree-food-logo-png-image_5297921.png" >
    <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>

<style>
    
body {    
    color: white;
    text-align: center;
 }
.big-img-1 {
  background-image: url(images/Home.jpg);
}
.big-img-2 {
  background-image: url(images/Home4.jpg);
}
.big-img-3 {
  background-image: url(images/Home6.jpg);
}

.bg-light {
    background-color: transparent !important;
}
.carousel-image {
  height: 100vh;
  background-repeat: no-repeat;
  background-size:cover;
  background-position: center;
}
.container, #carouselExampleControls {
  smax-width:  1383.33px;
  
}
#navbarNavAltMarkup {
  padding-left: 50px;
}
.name, .name2 {
    color: white;
    margin-top: 10px;
    position: relative;
    font-size: 20px;
}
.name:before {
    content: "";
    display: block;
    width: 380px;
    height: 2px;
    background: #fdfdfe;
    left: 0;
    top: 50%;
    position: absolute;
  }
  .name:after {
    content: "";
    display: block;
    width: 380px;
    height: 2px;
    background: #fdfdff;
    right:0;
    top: 50%;
    position: absolute;
  }

  .row2 {
    margin-top: 180px;
  }
  .navbar-brand{
    padding-left: 52px;
  }
  .logo {
    color: white;
    margin-top: 10px;
    position: relative;
    font-size: 20px;
    background-color: blue;
  }

</style>
</head>

<body>
   <div>

       <div class="Home-page">
   
           <div class="cont">
   
               
               <nav>
                   <ul >
                    
                    <img class="" src="images/R3.png" alt="Moroccan tomato salad" width="100px" height="100px">    
                   
                        
                       <li><a class="active"  style="font-size:17px ;"  href="file:///D:/Hobby/project1/LastPr/index.html">HOME</a></li>
                       <div>
                       <div class="nav-item dropdown">
                          <a href="#" class="nav-link dropdown-toggle text-light" data-bs-toggle="dropdown">MENU</a>
                          <div class="dropdown-menu">
                              <a href="food.html" class="dropdown-item text-white bg-dark">FOOD</a>
                              <a href="salad.html" class="dropdown-item text-white bg-dark">SALAD</a>
                              <a href="drinks.html" class="dropdown-item text-white bg-dark">DRINK</a>
                          </div>
                      </div>
                       </div>
                       
                       
                       <li><a href="#">GALLERY</a></li>
                       <li><a href="#">ABOUT US</a></li>
                       <li><a href="#">LOCATION</a></li>
                       <li class="blog"> <a href="">BLOG</a> </li>
   
                       <!--     Add icon library    -->
                       
                       <li class="face">
                           <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">   
                           <a href="#" class="fa fa-facebook"></a>
                           <a href="#" class="fa fa-twitter"></a>
                       </li>
                       <li class="face"> </a> </li>
   
                   </ul>
               </nav>
           </div>
           <div class="mid">
   
               <ul>
<li class="name2" style="font-family: 'Dancing Script', cursive; font-size: 66px; color: rgb(245, 86, 6);">Welcome</li>
                  
                   <li style="font-size:40PX ;"> RESTAURANT</li>
                   <li style="font-size:18PX ; font-weight: normal;"> <span class="vert">__________</span> NEW FLAVOURS
                       <span class="vert">__________</span>
                   </li>
               </ul>
               <div class="button">
                   <a href="#" class="button">BOOK A TABLE</a>
   
               </div>
           </div>
   
       </div>
       <?php include "footer.php" ?>