<?php
/*==============================
固定ページカテゴリ追加用コード
==============================*/

add_action('init','add_categories_for_pages');
function add_categories_for_pages(){
   register_taxonomy_for_object_type('category', 'page');
}
add_action( 'pre_get_posts', 'nobita_merge_page_categories_at_category_archive' );
function nobita_merge_page_categories_at_category_archive( $query ) {
  if ( $query->is_category== true && $query->is_main_query() ) {
    $query->set('post_type', array( 'post', 'page', 'nav_menu_item'));
  }
}

/*==============================
固定ページでタグ設定欄を表示
==============================*/

function add_tag_to_page() {
  register_taxonomy_for_object_type('post_tag', 'page'); }
add_action('init', 'add_tag_to_page');
 
//固定ページで設定したタグをタグクラウドに含める
function add_page_to_tag_archive( $obj ) {
  if ( is_tag() ) {
    $obj->query_vars['post_type'] = array( 'post', 'page' );
  }
}
add_action( 'pre_get_posts', 'add_page_to_tag_archive' );

//require __DIR__ . '/classes/login-logo.php';

/*-------------------------------------------------------------------------------------------------
 - テーマ設定
-------------------------------------------------------------------------------------------------*/

// CSS・JSのファイル読み込み
function add_files() {
  // ライブラリ等
  wp_enqueue_style( 'font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css', '', '4.7.0' );
  // wp_enqueue_style('fontawesome','//use.fontawesome.com/releases/v5.6.3/css/all.css', '', '5.6.3');

  // アクセサイト運用 サイト共通CSS
  wp_enqueue_style( 'default', get_theme_file_uri( '/assets/css/default.css' ), '', filemtime( get_theme_file_path( '/assets/css/default.css' ) ) );
  wp_enqueue_style( 'layout', get_theme_file_uri( '/assets/css/layout.css' ), '', filemtime( get_theme_file_path( '/assets/css/layout.css' ) ) );

  // サイト共通JS
  wp_enqueue_script( 'vendor', get_theme_file_uri( '/assets/js/vendor.js' ), '', filemtime( get_theme_file_path( '/assets/js/vendor.js' ) ), true );
  wp_enqueue_script( 'common-js', get_theme_file_uri( '/assets/js/common.min.js' ), '', filemtime( get_theme_file_path( '/assets/js/common.min.js' ) ), true );

  // Deepcom運用 サイト共通CSS
  wp_enqueue_style( 'style-common', get_theme_file_uri( '/css/common.css' ), '', filemtime( get_theme_file_path( '/css/common.css' ) ) );
  wp_enqueue_style( 'style-animate', get_theme_file_uri( '/css/animate.min.css' ), '', filemtime( get_theme_file_path( '/css/animate.min.css' ) ) );

  // Deepcom運用 サイト共通JS
   wp_enqueue_script( 'script-common-js', get_theme_file_uri( '/js/common.js' ), '', filemtime( get_theme_file_path( '/js/common.js' ) ), true );

}
add_action('wp_enqueue_scripts', 'add_files');

// タイトルタグの出力
add_theme_support('title-tag');
// タイトルの区切り線を | にする
add_filter('document_title_separator', function ($sep) {
    $sep = '|';

    return $sep;
});

// エディタの自動生成タグ（<p>等）を無効化
remove_filter('the_content', 'wpautop');

// サムネイル有効
add_theme_support('post-thumbnails');
// サムネイルサイズ トップページ
add_image_size('thumb708x408', 708, 408, array( 'center', 'center'));
// サムネイルサイズ ブログ ピックアップ
add_image_size('pickup-thumb708x398', 708, 398, array( 'center', 'center'));
add_image_size('pickup-thumb708x304', 708, 304, array( 'center', 'center'));
// サムネイルサイズ ブログ アイキャッチ
add_image_size('blog-thumb750x420', 750, 420, array( 'center', 'center'));
// サムネイルサイズ ブログ アイキャッチ サイドバー人気記事
add_image_size('blog-thumb86x86', 86, 86, array( 'center', 'center'));
// サムネイルサイズ ダウンロード アイキャッチ （サイドバー 人気資料ダウンロードでも使用）
add_image_size('download-thumb320x455', 320, 455, array( 'center', 'center'));
add_image_size('download-thumb320x205', 320, 205, array( 'center', 'center'));

// ナビゲーションメニュー（カスタムメニュー）
function register_my_menus() {
  register_nav_menus( array(
    //'「メニューの位置」の識別子' => 'メニューの説明の文字列',
    'header-menu' => 'Header Menu',
    'header-menu-sp' => 'Header Menu SP',
    // 'header-cta' => 'Header CTA',
    // 'footer-menu'  => 'Footer Menu',
  ) );
}
add_action( 'after_setup_theme', 'register_my_menus' );

// ウィジェット
function my_theme_widgets_init() {

  // メインサイドバーウィジェット
  register_sidebar( array(
    'name' => 'Main Sidebar',
    'id' => 'main-sidebar',
    'description' => 'メインサイドバー',
    'before_widget' => '<div id="%1$s" class="row side-%1$s"><div class="box">',
    'after_widget' => '</div></div>',
    'before_title' => '<p class="side-title">',
    'after_title'  => '</p>',
  ) );

  // メインサイドバーウィジェット
  register_sidebar( array(
    'name' => 'Blog Post Sidebar',
    'id' => 'blog-post-sidebar',
    'description' => 'ブログポストサイドバー',
    'before_widget' => '<div id="%1$s" class="row side-%1$s"><div class="box">',
    'after_widget' => '</div></div>',
    'before_title' => '<p class="side-title">',
    'after_title'  => '</p>',
  ) );

  // LPサイドバーウィジェット
  // register_sidebar( array(
  //   'name' => 'LP Sidebar',
  //   'id' => 'lp-sidebar',
  //   'description' => 'LPサイドバー',
  //   'before_widget' => '<div id="%1$s" class="row side-%1$s"><div class="box">',
  //   'after_widget' => '</div></div>',
  //   'before_title' => '<p class="side-title">',
  //   'after_title'  => '</p>',
  // ) );
}
add_action( 'widgets_init', 'my_theme_widgets_init' );

//ショートコード： [include_parts file='filename'] → filename.phpを呼び出す
function file_include($params = array()) {
  extract(shortcode_atts(array('file' => 'default'), $params));
  ob_start();
  include(STYLESHEETPATH . "/template-parts/$file.php");
  return ob_get_clean();
}
add_shortcode('include_parts', 'file_include');

// 抜粋文の省略記号変更
function new_excerpt_more($more) {
    return ' …';
}
add_filter('excerpt_more', 'new_excerpt_more');


//タグクラウド設定
function my_widget_tag_cloud_args( $args ) {
  $args['largest']  = 1.875;
  $args['smallest'] = 0.625;
  $args['unit']     = 'em';

  return $args;
}
add_filter( 'widget_tag_cloud_args', 'my_widget_tag_cloud_args', 10, 1 );

// 検索フォーム HTML5対応
add_theme_support( 'html5', array( 'search-form' ) );


// カスタム投稿：blogの最大表示件数
function change_posts_per_page($query) {
    if ( is_admin() || ! $query->is_main_query() )
        return;
    if ( $query->is_archive('blog') ) { //カスタム投稿タイプを指定
        $query->set( 'posts_per_page', '3' ); //表示件数を指定
    }
}
add_action( 'pre_get_posts', 'change_posts_per_page' );


// タグ一覧ページにカスタム投稿を追加
function custom_search($search, $wp_query) {
  if (!$wp_query->is_search) return;
  if(!empty($_REQUEST['custome_type']) && $_REQUEST['custome_type'] == 'blog') {
    $search .= " AND post_type = 'blog'";
    return $search;
  }
}
add_filter('posts_search','custom_search', 10, 2);



// ページャー：wp_pagenavi の出力修正
function custom_wp_pagenavi( $query, $link = true ) {
  $args = array(
    'query' => $query,
    'before' => '<div class="pagination-container l-pagination">',
    'after' => '</div>',
    'wrapper_tag' => 'div',
    'wrapper_class' => 'pagination-box',
    'echo' => false
  );
  $navi = wp_pagenavi( $args );

  if(!$link) {
    $result = preg_replace(
        // regexp
        '/(<a.*?href=(?:\'|"))([^\'"]+?)((?:\'|").*?>)/',
        // replacement
        '$1' . 'javascript:void(0);' . '$3',
        // input
        $navi
    );
    echo $result;
  } else {
    echo $navi;
  }
}



// function custom_pagination_tags($html) {
//     $out = '';
//     $out = str_replace('<a class="previouspostslink"', '<li class="arrow prev"><a class="previouspostslink"', $html);
//     $out = str_replace('</a>', '</a></li>', $out);
//     $out = str_replace('<span class="extend">', '<li class="num-link">' ,$out);
//     $out = str_replace("</span>","</li>",$out);
//     $out = str_replace('<a class="page larger"', '<li class="num-link"><a class="page larger"' ,$out);
//     $out = str_replace('<a class="nextpostslink"', '<li class="arrow next"><a class="nextpostslink"', $out);

//     return $out;
// }
// add_filter( 'wp_pagenavi', 'custom_pagination_tags', 10, 2 );

// function add_post_tag_archive( $wp_query ) {
//   if ($wp_query->is_main_query() && $wp_query->is_tag()) {

//     $wp_query->set( 'post_type', array('blog'));
//   }
// }
// add_action( 'pre_get_posts', 'add_post_tag_archive' , 10 , 1);

// クエリパラメータの取得
function add_query_vars_filter( $vars ) {
  $vars[] = 'dlpg';
  return $vars;
}
add_filter('query_vars', 'add_query_vars_filter');


// url書き換えルールの追加
// function add_dc_rewrite_rule() {
//   add_rewrite_rule(
//     '^test/([^/]+)/?$',
//     'index.php?pagename=test&myvalue=$matches[1]',
//     'top'
//   );
// }
// add_action( 'init', 'add_dc_rewrite_rule' );



// blog ajax search
// add_action('wp_enqueue_scripts', function () {
//   $handle = 'search';
//   $file = get_theme_file_uri( '/assets/js/blog.search.js' );
//   wp_register_script($handle, $file, array(), filemtime( get_theme_file_path( '/assets/js/blog.search.js' ) ), true);

//   $localize = [
//     'ajax_url' => admin_url('admin-ajax.php'),
//     'action' => 'blog_search_results',
//     'nonce' => wp_create_nonce('blog_search_results')
//   ];
//   wp_localize_script($handle, 'localize', $localize);
//   wp_enqueue_script($handle);
// });

// /* Ajaxから取得したnonceを認証し、認証通過したらテンプレートを出力する */
// function blog_search_results()
// {
//   $nonce = $_REQUEST['nonce'];
//   if (wp_verify_nonce($nonce, 'blog_search_results')) {
//     get_template_part('template-parts/parts-blog');
//   }
//   die();
// }

// add_action('wp_ajax_blog_search_results', 'blog_search_results'); //第一引数は wp_ajax_{ファンクション名} にする
// add_action('wp_ajax_nopriv_blog_search_results', 'blog_search_results'); //第一引数は wp_ajax_nopriv_{ファンクション名} にする




// downloads ajax search
add_action('wp_enqueue_scripts', function () {
  if(!is_post_type_archive('downloads')) return;
  $handle = 'search';
  $file = get_theme_file_uri( '/assets/js/document.download.min.js' );
  wp_register_script($handle, $file, array(), filemtime( get_theme_file_path( '/assets/js/document.download.min.js' ) ), true);

  $localize = [
    'ajax_url' => admin_url('admin-ajax.php'),
    'action' => 'download_search_results',
    'nonce' => wp_create_nonce('download_search_results')
  ];
  wp_localize_script($handle, 'localize', $localize);
  wp_enqueue_script($handle);
});

/* Ajaxから取得したnonceを認証し、認証通過したらテンプレートを出力する */
function download_search_results()
{
  $nonce = $_REQUEST['nonce'];
  if (wp_verify_nonce($nonce, 'download_search_results')) {
    get_template_part('template-parts/parts-download');
  }
  die();
}
add_action('wp_ajax_download_search_results', 'download_search_results'); //第一引数は wp_ajax_{ファンクション名} にする
add_action('wp_ajax_nopriv_download_search_results', 'download_search_results'); //第一引数は wp_ajax_nopriv_{ファンクション名} にする

function df_terms_clauses($clauses, $taxonomy, $args) {
  if (!empty($args['post_type'])) {
    global $wpdb;

    $post_types = array();

    foreach($args['post_type'] as $cpt) {
    $post_types[] = "'".$cpt."'";
    }

    if(!empty($post_types)) {
      $clauses['fields'] = 'DISTINCT '.str_replace('tt.*', 'tt.term_taxonomy_id, tt.term_id, tt.taxonomy, tt.description, tt.parent', $clauses['fields']).', COUNT(t.term_id) AS count';
      $clauses['join'] .= ' INNER JOIN '.$wpdb->term_relationships.' AS r ON r.term_taxonomy_id = tt.term_taxonomy_id INNER JOIN '.$wpdb->posts.' AS p ON p.ID = r.object_id';
      $clauses['where'] .= ' AND p.post_type IN ('.implode(',', $post_types).')';
      $clauses['orderby'] = 'GROUP BY t.term_id '.$clauses['orderby'];
    }
  }
  return $clauses;
}
add_filter('terms_clauses', 'df_terms_clauses', 10, 3);


// blog ajax search
add_action('wp_enqueue_scripts', function () {
  if(!is_page('blog')) return;

  $handle = 'blog_search';
  $file = get_theme_file_uri( '/assets/js/blog.search.min.js' );
  wp_register_script($handle, $file, array(), filemtime( get_theme_file_path( '/assets/js/blog.search.min.js' ) ), true);

  $localize = [
    'ajax_url' => admin_url('admin-ajax.php'),
    'action' => 'blog_search_results',
    'nonce' => wp_create_nonce('blog_search_results')
  ];
  wp_localize_script($handle, 'localize', $localize);
  wp_enqueue_script($handle);
});

/* Ajaxから取得したnonceを認証し、認証通過したらテンプレートを出力する */
function blog_search_results()
{
  $nonce = $_REQUEST['nonce'];
  if (wp_verify_nonce($nonce, 'blog_search_results')) {
    get_template_part('template-parts/parts-blog');
  }
  die();
}


add_action('wp_ajax_blog_search_results', 'blog_search_results'); //第一引数は wp_ajax_{ファンクション名} にする
add_action('wp_ajax_nopriv_blog_search_results', 'blog_search_results'); //第一引数は wp_ajax_nopriv_{ファンクション名} にする


function add_slider_files() {
  //スタイルシートの読み込み
  wp_enqueue_style( 'swiper-style', 'https://unpkg.com/swiper/swiper-bundle.min.css');

  //JavaScript の読み込み
  wp_enqueue_script( 'swiper-js', 'https://unpkg.com/swiper/swiper-bundle.min.js', '', '', true);
}
add_action('wp_enqueue_scripts', 'add_slider_files');

//親ページのスラッグをボディクラスに付与
/*add_filter( 'body_class', 'add_page_slug_class_name' );
function add_page_slug_class_name( $classes ) {
  if ( is_page() ) {
    $page = get_post( get_the_ID() );
    $classes[] = $page->post_name;

    $parent_id = $page->post_parent;
    if ( $parent_id ) {
      $classes[] = get_post($parent_id)->post_name . '-child';
    }
  }
  return $classes;
}*/
