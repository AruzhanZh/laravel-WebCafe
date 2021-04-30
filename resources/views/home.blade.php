<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app(->getLocale( }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Live Dinner Restaurant</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
     <!-- Site Metas -->
    <title>Live Dinner Restaurant</title>  
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">    
	<!-- Site CSS -->
    <link rel="stylesheet" href="css/style.css">    
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">
</head>
<body>
    	<!-- Start header -->
	<header class="top-navbar">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="container">
				<a class="navbar-brand" href="/home">
					<img src="images/logo.png" alt="" />
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-rs-food" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
				  <span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbars-rs-food">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item active"><a class="nav-link" href="/">Home</a></li>
						<li class="nav-item"><a class="nav-link" href="/menu">Menu</a></li>
						<li class="nav-item"><a class="nav-link" href="/about">About</a></li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">Pages</a>
							<div class="dropdown-menu" aria-labelledby="dropdown-a">
								<a class="dropdown-item" href="/reservation">Reservation</a>
								<a class="dropdown-item" href="/stuff">Stuff</a>
								<a class="dropdown-item" href="/statistics">Statistics</a>
							</div>
						</li>

						<li class="nav-item dropdown">
							@php $locale = session(->get('locale'; @endphp
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">Language</a>
								<a class="dropdown-item"></a>
								@switch($locale
									@case('us'
									English
									@break
									@case('ru'
									Russian
									@break
								@endswitch
								<span class="caret"></span>
								</a>
								<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
									<a class="dropdown-item" href="lang/en">English</a>
									<a class="dropdown-item" href="lang/ru">Russian</a>
								</div>
							</li>
						</li>
						<li class="nav-item"><a class="nav-link" href="/contact">Contact</a></li>
					</ul>
				</div>
			</div>
		</nav>
	</header>
	<!-- End header -->
	
	<!-- Start slides -->
	<div id="slides" class="cover-slides">
		<ul class="slides-container">
			<li class="text-left">
				<img src="images/slider-01.jpg" alt="">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<h1 class="m-b-20"><strong>Welcome To <br> Live Dinner Restaurant</strong></h1>
							<p class="m-b-40">Live Dinner is the restaurant in the heart of New York awarded 1 Michelin Star and 1 Sol Repsol.</p>
						</div>
					</div>
				</div>
			</li>
			<li class="text-left">
				<img src="images/slider-02.jpg" alt="">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<h1 class="m-b-20"><strong>Welcome To <br> Live Dinner Restaurant</strong></h1>
							<p class="m-b-40">A professional team of the best chefs and other staff members are waiting for you with the open doors for a great experience.</p>
						</div>
					</div>
				</div>
			</li>
			<li class="text-left">
				<img src="images/slider-03.jpg" alt="">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<h1 class="m-b-20"><strong>Welcome To <br> Live Dinner Restaurant</strong></h1>
							<p class="m-b-40"><em>They came afoot, or on horseback. They just had seen, felt and worked. They watched the boats leave, the cattle grow and the vegetable gardens bloom. They brought their goods and we serve them the same way.
                            Bells rang out, and the wheels of the loaded carts resounded on the paving stone. The Northeast wind blew to the rhythm of cannon shots and drums, the smell of low tides, marshes and sawdust flooded the streets.</em></p>
						</div>
					</div>
				</div>
			</li>
		</ul>
		<div class="slides-navigation">
			<a href="#" class="next"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
			<a href="#" class="prev"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
		</div>
	</div>
	<!-- End slides -->
	
	<!-- Start About -->
	<div class="about-section-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-12 text-center">
					<div class="inner-column">
						<p><strong>Located in the heart of New York, in one of the most famous streets of the Fifth Avenue the 
                            Live Dinner Restaurant focuses on the authenticity and classic flavors of Basque cuisine.</strong></p>
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12">
					<img src="images/about-img.jpg" alt="" class="img-fluid">
				</div>
			</div>
		</div>
	</div>
	<!-- End About -->
	
	<!-- Start QT -->
	<div class="qt-box qt-background">
		<div class="container">
			<div class="row">
				<div class="col-md-8 ml-auto mr-auto text-center">
					<p class="lead ">
						" If you're not the one cooking, stay out of the way and compliment the chef. "
					</p>
					<span class="lead">Michael Strahan</span>
				</div>
			</div>
		</div>
	</div>
	<!-- End QT -->
	
	<!-- Start Menu -->
	<div class="menu-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="heading-title text-center">
						<h2>Special Menu</h2>
						<p>At Live Dinner Restaurant offers a meticulous menu with updated traditional Basque dishes.</p>
					</div>
				</div>
			</div>
			
			<div class="row inner-menu-box">
				<div class="col-3">
					<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
						<a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">All</a>
						<a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Drinks</a>
						<a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Lunch</</a>
						<a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Dinner</a>
					</div>
				</div>
				
				<div class="col-9">
					<div class="tab-content" id="v-pills-tabContent">
						<div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
							<div class="row">
								<div class="col-lg-4 col-md-6 special-grid drinks">
									<div class="gallery-single fix">
										<img src="images/img-01.jpg" class="img-fluid" alt="Image">
										<div class="why-text">
                                            <h4>Watermelon lemonade</h4>
											<p>It's perfect for a party or makes a refreshing summer everyone.</p>
											<h5> $7.79</h5>
										</div>
									</div>
								</div>
								
								<div class="col-lg-4 col-md-6 special-grid drinks">
									<div class="gallery-single fix">
										<img src="images/img-02.jpg" class="img-fluid" alt="Image">
										<div class="why-text">
                                            <h4>Frozen margarita</h4>
											<p>This refreshing tequila cocktail can be made in just five minutes in a blender.</p>
											<h5> $9.79</h5>
										</div>
									</div>
								</div>
								
								<div class="col-lg-4 col-md-6 special-grid drinks">
									<div class="gallery-single fix">
										<img src="images/img-03.jpg" class="img-fluid" alt="Image">
										<div class="why-text">
                                            <h4>Coconut & pineapple cooler</h4>
											<p>Enjoy this crowd-pleasing tropical cocktail with coconut rum, gin and pineapple juice.</p>
											<h5> $10.79</h5>
										</div>
									</div>
								</div>
								
								<div class="col-lg-4 col-md-6 special-grid lunch">
									<div class="gallery-single fix">
										<img src="images/img-04.jpg" class="img-fluid" alt="Image">
										<div class="why-text">
											<h4>Bird meat</h4>
											<p>Pigeon royale with “Morokil” (polenta</p>
											<h5> $15.79</h5>
										</div>
									</div>
								</div>
								
								<div class="col-lg-4 col-md-6 special-grid lunch">
									<div class="gallery-single fix">
										<img src="images/img-05.jpg" class="img-fluid" alt="Image">
										<div class="why-text">
											<h4>Sea food</h4>
											<p>Garden Vegetables and Lobster Salad, its Coral Dome</p>
											<h5> $18.79</h5>
										</div>
									</div>
								</div>
								
								<div class="col-lg-4 col-md-6 special-grid lunch">
									<div class="gallery-single fix">
										<img src="images/img-06.jpg" class="img-fluid" alt="Image">
										<div class="why-text">
											<h4>Vegan</h4>
											<p>Grilled Iberian “presa”, three versions of Pepper Seeds and Garlic Risotto</p>
											<h5> $20.79</h5>
										</div>
									</div>
								</div>
								
								<div class="col-lg-4 col-md-6 special-grid dinner">
									<div class="gallery-single fix">
										<img src="images/img-07.jpg" class="img-fluid" alt="Image">
										<div class="why-text">
											<h4>Meat lover</h4>
											<p>Carved beef, Tendon and lacquered skin, “Potatoes and Peppers”</p>
											<h5> $25.79</h5>
										</div>
									</div>
								</div>
								
								<div class="col-lg-4 col-md-6 special-grid dinner">
									<div class="gallery-single fix">
										<img src="images/img-08.jpg" class="img-fluid" alt="Image">
										<div class="why-text">
											<h4>Mouthfull</h4>
											<p>Egg with Caviar over Cauliflower purée and Chive Butter</p>
											<h5> $22.79</h5>
										</div>
									</div>
								</div>
								
								<div class="col-lg-4 col-md-6 special-grid dinner">
									<div class="gallery-single fix">
										<img src="images/img-09.jpg" class="img-fluid" alt="Image">
										<div class="why-text">
                                        <h4>Fish</h4>
										<p>Pan-seared foie-gras with “salt flakes and Pepper Grains”</p>
										<h5> $24.79</h5>
										</div>
									</div>
								</div>
							</div>
							
						</div>
						<div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
							<div class="row">
								<div class="col-lg-4 col-md-6 special-grid drinks">
									<div class="gallery-single fix">
										<img src="images/img-01.jpg" class="img-fluid" alt="Image">
										<div class="why-text">
											<h4>Watermelon lemonade</h4>
											<p>It's perfect for a party or makes a refreshing summer everyone.</p>
											<h5> $7.79</h5>
										</div>
									</div>
								</div>
								
								<div class="col-lg-4 col-md-6 special-grid drinks">
									<div class="gallery-single fix">
										<img src="images/img-02.jpg" class="img-fluid" alt="Image">
										<div class="why-text">
											<h4>Frozen margarita</h4>
											<p>This refreshing tequila cocktail can be made in just five minutes in a blender.</p>
											<h5> $9.79</h5>
										</div>
									</div>
								</div>
								
								<div class="col-lg-4 col-md-6 special-grid drinks">
									<div class="gallery-single fix">
										<img src="images/img-03.jpg" class="img-fluid" alt="Image">
										<div class="why-text">
											<h4>Coconut & pineapple cooler</h4>
											<p>Enjoy this crowd-pleasing tropical cocktail with coconut rum, gin and pineapple juice.</p>
											<h5> $10.79</h5>
										</div>
									</div>
								</div>
							</div>
							
						</div>
						<div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
							<div class="row">
								<div class="col-lg-4 col-md-6 special-grid lunch">
									<div class="gallery-single fix">
										<img src="images/img-04.jpg" class="img-fluid" alt="Image">
										<div class="why-text">
											<h4>Bird meat</h4>
											<p>Pigeon royale with “Morokil” (polenta</p>
											<h5> $15.79</h5>
										</div>
									</div>
								</div>
								
								<div class="col-lg-4 col-md-6 special-grid lunch">
									<div class="gallery-single fix">
										<img src="images/img-05.jpg" class="img-fluid" alt="Image">
										<div class="why-text">
											<h4>Sea food</h4>
											<p>Garden Vegetables and Lobster Salad, its Coral Dome</p>
											<h5> $18.79</h5>
										</div>
									</div>
								</div>
								
								<div class="col-lg-4 col-md-6 special-grid lunch">
									<div class="gallery-single fix">
										<img src="images/img-06.jpg" class="img-fluid" alt="Image">
										<div class="why-text">
											<h4>Vegan</h4>
											<p>Grilled Iberian “presa”, three versions of Pepper Seeds and Garlic Risotto</p>
											<h5> $20.79</h5>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
							<div class="row">
								<div class="col-lg-4 col-md-6 special-grid dinner">
									<div class="gallery-single fix">
										<img src="images/img-07.jpg" class="img-fluid" alt="Image">
										<div class="why-text">
											<h4>Meat lover</h4>
											<p>Carved beef, Tendon and lacquered skin, “Potatoes and Peppers”</p>
											<h5> $25.79</h5>
										</div>
									</div>
								</div>
								
								<div class="col-lg-4 col-md-6 special-grid dinner">
									<div class="gallery-single fix">
										<img src="images/img-08.jpg" class="img-fluid" alt="Image">
										<div class="why-text">
											<h4>Mouthfull</h4>
											<p>Egg with Caviar over Cauliflower purée and Chive Butter</p>
											<h5> $22.79</h5>
										</div>
									</div>
								</div>
								
								<div class="col-lg-4 col-md-6 special-grid dinner">
									<div class="gallery-single fix">
										<img src="images/img-09.jpg" class="img-fluid" alt="Image">
										<div class="why-text">
											<h4>Fish</h4>
											<p>Pan-seared foie-gras with “salt flakes and Pepper Grains”</p>
											<h5> $24.79</h5>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			
		</div>
	</div>
	<!-- End Menu -->
	
	<!-- Start Gallery -->
	<div class="gallery-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="heading-title text-center">
						<h2>Gallery</h2>
						<p>Photos that give you an appetite</p>
					</div>
				</div>
			</div>
			<div class="tz-gallery">
				<div class="row">
					<div class="col-sm-12 col-md-4 col-lg-4">
						<a class="lightbox" href="images/gallery-img-01.jpg">
							<img class="img-fluid" src="images/gallery-img-01.jpg" alt="Gallery Images">
						</a>
					</div>
					<div class="col-sm-6 col-md-4 col-lg-4">
						<a class="lightbox" href="images/gallery-img-02.jpg">
							<img class="img-fluid" src="images/gallery-img-02.jpg" alt="Gallery Images">
						</a>
					</div>
					<div class="col-sm-6 col-md-4 col-lg-4">
						<a class="lightbox" href="images/gallery-img-03.jpg">
							<img class="img-fluid" src="images/gallery-img-03.jpg" alt="Gallery Images">
						</a>
					</div>
					<div class="col-sm-12 col-md-4 col-lg-4">
						<a class="lightbox" href="images/gallery-img-04.jpg">
							<img class="img-fluid" src="images/gallery-img-04.jpg" alt="Gallery Images">
						</a>
					</div>
					<div class="col-sm-6 col-md-4 col-lg-4">
						<a class="lightbox" href="images/gallery-img-05.jpg">
							<img class="img-fluid" src="images/gallery-img-05.jpg" alt="Gallery Images">
						</a>
					</div> 
					<div class="col-sm-6 col-md-4 col-lg-4">
						<a class="lightbox" href="images/gallery-img-06.jpg">
							<img class="img-fluid" src="images/gallery-img-06.jpg" alt="Gallery Images">
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Gallery -->
	
	<!-- Start Customer Reviews -->
	<div class="customer-reviews-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="heading-title text-center">
						<h2>Customer Reviews</h2>
						<p>This review is the subjective opinion of our customers</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-8 mr-auto ml-auto text-center">
					<div id="reviews" class="carousel slide" data-ride="carousel">
						<div class="carousel-inner mt-4">
							<div class="carousel-item text-center active">
								<div class="img-box p-1 border rounded-circle m-auto">
									<img class="d-block w-100 rounded-circle" src="images/quotations-button.png" alt="">
								</div>
								<h5 class="mt-4 mb-0"><strong class="text-warning text-uppercase">Paul Mitchel</strong></h5>
								<h6 class="text-dark m-0">Critic</h6>
								<p class="m-0 pt-3">Came for lunch with my brother. We loved our Thai-style mains which were amazing with lots of flavour, very impressive for a vegetarian restaurant.</p>
							</div>
							<div class="carousel-item text-center">
								<div class="img-box p-1 border rounded-circle m-auto">
									<img class="d-block w-100 rounded-circle" src="images/quotations-button.png" alt="">
								</div>
								<h5 class="mt-4 mb-0"><strong class="text-warning text-uppercase">Steve Fonsi</strong></h5>
								<h6 class="text-dark m-0">Singer</h6>
								<p class="m-0 pt-3">I was really excited about visiting Vega, and the mains were just fantastic, generally, the experience was really nice.</p>
							</div>
							<div class="carousel-item text-center">
								<div class="img-box p-1 border rounded-circle m-auto">
									<img class="d-block w-100 rounded-circle" src="images/quotations-button.png" alt="">
								</div>
								<h5 class="mt-4 mb-0"><strong class="text-warning text-uppercase">Daniel vebar</strong></h5>
								<h6 class="text-dark m-0">Seo Analyst</h6>
								<p class="m-0 pt-3">Went there with a group of friends to have the tasting menu, well it was speechless. Every dish was superb, warm bread, wine selection, excellent service, all perfect.</p>
							</div>
						</div>
						<a class="carousel-control-prev" href="#reviews" role="button" data-slide="prev">
							<i class="fa fa-angle-left" aria-hidden="true"></i>
							<span class="sr-only">Previous</span>
						</a>
						<a class="carousel-control-next" href="#reviews" role="button" data-slide="next">
							<i class="fa fa-angle-right" aria-hidden="true"></i>
							<span class="sr-only">Next</span>
						</a>
                    </div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Customer Reviews -->
	
	<!-- Start Contact info -->
	<div class="contact-imfo-box">
		<div class="container">
			<div class="row">
				<div class="col-md-4 arrow-right">
					<i class="fa fa-volume-control-phone"></i>
					<div class="overflow-hidden">
						<h4>Phone</h4>
						<p class="lead">
							+01 123-456-7890
						</p>
					</div>
				</div>
				<div class="col-md-4 arrow-right">
					<i class="fa fa-envelope"></i>
					<div class="overflow-hidden">
						<h4>Email</h4>
						<p class="lead">
							livedinner@gmail.com
						</p>
					</div>
				</div>
				<div class="col-md-4">
					<i class="fa fa-map-marker"></i>
					<div class="overflow-hidden">
						<h4>Location</h4>
						<p class="lead">
							800, Wall Street, NY
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Contact info -->
	
	<!-- Start Footer -->
	<footer class="footer-area bg-f">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6">
					<h3>About Us</h3>
					<p>We are located in the heart of the city, surrounded by active people and 
					without wasting anyone's time, we easily adapt to the fast pace of the city.</p>
				</div>
				<div class="col-lg-3 col-md-6">
					<h3>Subscribe</h3>
					<div class="subscribe_form">
						<form method="POST" action="/subscribe/check" class="subscribe_form">
                            @csrf
							<input name="email" type="text" id="subs-email" class="form_input" placeholder="Email Address...">
							<button type="submit" class="submit">SUBSCRIBE</button>
							<div class="clearfix"></div>
						</form>
					</div>
					<ul class="list-inline f-social">
						<li class="list-inline-item"><a href="https://www.facebook.com/"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li class="list-inline-item"><a href="https://www.twitter.com/"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
						<li class="list-inline-item"><a href="https://www.linkedin.com/"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
						<li class="list-inline-item"><a href="https://www.google.com/"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
						<li class="list-inline-item"><a href="https://www.instagram.com/"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
					</ul>
				</div>
				<div class="col-lg-3 col-md-6">
					<h3>Contact information</h3>
					<p class="lead">Wall Street, Trump Tower, NY, New York, 508000</p>
					<p class="lead"><a href="#">+01 1234 567 8999</a></p>
					<p><a href="#"> info@admin.com</a></p>
				</div>
				<div class="col-lg-3 col-md-6">
					<h3>Opening hours</h3>
					<p><span class="text-color">Monday  :</span>10AM - 12Pm</p>
					<p><span class="text-color">Tue-Wed :</span> 9AM - 10PM</p>
					<p><span class="text-color">Thu-Fri :</span> 9AM - 10PM</p>
					<p><span class="text-color">Sat-Sun :</span> 5PM - 10PM</p>
				</div>
			</div>
		</div>
		
		<div class="copyright">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<p class="company-name">All Rights Reserved. &copy; 2018 <a href="#">Live Dinner Restaurant</a></p>
					</div>
				</div>
			</div>
		</div>
		
	</footer>
	<!-- End Footer -->
	
	<a href="#" id="back-to-top" title="Back to top" style="display: none;"><i class="fa fa-paper-plane-o" aria-hidden="true"></i></a>

	<!-- ALL JS FILES -->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
	<script src="js/jquery.superslides.min.js"></script>
	<script src="js/images-loded.min.js"></script>
	<script src="js/isotope.min.js"></script>
	<script src="js/baguetteBox.min.js"></script>
	<script src="js/form-validator.min.js"></script>
    <script src="js/contact-form-script.js"></script>
    <script src="js/custom.js"></script>
</body>
</html>