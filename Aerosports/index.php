<?php
if(isset($_POST["submit"])){
// Checking For Blank Fields..
if($_POST["name"]==""||$_POST["email"]==""||$_POST["phone_number"]==""||$_POST["message"]==""){
echo "Fill All Fields..";
}else{
// Check if the "Sender's Email" input field is filled out
$email=$_POST['email'];
// Sanitize E-mail Address
$email =filter_var($email, FILTER_SANITIZE_EMAIL);
// Validate E-mail Address
$email= filter_var($email, FILTER_VALIDATE_EMAIL);
if (!$email){
echo "Invalid Sender's Email";
}
else{
	
$email=$_POST['email'];	
$phone_number = $_POST['phone_number'];
$message = $_POST['message'];
$headers = 'From:'. $email . "rn"; // Sender's Email
$headers .= 'Cc:'. $email . "rn"; // Carbon copy to Sender
// Message lines should not exceed 70 characters (PHP rule), so wrap it
$message = wordwrap($message, 70);
// Send Mail By PHP Mail Function
mail("aerosportstelangana@gmail.com", $email, $phone_number, $message, $headers);
echo "Your mail has been sent successfuly ! Thank you for your feedback";

}
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Telangana Aerosports Association</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<meta name = "keywords" content="Paragliding, Paramotors, Flower Dropping, Aerial Advertising, Aerial Branding, Joy Rides, telangana aerosports, telangana aerosports association " />
<meta name = "description" content = "Aerosports is one of the growing sports in the world of flying. The youngsters have taken to the sports in a big way which is both challenging and exciting. There is nothing in the world of sports to beat the feeling of soaring high up in the sky and experience the thrill of gliding over the landscape below." />
<meta name = "author" content = "telanganaaerosports.com" />
<meta http-equiv = "Content-Type" content = "text/html; charset = UTF-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link href="images/icon.png" rel="shortcut icon" />
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!--// bootstrap-css -->
<!-- css -->
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
<link href="css/jQuery.lightninBox.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" property="" />
<!-- animation -->
<link href="css/aos.css" rel="stylesheet" type="text/css" media="all" /><!-- //animation effects-css-->
<!-- //animation -->
<!--// css -->
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<!-- font -->
<link href="//fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,800" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Oswald:400,500,600,700" rel="stylesheet">
<!-- //font -->
<script src="js/jquery-2.2.3.min.js"></script>
<script src="js/bootstrap.js"></script>
<script language="javascript">
</script>
</head>
<body>
	<!-- w3-banner -->
	<div class="w3-banner jarallax">
		<div class="wthree-different-dot">
			<!--top bar -->			
			 
			<!--end top bar-->
			<div class="head bg-custome">
				<div class="container">
					<div class="navbar-top">
							<!-- Brand and toggle get grouped for better mobile display -->
							<div class="navbar-header">
							  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							  </button>
								 <div class="navbar-brand logo ">
									<h1><a href="index.php"><img src="images/logo.png" alt="aerosports" /> </a></h1>
								</div>
							</div>
                           	
							<!-- Collect the nav links, forms, and other content for toggling -->
							<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
								<div class="margin-top">                              
							 <ul class="nav navbar-nav link-effect-4 nav-custome">
								<li class="active"><a href="index.php">Home</a></li>
								<li><a href="about_us.php" >About</a></li>
								 <li><a href="#" class="dropdown-toggle" data-toggle="dropdown" 
										role="button" aria-haspopup="true" aria-expanded="false">
									 <span data-letters="Pages">Services</span><span class="caret"></span></a>
									<ul class="dropdown-menu"> 
										<li><a href="paramotors.php">Paramotors</a></li>
										<li><a href="paragliding.php">Paragliding</a></li>
										<li><a href="flower.php">Flower Dropping</a></li>
										<li><a href="advertising.php" >Aerial Advertising</a></li>
										<li><a href="branding.php">Aerial Branding</a></li>
										<li><a href="joy_riders.php" >Joy Rides</a></li>
									</ul>
								</li>   
								<li><a href="franchise.php">Franchise</a></li>
								 <li><a href="gallery.php">Gallery</a></li>
								<li><a href="contact.php">Contact Us</a></li>								
							  </ul>
									
								</div><!--end margin-top-->
                              
							</div><!-- /.navbar-collapse -->
                            
						</div>
                  </div>
			</div>
      	 <span class="order_book" id="book_now"><a href="#">Book Now</a></span>

			<!-- banner -->
			<div class="banner margin-0">				  
					<div class="slider margin-0 oveflow">						
						<script src="js/responsiveslides.min.js"></script>
						<script>
								// You can also use "$(window).load(function() {"
								$(function () {
								// Slideshow 4
									$("#slider3").responsiveSlides({
										auto: true,
										pager: true,
										nav: true,
										speed: 500,
										namespace: "callbacks",
										before: function () {
											$('.events').append("<li>before event fired.</li>");
										},
										after: function () {
											$('.events').append("<li>after event fired.</li>");
										}
									 });				
								});
						</script>
						<div  id="top" class="callbacks_container-wrap">
							<!--slider beggin-->
							<ul class="rslides" id="slider3">
								<li>
			<img src="images/banner 3.jpg" alt="Paragliding" />
			</li>
			<li>
			<img src="images/banner 1.jpg" alt="Paramotors" />	
			</li>
			<li>
			<img src="images/banner 4.jpg" alt="flower dropping" />
			</li>
			<li>
			<img src="images/banner 2.jpg" alt="Aerial advertising" />
			</li>								
</ul>
							
							<!--end slider-->
						</div>
					</div>
				 
			</div>
			<!-- //banner -->
		</div>
	</div>
	<!-- //w3-banner -->
	 
	<div class="banner-bottom margin-0 oveflow" id="about">
		<div class="container margin-0 oveflow">
			<h3 class="heading-agileinfo font-family" data-aos="zoom-in">Aerosports In Telangana</h3>
			<div class="w3ls_banner_bottom_grids margin-0 oveflow">
				<div class="col-md-12 agileits_services_grid " data-aos="fade-right">
					<p class="text-color">
					Aerosports is one of the growing sports in the world of flying. The youngsters have taken to the sports in a big way which is both challenging and exciting. There is nothing in the world of sports to beat the feeling of soaring high up in the sky and experience the thrill of gliding over the landscape below. Skilled pilots exploit the source of lift by which they gain height and climb to altitudes of thousands of meters.<br>
We all have looking up in the sky and seeing the eagle soaring, wondered how it would be to up there and experience the sensation of gliding high up? But now with the advent of Aerosports, we all have a chance of experiencing our fantasy!   
					</p>
				</div>
				 
				 
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- services -->
<div class="services jarallax" id="services margin-0 oveflow">
		<h3 class="heading-agileinfo font-family margin-0 oveflow" data-aos="zoom-in">Services
	</h3>
	<div class="container margin-0 oveflow">
		
			<div class="col-md-4 ser-1 " data-aos="fade-right">
				<div class="grid1 paragliding">					
					<h4>Paragliding</h4>
	<p>For many years paragliding was not such a popular sports in India but recently there 
		has been a tremendous increase  <span><a href="paragliding.php">Read More..</a></span></p>
				</div>
			</div>
			<div class="col-md-4 ser-1" data-aos="fade-right">
				<div class="grid1 paramotors">					
					<h4>Paramotors</h4>
					<p>One of the most unique way of gliding or
						flying is by using a paragliding wing  along with a propeller 
						motor which is fixed <span><a href="paramotors.php">Read More..</a></span></p>
				</div>
			</div>
			<div class="col-md-4 ser-1" data-aos="fade-right">
				<div class="grid1 flower">					
					<h4>Flower Dropping</h4>
					<p>flower dropping by Para motor has become the preferred
					choice due to its low cost . It scores over
						flower dropping by a helicopter<span><a href="flower.php">Read More..</a></span></p>
				</div>
		</div>
		
		
			<div class="col-md-4 ser-1" data-aos="fade-right">
				<div class="grid1 advertising">					
					<h4>Aerial Advertisings</h4>
					<p>Aerial advertising is used to drop pamphlets covering a large
						amount of area. Due to which a massive audience is reached.<span><a href="advertising.php">Read More..</a></span></p>
				</div>
		</div>
		
		<div class="col-md-4 ser-1" data-aos="fade-right">
				<div class="grid1 branding">					
					<h4>Aerial Branding</h4>
					<p>Aerial branding is one of the most innovate method of advertising 
					which grabs the attention of the viewers. Aerial branding which <span><a href="branding.php">Read More..</a></span></p>
				</div>
		</div>
		
		<div class="col-md-4 ser-1" data-aos="fade-right">
				<div class="grid1 rides">					
					<h4>Joy Rides</h4>
					<p>If  you ever wanted to experience the sensation of flying like a bird in the sky
					you can try Para Gliding . It offers a joy ride like no another  
					<span><a href="joy_riders.php">Read More..</a></span></p>
				</div>
		</div>
		<div class="clearfix"></div>
		
	</div>
</div>
<!-- //services -->
	
	 
	<!-- Clients -->
	<div class="clients-main jarallax margin-0 oveflow" id="client">
		<div class="container margin-0 oveflow">
			<!-- Owl-Carousel -->
			<h3 class="heading-agileinfo font-family margin-0 oveflow" data-aos="zoom-in">TESTIMONIALS<span class="thr">Events Is A Professionally Managed Event </span></h3>
			<div class="cli-ent" data-aos="fade-down margin-0 oveflow">
				<section class="slider margin-0 oveflow">
						<div class="flexslider">
							<ul class="slides margin-0 oveflow">
								<li>
									<div class="item g1">
										<div class="agile-dish-caption">
										<img class="lazyOwl" src="images/1.png" alt="" />
											<!--<h4>Franklin</h4>
											<span>Lorem Ipsum</span>-->
											
										</div>
										
										<div class="clearfix"></div>
										<!--<p class="para-w3-agile"><span class="fa fa-quote-left" aria-hidden="true"></span>Duis nulla nulla, faucibus id diam ac, luctus sodales purus.
											Quisque nibh ipsum,Ut accumsan.</p>-->
									</div>
								</li>
								<li>
									<div class="item g1">
										<div class="agile-dish-caption">
										<img class="lazyOwl" src="images/3.png" alt="" />
											<!--<h4>Anderson</h4>
											<span>Lorem Ipsum</span>-->
											
										</div>
										
										<div class="clearfix"></div>
										<!--<p class="para-w3-agile"><span class="fa fa-quote-left" aria-hidden="true"></span>Duis nulla nulla, faucibus id diam ac, luctus sodales purus.
											Quisque nibh ipsum,Ut accumsan.</p>-->
									</div>
								</li>
								<li>
									<div class="item g1">
										<div class="agile-dish-caption">
										<img class="lazyOwl" src="images/2.png" alt="" />
											<!--<h4>Williamson</h4>
											<span>Lorem Ipsum</span>-->
											
										</div>
										
										<div class="clearfix"></div>
										<!--<p class="para-w3-agile"><span class="fa fa-quote-left" aria-hidden="true"></span>Duis nulla nulla, faucibus id diam ac, luctus sodales purus.
											Quisque nibh ipsum,Ut accumsan.</p>-->
									</div>
								</li>
							</ul>
						</div>
				</section>
			</div>
			<!--// Owl-Carousel -->
		</div>
	</div>
	<!--// Clients -->
	 <br>
<!-- register -->
	<div class="register-sec-w3l jarallax margin-0 oveflow" id="book">
		<div class="container margin-0 oveflow">
		<h3 class="heading-agileinfo font-family margin-0 oveflow" data-aos="zoom-in">Book An Event </h3>
			<div class="book-appointment margin-0 oveflow" data-aos="zoom-in">
				<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
					<div class="gaps">
						<p></p>
						<input type="text" name="name" placeholder="Name" required />
					</div>
					<div class="gaps">
						<p></p>
						<input type="email" name="email" placeholder="Email" required />
					</div>
					<div class="gaps">
						<p></p>
						<input type="text" name="phone_number" placeholder="Phone Number" required />
					</div>
					<div class="gaps">
						<textarea name="message" placeholder="Message..." required></textarea>
					</div>
					<input type="submit" name="submit" value="Book Now">
				</form>
			</div>
				
		</div>
	</div>
	<!-- //register --> 
 

<!-- map -->
	<div class="frame mmargin-0 oveflow">
		 <iframe src="https://www.google.com/maps/embed?pb=!1m27!1m12!1m3!1d60884.40773760097!2d78.
!3d17.494358131619876!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m12!3e6!4m5!1s0x3bcb91f765d0995b%3A0x6d6be41c372d6f7a!2s102%2C+Design+Infotech%2C+Satyabama+Complex%2C+Street+Number+2A%2C+Venkat+Nagar%2C+Kukatpally+Housing+Board+Colony%2C+Kukatpally%2C+Hyderabad%2C+Telangana+500072!3m2!1d17.4943612!2d78.40320849999999!4m4!1s0x3bcb91f765d0995b%3A0x6d6be41c372d6f7a!3m2!1d17.4943612!2d78.40320849999999!5e0!3m2!1sen!2sin!4v1549605842876"
width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
	</div>
<!-- //map -->
	<!-- footer -->
	<div class="footer">
	<div class="container">
		<div class="f-bg-w3l">
		<div class="col-md-4 w3layouts_footer_grid" data-aos="fade-right">
					<h2>Contact Information</h2>
					    <ul class="con_inner_text">
<li><span class="fa fa-map-marker" aria-hidden="true"></span>Flat No. #102, 1st Floor, 
								Satyabhama Apartment,   KPHB, Hyderabad-500072. </li>
							<li><span class="fa fa-envelope-o" aria-hidden="true"></span> 
								<a href="mailto:info@telanganaaerosports.com">
								info@telanganaaerosports.com</a></li>
							<li><span class="fa fa-phone" aria-hidden="true"></span>  +91-9989030909, +91-9989310909</li>
						</ul>

					<ul class="social_agileinfo">
						<li><a href="https://www.facebook.com/" class="w3_facebook" target="_blank"><i class="fa fa-facebook"></i></a></li>
						<li><a href="https://twitter.com/TAerosports" class="w3_twitter" target="_blank"><i class="fa fa-twitter"></i></a></li>
						<li><a href="https://www.instagram.com/telangana_aerosports/s" class="w3_instagram" target="_blank"><i class="fa fa-instagram"></i></a></li>
						<li><a href="https://www.instagram.com/telangana_aerosports/" class="w3_google" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i>
</a></li>
					</ul>
				</div>
				<div class="col-md-4 w3layouts_footer_grid" data-aos="fade-down">
					<h2>Subscribe Newsletter</h2>
					<p>By subscribing to our mailing list you will always get latest news from us.</p>
					<form action="mailTo:aerosportstelangana@gmail.com" method="post">
						<input type="email" name="Email" placeholder="Enter your email..." required>
						<button class="btn1"><i class="fa fa-envelope-o" aria-hidden="true"></i></button>
						<div class="clearfix"> </div>
					</form>
				</div>
				<div class="col-md-4 w3layouts_footer_grid" data-aos="fade-left">
					<h3>Recent Events</h3>
					  <ul class="con_inner_text midimg">
						<li><a href="#" data-toggle="modal" data-target="#myModal"><img src="images/g2.jpg" alt="" class="img-responsive" /></a></li>
					    <li><a href="#" data-toggle="modal" data-target="#myModal"><img src="images/g3.jpg" alt="" class="img-responsive" /></a></li>
						<li><a href="#" data-toggle="modal" data-target="#myModal"><img src="images/g4.jpg" alt="" class="img-responsive" /></a></li>
						<li><a href="#" data-toggle="modal" data-target="#myModal"><img src="images/g5.jpg" alt="" class="img-responsive" /></a></li>
						<li><a href="#" data-toggle="modal" data-target="#myModal"><img src="images/g6.jpg" alt="" class="img-responsive" /></a></li>
					    <li><a href="#" data-toggle="modal" data-target="#myModal"><img src="images/g7.jpg" alt="" class="img-responsive" /></a></li>
						 <li><a href="#" data-toggle="modal" data-target="#myModal"><img src="images/g8.jpg" alt="" class="img-responsive" /></a></li>
						<li><a href="#" data-toggle="modal" data-target="#myModal"><img src="images/g1.jpg" alt="" class="img-responsive" /></a></li>
				     </ul>
					
				</div>
				<div class="clearfix"> </div>
			</div>
			</div>
			<p class="copyright" data-aos="zoom-in">© 2019 Aerosports. All Rights Reserved | Design by <a href="#" target="_blank">telanganaaerosports.com</a></p>
	</div>
	<!-- //footer -->

<!-- js for portfolio lightbox -->
<script src="js/jQuery.lightninBox.js"></script>
<script type="text/javascript">
	$(".lightninBox").lightninBox();
</script>
<!-- /js for portfolio lightbox -->
<!-- flexSlider -->
				<script defer src="js/jquery.flexslider.js"></script>
				<script type="text/javascript">
					$(window).load(function(){
					  $('.flexslider').flexslider({
						animation: "slide",
						start: function(slider){
						  $('body').removeClass('loading');
						}
					  });
					});
				</script>
<!-- //flexSlider -->

<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>

	<script src="js/jarallax.js"></script>
	<script src="js/SmoothScroll.min.js"></script>
	<script type="text/javascript">
		/* init Jarallax */
		$('.jarallax').jarallax({
			speed: 0.5,
			imgWidth: 1366,
			imgHeight: 768
		})
	</script><!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
	<!-- //here ends scrolling icon -->
<!-- scrolling script -->
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
	
	jQuery(document).ready(function($) {
		$(".order_book").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$("#book").offset().top},1000);
		});
	});	
	

</script> 
<!-- //scrolling script -->
<!-- animation effects-js files-->
	<script src="js/aos.js"></script><!-- //animation effects-js-->
	<script src="js/aos1.js"></script><!-- //animation effects-js-->
<!-- animation effects-js files-->
<span id="siteseal"><script async type="text/javascript" src="https://seal.godaddy.com/getSeal?sealID=wJow2vuyUJ8OvU2LOZKhrTiluKMu62t7oSIOpcDrUOSF1VUW27f3NiYGtBlb"></script></span>
</body>	
</html>