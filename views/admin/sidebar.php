<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        <div class="user-panel">
            <div class="pull-left image">

                <img src="<?php echo base_url().$_SESSION['profile_picture']; ?>" class="img-circle" alt="User Image">

            </div>
            <div class="pull-left info">
                <p><?php echo $_SESSION['username']; ?></p>
                <!-- Status -->
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>



        <!-- Sidebar Menu -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">Options</li>
            <!-- Optionally, you can add icons to the links -->
            <li class="active"><a href="<?php echo base_url(); ?>/admin/dashboard"><i class="fa fa-link"></i> <span>Dashboard</span></a></li>

            <?php
                if($_SESSION['user_type'] == "admin") {
                    ?>
                    <li class="treeview">
                        <a href="#"><i class="fa fa-link"></i> <span>Doctors</span>
                            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="<?php echo base_url(); ?>/admin/doctors">Doctors List</a></li>
                            <li><a href="<?php echo base_url(); ?>/admin/adddoctors">Add Doctor</a></li>
                            <li><a href="<?php echo base_url(); ?>/admin/pendingdoctor">Pending Doctor</a></li>
                        </ul>
                    </li>

                    <li class="treeview">
                        <a href="#"><i class="fa fa-link"></i> <span>Patient</span>
                            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="<?php echo base_url(); ?>/admin/patient">Patient List</a></li>
                            <li><a href="<?php echo base_url(); ?>/admin/addpatient">Add Patient</a></li>
                        </ul>
                    </li>

                    <?php
                }
            ?>

            <?php
                if($_SESSION['user_type'] ==  "doctor") {
                    ?>
                    <li class="active"><a href="<?php echo base_url(); ?>/admin/timing"><i class="fa fa-link"></i>
                            <span>Doctor Time</span></a></li>
                    <li class="active"><a href="<?php echo base_url(); ?>/admin/appointments"><i class="fa fa-link"></i>
                            <span>Appointments</span></a></li>
                    <li class="active"><a href="<?php echo base_url(); ?>/admin/docprofile"><i class="fa fa-link"></i><span>Profile</span></a></li>
                    <?php
                }
                if($_SESSION['user_type'] == "patient") {

                    ?>
                    <li class="active"><a href="<?php echo base_url(); ?>/admin/appointmentspatient"><i
                                    class="fa fa-link"></i> <span>Appointments (Patient) </span></a></li>
                    <li class="active"><a href="<?php echo base_url(); ?>/admin/profile"><i class="fa fa-link"></i><span>Profile</span></a></li>
                    <?php
                }
            ?>

        </ul>
        <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>