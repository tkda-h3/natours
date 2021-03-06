<?php get_header(); ?>
    <header class="header">
        <div class="header__logo-box">
            <a href="<?php echo site_url('/'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo-white.png" alt="logo" class="header__logo"></a>
        </div>
        <div class="header__inner">
            <h1 class="page-heading--primary">Natoursについて</h1>
        </div>
    </header>
    <main>
        <section class="section-page section-page--gray-light-1">
            <h2 class="heading-secondary section-page-title">自然を満喫できるアクティビティ旅行プランを提案します</h2>
            <ul class="about-kv">
                <?php 
                $image1 = get_field('about-gallery1')['sizes']['about-gallery']; 
                $image2 = get_field('about-gallery2')['sizes']['about-gallery']; 
                $image3 = get_field('about-gallery3')['sizes']['about-gallery']; 
                ?>
                <li class="about-kv__list"><img src="<?php echo $image1; ?>" alt="" class="about-kv__img"></li>
                <li class="about-kv__list"><img src="<?php echo $image2; ?>" alt="" class="about-kv__img"></li>
                <li class="about-kv__list"><img src="<?php echo $image3; ?>" alt="" class="about-kv__img"></li>
            </ul>
            <div class="section-page-body">
                <p>Natoursは大自然と旅行が大好きな方のために生まれた旅行サイトです。</p>
                <p>海外旅行を中心に現地の気候・イベントを利用したそこでしか味わえない自然体験・スポーツなどのアクティビティを楽しんでいただけるツアーを催行いたします。</p>
                <p>お一人で過酷なサイクリングレースに参加される方から、現地の自然体験ファミリーで楽しむ方まで様々な方に合うプランをご提案いたします。</p>
            </div>
        </section>

        <section class="section-page">
            <h1 class="section-page-title" data-aos="fade-up">会社概要</h1>
            <div class="company-content">
                <dl class="company__dlist">
                    <dt class="company__term">企業名</dt>
                    <dd class="company__text">Natours</dd>
                </dl>
                <dl class="company__dlist">
                    <dt class="company__term">住所</dt>
                    <dd class="company__text">東京都〇〇区〇〇0丁0-00</dd>
                </dl>
                <dl class="company__dlist">
                    <dt class="company__term">代表名</dt>
                    <dd class="company__text">名前 名前</dd>
                </dl>
                <dl class="company__dlist">
                    <dt class="company__term">設立日</dt>
                    <dd class="company__text">0000年00月</dd>
                </dl>
                <dl class="company__dlist">
                    <dt class="company__term">事業内容</dt>
                    <dd class="company__text">国内海外の旅行商品企画、宿泊機関のクーポンの発券など一般旅行業全般</dd>
                </dl>
            </div>
        </section>
    </main>
    <?php get_footer(); ?>