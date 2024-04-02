<?php
$po = array(
    'post_type' => 'post',
    'posts_per_page' => 3,
    'ignore_sticky_posts' => 1,
);
$query_posts_one = new WP_Query($po);

?>
<div class="posts-grid">
    <div class="posts-grid__wrap posts-grid__wrap--style-one">

        <?php while ($query_posts_one->have_posts()) {
            $query_posts_one->the_post();
            $term_list = wp_get_post_terms(get_the_id(), 'category', array("fields" => "names"));
        ?>
            <div class="col">
                <?php get_template_part('templates-parts/content/content-cart-post'); ?>
            </div>
        <?php }
        wp_reset_postdata(); ?>
    </div>
</div>