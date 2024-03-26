<?php get_header(); ?>

<?php if (have_posts()) : ?>
<div class="cat-nav">
    <?php
    $temp_menu = wp_nav_menu(
        array(
            'theme_location'  => 'blog_menu',
            'menu_id'           => 'programy-nav-list',
        )
    ); ?>
</div>
<div class="posts-wraper">
    <?php while (have_posts()) : the_post();
            get_template_part('templates-parts/content/content-cart-post');
        endwhile; ?>
</div>
<?php if (paginate_links()) { ?>
<div class="go-pagination">
    <?php pagination_bars(); ?>
</div>
<?php } ?>

<?php else : ?>
<header class="entry-header">
    <h1 class='text-center'><?php _e('Nic nie znaleziono', 'go'); ?></h1>
</header>
<?php endif; ?>

<?php get_footer();