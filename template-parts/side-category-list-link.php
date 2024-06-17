<?php
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
if(!empty($objective_terms) || !empty($product_terms)):
?>
<div class="category-lists">
  <ul class="l-category-list">
    <?php foreach($objective_terms as $_buf): ?>
    <li><a href="/blog/#co:<?php echo $_buf->slug; ?>"><?php echo $_buf->name; ?></a></li>
    <?php endforeach; ?>
    <?php foreach($product_terms as $_buf): ?>
    <li><a href="/blog/#cp:<?php echo $_buf->slug; ?>"><?php echo $_buf->name; ?></a></li>
    <?php endforeach; ?>
  </ul>
</div>
<?php endif; ?>