<!-- ********************* Upper Header with Logo *********************** -->
<div class="container-fluid">
	<div class="row upper-header">
		<div class="logo-container-wrap">
			<div class="logo-inner">
				<img class="logo-img" src="<?php echo base_url(); ?>front_assets/Images/logomain.png" alt="logo not found" />
			</div>
		</div>

		<div class="header-contact-details-wrap">
			<div class="icon-with-details">
				<span class="icon"><i class="fa-solid fa-phone"></i></span>
				<div class="inner-contact-details">
					<span class="inner-heading"> +91 7006112233 </span>
					<span class="inner-subheading"> homesphere@gmail.com </span>
				</div>
			</div>

			<div class="icon-with-details">
				<span class="icon"><i class="fa-solid fa-location-dot"></i></span>
				<div class="inner-contact-details">
					<span class="inner-heading"> University Of Kashmir</span>
					<span class="inner-subheading"> Srinagar, Hazratbal </span>
				</div>
			</div>

			<div class="icon-with-details">
				<span class="icon"><i class="fa-solid fa-clock"></i></span>
				<div class="inner-contact-details">
					<span class="inner-heading"> Available For You </span>
					<span class="inner-subheading"> Monday to Saturday</span>
				</div>
			</div>

			<div class="header-social-icons">
				<span class="social-icons"><i class="fa-brands fa-facebook"></i></span>
				<span class="social-icons"><i class="fa-brands fa-instagram"></i></span>
			</div>
		</div>

	</div>
</div>
<!-- ******************** Upper Header End ***************************** -->

<!-- ******************** Navbar Start ***************************** -->
<div class="lower-header">
	<nav class="navbar navbar-expand-lg navbar-dark ">
		<!-- <a class="navbar-brand" href="#">Home</a> -->
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<!-- ************** LOGO and Login Icon: Display on Tab and Mobile **************** -->

		<span class="logo-mobile display-on-mobile">H.O.M.E.S.P.H.E.R.E</span>
		<span class="login-icon-mobile display-on-mobile"><a href="#"><i class="fa-solid fa-user"></i></a></span>

		<!-- ******************** End Login Icon  ********************************* -->

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item">
					<a class="nav-link" href="<?php echo base_url('index.php/front'); ?>">Home</a>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Properties
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="<?php echo base_url('index.php/front/property_grids'); ?>">All Properties</a>
						<a class="dropdown-item" href="<?php echo base_url('index.php/front/'); ?>#propertysalesid">Properties on Sale</a>
					</div>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?php echo base_url('index.php/front/about'); ?>">About Us</a>
				</li>
				<li class="nav-item">
					<a class="nav-link " href="<?php echo base_url('index.php/front/contactUs'); ?>">Contact</a>
				</li>
			</ul>
			<a href="<?php echo base_url('index.php/Login'); ?>"><button class="btn btn-outline-success my-2 my-sm-0">Login</button></a>
		</div>
	</nav>
</div>
<!-- ******************** Navbar End ******************************* -->