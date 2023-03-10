<?php
/**
 * 404 error HTML
 *
 * @package CARTFLOWS
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

?>

<div class="wcf-no-page-found-wrapper">
	<div class="content-container" style="text-align:center;">
		<div class="cartflows-icon">
			<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
				xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
				width="45px" height="45px" viewBox="0 0 95 95"
				enable-background="new 0 0 95 95" xml:space="preserve">
				<g>
					<path fill="#f06335" d="M58.942,5.609c-3.444,3.354-5.587,8.036-5.587,13.22v30.718c0,4.521-3.668,8.188-8.188,8.188H24.574
						c-4.52,0-8.188-3.668-8.188-8.188c0-4.52,3.668-8.188,8.188-8.188h22.583V24.974H24.574c-1.399,0-2.763,0.115-4.099,0.34
						C8.86,27.26,0,37.377,0,49.547c0,10.7,6.843,19.803,16.386,23.176c1.318,0.466,2.681,0.825,4.09,1.058
						c1.336,0.225,2.699,0.341,4.099,0.341h20.592c1.399,0,2.763-0.116,4.099-0.341c1.409-0.232,2.771-0.592,4.09-1.058
						C62.897,69.35,69.74,60.247,69.74,49.547v-8.188c9.05,0,16.386-7.337,16.386-16.386H69.74v-6.145c0-1.13,0.915-2.044,2.045-2.044
						h4.098c4.996,0,9.525-1.982,12.843-5.212c2.987-2.905,4.996-6.807,5.471-11.174H71.786C66.799,0.399,62.261,2.381,58.942,5.609"/>
					<path fill="#f06335" d="M24.575,78.218c-4.523,0-8.191,3.667-8.191,8.191c0,4.523,3.667,8.191,8.191,8.191s8.191-3.668,8.191-8.191
						C32.766,81.885,29.098,78.218,24.575,78.218"/>
					<path fill="#f06335" d="M49.149,78.218c-4.524,0-8.192,3.667-8.192,8.191c0,4.523,3.667,8.191,8.192,8.191
						c4.523,0,8.191-3.668,8.191-8.191C57.34,81.885,53.672,78.218,49.149,78.218"/>
				</g>
			</svg>
		</div>
		<p class="not-found-pre-sub-title"><?php esc_html_e( '404 ERROR', 'cartflows' ); ?></p>
		<h2 class="not-found-title"><?php esc_html_e( 'Page Not Found.', 'cartflows' ); ?></h2>
		<div class="not-found-message"><p><?php esc_html_e( 'Sorry, we couldn’t find the page you’re looking for.', 'cartflows' ); ?></p></div>
		<a href="<?php echo esc_url_raw( admin_url( 'admin.php?page=cartflows' ) ); ?>" class="not-found-action-link"><?php esc_html_e( 'Go back home', 'cartflows' ); ?> <span class="dashicons dashicons-arrow-right-alt"></span></a>
	</div>
</div>
<p>
</p>
