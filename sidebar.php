<aside class="g-sidebar">
  <?php if ( is_active_sidebar('main-sidebar') ) : ?>
    <div class="menu">
      <?php 
        if(is_page('blog')) {
          dynamic_sidebar('main-sidebar');
        } elseif(is_singular('post')) {
          dynamic_sidebar('blog-post-sidebar');
        }
      ?>
    </div>
  <?php endif; ?>
</aside>
