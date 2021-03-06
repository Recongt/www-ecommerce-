<?php
	get_header();
	if ( wootique_get_woo_option( 'woo_homepage_content' ) == 'true' ) {
?>
	<div id="introduction">
<?php
	$args = array( 'posts_per_page' => 1 );
	$loop = new WP_Query( $args );
	while ( $loop->have_posts() ) : $loop->the_post();
?>

				<article <?php post_class(); ?>>

	                <?php if ( wootique_get_woo_option( 'woo_post_content' ) != 'content' ) { woo_image( 'width=' . wootique_get_woo_option( 'woo_thumb_w' ) . '&height=' . wootique_get_woo_option( 'woo_thumb_h' ) . '&class=thumbnail ' . wootique_get_woo_option( 'woo_thumb_align' ) ); } ?>

	                <header>

	                	<h1><a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>

	                </header>

	                <section class="entry">
	                    <?php if ( wootique_get_woo_option( 'woo_post_content' ) == 'content' ) { the_content( __( 'Continue Reading &rarr;', 'woothemes' ) ); } else { the_excerpt(); } ?>
	                </section>

	            </article><!-- /.post -->

			<?php endwhile; ?>

	</div>
	<?php
		}
	?>

	<div id="featured-products" class="<?php if ( get_option( 'woo_featured_product_style' ) == 'slider' ) { echo 'fp-slider'; } ?>">
		<h2><?php _e( 'Featured Products', 'woothemes' ); ?></h2>

		<ul class="featured-products">
<?php
$args = array( 'post_type' => 'product', 'posts_per_page' => get_option( 'woo_featured_product_limit' ), 'meta_key' => '_featured', 'meta_value' => 'yes' );
$loop = new WP_Query( $args );
while ( $loop->have_posts() ) : $loop->the_post(); $_product;
if ( function_exists( 'get_product' ) ) {
	$_product = get_product( $loop->post->ID );
} else {
	$_product = new WC_Product( $loop->post->ID );
}
?>
			<li class="flipper">


					<div class="front">

						<?php woocommerce_show_product_sale_flash( $post, $_product ); ?>

							<a href="<?php echo get_permalink( $loop->post->ID ) ?>" title="<?php echo esc_attr($loop->post->post_title ? $loop->post->post_title : $loop->post->ID); ?>">
							<?php if ( has_post_thumbnail( $loop->post->ID ) ) echo get_the_post_thumbnail( $loop->post->ID, 'shop_thumbnail' ); else echo '<img src="' . $woocommerce->plugin_url() . '/assets/images/placeholder.png" alt="Placeholder" width="' . wc_get_image_size( 'shop_thumbnail_image_width' ) . 'px" height="' . wc_get_image_size( 'shop_thumbnail_image_height' ) . 'px" />'; ?>
							</a>

					</div><!--/.front-->

					<div class="back">
						<h3><a href="<?php echo get_permalink( $loop->post->ID ) ?>" title="<?php echo esc_attr($loop->post->post_title ? $loop->post->post_title : $loop->post->ID); ?>">	<?php the_title(); ?></a></h3>
						<span class="price"><?php echo $_product->get_price_html(); ?></span>
						<?php do_action( 'woocommerce_after_shop_loop_item' ); ?>
					</div><!--/.back-->

			</li>
			<?php endwhile; ?>
		</ul>
		<div class="clear"></div>
	</div><!--/#featured-products-->

    <div id="content" class="col-full">

		<div id="main" class="col-left">

			<div class="product-gallery">
				<h2><?php _e( 'Recent Products', 'woothemes' ); ?></h2>
				<?php echo do_shortcode( '[recent_products per_page="12" columns="3"]' ); ?>
			</div><!--/.product-gallery-->

		</div><!-- /#main -->

        <?php get_sidebar(); ?>

    </div><!-- /#content -->

<?php get_footer(); ?>