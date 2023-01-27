<!DOCTYPE html>
<html>
<title>Book Centre | Staff</title>
<meta charset="UTF-8">

<?php
if (Session::has('firebaseUserId') && Session::has('idToken')) 
{
    // dd("User masih login.");
} else {
    dd("User sudah logout.");
}
?>

<head>
@include('Staff.navBar')
@include('Staff.homeCss')
</head>

<body style="align-content: center">
<br>
<h1><center>Categories</center></h1>
  <!-- 1st Row -->
<div class="row">
  <div class="column">
  <p><a href="ViewBookCategories.php?value=Comic" type="text" name="Comic" method="POST">
  <img src="assets/Images/Comics.png" alt="Comics" style="width:100%";"></a></p>
  <center>
	<p>Comics</p>
	</center>
  </div>
  <div class="column">
	<center>
	<p><a href="ViewBookCategories.php?value=Arts And Music" type="text" name="Arts And Music" method="POST">
    <img src="assets/Images/ArtsAndMusic.png" alt="ArtsAndMusic" style="width:100%";"></a></p>
	<p>Arts And Music</p>
	</center>
  </div>
  <div class="column">
	<p><a href="ViewBookCategories.php?value=Biographics" type="text" name="Biographics" method="POST">
    <img src="assets/Images/Biographics.png" alt="Biographics" style="width:100%";"></a></p>
	<center>
	<p>Biographics</p>
	</center>
  </div>
  <div class="column">
	<p><a href="ViewBookCategories.php?value=Business" type="text" name="Business" method="POST">
    <img src="assets/Images/Business.png" alt="Business" style="width:100%";"></a></p>
	<center>
	<p>Business</p>
	</center>
  </div>
  <div class="column">
	<p><a href="ViewBookCategories.php?value=Travel" type="text" name="Travel" method="POST">
    <img src="assets/Images/Travel.png" alt="Travel" style="width:100%";"></a></p>
	<center>
	<p>Travel</p>
	</center>
  </div>
</div>


<!-- 2nd Row -->
<div class="row">
  <div class="column">
	<p><a href="ViewBookCategories.php?value=Cooking" type="text" name="Cooking" method="POST">
    <img src="assets/Images/Cooking.jpg" alt="Cooking" style="width:100%";"></a></p>
	<center>
	<p>Cooking</p>
	</center>
  </div>
  <div class="column">
	<p><a href="ViewBookCategories.php?value=Edu And Reference" type="text" name="Edu And Reference" method="POST">
    <img src="assets/Images/EduAndReference.png" alt="EduAndReference" style="width:100%";"></a></p>
	<center>
	<p>Edu & Reference</p>
	</center>
  </div>
  <div class="column">
	<p><a href="ViewBookCategories.php?value=Entertaiment" type="text" name="Entertaiment" method="POST">
    <img src="assets/Images/Entertaiment.png" alt="Entertaiment" style="width:100%";"></a></p>
	<center>
	<p>Entertaiment</p>
	</center>
  </div>
   <div class="column">
	<p><a href="ViewBookCategories.php?value=Health And Fitness" type="text" name="Health And Fitness" method="POST">
    <img src="assets/Images/HealthAndFitness.png" alt="HealthAndFitness" style="width:100%";"></a></p>
	<center>
	<p>Health & Fitness</p>
	</center>
  </div>
  <div class="column">
  	<p><a href="ViewBookCategories.php?value=History" type="text" name="History" method="POST">
    <img src="assets/Images/History.png" alt="History" style="width:100%";"></a></p>
	<center>
	<p>History</p>
	</center>
  </div>
</div>


<!-- 3rd Row -->
<div class="row">
  <div class="column">
  	<p><a href="ViewBookCategories.php?value=Home And Garden" type="text" name="Home And Garden" method="POST">
	<img src="assets/Images/HomeAndGarden.png" alt="HomeAndGarden" style="width:100%";"></a></p>
	<center>
	<p>Home & Garden</p>
	</center>
  </div>
  <div class="column">
	<p><a href="ViewBookCategories.php?value=Horror" type="text" name="Horror" method="POST">
	<img src="assets/Images/Horror.png" alt="Horror" style="width:100%";"></a></p>
	<center>
	<p>Horror</p>
	</center>
  </div>
   <div class="column">
	<p><a href="ViewBookCategories.php?value=Kids" type="text" name="Kids" method="POST">
    <img src="assets/Images/Kids.jpg" alt="Kids" style="width:100%";"></a></p>
	<center>
	<p>Kids</p>
	</center>
  </div>
   <div class="column">
    <p><a href="ViewBookCategories.php?value=Literature And Fiction" type="text" name="Literature And Fiction" method="POST">
    <img src="assets/Images/LiteratureAndFiction.png" alt="LiteratureAndFiction" style="width:100%";"></a></p>
	<center>
	<p>Literature And Fiction</p>
	</center>
  </div>
  <div class="column">
   <p><a href="ViewBookCategories.php?value=Medical" type="text" name="Medical" method="POST">
    <img src="assets/Images/Medical.png" alt="Medical" style="width:100%";"></a></p>
	<center>
	<p>Medical</p>
	</center>
  </div>
</div>


<!-- 4th Row -->
<div class="row">
  <div class="column">
	<p><a href="ViewBookCategories.php?value=Parenting" type="text" name="Parenting" method="POST">
    <img src="assets/Images/Parenting.png" alt="Parenting" style="width:100%";"></a></p>
	<center>
	<p>Parenting</p>
	</center>
  </div>
  <div class="column">
	<p><a href="ViewBookCategories.php?value=Religion" type="text" name="Religion" method="POST">
    <img src="assets/Images/Religion.png" alt="Religion" style="width:100%";"></a></p>
	<center>
	<p>Religion</p>
	</center>
  </div>
  <div class="column">
	<p><a href="ViewBookCategories.php?value=Romance" type="text" name="Romance" method="POST">
    <img src="assets/Images/Romance.png" alt="Romance" style="width:100%";"></a></p>
	<center>
	<p>Romance</p>
	</center>
  </div>
  <div class="column">
	<p><a href="ViewBookCategories.php?value=Sci-fi And Fantasy" type="text" name="Sci-fi And Fantasy" method="POST">
    <img src="assets/Images/Sci-fiAndFantasy.png" alt="Sci-fiAndFantasy" style="width:100%";"></a></p>
	<center>
	<p>Sci-fi And Fantasy</p>
	</center>
  </div>
  <div class="column">
	<p><a href="ViewBookCategories.php?value=Science And Math" type="text" name="Science And Math" method="POST">
    <img src="assets/Images/ScienceAndMath.png" alt="ScienceAndMath" style="width:100%";"></a></p>
	<center>
	<p>Science And Math</p>
	</center>
  </div>
</div>

<!-- 6th Row -->
<div class="row">
  <div class="column">
	<p><a href="ViewBookCategories.php?value=Sport" type="text" name="Sport" method="POST">
    <img src="assets/Images/Sport.png" alt="Sport" style="width:100%";"></a></p>
	<center>
	<p>Sport</p>
	</center>
  </div>
  <div class="column">
	<p><a href="ViewBookCategories.php?value=Computer And Tech" type="text" name="Computer And Tech" method="POST">
    <img src="assets/Images/ComputerAndTech.jpg" alt="ComputerAndTech" style="width:100%";"></a></p>
	<center>
	<p>Computer & Tech</p>
	</center>
  </div>
  <div class="column">
    <p><a href="ViewBookCategories.php?value=Hobbies And Craft" type="text" name="Hobbies And Crafts" method="POST">
    <img src="assets/Images/HobbiesAndCrafts.jfif" alt="HobbiesAndCrafts" style="width:100%";"></a></p>
    <center>
    <p>Hobbies & Crafts</p>
    </center>
    </div>
    <div class="column">
        <p><a href="ViewBookCategories.php?value=Mysteries" type="text" name="Mysteries" method="POST">
        <img src="assets/Images/Mysteries.png" alt="Mysteries" style="width:100%";"></a></p>
        <center>
        <p>Mysteries</p>
        </center>
    </div>
    <div class="column">
        <p><a href="ViewBookCategories.php?value=Self-help" type="text" name="Self-help" method="POST">
        <img src="assets/Images/SelfHelp.jpg" alt="Self-Help" style="width:100%";"></a></p>
        <center>
        <p>Self-Help</p>
        </center>
      </div>
</div>
<br><br>


  
  
  <!----------------------------- Contact Form------------------------->

  </div>


<tr>
<br><br><br>
</body>
</html>