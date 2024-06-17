<?php
/*
Template Name: 資料ダウンロード詳細テンプレート
*/

add_action('wp_enqueue_scripts', function () {
  wp_enqueue_script( 'download', get_theme_file_uri( '/assets/js/download.min.js' ), '', filemtime( get_theme_file_path( '/assets/js/download.min.js' ) ), true );
  wp_enqueue_style( 'layout-download', get_theme_file_uri( '/assets/css/layout-download.css' ), '', filemtime( get_theme_file_path( '/assets/css/layout-download.css' ) ) );

  wp_enqueue_style( 'style-download', get_theme_file_uri( '/css/style-download.css' ), '', filemtime( get_theme_file_path( '/css/style-download.css' ) ) );
});

get_header('download');

?>
<?php if(have_posts()) :
  the_post();
  setup_postdata($post);
  $title = $post->post_title;
  $acf_fields = get_field('download_form', $post->ID);
  $post_date = mysql2date('Y.m.d', $post->post_date);
  $icon_new = '';
  if($new_check_date <= $post_date) {
    $icon_new = '<div class="new">NEW</div>';
  }

?>
<main class="g-main">
  <div class="g-page-container single-download-container">
    <div class="adjust-width">

      <div class="contents">

        <h1><?php echo $title; ?></h1>

        <?php the_content(); ?>

      </div>

      <div class="sidebar-download">
        <?php echo do_shortcode($acf_fields); ?>
      </div>

    </div>
  </div>
</main>

<?php endif; ?>

<?php get_footer(); ?>
