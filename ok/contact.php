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
	<h1>Contact Us</h1>
</section>

<!---------- Contact Us------------->

<section class="location">
	<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15302.360615805013!2d80.5006676!3d16.4962777!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x1490eacd54859850!2sVIT%20AP%20CAMPUS!5e0!3m2!1sen!2sin!4v1633788120331!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
</section>
<section class="contact-us">
	<div class="row">
		<div class="contact-col">
			<div>
				<i class="fa fa-home"></i>
				<span>
					<h5>G-30, Inavolu, Beside AP Secretariat</h5>
					<p>Amaravati, Andhra Pradesh, India</p>
				</span>
			</div>
			<div>
				<i class="fa fa-phone"></i>
				<span>
					<h5>0863 237 0444</h5>
					<p>Contact Us for more information</p>
				</span>
			</div>
			<div>
				<i class="fas fa-envelope"></i>
				<span>
					<h5>admission@vitap.ac.in</h5>
					<p>Email us your query</p>
				</span>
			</div>
			
		</div>


        <form class="form-horizontal" action="contact.php" method="POST" enctype="multipart/form-data">
		<div class="contact-col">
				<input type="text" name="name" placeholder="Enter your name" required>
				<input type="email" name="email" placeholder="Enter email address" required>
				<input type="text" name="subject" placeholder="Enter your subject" required>
				<textarea rows="8" name="message" placeholder="Message" required></textarea>
				<button type="submit" class="btn1 red" name="sub">Send Message</button>
				
			</form>


		</div>
	</div>
	

</section>


<?php
if(isset($_POST['sub'])){
  $name=mysqli_real_escape_string($con,$_POST['name']);
	$email=mysqli_real_escape_string($con,$_POST['email']);
	$subject=mysqli_real_escape_string($con,$_POST['subject']);
  $message=mysqli_real_escape_string($con,$_POST['message']);
  

  if($name==''&& $email==''&& $subject=='' && $message==''){
		echo"<script>alert('please fill all field')</script>";
      echo"<script>window.open('contact.php','_self')</script>";
		exit();
	}
  else{

		$insert="INSERT INTO `user` (`id`, `name`, `email`, `subject`, `message`) 
    VALUES (NULL, '$name', '$email', '$subject', '$message');";
		$run_insert=mysqli_query($con,$insert);
		if($run_insert){
			echo"<script>alert('MESSAGE SENT')</script>";
      echo"<script>window.open('contact.php','_self')</script>";


		}
}}
?>




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