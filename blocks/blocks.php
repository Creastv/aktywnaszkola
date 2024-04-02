<?php
function register_acf_block_types()
{
  acf_register_block_type(array(
    'name'              => 'slider',
    'title'             => __('Slider home'),
    'render_template'   => 'blocks/slider/slider.php',
    'category'          => 'formatting',
    'icon' => array(
      'background' => '#122b4f',
      'foreground' => '#fff',
      'src' => 'ellipsis',
    ),
    'mode'            => 'preview',
    'keywords'          => array('slider'),
    'supports' => array('align' => false),
    'enqueue_assets'    => function () {
      wp_enqueue_style('go-slider',  get_template_directory_uri() . '/blocks/slider/slider.min.css');
      wp_enqueue_style('ra_svipeer_css', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css');
      wp_enqueue_script('ra-swiper_js', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js',  array(), '20130456', true);
      // wp_enqueue_script('go-slider-init', get_template_directory_uri() . '/blocks/slider/slider.js', array('jquery'), '4', true);
    },
  ));
  acf_register_block_type(array(
    'name'              => 'container',
    'title'             => __('Kontener'),
    'render_template'   => 'blocks/container/container.php',
    'category'          => 'formatting',
    'icon' => array(
      'background' => '#122b4f',
      'foreground' => '#fff',
      'src' => 'ellipsis',
    ),
    'mode'            => 'preview',
    'keywords'          => array('container'),
    'supports'    => [
      'align'      => false,
      'anchor'    => false,
      'customClassName'  => true,
      'jsx'       => true,
    ],
    'enqueue_assets'    => function () {
      wp_enqueue_style('go-container',  get_template_directory_uri() . '/blocks/container/container.min.css');
    },
  ));

  acf_register_block_type(array(
    'name'              => 'posts-grid',
    'title'             => __('Posty - grid'),
    'render_template'   => 'blocks/posts-grid/posts-grid.php',
    'category'          => 'formatting',
    'icon' => array(
      'background' => '#122b4f',
      'foreground' => '#fff',
      'src' => 'ellipsis',
    ),
    'mode'            => 'preview',
    'keywords'          => array('Aktualności'),
    'supports' => array('align' => false),
    'enqueue_assets'    => function () {
      wp_enqueue_style('go-posts-grid',  get_template_directory_uri() . '/blocks/posts-grid/posts-grid.min.css');
    },
  ));
  acf_register_block_type(array(
    'name'              => 'cta-reg',
    'title'             => __('Zarejestruj się - cta'),
    'render_template'   => 'blocks/cta-reg/cta-reg.php',
    'category'          => 'formatting',
    'icon' => array(
      'background' => '#122b4f',
      'foreground' => '#fff',
      'src' => 'ellipsis',
    ),
    'mode'            => 'preview',
    'keywords'          => array('KV-cta'),
    'supports'    => [
      'align'      => false,
      'anchor'    => false,
      'customClassName'  => true,
      'jsx'       => true,
    ],
    'enqueue_assets'    => function () {
      wp_enqueue_style('go-cta-reg',  get_template_directory_uri() . '/blocks/cta-reg/cta-reg.min.css');
    },
  ));
  acf_register_block_type(array(
    'name'              => 'faq',
    'title'             => __('Najczęściej zadawane pytania'),
    'render_template'   => 'blocks/faq/faq.php',
    'category'          => 'formatting',
    'icon' => array(
      'background' => '#122b4f',
      'foreground' => '#fff',
      'src' => 'ellipsis',
    ),
    'mode'            => 'preview',
    'keywords'          => array('faq'),
    'supports' => array('align' => false),
    'enqueue_assets'    => function () {
      wp_enqueue_style('go-faq',  get_template_directory_uri() . '/blocks/faq/faq.min.css');
      wp_enqueue_script('go-faq-init', get_template_directory_uri() . '/blocks/faq/faq.js', array('jquery'), '4', true);
    },
  ));
  acf_register_block_type(array(
    'name'              => 'centerfold',
    'title'             => __('Rozkładówka'),
    'render_template'   => 'blocks/centerfold/centerfold.php',
    'category'          => 'formatting',
    'icon' => array(
      'background' => '#122b4f',
      'foreground' => '#fff',
      'src' => 'ellipsis',
    ),
    'mode'            => 'preview',
    'keywords'          => array('centerfold'),
    'supports' => array('align' => false),
    'enqueue_assets'    => function () {
      wp_enqueue_style('go-centerfold',  get_template_directory_uri() . '/blocks/centerfold/centerfold.min.css');
      wp_enqueue_script('go-centerfold-init', get_template_directory_uri() . '/blocks/centerfold/centerfold.js', array('jquery'), '4', true);
    },
  ));
  acf_register_block_type(array(
    'name'              => 'faq-global',
    'title'             => __('FAQ'),
    'render_template'   => 'blocks/faq-global/faq-global.php',
    'category'          => 'formatting',
    'icon' => array(
      'background' => '#122b4f',
      'foreground' => '#fff',
      'src' => 'ellipsis',
    ),
    'mode'            => 'preview',
    'keywords'          => array('faq-global'),
    'supports' => array('align' => false),
    'enqueue_assets'    => function () {
      wp_enqueue_style('go-faq-global',  get_template_directory_uri() . '/blocks/faq-global/faq-global.min.css');
      wp_enqueue_script('go-faq-global-init', get_template_directory_uri() . '/blocks/faq-global/faq-global.js', array('jquery'), '4', true);
    },
  ));
  acf_register_block_type(array(
    'name'              => 'button-link',
    'title'             => __('Button'),
    'render_template'   => 'blocks/button/button.php',
    'category'          => 'formatting',
    'icon' => array(
      'background' => '#122b4f',
      'foreground' => '#fff',
      'src' => 'ellipsis',
    ),
    'mode'            => 'preview',
    'keywords'          => array('button'),
    'supports' => array('align' => true),
    'enqueue_assets'    => function () {
      wp_enqueue_style('go-button',  get_template_directory_uri() . '/blocks/button/button.min.css');
    },
  ));
  acf_register_block_type(array(
    'name'              => 'title',
    'title'             => __('Title'),
    'render_template'   => 'blocks/title/title.php',
    'category'          => 'formatting',
    'icon' => array(
      'background' => '#122b4f',
      'foreground' => '#fff',
      'src' => 'ellipsis',
    ),
    'mode'            => 'preview',
    'keywords'          => array('Title'),
    'supports' => array('align' => true),
    'enqueue_assets'    => function () {
      wp_enqueue_style('go-title',  get_template_directory_uri() . '/blocks/title/title.min.css');
    },
  ));
}
if (function_exists('acf_register_block_type')) {
  add_action('acf/init', 'register_acf_block_types');
}

add_filter('acf/settings/save_json', 'my_acf_json_save_point');

function my_acf_json_save_point($path)
{
  // Update path
  $path = get_template_directory() . '/blocks/acf-json';
  // Return path
  return $path;
}
