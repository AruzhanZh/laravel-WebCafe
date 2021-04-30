<!DOCTYPE html>
<html lang="en"><!-- Basic -->
<head>
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

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
	<!-- Start header -->
	<header class="top-navbar">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="container">
				<a class="navbar-brand" href="/">
					<img src="images/logo.png" alt="" />
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-rs-food" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
				  <span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbars-rs-food">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item"><a class="nav-link" href="/">Home</a></li>
						<li class="nav-item"><a class="nav-link" href="/menu">Menu</a></li>
						<li class="nav-item"><a class="nav-link" href="/about">About</a></li>
						<li class="nav-item active dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">Pages</a>
							<div class="dropdown-menu" aria-labelledby="dropdown-a">
								<a class="dropdown-item" href="/reservation">Reservation</a>
								<a class="dropdown-item" href="/stuff">Stuff</a>
								<a class="dropdown-item" href="/statistics">Statistic</a>
							</div>
						</li>
						<li class="nav-item dropdown">
							@php $locale = session()->get('locale'); @endphp
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">Language</a>
								<a class="dropdown-item"></a>
								@switch($locale)
									@case('us')
									English
									@break
									@case('ru')
									Russian
									@break
								@endswitch
								<span class="caret"></span>
								</a>
								<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
									<a class="dropdown-item" href="lang/en"> English</a>
									<a class="dropdown-item" href="lang/ru"> Russian</a>
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
	
	<!-- Start All Pages -->
	<div class="all-page-title page-breadcrumb">
		<div class="container text-center">
			<div class="row">
				<div class="col-lg-12">
					<h1>Stuff</h1>
				</div>
			</div>
		</div>
	</div>
	<!-- End All Pages -->
	
	<!-- Start Stuff -->
	<div class="stuff-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="heading-title text-center">
						<h2>Stuff</h2>
						<p>Meet restaurant's  professional stuff members</p>
					</div>
				</div>
			</div>
			<div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="our-team">
                        <div class="pic">
                            <img src="images/stuff-img-01.jpg">
                            <ul class="social">
                                <li><a href="https://www.facebook.com/" class="fa fa-facebook"></a></li>
                                <li><a href="https://www.google.com/" class="fa fa-google-plus"></a></li>
                                <li><a href="https://www.instagram.com/" class="fa fa-instagram"></a></li>
                                <li><a href="https://www.linkedin.com/" class="fa fa-linkedin"></a></li>
                            </ul>
                        </div>
                        <div class="team-content">
                            <h3 class="title">Williamson</h3>
                            <span class="post">Head Chef</span>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6">
                    <div class="our-team">
                        <div class="pic">
                            <img src="images/stuff-img-02.jpg">
                            <ul class="social">
							<li><a href="https://www.facebook.com/" class="fa fa-facebook"></a></li>
                                <li><a href="https://www.google.com/" class="fa fa-google-plus"></a></li>
                                <li><a href="https://www.instagram.com/" class="fa fa-instagram"></a></li>
                                <li><a href="https://www.linkedin.com/" class="fa fa-linkedin"></a></li>
                            </ul>
                        </div>
                        <div class="team-content">
                            <h3 class="title">Steve Thomas</h3>
                            <span class="post">Sous Chef</span>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6">
                    <div class="our-team">
                        <div class="pic">
                            <img src="images/stuff-img-03.jpg">
                            <ul class="social">
							<li><a href="https://www.facebook.com/" class="fa fa-facebook"></a></li>
                                <li><a href="https://www.google.com/" class="fa fa-google-plus"></a></li>
                                <li><a href="https://www.instagram.com/" class="fa fa-instagram"></a></li>
                                <li><a href="https://www.linkedin.com/" class="fa fa-linkedin"></a></li>
                            </ul>
                        </div>
                        <div class="team-content">
                            <h3 class="title">Kristiana</h3>
                            <span class="post">Pastry Chef</span>
                        </div>
                    </div>
                </div>
				
				<div class="col-md-4 col-sm-6">
                    <div class="our-team">
                        <div class="pic">
                            <img src="images/stuff-img-04.jpg">
                            <ul class="social">
							<li><a href="https://www.facebook.com/" class="fa fa-facebook"></a></li>
                                <li><a href="https://www.google.com/" class="fa fa-google-plus"></a></li>
                                <li><a href="https://www.instagram.com/" class="fa fa-instagram"></a></li>
                                <li><a href="https://www.linkedin.com/" class="fa fa-linkedin"></a></li>
                            </ul>
                        </div>
                        <div class="team-content">
                            <h3 class="title">John</h3>
                            <span class="post">Bread maker</span>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6">
                    <div class="our-team">
                        <div class="pic">
                            <img src="images/stuff-img-05.jpg">
                            <ul class="social">
							<li><a href="https://www.facebook.com/" class="fa fa-facebook"></a></li>
                                <li><a href="https://www.google.com/" class="fa fa-google-plus"></a></li>
                                <li><a href="https://www.instagram.com/" class="fa fa-instagram"></a></li>
                                <li><a href="https://www.linkedin.com/" class="fa fa-linkedin"></a></li>
                            </ul>
                        </div>
                        <div class="team-content">
                            <h3 class="title">Kim</h3>
                            <span class="post">Baker</span>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6">
                    <div class="our-team">
                        <div class="pic">
                            <img src="images/stuff-img-06.jpg">
                            <ul class="social">
							<li><a href="https://www.facebook.com/" class="fa fa-facebook"></a></li>
                                <li><a href="https://www.google.com/" class="fa fa-google-plus"></a></li>
                                <li><a href="https://www.instagram.com/" class="fa fa-instagram"></a></li>
                                <li><a href="https://www.linkedin.com/" class="fa fa-linkedin"></a></li>
                            </ul>
                        </div>
                        <div class="team-content">
                            <h3 class="title">Michael</h3>
                            <span class="post">Barmen</span>
                        </div>
                    </div>
                </div>
            </div>
		</div>
	</div>
	<!-- End Stuff -->
	
	<!-- Start Customer Reviews -->
	<div class="customer-reviews-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="heading-title text-center">
						<h2>VACANCY</h2>
						<p>If you want to become a member of our friendly team, then send your resume</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-8 mr-auto ml-auto text-center">
				<div class="panel panel-primary">
                <div class="panel-heading">
                    <h2>Upload your resume here</h2>
                </div>
                <div class="panel-body">
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success alert-block">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                                <strong>{{ $message }}</strong>
                        </div>
                    @endif
                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong> There were some problems with your input.
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form action="{{ route('file.upload.post') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-10">
                                <input type="file" name="file" class="form-control">
                            </div>
                 
                            <div class="col-md-2">
                                <button type="submit" class="btn btn-common">Upload</button>
                            </div>
                        </div>
                    </form>
                </div>
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
						<form method="POST" class="subscribe_form">
							@csrf
							<input name="EMAIL" id="subs-email" class="form_input" placeholder="Email Address..." type="email">
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
					<p><span class="text-color">Monday: </span>Closed</p>
					<p><span class="text-color">Tue-Wed :</span> 9Am - 10PM</p>
					<p><span class="text-color">Thu-Fri :</span> 9Am - 10PM</p>
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