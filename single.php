<?php
/*
Template Name: 投稿詳細テンプレート
*/

add_action('wp_enqueue_scripts', function () {
  wp_enqueue_script( 'blog', get_theme_file_uri( '/assets/js/blog.min.js' ), '', filemtime( get_theme_file_path( '/assets/js/blog.min.js' ) ), true );
  wp_enqueue_script( 'blog.detail', get_theme_file_uri( '/assets/js/blog.detail.min.js' ), '', filemtime( get_theme_file_path( '/assets/js/blog.min.js' ) ), true );
  wp_enqueue_style( 'layout-blog', get_theme_file_uri( '/assets/css/layout-blog.css' ), '', filemtime( get_theme_file_path( '/assets/css/layout-blog.css' ) ) );

  wp_enqueue_style( 'style-blog', get_theme_file_uri( '/css/style-blog.css' ), '', filemtime( get_theme_file_path( '/css/style-blog.css' ) ) );
});

get_header();
?>

<?php if(have_posts()) :
  the_post();
  setup_postdata($post);
  $title = $post->post_title;
  $thumb = get_the_post_thumbnail_url($post->ID, 'full');
  $author_id = get_the_author_meta('ID');
  $_def_icon = get_theme_file_uri('/assets/images/blog/icon-author-02.png');
  $_icon = get_field( 'user_icon', 'user_' . $author_id );
  $author_icon = !empty($_icon['url']) ? $_icon['url'] : $_def_icon;
  $author_name = get_the_author_meta('last_name');
  $qualification = '';
  $qualification = get_field( 'qualification', 'user_' . $author_id );
  // $author_description = '';
  // $author_description = get_the_author_meta('description');
  // $author_nicname = get_the_author_meta('user_nicename');
  $author_id = get_the_author_meta('ID');
  $author = get_the_author_meta('last_name');

  $post_date = mysql2date('Y.m.d', $post->post_date);
  $icon_new = '';
  if($new_check_date <= $post_date) {
    $icon_new = '<div class="new">NEW</div>';
  }

  $prev_post_url = '';
  $next_post_url = '';
  $prev_post = get_previous_post();
  if( !empty( $prev_post ) ) {
    $prev_post_url = get_permalink( $prev_post->ID );
  }
  $next_post = get_next_post();
  if( !empty( $next_post ) ) {
    $next_post_url = get_permalink( $next_post->ID );
  }

  $product_cat = get_the_terms( $post->ID, 'product' );
  $objective_cat = get_the_terms( $post->ID, 'objective' );
  $category_list = array();
  if(!empty($objective_cat)) {
    foreach($objective_cat as $_buf) {
      $category_list[] = array('name' => $_buf->name, 'slug' => '/blog/#co:' . $_buf->slug);
    }
  }
  if(!empty($product_cat)) {
    foreach($product_cat as $_buf) {
      $category_list[] = array('name' => $_buf->name, 'slug' => '/blog/#cp:' . $_buf->slug);
    }
  }
  $tags = get_the_tags();

  $sns_url = urlencode( get_permalink() );
  $sns_title = urlencode( $title );
?>
<main class="g-main">
  <div class="g-page-container single-blog-container">
    <div class="l-breadcrumb adjust-width">
      <ol>
        <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">HOME</a></li>
        <li><a href="<?php echo esc_url( home_url( '/blog/' ) ); ?>">ブログ</a></li>
        <li><?php echo $title; ?></li>
      </ol>
    </div>

    <section class="l-section-container -bc-gray section-contents section-single-contents">
      <div class="adjust-width">
        <div class="blog-col">
          <div class="blog-meta">
            <div class="blog-group">
              <ul class="l-category-list">
                <?php foreach($category_list as $_cat) : ?>
                <li><a href="<?php echo $_cat['slug']; ?>"><?php echo $_cat['name']; ?></a></li>
                <?php endforeach; ?>
              </ul>
              <div class="blog-tag-list">
                <?php if(!empty($tags)): foreach($tags as $tag): ?>
                  <a href="/blog/#tg:<?php echo $tag->slug; ?>"><?php echo $tag->name; ?></a>
                <?php endforeach; endif; ?>
              </div>
            </div>
            <div class="blog-sns">
              <div class="sns-box facebook"><a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $sns_url; ?>&t=<?php echo $sns_title; ?>" target="_blank" rel="nofollow noopener"><i class="fa fa-facebook"></i></a></div>
              <div class="sns-box twitter"><a href="http://twitter.com/share?text=<?php echo $sns_title; ?>&url=<?php echo $sns_url; ?>&via=&tw_p=tweetbutton&related=" target="_blank" rel="nofollow noopener"><i class="fa fa-twitter"></i></a></div>
            </div>
          </div>

          <h1 class="single-title"><?php echo $title; ?></h1>

          <div class="blog-info">
            <div class="date"><?php echo $post_date; ?></div>
            <div class="author"><a href="/blog/#at:<?php echo $author_id; ?>"><?php echo $author; ?></a></div>
          </div>

          <figure class="eyecatch aligncenter">
            <img src="<?php echo esc_url($thumb); ?>" alt="<?php echo $title; ?>">
          </figure>

          <div class="contents">

            <?php the_content();?>

          </div><!-- /.contents -->

          <div class="cta-contact">
            <div class="cta-contact-text">
              <p>以上、最後までご愛読いただき<br class="_sp-only">ありがとうございました。</p>
              <p>お問い合わせは、<br class="_sp-only">以下のフォームへご連絡ください。</p>
            </div>
            <p class="l-button"><a href="/contact/">お問い合わせ</a></p>
          </div>

          <?php
            if (function_exists('yarpp_related')) {
              yarpp_related();
            }
          ?>

          <div class="author-info">
            <ul class="author-tab-switch" data-tab-switch=".-js-tab-switch-author">
              <li><span>この記事の<br class="_sp-only">著者</span></li>
              <li><span>この著者の<br class="_sp-only">最新記事</span></li>
            </ul>

            <div class="tab-author -js-tab-switch-author">
              <div class="tab-contents">
                <div class="author-box">
                  <div class="author">
                    <span class="avator"><img class="js-ofi -contain" src="<?php echo $author_icon; ?>" alt=""></span>
                    <span class="name"><?php echo $author_name; ?></span>
                  </div>
                  <div class="author-text"><?php if(!empty($author_description)) echo $author_description; ?></div>
                </div>

                <div class="qualification-box">
                  <p class="title">この著者の保持資格</p>
                  <?php echo $qualification; ?>
                </div>
              </div><!-- /.tab-contents -->

            </div><!-- /.-js-tab-switch-author -->

            <div class="tab-posts -js-tab-switch-author">
              <div class="tab-contents">
                <div class="author-box">
                  <div class="author">
                    <span class="avator"><img class="js-ofi -contain" src="<?php echo $author_icon; ?>" alt=""></span>
                    <span class="name"><?php echo $author_name; ?></span>
                  </div>
                  <div class="article-more"><a href="/blog/#at:<?php echo $author_id; ?>">すべて見る</a></div>
                </div>
                <div class="author-post">
                <?php
                  $args = array(
                    'post_type' => 'post',
                    'post_status' => 'publish',
                    'author' => $author_id,
                    'orderby' => 'date',
                    'order' => 'DESC',
                    'posts_per_page' => 3
                  );
                  $author_posts = get_posts( $args );
                  if(!empty($author_posts)):
                  foreach($author_posts as $ap):
                    $title = $ap->post_title;
                    $post_date = mysql2date('Y.m.d', $ap->post_date);
                ?>
                  <div class="author-post-row">
                    <span class="title"><a href="<?php echo get_permalink( $ap->ID ); ?>/"><?php echo $title; ?></a></span>
                    <span class="date"><?php echo $post_date; ?></span>
                  </div>
                <?php
                    endforeach;
                    wp_reset_postdata();
                  else:
                    echo '<p>この著者の記事は登録されていません。</p>';
                  endif;
                ?>
                </div>
              </div><!-- /.tab-contents -->

            </div><!-- /.-js-tab-switch-author -->

          </div><!-- /.author-info -->

          <div class="single-post-button">
            <ul class="button-block">
              <?php if(!empty($prev_post_url)): ?>
              <li class="prev"><a href="<?php echo $prev_post_url; ?>">前の記事</a></li>
              <?php endif; ?>
              <?php if(!empty($next_post_url)): ?>
              <li class="next"><a href="<?php echo $next_post_url; ?>">次の記事</a></li>
              <?php endif; ?>
            </ul>
          </div>

        </div><!-- /.blog-col -->

        <?php get_sidebar(); ?>
      </div>
    </section>

  </div>
</main>
<?php endif; ?>

<?php get_footer(); ?>
