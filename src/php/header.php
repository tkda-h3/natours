<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet">

        <?php wp_head(); ?>
        <link rel="shortcut icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/img/favicon.png">
        
        <title>Natours | アウトドア好きのための旅行サイト</title>
    </head>
    <body>
    <script>0</script>
    <div class="navigation">
        <input type="checkbox" class="navigation__checkbox" id="navi-toggle">
        <label for="navi-toggle" class="navigation__button"><span class="navigation__icon">&nbsp;</span></label>
        <div class="navigation__background">&nbsp;</div>

        <nav class="navigation__nav">
            <ul class="navigation__list">
                <li class="navigation__item"><a href="/about.html" class="navigation__link"><span>01</span>Natoursについて</a></li>
                <li class="navigation__item"><a href="/tours.html" class="navigation__link"><span>02</span>ツアー一覧</a></li>
                <li class="navigation__item"><a href="/stories.html" class="navigation__link"><span>03</span>参加者の声</a></li>
                <li class="navigation__item"><a href="/contact.html" class="navigation__link"><span>04</span>お問い合わせ</a></li>
            </ul>
        </nav>
    </div>
