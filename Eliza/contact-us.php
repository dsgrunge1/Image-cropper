<?php
    session_start();
    include("php/captcha.php");
    $_SESSION['captcha'] = simple_php_captcha();
?>
<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>Eliza Rubber Plantations</title>
		<meta name="author" content="Eliza, Eliza Rubber Plantation, Eliza Rubber Plantations, Eliza Rubber Estate, Rubber, Rubber Plantation">
		<meta name="description" content="Contact, Contact Us, Contact-Us, Eliza, Eliza Rubber Plantation, Eliza Rubber Plantations, Eliza Rubber Estate, Rubber, Rubber Plantation, Situated in Rowta and Badagaon Region of Udalguri Distict, Assam, India">
		
		<!-- Mobile Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		
		<!-- Put favicon.ico and apple-touch-icon(s).png in the images folder -->
	    <link rel="shortcut icon" href="images/favicon.png">
		    	
		<!-- CSS StyleSheets -->
		<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,700,800&amp;amp;subset=latin,latin-ext">
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<link rel="stylesheet" href="css/animate.css">
		<link rel="stylesheet" href="css/prettyPhoto.css">
		<link rel="stylesheet" href="css/slick.css">
		<link rel="stylesheet" href="rs-plugin/css/settings.css">
		<link rel="stylesheet" id="MainStyle" href="css/style.css">
		<link rel="stylesheet" href="css/responsive.css">
		<!--[if lt IE 9]>
	    	<link rel="stylesheet" href="css/ie.css">
	    	<script type="text/javascript" src="js/html5.js"></script>
	    <![endif]-->

		<!-- Skin style (** you can change the link below with the one you need from skins folder in the css folder **) -->
		<link rel="stylesheet" id="skinCSS" href="css/skins/skin5.css">
	
	</head>
	<body class="bg1">
	    
	    <!-- site preloader start -->
	    <div class="page-loader">
	    	<div class="loader-in"></div>
	    </div>
	    <!-- site preloader end -->
	    
	    <div class="pageWrapper fixedPage">

			<!-- Header Start -->
			<div id="headWrapper" class="clearfix">

		    	<!-- top bar start -->
		    	<div class="top-bar">
				    <div class="container">
						<div class="row">
							<div class="cell-5">
							    <ul>
								    <li><a href="#"><i class="fa fa-envelope"></i>info@elizarubberplantations.com</a></li>
							    </ul>
							</div>
							<div class="cell-7 right-bar">
					    		<ul class="right">
								    <li><span><i class="fa fa-phone"></i> Call Us: +91-9707021032</span></li>
						        </ul>
							</div>
						</div>
				    </div>
				</div>
			    <!-- top bar end -->

				<!-- Logo, global navigation menu and search start -->
			    <header class="top-head nav-3" data-sticky="true">
				    <div class="container">
					    <div class="row">
					    	<div class="logo cell-4">
						    	<a href="index.html"></a>
						    </div>
						    <div class="cell-9 top-menu">

							    <!-- top navigation menu start -->
							    <nav class="top-nav mega-menu">
								    <ul>
								      <li><a href="index.html"><i class="fa fa-home"></i><span>Home</span></a></li>
								      <li><a href="about-us.html"><i class="fa fa-book"></i><span>About Us</span></a></li>
								      <li><a href="output-product.html"><i class="fa fa-leaf"></i><span>Output Product</span></a></li>
								      <li><a href="photo-gallery.html"><i class="fa fa-image"></i><span>Photo Gallery</span></a></li>
								      <li class="selected"><a href="contact-us.php"><i class="fa fa-phone"></i><span>Contact Us</span></a></li>
								    </ul>
							    </nav>
							    <!-- top navigation menu end -->

							</div>
					    </div>
				    </div>
			    </header>
			    <!-- Logo, Global navigation menu and search end -->

			</div>
			<!-- Header End -->

			<!-- Content Start -->
			<div id="contentWrapper">
				<div class="page-title title-1">
					<div class="container">
						<div class="row">
							<div class="cell-12">
								<h1 class="fx" data-animate="fadeInLeft">Contact <span class="witTxt">Us</span></h1>
								<div class="breadcrumbs main-bg fx" data-animate="fadeInUp">
									<span class="bold">You Are In:</span><a href="index.html">Home</a><span class="line-separate">/</span><span>Contact us</span>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="sectionWrapper">
					<div class="container">
						<div class="fx" data-animate="fadeInUp">
							<h3 class="block-head">Get connected with us</h3>
							<p>
								Welcome to Eliza Rubber Plantations, residing in a place with a potential of a booming rubber industry. We are an organisation solely dedicated to the interests
								of the northeastern region of India. Currently we are situated in Udalguri district of Assam, India. Here in this region of our country, we are trying to harness
								the rich ingredients of nature for the purpose producing high quality rubber. Northeast has always been blessed with the gifts of natural resources, culture and
								residence of different ethnic tribes. But, it is still lagging behind with a poor in financial economy. This is why we thrive to introduce employment, education
								and health care through our	organization. Our contribution towards the people of our region is also to raise the quality of life which has been disrupted by the
								absence of basic human needs.
							</p>
							<b>
								Our organisation is on the verge of starting the production of rubber soon for suppliers and manufacturers...
							</b>
						</div>

						<div class="clearfix"></div>
						
						<div class="padd-top-50">
							<div class="cell-6 fx animated fadeInRight " data-animate="fadeInLeft" style="padding-left:0;">
								<h3 class="block-head">Rowta Site</h3>
								<script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyAUHUpWH7bJE6LRA98DgjrrShOOo3sVJEs&sensor=false"></script>
								<div id="map_canvas1" style="height: 450px; width: 100%;">
									<script type="text/javascript"> 
										function init_map(){
											var myOptions = {zoom:14,center:new google.maps.LatLng(26.707664,92.190131),
											mapTypeId: google.maps.MapTypeId.ROADMAP};
											map = new google.maps.Map(document.getElementById("map_canvas1"), myOptions);
											marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(26.707664,92.190131)});
											infowindow = new google.maps.InfoWindow({content:"<div class='noScroll'><b>Eliza Rubber Plantations (Site-ROWTA)</b><br/>Rowta-Udalguri Rd, Phuhurabari Khoyerbari,<br/>Udalguri, Assam, Pincode-784508, India</div>" });
											google.maps.event.addListener(marker, "click", function(){infowindow.open(map,marker);});
											infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);
									</script>
								</div>
								<div class="fx" data-animate="fadeInRight">
									<br />
				    				<h5><b><u>Address:</u></b></h5>
				    				<p>Eliza Rubber Plantations, Rowta-Udalguri Rd, Phuhurabari Khoyerbari, Assam Pin-784508, India</p>
				   				</div>
							</div>
							<div class="cell-6 fx" data-animate="fadeInRight">
								<h3 class="block-head">Bandarguri Site</h3>
								<script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyAUHUpWH7bJE6LRA98DgjrrShOOo3sVJEs&sensor=false"></script>
								<div id="map_canvas2" style="height: 450px; width: 100%;">
									<script type="text/javascript"> 
										function init_map(){
											var myOptions = {zoom:14,center:new google.maps.LatLng(26.820251,92.151893),
											mapTypeId: google.maps.MapTypeId.ROADMAP};
											map = new google.maps.Map(document.getElementById("map_canvas2"), myOptions);
											marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(26.820251,92.151893)});
											infowindow = new google.maps.InfoWindow({content:"<div class='noScroll'><b>Eliza Rubber Plantations (Site-BANDARGURI)</b><br/>Orang-Mazbat Road, No.1 Bandarguri,<br/>Udalguri, Assam, Pincode-784509, India</div>" });
											google.maps.event.addListener(marker, "click", function(){infowindow.open(map,marker);});
											infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);
									</script>
								</div>
								<div class="fx" data-animate="fadeInRight">
									<br />
				    				<h5><b><u>Address:</u></b></h5>
				    				<p>Eliza Rubber Plantations, Orang-Mazbat Road, No.1 Bandarguri, Assam Pin-784509, India</p>
				   				</div>
							</div>
						</div>
					</div>
				</div>
                
				<div class="padd-vertical-45">
					<div class="container">
						<div class="row">
			    			<div class="cell-7 contact-form fx" data-animate="fadeInLeft" id="contact">
			    				<h3 class="block-head">Get in Touch</h3>
			    				<mark id="message"></mark>
                                <form class="form-signin cform" method="post" action="php/contact.php" id="cform" autocomplete="on">
			    					<div class="form-input">
				    					<label>First name<span class="red">*</span></label>
				    					<input type="text" name="name" id="name" required="required">
			    					</div>
			    					<div class="form-input">
			    						<label>Email<span class="red">*</span></label>
			    						<input name="email" type="email" id="email" required="required">
			    					</div>
			    					<div class="form-input">
			    						<label>Phone</label>
			    						<input name="phone" type="text" id="phone" required="required">			    						
			    					</div>
			    					<div class="form-input">
			    						<label>Message<span class="red">*</span></label>
			    						<textarea name="message" cols="40" rows="7" id="messageTxt" spellcheck="true" required="required"></textarea>
			    					</div>
			    					<div  class="form-input">
                                        <div class="row">
                                            <div class="cell-12 margin-bottom-20"><img alt="" src="<?php echo $_SESSION['captcha']['image_src']; ?>" id='captchaimg' ></div>
                                            <input type="hidden" id="hidCap" value="<?php echo $_SESSION['captcha']['code']; ?>" data-error="The captcha code does not match!" />
                                            <div class="cell-3"><input id="captcha_input" name="captcha_input" type="text"></div>
                                            <div class="cell-6"><label for='message'>Enter the code above :</label></div>
                                        </div>
			    					</div>
			    					<div class="form-input">
			    						<input id="submit" name="submit" type="submit" class="btn btn-large main-bg" value="Submit">&nbsp;&nbsp;<input type="reset" class="btn btn-large" value="Reset" id="reset">
			    					</div>

			    				</form>
			    			</div>
			    			<div class="cell-5 contact-detalis">
			    				<h3 class="block-head">Contact Details</h3>
			    				<p class="fx" data-animate="fadeInRight">For any queries please contact us in the below email & phone number </p>
			    				<hr class="hr-style4">
			    				<div class="clearfix"></div>
			    				<div class="padding-vertical">
				    				<div class="fx" data-animate="fadeInRight">
				    					<h5>Email:</h5>
				    					<p>contact@elizarubberplantations.com</p>
				    					<h5>Phone:</h5>
				    					<p>+91-9707021032</p>
				    				</div>
			    				</div>
			    			</div>
						</div>
					</div>
				</div>
				
			<!-- Content End -->
			
			<!-- Footer start -->
		    <footer id="footWrapper">
		    	<div class="footer-top">
				    <div class="container">
					    <div class="row">
					    	<!-- main menu footer cell start -->
						    <div class="cell-3">
							    <h3 class="block-head">Quick Links</h3>
							    <ul class="footer-menu">
								    <li><a href="index.html">Home</a></li>
								    <li><a href="about-us.html">About Us</a></li>
								    <li><a href="output-product.html">Output Product</a></li>
								    <li><a href="photo-gallery.html">Photo Gallery</a></li>
								    <li><a href="contact-us.php">Contact Us</a></li>
							    </ul>
						    </div>
						    <!-- main menu footer cell start -->

						    <!-- contact us footer cell start -->
					    	<div class="cell-5">
							    <h3 class="block-head">Contact Details</h3>
							    <ul>
								    <li class="footer-contact"><i class="fa fa-home"></i><span>Address 1 - Eliza Rubber Plantations (Site-ROWTA), Rowta-Udalguri Rd, Phuhurabari Khoyerbari, Udalguri, Assam, Pincode-784508, India</span></li>
								    <li class="footer-contact"><i class="fa fa-home"></i><span>Address 2 - Eliza Rubber Plantations (Site-BANDARGURI), Orang-Mazbat Road, No.1 Bandarguri, Udalguri, Assam, Pincode-784509, India</span></li>
								    <li class="footer-contact"><i class="fa fa-phone"></i><span>+91 - 9707021032</span></li>
								    <li class="footer-contact"><i class="fa fa-globe"></i><span>info@elizarubberplantations.com</span></li>
								    <li class="footer-contact"><i class="fa fa-map-marker"></i><span><a href="contact-us.php#map_canvas">View our map</a></span></li>
							    </ul>
						    </div>
						    <!-- contact us footer cell end -->
						    
						    <!-- Newsletters footer cell start -->
					    	<div class="cell-4">
							    <div class="foot-logo"></div>
							    <p class="no-margin">Welcome to Eliza Rubber Plantations, residing in a place with a potential of a booming rubber industry. Enter your e-mail to know about our product price.</p>
							    <form action="php/info-updates.php" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" target="_blank" class="NL">
							      <div class="skew-25 input-box left">
						         		<input type="email" value="" name="EMAIL" class="txt-box skew25" id="mce-EMAIL" placeholder="Enter Email to get Updates" required>
						          </div>
						          <div class="left skew-25 NL-btn">
						         		<input type="submit" value="Send" name="subscribe" id="mc-embedded-subscribe" class="btn skew25">
						          </div>
						          <div class="hidden"><input type="text" name="name-of-the-hidden-field" value=""></div>

								  <div class="Notfication fx animated fadeInRight">
									<a class="close-box" href="#"><i class="fa fa-times"></i></a>
   									<p></p>
   								  </div>
						        </form>
						    </div>
						    <!-- Newsletters footer cell start -->

							<div class="clearfix"></div>
						    <hr class="hr-style5">

					    </div>
				    </div>	
			    </div>
			    
			    <!-- footer bottom bar start -->
			    <div class="footer-bottom">
				    <div class="container">
			    		<div class="row">
				    		<!-- footer copyrights left cell -->
				    		<div class="copyrights cell-5">&copy; Copyrights <b>Eliza Rubber Plantations</b> 2017. All rights reserved.</div>
				    		
				    		<!-- footer social links right cell start -->
						    <div class="cell-7">
							    <ul class="social-list right">
								    <li class="skew-25"><a href="#" data-title="dribbble" data-tooltip="true"><span class="fa fa-dribbble skew25"></span></a></li>
								    <li class="skew-25"><a href="#" data-title="facebook" data-tooltip="true"><span class="fa fa-facebook skew25"></span></a></li>
								    <li class="skew-25"><a href="#" data-title="linkedin" data-tooltip="true"><span class="fa fa-linkedin skew25"></span></a></li>
								    <li class="skew-25"><a href="#" data-title="skype" data-tooltip="true"><span class="fa fa-skype skew25"></span></a></li>
								    <li class="skew-25"><a href="#" data-title="tumbler" data-tooltip="true"><span class="fa fa-tumblr skew25"></span></a></li>
								    <li class="skew-25"><a href="#" data-title="twitter" data-tooltip="true"><span class="fa fa-twitter skew25"></span></a></li>
								    <li class="skew-25"><a href="#" data-title="YouTube" data-tooltip="true"><span class="fa fa-youtube skew25"></span></a></li>
							    </ul>
						    </div>
						    <!-- footer social links right cell end -->
						    
			    		</div>
				    </div>
			    </div>
			    <!-- footer bottom bar end -->
			    
		    </footer>
		    <!-- Footer end -->

		    <!-- Back to top Link -->
	    	<div id="to-top" class="main-bg"><span class="fa fa-chevron-up"></span></div>

	    </div>

	    <div class="ModalPopUp">
	    	<div class="ModalContainer">
	    		<div class="Modalheader">
	    			<h3></h3>
	    			<a href="#" class="closePopup"><span class="fa fa-times"></span></a>
	    		</div>
	    		<div class="ModalContent">
	    		</div>
	    	</div>
	    </div>
	    <!-- Load JS siles -->	    <script type="text/javascript" src="js/jquery.min.js"></script>
	    
	    <!-- Waypoints script -->
		<script type="text/javascript" src="js/waypoints.min.js"></script>
		
		<!-- SLIDER REVOLUTION SCRIPTS  -->
		<script type="text/javascript" src="rs-plugin/js/jquery.themepunch.tools.min.js"></script>
		<script type="text/javascript" src="rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
		
		<!-- Animate numbers increment -->
		<script type="text/javascript" src="js/jquery.animateNumber.min.js"></script>
		
		<!-- slick slider carousel -->
		<script type="text/javascript" src="js/slick.min.js"></script>
		
		<!-- Animate numbers increment -->
		<script type="text/javascript" src="js/jquery.easypiechart.min.js"></script>
		
		<!-- PrettyPhoto script -->
		<script type="text/javascript" src="js/jquery.prettyPhoto.js"></script>
		
		<!-- Share post plugin script -->
		<script type="text/javascript" src="js/jquery.sharrre.min.js"></script>
		
		<!-- Product images zoom plugin -->
		<script type="text/javascript" src="js/jquery.elevateZoom-3.0.8.min.js"></script>
		
		<!-- Input placeholder plugin -->
		<script type="text/javascript" src="js/jquery.placeholder.js"></script>
		
		<!-- Contact us js file -->
		<script type="text/javascript" src="js/contact.js"></script>
		
		<!-- Tweeter API plugin -->
		<script type="text/javascript" src="js/twitterfeed.js"></script>
		
		<!-- Tweeter API plugin -->
		<script type="text/javascript" src="js/jflickrfeed.min.js"></script>
		
		<!-- NiceScroll plugin -->
		<script type="text/javascript" src="js/jquery.nicescroll.min.js"></script>
		
		<!-- MailChimp plugin -->
		<script type="text/javascript" src="js/mailChimp.js"></script>
		
		<!-- general script file -->
		<script type="text/javascript" src="js/script.js"></script>
	</body>
</html>