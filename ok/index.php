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
<section class="header">
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
	<div class="text1">
		<h1>India's Biggest University</h1>
		<p>VIT-AP offers distinctive education through its Undergraduate, Postgraduate and Ph. D Programmes.</p>
		<a href="https://vitap.ac.in/facilitieslist/" class="btn1">Click To Know More</a>

	</div>

</section>


<!--------Course-------->

<section class="course">
	<h1>Courses We Offer</h1>
	<p>VIT-AP offers distinctive education through its undergraduate, postgraduate and PhD programmes.</p>

	<div class="row">
		<div class="course-col">
			<h3>VIT-AP School of<br>Computer Science and Engineering</h3>
			<p>
				
				B.Tech.CSE<br><br>B.Tech.Business Systems<br><br>M.Tech(5year integrated)

			</p>
		</div>
		<div class="course-col">
			<h3>VIT-AP School of<br>Electronics Engineering</h3>
			<p>
					B.Tech.ECE<br><br>M.Tech.VLSI(2 years)
			</p>
		</div>
		<div class="course-col">
			<h3>VIT-AP School of<br>Business</h3>
			<p class="a">
					BBA<br><br>B.Com.(Finance)
			</p>
		</div>
		<div class="course-col">
			<h3>VIT-AP School of<br>Law</h3>
			<p>
					BA LL.B(Hons)<br><br>BBA LL.B(Hons)<br><br>Ph.D Law
			</p>
		</div>
		<div class="course-col">
			<h3>VIT-AP School of<br>Mechanical Engineering</h3>
			<p>
					B.Tech.Mechanical
			</p>
		</div>
		
	</div>


</section>


<!------------- campuses --------------->

<section class="campus">
	<h1>Our Campuses</h1>
	<p>Vellore Institute of Technology is a private deemed university had four campuses located at Vellore, Chennai, Bhopal and Amaravati.</p>
	<div class="row">
		<div class="campus-col">
			<img src="images/vellore.png">
			<div class="layer">
				<h3>VELLORE</h3>
			</div>
		</div>
		<div class="campus-col">
			<img src="images/chennai.png">
			<div class="layer">
				<h3>CHENNAI</h3>
			</div>
		</div>
		<div class="campus-col">
			<img src="images/bhopal3.png">
			<div class="layer">
				<h3>BHOPAL</h3>
			</div>
		</div>
	</div>
</section>




<!-----------Facilities----------->

<section class="facilities">
	<h1>Our Facilities</h1>
	<p>At VIT-AP, with our dedication towards excellence in academics, we believe in a holistic development of our students.<br>The students are provided numerous superior facilities which are in line with global educational standards.</p>

	<div class="row">
		<div class="facilities-col">
			<img src="https://vitap.ac.in/wp-content/gallery/library/dynamic/library2.jpg-nggid03503-ngg0dyn-240x160x100-00f0w010c011r110f110r010t010.jpg">
			<h3>Library</h3>
			<p>The VIT-AP University library a technology driven, user centric, innovative platform for the academic community which with the motto “Apply Knowledge and Improve life”.</p>
		</div>
		<div class="facilities-col">
			<img src="https://vitap.ac.in/wp-content/uploads/2021/07/Cafeteria.jpg">
			<h3>Cafeteria</h3>
			<p>Each laboratory is well-equipped to serve the requirements of the respective programmes. With state-of-the-art facilities, the laboratories are a place for the students to practise, experiment, and innovate.</p>
		</div>
		<div class="facilities-col">
			<img src="https://vitap.ac.in/wp-content/uploads/2021/07/lab1.jpg">
			<h3>Labs</h3>
			<p>From quick bites between classes to full meals, the cafeteria serves a wide array of good and hygienic food to all the members.</p>
		</div>
	</div>
</section>



<!----------- Testimonals -------->

<section class="testimonals">
	<h1>What Our Students Says</h1>
	<p></p>
	<div class="row">
		<div class="testimonal-col">
			<img src="https://vitap.ac.in/wp-content/uploads/2021/07/Library.jpg">
			<div>			
				<p>I am in first year of b.tech in cse in vit-ap. It is a wonderful college.I joined mvgr by listening its name and fame later i found that it is 100% true.Each and every faculty interacts with students they guide us and they make us to learn the concept rather than by heart ing the content.and we have given enough freedom in the campus.and each student is carefully observed by the faculty.</p>
			    <h3>Swathi Ramaswamy</h3>
			    <i class="fas fa-star"></i>
			    <i class="fas fa-star"></i>
			    <i class="fas fa-star"></i>
			    <i class="fas fa-star"></i>
			    <i class="far fa-star"></i>
		    </div>
	     </div>
	     <div class="testimonal-col">
			<img src="https://vitap.ac.in/wp-content/gallery/library/dynamic/library4.jpg-nggid03505-ngg0dyn-240x160x100-00f0w010c011r110f110r010t010.jpg">
			<div>			
				<p>The best college if you are a need and can get your insecurities ruled by your teachers, but if you really are cared about your life why don't you choose vit-ap.The college very gud in academic schedule,though it is lagging in cultural and extra-curricular activities,it is still best for its placements and quality of faculty members.</p>
			    <h3>J.Harish</h3>
			    <i class="fas fa-star"></i>
			    <i class="fas fa-star"></i>
			    <i class="fas fa-star"></i>
			    <i class="fas fa-star-half-alt"></i>
			    <i class="far fa-star"></i>
		    </div>
	     </div>
	     <div class="testimonal-col">
			<img src="https://vitap.ac.in/wp-content/gallery/labs-at-vit-ap/dynamic/ECElab.jpg-nggid03477-ngg0dyn-240x160x100-00f0w010c011r110f110r010t010.jpg">
			<div>			
				<p>The university is good in maintaining labs with good equipment and there will be lot more different types of activities conducted on Saturday to encourage students.</p>
			    <h3>Popuri Naveen</h3>
			    <i class="fas fa-star"></i>
			    <i class="fas fa-star"></i>
			    <i class="fas fa-star"></i>
			    <i class="fas fa-star"></i>
			    <i class="fas fa-star-half-alt"></i>
		    </div>
	     </div>
	</div>
</section>


<!-------------  Call to Action --------->

<section class="cta">
	<h1>Visit Our Campus For More Information</h1>
	<a href="" class="btn1">CONTACT US</a>
	

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