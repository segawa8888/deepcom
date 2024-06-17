<?php
  // ダウンロード

  $paged = (int)$_GET['paged'] > 0 ? (int)$_GET['paged'] : 1;
  $document_type = $_GET['document_type'] == 'all' ? '' : esc_html($_GET['document_type']);
  $objective = $_GET['objective'] == 'all' ? '' : esc_html($_GET['objective']);
  $product = $_GET['product'] == 'all' ? '' : esc_html($_GET['product']);
  $view_order = $_GET['view_order'] == 'default' ? 'default' : 'popular';

  // echo '<pre>';
  // echo var_export($_GET);
  // die();

  $args = array(
      'post_type' => 'downloads',
      'post_status' => 'publish',
      'paged' => $paged,
      'posts_per_page' => 8,
  );

  if(!empty($document_type)) {
    if(!empty($objective) || !empty($product)) {
      $args['tax_query']['relation'] = 'AND';
    }
    $args['tax_query'][] = array(
        'taxonomy' => 'document_type',
        'field' => 'slug',
        'terms' => $document_type,
    );
  }
  if(!empty($objective)) {
    $args['tax_query'][] = array(
      'taxonomy' => 'objective',
      'field' => 'slug',
      'terms' => $objective,
    );
  }
  if(!empty($product)) {
    $args['tax_query'][] = array(
      'taxonomy' => 'product',
      'field' => 'slug',
      'terms' => $product,
    );
  }
  $post_in_id = array();
  if($view_order == 'popular') {
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
    }
    $args['post__in'] = $wpp_query_ids;
    $args['orderby'] = 'post__in';
  } else {
    $args['orderby'] = array('date' => 'DESC');
  }

echo '        <div class="download-post-container js-download-post-group">';

  $search_query = new WP_Query( $args );
  global $post;
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
          $category_list[] = array('name' => $_buf->name, 'slug' => $_buf->slug, 'type' => 'o');
        }
      }
      if(!empty($product_cat)) {
        foreach($product_cat as $_buf) {
          $category_list[] =  array('name' => $_buf->name, 'slug' => $_buf->slug, 'type' => 'p');
        }
      }
?>
          <div class="post-box">
            <div class="image">
              <a href="<?php echo get_permalink( $post->ID ); ?>">
                <img src="<?php echo $thumb; ?>" alt="<?php echo $title; ?>">
              </a>
            </div>
            <div class="info">
              <p class="title"><a href="<?php echo get_permalink( $post->ID ); ?>"><?php echo $title; ?></a></p>
              <p class="date"><?php echo $post_date; ?></p>
              <ul class="l-category-list">
                <?php foreach($category_list as $_cat) : ?>
                <?php if($_cat['type'] == 'o'): ?>
                  <li class="-js-dl-objective" data-target="<?php echo $_cat['slug']; ?>"><span><?php echo $_cat['name']; ?></span></li>
                <?php else: ?>
                  <li class="-js-dl-product" data-target="<?php echo $_cat['slug']; ?>"><span><?php echo $_cat['name']; ?></span></li>
                <?php endif; ?>
                <?php endforeach; wp_reset_postdata(); ?>
              </ul>
            </div>
          </div>
<?php
    endwhile;
  else:
    echo '<p>選択された条件では資料が登録されていません。</p>';
  endif;
  echo '        </div>';
?>

<?php
  if ( $search_query->have_posts() ) {
    if (function_exists('custom_wp_pagenavi')) custom_wp_pagenavi( $search_query, false );
  }
?>