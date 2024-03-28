<?php

$slides = get_field('slides');

$id = 'home-slider-' . $block['id'];
if (!empty($block['anchor'])) {
    $id = $block['anchor'];
}
$className = 'home-slider';
if (!empty($block['className'])) {
    $className .= ' ' . $block['className'];
}
?>
<div id="<?php echo esc_attr($id); ?>" class=" <?php echo esc_attr($className); ?>">
    <div class="home-slider__wrap">
        <?php if ($slides) : ?>
            <div class="swiper js-home-slider">
                <div class="swiper-wrapper">
                    <?php foreach ($slides as $slide) : ?>
                        <div class="swiper-slide" style="background-image: url(<?php echo $slide['img']; ?>)">
                            <div class="container-full">
                                <div class="slide">
                                    <div class="slide__content">
                                        <div class="slide__content-wraper">
                                            <<?php echo $slide['tag']; ?> class="slider__content_title" style="color:<?php echo $slide['kolor_czcionki']; ?>;">
                                                <?php echo $slide['tytul']; ?>
                                            </<?php echo $slide['tag']; ?>>
                                            <div class="btn__wraper">
                                                <p style="color:<?php echo $slide['kolor_czcionki']; ?>;">
                                                    <?php echo $slide['opis']; ?>
                                                </p>
                                                <!-- <?php
                                                        $link = $slide['link'];
                                                        if ($link) :
                                                            $link_url = $link['url'];
                                                            $link_title = $link['title'];
                                                            $link_target = $link['target'] ? $link['target'] : '_self';
                                                        ?>
                                                    <a class="btn-rev" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
                                                <?php endif; ?> -->
                                                <a href="#" class="btn-rev js-opener-modal">bądź na bieżąco</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="kv">
                                        <?php echo wp_get_attachment_image($slide['img_kv'], 'full'); ?>
                                    </div>
                                </div>
                            </div>
                            <svg class="h-ornament" xmlns="http://www.w3.org/2000/svg" width="1920" height="331" viewBox="0 0 1920 331">
                                <g id="border" transform="translate(14 -465)">
                                    <path id="Forma_2" data-name="Forma 2" d="M-14,610.493,993.96,690.9-13,796Z" fill="#185ab1" />
                                    <path id="Forma_1" data-name="Forma 1" d="M331.648,763.211,1937.082,465,1939,794Z" transform="translate(-33)" fill="#36a9e1" />
                                </g>
                            </svg>

                        </div>
                    <?php endforeach; ?>
                </div>


            </div>
            <!-- <div class="autoplay-progress">
            <svg viewBox="0 0 48 48">
                <circle cx="24" cy="24" r="20"></circle>
            </svg>
            <span></span>
        </div> -->
            <!-- <div class="swiper-pagination"></div> -->
            <div class="swiper-pagination swiper-pagination--slider"></div>

    </div>

<?php endif; ?>
</div>