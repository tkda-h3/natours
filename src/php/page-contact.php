<?php get_header(); ?>
    <header class="header">
        <div class="header__logo-box">
            <a href="/"><img src="<?php echo get_template_directory_uri(); ?>/img/logo-white.png" alt="logo" class="header__logo"></a>
        </div>
        <div class="header__inner">
            <h1 class="page-heading--primary">お問い合わせ</h1>
        </div>
    </header>
    <main>
        <section class="section-page section-page--book">
            <?php get_template_part('part/book_form'); ?>
        </section>
    </main>
    <?php get_footer(); ?>