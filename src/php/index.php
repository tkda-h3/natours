<?php get_header(); ?>
<header class="header-top">
    <div class="header-top__logo-box">
        <a href="<?php echo site_url('/'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo-white.png" alt="logo" class="header__logo"></a>
    </div>
    <div class="header-top__text-box">
        <h1 class="heading-primary">
            <span class="heading-primary--main">Natours</span>
            <span class="heading-primary--sub">アウトドア好きのための旅行サイト</span>
        </h1>
        <a href="<?php echo site_url('/tours'); ?>" class="btn btn--white btn--animated">ツアーを探す</a>
    </div>
</header>
<main>
    <section class="section-about">
        <div class="u-center-text u-margin-bottom-big">
            <h2 class="heading-secondary">
                大自然でアクティビティ
            </h2>
        </div>
        <div class="flex">
            <div class="col-1-of-2">
                <h3 class="heading-tertiary u-margin-bottom-small">参加すれば自然がもっと好きになる</h3>
                <p class="paragraph">
                    世界中の美しい自然を体感できる素晴らしいツアーをご用意しています。
                </p>

                <a href="#" class="btn-text">Learn more &rarr;</a>
            </div>
            <div class="col-1-of-2">
                <div class="composition">
                    <img srcset="<?php echo get_template_directory_uri(); ?>/img/nat-1.jpg 300w, <?php echo get_template_directory_uri(); ?>/img/nat-1-large.jpg 1000w" sizes="(max-width: 56.25em) 20vw, (max-width: 37.5em) 30vw, 300px" alt="Photo 1" class="composition__photo composition__photo--p1" src="<?php echo get_template_directory_uri(); ?>/img/nat-1-large.jpg">
                    <img srcset="<?php echo get_template_directory_uri(); ?>/img/nat-2.jpg 300w, <?php echo get_template_directory_uri(); ?>/img/nat-2-large.jpg 1000w" sizes="(max-width: 56.25em) 20vw, (max-width: 37.5em) 30vw, 300px" alt="Photo 2" class="composition__photo composition__photo--p2" src="<?php echo get_template_directory_uri(); ?>/img/nat-2-large.jpg">
                    <img srcset="<?php echo get_template_directory_uri(); ?>/img/nat-3.jpg 300w, <?php echo get_template_directory_uri(); ?>/img/nat-3-large.jpg 1000w" sizes="(max-width: 56.25em) 20vw, (max-width: 37.5em) 30vw, 300px" alt="Photo 3" class="composition__photo composition__photo--p3" src="<?php echo get_template_directory_uri(); ?>/img/nat-3-large.jpg">
                </div>
            </div>
        </div>
    </section>

    <section class="section-features">
        <div class="flex section-features__row">
            <div class="col-1-of-4 feature-box-wrap">
                <div class="feature-box">
                    <i class="feature-box__icon icon-basic-world"></i>
                    <h3 class="heading-tertiary u-margin-bottom-small">世界を冒険しよう</h3>
                    <p class="feature-box__text">
                        ワクワクの海外旅行ツアーをご提供します。
                    </p>
                </div>
            </div>
            <div class="col-1-of-4 feature-box-wrap">
                <div class="feature-box">
                    <i class="feature-box__icon icon-basic-compass"></i>
                    <h3 class="heading-tertiary u-margin-bottom-small">自然と対峙しよう</h3>
                    <p class="feature-box__text">
                        圧倒的な大自然の前で何を感じるでしょうか？
                    </p>
                </div>
            </div>
            <div class="col-1-of-4 feature-box-wrap">
                <div class="feature-box">
                    <i class="feature-box__icon icon-basic-map"></i>
                    <h3 class="heading-tertiary u-margin-bottom-small">自分らしさを見つけよう</h3>
                    <p class="feature-box__text">
                        旅行という非日常の体験で自分を見つめ直せます。
                    </p>
                </div>
            </div>
            <div class="col-1-of-4 feature-box-wrap">
                <div class="feature-box">
                    <i class="feature-box__icon icon-basic-heart"></i>
                    <h3 class="heading-tertiary u-margin-bottom-small">健康な生活を送ろう</h3>
                    <p class="feature-box__text">
                        アクティビティや食事を通して健康な生活を送ることができます。
                    </p>
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="section-tours" id="section-tours">
        <div class="u-center-text u-margin-bottom-big">
            <h2 class="heading-secondary">
                人気のツアー
            </h2>
        </div>
        <?php $tours = get_field('popular_tours'); ?>
        <?php if ($tours) : ?>
            <div class="flex">
                <?php foreach ($tours as $tour) : ?>
                    <?php
                    $image = get_field('image', $tour->ID)['sizes']['tour-card'];
                    $span = get_field('span', $tour->ID);
                    $max_number = get_field('max_number', $tour->ID);
                    $guide_number = get_field('guide_number', $tour->ID);
                    $accommodation_facility = get_field('accommodation_facility', $tour->ID);
                    $level = get_field('level', $tour->ID);
                    $pricing = get_field('pricing', $tour->ID);
                    $bg_gradient_light = get_field('bg_gradient_light', $tour->ID);
                    $bg_gradient_dark = get_field('bg_gradient_dark', $tour->ID);
                    $bgi_gradient = 'background-image: linear-gradient(to right bottom,' . $bg_gradient_light . ',' . $bg_gradient_dark . ')'
                    ?>
                    <div class="col-1-of-3">
                        <div class="card">
                            <div class="card__side card__side--front">
                                <div class="card__picture card__picture" style="<?php echo $bgi_gradient; ?>, url(<?php echo $image; ?>);">
                                    &nbsp;
                                </div>
                                <h4 class="card__heading">
                                    <span class="card__heading-span" style="<?php echo $bgi_gradient; ?>"><?php echo get_the_title($tour); ?></span>
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

                <?php endforeach; ?>
            </div>
        <?php endif; ?>

        <div class="u-center-text u-margin-top-huge">
            <a href="<?php echo site_url('/tours'); ?>" class="btn btn--green">他のツアーを探す</a>
        </div>
    </section>
    <section class="section-stories">
        <div class="bg-video">
            <video class="bg-video__content" autoplay muted loop>
                <source src="<?php echo get_template_directory_uri(); ?>/img/video.mp4" type="video/mp4">
                <source src="<?php echo get_template_directory_uri(); ?>/img/video.webm" type="video/webm">
            </video>
        </div>

        <div class="u-center-text u-margin-bottom-big">
            <h2 class="heading-secondary">
                ツアー参加者の声
            </h2>
        </div>
        <?php
        $query = new WP_Query(
            array(
                'post_type' => 'story',
                'posts_per_page' => 2,
            ),
        );
        ?>
        <?php if ($query->have_posts()) : ?>
            <div class="flex">
                <?php
                while ($query->have_posts()) :
                    $query->the_post(); ?>

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
        <?php wp_reset_postdata(); ?>
        <div class="u-center-text u-margin-top-huge">
            <a href="<?php echo site_url('/stories'); ?>" class="btn btn--green btn--animated">さらに見る</a>
        </div>
    </section>
    <section class="section-book">
        <div class="row">
            <div class="book">
                <div class="book__form">
                    <?php
                    $contact = new WP_Query(
                        array(
                            'post_type' => 'page',
                            'post_status' => 'publish',
                            'name' => 'contact', // slug
                        ),
                    );
                    ?>
                    <?php if ($contact->have_posts()) : while ($contact->have_posts()) : $contact->the_post(); ?>
                            <?php the_content(); ?>
                    <?php endwhile;
                    endif; ?>
                    <?php wp_reset_postdata(); ?>
                </div>
            </div>
        </div>
    </section>
</main>
<?php get_template_part('part/book_popup'); ?>
<?php get_footer(); ?>