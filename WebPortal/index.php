<!DOCTYPE html>
<html lang="en">
<head>
 
  <title>Web Portal</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="http://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="http://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  body {
      font: 400 15px Lato, sans-serif;
      line-height: 1.8;
      color: #818181;
  }
  h2 {
      font-size: 24px;
      text-transform: uppercase;
      color: #303030;
      font-weight: 600;
      margin-bottom: 30px;
  }
  h4 {
      font-size: 19px;
      line-height: 1.375em;
      color: #303030;
      font-weight: 400;
      margin-bottom: 30px;
  }  
  .jumbotron {
      background-image: url("images/f.jpg");
	  height:400px;
	  width:1500px;
      //background-color:#000000;
      color: #fff;
      padding: 100px 25px;
      font-family: Montserrat, sans-serif;
	  background-repeat:no-repeat;
  }
  .container-fluid {
      padding: 60px 50px;
  }
  .bg-grey {
      background-color: #f6f6f6;
  }
  .logo-small {
      color:#000000;
      font-size: 50px;
  }
  .logo {
      color:#000000;
      font-size: 200px;
  }
  .thumbnail {
      padding: 0 0 15px 0;
      border: none;
      border-radius: 0;
  }
  .thumbnail img {
      width: 100%;
      height: 100%;
      margin-bottom: 10px;
  }
  .carousel-control.right, .carousel-control.left {
      background-image: none;
      color:#000000;
  }
  .carousel-indicators li {
      border-color:#000000;
  }
  .carousel-indicators li.active {
      background-color:#000000;
  }
  .item h4 {
      font-size: 19px;
      line-height: 1.375em;
      font-weight: 400;
      font-style: italic;
      margin: 70px 0;
  }
  .item span {
      font-style: normal;
  }
  .panel {
      border: 1px solid#000000; 
	  float:center;
      border-radius:0 !important;
      transition: box-shadow 0.5s;
  }
  .panel:hover {
      box-shadow: 5px 0px 40px rgba(0,0,0, .2);
  }
  .panel-footer .btn:hover {
      border: 1px solid#000000;
      background-color: #fff !important;
      color:#000000;
  }
  .panel-heading {
      color: #fff !important;
      background-color:#000000 !important;
      padding: 25px;
      border-bottom: 1px solid transparent;
      border-top-left-radius: 0px;
      border-top-right-radius: 0px;
      border-bottom-left-radius: 0px;
      border-bottom-right-radius: 0px;
  }
  .panel-footer {
      background-color: white !important;
  }
  .panel-footer h3 {
      font-size: 32px;
  }
  .panel-footer h4 {
      color: #aaa;
      font-size: 14px;
  }
  .panel-footer .btn {
      margin: 15px 0;
      background-color:#000000;
      color: #fff;
  }
  .navbar {
      margin-bottom: 0;
      background-color:#000000;
      z-index: 9999;
      border: 0;
      font-size: 12px !important;
      line-height: 1.42857143 !important;
      letter-spacing: 4px;
      border-radius: 0;
      font-family: Montserrat, sans-serif;
  }
  .navbar li a, .navbar .navbar-brand {
      color: #fff !important;
  }
  .navbar-nav li a:hover, .navbar-nav li.active a {
      color:#000000 !important;
      background-color: #fff !important;
  }
  .navbar-default .navbar-toggle {
      border-color: transparent;
      color: #fff !important;
  }
  footer .glyphicon {
      font-size: 20px;
      margin-bottom: 20px;
      color:#000000;
  }
  .slideanim {visibility:hidden;}
  .slide {
      animation-name: slide;
      -webkit-animation-name: slide;
      animation-duration: 1s;
      -webkit-animation-duration: 1s;
      visibility: visible;
  }
  @keyframes slide {
    0% {
      opacity: 0;
      transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      transform: translateY(0%);
    }
  }
  @-webkit-keyframes slide {
    0% {
      opacity: 0;
      -webkit-transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      -webkit-transform: translateY(0%);
    }
  }
  @media screen and (max-width: 768px) {
    .col-sm-4 {
      text-align: center;
      margin: 25px 0;
    }
    .btn-lg {
        width: 100%;
        margin-bottom: 35px;
    }
  }
  @media screen and (max-width: 480px) {
    .logo {
        font-size: 150px;
    }
  }
  </style>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      
	  </div>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
<li><a href ="index.php">Home</a></li>
 <li><a href="alogin.php"><span class="glyphicon glyphicon-user"></span>Admin Login</a></li>


   
        <li><a href="ulogin.php"><span class="glyphicon glyphicon-log-in"></span>User Login</a></li>
		<li><a href="signup.php"><span class="glyphicon glyphicon-user"></span>signup</a></li>
        <li><a href="#hotels"><span class="glyphicon glyphicon-bed"></span> hotels</a></li>
        <li><a href="#property"><span class="glyphicon glyphicon-piggy-bank"></span>Property</a></li>
        <li><a href="#insurance"><span class="glyphicon glyphicon-hand-right"></span>Insurance</a></li>
		<li><a href="#buses"><span class="glyphicon glyphicon-bed"></span>buses</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="jumbotron text-center">
  <h1>Web Portal</h1> 
</div>


<!-- Container (Portfolio Section) -->
<div id="hotels" class="container-fluid text-center bg-grey">
  <h2>hotels</h2><br>
  <a href="htadlog/adlogin.php">hotel admin</a>
  <h4>What we have created</h4>
  <div class="row text-center slideanim">
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="images/h1.jpg" alt="Paris" width="400" height="300">
        <p><strong>Paris</strong></p>
        <p>Yes, we built Paris</p>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="images/h2.jpg" alt="New York" width="400" height="300">
        <p><strong>New York</strong></p>
        <p>We built New York</p>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="images/h3.png" alt="San Francisco" width="400" height="300">
        <p><strong>San Francisco</strong></p>
        <p>Yes, San Fran is ours</p>
      </div>
    </div>
  </div><br>
  
  <h2>What our customers say</h2>
  <div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->	
	<div class="carousel-inner" role="listbox">
      <div class="item active">
        <h4>"This hotel are the best. I am so happy with the result!"<br><span style="font-style:normal;">WITH different facilites</span></h4>
      </div>
      <div class="item">
        <h4>"One word... WOW!!"<br><span style="font-style:normal;"></span></h4>
      </div>
      <div class="item">
        <h4>"Could I... BE any more happy with this company?"<br><span style="font-style:normal;"></span></h4>
      </div>
    </div>
    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
	
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

<!-- Container (Pricing Section) -->
<div id="property" class="container-fluid">
  <div class="text-center">
    <h2>Property</h2>
    <h4>Choose a property plan that works for you</h4>
  </div>
  <div class="row slideanim">
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>Basic</h1>
        </div>
        <div class="panel-body">
		<img src="images/p1.jpg" alt="basic" width="360" height="400">
        </div>
        <div class="panel-footer">
          <h3>3000</h3>
          <h4>per month</h4>
          <button class="btn btn-lg">Sign Up</button>
        </div>
      </div>      
    </div>     
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>Pro</h1>
        </div>
        <div class="panel-body">
         <img src="images/p2.jpg" alt="basic" width="360" height="400">
        </div>
        <div class="panel-footer">
          <h3>6000</h3>
          <h4>per month</h4>
          <button class="btn btn-lg">Sign Up</button>
        </div>
      </div>      
    </div>       
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>Premium</h1>
        </div>
        <div class="panel-body">
          <img src="images/p3.jpg" alt="basic" width="360" height="400">
        </div>
        <div class="panel-footer">
          <h3>10000</h3>
          <h4>per month</h4>
          <button class="btn btn-lg">Sign Up</button>
        </div>
      </div>      
    </div>    
  </div>
</div>

<!-- Container (Contact Section) -->
<div id="insurance" class="container-fluid bg-grey">
  <h2 class="text-center">Insurance</h2>
  <div class="row">
    <div class="col-sm-5">
      <p>Contact us to save your money .</p>
      <p><span class="glyphicon glyphicon-map-marker"></span> chennai, TamilNadu</p>
      <p><span class="glyphicon glyphicon-phone"></span> 7889878878</p>
      <p><span class="glyphicon glyphicon-envelope"></span> myemail@something.com</p>
    </div>
    <div class="col-sm-7 slideanim">
      <div class="row">
        <div class="col-sm-6 form-group">
          <form >
		  <select name="type">
		  <option value ="life insurence">lifeinsurence</option>
		  <option value ="vehicle insurence">vehicle insurnce</option>
		  <option value ="home insurence">home insurence"</option>
		  <option value ="shop insurence">shop insurence"</option>
		  </select>
		  <br><br>
		  <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
  <input class="form-control" id="discount" name="disc" placeholder="Discount" type="discount" required>
      <div class="row">
        <div class="col-sm-12 form-group">
          <button class="btn btn-default pull-right" type="submit">submit</button>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Container (Services Section) -->
<div id="buses" class="container-fluid text-center">
  <h2>BUSES</h2>
  <h4>What we offer</h4>
  <br>
  <div class="row">
    <div class="col-sm-4">
     <span class="glyphicon glyphicon-off logo-small"></span>
      <h4>POWER</h4>
      
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-film logo-small"></span>
      <h4>films</h4>
          </div>
    <div class="col-sm-4">
     <span class="glyphicon glyphicon-lock logo-small"></span>
      <h4>SECUREDLOCK</h4>
      
    </div>
  </div>
  <br><br>
  <div class="row">
    <div class="col-sm-4">
<span class="glyphicon glyphicon-th-large logo-small"></span>
      <h4>WINDOW SEATS</h4>
     
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-remove-circle logo-small"></span>
      <h4>Emergency Exit</h4>
      
    </div>
    <div class="col-sm-4">
       <span class="glyphicon glyphicon-bed logo-small"></span>
      <h4 style="color:#303030;">Fourseats</h4>
      
    </div>
  </div>
</div>
<footer class="container-fluid text-center">
  <a href="#myPage" title="To Top">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a>
  <p><a href="http://www.webportal.com" title="WebPortal">www.busticket.com</a></p>
</footer>

<script>
$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
  
  $(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slide");
        }
    });
  });
})
</script>

</body>
</html>
