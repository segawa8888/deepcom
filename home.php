<?php
/*
* Template Name: 投稿一覧テンプレート2
* Template Post Type: apage
*/

add_action('wp_enqueue_scripts', function () {
  wp_enqueue_script( 'blog', get_theme_file_uri( '/assets/js/blog.min.js' ), '', filemtime( get_theme_file_path( '/assets/js/blog.min.js' ) ), true );
  wp_enqueue_style( 'layout-download', get_theme_file_uri( '/assets/css/layout-blog.css' ), '', filemtime( get_theme_file_path( '/assets/css/layout-blog.css' ) ) );
});

get_header();

?>

<main class="g-main">
  <div class="g-page-container archive-blog-container">
    <div class="l-breadcrumb adjust-width">
      <ol>
        <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">HOME</a></li>
        <li>ブログ</li>
      </ol>
    </div>

    <section class="l-section-container section-pickup">
      <div class="adjust-width">
        <div class="blog-pickup">
          <div class="inner">
            <div class="slide-post-block">
              <div class="slide-post swiper-container js-slide-post">
                <div class="swiper-wrapper">
                  <div class="overlay-post-item swiper-slide">
                    <a href="./">
                      <div class="image">
                        <img class="js-ofi -cover" src="<?php echo get_theme_file_uri('/assets/images/blog/dammy-thumb-pickup01.jpg'); ?>" alt="">
                      </div>
                      <div class="content">
                        <p class="title">aテスト1のタイトルが入りますタイトルが入ります</p>
                        <div class="post-info">
                          <p class="date">2021.01.29</p>
                          <div class="author">
                            <span class="avator"><img class="-no-icon" src="<?php echo get_theme_file_uri('/assets/images/blog/icon-author-00.png'); ?>" alt=""></span>
                            <span class="name">三浦</span>
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>

                  <div class="overlay-post-item swiper-slide">
                    <a href="./">
                      <div class="image">
                        <img class="js-ofi -cover" src="<?php echo get_theme_file_uri('/assets/images/blog/dammy-thumb-pickup01.jpg'); ?>" alt="">
                      </div>
                      <div class="content">
                        <p class="title">テスト2のタイトルが入りますタイトルが入りますタイトルが入ります…</p>
                        <div class="post-info">
                          <p class="date">2021.01.29</p>
                          <div class="author">
                            <span class="avator"><img class="js-ofi -contain" src="<?php echo get_theme_file_uri('/assets/images/blog/icon-author-01.png'); ?>" alt="">
                            </span>
                            <span class="name">三浦</span>
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>

                  <div class="overlay-post-item swiper-slide">
                    <a href="./">
                      <div class="image">
                        <img class="js-ofi -cover" src="<?php echo get_theme_file_uri('/assets/images/blog/dammy-thumb-pickup01.jpg'); ?>" alt="">
                      </div>
                      <div class="content">
                        <p class="title">テスト3のタイトルが入りますタイトルが入りますタイトルが入ります…</p>
                        <div class="post-info">
                          <p class="date">2021.01.29</p>
                          <div class="author">
                            <span class="avator"><img class="js-ofi -contain" src="<?php echo get_theme_file_uri('/assets/images/blog/icon-author-dammy.jpg'); ?>" alt="">
                            </span>
                            <span class="name">三浦</span>
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>

                  <div class="overlay-post-item swiper-slide">
                    <a href="./">
                      <div class="image">
                        <img class="js-ofi -cover" src="<?php echo get_theme_file_uri('/assets/images/blog/dammy-thumb-pickup01.jpg'); ?>" alt="">
                      </div>
                      <div class="content">
                        <p class="title">テスト4のタイトルが入りますタイトルが入りますタイトルが入ります…</p>
                        <div class="post-info">
                          <p class="date">2021.01.29</p>
                          <div class="author">
                            <span class="avator"><img class="js-ofi -contain" src="<?php echo get_theme_file_uri('/assets/images/blog/icon-author-dammy.jpg'); ?>" alt="">
                            </span>
                            <span class="name">三浦</span>
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>

                </div>

                <div class="slide-arrow slide-prev"></div>
                <div class="slide-arrow slide-next"></div>

              </div>

              <div class="swiper-pagination"></div>

            </div>

            <div class="pick-post">
              <div class="overlay-post-item">
                <a href="./">
                  <div class="image">
                    <img class="js-ofi -cover" src="<?php echo get_theme_file_uri('/assets/images/blog/dammy-thumb-pickup02.jpg'); ?>" alt="">
                  </div>
                  <div class="content">
                    <p class="title">社会人１年目がドメイン登録してメールアドレスを作成してみた</p>
                    <div class="post-info">
                      <p class="date">2021.01.29</p>
                      <div class="author">
                        <span class="avator"><img class="-no-icon" src="<?php echo get_theme_file_uri('/assets/images/blog/icon-author-00.png'); ?>" alt=""></span>
                        <span class="name">三浦</span>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
              <div class="overlay-post-item">
                <a href="./">
                  <div class="image">
                    <img class="js-ofi -cover" src="<?php echo get_theme_file_uri('/assets/images/blog/dammy-thumb-pickup03.jpg'); ?>" alt="">
                  </div>
                  <div class="content">
                    <p class="title">テスト3のタイトルが入りますタイトルが入ります</p>
                    <div class="post-info">
                      <p class="date">2021.01.29</p>
                      <div class="author">
                        <span class="avator"><img class="js-ofi -contain" src="<?php echo get_theme_file_uri('/assets/images/blog/icon-author-02.png'); ?>" alt=""></span>
                        <span class="name">三浦</span>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="l-section-container section-tag">
      <div class="adjust-width">
        <div class="l-tag-filter">
          <ul class="l-tab-switch" data-tab-switch=".-js-tab-switch-search">
            <li><span>目的・課題テーマ<br class="_sp-only">から探す</span></span></li>
            <li><span>製品名<br class="_sp-only">から探す</span></span></li>
            <li><span>フリーワード<br class="_sp-only">から探す</span></span></li>
          </ul>

          <div class="-js-tab-switch-search">
            <ul class="l-tag-list">
              <li class="-current"><a href="./">ALL</a></li>
              <li><a href="./">Application Insights</a></li>
              <li><a href="./">Azure</a></li>
              <li><a href="./">Azure SQL Database</a></li>
              <li><a href="./">BCS</a></li>
              <li><a href="./">Microsoft 365</a></li>
              <li><a href="./">Microsoft Flow</a></li>
              <li><a href="./">Microsoft Forms</a></li>
              <li><a href="./">Microsoft Office</a></li>
              <li><a href="./">Microsoft Stream</a></li>
              <li><a href="./">Microsoft365</a></li>
              <li><a href="./">Nintex Workflow</a></li>
              <li><a href="./">Office365</a></li>
              <li><a href="./">OneDrive</a></li>
              <li><a href="./">Outlook</a></li>
              <li><a href="./">Power Apps</a></li>
              <li><a href="./">Power Automate</a></li>
              <li><a href="./">Power Platform</a></li>
              <li><a href="./">SharePoint2013</a></li>
              <li><a href="./">SharePoint2016</a></li>
              <li><a href="./">SharePointOnline</a></li>
              <li><a href="./">SharePointServer</a></li>
              <li><a href="./">Teams</a></li>
              <li><a href="./">Word</a></li>
            </ul>
          </div>

          <div class="-js-tab-switch-search">
            <ul class="l-tag-list">
              <li class="-current"><a href="./">ALL-製品名</a></li>
              <li><a href="./">Application Insights</a></li>
              <li><a href="./">Azure</a></li>
              <li><a href="./">Azure SQL Database</a></li>
              <li><a href="./">BCS</a></li>
              <li><a href="./">Microsoft 365</a></li>
              <li><a href="./">Microsoft Flow</a></li>
              <li><a href="./">Microsoft Forms</a></li>
              <li><a href="./">Microsoft Office</a></li>
              <li><a href="./">Microsoft Stream</a></li>
              <li><a href="./">Microsoft365</a></li>
              <li><a href="./">Nintex Workflow</a></li>
              <li><a href="./">Office365</a></li>
              <li><a href="./">OneDrive</a></li>
              <li><a href="./">Outlook</a></li>
              <li><a href="./">Power Apps</a></li>
              <li><a href="./">Power Automate</a></li>
              <li><a href="./">Power Platform</a></li>
              <li><a href="./">SharePoint2013</a></li>
              <li><a href="./">SharePoint2016</a></li>
              <li><a href="./">SharePointOnline</a></li>
              <li><a href="./">SharePointServer</a></li>
              <li><a href="./">Teams</a></li>
              <li><a href="./">Word</a></li>
            </ul>
          </div>

          <div class="-js-tab-switch-search">
            <div class="search-block -js-tab-switch-show">
              <form class="l-search-form" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
                <div class="search-box">
                  <div class="input-wrap">
                    <input type="text" value="<?php echo get_search_query(); ?>" name="s" id="s" placeholder="フリーワードを入力してください">
                  </div>
                  <button class="search-button">
                    <picture>
                      <source media="(max-width: 767px)" srcset="<?php echo get_theme_file_uri('/assets/images/blog/icon-search-white-sp.png'); ?>">
                      <img src="<?php echo get_theme_file_uri('/assets/images/blog/icon-search-white.png'); ?>" alt="">
                    </picture>
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>

      </div>
    </section>

    <section class="l-section-container -bc-gray section-contents">
      <div class="adjust-width">
        <div class="blog-col">
          <div class="post-container">
            <div class="l-post-card">
              <!-- <a class="link" href="./"></a> -->
              <div class="new">NEW</div>
              <div class="image">
                <a href="./">
                  <img class="js-ofi" src="<?php echo get_theme_file_uri('/assets/images/blog/dammy-eyecatch01.jpg'); ?>" alt="">
                </a>
              </div>
              <div class="title"><a href="./">社会人1年目がPower Platform・Power Appsについて調べてみた</a></div>
              <div class="info">
                <div class="date">2021.01.29</div>
                <div class="author"><span class="avator"><img class="-no-icon" src="<?php echo get_theme_file_uri('/assets/images/blog/icon-author-00.png'); ?>" alt=""></span><span class="name">三浦</span></div>
              </div>
              <ul class="l-category-list">
                <li><a href="./">Microsoft 365</a></li>
                <li><a href="./">Office365</a></li>
                <li><a href="./">Power Apps</a></li>
                <li><a href="./">Power Platform</a></li>
              </ul>
            </div>

            <div class="l-post-card">
              <!-- <a class="link" href="./"></a> -->
              <div class="image">
                <a href="./">
                  <img class="js-ofi" src="<?php echo get_theme_file_uri('/assets/images/blog/dammy-eyecatch02.jpg'); ?>" alt="">
                </a>
              </div>
              <div class="title"><a href="./">社会人1年目がPower Platform・Power Appsについて調べてみた</a></div>
              <div class="info">
                <div class="date">2021.01.29</div>
                <div class="author"><span class="avator"><img class="js-ofi -contain" src="<?php echo get_theme_file_uri('/assets/images/blog/icon-author-02.png'); ?>" alt=""></span><span class="name">三浦</span></div>
              </div>
              <ul class="l-category-list">
                <li><a href="./">Microsoft 365</a></li>
                <li><a href="./">Office365</a></li>
                <li><a href="./">Power Apps</a></li>
                <li><a href="./">Power Platform</a></li>
              </ul>
            </div>

            <div class="l-post-card">
              <!-- <a class="link" href="./"></a> -->
              <div class="image">
                <a href="./">
                  <img class="js-ofi" src="<?php echo get_theme_file_uri('/assets/images/blog/dammy-eyecatch03.jpg'); ?>" alt="">
                </a>
              </div>
              <div class="title"><a href="./">社会人1年目がPower Platform・Power Appsについて調べてみた</a></div>
              <div class="info">
                <div class="date">2021.01.29</div>
                <div class="author"><span class="avator">
                    <img class="js-ofi -contain" src="<?php echo get_theme_file_uri('/assets/images/blog/icon-author-dammy.jpg'); ?>" alt="">
                  </span><span class="name">三浦</span></div>
              </div>
              <ul class="l-category-list">
                <li><a href="./">Microsoft 365</a></li>
                <li><a href="./">Office365</a></li>
                <li><a href="./">Power Apps</a></li>
                <li><a href="./">Power Platform</a></li>
              </ul>
            </div>

            <div class="l-post-card">
              <!-- <a class="link" href="./"></a> -->
              <div class="image">
                <a href="./">
                  <img class="js-ofi" src="<?php echo get_theme_file_uri('/assets/images/blog/dammy-eyecatch03.jpg'); ?>" alt="">
                </a>
              </div>
              <div class="title"><a href="./">社会人1年目がPower Platform・Power Appsについて調べてみた</a></div>
              <div class="info">
                <div class="date">2021.01.29</div>
                <div class="author"><span class="avator">
                    <img class="js-ofi -contain" src="<?php echo get_theme_file_uri('/assets/images/blog/icon-author-dammy.jpg'); ?>" alt="">
                  </span><span class="name">三浦</span></div>
              </div>
              <ul class="l-category-list">
                <li><a href="./">Microsoft 365</a></li>
                <li><a href="./">Office365</a></li>
                <li><a href="./">Power Apps</a></li>
                <li><a href="./">Power Platform</a></li>
              </ul>
            </div>

            <div class="l-post-card">
              <!-- <a class="link" href="./"></a> -->
              <div class="image">
                <a href="./">
                  <img class="js-ofi" src="<?php echo get_theme_file_uri('/assets/images/blog/dammy-eyecatch03.jpg'); ?>" alt="">
                </a>
              </div>
              <div class="title"><a href="./">社会人1年目がPower Platform・Power Appsについて調べてみた</a></div>
              <div class="info">
                <div class="date">2021.01.29</div>
                <div class="author"><span class="avator">
                    <img class="js-ofi -contain" src="<?php echo get_theme_file_uri('/assets/images/blog/icon-author-dammy.jpg'); ?>" alt="">
                  </span><span class="name">三浦</span></div>
              </div>
              <ul class="l-category-list">
                <li><a href="./">Microsoft 365</a></li>
                <li><a href="./">Office365</a></li>
                <li><a href="./">Power Apps</a></li>
                <li><a href="./">Power Platform</a></li>
              </ul>
            </div>
          </div><!-- /.post-container -->

          <div class="pagination-container l-pagination">
            <ul>
              <li class="arrow prev -disabled"><a href="./"></a></li>
              <li class="num-link -current"><span>1</span></li>
              <li class="num-link"><a href="./">2</a></li>
              <li class="num-link"><a href="./">3</a></li>
              <li class="num-link"><a href="./">4</a></li>
              <li class="num-link"><a href="./">5</a></li>
              <li class="num-link"><a href="./">6</a></li>
              <li class="num-link"><a href="./">7</a></li>
              <li class="blank"></li>
              <li class="num-link"><a href="./">9</a></li>
              <li class="arrow next"><a href="./"></a></li>
            </ul>
          </div><!-- /.l-pagination -->
        </div><!-- /.blog-col -->

        <?php get_sidebar(); ?>
      </div>
    </section>

  </div>
</main>

<?php get_footer(); ?>
