<?php

// CHARGEMENT DES SCRIPTS
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
function theme_enqueue_styles() {
	wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
	wp_enqueue_style('theme-style', get_stylesheet_directory_uri() . '/css/theme.css', [], filemtime(get_stylesheet_directory() . '/css/theme.css'));
	wp_enqueue_style('image-titre-widget', get_stylesheet_directory_uri() . '/css/widgets/image-titre-widget.css', [], filemtime(get_stylesheet_directory() . '/css/widgets/image-titre-widget.css'));
	wp_enqueue_style('bloc-lien-image-widget', get_stylesheet_directory_uri() . '/css/widgets/bloc-lien-image-widget.css', [], filemtime(get_stylesheet_directory() . '/css/widgets/bloc-lien-image-widget.css'));
	wp_enqueue_style('banniere-titre-shortcode', get_stylesheet_directory_uri() . '/css/shortcodes/banniere-titre.css', [], filemtime(get_stylesheet_directory() . '/css/shortcodes/banniere-titre.css'));
}


// Chargement des widgets
require_once(__DIR__ . '/widgets/ImageTitreWidget.php');
require_once(__DIR__ . '/widgets/BlocLienImageWidget.php');

function register_widgets() {
	register_widget('Image_Titre_Widget');
	register_widget('Bloc_Lien_Image_Widget');
}
add_action('widgets_init', 'register_widgets');


// SHORTCODES
add_shortcode('banniere-titre', 'banniere_titre_func');
function banniere_titre_func($atts) {
	$atts = shortcode_atts([
		'src' => '',
		'titre' => 'Titre'
	], $atts, 'banniere-titre');

	ob_start();

	if ($atts['src'] !== '') {
		?>

		<div class="banniere-titre" style="background-image: url(<?= $atts['src'] ?>)">
			<h2 class="titre"><?= $atts['titre'] ?></h2>
		</div>

		<?php
	}

	$output = ob_get_contents();
	ob_end_clean();

	return $output;
}