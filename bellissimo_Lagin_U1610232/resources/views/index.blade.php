<!DOCTYPE html>
<html>
<head>
	<title>Bellissimo</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="menu.png">
 <link rel="stylesheet" type="text/css" href="ip_project.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css">
  <!-- google font family -->
  <link href='https://fonts.googleapis.com/css?family=Tauri'>

  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

</head>
<body>
 <div class="logo">
 	<a href="/">
  <img id="logo2" src="images/b73983b5-b9be-4572-a82d-fbbe4c15526f.png">
  	<img src="images/barbecue1.png" alt="Bellissimo-Restaurant name">
 	</a>
 </div>
<div class="topnav" id="myTopnav">
  <a href="#home" class="active">Home</a>
  <a href="#news">News</a>
  <a href="#contact">Contact</a>
  <div class="dropdown">
  <button class="dropbtn">Menu<i id="caret-down" class="fa fa-caret-down"></i></button> 
  <div class="dropdown-content">
    <a href="/ip_project_2_first_course_meal"><i class="fa fa-cutlery"> First course & Starter</i></a>
    <a href="/ip_project_2_second_course_meal"><i class="fa fa-cutlery"> Second course</i></a>
    <a href="/ip_project_2_dessert_course_meal"><i class="fa fa-birthday-cake"></i> Dessert</a>
    <a href="/ip_project_2_drinks_course_meal"><i class="fa fa-beer"> Drinks</i></a>
    <a href="/ip_project_2_fastFood_course_meal">Fast Food</a>
    <a href="/ip_project_2_vegan_course_meal">Vegan</a>
  </div>
  </div> 
  <a href="#about">Interior</a>
  
  <!-- when sign button is pressed, the pop up window opens up -->
  <a onclick="document.getElementById('popup').style.display='block'" class="right-sign"><i class="fa fa-sign-in"> </i> Log in</a>

<div id="popup" class="sign">
  <form class="sign-content animate" action="/action_page.php">
      <span onclick="document.getElementById('popup').style.display='none'" class="close-button" title="Close Modal">&times;</span>
    <div class="container">
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" id="pwd" name="password" />
      <span class="field-icon"><i id="eye" class="fa fa-eye"></i></span>
      <div class="container">  
      <button type="submit">Logdwadwain</button>
      </div>
      <label>
        <input type="checkbox" name="remember"> Remember me
      </label>
    </div>
    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('popup').style.display='none'" class="cancelButton">Cancel</button>
      <span class="psw"><a id="registration" href=""> Forgot password?</a></span>
      <span class="psw2"><a id="registration" href="ip_registration_form"> Registration</a></span>
    </div>
  </form>
</div>
<!-- 
 <a href="ip_project_2_sign_in.html" class="right-sign">Sign</a> -->
  <a href="javascript:void(0);" style="font-size:22.7px;" class="icon" onclick="myFunction()">&#9776;</a>
</div>

<!-- Slideshow started -->

<div class="slideshow-container">
<div class="mySlides fade">
  <div class="numbertext">1 / 6</div>
  <img src="images/berry-breakfast-caramel-302468.jpg" style="width:100%">
  <div class="text"><a href="ip_project_2_dessert_course_meal"><span>Dessert</a></div>
</div>
<div class="mySlides fade">
  <div class="numbertext">2 / 6</div>
  <img src="images/asparagus-barbecue-bbq-675951_2.jpg" style="width:100%">
  <div class="text"><a href="ip_project_2_first_course_meal"><span> Starter</span></a></div>
</div>
<div class="mySlides fade">
  <div class="numbertext">3 / 6</div>
  <img src="images/avocado-cooked-delicious-262959_2.jpg" style="width:100%">
  <div class="text"><a href="ip_project_2_second_course_meal"><span>Second course</span></a></div>
</div>

<div class="mySlides fade">
  <div class="numbertext">4 / 6</div>
  <img src="images/appetizer-blur-bread-209564.jpg" style="width:100%">
  <div class="text"><a href="ip_project_2_vegan_course_meal"><span> Vegan</span></a></div>
</div>
  
  <div class="mySlides fade">
  <div class="numbertext">5 / 6</div>
  <img src="images/alcoholic-beverages-bar-beverage-605408.jpg" style="width:100%">
  <div class="text"><a href="ip_project_2_drinks_course_meal"><span> Drinks</span></a></div>
</div>
  
  <div class="mySlides fade">
  <div class="numbertext">6 / 6</div>
  <img src="images/beef-bread-burger-156114.jpg" style="width:100%">
  <div class="text"><a href="ip_project_2_fastFood_course_meal"><span>Fast Food</span></a></div>
</div>

<a class="prev" id="back" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" id="back" onclick="plusSlides(1)">&#10095;</a>

</div>
<br>
<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
  <span class="dot" onclick="currentSlide(4)"></span>
  <span class="dot" onclick="currentSlide(5)"></span>
  <span class="dot" onclick="currentSlide(6)"></span> 
</div>

<div class="cards">
    <div class="cardsImage">
        <img src="images/discount.png" alt="discountImage">
    </div>
  <div class="cards-part">
    <h1>Discount</h1>
    </p>
  </div>
  <div class="cards-part">
    <h1>Fast Delivery</h1>
    <img src="images/action-adult-bike-417005.jpg" style="width: 200px;height: 200px;">
  </div>
  <div class="cards-part">
    <h1>Most serviced dishes</h1>
  </div>
</div>

<div id="map">
  
</div>
 
  <div class="footer ">
    <div class="location">
      <div class="location-content">
      <h1>Bellissimo restaurant</h1>
        <p><b>Location : </b>9, Ziyolilar str., M.Ulugbek district, Tashkent city</p>
        <p><i class="fa fa-phone-square"> </i> <b>Phone : </b> +998942881761</p>
        <p><b>Fax : </b> +998942881761</p>
        <p><b>Email : </b><a href=""> dcqanoatovizzat@gmail.com</a></p>
        <p><b>Website : </b><a href="">www.bellissimo.uz</a></p>
      </div>
    </div>
    <div class="location">
      <h1>About us</h1>
      <div class="about">
      <ul>
        <li><a href="ip_project">Home</a></li>
        <li><a href="">Contact</a></li>
        <li><a href="">Menu</a></li>
        <li><a href="">Orders</a></li>
        <li><a href="">Guests</a></li>
        <li><a href="">Dishes</a></li>
      </ul>
     </div>
      <div class="socialWebsite-content">
  <a href="https://www.facebook.com/"><i class="a fa fa-facebook"></i></a>
  <a href="https://twitter.com/"><i class="a fa fa-twitter"></i></a>
  <a href="https://www.youtube.com/"><i class="a fa fa-youtube"></i></a>
  <a href="https://www.instagram.com/"><i class="a fa fa-instagram"></i></a>
  <a href="https://telegram.org/"><i class="a fa fa-telegram"></i></a>
  </div>
    </div>
  <div class="location">
    <h2>Open hours</h2>
    <p id="openHours"><i id="openHoursIcon" class="fa fa-clock-o"></i>Monday-Sunday</br></p>
    <p id="timeOpenHours">09:00-23:00</br></p>
    <p id="openHours"><i id="openHoursIcon" class="fa fa-motorcycle"></i>Delivery</br></p>
    <p id="timeOpenHours">09:00-23:00</p>
  </div>
  <div class="copyright">
  <p><img class="copy" src="images/copyrightIcon2.png"> 2018 Bellissimo Restaurant</br>  All right reserved.</p>
  </div>
</div>
<a id="back2Top" title="Back to top" href=""><i class="fa fa-arrow-circle-up"></i></a>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</script>
<script type="text/javascript" src="ip_project.js"></script>
<script type="text/javascript" src="topnavbar.js">
</script>
<!-- responsive navbar -->
<!-- map has been started building -->
<script type="text/javascript"  src="google_map.js">
</script>

<script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCAn7U1stuOBVb5XCCQ0yZ4AswWeGS1mQo&callback=initMap">
    </script>
<!-- POPUP sign up page -->
<script type="text/javascript" src="popup.js"></script>
</body>
</html>