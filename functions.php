<?php 

// carrega os campos personalizados do CMB2
require_once get_template_directory() . '/cmb2/load.php';


// Custom Images Sizes
function my_custom_sizes() {
	add_image_size('large', 1400, 380, true);
	add_image_size('medium', 768, 380, true);
}
add_action('after_setup_theme', 'my_custom_sizes');

?>