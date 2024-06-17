<?php
/*
Template Name: ページテンプレート2
*/

add_action('wp_enqueue_scripts', function () {
  // wp_enqueue_script( 'page', get_theme_file_uri( '/assets/js/page.min.js' ), '', filemtime( get_theme_file_path( '/assets/js/page.min.js' ) ), true );
  wp_enqueue_style( 'layout-page', get_theme_file_uri( '/assets/css/layout-page.css' ), '', filemtime( get_theme_file_path( '/assets/css/layout-page.css' ) ) );

  add_action('wp_enqueue_scripts', function () {
  wp_enqueue_script( 'blog', get_theme_file_uri( '/assets/js/blog.min.js' ), '', filemtime( get_theme_file_path( '/assets/js/blog.min.js' ) ), true );
  // wp_enqueue_script( 'blog-search', get_theme_file_uri( '/assets/js/blog.search.min.js' ), '', filemtime( get_theme_file_path( '/assets/js/blog.min.js' ) ), true );
  wp_enqueue_style( 'layout-blog', get_theme_file_uri( '/assets/css/layout-blog.css' ), '', filemtime( get_theme_file_path( '/assets/css/layout-blog.css' ) ) );
  wp_enqueue_style( 'style-blog', get_theme_file_uri( '/css/style-blog.css' ), '', filemtime( get_theme_file_path( '/css/style-blog.css' ) ) );
});

  wp_enqueue_style( 'style-page', get_theme_file_uri( '/css/style-page.css' ), '', filemtime( get_theme_file_path( '/css/style-page.css' ) ) );

  if(is_page('company')) {
    wp_enqueue_style( 'layout-company', get_theme_file_uri( '/assets/css/layout-company.css' ), '', filemtime( get_theme_file_path( '/assets/css/layout-company.css' ) ) );
    wp_enqueue_style( 'style-company', get_theme_file_uri( '/css/style-company.css' ), '', filemtime( get_theme_file_path( '/css/style-company.css' ) ) );
  }

  if(is_page('access')) {
    wp_enqueue_style( 'layout-access', get_theme_file_uri( '/assets/css/layout-access.css' ), '', filemtime( get_theme_file_path( '/assets/css/layout-access.css' ) ) );
    wp_enqueue_style( 'style-access', get_theme_file_uri( '/css/style-access.css' ), '', filemtime( get_theme_file_path( '/css/style-access.css' ) ) );
  }

  if(is_page('recruit')) {
    wp_enqueue_style( 'layout-recruit', get_theme_file_uri( '/assets/css/layout-recruit.css' ), '', filemtime( get_theme_file_path( '/assets/css/layout-recruit.css' ) ) );
    wp_enqueue_style( 'style-recruit', get_theme_file_uri( '/css/style-recruit.css' ), '', filemtime( get_theme_file_path( '/css/style-recruit.css' ) ) );
  }
	
  if(is_page('microsoft365')) {
    wp_enqueue_style( 'layout-recruit', get_theme_file_uri( '/assets/css/layout-recruit.css' ), '', filemtime( get_theme_file_path( '/assets/css/layout-recruit.css' ) ) );
    wp_enqueue_style( 'style-recruit', get_theme_file_uri( '/css/style-recruit.css' ), '', filemtime( get_theme_file_path( '/css/style-recruit.css' ) ) );
  }
	
  if(is_page('microsoft-azure')) {
    wp_enqueue_style( 'layout-recruit', get_theme_file_uri( '/assets/css/layout-recruit.css' ), '', filemtime( get_theme_file_path( '/assets/css/layout-recruit.css' ) ) );
    wp_enqueue_style( 'style-recruit', get_theme_file_uri( '/css/style-recruit.css' ), '', filemtime( get_theme_file_path( '/css/style-recruit.css' ) ) );
  }
	
  if(is_page('power-platform')) {
    wp_enqueue_style( 'layout-recruit', get_theme_file_uri( '/assets/css/layout-recruit.css' ), '', filemtime( get_theme_file_path( '/assets/css/layout-recruit.css' ) ) );
    wp_enqueue_style( 'style-recruit', get_theme_file_uri( '/css/style-recruit.css' ), '', filemtime( get_theme_file_path( '/css/style-recruit.css' ) ) );
  }
	
  if(is_page('sharepoint')) {
    wp_enqueue_style( 'layout-recruit', get_theme_file_uri( '/assets/css/layout-recruit.css' ), '', filemtime( get_theme_file_path( '/assets/css/layout-recruit.css' ) ) );
    wp_enqueue_style( 'style-recruit', get_theme_file_uri( '/css/style-recruit.css' ), '', filemtime( get_theme_file_path( '/css/style-recruit.css' ) ) );
  }
	
  if(is_page('sharepointtimeline')) {
    wp_enqueue_style( 'layout-recruit', get_theme_file_uri( '/assets/css/layout-recruit.css' ), '', filemtime( get_theme_file_path( '/assets/css/layout-recruit.css' ) ) );
    wp_enqueue_style( 'style-recruit', get_theme_file_uri( '/css/style-recruit.css' ), '', filemtime( get_theme_file_path( '/css/style-recruit.css' ) ) );
  }

  if(is_page('likehitswebpart')) {
    wp_enqueue_style( 'layout-recruit', get_theme_file_uri( '/assets/css/layout-recruit.css' ), '', filemtime( get_theme_file_path( '/assets/css/layout-recruit.css' ) ) );
    wp_enqueue_style( 'style-recruit', get_theme_file_uri( '/css/style-recruit.css' ), '', filemtime( get_theme_file_path( '/css/style-recruit.css' ) ) );
  }

  if(is_page('sharepointtab')) {
    wp_enqueue_style( 'layout-recruit', get_theme_file_uri( '/assets/css/layout-recruit.css' ), '', filemtime( get_theme_file_path( '/assets/css/layout-recruit.css' ) ) );
    wp_enqueue_style( 'style-recruit', get_theme_file_uri( '/css/style-recruit.css' ), '', filemtime( get_theme_file_path( '/css/style-recruit.css' ) ) );
  }
});
get_header();
?>

<main class="g-main">
  <div class="page-header">
    <div class="page-title adjust-width">
      <h1>

      <?php if( is_page('company') ): ?>About US
        <?php elseif( is_page('imdivision') ): ?>About US
        <?php elseif( is_page('msdivision') ): ?>About US
        <?php elseif( is_page('services') ): ?>SERVICE
        <?php elseif( is_page('products') ): ?>PRODUCT
        <?php elseif( is_page('access') ): ?>ACCESS
        <?php elseif( is_page('recruit') ): ?>RECRUIT
		  <?php elseif( is_page('access-permission-acquisition-tool') ): ?>PRODUCT
		  <?php elseif( is_page('spfxparts') ): ?>PRODUCT
		  <?php elseif( is_page('microsoft365') ): ?>SERVICE
		  <?php elseif( is_page('power-platform') ): ?>SERVICE
		  <?php elseif( is_page('microsoft-azure') ): ?>SERVICE
		  <?php elseif( is_page('sharepoint') ): ?>SERVICE
		  <?php elseif( is_page('sharepointtimeline') ): ?>PRODUCT
      <?php elseif( is_page('likehitswebpart') ): ?>PRODUCT
      <?php elseif( is_page('sharepointtab') ): ?>PRODUCT
      <?php elseif( is_page('advancedsearch') ): ?>PRODUCT
      <?php elseif( is_page('sharepointslideshow') ): ?>PRODUCT
      <?php elseif( is_page('sharepointlistitemextend') ): ?>PRODUCT
      <?php elseif( is_page('powerapps-equipment_management') ): ?>PRODUCT
      <?php elseif( is_page('teams-post-summary-tool') ): ?>PRODUCT
      <?php elseif( is_page('about_dx') ): ?>SERVICE
      <?php elseif( is_page('powerplatform_governance') ): ?>SERVICE
      <?php elseif( is_page('sharepointonline_migrationservice') ): ?>SERVICE
      <?php elseif( is_page('powerapps-humanresources_database') ): ?>PRODUCT
      <?php elseif( is_page('news') ): ?>NEWS
      <?php elseif( is_page('dynamics365sales_service') ): ?>SERVICE<?php endif; ?>
        <span><?php single_post_title(); ?></span>
      </h1>
    </div>

    <?php if( is_page('company') ): ?>
      <div class="page-main-image -company">
        <picture>
          <source media="(max-width: 767px)" srcset="<?php echo get_theme_file_uri('/assets/images/company/main-img-sp.png'); ?>">
          <img src="<?php echo get_theme_file_uri('/assets/images/company/main-img.png'); ?>" alt="">
        </picture>
      </div>
    <?php endif; ?>

    <?php if( is_page('recruit') ): ?>
      <div class="page-main-image -recruit">
        <picture>
          <source media="(max-width: 767px)" srcset="<?php echo get_theme_file_uri('/assets/images/recruit/main-img-sp.png'); ?>">
          <img src="<?php echo get_theme_file_uri('/assets/images/recruit/main-img.png'); ?>" alt="">
        </picture>
      </div>
    <?php endif; ?>

    <div class="l-breadcrumb adjust-width">
      <ol>
        <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">HOME</a></li>
        <li><?php single_post_title(); ?></li>
      </ol>
    </div>
  </div>
  <div class="g-page-container">
    <?php if (have_posts()) : ?>
      <?php while (have_posts()) : the_post(); ?>
        <?php the_content();?>
      <?php endwhile; ?>
    <?php endif; ?>
  </div>
</main>


    <section class="l-section-container -bc-gray section-contents">
      <input type="hidden" id="objective_selected" value="all">
      <input type="hidden" id="product_selected" value="">
      <input type="hidden" id="tag" value="">
      <input type="hidden" id="author" value="">
      <input type="hidden" id="paged" value="1">
      <input type="hidden" id="str" value="">
      <input type="hidden" id="tag" value="">
      <?php if ( is_search() ) : ?>
      <div class="adjust-width">
        <p class="search-result-title"><?php echo get_search_query(); ?>　に一致した一覧</p>
      </div>
      <?php endif; ?>
      <div class="adjust-width">
        <div class="blog-col">
          <div id="blog_result">
          </div>
        </div><!-- /.blog-col -->

        <?php get_sidebar(); ?>
      </div>
    </section>


<?php get_footer(); ?>


