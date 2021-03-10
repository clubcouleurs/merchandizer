<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Appilo
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta mediarset="<?php bloginfo( 'mediarset' ); ?>">
    <!-- Meta Tags -->
    <meta mediarset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<?php appilo_dynamic_header_template('layouts/default-headers/default-header');?>