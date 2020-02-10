<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

?>

	</div><!-- #content -->
	<footer>
		<div class="wrap-foot">
			<div class="container">
				<div class="row">
					<div class="col-md-4 col-sm-4 col-xs-12">	
						<div class="ite-foot">
							<img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/icons.svg' ?>" alt="">
							<div class="cont-inf">
								<h3>ADDRESS</h3>
								<p>Flemingtion Tower,<br/>182 Le Dai Hanh St., Ward 15,<br/> District 11, HCMC, Vietnam</p>
							</div>
						</div>	
					</div>
					<div class="col-md-4 col-sm-4 col-xs-12">	
						<div class="ite-foot">
							<img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/phone.svg' ?>" alt="">
							<div class="cont-inf">
								<h3>PHONE</h3>
								<p>+84908 26 26 28</p>
							</div>							
						</div>	
					</div>
					<div class="col-md-4 col-sm-4 col-xs-12">	
						<div class="ite-foot">
							<img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/mail.svg' ?>" alt="">	
							<div class="cont-inf">
								<h3>EMAIL</h3>
								<p>sales@plutx.io</p>
							</div>
						</div>			
					</div>
				</div>
				<div class="row line-coppy">
					<!-- <div class="col-md-4 col-sm-3 col-xs-12 social">	
						<a href=""><img src="<?php //echo get_stylesheet_directory_uri() . '/assets/images/in.svg' ?>" alt=""></a>
						<a href=""><img src="<?php //echo get_stylesheet_directory_uri() . '/assets/images/Group.svg' ?>" alt=""></a>
					</div> -->
					<div class="col-md-4 col-sm-5 col-xs-12 subscribe">	
						<!-- <h4>Subscribe to our newsletter</h4>
						<input type="text" placeholder="Enter your email">
						<button class="btn-sub"><i class="fa fa-chevron-right"></i></button> -->
						<form action="https://app.getresponse.com/add_subscriber.html" accept-charset="utf-8" method="post">
							<!-- Email field (required) -->
							<h4>Subscribe to our newsletter</h4>
							 <input type="text" name="email" placeholder="Enter your email">
							<!-- List token -->
							<!-- Get the token at: https://app.getresponse.com/campaign_list.html -->
							<input type="hidden" name="campaign_token" value="WymmJ" />
							<!-- Thank you page (optional) -->
							<input type="hidden" name="thankyou_url" value="https://plutx.io/thank-you/"/>
							<!-- Add subscriber to the follow-up sequence with a specified day (optional) -->
							<input type="hidden" name="start_day" value="0" />
							<!-- Subscriber button -->
							<button class="btn-sub"><i class="fa fa-chevron-right"></i></button>
							<!-- <input type="submit" value="Subscribe"/> -->
						</form>
					</div>
					
					<div class="col-md-8 col-sm-8 col-xs-12 coppy">			
						<h4 >Copyright 2019. All Rights Reserved.</h4>	
						<div class="social">
							<div class="link">
								<a href="https://t.me/plutx_enterprise_wallet"><img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/telegram.png' ?>" alt=""></a>
								<a href="https://www.linkedin.com/company/plutx-enterprise-wallet/"><img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/linkin.png' ?>" alt=""></a>					
							</div>
							<div class="policy">
								<a href='<?php echo get_stylesheet_directory_uri();?>/assets/file/PLUTX_Terms_of_service.pdf' target='_blank'>Terms of Service</a>
								<a  href='<?php echo get_home_url();?>/PLUTX_Privacy.pdf' target='_blank'>Privacy Policy</a>
							</div>
						</div>
					</div>
					<!-- <h4 class="cont-mb">Copyright 2019. All Rights Reserved.</h4> -->
				</div>
			</div>
		</div>
	</footer>

</div><!-- #page -->
<!-- modal video -->
<div class="modal co-video fade" id="co_modal" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog md-plu" role="document">
        <div class="modal-content">            
            <!-- <button id="co_close_vid" type="button" class="close" data-dismiss="modal" aria-label="Close">
				<img src="<?php //echo get_stylesheet_directory_uri() . '/assets/images/ico-close.svg'; ?>" alt="">
            </button> -->
            <div id="co_show_vid" class="modal-body">
			<iframe width="560" height="315" src="https://www.youtube.com/embed/SF68Lbj_Vp0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>        </div>
    </div>
</div>
<?php wp_footer(); ?>

</body>
</html>
