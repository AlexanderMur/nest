<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package On_Spring
 */
?>

			<footer class="footer">
				<div class="container">
					<div class="row">
						<div class="col-md-9 col-md-offset-3">
							<div class="footer__wrap">
								<div class="row">
									<div class="col-sm-4 col-xs-12">
										<div class="phone__wrap"><a href="tel:<?php echo get_geo_mod('tel' ) ?>" class="phone__link"><?php echo get_geo_mod('tel') ?></a><a href="#callback" class="phone__callback">ЗАКАЗАТЬ ЗВОНОК</a></div>
									</div>
									<div class="col-sm-7 col-sm-offset-1 col-xs-12">
										<div class="footer__address"><i class="fa fa-map-marker"></i><?php echo get_geo_mod('address_footer') ?></div>
										<div class="footer__block">
											<p class="copyright"><i class="fa fa-copyright"></i>Все права защищены. </p>
											<div class="dev"><span>Cоздание сайта </span><a href="http://shanti-media.ru/" target="_blank">Shanti-media.ru</a></div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="mfp-hide call-popup zoom-modal" id="callback">
					<?php echo  do_shortcode('[contact-form-7 id="201" title="Форма обратной связи"]') ?>
				</div>
				<div class="mfp-hide call-popup zoom-modal" id="thank_you">
					<span class="thank_you">
						спасибо!
					</span>
					<span class="form-title">
						Мы свяжемся с вами 
в течение 15 минут!
					</span>
				</div>
			</footer>
		</div>
		<?php wp_footer() ?>
		<!-- aaaasxzzx -->
		<!-- aaaa -->
		<!-- aaaa -->
		<!-- aaaa -->
		<!-- aaaa -->
		<!-- aaaa -->
		<!-- aaaa -->
		<!-- aaaa -->
		<!-- aaaa -->
		<!-- aaaa -->
		<!-- aaaa -->
		<!-- aaaa -->
		<!-- aaaa2 -->
	</body>
</html>