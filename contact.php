<?php
/*
Template Name: 資料ダウンロード詳細テンプレート
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
        <li>資料ダウンロード</li>
      </ol>
    </div>

    <section class="l-section-container section-tag">
      <div class="adjust-width">
        <div class="main-tag-block">
          <ul class="l-tag-list">
            <li class="-js-document-type -current" data-target="all"><a href="javascript:void(0);">ALL</a></li>
              <?php
                foreach($doctype_terms as $pt) {
                  echo '              <li class="-js-document-type" data-target="' . $pt->slug . '"><a href="javascript:void(0);">' . $pt->name . '</a></li>';
                }
              ?>
          </ul>
        </div>

        <div class="l-tag-filter">
          <ul class="l-tab-switch" data-tab-switch=".-js-tab-switch-search">
            <li><span>目的・課題テーマ<span class="d-ibk">から探す</span></span></li>
            <li><span>製品名<span class="d-ibk">から探す</span></span></li>
          </ul>

          <div class="-js-tab-switch-search">
            <ul class="l-tag-list">
              <li class="-js-objective -current" data-target="all"><a href="javascript:void(0);">ALL</a></li>
              <?php
                foreach($objective_terms as $pt) {
                  echo '              <li class="-js-objective" data-target="' . $pt->slug . '"><a href="javascript:void(0);">' . $pt->name . '</a></li>';
                }
              ?>
            </ul>
          </div>

          <div class="-js-tab-switch-search">
            <ul class="l-tag-list">
              <li class="-js-product -current" data-target="all"><a href="javascript:void(0);">ALL-製品名</a></li>
              <?php
                foreach($product_terms as $pt) {
                  echo '              <li class="-js-product" data-target="' . $pt->slug . '"><a href="javascript:void(0);">' . $pt->name . '</a></li>';
                }
              ?>
            </ul>
          </div>
        </div>

        <ul class="sort-switch js-sort-switch" data-tab-switch>
          <li class="l-sort-switch" data-sort-order="default">
            <button class="-js-view-order" data-target="default" type="button"><span>新着順で表示</span></button>
          </li>
          <li class="l-sort-switch" data-sort-order="popular">
            <button class="-js-view-order" data-target="popular" type="button"><span>人気順で表示</span></button>
          </li>
        </ul>
        <input type="hidden" id="document_type_selected" value="all">
        <input type="hidden" id="objective_selected" value="all">
        <input type="hidden" id="product_selected" value="">
        <input type="hidden" id="view_order" value="default">
        <input type="hidden" id="paged" value="1">
      </div>
    </section>

    <section class="l-section-container -bc-gray section-contents">
      <div class="adjust-width">
        <div id="download_result">
        </div>
      </div>
    </section>

  </div>
</main>

<?php get_footer(); ?>
