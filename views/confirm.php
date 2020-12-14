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

    <!-- SPECIFIC CSS -->
    <link href="<?php echo base_url(); ?>lib/css/date_picker.css" rel="stylesheet" />

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
<!-- /Header -->

<main>
    <div id="breadcrumb">
        <div class="container">
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Doctors</a></li>
                <li>Booking</li>
            </ul>
        </div>
    </div>
    <!-- /breadcrumb -->

    <div class="container margin_120">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div id="confirm" style="text-align:  center;">
                    <div class="icon icon--order-success svg add_bottom_15">
                        <svg xmlns="http://www.w3.org/2000/svg" width="72" height="72">
                            <g fill="none" stroke="#8EC343" stroke-width="2">
                                <circle cx="36" cy="36" r="35" style="stroke-dasharray:240px, 240px; stroke-dashoffset: 480px;"></circle>
                                <path d="M17.417,37.778l9.93,9.909l25.444-25.393" style="stroke-dasharray:50px, 50px; stroke-dashoffset: 0px;"></path>
                            </g>
                        </svg>
                    </div>
                    <h2>Thanks for your booking!</h2>
                    <p>You'll receive a confirmation email</p>
                </div>
            </div>
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</main>
<!-- /main -->

<footer>
    <div class="container margin_60_35">
        <div class="row">
            <div class="col-lg-3 col-md-12">
                <p>
                    <a href="index.html" title="Findoctor">
                        <img src="<?php echo base_url(); ?>lib/img/logo.png" data-retina="true" alt="" width="163" height="36" class="img-fluid" />
                    </a>
                </p>
            </div>
            <div class="col-lg-3 col-md-4">
                <h5>About</h5>
                <ul class="links">
                    <li><a href="#0">About us</a></li>
                    <li><a href="<?php echo base_url(); ?>lib/blog-1.html">Blog</a></li>
                    <li><a href="#0">FAQ</a></li>
                    <li><a href="<?php echo base_url(); ?>lib/login.html">Login</a></li>
                    <li><a href="<?php echo base_url(); ?>lib/register.html">Register</a></li>
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
                    <li><a href=".<?php echo base_url(); ?>lib/cdn-cgi/l/email-protection.html#5930373f36193f30373d363a2d362b773a3634"><i class="icon_mail_alt"></i> <span class="__cf_email__" data-cfemail="a1c9c4cdd1e1c7c8cfc5cec2d5ced38fc2cecc">[email&#160;protected]</span></a></li>
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

<!-- SPECIFIC SCRIPTS -->
<script src="<?php echo base_url(); ?>lib/js/bootstrap-datepicker.js"></script>
<script>
    $('#calendar').datepicker({
        todayHighlight: true,
        daysOfWeekDisabled: [0],
        weekStart: 1,
        format: "yyyy-mm-dd",
        datesDisabled: ["2017/10/20", "2017/11/21","2017/12/21", "2018/01/21","2018/02/21","2018/03/21"],
    });
</script>


</body>
</html>