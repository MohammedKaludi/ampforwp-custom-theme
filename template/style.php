<?php
add_action('amp_post_template_css', 'ampforwp_custom_style', 11);
function ampforwp_custom_style() { ?>
	body {
		font-family: 'Source Sans Pro', serif;
		font-size: 19px;
		line-height:28px;
	}
	.amp-wp-header {
		background-color: #fff;
	}
	.amp-wp-header a{
		color: grey;
		font-size: 20px;
	}
	.toggle-text span  {
		background: grey
	}

	/* Featured Area */
	.ampforwp-featured-holder amp-img:before{
		content: '';
		position: absolute;
		background: rgba(0,0,0,0.4);
		height: 100%;
		width: 100%;
		z-index:1;
	}
	.ampforwp-featured-holder {
		position: relative;		
		background: rgba(0,0,0,0.6);
		margin-bottom: 20px;
	}
	.ampforwp-featured-holder {
	    align-content: stretch;
	}
	.amp-wp-title {	 
		color: #fff ;
		font-weight: 600;
		font-size: 30px;
		font-family: 'Source Serif Pro', serif;
		line-height: 36px;
		margin-bottom: 10px;
	}
	.ampforwp-featured-holder .ampforwp-title {
		bottom: 10px;
		position: absolute;
		margin: 0 25px 20px;
		text-align: center;
		z-index: 10;
	}
	.ampforwp-meta-info {	
		color: #fff ; 
	    display: block;
	    flex: 1 0 100%;
	}
	.amp-post-social-share {
		text-align: center; 
	}
	.amp-post-social-share amp-social-share {
		border-radius: 50em;
	}
	.amp-social-share-facebook {
		margin-right: 15px;
	}

	/* Related Posts */
	.ampforwp-custom-related-post .relatedpost:before {
		content: " Recommended" ;
		font-weight: 700;
		font-size: 24px;
		line-height: 1.8;
		text-transform: uppercase;
	}
	.ampforwp-custom-related-post ol {
		display: flex;
	    flex-wrap: wrap;
	}
	.ampforwp-custom-related-post h3 {
		display: none;
	}
	.ampforwp-custom-related-post li {
		flex: 2 0 50%;
	} 
	.related_posts ol li{
		margin-bottom: 20px;
	}
	.related_posts .related_link a  {
		font-size: 14px;
		color: #dd0000;
	}
	.related_posts ol li amp-img {
		float: none;
		width: auto
	}
	.related_posts ol li p {
		display: none
	}
	.related_posts ol li:nth-of-type(2n) amp-img{
		margin:0px 0px 0px 15px ;
	}
	.related_posts ol li:nth-of-type(2n) .related_link{
		margin:0px 0px 0px 15px ;
	}	
	.comment-button-wrapper a {
		background: #3c3c3c;
		border-radius: 50em;
		border:0;
		color: #fff;
	}
	@media screen and (max-width: 1200px) and (min-width: 600px) {
		.ampforwp-custom-related-post li {
			flex: 4 0 25%;
		}
		.related_posts ol li:nth-of-type(2n) amp-img{
			margin:0px 15px 0px 0px ;
		}
		.related_posts ol li:nth-of-type(2n) .related_link{
			margin:0px 15px 0px 0px ;
		}	
	}
	<?php 
}

?>