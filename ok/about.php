<?php
session_start();
require 'connect.php';

?>
<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>VIT-AP</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Yaldevi:wght@300;400;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
	
</head>
<body>
<section class="sub-header">
	<nav>
    <a href="index.php"><img src="images/logo2.png"></a>
		 <div class ="nav-links" id="navLinks">
		 	<i class="fa fa-times" onclick="hideMenu()"></i>
		 	<ul>
		 		<li><a href="index.php">HOME</a></li>
		 		<li><a href="about.php">ABOUT</a></li>
		 		<li><a href="careers.php">CAREERS</a></li>
		 		<li><a href="advantage.php">ADVANTAGES</a></li>
		 		<li><a href="contact.php">CONTACT</a></li>

		 	</ul>


		 </div>
		 <i class="fa fa-bars" onclick="showMenu()"></i>

	</nav>
	<h1>About Us</h1>

</section>

<!---------- About Us Content ----->

<section class="about-us">
	<div class="row">
		<div class="about-col">
			<h1>We are the India's Largest University</h1>
			<p>
				With a history of 32 years of innovation in educational and research domain, VIT  has been a forerunner in delivering quality education. Consistently ranked among the top educational institutes in the country, the VIT group of institutions have had a proud tradition of pursuing knowledge and excellence. In keeping with this tradition,  the leadership at VIT-AP resonates a dynamic blend of academic initiative and industry partnership with a vision of creating one of the finest academic destinations in the world.  The VIT-AP campus, which is poised to become one of the country’s best campuses, offers several avenues to explore your interests, identify core competencies, and engage in an evolving lifecycle of education and growth. It is a place where students are offered immense opportunities to learn, practice, grow, and thrive, autonomous learning is encouraged in order to enable students to chart their own course, students carry out hands on experiments related to programme content in the form of Engineering Clinics, industrial and international exposure is provided and overall personality development is ensured through sports, clubs and chapters, and cultural activities.	
			</p>
			<a href="" class="btn1 red">EXPLORE NOW</a>

		</div>
		<div class="about-col">
			<img src="https://images.shiksha.com/mediadata/images/1580803648phpjwUZRm.jpeg">
			
		</div>

	</div>

</section>



<!------- Footer -------->
<section class="footer">
	<h4>About Us</h4>
	<p>With a history of 32 years of innovation in educational and research domain, VIT  has been a forerunner in delivering quality education.<br>Consistently ranked among the top educational institutes in the country, the VIT group of institutions have had a proud tradition of pursuing knowledge and excellence.</p>
	<div class="icons">
		<i class="fab fa-facebook"></i>
		<i class="fab fa-instagram"></i>
		<i class="fab fa-twitter"></i>
		<i class="fab fa-linkedin-in"></i>
	</div>
	<p>Made by VIT-AP Students</p>


</section>

<!----------JavaScript Menu-------->
<script>
	var navLinks = document.getElementById("navLinks");
	function showMenu(){
		navLinks.style.right = "0";
	}
	function hideMenu(){
		navLinks.style.right = "-200px";
	}



</script>

</body>
</html>