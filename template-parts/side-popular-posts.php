<?php if (function_exists('wpp_get_mostpopular') && class_exists('WPP_Query')) : ?>
<?php
  global $post;
  $args = array(
    'post_type' => 'post',
    'range' => 'all',
    'order_by' => 'views',
    'limit' => 5,
  );
  $wpp_query = new WPP_Query($args);
  $wpp_posts = $wpp_query->get_posts();
  if(!empty($wpp_posts)):
?>
<div class="popular-posts">
<?php
  $rank = 0;
  foreach($wpp_posts as $wpp_post):
    $rank++;
    $post_permalink = get_the_permalink($wpp_post->id);
    $title = $wpp_post->title;
    $thumb = get_the_post_thumbnail_url($wpp_post->id, 'full');
?>
  <div class="post-row">
    <a href="<?php echo $post_permalink; ?>"></a>
    <div class="num"><?php echo sprintf('%02d', $rank); ?></div>
    <div class="image"><img class="js-ofi" src="<?php echo $thumb; ?>" alt="<?php echo $title; ?>"></div>
    <div class="title"><?php echo $title; ?></div>
  </div>
<?php endforeach; ?>
</div>
<?php 
  wp_reset_postdata();
?>
<?php endif; endif; ?>