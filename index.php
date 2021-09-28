<?php
include('connection.php');
$sub = "SELECT * FROM `subscribers`";
$subscriber = Mysqli_query($conn,$sub);
$sub_count = Mysqli_num_rows($subscriber);

$food = Mysqli_query($conn,"SELECT * FROM `food`");
$food_count = Mysqli_num_rows($food);

$workers = Mysqli_query($conn,"SELECT * FROM `workers`");
$workers_count = Mysqli_num_rows($workers);
if(isset($_POST['subscribe_btn']))
{
	$email = $_POST['email'];
	if(!empty($email)){
	$sql= "INSERT INTO `Subscribers`(`Email`)VALUES('".$email."')";
	$execute = Mysqli_query($conn,$sql);
	if($execute)
	{
		echo "<script>alert('You subscribe successfully');</script>";
	}
	else
	{
		echo "<script>alert('There was an error try again');</script>";
	}
}
else{
		echo "<script>alert('Enter your email');</script>";
}

}
if(isset($_POST['request']))
{
	$names    = $_POST['names'];
	$category = $_POST['category'];
	$date     = $_POST['date'];
	$time     = $_POST['time'];
	$confirmation = rand(10000000000,90000000000);
	if(!empty($names) && !empty($category) && !empty($date) && !empty($time)){
		$sql= "INSERT INTO `request` (`Names`, `Table_category`, `Date`, `Time`, `Confirmation`) VALUES ('".$names."', '".$category."', '".$date."', '".$time."', '".$confirmation."');";
		$execute = Mysqli_query($conn,$sql);
		if($execute)
		{
			echo "<script>alert('Your reservation accepted confirmation:{$confirmation}');</script>";
		}
		else
		{
			echo "<script>alert('There was an error try again');</script>";
		}
	}
	else{
			echo "<script>alert('To make reservation all field required');</script>";
	}
}
?>
<!DOCTYPE HTML>
<!--
	Aesthetic by gettemplates.co
	Twitter: http://twitter.com/gettemplateco
	URL: http://gettemplates.co
-->
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Irezon homepage</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free PHP Web based application by Irezon.com" />
	<meta name="keywords" content="This is free web based application developed by Shema adelite email:shemani2011@gmail.com" />
  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Themify Icons-->
	<link rel="stylesheet" href="css/themify-icons.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">

	<!-- Bootstrap DateTimePicker -->
	<link rel="stylesheet" href="css/bootstrap-datetimepicker.min.css">

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
		
	<div class="gtco-loader"></div>
	
	<div id="page">
	<!-- <div class="page-inner"> -->
	<nav class="gtco-nav" role="navigation">
		<div class="gtco-container">
			
			<div class="row">
				<div class="col-sm-4 col-xs-12">
					<div id="gtco-logo"><a href="index.php"><img src="images/irezon.png" style="width:80px; height:80px;"></a></div>
				</div>
				<div class="col-xs-8 text-right menu-1">
					<ul>
						<li><a href="index.php" style="color:#FBB448;">Home</a></li>
						<li><a href="menu.php">Menu</a></li>
						<li><a href="contact.php">Contact</a></li>
						<li><a href="login.php">Admin</a></li>
						<li class="btn-cta"><a href="index.php"><span>Reservation</span></a></li>
					</ul>	
				</div>
			</div>
			
		</div>
	</nav>
	
	<header id="gtco-header" class="gtco-cover gtco-cover-md" role="banner" style="background-image: url(images/img_bg_1.jpg)" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-12 col-md-offset-0 text-left">
					

					<div class="row row-mt-15em">
						<div class="col-md-7 mt-text animate-box" data-animate-effect="fadeInUp">
							<span class="intro-text-small">Project by <a href="https://irezon.com/" target="_blank">Irezon.com</a></span>
							<h1 class="cursive-font">All in good taste!</h1>	
						</div>
						<div class="col-md-4 col-md-push-1 animate-box" data-animate-effect="fadeInRight">
							<div class="form-wrap">
								<div class="tab">
									
									<div class="tab-content">
										<div class="tab-content-inner active" data-content="signup">
											<h3 class="cursive-font">Table Reservation</h3>
											<form method="POST" action="index.php">
											<div class="row form-group">
													<div class="col-md-12">
														<label for="date-start">Names</label>
														<input type="text" id="activities" name="names" class="form-control">
													</div>
												</div>
												<div class="row form-group">
												
													<div class="col-md-12">
														<label for="activities">Table category</label>
														<select id="activities" name="category" class="form-control" style="color:black;">
															<option value="Person">Persons</option>
															<option value="Meeting">Meeting</option>
														</select>
													</div>
												</div>
												<div class="row form-group">
													<div class="col-md-12">
														<label for="date-start">Date</label>
														<input type="text" id="date" name="date" class="form-control">
													</div>
												</div>
												<div class="row form-group">
													<div class="col-md-12">
														<label for="date-start">Time</label>
														<input type="text" id="time" name="time" class="form-control">
													</div>
												</div>

												<div class="row form-group">
													<div class="col-md-12">
														<input type="submit" class="btn btn-primary btn-block" name="request" value="Reserve Now">
													</div>
												</div>
											</form>	
										</div>

										
									</div>
								</div>
							</div>
						</div>
					</div>
							
					
				</div>
			</div>
		</div>
	</header>

	
	
	<div class="gtco-section">
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center gtco-heading">
					<h2 class="cursive-font primary-color">Popular Dishes</h2>
				</div>
			</div>
			<div class="row">
				<?php
					$sql = Mysqli_query($conn ,"SELECT * FROM `food` LIMIT 3");
					while($row = Mysqli_fetch_array($sql)){
						echo'<div class="col-lg-4 col-md-4 col-sm-6">';
						echo'<a href="images/'.$row["Image"].'" class="fh5co-card-item image-popup">';
						echo'<figure>';
						echo'<div class="overlay"><i class="ti-plus"></i></div>';
						echo'<img src="images/'.$row["Image"].'" alt="Image" class="img-responsive">';
						echo'</figure>';
						echo'<div class="fh5co-text">';
						echo'<h2>'.$row["Name"].'</h2>';
						echo'<p>'.$row["Description"].'</p>';
						echo'<p><span class="price cursive-font">'.$row["Price"].'$</span></p>';
						echo'</div>';
						echo'</a>';
						echo'</div>';
					}
				?>
			</div>
		</div>
	</div>
	
	<div id="gtco-features">
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center gtco-heading animate-box">
					<h2 class="cursive-font">Our Services</h2>
					<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4 col-sm-6">
					<div class="feature-center animate-box" data-animate-effect="fadeIn">
						<span class="icon">
							<i class="ti-face-smile"></i>
						</span>
						<h3>Happy People</h3>
					</div>
				</div>
				<div class="col-md-4 col-sm-6">
					<div class="feature-center animate-box" data-animate-effect="fadeIn">
						<span class="icon">
							<i class="ti-thought"></i>
						</span>
						<h3>Creative Culinary</h3>
					</div>
				</div>
				<div class="col-md-4 col-sm-6">
					<div class="feature-center animate-box" data-animate-effect="fadeIn">
						<span class="icon">
							<i class="ti-truck"></i>
						</span>
						<h3>Food Delivery</h3>
					</div>
				</div>
				

			</div>
		</div>
	</div>


	<div class="gtco-cover gtco-cover-sm" style="background-image: url(images/img_bg_1.jpg)"  data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="gtco-container text-center">
			<div class="display-t">
				<div class="display-tc">
					<h1>&ldquo; Their high quality of service makes me back over and over again!&rdquo;</h1>
				</div>	
			</div>
		</div>
	</div>

	<div id="gtco-counter" class="gtco-section">
		<div class="gtco-container">

			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center gtco-heading animate-box">
					<h2 class="cursive-font primary-color">Fun Facts</h2>
				</div>
			</div>

			<div class="row">
				
				<div class="col-md-3 col-sm-6 animate-box" data-animate-effect="fadeInUp">
					<div class="feature-center">
						<span class="counter js-counter" data-from="0" data-to="
						<?php
							echo $sub_count;
						?>" data-speed="5000" data-refresh-interval="50">1</span>
						<span class="counter-label">Subscribers</span>

					</div>
				</div>
				<div class="col-md-3 col-sm-6 animate-box" data-animate-effect="fadeInUp">
					<div class="feature-center">
						<span class="counter js-counter" data-from="0" data-to="
							<?php
							echo $food_count;
							?>"
						" data-speed="5000" data-refresh-interval="50">1</span>
						<span class="counter-label">Food Types</span>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 animate-box" data-animate-effect="fadeInUp">
					<div class="feature-center">
						<span class="counter js-counter" data-from="0" data-to="
							<?php
							echo $workers_count;
							?>"
						" data-speed="5000" data-refresh-interval="50">1</span>
						<span class="counter-label">Chef Cook</span>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 animate-box" data-animate-effect="fadeInUp">
					<div class="feature-center">
						<span class="counter js-counter" data-from="0" data-to="2019" data-speed="5000" data-refresh-interval="50">1</span>
						<span class="counter-label">Year Started</span>

					</div>
				</div>
					
			</div>
		</div>
	</div>

	

	<div id="gtco-subscribe">
		<div class="gtco-container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center gtco-heading">
					<h2 class="cursive-font">Subscribe</h2>
					<p>Be the first to know about the new templates.</p>
				</div>
			</div>
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2">
					<form class="form-inline" method="POST" action="index.php">
						<div class="col-md-6 col-sm-6">
							<div class="form-group">
								<label for="email" class="sr-only">Email</label>
								<input type="email" class="form-control" id="email" name="email" placeholder="Your Email">
							</div>
						</div>
						<div class="col-md-6 col-sm-6">
							<button type="submit" class="btn btn-default btn-block" name="subscribe_btn">Subscribe</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

	<footer id="gtco-footer" role="contentinfo" style="background-image: url(images/img_bg_1.jpg)" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="gtco-container">
			<div class="row row-pb-md">

				

				
				<div class="col-md-12 text-center">
					<div class="gtco-widget">
						<h3>Get Social</h3>
						<ul class="gtco-social-icons">
							<li><a href="#"><i class="icon-twitter"></i></a></li>
							<li><a href="#"><i class="icon-facebook"></i></a></li>
							<li><a href="https://www.instagram.com/irezonworld/?hl=en"><i class="icon-instagram"></i></a></li>
						</ul>
					</div>
				</div>

				<div class="col-md-12 text-center copyright">
					<p><small class="block">&copy; 2019 All Rights Reserved.</small> 
						<small class="block">Designed by <a href="https://irezon.com/" target="_blank"><img src="images/irezon.png" style="width:25px; height:25px;">&nbsp;Irezon.com</a></small></p>
				</div>

			</div>

			

		</div>
	</footer>
	<!-- </div> -->

	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- countTo -->
	<script src="js/jquery.countTo.js"></script>

	<!-- Stellar Parallax -->
	<script src="js/jquery.stellar.min.js"></script>

	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	
	<script src="js/moment.min.js"></script>
	<script src="js/bootstrap-datetimepicker.min.js"></script>


	<!-- Main -->
	<script src="js/main.js"></script>

	</body>
</html>

