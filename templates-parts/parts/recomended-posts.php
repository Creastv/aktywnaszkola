<?php
$category_object = get_the_category(get_the_ID());
$category_name = $category_object[0]->name;
$obecny = get_the_ID();

$articles = new WP_Query(array(
    'post_type' => 'post',
    'posts_per_page' => 3,
    'order' => 'DESC',
    // 'category_name' => $category_name,
    'orderby'        => 'rand',
    // 'post__not_in' => array($obecny),

));
?>
<div class="recommended-posts">
    <div class="recommended-posts__wrap">
        <h3 class="text-center h2"><?php _e('Może cię zainteresować', 'go'); ?></h3>
        <div class="recommended-posts__posts-wraper posts-wraper--suggested">
            <?php while ($articles->have_posts()) : $articles->the_post(); ?>
                <?php get_template_part('templates-parts/content/content-cart-post');  ?>
            <?php endwhile;
            wp_reset_query(); ?>
        </div>
    </div>
</div>