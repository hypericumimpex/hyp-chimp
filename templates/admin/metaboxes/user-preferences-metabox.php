<?php
/**
 * Mailchimp data metabox
 *
 * @author  Your Inspiration Themes
 * @package YITH WooCommerce Mailchimp
 * @version 1.0.0
 */

if ( ! defined( 'YITH_WCMC' ) ) {
	exit;
} // Exit if accessed directly

?>

<div class="checkout-preferences">
	<h4><?php _e( 'Checkout preferences', 'yith-woocommerce-mailchimp' ) ?></h4>
	<p class="description">
		<?php _e( 'In this section you\'ll find data about customer consent to Mailchimp subscription', 'yith-woocommerce-mailchimp' ) ?>
	</p>
	<p class="option">
		<span class="option-label"><?php _e( 'Customer subscribed:', 'yith-woocommerce-mailchimp' ) ?></span>
		<span class="option-value"><?php echo $customer_subscribed ? __( 'yes', 'yith-woocommerce-mailchimp' ) : __( 'no', 'yith-woocommerce-mailchimp' ) ?></span>
	</p>

	<p class="option">
		<span class="option-label"><?php _e( 'Checkbox shown at checkout:', 'yith-woocommerce-mailchimp' ) ?></span>
		<span class="option-value"><?php echo $show_checkbox ? __( 'yes', 'yith-woocommerce-mailchimp' ) : __( 'no', 'yith-woocommerce-mailchimp' ) ?></span>
	</p>

	<p class="option">
		<span class="option-label"><?php _e( 'Submitted value:', 'yith-woocommerce-mailchimp' ) ?></span>
		<span class="option-value"><?php echo $submitted_value == 'yes' ? __( 'yes', 'yith-woocommerce-mailchimp' ) : __( 'no', 'yith-woocommerce-mailchimp' ) ?></span>
	</p>
</div>

<?php if( ! empty( $personal_data ) ): ?>
	<div class="mailchimp-personal-data">
		<h4><?php _e( 'Personal data', 'yith-woocommerce-mailchimp' ) ?></h4>
		<p class="description">
			<?php _e( 'In this section you\'ll find customer personal data that was sent to Mailchimp servers', 'yith-woocommerce-mailchimp' ) ?>
		</p>
		<?php foreach( $personal_data as $data ): ?>
			<p class="option">
				<span class="option-label"><?php echo $data['label'] ?>:</span>
				<span class="option-value"><?php echo $data['value'] ?></span>
			</p>
		<?php endforeach; ?>
	</div>
<?php endif; ?>