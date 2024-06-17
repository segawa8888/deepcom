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

<header class="g-header js-header<?php if ( is_home() || is_front_page() ) : ?> -top<?php endif; ?>">
  <div class="logo">
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
      <picture>
        <source media="(max-width: 767px)" srcset="<?php echo get_theme_file_uri('/assets/images/common/logo-sp.png'); ?>">
        <img class="logo-default" src="<?php echo get_theme_file_uri('/assets/images/common/logo.png'); ?>" alt="株式会社Deepcom">
      </picture>
      <img class="logo-white" src="<?php echo get_theme_file_uri('/assets/images/common/logo-white.png'); ?>" alt="株式会社Deepcom">
    </a>
  </div>

  <div class="menu-toggle js-menu-toggle"><i></i><i></i></div>

  <!-- <div class="gnav-overlay js-overlay"></div> -->

  <nav class="navi">
    <?php
      // wp_nav_menu( array(
      //   'theme_location' => 'header-menu'
      // ) );
    ?>
    <div class="menu-header-menu-container">
      <ul>
        <!-- <li><a href="<?php //echo esc_url( home_url( '/' ) ); ?>">トップ</a></li> -->
        <li class="service">
          <a href="">サービス</a>
          <ul>
            <li><a href="<?php echo esc_url( home_url( '/microsoft365/' ) ); ?>">Microsoft365</a></li>
            <li><a href="<?php echo esc_url( home_url( '/microsoft-azure/' ) ); ?>">Microsoft Azure</a></li>
            <li><a href="<?php echo esc_url( home_url( '/power-platform/' ) ); ?>">PowerPlatform</a></li>
            <li><a href="<?php echo esc_url( home_url( '/sharepoint/' ) ); ?>">SharePoint</a></li>
          </ul>
        </li>
        <li class="products">
          <a href="">プロダクト</a>
          <ul>
            <!--<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">PowerApps すぐ使えるパック</a></li>-->
            <li><a href="<?php echo esc_url( home_url( '/sharepointtimeline/' ) ); ?>">SharePoint スケジューラー連動</a></li>
            <li><a href="<?php echo esc_url( home_url( '/spfxparts/' ) ); ?>">SharePoint 未既読</a></li>
            <li><a href="<?php echo esc_url( home_url( '/access-permission-acquisition-tool/' ) ); ?>">SharePoint アクセス権限</a></li>
            <!--<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">SharePoint 5000件問題</a></li>-->
          </ul>
        </li>
        <li><a href="<?php echo esc_url( home_url( '/blog/' ) ); ?>">ブログ</a></li>
        <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">お知らせ</a></li>
        <li class="deepcom">
          <a href="">DeepCom</a>
          <ul>
            <li><a href="<?php echo esc_url( home_url( '/deepcom/company/' ) ); ?>">会社概要</a></li>
            <!--<li><a href="<?php echo esc_url( home_url( '/deepcom/access/' ) ); ?>">SI事業部</a></li>-->
            <li><a href="<?php echo esc_url( home_url( '/imdivision/' ) ); ?>">IM事業部</a></li>
            <li><a href="<?php echo esc_url( home_url( '/msdivision/' ) ); ?>">MS開発部</a></li>
          </ul>
        </li>
        <li><a href="<?php echo esc_url( home_url( '/deepcom/access/' ) ); ?>">アクセス</a></li>
        <li><a href="<?php echo esc_url( home_url( '/recruit/' ) ); ?>">採用情報</a></li>
        <li class="cta-download"><a href="<?php echo esc_url( home_url( '/downloads/' ) ); ?>">資料ダウンロード</a></li>
        <li class="cta-contact"><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">お問い合わせ</a></li>
      </ul>
    </div>
  </nav>

  <nav class="navi-sp js-navi">
    <div class="menu-header-menu-sp-container">
      <ul class="cta-box">
        <li class="cta-download"><a href="<?php echo esc_url( home_url( '/download/' ) ); ?>">資料ダウンロード</a></li>
        <li class="cta-contact"><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">お問い合わせ</a></li>
      </ul>
      <ul class="link-box -service">
        <li><a href="">Microsoft 365</a></li>
        <li><a href="">Microsoft Azure</a></li>
        <li><a href="">PowerPlatform</a></li>
        <li><a href="">SharePoint</a></li>
      </ul>
      <ul class="link-box -products">
        <li><a href="">PowerApps すぐ使えるパック</a></li>
        <li><a href="">SharePoint スケジューラー連動</a></li>
        <li><a href="">SharePoint アクセス権限</a></li>
        <li><a href="">SharePoint 5000件問題</a></li>
      </ul>
      <ul class="link-box -full">
        <li><a href="<?php echo esc_url( home_url( '/blog/' ) ); ?>">ブログ</a></li>
      </ul>
      <ul class="link-box -full">
        <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">お知らせ</a></li>
      </ul>
      <ul class="link-box -full">
        <li><a href="<?php echo esc_url( home_url( '/recruit/' ) ); ?>">採用情報</a></li>
      </ul>
      <ul class="link-box -full">
        <li><a href="<?php echo esc_url( home_url( '/deepcom/access/' ) ); ?>">アクセス</a></li>
      </ul>
      <ul class="link-box -deepcom">
        <li><a href="<?php echo esc_url( home_url( '/deepcom/company/' ) ); ?>">会社概要</a></li>
        <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">SI事業部</a></li>
        <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">IM事業部</a></li>
        <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">MS開発部</a></li>
      </ul>
      <!-- <ul class="sub-link-box">
        <li><a href="<?php echo esc_url( home_url( '/blog/' ) ); ?>">ブログ</a></li>
        <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">お知らせ</a></li>
        <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Deepcom</a></li>
        <li><a href="<?php echo esc_url( home_url( '/deepcom/company/' ) ); ?>">会社概要</a></li>
        <li><a href="<?php echo esc_url( home_url( '/deepcom/access/' ) ); ?>">アクセス</a></li>
        <li><a href="<?php echo esc_url( home_url( '/recruit/' ) ); ?>">採用情報</a></li>
      </ul> -->
    </div>
  </nav>
</header>
