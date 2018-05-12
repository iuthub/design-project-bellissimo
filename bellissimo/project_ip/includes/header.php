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
  <a href="ip_project.html">
  <img id="logo2" src="b73983b5-b9be-4572-a82d-fbbe4c15526f.png">
    <img src="barbecue1.png" alt="Bellissimo-Restaurant name">
  </a>
 </div>
<div class="topnav" id="myTopnav">
  <a href="#home" class="active">Home</a>
  <a href="#news">News</a>
  <a href="#contact">Contact</a>
  <div class="dropdown">
  <button class="dropbtn">Menu<i id="caret-down" class="fa fa-caret-down"></i></button> 
  <div class="dropdown-content">
    <a href="ip_project_2_first_course_meal.html"><i class="fa fa-cutlery"> First course & Starter</i></a>
    <a href="ip_project_2_second_course_meal.html"><i class="fa fa-cutlery"> Second course</i></a>
    <a href="ip_project_2_dessert_course_meal.html"><i class="fa fa-birthday-cake"></i> Dessert</a>
    <a href="ip_project_2_drinks_course_meal.html"><i class="fa fa-beer"> Drinks</i></a>
    <a href="ip_project_2_fastFood_course_meal.html">Fast Food</a>
    <a href="ip_project_2_vegan_course_meal.html">Vegan</a>
  </div>
  </div> 
  <a href="#about">About</a>
  
  <!-- when sign button is pressed, the pop up window opens up -->
  <a onclick="document.getElementById('popup').style.display='block'" class="right-sign">Log in</a>

<!-- registration popup -->
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
</div>


