<?php
  function console_log($data){
    echo '<script>';
    echo 'console.log('.json_encode($data).')';
    echo '</script>';
  }
  // ブログ記事取得
  $paged = (int)$_GET['paged'] > 0 ? (int)$_GET['paged'] : 1;
  $objective = $_GET['objective'] == 'all' ? '' : esc_html($_GET['objective']);
  $product = $_GET['product'] == 'all' ? '' : esc_html($_GET['product']);
  $search_str = $_GET['str'] == '' ? '' : esc_html($_GET['str']);
  $author = $_GET['author'] == '' ? '' : esc_html($_GET['author']);
  $tag = $_GET['tag'] == '' ? '' : esc_html($_GET['tag']);
  if(!empty($objective)) {
    $search_taxonomy = 'objective';
    $search_slug = $objective;
  }

  if(!empty($product)) {
    $search_taxonomy = 'product';
    $search_slug = $product;
  }

  $args = array(
      'post_type' => 'post',
      'post_status' => 'publish',
      'paged' => $paged,
      'posts_per_page' => 9,
      
  );
  if(!empty($search_taxonomy)) {
    $args['tax_query'] = array(
      array(
        'taxonomy' => $search_taxonomy,
        'field' => 'slug',
        'terms' => $search_slug,
      )
    );
  } elseif(!empty($search_str)) {
    $args['suppress_filters'] = 1;
    $args['s'] = $search_str;
    $args['sentence'] = true;
  } elseif(!empty($tag)) {
    $args['tag'] = $tag;
  }
  if(!empty($author)) {
    $args['author'] = (int)$author;
  }

  $args['orderby'] = array('date' => 'DESC');
  $search_query = new WP_Query( $args );

echo '          <div class="post-container">';

  if ( $search_query->have_posts() ) :
    while ( $search_query->have_posts() ) :
      $search_query->the_post();
      setup_postdata($post);
      $title = $post->post_title;
      $thumb = get_the_post_thumbnail_url($post->ID, 'full');
      $author_id = get_the_author_meta('ID');
      $author = get_the_author_meta('last_name');
      $post_date = mysql2date('Y.m.d', $post->post_date);
      $icon_new = '';
      
      $check14date = new DateTime();

      //if($new_check_date <= $post_date) {
      if(($date->modify('-14 days')) <= $post_date) {
        $icon_new = '<div class="new">NEW</div>';
      }
console_log($post->post_title);
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
    <div class="author"><span class="avator"><img class="-no-icon" src="<?php echo get_theme_file_uri('/assets/images/blog/icon-author-00.png'); ?>" alt=""></span><a href="javascript:void(0);" data-target="<?php echo $author_id; ?>" class="-js-author name"><?php echo $author; ?></a></div>
  </div>
  <?php if(!empty($category_list)) : ?>
  <ul class="l-category-list">
    <?php foreach($category_list as $_cat) : ?>
    <?php if($_cat['type'] == 'o'): ?>
      <li><a class="-js-t-objective" href="javascript:void(0);" data-target="<?php echo $_cat['slug']; ?>"><?php echo $_cat['name']; ?></a></li>
    <?php else: ?>
      <li><a class="-js-t-product" href="javascript:void(0);" data-target="<?php echo $_cat['slug']; ?>"><?php echo $_cat['name']; ?></a></li>
    <?php endif; ?>
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
  echo '          </div><!-- /.post-container -->';
?>
<?php
  if ( $search_query->have_posts() ) {
    if (function_exists('custom_wp_pagenavi')) custom_wp_pagenavi( $search_query, false );
  }
?>
