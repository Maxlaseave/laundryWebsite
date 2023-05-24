<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
	<link rel="stylesheet" href="css/slanding.css">

</head>
<body>
<nav class="navbar fixed-top navcolor navbar-expand-sm">
	<div class="container">
		<a class="navbar-brand item" href="#" style="font-size:20px;">
			<img src="img/pashlogo.png"  width="50" height="45">
			<strong>PashPash</strong> 
		</a>
		

		<ul class="navbar-nav ml-auto">
            <li class="nav-item item">
                <a class="nav-link" href="#">
                  Home
                </a>
            </li>
            <li class="nav-item item">
                <a class="nav-link" href="#about">
                  About
                </a>
            </li>
            <li class="nav-item item">
                <a class="nav-link" href="#services">
                  Services
                </a>
            </li>
			<li class="nav-item item">
                <a class="nav-link" href="customer/userLogin.php">
                  Log in
                </a>
            </li>
            <li class="nav-item item">
                <a class="nav-link" href="customer/userSignup.php">
                  Sign up
                </a>
            </li>
        </ul>
  </div>
</nav>

<!--div class="container slogan">
	<h1>FOR FAST & <br>AFFORDABLE<span class="y"><br>LAUNDRY</span></h1>
	<h3>Open at 9:00am - 8:00pm</h3>

</div>

<place image code for pic beside slogan here-->

<div class="container-fluid pic"><img src="img\laundry.png" width="101%" height="890" style="margin-top:100px;">
</div>
<div class="container-fluid about" id="about">

	<div class="container-md text-center">
		<h2>ABOUT</h2>

	</div>

	<div class="container-sm text-center">
	<p>Welcome to our laundry website, PashPash! We are a professional laundry service provider dedicated to providing you with top-quality laundry solutions that fit your needs. With years of experience in the laundry industry, we understand the importance of having clean and fresh clothes that make you feel confident and comfortable. 
		<br><br>Our team of skilled professionals uses advanced technology and eco-friendly detergents to ensure that your clothes are thoroughly cleaned, sanitized, and carefully handled. We offer a range of services, including washing, drying, ironing, and folding, all tailored to meet your specific requirements. 
		<br><br>Our commitment to customer satisfaction is at the forefront of everything we do, and we strive to exceed your expectations every time. So whether you are a busy professional, a student, or a family, we have a laundry solution that suits you. Trust us to take care of your laundry needs, so you can focus on the things that matter most to you. Contact us today to schedule an appointment for self-service or drop off!
	</p>

	</div>
	

</div>

<div class="container-fluid services" id="services">

	<div class="container-md text-center">
		<h2>THE SERVICES WE OFFER:</h2>

	</div>

	<!--place icons here-->
	<div class="container box-center">
		<div class="row">
			<div class="col-2"></div>
			<div class="col serv" >
			<img src="img\_dropoff.png"  >
			</div>
			<div class="col serv">
			<img src="img\_selfservice.png" >
			</div>
			<div class="col-2"></div>
		</div>
	</div>

	<div>
		<img src="../img/laundry-man.png" alt="">
	</div>


	

</div>

<footer class="container-fluid"><p>Copyright &#169;2023</p></footer>

<script src="bootstrap/js/bootstrap.js"></script>
</body>
</html>