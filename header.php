<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='<?php echo get_template_directory_uri(); ?>/style.css' />
    <?php wp_head() ?>
</head>
<body>

<?php wp_nav_menu(array("theme_location" => "header-menu")) ?>