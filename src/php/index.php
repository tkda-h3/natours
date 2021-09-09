<?php get_header(); ?>
    <header class="header">
        <div class="header__logo-box">
            <img src="<?php echo get_template_directory_uri(); ?>/img/logo-white.png" alt="logo" class="header__logo">
        </div>
        <div class="header__text-box">
            <h1 class="heading-primary">
                <span class="heading-primary--main">Natours</span>
                <span class="heading-primary--sub">アウトドア好きのための旅行サイト</span>
            </h1>
            <a href="#" class="btn btn--white btn--animated">ツアーを探す</a>
        </div>
    </header>
    <main>
        <section class="section-about">
            <div class="u-center-text u-margin-bottom-big">
                <h2 class="heading-secondary">
                    冒険好きがワクワクするツアー
                </h2>
            </div>
                  <div class="row">
                    <div class="col-1-of-2">
                        <h3 class="heading-tertiary u-margin-bottom-small">参加すれば自然がもっと好きになる</h3>
                        <p class="paragraph">
                            世界中の美しい自然を体感できる素晴らしいツアーをご用意しています。
                        </p>

                        <a href="#" class="btn-text">Learn more &rarr;</a>
                    </div>
                    <div class="col-1-of-2">
                        <div class="composition">
                            <img srcset="img/nat-1.jpg 300w, img/nat-1-large.jpg 1000w"
                                sizes="(max-width: 56.25em) 20vw, (max-width: 37.5em) 30vw, 300px"
                                alt="Photo 1" class="composition__photo composition__photo--p1"
                                src="<?php echo get_template_directory_uri(); ?>/img/nat-1-large.jpg">
                            <img srcset="img/nat-2.jpg 300w, img/nat-2-large.jpg 1000w"
                                sizes="(max-width: 56.25em) 20vw, (max-width: 37.5em) 30vw, 300px"
                                alt="Photo 2" class="composition__photo composition__photo--p2"
                                src="<?php echo get_template_directory_uri(); ?>/img/nat-2-large.jpg">
                            <img srcset="img/nat-3.jpg 300w, img/nat-3-large.jpg 1000w"
                                sizes="(max-width: 56.25em) 20vw, (max-width: 37.5em) 30vw, 300px"
                                alt="Photo 3" class="composition__photo composition__photo--p3"
                                src="<?php echo get_template_directory_uri(); ?>/img/nat-3-large.jpg">
                        </div>
                    </div>
                  </div>
        </section>

        <section class="section-features">
            <div class="row section-features__row">
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
            <div class="row">
                <div class="col-1-of-3">
                    <div class="card">
                        <div class="card__side card__side--front">
                            <div class="card__picture card__picture--1">
                                &nbsp;
                            </div>
                            <h4 class="card__heading">
                                <span class="card__heading-span card__heading-span--1">海辺の<br>探検</span>
                            </h4>
                            <div class="card__details">
                                <ul>
                                    <li>2泊3日のツアー</li>
                                    <li>最大30人</li>
                                    <li>ガイド2人</li>
                                    <li>ホテルに宿泊</li>
                                    <li>レベル: 初級</li>
                                </ul>
                            </div>
                        </div>
                        <div class="card__side card__side--back card__side--back-1">
                            <div class="card__cta">
                                <div class="card__price-box">
<!--                                    <p class="card__price-only">Only</p>-->
                                    <p class="card__price-value">29,800円</p>
                                </div>
                                <a href="#popup" class="btn btn--white">予約する</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-1-of-3">
                    <div class="card">
                        <div class="card__side card__side--front">
                            <div class="card__picture card__picture--2">
                                &nbsp;
                            </div>
                            <h4 class="card__heading">
                                <span class="card__heading-span card__heading-span--2">森の<br>ハイキング</span>
                            </h4>
                            <div class="card__details">
                                <ul>
                                    <li>7泊8日のツアー</li>
                                    <li>最大40人</li>
                                    <li>ガイド6人</li>
                                    <li>拠点のテント</li>
                                    <li>レベル: 中級</li>
                                </ul>
                            </div>

                        </div>
                        <div class="card__side card__side--back card__side--back-2">
                            <div class="card__cta">
                                <div class="card__price-box">
<!--                                    <p class="card__price-only">Only</p>-->
                                    <p class="card__price-value">49,800円</p>
                                </div>
                                <a href="#popup" class="btn btn--white">予約する</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-1-of-3">
                    <div class="card">
                        <div class="card__side card__side--front">
                            <div class="card__picture card__picture--3">
                                &nbsp;
                            </div>
                            <h4 class="card__heading">
                                <span class="card__heading-span card__heading-span--3">雪の<br>アクティビティ</span>
                            </h4>
                            <div class="card__details">
                                <ul>
                                    <li>5泊6日のツアー</li>
                                    <li>最大15人</li>
                                    <li>ガイド3人</li>
                                    <li>ホテルに宿泊</li>
                                    <li>レベル: 上級</li>
                                </ul>
                            </div>

                        </div>
                        <div class="card__side card__side--back card__side--back-3">
                            <div class="card__cta">
                                <div class="card__price-box">
<!--                                    <p class="card__price-only">Only</p>-->
                                    <p class="card__price-value">89,800円</p>
                                </div>
                                <a href="#popup" class="btn btn--white">予約する</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="u-center-text u-margin-top-huge">
                <a href="#section-tours" class="btn btn--green">他のツアーを探す</a>
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
            <div class="row">
                <div class="story">
                    <figure class="story__shape">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/nat-8.jpg" alt="person on a tour" class="story__img">
                        <figcaption class="story__caption">長谷川<br>佳奈</figcaption>
                    </figure>
                    <div class="story__text">
                        <h3 class="heading-tertiary u-margin-top-small">
                            家族と最高の1週間を過ごすことができました
                        </h3>
                        <p>
                            私たち家族は東京に住んでいて自然に触れ合う機会が多くありません。
                            子どもたちが幼いうちに自然を体感できるアクティビティを体験させてあげたいと考え、
                            思い切って1週間のツアーに参加しました。現地についたらすぐに子どもたちが目を輝かせ、旅行中毎日楽しそうに過ごしてくれたのを見て
                            このツアーに参加してよかったと本当に思いました。
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="story">
                    <figure class="story__shape">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/nat-9.jpg" alt="Person on a tour" class="story__img">
                        <figcaption class="story__caption">岡谷<br>悠人</figcaption>
                    </figure>
                    <div class="story__text">
                        <h3 class="heading-tertiary u-margin-bottom-small">私の人生観がガラッと変わりました</h3>
                        <p>
                            美しいアドリア海のツアーに参加し、アクティビティでサーフィンを体験してきました。やるまでは全然興味がなかったのですが、
                            波にキレイに乗って前に進んだときの快感が忘れられず、ツアー後も海に通うようになりました。ツアー中に交流した現地の方たちの
                            のんびりとした生活にも衝撃を受け、自分ももっと好きなことにチャレンジしようと思えるようになりました。
                        </p>
                    </div>
                </div>
            </div>
            <div class="u-center-text u-margin-top-huge">
                <a href="#" class="btn-text">もっと見る</a>
            </div>
        </section>
        <section class="section-book">
            <div class="row">
                <div class="book">
                    <div class="book__form">
                        <form action="#" class="form">
                            <div class="u-margin-bottom-medium">
                                <h2 class="heading-secondary">
                                    予約を始める
                                </h2>
                            </div>

                            <div class="form__group">
                                <input type="text" class="form__input" placeholder="フルネーム" id="name" required>
                                <label for="name" class="form__label">フルネーム</label>
                            </div>

                            <div class="form__group">
                                <input type="email" class="form__input" placeholder="メールアドレス" id="email" required>
                                <label for="email" class="form__label">メールアドレス</label>
                            </div>

                            <div class="form__group u-margin-bottom-medium">
                                <div class="form__radio-group">
                                    <input type="radio" class="form__radio-input" id="small" name="size">
                                    <label for="small" class="form__radio-label">
                                        <span class="form__radio-button"></span>
                                        予約について
                                    </label>
                                </div>

                                <div class="form__radio-group">
                                    <input type="radio" class="form__radio-input" id="large" name="size">
                                    <label for="large" class="form__radio-label">
                                        <span class="form__radio-button"></span>
                                        その他
                                    </label>
                                </div>
                            </div>

                            <div class="form__group">
                                <button class="btn btn--green">Next step &rarr;</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <div class="popup" id="popup">
      <div class="popup__content">
          <div class="popup__content-inner">
              <div class="popup__side">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/nat-8.jpg" alt="Tour photo" class="popup__img">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/nat-9.jpg" alt="Tour photo" class="popup__img">
              </div>
              <div class="popup__main">
                  <a href="#section-tours" class="popup__close">&times;</a>
                  <h2 class="heading-secondary">予約する</h2>
                  <h3 class="heading-tertiary u-margin-bottom-small">【重要】ご予約の前にお読みください</h3>
                  <p class="popup__text">
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Interdum consectetur libero id faucibus nisl tincidunt eget. Nisi scelerisque eu ultrices vitae auctor eu augue ut. Orci eu lobortis elementum nibh tellus molestie nunc non blandit. In hac habitasse platea dictumst quisque. Elit scelerisque mauris pellentesque pulvinar pellentesque. Dapibus ultrices in iaculis nunc. Quisque egestas diam in arcu cursus. Aliquet eget sit amet tellus. Est sit amet facilisis magna etiam tempor orci eu lobortis. Neque egestas congue quisque egestas diam in arcu cursus. Sapien nec sagittis aliquam malesuada bibendum arcu vitae elementum. Sapien pellentesque habitant morbi tristique senectus et netus et. Velit euismod in pellentesque massa placerat. Diam phasellus vestibulum lorem sed risus ultricies tristique nulla aliquet. Leo integer malesuada nunc vel risus. Vulputate enim nulla aliquet porttitor. Vel elit scelerisque mauris pellentesque pulvinar.
                  </p>
                  <a href="#popup" class="btn btn--green">予約する</a>
              </div>
          </div>
      </div>
  </div>
<?php get_footer(); ?>
