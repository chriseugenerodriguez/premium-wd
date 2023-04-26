<?php
/**
 * Single Product Image
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.0.14
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

global $post, $woocommerce, $product;

?>

<div class="columns six">
  <div class="images">
    <div class="slider">

<?php 
$attachment_ids = $product->get_gallery_attachment_ids();
$lightbox_en = get_option( 'woocommerce_enable_lightbox' ) == 'yes' ? true : false;
if ( $lightbox_en ) 
{
?>
	<a href="<?php if ( has_post_thumbnail() ) { echo $feat_image = wp_get_attachment_url( get_post_thumbnail_id(get_the_ID()) ); } ?>" itemprop="image" class="fresco zoom"  data-fresco-group="product-gallery" title="<?php echo $image_caption_custom = esc_attr( get_post_field( 'post_excerpt', get_post_thumbnail_id(get_the_ID())) ); ?>">
	<?php echo $image_custom = wp_get_attachment_image( get_post_thumbnail_id(get_the_ID()), apply_filters( 'single_product_large_thumbnail_size', 'shop_single' ), 0, $attr = array() ); ?>
	</a>
<?php 	
}
else 
{ 
echo $image_custom = wp_get_attachment_image( get_post_thumbnail_id(get_the_ID()), apply_filters( 'single_product_large_thumbnail_size', 'shop_single' ), 0, $attr = array() ); 
}
?>
		<?php if ( has_post_thumbnail() ) {
		foreach ( $attachment_ids as $attachment_id ) {

  			//$lightbox_en = get_option( 'woocommerce_enable_lightbox' ) == 'yes' ? true : false;
			$image_title 	= esc_attr( get_the_title( get_post_thumbnail_id() ) );
			$image_caption 	= get_post( get_post_thumbnail_id() )->post_excerpt;
			$image_link  	= wp_get_attachment_url( $attachment_id  );
			$image       	= wp_get_attachment_image( $attachment_id, apply_filters( 'single_product_large_thumbnail_size', 'shop_single' ), 0, array() );

			$attachment_count = count( $product->get_gallery_attachment_ids() );
			
		if ( $lightbox_en ) {
			echo apply_filters( 'woocommerce_single_product_image_html', sprintf( '<a href="%s" itemprop="image" class="fresco zoom" title="%s" data-fresco-group="product-gallery">%s</a>', $image_link, $image_caption, $image ), $post->ID );
			}
			else
			{
				echo apply_filters( 'woocommerce_single_product_image_html', sprintf($image), $post->ID );
			}
		}
		}
		
		?>
	
<?php 
/*?>      <?php
		 $args = array(
   'post_type' => 'attachment',
   'numberposts' => -1,
   'post_status' => null,
   'order' => 'ASC',   
   'post_parent' => $post->ID
  );
  $attachments = get_posts( $args );
 		 if ( $lightbox_en ) {
			if ( $attachments ) {
				foreach ( $attachments as $attachment ) {
					echo '<a class="fresco zoom" data-fresco-group="product-gallery" href="'.wp_get_attachment_url( $attachment->ID ) .'">';
				   echo wp_get_attachment_image( $attachment->ID, 'single_product_large_thumbnail_size' );
				   echo '</a>';
				 }
			}
		 }
		 else {
		 foreach ( $attachments as $attachment ) {
           echo wp_get_attachment_image( $attachment->ID, 'single_product_large_thumbnail_size' );
          
		 }
     }
	?>
<?php */?>   </div>
  </div>
  <?php do_action( 'woocommerce_product_thumbnails' ); ?>
</div>
