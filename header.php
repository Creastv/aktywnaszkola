<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta name="google-site-verification" content="EecTcvdM0xO2hTF18KPt-aHk1WlgoacxMqV7DU-UW0Y" />
    <meta name="theme-color" content="#fff">
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php wp_title('|', true, 'right'); ?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.typekit.net/gsg1ift.css">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header id="header" class="js-header" itemscope itemtype="http://schema.org/WPHeader">
        <!-- <div class="container-full"> -->
        <div class="navbar js-navbar">

            <?php get_template_part('templates-parts/header/header', 'brand'); ?>
            <div class="navbar-wrap">
                <?php get_template_part('templates-parts/header/header', 'nav-top'); ?>
                <?php get_template_part('templates-parts/header/header', 'nav');
                ?>
            </div>
            <?php get_template_part('templates-parts/header/header', 'burger');
            ?>

        </div>
        <?php // if (!is_singular('post')) : 
        ?>
        <?php if (is_front_page() && !is_home() || is_singular('post')) : ?>

        <?php else : ?>
            <?php get_template_part('templates-parts/header/header', 'title');  ?>
        <?php endif; ?>
        <?php //endif; 
        ?>
        <!-- </div> -->

        <svg class="h-ornament" xmlns="http://www.w3.org/2000/svg" width="1920.451" height="143.068" viewBox="0 0 1920.451 143.068">
            <g id="border" transform="translate(15.306 -619.75)">
                <path id="Trazado_59" data-name="Trazado 59" d="M5130.694,429.537H7051.146V354.126H5130.694Z" transform="translate(-5146 333.28)" fill="#fff" />
                <path id="Forma_1" data-name="Forma 1" d="M331,543.36l1600.146-77.732V552.2Z" transform="translate(-26 165.952)" fill="#36a9e1" />
                <path id="Forma_2" data-name="Forma 2" d="M18.654,610.5l975.755,57.615L18.654,745.81Z" transform="translate(-33.96 9.253)" fill="#185ab1" />
            </g>
        </svg>

    </header>


    <main id="main">
        <div class="container">
            <div class="row">