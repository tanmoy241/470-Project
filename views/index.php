<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="Find easily a doctor and book online an appointment" />
    <meta name="author" content="Ansonika" />
    <title>FINDOCTOR - Find easily a doctor and book online an appointment</title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="<?php echo base_url(); ?>lib/img/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" type="image/x-icon" href="<?php echo base_url(); ?>lib/img/apple-touch-icon-57x57-precomposed.png" />
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="<?php echo base_url(); ?>lib/img/apple-touch-icon-72x72-precomposed.png" />
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="<?php echo base_url(); ?>lib/img/apple-touch-icon-114x114-precomposed.png" />
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="<?php echo base_url(); ?>lib/img/apple-touch-icon-144x144-precomposed.png" />

    <!-- BASE CSS -->
    <link href="<?php echo base_url(); ?>lib/css/bootstrap.min.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>lib/css/style.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>lib/css/menu.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>lib/css/vendors.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>lib/css/icon_fonts/css/all_icons_min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://rawgit.com/enyo/dropzone/master/dist/dropzone.css">

    <!-- YOUR CUSTOM CSS -->
    <link href="<?php echo base_url(); ?>lib/css/custom.css" rel="stylesheet" />

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>

<body>

<div class="layer"></div>
<!-- Mobile menu overlay mask -->

<div id="preloader">
    <div data-loader="circle-side"></div>
</div>
<!-- End Preload -->
<?php
    $this->load->view('header');
?>
	</header>
	<!-- /header -->	
	
	<main>
		<div class="hero_home version_2">
			<div class="content">
				<h3>Find a Doctor!</h3>
				<p>
					Find a doctor based on your disease
				</p>
				<form method="post" action="<?php echo base_url(); ?>welcome/searchdoc" />
					<div id="custom-search-input">
						<div class="input-group">
							<input type="text" class=" search-query" name="searchquery" placeholder="Ex. Name, Specialization ...." />
							<input type="submit" class="btn_search" value="Search" />
						</div>
						<ul>

							<li>
								<input type="radio" id="doctor" name="radio_search" value="doctor" />
								<label for="doctor">Doctor</label>
							</li>

						</ul>
					</div>
				</form>
			</div>
		</div>
		<!-- /Hero -->

		<div class="container margin_120_95">
			<div class="main_title">
				<h2>Discover the <strong>online</strong> appointment!</h2>

			</div>
			<div class="row add_bottom_30">
				<div class="col-lg-4">
					<div class="box_feat" id="icon_1">
						<span></span>
						<h3>Find a Doctor</h3>
						<p>Usu habeo equidem sanctus no. Suas summo id sed, erat erant oporteat cu pri. In eum omnes molestie.</p>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="box_feat" id="icon_2">
						<span></span>
						<h3>View profile</h3>
						<p>Usu habeo equidem sanctus no. Suas summo id sed, erat erant oporteat cu pri. In eum omnes molestie.</p>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="box_feat" id="icon_3">
						<h3>Book a visit</h3>
						<p>Usu habeo equidem sanctus no. Suas summo id sed, erat erant oporteat cu pri. In eum omnes molestie.</p>
					</div>
				</div>
			</div>
			<!-- End row -->
			<p class="text-center"><a href="<?php echo base_url(); ?>/welcome/doclist" class="btn_1 medium">Find Doctor</a></p>
		</div>
		<!-- End container -->

		<div class="bg_color_1">
			<div class="container-fluid margin_120_95">
				<div class="main_title">
					<h2>Most Viewed doctors</h2>
					<p>List of doctors</p>
				</div>
				<div id="reccomended" class="owl-carousel owl-theme">

                    <?php
                        foreach ($doctorlist as $doctor) {
                            ?>
                            <div class="item">
                                <a href="<?php echo base_url(); ?>welcome/docdetail/<?php echo $doctor->user_id ?>">
                                    <div class="views"><i class="icon-eye-7"></i>140</div>
                                    <div class="title">
                                        <h4><?php echo $doctor->name ?><em><?php echo $doctor->doctor_area ?></em></h4>
                                    </div>
                                    <img src="<?php echo base_url(); ?><?php echo $doctor->user_profile_pic ?>" height="500px" width="350px" alt=""/>
                                </a>
                            </div>

                            <?php
                        }
                    ?>
				</div>
				<!-- /carousel -->
			</div>
			<!-- /container -->
		</div>
		<!-- /white_bg -->


		<!-- /container -->

		<div id="app_section">
			<div class="container">
				<div class="row justify-content-around">
					<div class="col-md-5">
						<p><img src="<?php echo base_url(); ?>lib/img/app_img.svg" alt="" class="img-fluid" width="500" height="433" /></p>
					</div>
					<div class="col-md-6">
						<small>Application</small>
						<h3><strong>Findoctor App</strong> Coming soon</h3>
						<p class="lead">Tota omittantur necessitatibus mei ei. Quo paulo perfecto eu, errem percipit ponderum no eos. Has eu mazim sensibus. Ad nonumes dissentiunt qui, ei menandri electram eos. Nam iisque consequuntur cu.</p>
						<div class="app_buttons wow" data-wow-offset="100">
							<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewbox="0 0 43.1 85.9" style="enable-background:new 0 0 43.1 85.9;" xml:space="preserve">
							<path stroke-linecap="round" stroke-linejoin="round" class="st0 draw-arrow" d="M11.3,2.5c-5.8,5-8.7,12.7-9,20.3s2,15.1,5.3,22c6.7,14,18,25.8,31.7,33.1"></path>
							<path stroke-linecap="round" stroke-linejoin="round" class="draw-arrow tail-1" d="M40.6,78.1C39,71.3,37.2,64.6,35.2,58"></path>
							<path stroke-linecap="round" stroke-linejoin="round" class="draw-arrow tail-2" d="M39.8,78.5c-7.2,1.7-14.3,3.3-21.5,4.9"></path>
						</svg>
							<a href="#0" class="fadeIn"><img src="<?php echo base_url(); ?>lib/img/apple_app.png" alt="" width="150" height="50" data-retina="true" /></a>
							<a href="#0" class="fadeIn"><img src="<?php echo base_url(); ?>lib/img/google_play_app.png" alt="" width="150" height="50" data-retina="true" /></a>
						</div>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /app_section -->
	</main>
	<!-- /main content -->
	<footer>
		<div class="container margin_60_35">
			<div class="row">
				<div class="col-lg-3 col-md-12">
					<p>
						<a href="index.php" title="Findoctor">
							<img src="<?php echo base_url(); ?>lib/img/logo.png" data-retina="true" alt="" width="163" height="36" class="img-fluid" />
						</a>
					</p>
				</div>
				<div class="col-lg-3 col-md-4">
					<h5>About</h5>
					<ul class="links">
						<li><a href="#0">About us</a></li>
						<li><a href="<?php echo base_url(); ?>lib/blog-1.php">Blog</a></li>
						<li><a href="#0">FAQ</a></li>
						<li><a href="<?php echo base_url(); ?>lib/login.php">Login</a></li>
						<li><a href="<?php echo base_url(); ?>lib/register.php">Register</a></li>
					</ul>
				</div>
				<div class="col-lg-3 col-md-4">
					<h5>Useful links</h5>
					<ul class="links">
						<li><a href="#0">Doctors</a></li>
						<li><a href="#0">Clinics</a></li>
						<li><a href="#0">Specialization</a></li>
						<li><a href="#0">Join as a Doctor</a></li>
						<li><a href="#0">Download App</a></li>
					</ul>
				</div>
				<div class="col-lg-3 col-md-4">
					<h5>Contact with Us</h5>
					<ul class="contacts">
						<li><a href="tel://61280932400"><i class="icon_mobile"></i> + 61 23 8093 3400</a></li>
						<li><a href=".<?php echo base_url(); ?>lib/cdn-cgi/l/email-protection.php#abc2c5cdc4ebcdc2c5cfc4c8dfc4d985c8c4c6"><i class="icon_mail_alt"></i> <span class="__cf_email__" data-cfemail="157d70796555737c7b717a76617a673b767a78">[email&#160;protected]</span></a></li>
					</ul>
					<div class="follow_us">
						<h5>Follow us</h5>
						<ul>
							<li><a href="#0"><i class="social_facebook"></i></a></li>
							<li><a href="#0"><i class="social_twitter"></i></a></li>
							<li><a href="#0"><i class="social_linkedin"></i></a></li>
							<li><a href="#0"><i class="social_instagram"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
			<!--/row-->
			<hr />
			<div class="row">
				<div class="col-md-8">
					<ul id="additional_links">
						<li><a href="#0">Terms and conditions</a></li>
						<li><a href="#0">Privacy</a></li>
					</ul>
				</div>
				<div class="col-md-4">
					<div id="copy">© 2017 Findoctor</div>
				</div>
			</div>
		</div>
	</footer>
	<!--/footer-->

	<div id="toTop"></div>
	<!-- Back to top button -->

	<!-- COMMON SCRIPTS -->
	<script src=".<?php echo base_url(); ?>lib/cdn-cgi/scripts/84a23a00/cloudflare-static/email-decode.min.js"></script><script src="<?php echo base_url(); ?>lib/js/jquery-2.2.4.min.js"></script>
	<script src="<?php echo base_url(); ?>lib/js/common_scripts.min.js"></script>
	<script src="<?php echo base_url(); ?>lib/js/functions.js"></script>

</body>

</html>