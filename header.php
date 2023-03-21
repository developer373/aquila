<?php
/**
 * Header file.
 *
 * @package Aquila
 */
?>
<!DOCTYPE html>
<!-- <html lang="en"> -->
<html lang="<?php language_attributes(); ?>">
<head>
    <!-- <meta charset="UTF-8"> -->
    <meta charset="<?php bloginfo( 'charset' ) ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<!--    <title>Wordpress Theme</title>-->
    <title><?php wp_title() ?>></title>
    <?php wp_head(); ?>
</head>
<body<?php body_class('aquila-body'); ?>>
<header><strong>Header</strong></header>