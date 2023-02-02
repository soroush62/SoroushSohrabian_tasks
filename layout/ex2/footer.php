<style>
    body {
  background-image: url(images/salad.jpg);
  color: white;
  text-align: center;    
  background-size: cover;
  background-attachment:fixed;
  background-repeat: no-repeat;
  mmargin-top: 90px;
  
}
#content {
  width: 80%;
  height: 100%;
  margin: 0 auto;
  
}
.top {
  /* margin-left: 10%; */
  height: 100%;
 
  
}
.mt-5 {
  font-size: 17px;
}
#Linediv {
  display: contents;
}
.form-control:active,
.form-control:focus {
  border: none;
  outline: none;
  box-shadow: none;
}
h1 {
  font-family: 'Dancing Script', cursive;
  font-size: 55px;
}


h2 {
  font-size: 25px;
  color: rgb(255, 119, 0);
}
a, nav a:visited, nav a:active{
  text-decoration: none; 
  color: rgb(255, 255, 255);
  font-weight: bold;
}
a:hover {
  color: rgb(255, 138, 4);
}
nav {
  
  /* margin-top: 10px; */
  /* width: 85%; */
  /* margin-left: 135px; */
  position: fixed;
  width: 85%;
  font-weight: bold;
}
#navend {
  border-right: 2px solid gray;
  padding-right: 5px;
}
.dropdown-item {
  font-size: 20px;
}
.navbar li{
  margin-left:5px;
  margin-right:5px;
}
#facebook, #twitter{
  padding-left: 5px;
}
.modal-footer p, .overlay .btn p {
  padding-top: 6px;
}
/* image hover*/
.imagehover2 {
  position: relative;
  width: 100%;
}

.image2 {
  display: block;
  width: 100%;
  height: 100%;
}
.overlay {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  height: 100%;
  width: 100%;
  opacity: 0;
  transition: .5s ease;
  background-color:transparent;
}

.imagehover2:hover .overlay {
  opacity: 1;
}

.text2 {
  color: white;
  font-size: 20px;
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  text-align: center;
}
#footer1 {
  margin: 0 auto;
  background-color: rgb(172, 107, 72);
  height: 300px !important;
  color: white;
  text-align: center;
  ffont-size: 20px;
  ppadding-left: 5px;
  display: flex;
  padding:0 10% 5px 10%;
}
h3{
  font-family: 'Frutiger', cursive; font-size: 35px;
}
#footer3text {
  padding-left: 12%;
}
#footer2 {
  margin: 0 auto;
  bbackground-color: rgb(49, 44, 44);    
  color: white;
  text-align: center;
  font-size: 19px;
  padding-top: 5px;
  hheight: 270px;
  bbackground-image: url(images/back2.jpeg);
  background-repeat: no-repeat;
  background-size:cover;
}
.carousel-image  {
  height: 308.49px;
  wwidth: 290px;
  background-repeat: no-repeat;
  background-size:cover;
  background-position: center;
}
#Dubai {
  smargin-left: 250px;
}
#footer3 {
  margin: 0 auto;
  vbackground-color: rgb(56, 56, 56);
  height: 100%;
  color: white;
  text-align: start;
  font-size: 15px;
  padding-left: 5px;
  padding-top: 15px;
  height: 346px;
  background-image: url(images/back4.jpg);
  background-repeat: no-repeat;
  background-size:cover;
}
hr.style1{
  border-top: 4px solid #fefefe;
}
#firstcol {
  padding: 15px 0 0 0;
}
.AppStore {
  width: 100px;
}

@media (min-width: 1200px){
.container {
  width: 100%;
}
}
@media (max-width: 791px) {
  nav {
    /* margin-top: 20px; */
    /* width: 85%; */
    /* margin-left: 0; */
    position: relative;
    justify-content: center;
}
}

</style>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SalaD Menu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=Sofia+Sans:wght@200&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="Home page.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="icon" href="https://png.pngtree.com/png-vector/20220623/ourmid/pngtree-food-logo-png-image_5297921.png" >
    <link rel="stylesheet" href="style.css">
        <link rel="icon" href="https://png.pngtree.com/png-vector/20220623/ourmid/pngtree-food-logo-png-image_5297921.png" >
        
  </head>
  <body>
<div class="row" id="footer1">
              <div class="col-md-12 " >
                <h3>WHY CHOOSE UZBEKOVKAT:</h3> 
                <p style="font-size: 22px;">UZBEKOVKAT is the only international Uzbekistani food restorant in the world.
                   We decided to take the initiative of making this restorant because we love and value
                   Uzbek foods and delicacies and we would love to share them with the world through our fine salads, drinks and foods.</p>                   
              </div>
              <div>
                <h4><b>Order anywhere, anytime! download our App</h4> 
                <a href=""><img class="AppStore" src="images/App Store Badge.png" alt="App Store" width="15px"></a> 
                <a href=""><img class="AppStore" src="images/Google Play Store Badge.png" alt="Google Play Store" width="15px"></a> 
              </div>              
            </div>
            <div class="container">
              <div class="row" id="footer2">                
                <div class="col  justify-content-center" id="Dubai" style="width: 270px; height: 300px;">
                  <div id="myCarousel" class="carousel slide justify-content-center" data-ride="carousel" >                  
                    <ol class="carousel-indicators">
                      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                      <li data-target="#myCarousel" data-slide-to="1"></li>
                      <li data-target="#myCarousel" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                      <div class="item active carousel-image">
                        <img src="images/salad5.jpg" alt="Los Angeles" style="width:100%;">
                      </div>
                
                      <div class="item carousel-image">
                        <img src="images/salad6.jpg" alt="Chicago" style="width:100%;">
                      </div>
                    
                      <div class="item carousel-image">
                        <img src="images/salad7.jpg" alt="New york" style="width:100%;">
                      </div>
                    </div>            
                    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                      <span class="glyphicon glyphicon-chevron-left"></span>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#myCarousel" data-slide="next">
                      <span class="glyphicon glyphicon-chevron-right"></span>
                      <span class="sr-only">Next</span>
                    </a>
                  </div>
                </div>     
              </div>
            </div>  
            <div class="row" id="footer3">
              <div class="col-md-6 " id="footer3text" >
                <p><b>LOCATION</b></p> 
                <p>Rooftop-20th Floor, Grand Millennium Hotel, Marasi Drive Street,</p> 
                <p>Business Bay, Dubai, UAE</p>
                <p>Complimentary Valet Available</p>
                <div>
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d18906.129712753736!2d6.722624160288201!3d60.12672284414915!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x463e997b1b6fc09d%3A0x6ee05405ec78a692!2sJ%C4%99zyk%20trola!5e0!3m2!1spl!2spl!4v1672239918130!5m2!1spl!2spl" width="300" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
              </div>
              <div class="col-md-6 " id="footer3text"  >
                <p><b>OPENING HOURS</b></p> 
                <p>For Booking & Reservations email us at hamk@uzbox.com or call us</p>
                <p>at +671 00 11 3377</p>  
                <p>Restaurant</p> 
                <p>12 PM to 2 AM</p> 
                <p>Lounge</p>
                <p>6 PM to 3 AM</p>
                <a href="">FOLLOW US</a>
              </div>               
            </div>
        </div>           
          
          
  
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>