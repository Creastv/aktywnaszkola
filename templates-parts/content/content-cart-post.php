<?php $term_list = wp_get_post_terms($post->ID, 'category', array("fields" => "names"));
$term_id = wp_get_post_terms($post->ID, 'category', array("fields" => "ids"));


?>
<article class="card-post <?php echo $post->ID; ?>">
    <header class="cat-<?php echo $term_id[0]; ?>">
        <a href="<?php the_permalink(); ?>">
            <?php if (has_post_thumbnail($post->ID)) : ?>
                <?php the_post_thumbnail('post-futured', array('alt' => get_the_title())); ?>
            <?php else : ?>
                <img src="<?php echo get_template_directory_uri(); ?>/src/img/thumbnail.png" alt="<?php the_title(); ?> ">
            <?php endif; ?>
            <div class="entry-date"><span><?php echo get_the_date('j M', get_the_ID()); ?></span></div>
            <svg xmlns="http://www.w3.org/2000/svg" width="480.684" height="73.125" viewBox="0 0 480.684 73.125">
                <g id="border" transform="translate(12.684 -466)">
                    <path id="Forma_1" data-name="Forma 1" d="M331,538.125,809.684,465v73.125Z" transform="translate(-341.684 1)" fill="#fff" opacity="0.738" />
                </g>
                <g id="border-2" data-name="border" transform="translate(10.684 -466)" opacity="0.7">
                    <path id="Forma_1-2" data-name="Forma 1" d="M809.311,538.125,331,465v73.125Z" transform="translate(-341.684 1)" fill="#fff" opacity="0.968" />
                </g>
            </svg>
        </a>
        <div class="entry-term">
            <span> <?php echo $term_list[0]; ?></span>
        </div>

    </header>
    <div class="entry-wraper">
        <h2 class="entry-title h3">
            <a href="<?php the_permalink(); ?>">
                <?php echo mb_strimwidth(get_the_title(), 0, 50, '...'); ?>
            </a>
        </h2>
        <div class="entry-content">
            <?php the_excerpt(); ?>
        </div>
    </div>
</article>