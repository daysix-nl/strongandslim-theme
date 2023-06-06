<?php 
/**
 * The template for displaying the header
 * 
 * @package Day Six theme
 */
 ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <title><?php bloginfo( 'name' ); ?> | <?php the_title(); ?></title>
    <?php wp_head(); ?>
   
</head>
<style>
.woocommerce-error::before, .woocommerce-info::before, .woocommerce-message::before {
display: none !important;
}
	
	.woocommerce-info a {
		text-decoration: underline;
	}
</style>

<body <?php body_class( 'page-block ' ); ?> id="up">
    

  