<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        ?>
        <!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inconsolata">
<style>
body, html {
  height: 100%;
  font-family: "Inconsolata", sans-serif;
}

.bgimg {
  background-position: center;
  background-size: cover;
  background-image: url("images/coffee.jpg");
  min-height: 85%;
  
}

.bg-text {
  color: lightgrey;
  font-weight: bold;
  text-align: center;
}

.menu {
  display: none;
}

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 40px;
  text-decoration: none;
  font-size: 20px;
  font-weight: bold;
 }
 
 .topnav ul{
     list-style: none;
     padding: 0;
     margin: 0;
 }
 .topnav li{
     display: inline-block;
 }

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #04AA6D;
  color: white;
}

.container {
    position: absolute;
    top: 79%;
    left: 15%;
    transform: translate(-50%, -50%);
    z-index: 2;
    width: 20%;
    padding: 12px;
    text-align: center;
    background-color: grey;
    font-weight: bold;
    
}

.container1 {
    position: absolute;
    top: 79%;
    left: 80%;
    transform: translate(-50%, -50%);
    z-index: 2;
    width: 20%;
    padding: 12px;
    text-align: center;
    background-color: grey;
    font-weight: bold;
    
}

.container2 {
    width: 100%;
    height: 70%;
    padding: 12px;
    text-align: center;
    background-color: whitesmoke;
    font-weight: bold;
    
}

.container3{
    width: 20%;
    padding: 16px 40px;
    text-align: center;
    background-color: black;
    color: white;
    font-weight: bold;
    width: 20%;
}

.container4{
   float: left; 
}
.column {
  float: left;
  width: 25.25%;
  padding: 5px;
}

.column1 {
  float: right;
  width: 53.33%;
  padding: 5px;
}

</style>
</head>
<body>
  <div class="bgimg">
      
   <!--<div class="bg-text">
  <h1 style="font-size:60px">WELCOME</h1>
</div>--->
      <div class="topnav">
          <ul>
          <li><a href="#" >HOME</a></li>
          <li><a href="#about">ABOUT</a></li>
          <li><a href="#menu" >MENU</a></li>
          </ul>
      </div>
      <div class="container">
    <span class="tag">OPEN FROM 6AM TO 5PM</span>
  </div>
  </div>
  
  <div class="container1">
    <span class="w3-text-white">15 Adr street, 5015</span>
  </div>
</header>

<!-- Add a background color and large text to the whole page -->
<div class="w3-sand w3-grayscale w3-large">

<!-- About Container -->
<div class="container2" id="about">
  <div class="container2" style="width: 100%;">
      <center> <div class="container3">
          <h5 span class="tag">ABOUT THE CAFE</span></h5>
          </div></center>
    <p>The Cafe was founded in 1987 by Mr. sharma in Bombay</p>
    <p>We are committed to serving you fresh, delicious coffee that has been sourced ethically and sustainably. We believe that our passion for perfecting 
        brews joins our eye for detail to create an absolutely delightful cup of coffee every time.</p>
    <div class="container2">
      <p><i>We have 90+ cafes in 6 cities across India. That means there’s always a great cup of coffee brewing in your neighbourhood. Our cafes are warm
              and inclusive spaces, buzzing with big ideas, bright conversations and the best coffee.</i></p>
      <p>Chef, Coffeeist and Owner:Mr. ANAND </p>
    </div>
    <img src="images/c2.jpg" style="width:100%;max-width:1000px" class="container2">
    <p><strong>Opening hours:</strong> everyday from 6am to 5pm.</p>
    <p><strong>Address:</strong> 15 Adr street, 5015, NY</p>
  </div>
</div>


<div class="container4" id="menu">
  <div class="container4" style="max-width:700px">
        
      <center> <div class="container3">
    <h5 span class="tag">MENU</span></h5>
          </div></center>
  
    <div class="w3-row w3-center w3-card w3-padding">
      <a href="javascript:void(0)" onclick="openMenu(event, 'Eat');" id="myLink">
        <div class="w3-col s6 tablink">Eat</div>
      </a>
      <a href="javascript:void(0)" onclick="openMenu(event, 'Drinks');">
        <div class="w3-col s6 tablink">Drink</div>
      </a>
    </div>

    <div id="Eat" class="w3-container menu w3-padding-48 w3-card">
      <h5>Cakes</h5>
      <p class="bg-text">Chocolate, Black Forest, Honey Cake 500</p><br>
    
      <h5>Honey Almond Granola with Fruits</h5>
      <p class="bg-text">Natural cereal of honey toasted oats, raisins, almonds and dates 700</p><br>
    
      <h5>Belgian Waffle</h5>
      <p class="bg-text">Vanilla flavored batter with malted flour 750</p><br>
    
      <h5>Scrambled eggs</h5>
      <p class="bg-text">Scrambled eggs, roasted red pepper and garlic, with green onions 750</p><br>
    
      <h5>Blueberry Pancakes</h5>
      <p class="bg-text">With syrup, butter and lots of berries 850</p>
    </div>

    <div id="Drinks" class="w3-container menu w3-padding-48 w3-card">
      <h5>Coffee</h5>
      <p class="bg-text">Regular coffee, Cold Coffee, Espresso, Double Espresso, Macchiato, Cappuccino 50</p><br>
    
      <h5>Chocolate</h5>
      <p class="bg-text">Chocolate espresso with milk, Milk Shakes, Smoothies 150</p><br>
    
    
      <h5>Ice tea</h5>
      <p class="bg-text">Hot tea, except not hot, Cold Tea 200</p><br>
    
      <h5>Soda</h5>
      <p class="bg-text">Coke, Sprite, thumbsup, Myrinda, Mazza etc. 100</p>
      
      <h5>Juices</h5>
      <p class="bg-text">Mango, Dragon Fruit, Pomegranate, Raspberry etc. 100</p>
    </div> 
      
       </div>
  <div class="column">
    <div class="w3-row w3-center w3-card w3-padding">
    <img src="images/c3.jpg" style="width:150%;max-width:1000px;">
    </div>
      
      <div class="column1"
    <div class="w3-row w3-center w3-card w3-padding">
    <img src="images/c4.jpg" style="width:150%;max-width:1000px;">
    </div>  
             
      
  </div>
</div>

</div>



<script>
// Tabbed Menu
function openMenu(evt, menuName) {
  var i, x, tablinks;
  x = document.getElementsByClassName("menu");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < x.length; i++) {
    tablinks[i].className = tablinks[i].className.replace("bg-text", "");
  }
  document.getElementById(menuName).style.display = "block";
  evt.currentTarget.firstElementChild.className += " bg-text";
}
document.getElementById("myLink").click();
</script>

</body>
</html>
   
