<?php
/**
 * The right sidebar containing the main widget area.
 *
 * @package denver
 */

if ( is_shop() || is_cart() || is_checkout()) {
	$denver_sidebar = 'shop-sidebar';
} else {
	$denver_sidebar = 'right-sidebar';
}
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

if(is_archive('product_cat')){
    return;
}

if ( ! is_active_sidebar( $denver_sidebar ) ) {
	return;
}

// when both sidebars turned on reduce col size to 3 from 4.
$sidebar_pos = get_theme_mod( 'denver_sidebar_position' );
?>

<?php if ( 'both' === $sidebar_pos ) : ?>
<div class="col-md-3 widget-area" id="right-sidebar" role="complementary">
	<?php else : ?>
    <div class="col-md-4 widget-area" id="right-sidebar" role="complementary">
		<?php endif; ?>
		<?php dynamic_sidebar( $denver_sidebar ); ?>

    </div><!-- #right-sidebar -->
