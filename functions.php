
  <?php

function load_stylesheets()
{


wp_register_style('utilities', get_template_directory_uri() . '/css/utilities.css', array(), 1, 'all');
wp_enqueue_style('utilities');

wp_register_style('style', get_template_directory_uri() . '/css/style.css', array(), 1, 'all');
wp_enqueue_style('style');

wp_register_style('lightbox', get_template_directory_uri() . '/css/lightbox.min.css', array(), 1, 'all');
wp_enqueue_style('lightbox');




}
add_action('wp_enqueue_scripts', 'load_stylesheets');



function addjs() {
wp_register_script( 'jQuery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0-beta1/jquery.min.js', null, null, true );
wp_enqueue_script('jQuery');
wp_register_script( 'Glitch', 'https://cdn.jsdelivr.net/gh/hmongouachon/mgGlitch/src/mgGlitch.min.js', null, null, true );
wp_enqueue_script('Glitch');
wp_register_script( 'baffle', 'https://cdn.jsdelivr.net/npm/baffle@0.3.6/dist/baffle.min.js', null, null, true );
wp_enqueue_script('baffle');


  wp_register_script('lightboox', get_template_directory_uri() . '/main.js/lightbox.min.js', array(), 1, 1, 1);
  wp_enqueue_script('lightboox');
  wp_register_script('scroll', get_template_directory_uri() . '/main.js/scroll.js', array(), 1, 1, 1);
  wp_enqueue_script('scroll');
  wp_register_script('typewriter', get_template_directory_uri() . '/main.js/typewriter.js', array(), 1, 1, 1);
  wp_enqueue_script('typewriter');
}

add_action('wp_enqueue_scripts', 'addjs');


  wp_enqueue_script('jquery');




 