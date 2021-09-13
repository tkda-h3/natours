<?php get_header(); ?>
<header class="header">
    <div class="header__logo-box">
        <a href="<?php echo site_url('/'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo-white.png" alt="logo" class="header__logo"></a>
    </div>
    <div class="header__inner">
        <h1 class="page-heading--primary">ツアー</h1>
    </div>
</header>
<main>
    <section class="section-tours section-page--gray-light-1">
        <div class="u-center-text u-margin-bottom-big">
            <h2 class="heading-secondary">
                ツアー一覧
            </h2>
        </div>

        <?php if (have_posts()) : ?>
            <div class="flex">
                <?php
                while (have_posts()) :
                    the_post(); ?>

                    <?php
                    $image = get_field('image')['sizes']['tour-card'];
                    $span = get_field('span');
                    $max_number = get_field('max_number');
                    $guide_number = get_field('guide_number');
                    $accommodation_facility = get_field('accommodation_facility');
                    $level = get_field('level');
                    $pricing = get_field('pricing');
                    $bg_gradient_light = get_field('bg_gradient_light');
                    $bg_gradient_dark = get_field('bg_gradient_dark');
                    $bgi_gradient = 'background-image: linear-gradient(to right bottom,' . $bg_gradient_light . ',' . $bg_gradient_dark . ')'
                    ?>

                    <div class="col-1-of-3">
                        <div class="card">
                            <div class="card__side card__side--front">
                                <div class="card__picture card__picture" style="<?php echo $bgi_gradient; ?>, url(<?php echo $image; ?>);">
                                    &nbsp;
                                </div>
                                <h4 class="card__heading">
                                    <span class="card__heading-span" style="<?php echo $bgi_gradient; ?>"><?php the_title(); ?></span>
                                </h4>
                                <div class="card__details">
                                    <ul>
                                        <li><?php echo $span; ?>のツアー</li>
                                        <li>最大<?php echo $max_number; ?>人</li>
                                        <li>ガイド<?php echo $guide_number; ?>人</li>
                                        <li><?php echo $accommodation_facility; ?>に宿泊</li>
                                        <li>レベル: <?php echo $level; ?></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card__side card__side--back" style="<?php echo $bgi_gradient; ?>">
                                <div class="card__cta">
                                    <div class="card__price-box">
                                        <p class="card__price-value"><?php echo number_format($pricing); ?>円</p>
                                    </div>
                                    <a href="#popup" class="btn btn--white">予約する</a>
                                </div>
                            </div>
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
<?php get_template_part('part/book_popup'); ?>
<?php get_footer(); ?>