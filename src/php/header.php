<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet">

    <?php wp_head(); ?>
    <link rel="shortcut icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/img/favicon.png">
</head>

<body>
    <script>
        0
    </script>
    <div class="navigation">
        <input type="checkbox" class="navigation__checkbox" id="navi-toggle">
        <label for="navi-toggle" class="navigation__button"><span class="navigation__icon">&nbsp;</span></label>
        <div class="navigation__background">&nbsp;</div>

        <nav class="navigation__nav">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'header_menu',
                'container' => '',
                'menu_class' => 'navigation__list',
            ));
            ?>
        </nav>
    </div>