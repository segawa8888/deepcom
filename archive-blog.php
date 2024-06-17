<?php
/*
* Template Name: 投稿一覧テンプレート
* Template Post Type: page
*/

add_action('wp_enqueue_scripts', function () {
  wp_enqueue_script( 'blog', get_theme_file_uri( '/assets/js/blog.min.js' ), '', filemtime( get_theme_file_path( '/assets/js/blog.min.js' ) ), true );
  wp_enqueue_style( 'layout-blog', get_theme_file_uri( '/assets/css/layout-blog.css' ), '', filemtime( get_theme_file_path( '/assets/css/layout-blog.css' ) ) );
  wp_enqueue_style( 'style-blog', get_theme_file_uri( '/css/style-blog.css' ), '', filemtime( get_theme_file_path( '/css/style-blog.css' ) ) );
});

get_header();

$check_date = new DateTime();
$check_date->setTimeZone( new DateTimeZone('Asia/Tokyo'));
$check_date->modify('-1 month');
$new_check_date = $check_date->format("Y-m-d H:i:s");

$args = array(
  'post_type' => array('post'),
  'hide_empty' => 1,
  'orderby' => 'name',
  'order'=>'ASC',
);
$objective_terms = get_terms('objective', $args);

$args = array(
  'post_type' => array('post'),
  'hide_empty' => 1,
  'orderby' => 'name',
  'order'=>'ASC',
);
$product_terms = get_terms('product', $args);

// 新着記事4件の取得
$new_posts = get_posts(array(
    'post_type' => 'post',
    'post_status' => 'publish',
    'posts_per_page' => 4,
    'orderby' => array('date' => 'DESC')
));
global $post;

// 絞り込みの条件を取得
$search_slug = '';
$search_taxonomy = '';
$author_name = '';
$select_tab = array('', '', '');
$select_objective = 'all';
$select_product = 'all';

if(!empty(get_query_var('objective'))) {
  $search_slug = get_query_var('objective');
  $search_taxonomy = 'objective';
  $select_objective = $search_slug;
  $select_tab[0] = ' current';
} elseif(!empty(get_query_var('product'))) {
  $search_slug = get_query_var('product');
  $search_taxonomy = 'product';
  $select_product = $search_slug;
  $select_tab[1] = ' current';
}
if(!empty(get_query_var('author_name'))) {
  $author_name = get_query_var('author_name');
}

// 文字列検索
$search_text = '';
if(!empty($_GET['s'])) {
  $search_text = sanitize_text_field($_GET['s']);
  $search_slug = '';
  $search_taxonomy = '';
  $select_tab[2] = ' current';
}
?>

<main class="g-main">
  <div class="g-page-container archive-blog-container">
    <div class="l-breadcrumb adjust-width">
      <ol>
        <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">HOME</a></li>
        <li>ブログ</li>
      </ol>
    </div>

    <?php if ( !is_search() ) : ?>
      <section class="l-section-container section-pickup">
        <div class="adjust-width">
          <div class="blog-pickup">
            <div class="inner">
              <div class="slide-post-block">
                <div class="slide-post swiper-container js-slide-post">
                  <div class="swiper-wrapper">
                    <?php if($new_posts): foreach($new_posts as $post): ?>
                    <?php
                      setup_postdata($post);
                      $title = $post->post_title;
                      $thumb = get_the_post_thumbnail_url($post->ID, 'full');
                      $author = get_the_author_meta('first_name');
                      $post_date = mysql2date('Y.m.d', $post->post_date);
                    ?>
                    <div class="overlay-post-item swiper-slide">
                      <a href="<?php echo get_permalink( $post->ID ); ?>">
                        <div class="image">
                          <img class="js-ofi -cover" src="<?php echo esc_url($thumb); ?>" alt="<?php echo $title; ?>">
                        </div>
                        <div class="content">
                          <p class="title"><?php echo $title; ?></p>
                          <div class="post-info">
                            <p class="date"><?php echo $post_date; ?></p>
                            <div class="author">
                              <span class="avator"><img class="-no-icon" src="<?php echo get_theme_file_uri('/assets/images/blog/icon-author-00.png'); ?>" alt=""></span>
                              <span class="name"><?php echo $author; ?></span>
                            </div>
                          </div>
                        </div>
                      </a>
                    </div>
                    <?php endforeach; endif; wp_reset_postdata(); ?>
                  </div>

                  <div class="slide-arrow slide-prev"></div>
                  <div class="slide-arrow slide-next"></div>

                </div>

                <div class="swiper-pagination"></div>

              </div>

              <?php
                // 固定表示投稿2件の取得
                $top_posts = get_posts(array(
                    'post_type' => 'blog',
                    'post_status' => 'publish',
                    'meta_key' => 'fixed_display',
                    'meta_value' => true,
                    'posts_per_page' => 2,
                    'orderby' => array('date' => 'DESC')
                ));
                global $post;

              ?>
              <?php if($top_posts): ?>
              <div class="pick-post">
                <?php foreach($top_posts as $post): ?>
                <?php
                  setup_postdata($post);
                  $title = $post->post_title;
                  $thumb = get_the_post_thumbnail_url($post->ID, 'full');
                  $author = get_the_author_meta('first_name');
                  $post_date = mysql2date('Y.m.d', $post->post_date);
                ?>
                <div class="overlay-post-item">
                  <a href="<?php echo get_permalink( $post->ID ); ?>">
                    <div class="image">
                      <img class="js-ofi -cover" src="<?php echo esc_url($thumb); ?>" alt="<?php echo $title; ?>">
                    </div>
                    <div class="content">
                      <p class="title"><?php echo $title; ?></p>
                      <div class="post-info">
                        <p class="date"><?php echo $post_date; ?></p>
                        <div class="author">
                          <span class="avator"><img class="-no-icon" src="<?php echo get_theme_file_uri('/assets/images/blog/icon-author-00.png'); ?>" alt=""></span>
                          <span class="name"><?php echo $author; ?></span>
                        </div>
                      </div>
                    </div>
                  </a>
                </div>
                <?php endforeach; endif; wp_reset_postdata(); ?>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="l-section-container section-tag" id="result">
        <div class="adjust-width">
          <div class="l-tag-filter">
            <ul class="l-tab-switch" data-tab-switch=".-js-tab-switch-search">
              <li class="<?php echo $select_tab[0]; ?>"><span>目的・課題テーマ<br class="_sp-only">から探す</span></span></li>
              <li class="<?php echo $select_tab[1]; ?>"><span>製品名<br class="_sp-only">から探す</span></span></li>
              <li class="<?php echo $select_tab[2]; ?>"><span>フリーワード<br class="_sp-only">から探す</span></span></li>
            </ul>

            <div class="-js-tab-switch-search">
              <ul class="l-tag-list">
                <li class="<?php echo $select_objective == 'all' ? '-current' : ''; ?>"><a href="/blog/">ALL</a></li>
                <?php
                  foreach($objective_terms as $pt) {
                    if($select_objective == $pt->slug) {
                      $_current = ' -current';
                    } else {
                      $_current = '';
                    }
                    echo '              <li class="' . $_current . '"><a href="/blog/objective/' . $pt->slug . '/#result">' . $pt->name . '</a></li>';
                  }
                ?>
              </ul>
            </div>

            <div class="-js-tab-switch-search">
              <ul class="l-tag-list">
                <li class="<?php echo $select_product == 'all' ? '-current' : ''; ?>"><a href="/blog/">ALL-製品名</a></li>
                <?php
                  foreach($product_terms as $pt) {
                    if($select_product == $pt->slug) {
                      $_current = ' -current';
                    } else {
                      $_current = '';
                    }
                    echo '              <li class="' . $_current . '"><a href="/blog/product/' . $pt->slug . '/#result">' . $pt->name . '</a></li>';
                  }
                ?>
              </ul>
            </div>

            <div class="-js-tab-switch-search">
              <div class="search-block -js-tab-switch-show">
                <form class="l-search-form" method="get" action="<?php echo esc_url( home_url( '/blog' ) ); ?>">
                  <input type="hidden" name="custome_type" value="blog">
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
    <?php endif; ?>

    <?php if ( is_search() ) : ?>
      <section class="l-section-container section-search-form">
        <div class="adjust-width">
          <div class="search-block">
            <form class="l-search-form" method="get" action="<?php echo esc_url( home_url( '/blog' ) ); ?>">
              <input type="hidden" name="custome_type" value="blog">
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
      </section>
    <?php endif; ?>

    <section class="l-section-container -bc-gray section-contents">
      <?php if ( is_search() ) : ?>
      <div class="adjust-width">
        <p class="search-result-title"><?php echo get_search_query(); ?>　に一致した一覧</p>
      </div>
      <?php endif; ?>
      <div class="adjust-width">
        <div class="blog-col">
          <div class="post-container">

            <?php
              // ブログ記事取得
              $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
              $args = array(
                  'post_type' => 'blog',
                  'post_status' => 'publish',
                  'paged' => $paged,
                  'posts_per_page' => 3,
                  'orderby' => array('date' => 'DESC')
              );
              if(!empty($search_taxonomy)) {
                $args['tax_query'] = array(
                  array(
                    'taxonomy' => $search_taxonomy,
                    'field' => 'slug',
                    'terms' => $search_slug,
                  )
                );
              } elseif(!empty($search_text)) {
                $args['s'] = $search_text;
                $args['sentence'] = true;
              }
              if(!empty($author_name)) {
                $args['author_name'] = $author_name;
              }
              $search_query = new WP_Query( $args );
              if ( $search_query->have_posts() ) :
                while ( $search_query->have_posts() ) :
                  $search_query->the_post();
                  setup_postdata($post);
                  $title = $post->post_title;
                  $thumb = get_the_post_thumbnail_url($post->ID, 'full');
                  $author = get_the_author_meta('first_name');
                  $post_date = mysql2date('Y.m.d', $post->post_date);
                  $icon_new = '';
                  if($new_check_date <= $post_date) {
                    $icon_new = '<div class="new">NEW</div>';
                  }

                  $product_cat = get_the_terms( $post->ID, 'product' );
                  $objective_cat = get_the_terms( $post->ID, 'objective' );
                  $category_list = array();
                  if(!empty($objective_cat)) {
                    foreach($objective_cat as $_buf) {
                      $category_list[] = array('name' => $_buf->name, 'slug' => '/blog/objective/' . $_buf->slug . '/');
                    }
                  }
                  if(!empty($product_cat)) {
                    foreach($product_cat as $_buf) {
                      $category_list[] = array('name' => $_buf->name, 'slug' => '/blog/product/' . $_buf->slug . '/');
                    }
                  }
            ?>
            <div class="l-post-card">
              <!-- <a class="link" href="./"></a> -->
              <?php echo $icon_new; ?>
              <div class="image">
                <a href="<?php echo get_permalink( $post->ID ); ?>">
                  <img class="js-ofi" src="<?php echo esc_url($thumb); ?>" alt="<?php echo $title; ?>">
                </a>
              </div>
              <div class="title"><a href="<?php echo get_permalink( $post->ID ); ?>"><?php echo $title; ?></a></div>
              <div class="info">
                <div class="date"><?php echo $post_date; ?></div>
                <div class="author"><span class="avator"><img class="-no-icon" src="<?php echo get_theme_file_uri('/assets/images/blog/icon-author-00.png'); ?>" alt=""></span><span class="name"><?php echo $author; ?></span></div>
              </div>
              <?php if(!empty($category_list)) : ?>
              <ul class="l-category-list">
                <?php foreach($category_list as $_cat) : ?>
                <li><span><?php echo $_cat['name']; ?></span></li>
                <!-- <li><a href="<?php echo $_cat['slug']; ?>"><?php echo $_cat['name']; ?></a></li> -->
                <?php endforeach; wp_reset_postdata(); ?>
              </ul>
              <?php endif; ?>
            </div>
            <?php
                endwhile;
            ?>
            <?php
                else:
                if(!empty($search_text)) {
                  echo '<p>検索条件に一致するブログは登録されておりません。</p>';
                } else {
                  echo '<p>選択されたカテゴリーに一致するブログは登録されておりません。</p>';
                }
             ?>
            <?php
              endif;
            ?>
         </div><!-- /.post-container -->

          <?php
            if ( $search_query->have_posts() ) {
              if (function_exists('custom_wp_pagenavi')) custom_wp_pagenavi( $search_query );
            }
          ?>

        </div><!-- /.blog-col -->

        <?php get_sidebar(); ?>
      </div>
    </section>

  </div>
</main>

<?php get_footer(); ?>
