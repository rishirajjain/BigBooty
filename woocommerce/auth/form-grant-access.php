<?php
/**
 *******************************************************************************
 * //woocommerce/auth/form-grant-access.php
 *******************************************************************************
 *
 * 
 *
 * @author
 * @copyright
 * @link
 * @todo
 * @license
 * @since
 * @version
**/

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

?>

<?php do_action( 'woocommerce_auth_page_header' ); ?>

<h1><?php printf( __( '%s would like to connect to your store' , 'woocommerce' ), esc_html( $app_name ) ); ?></h1>

<?php wc_print_notices(); ?>

<p><?php printf( __( 'This will give "%s" <strong>%s</strong> access which will allow it to:' , 'woocommerce' ), esc_html( $app_name ), esc_html( $scope ) ); ?></p>

<ul class="wc-auth-permissions">
    <?php foreach ( $permissions as $permission ) : ?>
        <li><?php echo esc_html( $permission ); ?></li>
    <?php endforeach; ?>
</ul>

<div class="wc-auth-logged-in-as">
    <?php echo get_avatar( $user->ID, 70 ); ?>
    <p><?php printf( __( 'Logged in as %s', 'woocommerce' ), esc_html( $user->display_name ) ); ?> <a href="<?php echo esc_url( $logout_url ); ?>" class="wc-auth-logout"><?php _e( 'Logout', 'woocommerce' ); ?></a>
</div>

<p class="wc-auth-actions">
    <a href="<?php echo esc_url( $granted_url ); ?>" class="button button-primary wc-auth-approve"><?php _e( 'Approve', 'woocommerce' ); ?></a>
    <a href="<?php echo esc_url( $return_url ); ?>" class="button wc-auth-deny"><?php _e( 'Deny', 'woocommerce' ); ?></a>
</p>

<?php do_action( 'woocommerce_auth_page_footer' ); ?>
