<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <meta name="description" content="Amarou - Construction And Building Template">
        <link href="<?= base_url() ?>assets/images/favicon/favicon.png" rel="icon">
        <title>Amarou - Construction And Building Template</title>
        <link rel="stylesheet"
              href="https://fonts.googleapis.com/css?family=Rubik:400,500,600,700%7cRoboto:400,500,700&display=swap">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css">
        <link rel="stylesheet" href="<?= base_url() ?>assets/css/libraries.css">
        <link rel="stylesheet" href="<?= base_url() ?>assets/css/style.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
        <?php
        if (!empty($assets['css'])) {
            foreach ($assets['css'] as $value) {
                echo '<link type="text/css" rel="stylesheet" href="' . base_url() . $value . '" />' . PHP_EOL . '                ';
            }
        }
        ?>
    </head>

    <body>
        <div class="wrapper">
            <div class="preloader">
                <div class="spinner"><span class="cube1"></span><span class="cube2"></span></div>
            </div><!-- /.preloader -->

            <!-- =========================
                Header
            =========================== -->
            <header class="header header-light header-layout1">
                <div class="header-topbar d-none d-xl-block">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-12 col-md-7 col-lg-7">
                                <div class="d-flex flex-wrap justify-content-between">
                                    <ul class="contact-list list-unstyled mb-0 d-flex flex-wrap">
                                        <li>
                                            <i class="icon-phone"></i><span>Phone:</span>
                                            <a href="tel:556554117">Phone: +234 908 700 5780</a>
                                        </li>
                                        <li>
                                            <i class="icon-envelope"></i><span>Email:</span>
                                            <a href="javascript:void(0)">info@amsfinanceltd.com</a>
                                        </li>

                                    </ul>
                                </div>
                            </div><!-- /.col-lg-7 -->
                            <div class="col-sm-12 col-md-5 col-lg-5 d-flex flex-wrap justify-content-end">
                                <ul class="header-topbar__links d-flex flex-wrap list-unstyled mb-0">
                                    <li><a href="#">Insight</a></li>
                                    <li><a href="#">Contacts</a></li>
                                    <li><a href="#">Careers</a></li>
                                </ul>
                                <ul class="social-icons list-unstyled mb-0">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></i></a></li>
                                </ul>
                            </div><!-- /.col-lg-5 -->
                        </div><!-- /.row -->
                    </div><!-- /.container -->
                </div><!-- /.header-topbar -->
                <nav class="navbar navbar-expand-lg">
                    <div class="container-fluid px-0">
                        <a class="navbar-brand" href="<?= base_url() ?>">
                            <img src="<?= base_url() ?>assets/images/custom/logo.svg" class="logo-dark" alt="logo">
                        </a>
                        <button class="navbar-toggler" type="button">
                            <span class="menu-lines"><span></span></span>
                        </button>
                        <div class="collapse navbar-collapse" id="mainNavigation">
                            <ul class="navbar-nav ml-auto">
                                <li class="nav__item">
                                    <a href="<?= base_url() ?>" class="nav__item-link">Home</a>
                                </li>
                                <li class="nav__item with-dropdown">
                                    <a href="<?= base_url() ?>about" class="dropdown-toggle nav__item-link active">About US</a>
                                    <i class="fa fa-angle-down" data-toggle="dropdown"></i>
                                    <ul class="dropdown-menu">
                                        <li class="nav__item"><a href="<?= base_url() ?>our_leaders" class="nav__item-link">Our Leaders</a></li>
                                        <!-- /.nav-item -->
                                       

                                        <!-- /.nav-item -->
                                    </ul><!-- /.dropdown-menu -->
                                </li><!-- /.nav-item -->
                                <li class="nav__item with-dropdown">
                                    <a href="<?= base_url() ?>our_services" class="dropdown-toggle nav__item-link active">Our Services</a>
                                    <i class="fa fa-angle-down" data-toggle="dropdown"></i>
                                    <ul class="dropdown-menu">
                                        <li class="nav__item"><a href="<?= base_url() ?>about_us" class="nav__item-link">One</a></li>
                                        <!-- /.nav-item -->
                                        <li class="nav__item"><a href="<?= base_url() ?>our_services" class="nav__item-link">Two</a>
                                        </li>
                                    </ul><!-- /.dropdown-menu -->
                                </li>
                                <li class="nav__item with-dropdown">
                                    <a href="<?= base_url() ?>" class="dropdown-toggle nav__item-link active">News & Media</a>
                                    <i class="fa fa-angle-down" data-toggle="dropdown"></i>
                                    <ul class="dropdown-menu">
                                        <li class="nav__item"><a href="<?= base_url() ?>about_us" class="nav__item-link">One</a></li>
                                        <!-- /.nav-item -->
                                        <li class="nav__item"><a href="<?= base_url() ?>our_services" class="nav__item-link">Two</a>
                                        </li>
                                    </ul><!-- /.dropdown-menu -->
                                </li>
                                <!-- /.nav-item -->
                            </ul><!-- /.navbar-nav -->
                        </div><!-- /.navbar-collapse -->
                        <div class="header-actions d-flex align-items-center">
                            <button type="button" class="action-btn__search"><i class="fas fa-search"></i></button>
                            <a href="#" class="btn btn__primary action-btn__request">
                                <span>Consult Us Today</span><i class="icon-arrow-right"></i>
                            </a>
                        </div>
                    </div><!-- /.container -->
                </nav><!-- /.navabr -->
            </header><!-- /.Header -->