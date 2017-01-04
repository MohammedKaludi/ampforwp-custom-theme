<?php global $redux_builder_amp;  ?>
<!doctype html>
<html amp>
<head>
	<meta charset="utf-8">
    <link rel="dns-prefetch" href="https://cdn.ampproject.org">
	<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no">
	<?php do_action( 'amp_post_template_head', $this ); ?>
	<style amp-custom>
	<?php $this->load_parts( array( 'style' ) ); ?>
	<?php do_action( 'amp_post_template_css', $this ); ?>
	</style>
</head>
<body class="single-post">
<?php $this->load_parts( array( 'header-bar' ) ); ?>

<?php do_action( 'ampforwp_after_header', $this ); ?>
	<main>
		<article class="amp-wp-article">
			<?php do_action('ampforwp_post_before_design_elements') ?>

				<?php 
					if ( has_post_thumbnail() ) { 
						$thumb_id = get_post_thumbnail_id();
						$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'large', true);
						$thumb_url = $thumb_url_array[0];

						// var_dump($thumb_url_array); ?>
						<div class="ampforwp-featured-holder">
							<amp-img
							    src="<?php echo $thumb_url ?>"		   
							    width="<?php echo $thumb_url_array[1] ?>"
							    height="<?php echo $thumb_url_array[2] ?>"
							    layout="responsive"
							    alt="an image">
							</amp-img>
							<header class="amp-wp-article-header ampforwp-title">
								<h1 class="amp-wp-title"><?php echo wp_kses_data( $this->get( 'post_title' ) ); ?></h1>
								<div class="ampforwp-meta-info">
									<span>Politial News By Dan Formmer</span>
								</div>
							</header>
						</div><?php
					}
				?>

				<div class="amp-post-social-share">
					<amp-social-share type="facebook" width="200" height="35" data-param-app_id="254325784911610"></amp-social-share>
					<amp-social-share type="twitter" width="200" height="35" data-param-text="<?php echo wp_kses_data( $this->get( 'post_title' ) ); ?>" data-param-url="<?php echo trailingslashit( get_permalink() ) . AMP_QUERY_VAR ; ?>"></amp-social-share>
				</div>

				<div class="amp-wp-article-content"> <?php

					do_action('ampforwp_inside_post_content_before'); 
						$amp_custom_content_enable = get_post_meta( $this->get( 'post_id' ) , 'ampforwp_custom_content_editor_checkbox', true);

						// Normal Front Page Content
						if ( ! $amp_custom_content_enable ) {
							echo $this->get( 'post_amp_content' ); // amphtml content; no kses
						} else {
							// Custom/Alternative AMP content added through post meta  
							echo $this->get( 'ampforwp_amp_content' );
						} 
						
					do_action('ampforwp_inside_post_content_after') ?>

				</div>

				<div class="ampforwp-custom-related-post">
					<?php $this->load_parts( array( 'ampforwp-related-posts' ) ); ?>
				</div>

				<div class="comment-button-wrapper">
			    	<a href="<?php echo get_permalink().'#commentform' ?>"> Leave a Comment </a>
				</div>


			<?php do_action('ampforwp_post_after_design_elements') ?>
		</article>
	</main>
<?php $this->load_parts( array( 'footer' ) ); ?>
<?php do_action( 'amp_post_template_footer', $this ); ?>
</body>
</html>
