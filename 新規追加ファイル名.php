<?php
/*
Template Name: 問い合わせフォームテンプレート
*/

add_action('wp_enqueue_scripts', function () {
  wp_enqueue_script( 'download', get_theme_file_uri( '/assets/js/download.min.js' ), '', filemtime( get_theme_file_path( '/assets/js/download.min.js' ) ), true );
  // wp_enqueue_script( 'document-download', get_theme_file_uri( '/assets/js/document.download.js' ), '', filemtime( get_theme_file_path( '/assets/js/download.min.js' ) ), true );
  wp_enqueue_style( 'layout-download', get_theme_file_uri( '/assets/css/layout-download.css' ), '', filemtime( get_theme_file_path( '/assets/css/layout-download.css' ) ) );
  wp_enqueue_style( 'style-download', get_theme_file_uri( '/css/style-download.css' ), '', filemtime( get_theme_file_path( '/css/style-download.css' ) ) );
});

get_header();

$doctype_terms = get_terms( 'document_type' );

$args = array(
  'post_type' => array('downloads'),
  'hide_empty' => 1,
  'orderby' => 'name',
  'order'=>'ASC',
);
$objective_terms = get_terms('objective', $args);

$args = array(
  'post_type' => array('downloads'),
  'hide_empty' => 1,
  'orderby' => 'name',
  'order'=>'ASC',
);
$product_terms = get_terms('product', $args);
?>

<main class="g-main">
  <div class="g-page-container archive-download-container">
    <div class="page-download-title adjust-width">
      <h1>お問い合わせ</h1>
    </div>

    <div class="l-breadcrumb adjust-width">
      <ol>
        <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">HOME</a></li>
        <li>お問い合わせ</li>
      </ol>
    </div>

    <section class="l-section-container section-tag">
      <div class="adjust-width">
        <div class="l-tag-filter">
          <div class="-js-tab-switch-search">
            <!--[if lte IE 8]>
<script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2-legacy.js"></script>
<![endif]-->
<script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2.js"></script>
<script>
  hbspt.forms.create({
	region: "na1",
	portalId: "9396889",
	formId: "be21dda7-15e8-4a95-9082-01aa3b261e7d"
});
</script>
          </div>



  </div>
</main>

<?php get_footer(); ?>
