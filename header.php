<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title>
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">
</head>
<body>
    <header style="height: 50px; background-color: #000; color: #fff; margin-top: 50px;">
        <div style="float: left; padding-left: 10px; line-height: 50px;">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/media/logo.png" alt="Logo" width="30" height="30">
        </div>
        <div style="float: right; padding-right: 10px; line-height: 50px;">
            <a href="<?php echo get_stylesheet_directory_uri(); ?>/login.php" style="color: black; text-decoration: none;">Login</a>
        </div>
    </header>
