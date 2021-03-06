<?php
/**
 *******************************************************************************
 * //woocommerce/emails/email-header.php
 *******************************************************************************
 *
 * Email Header
 *
 * @author
 * @copyright
 * @link
 * @todo
 * @license
 * @since
 * @version
**/

if ( ! defined( 'ABSPATH' ) ) 
{
    exit; // exit if accessed directly
}

?>

<!DOCTYPE html>
<html dir="<?php echo is_rtl() ? 'rtl' : 'ltr'?>">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <!-- We may want to put in an email <title> tag in here. -->
</head>
<body <?php echo is_rtl() ? 'rightmargin' : 'leftmargin'; ?>="0" marginwidth="0" topmargin="0" marginheight="0" offset="0">

<div id="wrapper" dir="<?php echo is_rtl() ? 'rtl' : 'ltr'?>">
    <table border="0" cellpadding="0" cellspacing="0" height="100%" width="100%">
        <tr>
            <td align="center" valign="top">
                <div id="template_header_image">
                <?php
                if ( $img = get_option( 'woocommerce_email_header_image' ) ) 
                {
                    echo '<p style="margin-top:0;"><img src="' . esc_url( $img ) . '" alt="' . get_bloginfo( 'name', 'display' ) . '" /></p>';
                }
                ?>
                </div>

                <table border="0" cellpadding="0" cellspacing="0" width="600" id="template_container">
                    <tr>
                        <td align="center" valign="top">

                            <table border="0" cellpadding="0" cellspacing="0" width="600" id="template_header">
                                <tr>
                                    <td id="header_wrapper">
                                        <h1><?php echo $email_heading; ?></h1>
                                    </td>
                                </tr>
                            </table>

                        </td>
                    </tr>

                    <tr>
                        <td align="center" valign="top">

                            <table border="0" cellpadding="0" cellspacing="0" width="600" id="template_body">
                                <tr>
                                    <td valign="top" id="body_content">

                                        <table border="0" cellpadding="20" cellspacing="0" width="100%">
                                            <tr>
                                                <td valign="top">
                                                    <div id="body_content_inner">
