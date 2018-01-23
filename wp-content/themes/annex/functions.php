<?php

function annex_files(){
  

  wp_enqueue_script('jquery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/core.js');
  wp_enqueue_script('BootstrapJS', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js');
  wp_enqueue_style('BootstrapCss','https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'); 

  wp_enqueue_style( 'theme-stylesheet', get_stylesheet_uri(),Null,microtime());

}


add_action( 'wp_enqueue_scripts', 'annex_files' );


?>