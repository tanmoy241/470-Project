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
    <div class="bg_color_2">
        <div class="container margin_60_35">
            <div id="register">
                <h1>Please register as a patient</h1>
                <div class="row justify-content-center">
                    <div class="col-md-5">
                        <form method="post" action="<?php echo base_url(); ?>/welcome/registernewpatient"/>
                        <div class="box_form">
                            <div class="form-group">
                                <label>Full Name</label>
                                <input type="text" name="fname" class="form-control" placeholder="Username" />
                            </div>
                            <div class="form-group">
                                <label>Username</label>
                                <input type="text" name="username" class="form-control" placeholder="Username" />
                            </div>
                            <div class="form-group">
                                <label>Phone NO</label>
                                <input type="text" name="phoneno" class="form-control" placeholder="Phone NO" />
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" name="email" class="form-control" placeholder="Your email address" />
                            </div>

                            <div class="form-group">
                                <label>Address</label>
                                <input type="text" name="address" class="form-control" placeholder="Your  address" />
                            </div>

                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" name="password" class="form-control" id="password1" placeholder="Your password" />
                            </div>
                            <div class="form-group">
                                <label>Confirm password</label>
                                <input type="password" class="form-control" id="password2" placeholder="Confirm password" />
                            </div>
                            <div id="pass-info" class="clearfix"></div>
                            <div class="checkbox-holder text-left">
                                <div class="checkbox_2">
                                    <input type="checkbox" value="accept_2" id="check_2" name="check_2" checked="" />
                                    <label for="check_2"><span>I Agree to the <strong>Terms &amp; Conditions</strong></span></label>
                                </div>
                            </div>
                            <div class="form-group text-center add_top_30">
                                <input class="btn_1" type="submit" value="Submit" />
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
                <!-- /row -->
            </div>
            <!-- /register -->
        </div>
    </div>
</main>
<!-- /main -->

<?php
$this->load->view('footer');
?>
<!--/footer-->

<div id="toTop"></div>
<!-- Back to top button -->

<!-- COMMON SCRIPTS -->
<script src=".<?php echo base_url(); ?>lib/cdn-cgi/scripts/84a23a00/cloudflare-static/email-decode.min.js"></script><script src="<?php echo base_url(); ?>lib/js/jquery-2.2.4.min.js"></script>
<script src="<?php echo base_url(); ?>lib/js/common_scripts.min.js"></script>
<script src="<?php echo base_url(); ?>lib/js/functions.js"></script>

<!-- SPECIFIC SCRIPTS -->
<script src="<?php echo base_url(); ?>lib/js/pw_strenght.js"></script>
</body>
</html>