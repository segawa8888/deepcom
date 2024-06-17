<?php
// require_once __DIR__ . '/libs/Mobile_Detect.php';
// $detect = new Mobile_Detect;
?>
<!DOCTYPE HTML>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, target-densitydpi=medium-dpi">
<meta http-equiv="X-UA-Compatible" content="IE=edge">

<?php wp_head(); ?>

<!-- <link rel="shortcut icon" href="<?php //the_resource_url('/images/favicon.ico'); ?>"> -->
<link rel="shortcut icon" href="<?php echo get_theme_file_uri('/images/favicon.ico'); ?>">

<?php
if (!(is_user_logged_in())) : ?>

<!-- Google Analytics等 -->

<?php endif; ?>
</head>

<body <?php body_class(); ?>>

<!-- <?php
  // ログインしているときのみ
  if (is_user_logged_in()){
    global $template;
    $temp_name = basename($template);
    echo '現在使用中のテンプレート： '.$temp_name;
  }
?> -->

<div class="g-container">

<header class="g-header -single-download">
  <div class="logo">
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
      <picture>
        <source media="(max-width: 767px)" srcset="<?php echo get_theme_file_uri('/assets/images/common/logo-sp.png'); ?>">
        <img src="<?php echo get_theme_file_uri('/assets/images/common/logo.png'); ?>" alt="株式会社Deepcom">
      </picture>
    </a>
  </div>

  <div class="header-single-download">
    <p class="title">資料ダウンロード</p>
  </div>
</header>
