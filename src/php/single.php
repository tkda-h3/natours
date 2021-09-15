<?php get_header(); ?>
    <header class="header">
        <div class="header__logo-box">
            <a href="/"><img src="<?php echo get_template_directory_uri(); ?>/img/logo-white.png" alt="logo" class="header__logo"></a>
        </div>
        <div class="header__inner">
            <h1 class="page-heading--primary"><?php the_title(); ?></h1>
        </div>
    </header>
    <main>
        <section class="section-page">
            <?php the_content(); ?>
        </section>
    </main>
    <?php get_footer(); ?>