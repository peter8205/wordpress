<?php
/**
 * The template for displaying the header
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package PetoBear
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body <?php body_class(); ?>>
	<div id="page" class="site">
		<header>
			<section class="search">Search</section>
			<section class="top-bar">
				<div class="brand">Logo</div>
				<div class="second-column">
					<div class="account">Account</div>
					<nav class="main-menu">Menu</nav>
				</div>
			</section>
		</header>