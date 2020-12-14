

<header class="header_sticky">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-6">
                <div id="logo_home">
                    <h1><a href="<?php echo base_url(); ?>/welcome" title="Findoctor">Findoctor</a></h1>
                </div>
            </div>

            <nav class="col-lg-9 col-6">
                <a class="cmn-toggle-switch cmn-toggle-switch__htx open_close" href="#0"><span>Menu mobile</span></a>

                <?php
                    if(!isset($_SESSION['username'])) {
                        ?>

                        <ul id="top_access">
                            <li><a href="<?php echo base_url(); ?>/welcome/login"><i class="pe-7s-user"></i></a></li>
                            <li><a href="<?php echo base_url(); ?>welcome/register"><i class="pe-7s-add-user"></i></a>
                            </li>
                        </ul>
                        <?php
                    }
                ?>
                <div class="main-menu">
                    <ul>
                        <li class="submenu">
                            <a href="<?php echo base_url(); ?>/welcome/" class="show-submenu">Home</i></a>
                        </li>
                        <li class="submenu">
                            <a href="<?php echo base_url(); ?>/welcome/" class="show-submenu">Diagnostic Center</a>
                        </li>
                        <?php
                        if(isset($_SESSION['username'])){
                        ?>
                        <li class="submenu">
                            <a href="<?php echo base_url(); ?>/admin" class="show-submenu"><?php
                                echo $_SESSION['username'];
                                ?></a>
                        </li>
                        <?php
                        }
                        ?>
                        <?php
                        if(isset($_SESSION['username'])){
                        ?>
                        <li class="submenu">
                            <a href="<?php echo base_url(); ?>/welcome/logout" class="show-submenu">Logout</i></a>

                        </li>
                            <?php
                        }
                        ?>
                    </ul>

                </div>
                <!-- /main-menu -->
            </nav>
        </div>
    </div>
    <!-- /container -->