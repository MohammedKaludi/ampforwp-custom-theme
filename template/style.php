<?php
add_action('amp_post_template_css', 'ampforwp_custom_style', 11);
function ampforwp_custom_style() { ?>
	html {	
		background: #fff;
	}
	body {
		font-family: 'Source Sans Pro', serif;
		font-size: 19px;
		line-height:28px;
	}
	.amp-wp-header {
		background-color: #fff;
	}
	.amp-wp-header a{
		color: #888888;
		font-size: 17.5px;
		
	}
	.toggle-text span  {
		background: grey;
		width: 22px;
			}
	.amp-wp-header .nav_container {
		right: -3px;
		top: -7px;
		line-height: 1;

	}
	.amp-wp-article {
		margin-top: 0;
		margin-bottom:0;
	}
	/* Homepage */
	.amp-wp-article {
		max-width: 600px;
	}
	.amp-wp-header div {
		max-width: calc(600px - 32px);
		padding: 15px 16px 17px 16px;
	}
	.amp-wp-header {
		border-bottom: 1px solid #ededed
	}
	.home-post-image-big {
		margin-right: -16px;
		margin-left: -16px;
	}
	.amp-wp-home .amp-wp-content p {
		margin: 0;		
		display: inline-block;
		font-size: 15px;
		line-height: 1.3
	}
	.amp-loop-list {
		border-bottom: 1px solid #ededed;
		padding-bottom: 40px;
	} 
	.ampforwp-custom-index .amp-wp-content {
		margin-bottom: 30px;
		margin-top: 0;
		padding-bottom: 20px;
	}
	.amp-loop-list .amp-wp-title {		
		margin-top: 16px;
	}
	.amp-wp-content.pagination-holder {
		margin-top: -10px;
	}
	.comment-button-wrapper {
		margin-bottom: 40px;
	}
	/* Featured Area */
	.ampforwp-featured-holder amp-img:before{
		content: '';
		position: absolute;
		background: rgba(0,0,0,0.6);
		height: 100%;
		width: 100%;
		z-index:1;
	}
	.ampforwp-featured-holder {
		position: relative;		
		background: rgba(0,0,0,0.6);
		margin-bottom: 11px;
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
	.ampforwp-meta-info span {
		color: rgba(255,255,255, 0.6);
		font-size: 14px;
		letter-spacing: 1.5px;
		text-transform:uppercase;
	}
	.amp-post-social-share {
		text-align: center; 
	} 
	.amp-post-social-share li{
		display: inline;
	}
	.amp-post-social-share li.twitter{
		margin-right:  10px;
	}
	.amp-post-social-share li a { 
		color: #fff;
		font-size: 16px;
		padding:8px 26px 8px 34px; 
	}
	.amp-post-social-share li.twitter a {
		background: url('data:image/svg+xml;charset=utf8,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%22-49%20141%20512%20512%22%3E%3Cpath%20fill%3D%22%23ffffff%22%20d%3D%22M432.9%2C256.9c-16.6%2C7.4-34.5%2C12.4-53.2%2C14.6c19.2-11.5%2C33.8-29.7%2C40.8-51.3c-17.9%2C10.6-37.8%2C18.4-58.9%2C22.5%20c-16.9-18-41-29.2-67.7-29.2c-51.2%2C0-92.7%2C41.5-92.7%2C92.7c0%2C7.2%2C0.8%2C14.3%2C2.4%2C21.1c-77-3.9-145.3-40.8-191.1-96.9%20C4.6%2C244%2C0%2C259.9%2C0%2C276.9C0%2C309%2C16.4%2C337.4%2C41.3%2C354c-15.2-0.4-29.5-4.7-42-11.6c0%2C0.4%2C0%2C0.8%2C0%2C1.1c0%2C44.9%2C31.9%2C82.4%2C74.4%2C90.9%20c-7.8%2C2.1-16%2C3.3-24.4%2C3.3c-6%2C0-11.7-0.6-17.5-1.7c11.8%2C36.8%2C46.1%2C63.6%2C86.6%2C64.4c-31.8%2C24.9-71.7%2C39.7-115.2%2C39.7%20c-7.5%2C0-14.8-0.4-22.2-1.3c41.1%2C26.4%2C89.8%2C41.7%2C142.2%2C41.7c170.5%2C0%2C263.8-141.3%2C263.8-263.8c0-4.1-0.1-8-0.3-12%20C404.8%2C291.8%2C420.5%2C275.5%2C432.9%2C256.9z%22%2F%3E%3C%2Fsvg%3E') #55acee no-repeat 12px 10px;
		background-size: 22px;
	}
	.amp-post-social-share li.facebook a {
		background: url('data:image/svg+xml;charset=utf8,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20512%20512%22%3E%3Cpath%20fill%3D%22%23ffffff%22%20d%3D%22M211.9%20197.4h-36.7v59.9h36.7V433.1h70.5V256.5h49.2l5.2-59.1h-54.4c0%200%200-22.1%200-33.7%200-13.9%202.8-19.5%2016.3-19.5%2010.9%200%2038.2%200%2038.2%200V82.9c0%200-40.2%200-48.8%200%20-52.5%200-76.1%2023.1-76.1%2067.3C211.9%20188.8%20211.9%20197.4%20211.9%20197.4z%22%3E%3C%2Fpath%3E%3C%2Fsvg%3E') #3b5998 no-repeat 12px 9px;
		background-size: 24px;
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
	.related_posts ol li amp-img {
		margin-right: 8px;
	}
	.related_posts ol li:nth-of-type(2n) amp-img{
		margin:0px 0px 0px 8px ;
	}
	.related_posts ol li:nth-of-type(2n) .related_link{
		margin:0px 0px 0px 8px ;
	}
	.related_link {
		line-height: 1.1;
	}
	.comment-button-wrapper a {
		background: #3c3c3c;
		border-radius: 50em;
		border:0;
		color: #fff;
	}
	/* Footer */
	#footer{
		border-top:1px solid #ddd;
	    background : #fff;
	    font-size: 13px;
	    text-align: center;
	    letter-spacing: 0.2px;
	    line-height:1;
	    padding: 20px 0;
	} 
	#footer p{
	    margin: 0
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
	@media screen and (max-width: 450px) and (min-width: 320px) {
		.amp-post-social-share amp-social-share {
			padding: 0 20px;
		}
		.amp-wp-title {
			font-size: 22px;
			line-height:28px;
			margin-bottom:0
		}
		.ampforwp-featured-holder .ampforwp-title {
			bottom: 0; 
    		margin: 0 25px 10px;
		}

		.ampforwp-meta-info span {
			font-size: 12px;
		}
	}
		.amp-wp-article-content p{
			margin-top: -2px;
			padding-right: 6px;
		}
		.toggle-text span:nth-child(2){
			top: 7px;
		}
		.toggle-text span:nth-child(3){
			top:14px;
		}
	<?php 
}
?>