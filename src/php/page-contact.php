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
        <div class="book">
            <div class="book__form">
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                        <?php the_content(); ?>
                <?php endwhile;
                endif; ?>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>