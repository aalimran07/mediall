<?php
;/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Mediall
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header id="header" class="header-area">
        <div class="topbar-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 text-left">
                        <div class="topbar-left-content">
                            <p><span class="fa fa-headphones"></span> For Emergency Call: <span>123 123 0000</span> </p>
                        </div>
                    </div>
                    <div class="col-md-6 text-right">
                        <div class="topbar-right-content">
                            <ul>
                                <li><a href="#"><span class="fa fa-shield"></span>FAQ</a></li>
                                <li><a href="#"><span class="fa fa-user-circle"></span>Register</a></li>
                                <li><a href="#"><span class="fa fa-globe"></span>Eng</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="logo-address-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 text-left">
                        <div class="top-address">
                            <div class="address-icon">
                                <span class="fa fa-phone"></span>
                            </div>
                            <div class="address">
                                <p><span>Call Us: </span> (+2) 450-9494-0120</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 text-center">
                        <div class="website-logo">
                            <img src="asset/img/logo.png" alt="">
                        </div>
                    </div>
                    <div class="col-md-4 text-right">
                        <div class="top-address">
                            <div class="address-icon">
                                <span class="fa fa-envelope-o"></span>
                            </div>
                            <div class="address text-left">
                                <p><span>Email Us: </span> surgecare@example.com
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- /header -->
    <!-- Start Nav area  -->
    <div class="menu-area">
        <div class="container">
            <nav class="navbar navbar-expand-lg justify-content-end navbar-light">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <?php if (has_nav_menu('main-menu')) : ?>
                            <?php wp_nav_menu(array(
                            'theme_location' => 'main-menu',
                            'menu_class'     =>  'navbar-nav menu mr-auto',
                    )); ?>
                    <?php endif; ?>
                    <ul class="navbar-nav ml-auto appointment-btn">
                        <li>
                            <a href="#"><i class="fa fa-calendar-check-o" aria-hidden="true"></i>Book appointment</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
    <!-- end of nav area -->