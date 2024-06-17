<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<meta name="viewport" content="width=device-width,user-scalable=1, initial-scale=1,maximum-scale=3">
<meta name="format-detection" content="telephone=no">

<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico" type="image/x-icon" />
<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/images/apple-touch-icon.png" />
<link rel="apple-touch-icon" sizes="57x57" href="<?php echo get_template_directory_uri(); ?>/images/apple-touch-icon-57x57.png" />
<link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/images/apple-touch-icon-72x72.png" />
<link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_template_directory_uri(); ?>/images/apple-touch-icon-76x76.png" />
<link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/images/apple-touch-icon-114x114.png" />
<link rel="apple-touch-icon" sizes="120x120" href="<?php echo get_template_directory_uri(); ?>/images/apple-touch-icon-120x120.png" />
<link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_template_directory_uri(); ?>/images/apple-touch-icon-144x144.png" />
<link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_template_directory_uri(); ?>/images/apple-touch-icon-152x152.png" />
<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/images/apple-touch-icon-180x180.png" />

<!-- css -->
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/reset-bizlog.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style-bizlog.css">
<?php if ( get_field( 'lp-css' ) ): ?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/<?php the_field('lp-css'); ?>.css">
<?php else: ?>
<?php endif; ?>
<script src="<?php echo get_template_directory_uri(); ?>/js/wow.min-bizlog.js"></script>
<!-- css -->

<?php wp_head(); ?>
</head>