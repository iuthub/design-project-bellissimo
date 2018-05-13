<!DOCTYPE html>
<html>
<head>
	<title>Bellissimo</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width = device-width, initial-scale = 1.0">
	 <link rel="icon" href="menu.png">

 <link rel="stylesheet" type="text/css" href="ip_project.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css">

  <!-- google font family -->
  <link href='https://fonts.googleapis.com/css?family=Tauri'>
</head>
<body>
	 <div class="logo">
 	<a href="index">
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
  <a href="#about">About</a>
  
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
      <button type="submit">Login</button>
      </div>
      <label>
        <input type="checkbox" name="remember"> Remember me
      </label>
    </div>
    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('popup').style.display='none'" class="cancelButton">Cancel</button>      
      <span class="psw"><a id="registration" href=""> Forgot password?</a></span>
      <span class="psw2"><a id="registration" href=""> Registration</a></span>
      </div>
  </form>
</div>
<!-- 
 <a href="ip_project_2_sign_in.html" class="right-sign">Sign</a> -->
  <a href="javascript:void(0);" style="font-size:20px;" class="icon" onclick="myFunction()">&#9776;</a>
</div>

<div class="nameOfMeals">
  <div class="nameOfMeals-content">
     <img src="images/fastFood_course_meal/1f.jpg" alt="FastFoodCourseMeal">
    <div class="nameOfCardAndCost">
      <i style="font-size: 24px;" class="fafafa fa fa-chevron-up "></i>
      <h3> Apple with caramel</h3 >
      <p><i class="fa fa-money"> </i> 25000 sum</br>
        This cake includes a lot of tasty ingredients
      </p>
    </div>
  </div>
  <div class="nameOfMeals-content">
    <img src="images/fastFood_course_meal/2f.jpg" alt="FastFoodCourseMeal">
    <div class="nameOfCardAndCost">
      <i style="font-size: 24px;" class="fafafa fa fa-chevron-up "></i>
      <h3>Ice cream with fruits</h3>
      <p><i class="fa fa-money"> </i> 26000 sum</p>
    </div>
  </div>
  <div class="nameOfMeals-content">
    <img src="images/fastFood_course_meal/3f.jpg" alt="FastFoodCourseMeal">
    <div class="nameOfCardAndCost">
      <i style="font-size: 24px;" class="fafafa fa fa-chevron-up "></i>
      <h3>Raspberry mountain</h3>
      <p><i class="fa fa-money"> </i> 26000 sum</p>
    </div>
  </div>
  <div class="nameOfMeals-content">
    <img src="images/fastFood_course_meal/4f.jpg" alt="Grilled Food">
    <div class="nameOfCardAndCost">
      <i style="font-size: 24px;" class="fafafa fa fa-chevron-up "></i>
      <h3>Milky</h3>
      <p><i class="fa fa-money"> </i> 24000 sum</p>
    </div>
  </div>
  <div class="nameOfMeals-content">
    <img src="images/fastFood_course_meal/5f.jpg" alt="Grilled Food">
    <div class="nameOfCardAndCost">
      <i style="font-size: 24px;" class="fafafa fa fa-chevron-up "></i>
      <h3>Apple roulette</h3>
      <p><i class="fa fa-money"> </i> 31000 sum</p>
    </div>
  </div>
  <div class="nameOfMeals-content">
    <img src="images/fastFood_course_meal/6f.jpg" alt="Grilled Food">
    <div class="nameOfCardAndCost">
      <i style="font-size: 24px;" class="fafafa fa fa-chevron-up "></i>
      <h3>Strawberry with semifredo</h3>
      <p><i class="fa fa-money"> </i> 22000 sum</p>
    </div>
  </div>
  <div class="nameOfMeals-content">
    <img src="images/fastFood_course_meal/10f.png" alt="Grilled Food">
    <div class="nameOfCardAndCost">
      <i style="font-size: 24px;" class="fafafa fa fa-chevron-up "></i>
      <h3>Banana with black chococream</h3>
      <p><i class="fa fa-money"> </i> 25000 sum</p>
    </div>
  </div>
  <div class="nameOfMeals-content">
    <img src="images/fastFood_course_meal/9f.png" alt="Grilled Food">
    <div class="nameOfCardAndCost">
      <i style="font-size: 24px;" class="fafafa fa fa-chevron-up "></i>
      <h3>Ice cream with vinnom taste</h3>
      <p><i class="fa fa-money"> </i> 22000 sum</p>
    </div>
  </div>
  <div class="nameOfMeals-content">
    <img src="images/fastFood_course_meal/8f.png" alt="Grilled Food">
    <div class="nameOfCardAndCost">
      <i style="font-size: 24px;" class="fafafa fa fa-chevron-up "></i>
      <h3>Ice cream with orange</h3>
      <p><i class="fa fa-money"> </i> 21900 sum</p>
    </div>
  </div>
  <div class="nameOfMeals-content">
    <img src="images/fastFood_course_meal/7f.png" alt="Grilled Food">
    <div class="nameOfCardAndCost">
      <i style="font-size: 24px;" class="fafafa fa fa-chevron-up "></i>
      <h3>Lakomka</h3>
      <p><i class="fa fa-money"> </i> 18000 sum</p>
    </div>
  </div>
  <div class="nameOfMeals-content">
    <img src="images/fastFood_course_meal/11f.png" alt="Grilled Food">
    <div class="nameOfCardAndCost">
      <i style="font-size: 24px;" class="fafafa fa fa-chevron-up "></i>
      <h3>Tiramisu</h3>
      <p><i class="fa fa-money"> </i> 25000 sum</p>
    </div>
  </div>
  <div class="nameOfMeals-content">
    <img src="images/fastFood_course_meal/12f.png" alt="Grilled Food">
    <div class="nameOfCardAndCost">
      <i style="font-size: 24px;" class="fafafa fa fa-chevron-up "></i>
      <h3>Fruit jelly</h3>
      <p><i class="fa fa-money"> </i> 15000 sum</p>
    </div>
  </div>
  <div class="nameOfMeals-content">
    <img src="images/fastFood_course_meal/13f.png" alt="Grilled Food">
    <div class="nameOfCardAndCost">
      <i style="font-size: 24px;" class="fafafa fa fa-chevron-up "></i>
      <h3><i class="fa fa-money"> </i> Nut cake</h3>
      <p>27000 sum</p>
    </div>
  </div>
  <div class="nameOfMeals-content">
    <img src="images/fastFood_course_meal/14f.png" alt="Grilled Food">
    <div class="nameOfCardAndCost">
      <i style="font-size: 24px;" class="fafafa fa fa-chevron-up "></i>
      <h3>Fruit mixed dessert</h3>
      <p><i class="fa fa-money"> </i> 32000 sum</p>
    </div>
  </div>
</div>


  <div class="footer ">
    <div class="location">
      <div class="location-content">
      <h1>Bellissimo restaurant</h1>
        <p><b>Location : </b>9, Ziyolilar str., M.Ulugbek district, Tashkent city</p>
        <p><b>Phone : </b> +998942881761</p>
        <p><b>Fax : </b> +998942881761</p>
        <p><b>Email : </b><a href=""> dcqanoatovizzat@gmail.com</a></p>
        <p><b>Website : </b><a href="">www.bellissimo.uz</a></p>
      </div>
    </div>
    <div class="location">
      <div class="about">
      <h1>About us</h1>
      <ul>
        <li><a href="">Home</a></li>
        <li><a href="">Contact</a></li>
        <li><a href="">Menu</a></li>
        <li><a href="">Orders</a></li>
        <li><a href="">Guests</a></li>
        <li><a href="">Dishes</a></li>
      </ul>
      <div class="socialWebsite-content">
  <a href="https://www.facebook.com/"><i class="a fa fa-facebook"></i></a>
  <a href="https://twitter.com/"><i class="a fa fa-twitter"></i></a>
  <a href="https://www.youtube.com/"><i class="a fa fa-youtube"></i></a>
  <a href="https://www.instagram.com/"><i class="a fa fa-instagram"></i></a>
  <a href="https://telegram.org/"><i class="a fa fa-telegram"></i></a>
  </div>
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
<script type="text/javascript" src="topnavbar.js">
</script>
<script type="text/javascript" src="popup.js"></script>
<script type="text/javascript">
  $(document).ready(function(){
    $(".nameOfCardAndCost").mouseenter(function(){
      $(".nameOfCardAndCost>p").css("display","block");
    });
    $(".nameOfCardAndCost").mouseleave(function(){
      $(".nameOfCardAndCost>p").css("display","none");
    });
  });
</script>
</body>
</html>