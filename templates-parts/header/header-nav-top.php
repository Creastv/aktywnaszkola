<div class="navbar__top">
    <?php
    $temp_menu = wp_nav_menu(
        array(
            'theme_location'  => 'secondary_menu',
            'menu_id'           => 'programy-nav-list',
            'link_before' => '<span>',
            'link_after' => '</span>',
        )
    ); ?>
    <?php get_template_part('templates-parts/header/header', 'cta'); ?>
</div>