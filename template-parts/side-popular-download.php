<?php
$args = array(
    'post_type' => 'downloads',
    'post_status' => 'publish',
    'posts_per_page' => 4,
);
$post_in_id = array();
if ( function_exists( 'wpp_get_mostpopular' ) ){
  $wpp_option = array( // 表示オプションの設定
    'range' => 'all',
    'post_type' => 'downloads',
    'order_by' => 'views',
    'limit' => 999
  );
  $wpp_query = new WPP_Query( $wpp_option );
  $wpp_query_ids = array_map(
    function( $wppost ){
      return (int)$wppost->id;
    }, $wpp_query->get_posts()
  );
  $args['post__in'] = $wpp_query_ids;
  $args['orderby'] = 'post__in';
}
$search_query = new WP_Query( $args );
global $post;
if ( $search_query->have_posts() ) :
  echo '<div class="popular-download">';
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

?>
  <div class="post-row">
    <a href="<?php echo get_permalink( $post->ID ); ?>"></a>
      <div class="image"><img class="js-ofi" src="<?php echo $thumb; ?>" alt="<?php echo $title; ?>"></div>
      <div class="title"><?php echo $title; ?></div>

  </div>
<?php
    endwhile;
    wp_reset_postdata();
    echo '        </div>';
  endif;
?>