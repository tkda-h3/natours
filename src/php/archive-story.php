<?php get_header(); ?>
<header class="header">
    <div class="header__logo-box">
        <a href="/"><img src="<?php echo get_template_directory_uri(); ?>/img/logo-white.png" alt="logo" class="header__logo"></a>
    </div>
    <div class="header__inner">
        <h1 class="page-heading--primary">ツアー参加者の声</h1>
    </div>
</header>
<main>
    <section class="section-page section-page--gray-light-1">
        <?php if (have_posts()) : ?>
            <div class="flex">
                <?php
                while (have_posts()) :
                    the_post(); ?>

                    <?php
                    $image = get_field('image')['sizes']['medium'];
                    $last_name = get_field('last_name');
                    $first_name = get_field('first_name');
                    $review = get_field('review');
                    ?>

                    <div class="story">
                        <figure class="story__shape">
                            <img src="<?php echo $image; ?>" alt="person on a tour" class="story__img">
                            <figcaption class="story__caption"><?php echo $last_name ?><br><?php echo $first_name ?></figcaption>
                        </figure>
                        <div class="story__text">
                            <h3 class="heading-tertiary u-margin-top-small">
                                <?php the_title(); ?>
                            </h3>
                            <p>
                                <?php echo $review; ?>
                            </p>
                        </div>
                    </div>
        <?php endwhile; ?>
        </div>
    <?php endif; ?>
    <div class="pagination">
        <?php echo paginate_links(); ?>
    </div>

    </section>
</main>
<?php get_footer(); ?>