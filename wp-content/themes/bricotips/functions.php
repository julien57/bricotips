<?php

add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
function theme_enqueue_styles() {
	wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
	wp_enqueue_style('theme-style', get_stylesheet_directory_uri() . '/css/theme.css', [], filemtime(get_stylesheet_directory() . '/css/theme.css'));
	wp_enqueue_style('image-titre-widget', get_stylesheet_directory_uri() . '/css/widgets/image-titre-widget.css', [], filemtime(get_stylesheet_directory() . '/css/widgets/image-titre-widget.css'));
}

// Chargement des widgets
require_once(__DIR__ . '/widgets/ImageTitreWidget.php');

function register_widgets() {
	register_widget('Image_Titre_Widget');
}
add_action('widgets_init', 'register_widgets');