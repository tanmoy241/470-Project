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

<?php
    $doc_id = "";
?>

<body>

<div class="layer"></div>
<!-- Mobile menu overlay mask -->

<div id="preloader">
    <div data-loader="circle-side"></div>
</div>
<!-- End Preload -->
		<!-- container -->
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
					<li><a href="#">Category</a></li>
					<li>Page active</li>
				</ul>
			</div>
		</div>
		<!-- /breadcrumb -->
		<?php


            foreach ($docdetail as $doc){
        $doc_id = $doc->user_id;

        ?>
        <div class="container margin_60">
            <div class="row">

                <aside class="col-xl-3 col-lg-4" id="sidebar">
                    <div class="box_profile">
                        <figure>
                            <img src="<?php echo base_url(); ?><?php echo $doc->user_profile_pic ?>" alt="" class="img-fluid"/>
                        </figure>
                        <small><?php echo $doc->doctor_area ?></small>
                        <h1><?php echo $doc->name ?></h1>
                        <span class="rating">
							<i class="icon_star voted"></i>
							<i class="icon_star voted"></i>
							<i class="icon_star voted"></i>
							<i class="icon_star voted"></i>
							<i class="icon_star"></i>
							<small>(145)</small>
							<a href="<?php echo base_url(); ?>lib/badges.html" data-toggle="tooltip"
                               data-placement="top" data-original-title="Badge Level" class="badge_list_1"><img
                                        src="<?php echo base_url(); ?>lib/img/badges/badge_1.svg" width="15" height="15"
                                        alt=""/></a>
						</span>
                        <ul class="statistic">
                            <li>854 Views</li>
                            <li><?php echo $doc->doctor_total_patients." Patient"?></li>
                        </ul>
                        <ul class="contacts">
                            <li><h6>Address</h6><?php echo $doc->user_address ?></li>
                            <li><h6>Phone</h6><a href="tel://000434323342"><?php echo $doc->user_phoneno ?></a>
                            </li>
                        </ul>
                        <div class="text-center"><a
                                    href="https://www.google.com/maps/dir//Assistance+%E2%80%93+H%C3%B4pitaux+De+Paris,+3+Avenue+Victoria,+75004+Paris,+Francia/@48.8606548,2.3348734,14z/data=!4m15!1m6!3m5!1s0x0:0xa6a9af76b1e2d899!2sAssistance+%E2%80%93+H%C3%B4pitaux+De+Paris!8m2!3d48.8568376!4d2.3504305!4m7!1m0!1m5!1m1!1s0x47e67031f8c20147:0xa6a9af76b1e2d899!2m2!1d2.3504327!2d48.8568361"
                                    class="btn_1 outline" target="_blank"><i class="icon_pin"></i> View on map</a></div>
                    </div>
                </aside>
                <!-- /asdide -->

                <div class="col-xl-9 col-lg-8">

                    <div class="tabs_styled_2">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="book-tab" data-toggle="tab" href="#book" role="tab" aria-controls="book">Book an appointment</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="general-tab" data-toggle="tab" href="#general" role="tab" aria-controls="general" aria-expanded="true">General info</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="reviews-tab" data-toggle="tab" href="#reviews" role="tab" aria-controls="reviews">Reviews</a>
                            </li>
                        </ul>
                        <!--/nav-tabs -->

                        <div class="tab-content">

                            <div class="tab-pane fade show active" id="book" role="tabpanel" aria-labelledby="book-tab">
                                <p class="lead add_bottom_30"><?php echo $doc->doctor_description ?></p>

                                <?php
                                    if(isset($_SESSION['username']) && $_SESSION['user_type']!="doctor") {
                                        ?>

                                        <form method="post" action="<?php echo base_url(); ?>welcome/book"
                                              enctype="multipart/form-data">
                                            <div class="main_title_3">
                                                <h3><strong>1</strong>Select your date</h3>
                                            </div>
                                            <div class="form-group add_bottom_45">
                                                <!----<div id="calendar"></div>------->
                                                <!----<input name="datepick" type="text" id="my_hidden_input"/>--->
                                                <input class="form-control" id="calendar" name="datepick"
                                                       placeholder="MM/DD/YYY" type="text"/>
                                                <ul class="legend">
                                                    <li><strong></strong>Available</li>
                                                    <li><strong></strong>Not available</li>
                                                </ul>
                                            </div>
                                            <div class="main_title_3">
                                                <h3><strong>2</strong>Select your time</h3>
                                            </div>
                                            <div class="row justify-content-center add_bottom_45">
                                                <div class="col-md-3 col-6 text-center">
                                                    <ul class="time_select">

                                                        <?php
                                                        $count = 0;
                                                        foreach ($doc_timing as $d_time) {
                                                            ?>
                                                            <li>
                                                                <input type="radio" id="radio<?php echo ++$count; ?>"
                                                                       name="radio_time"
                                                                       value="<?php echo $d_time->time_from ?>"/>
                                                                <label for="radio<?php echo $count++; ?>"><?php
                                                                    if($d_time->time_from >12){
                                                                        echo ((int)$d_time->time_from-12)."PM";
                                                                    }else{
                                                                        echo $d_time->time_from."AM";
                                                                    }
                                                                    echo " -- ";
                                                                    if($d_time->time_to > 12){
                                                                        echo ((int)$d_time->time_to - 12)."PM";
                                                                    }else{
                                                                        echo $d_time->time_to."AM";
                                                                    }
                                                                    ?></label>
                                                            </li>

                                                            <?php
                                                        }
                                                        ?>
                                                    </ul>
                                                </div>
                                            </div>
                                            <!-- /row -->

                                            <div class="main_title_3">
                                                <h3><strong>3</strong>Upload your previous report</h3>
                                            </div>

                                            <input name="pic[]" type="file" multiple/>

                                            <input type="hidden" name="ids" value="<?php echo $doc->user_id ?>">
                                            <p class="text-center">
                                                <button type="submit" class="btn_1 medium" name="fileSubmit">Book Now
                                                </button>
                                            </p>
                                        </form
                                        <?php
                                    }
                                    ?>
                            </div>
                        </div>
                            <!-- /tab_1 -->

                            <div class="tab-pane fade" id="general" role="tabpanel" aria-labelledby="general-tab">
                                <p class="lead add_bottom_30"><?php echo $doc->doctor_description ?></p>
                                <div class="indent_title_in">
                                    <i class="pe-7s-user"></i>
                                    <h3>Professional statement</h3>
                                </div>
                                <div class="wrapper_indent">

                                    <div class="row">
                                        <div class="col-lg-6">
                                            <ul class="bullets">
                                                <?php
                                                foreach ($doc_spec as $doc_s) {
                                                    ?>
                                                    <li><?php echo $doc_s->spe_type ?></li>

                                                    <?php
                                                }
                                                ?>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- /row-->
                                </div>
                                <!-- /wrapper indent -->

                                <hr/>

                                <div class="indent_title_in">
                                    <i class="pe-7s-news-paper"></i>
                                    <h3>Education</h3>
                                </div>
                                <div class="wrapper_indent">
                                    <h6>Curriculum</h6>
                                    <ul class="list_edu">
                                        <?php
                                        foreach ($doc_edu as $edu) {
                                            ?>
                                            <li><strong><?php echo $edu->edu_type ?></strong></li>
                                            <?php
                                        }
                                        ?>
                                    </ul>

                                </div>
                                <!--  End wrapper indent -->

                                <hr/>


                                <!--  End wrapper_indent -->

                            </div>
                            <!-- /tab_2 -->

                            <div class="tab-pane fade" id="reviews" role="tabpanel" aria-labelledby="reviews-tab">
                                <div class="reviews-container">
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <div id="review_summary">
                                                <strong>4.7</strong>
                                                <div class="rating">
                                                    <i class="icon_star voted"></i><i class="icon_star voted"></i><i
                                                            class="icon_star voted"></i><i
                                                            class="icon_star voted"></i><i class="icon_star"></i>
                                                </div>
                                                <small>Based on 4 reviews</small>
                                            </div>
                                        </div>
                                        <div class="col-lg-9">
                                            <div class="row">
                                                <div class="col-lg-10 col-9">
                                                    <div class="progress">
                                                        <div class="progress-bar" role="progressbar" style="width: 90%"
                                                             aria-valuenow="90" aria-valuemin="0"
                                                             aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-2 col-3">
                                                    <small><strong>5 stars</strong></small>
                                                </div>
                                            </div>
                                            <!-- /row -->
                                            <div class="row">
                                                <div class="col-lg-10 col-9">
                                                    <div class="progress">
                                                        <div class="progress-bar" role="progressbar" style="width: 95%"
                                                             aria-valuenow="95" aria-valuemin="0"
                                                             aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-2 col-3">
                                                    <small><strong>4 stars</strong></small>
                                                </div>
                                            </div>
                                            <!-- /row -->
                                            <div class="row">
                                                <div class="col-lg-10 col-9">
                                                    <div class="progress">
                                                        <div class="progress-bar" role="progressbar" style="width: 60%"
                                                             aria-valuenow="60" aria-valuemin="0"
                                                             aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-2 col-3">
                                                    <small><strong>3 stars</strong></small>
                                                </div>
                                            </div>
                                            <!-- /row -->
                                            <div class="row">
                                                <div class="col-lg-10 col-9">
                                                    <div class="progress">
                                                        <div class="progress-bar" role="progressbar" style="width: 20%"
                                                             aria-valuenow="20" aria-valuemin="0"
                                                             aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-2 col-3">
                                                    <small><strong>2 stars</strong></small>
                                                </div>
                                            </div>
                                            <!-- /row -->
                                            <div class="row">
                                                <div class="col-lg-10 col-9">
                                                    <div class="progress">
                                                        <div class="progress-bar" role="progressbar" style="width: 0"
                                                             aria-valuenow="0" aria-valuemin="0"
                                                             aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-2 col-3">
                                                    <small><strong>1 stars</strong></small>
                                                </div>
                                            </div>
                                            <!-- /row -->
                                        </div>
                                    </div>
                                    <!-- /row -->

                                    <hr/>
                                    <!----Review Box--->

                                    <?php
                                        foreach ($doc_review as $review) {
                                            $vote = $review->rating;
                                            ?>
                                            <div class="review-box clearfix">
                                                <figure class="rev-thumb"><img
                                                            src="<?php echo base_url(); ?>lib/img/avatar1.jpg" alt=""/>
                                                </figure>
                                                <div class="rev-content">
                                                    <div class="rating">
                                                        <i class="icon_star <?php if($vote>0) echo "voted"; $vote--; ?>"></i>
                                                        <i class="icon_star <?php if($vote>0) echo "voted"; $vote--; ?>"></i><i
                                                                class="icon_star <?php if($vote>0) echo "voted"; $vote--; ?>"></i><i
                                                                class="icon_star <?php if($vote>0) echo "voted"; $vote--; ?>"></i><i
                                                                class="icon_star <?php if($vote>0) echo "voted"; $vote--; ?>"></i>
                                                    </div>
                                                    <div class="rev-info">
                                                        <?php echo $review->review_writer . " - " . $review->review_date ?>
                                                    </div>
                                                    <div class="rev-text">
                                                        <p>
                                                            <?php echo $review->review_text ?>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php
                                        }
                                    ?>


                                        <div class="form-group">
                                            <label class="col-md-3 control-label" for="message">Your feedback</label>
                                            <form method="post" action="<?php echo base_url()."welcome/postreview" ?>"
                                            <div class="col-md-9">
                                                <input type="hidden" value="<?php echo $doc_id?>" name="docid"/>
                                                <textarea class="form-control" id="message" name="message" placeholder="Please enter your feedback here..." rows="5"></textarea>
                                            </div>
                                            <button style="float:  right; margin: -72px 0 0 0;" type="submit" class="btn btn-primary btn-md">Submit</button>
                                        </div>

                                    <!-- End review-box -->

                                </div>
                                <!-- End review-container -->
                            </div>
                            <!-- /tab_3 -->
                        </div>
                        <!-- /tab-content -->
                    </div>
                    <!-- /tabs_styled -->
                </div>
                <!-- /col -->
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </main>
<!-- /main -->

<?php
}
?>

	<?php
        $this->load->view('footer');
    ?>
	<!--/footer-->

<div id="toTop"></div>
<!-- Back to top button -->

<!-- COMMON SCRIPTS -->
<script src="<?php echo base_url(); ?>lib/cdn-cgi/scripts/84a23a00/cloudflare-static/email-decode.min.js"></script><script src="<?php echo base_url(); ?>lib/js/jquery-2.2.4.min.js"></script>
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
        datesDisabled: ["2017/10/20", "2017/11/21", "2017/12/21", "2018/01/21", "2018/02/21", "2018/03/21"],

    });
</script>

</body>
</html>