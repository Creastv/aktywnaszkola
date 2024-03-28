<svg class="f-info__ornament" xmlns="http://www.w3.org/2000/svg" width="1938.744" height="118.269" viewBox="0 0 1938.744 118.269">
    <path id="Forma_10" data-name="Forma 10" d="M-14.6,4455.643l1937.115-.793-1602.5-117.08L-14.6,4414.477Z" transform="translate(14.599 -4337.77)" fill="#36a9e1" />
    <path id="Forma_11" data-name="Forma 11" d="M-14.538,4444.181v11.858H1924.145v-11.858L1501.115,4391l-664.76,48.346L261.035,4391Z" transform="translate(14.599 -4337.77)" fill="#185ab1" />
</svg>
<div class="f-col f-info">
    <div class="container">
        <div class="f-info__wrap">
            <div class="left">
                <?php $temp_menu = wp_nav_menu(
                    array(
                        'theme_location'  => 'footer_menu',
                        'menu_id'           => 'footer-nav-list',
                    )
                ); ?>
            </div>
            <div class="right">
                <?php get_template_part('templates-parts/parts/social_media'); ?>
            </div>
            <div class="center">
                <p>© 2024 Wszelkie prawa zastrzeżone. Projekt i realizacja <a href="https://roial.pl" target="_blank">roial.pl</a></p>
            </div>
        </div>
    </div>
</div>