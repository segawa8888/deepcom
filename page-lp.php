<?php
/*
Template Name: LPテンプレート
*/

add_action('wp_enqueue_scripts', function () {
  // wp_enqueue_script( 'page', get_theme_file_uri( '/assets/js/page.min.js' ), '', filemtime( get_theme_file_path( '/assets/js/page.min.js' ) ), true );
  wp_enqueue_style( 'layout-page', get_theme_file_uri( '/assets/css/layout-page.css' ), '', filemtime( get_theme_file_path( '/assets/css/layout-page.css' ) ) );

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

  if(is_page('enterprise_chatgpt')) {
    wp_enqueue_style( 'layout-recruit', get_theme_file_uri( '/assets/css/layout-recruit.css' ), '', filemtime( get_theme_file_path( '/assets/css/layout-recruit.css' ) ) );
    wp_enqueue_style( 'style-recruit', get_theme_file_uri( '/css/style-recruit.css' ), '', filemtime( get_theme_file_path( '/css/style-recruit.css' ) ) );
  }

  if(is_page('enterprise_chatgpt_organization_data')) {
    wp_enqueue_style( 'layout-recruit', get_theme_file_uri( '/assets/css/layout-recruit.css' ), '', filemtime( get_theme_file_path( '/assets/css/layout-recruit.css' ) ) );
    wp_enqueue_style( 'style-recruit', get_theme_file_uri( '/css/style-recruit.css' ), '', filemtime( get_theme_file_path( '/css/style-recruit.css' ) ) );
  }

  if(is_page('enterprise_chatgpt_sharepoint')) {
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
        <?php if( is_page('company') ): ?>DeepCom<?php endif; ?>
        <?php if( is_page('imdivision') ): ?>DeepCom<?php endif; ?>
        <?php if( is_page('msdivision') ): ?>DeepCom<?php endif; ?>
        <?php if( is_page('access') ): ?>ACCESS<?php endif; ?>
        <?php if( is_page('recruit') ): ?>RECRUIT<?php endif; ?>
		  <?php if( is_page('access-permission-acquisition-tool') ): ?>PRODUCT<?php endif; ?>
		  <?php if( is_page('spfxparts') ): ?>PRODUCT<?php endif; ?>
		  <?php if( is_page('microsoft365') ): ?>SERVICE<?php endif; ?>
		  <?php if( is_page('power-platform') ): ?>SERVICE<?php endif; ?>
		  <?php if( is_page('microsoft-azure') ): ?>SERVICE<?php endif; ?>
		  <?php if( is_page('sharepoint') ): ?>SERVICE<?php endif; ?>
		  <?php if( is_page('sharepointtimeline') ): ?>PRODUCT<?php endif; ?>
      <?php if( is_page('likehitswebpart') ): ?>PRODUCT<?php endif; ?>
      <?php if( is_page('sharepointtab') ): ?>PRODUCT<?php endif; ?>
      <?php if( is_page('advancedsearch') ): ?>PRODUCT<?php endif; ?>
      <?php if( is_page('sharepointslideshow') ): ?>PRODUCT<?php endif; ?>
      <?php if( is_page('sharepointlistitemextend') ): ?>PRODUCT<?php endif; ?>
      <?php if( is_page('powerapps-equipment_management') ): ?>PRODUCT<?php endif; ?>
      <?php if( is_page('teams-post-summary-tool') ): ?>PRODUCT<?php endif; ?>
      <?php if( is_page('about_dx') ): ?>SERVICE<?php endif; ?>
      <?php if( is_page('powerplatform_governance') ): ?>SERVICE<?php endif; ?>
      <?php if( is_page('sharepointonline_migrationservice') ): ?>SERVICE<?php endif; ?>
      <?php if( is_page('powerapps-humanresources_database') ): ?>PRODUCT<?php endif; ?>
      <?php if( is_page('enterprise_chatgpt') ): ?>BizCopilot PRODUCT<?php endif; ?>
      <?php if( is_page('news') ): ?>NEWS<?php endif; ?>
      <?php if( is_page('enterprise_chatgpt_organization_data') ): ?>BizCopilot SERVICE<?php endif; ?>
      <?php if( is_page('enterprise_chatgpt_sharepoint') ): ?>BizCopilot SERVICE<?php endif; ?>
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
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/lp/css/style.css">

    <?php if (have_posts()) : ?>
      <?php while (have_posts()) : the_post(); ?>
        <?php remove_filter('the_content', 'wpautop'); ?>
        <?php the_content();?>
      <?php endwhile; ?>
    <?php endif; ?>

  </div>
</main>

<?php get_footer(); ?>
