<form class="l-search-form" method="get" action="<?php echo esc_url( home_url( '/blog' ) ); ?>">
  <input type="hidden" name="custome_type" value="blog">
  <div class="search-box">
    <div class="input-wrap">
      <input type="text" value="<?php echo get_search_query(); ?>" name="s" id="s" placeholder="Search …">
    </div>
    <button class="search-button">
      <picture>
        <source media="(max-width: 767px)" srcset="<?php echo get_theme_file_uri('/assets/images/blog/icon-sidebar-search-white-sp.png'); ?>">
        <img src="<?php echo get_theme_file_uri('/assets/images/blog/icon-sidebar-search-white.png'); ?>" alt="">
      </picture>
    </button>
  </div>
</form>
