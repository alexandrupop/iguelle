<?php
/**
 * The template for displaying product content within loops.
 *
 * Override this template by copying it to yourtheme/woocommerce/content-product.php
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

global $product, $woocommerce_loop;

// Store loop count we're currently on
if ( empty( $woocommerce_loop['loop'] ) )
	$woocommerce_loop['loop'] = 0;

// Store column count for displaying the grid
if ( empty( $woocommerce_loop['columns'] ) )
	$woocommerce_loop['columns'] = apply_filters( 'loop_shop_columns', 4 );

// Ensure visibility
if ( ! $product->is_visible() )
	return;

// Increase loop count
$woocommerce_loop['loop']++;

$thumb = '';
$width = 580;
$height = 773;
$classtext = '';
$titletext = get_the_title();
$thumbnail = get_thumbnail( $width, $height, $classtext, $titletext, $titletext, false, 'ProductImage' );
$thumb = $thumbnail["thumb"];

$et_price_before = 'variable' == $product->product_type ? $product->min_variation_regular_price : $product->regular_price;
?>
<li class="igu_product_li">
  <div class="igu_product_li_left" style="float: left; width: 70%; position: relative;">

  	<?php // do_action( 'woocommerce_before_shop_loop_item' ); ?>

  	<a href="<?php the_permalink(); ?>">
  		<?php print_thumbnail( $thumb, $thumbnail["fullpath"], $titletext, $width, $height, $classtext ); ?>
  	</a>
  	
  </div>
  <div class="igu_product_li_right" style="float: left; width: 27%">
<?php woocommerce_show_product_sale_flash( $post, $product ); ?>
    <? do_action( 'woocommerce_single_product_summary' ); ?>
    <? //do_action( 'woocommerce_after_single_product_summary' ); ?>

    <?php //do_action( 'woocommerce_after_shop_loop_item' ); ?>  
    <a href="<?php the_permalink(); ?>" style="display: block; text-align: right; color: #666;  font-size: 15px"><i>Detalii</i></a>
  </div>
  <div class="clear"></div>

</li>