<?php

function truncate($str, $limit = 80, $etc = '...') {
	if($limit == 0) {return '';}
	$str = strip_tags($str);
	if(mb_strlen($str) > $limit) {
		return mb_substr($str, 0, $limit).$etc;
	} else {
		return $str;
	}
}

function new_excerpt_more($more) {
	return '...';
}
add_filter('excerpt_more', 'new_excerpt_more');


function ps_get_root_page( $cur_post, $cnt = 0 ) {
	if ( $cnt > 100 ) { return false; }
	$cnt++;
	if ( $cur_post->post_parent == 0 ) {
		$root_page = $cur_post;
	} else {
		$root_page = ps_get_root_page( get_post( $cur_post->post_parent ), $cnt );
	}
	return $root_page;
}
//WordPressの更新通知表示と、バージョンチェックを無効
if( !current_user_can( 'administrator' ) ) {
	add_filter( 'pre_site_transient_update_core', '__return_zero' );
	remove_action( 'wp_version_check', 'wp_version_check' );
	remove_action( 'admin_init', '_maybe_update_core' );
}
//アイキャッチ画像設定
add_theme_support('post-thumbnails');



function my_head() {
echo <<< EOF
<style type="text/css">
div.tabs-panel{
    max-height: 100% !important;
}
</style>
EOF;
}
add_action('admin_head', 'my_head');



//カテゴリディスクリプションからpタグを除去
remove_filter('term_description','wpautop');


//wp_headから以下を削除
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'rel_canonical');
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head');





//カテゴリアイコン出力のカスタマイズ

/**
 * Tests if any of a post's assigned categories are descendants of target categories
 *
 * @param int|array $cats The target categories. Integer ID or array of integer IDs
 * @param int|object $_post The post. Omit to test the current post in the Loop or main query
 * @return bool True if at least 1 of the post's categories is a descendant of any of the target categories
 * @see get_term_by() You can get a category by name or slug, then pass ID to this function
 * @uses get_term_children() Passes $cats
 * @uses in_category() Passes $_post (can be empty)
 * @version 2.7
 * @link http://codex.wordpress.org/Function_Reference/in_category#Testing_if_a_post_is_in_a_descendant_category
 */
function post_is_in_descendant_category( $cats, $_post = null )
{
 foreach ( (array) $cats as $cat ) {
  // get_term_children() accepts integer ID only
  $descendants = get_term_children( (int) $cat, 'category');
  if ( $descendants && in_category( $descendants, $_post ) )
   return true;
 }
 return false;
}

add_filter( 'category_template', 'my_category_template' );
function my_category_template( $template ) {
  if ( '' == $template || false !== strpos( $template, '/category.php' ) ) {

    $category = get_queried_object();
    $templates = array();

    while ( $category->parent ) {
      $category = get_category( $category->parent );
      $templates[] = "category-{$category->slug}.php";
      $templates[] = "category-{$category->term_id}.php";
    }

    if ( $temp = locate_template( $templates ) )
      $template = $temp;
  }

  return $template;
}


//タームスラッグの取得
function get_current_terms_slug($args){
  $defaults = array(
    'taxonomy' => '',
    'loop' => false
  );
  $args = wp_parse_args($args, $defaults);
  extract($args, EXTR_SKIP);

  if(is_tax() && !$loop){
    $terms = get_query_var('term');
    if($terms && !is_wp_error($terms)){
      $result = $terms;
    }
  }elseif(is_single() || $loop){
    $terms = get_the_terms(0, $taxonomy);
    if($terms && !is_wp_error($terms)){
      $term = reset($terms);
      $result = $term->slug;
    }
  }

  if($result){
    return esc_html($result);
  }
}

///.タームスラッグの取得

function term_count($slug){ 
        //スラグで取得 
        $data = get_term_by( 'slug', $slug , 'search_category' ); 
        return $data->count; 
} 

function has_taxonomy( $taxonomy, $_post = null ) {
	if ( empty( $taxonomy ) )
		return false;
	if ( $_post )
		$_post = get_post( $_post );
	else
		$_post =& $GLOBALS['post'];
	if ( !$_post )
		return false;
	$r = is_object_in_term( $_post->ID, 'taxonomy', $taxonomy );
	if ( is_wp_error( $r ) )
		return false;
	return $r;
}

/**body classにslugを追加
 */
function pagename_class($classes = '') {
         if (is_page()) {
             $page = get_page(get_the_ID());
             $classes[] = $page->post_name;
         }
	return $classes;
}

add_filter('body_class','pagename_class');


/**
 * 新着かどうかを判別する。
 *
 * @param string $post_date PHP date format.
 * @param int $days days of new period.
 * @return bool within or not
 */
function is_new_post( $post_date = '', $days = 0 ) {
    global $post;
    if ( ! $post_date ) {
        $post_date = $post->post_date;
    }
    if ( ! $days ) {
        $days = absint( get_option( 'new_days', 14 ) );//登録から2週間
    }
    return is_widthin_days( $post_date, $days );
}
 
/**
 * 更新かどうかを判別する。
 *
 * @param string $post_date PHP date format.
 * @param int $days days of modified period.
 * @return bool within or not
 */
function is_modified_post( $post_date = '', $days = 0 ) {
    global $post;
    if ( ! $post_date ) {
        $post_date = $post->post_modified;
    }
    if ( ! $days ) {
        $days = absint( get_option( 'modified_days', 14 ) );//更新から2週間
    }
    return is_widthin_days( $post_date, $days );
}
 
/**
 * 期間内かどうかを判別する。
 *
 * @param string $post_date PHP date format.
 * @param int $days days of period.
 * @return bool within or not
 */
function is_widthin_days( $post_date, $days = 7 ) {
    if ( in_array( strtotime( $post_date ), array( false, -1 ) ) ) {
        return false;
    }
 
    $limit = current_time( 'timestamp' ) - ( $days - 1 ) * 24 * 3600;
    if ( mysql2date( 'Y-m-d', $post_date ) >= date( 'Y-m-d', $limit ) ) {
        return true;
    }
    return false;
}


/*記事の一枚目をサムネールとして利用*/
function catch_that_image() {
    global $post, $posts;
    $first_img = '';
    ob_start();
    ob_end_clean();
    $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
    $first_img = $matches [1] [0];
  
    if(empty($first_img)){
        // 記事内で画像がなかったときのためのデフォルト画像を指定
        $first_img = "/wp-content/themes/witco/img/news/no_image.png";
    }
    return $first_img;
}




//正方形のサムネールサイズ（トリミング）
add_image_size( 'thumb-square', 300, 300, true );

//mp4カバー画像のサムネールサイズ（トリミング）
add_image_size( 'thumb-cover', 480, 270, true );

//ギャラリー画像のサムネールサイズ（トリミング）
add_image_size( 'gallery-thumb', 300, 225, true );

//スライド画像のサムネールサイズ（トリミング）
add_image_size( 'slide-thumb', 960, 9999, false );

//シングル記事のページャーにclassを付与
function add_prev_post_link_class($output) {
  return str_replace('<a href=', '<a class="post-pager-prev" href=', $output);
}
add_filter( 'previous_post_link', 'add_prev_post_link_class' );

function add_next_post_link_class($output) {
  return str_replace('<a href=', '<a class="post-pager-next" href=', $output);
}
add_filter( 'next_post_link', 'add_next_post_link_class' );



function ss_get_primary_category($post_id, $taxonomy='blog_category'){
  $primary_category = 0;
  if (class_exists('WPSEO_Primary_Term')){
    $wpseo_primary_term = new WPSEO_Primary_Term( $taxonomy, $post_id );
    $primary_term = get_term($wpseo_primary_term->get_primary_term());
    if (!is_wp_error($primary_term)){
      $primary_category = $primary_term;
    }
  }
  if (empty($primary_category)){
    $categories_list = get_the_terms($post_id, $taxonomy);
    if (!empty($categories_list)){
      $primary_category = $categories_list[0];
    }
  }
  return $primary_category;
}


//デイトピッカーの日付フォーマット
function dateformat($field_name, $format_status = 'default')
{
  $week = array('日', '月', '火', '水', '木', '金', '土');

  if ($format_status === 'jp') {
    $format = 'Y年n月j日';
  } else {
    $format = 'Y/n/j';
  }

  if (date_create($field_name)) {
    $date = date_create($field_name);
  } else { //カスタムフィールドだったらfalseが帰ってくる
    $date = date_create(get_field($field_name));
  }

  echo date_format($date, $format) . '(' . $week[(int) date_format($date, 'w')] . ')';
}


//お問い合わせのエラーメッセージ（学内）
function my_error_message($error, $key, $rule){
    if($key === '問い合わせ内容' && $rule === 'noempty'){
        return 'お問い合わせの内容を具体的にご記入ください';
    }
    if($key === '氏名' && $rule === 'noempty'){
        return '氏名を入力してください';
    }
    if($key === 'Email' && $rule === 'noempty'){
        return 'Emailを入力してください';
    }
    if($key === '部署名' && $rule === 'noempty'){
        return '部署名を入力してください';
    }
    if($key === '内線' && $rule === 'noempty'){
        return '内線番号を入力してください';
    }
    return $error;
}
add_filter('mwform_error_message_mw-wp-form-63', 'my_error_message', 10, 3);

//お問い合わせのエラーメッセージ（企業）
function my_error_message2($error, $key, $rule){
    if($key === '問い合わせ内容' && $rule === 'noempty'){
        return 'お問い合わせの内容を具体的にご記入ください';
    }
    if($key === '氏名' && $rule === 'noempty'){
        return '氏名を入力してください';
    }
    if($key === 'Email' && $rule === 'noempty'){
        return 'Emailを入力してください';
    }
    if($key === '会社名' && $rule === 'noempty'){
        return '会社名を入力してください';
    }
    if($key === '電話番号' && $rule === 'noempty'){
        return '電話番号を入力してください';
    }
    return $error;
}
add_filter('mwform_error_message_mw-wp-form-54', 'my_error_message2', 10, 3);


?>