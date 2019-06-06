<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package MisfitDesign
 */

?>

</div><!-- #content -->
<div class="footer">
	<div class="container v-padding">
		<div class="footer-content">

			<div class="footer-content__info">
				<h2>Misfit Design Studio</h2>
				<p>
					Croatia | Spain
					<br>
					<a href="mailto:info@misfitdesign.hr">info@misfitdesign.hr</a>
				</p>
			</div>

			<div class="footer-content__links">
				<h2>Quick Links</h2>
				<?php
				$footerNavMenuArgs = array(
					'theme_location'  => 'Secondary Menu',
					'menu'            => 'Footer Menu',
					'menu_class'      => 'footer-nav-links',
					'container'       => ''
				);
				wp_nav_menu($footerNavMenuArgs);
				?>
			</div>

			<div class="footer-content__newsletter">
				<h2>Newletter</h2>
				<p>
					Subscribe to our newsletter for occasional tips & tricks, special offers, announcements and more!
				</p>
				<!-- Begin Mailchimp Signup Form -->
				<div id="mc_embed_signup">
					<form action="https://misfitdesign.us14.list-manage.com/subscribe/post?u=31efebe0ae18eb0e569bab12d&amp;id=4a804bf53e" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
						<div id="mc_embed_signup_scroll">

							<div class="mc-field-group footer-newsletter">
								<input type="email" value="" name="EMAIL" class="required email footer-input" id="mce-EMAIL">
								<input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="btn btn--xs btn--primary">
							</div>
							<div id="mce-responses" class="clear">
								<div class="response" id="mce-error-response" style="display:none"></div>
								<div class="response" id="mce-success-response" style="display:none"></div>
							</div> <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
						</div>
					</form>
				</div>

				<!--End mc_embed_signup-->
			</div>

		</div>
	</div>
</div>
<footer id="colophon" class="site-footer">
	&copy; 2019, Misfit Design Studio
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>