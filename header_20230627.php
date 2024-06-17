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
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-35J41N0KVE"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-35J41N0KVE');
</script>
<?php endif; ?>

<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/edit.css">
<script src="<?php echo get_template_directory_uri(); ?>/js/common.js"></script>
</head>

<body <?php body_class(); ?> id="<?php the_field('page-color'); ?>">

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
				<img class="logo-default" src="<?php echo get_theme_file_uri('/assets/images/common/logo.png'); ?>" alt="株式会社ディープコム">
			</picture>
			<img class="logo-white" src="<?php echo get_theme_file_uri('/assets/images/common/logo-white.png'); ?>" alt="株式会社ディープコム">
		</a>
	</div>

	<div class="navi-pc-cover"></div>
	<nav class="navi-pc">
		<ul class="navi-pc-parent">
			<li class="navi-pc-parent-list navi-pc-parent-list-blue">
				<a class="navi-pc-parent-list-arrow" href="<?php echo esc_url( home_url( '/services/' ) ); ?>">サービス</a>
				<ul class="navi-pc-parent-list-second">
					<li class="navi-pc-parent-list-second-inner">
						<section class="navi-pc-inner">
							<div class="navi-pc-inner-ttl">
								<h2 class="navi-pc-inner-ttl-ttl">サービス<span>SERVICE</span></h2>
								<a class="navi-pc-inner-ttl-btn" href="<?php echo esc_url( home_url( '/services/' ) ); ?>">サービスのトップへ</a>
							</div><!-- /.navi-pc-inner-ttl -->
							<div class="navi-pc-inner-column">
								<a class="navi-pc-inner-column-item" href="<?php echo esc_url( home_url( '/microsoft365/' ) ); ?>">
									<span class="navi-pc-inner-column-item-thumb"><img src="<?php echo get_theme_file_uri('/assets/images/navi-pc/service-img01.png'); ?>" alt=""></span>
									<span class="navi-pc-inner-column-item-sub">SaaS統合で業務全体を効率化</span><span class="navi-pc-inner-column-item-ttl">Microsoft365</span>
								</a><!-- /.navi-pc-inner-column-item -->
								<a class="navi-pc-inner-column-item" href="<?php echo esc_url( home_url( '/microsoft-azure/' ) ); ?>">
									<span class="navi-pc-inner-column-item-thumb"><img src="<?php echo get_theme_file_uri('/assets/images/navi-pc/service-img02.png'); ?>" alt=""></span>
									<span class="navi-pc-inner-column-item-sub">より幅広い事業領域をシステム化</span><span class="navi-pc-inner-column-item-ttl">Microsoft Azure</span>
								</a><!-- /.navi-pc-inner-column-item -->
								<a class="navi-pc-inner-column-item" href="<?php echo esc_url( home_url( '/about_dx/' ) ); ?>">
									<span class="navi-pc-inner-column-item-thumb"><img src="<?php echo get_theme_file_uri('/assets/images/services/03_Power_Platform_kv.png'); ?>" alt=""></span>
									<span class="navi-pc-inner-column-item-sub">DX推進の中核を担う</span><span class="navi-pc-inner-column-item-ttl">Power Platform DX推進</span>
								</a><!-- /.navi-pc-inner-column-item -->
								<a class="navi-pc-inner-column-item" href="<?php echo esc_url( home_url( '/powerplatform_governance/' ) ); ?>">
									<span class="navi-pc-inner-column-item-thumb"><img src="<?php echo get_theme_file_uri('/assets/images/services/04_Power_Platform_kv.png'); ?>" alt=""></span>
									<span class="navi-pc-inner-column-item-sub">導入前のガバナンス・セキュリティ定義</span><span class="navi-pc-inner-column-item-ttl">Power Platform 導入支援サービス</span>
								</a><!-- /.navi-pc-inner-column-item -->
								<a class="navi-pc-inner-column-item" href="<?php echo esc_url( home_url( '/sharepoint/' ) ); ?>">
									<span class="navi-pc-inner-column-item-thumb"><img src="<?php echo get_theme_file_uri('/assets/images/services/05_SharePoint_kv.png'); ?>" alt=""></span>
									<span class="navi-pc-inner-column-item-sub">社内の情報共有を最大限に強化</span><span class="navi-pc-inner-column-item-ttl">SharePoint</span>
								</a><!-- /.navi-pc-inner-column-item -->
								<a class="navi-pc-inner-column-item" href="<?php echo esc_url( home_url( '/sharepointonline_migrationservice/' ) ); ?>">
									<span class="navi-pc-inner-column-item-thumb"><img src="<?php echo get_theme_file_uri('/assets/images/services/06_SharePoint_ol_kv.png'); ?>" alt=""></span>
									<span class="navi-pc-inner-column-item-sub">オンプレミスからクラウド化</span><span class="navi-pc-inner-column-item-ttl">SharePoint Online 移行支援サービス</span>
								</a><!-- /.navi-pc-inner-column-item -->
								<a class="navi-pc-inner-column-item" href="<?php echo esc_url( home_url( '/dynamics365sales_service/' ) ); ?>">
									<span class="navi-pc-inner-column-item-thumb"><img src="<?php echo get_theme_file_uri('/assets/images/services/07_dynamics365_sales_kv.png'); ?>" alt=""></span>
									<span class="navi-pc-inner-column-item-sub">Office連携で効率的なCRM</span><span class="navi-pc-inner-column-item-ttl">Dynamics 365 Sales 導入支援サービス</span>
								</a><!-- /.navi-pc-inner-column-item -->
							</div><!-- /.navi-pc-inner-column -->
						</section><!-- /.navi-pc-inner -->
					</li>
				</ul>
			</li>
			<li class="navi-pc-parent-list navi-pc-parent-list-olive">
				<a class="navi-pc-parent-list-arrow" href="<?php echo esc_url( home_url( '/products/' ) ); ?>">プロダクト</a>
				<ul class="navi-pc-parent-list-second">
					<li class="navi-pc-parent-list-second-inner">
						<section class="navi-pc-inner">
							<div class="navi-pc-inner-ttl">
								<h2 class="navi-pc-inner-ttl-ttl">プロダクト<span>PRODUCTS</span></h2>
								<a class="navi-pc-inner-ttl-btn" href="<?php echo esc_url( home_url( '/products/' ) ); ?>">プロダクトのトップへ</a>
							</div><!-- /.navi-pc-inner-ttl -->
							<div class="navi-pc-inner-column">
								<a class="navi-pc-inner-column-item" href="<?php echo esc_url( home_url( '/sharepointtimeline/' ) ); ?>">
									<span class="navi-pc-inner-column-item-thumb"><img src="<?php echo get_theme_file_uri('/assets/images/navi-pc/products-img01.png'); ?>" alt=""></span>
									<span class="navi-pc-inner-column-item-sub">SharePoint</span><span class="navi-pc-inner-column-item-ttl">スケジューラー連動</span>
								</a><!-- /.navi-pc-inner-column-item -->
								<a class="navi-pc-inner-column-item" href="<?php echo esc_url( home_url( '/spfxparts/' ) ); ?>">
									<span class="navi-pc-inner-column-item-thumb"><img src="<?php echo get_theme_file_uri('/assets/images/navi-pc/products-img02.png'); ?>" alt=""></span>
									<span class="navi-pc-inner-column-item-sub">SharePoint</span><span class="navi-pc-inner-column-item-ttl">未既読</span>
								</a><!-- /.navi-pc-inner-column-item -->
								<a class="navi-pc-inner-column-item" href="<?php echo esc_url( home_url( '/access-permission-acquisition-tool/' ) ); ?>">
									<span class="navi-pc-inner-column-item-thumb"><img src="<?php echo get_theme_file_uri('/assets/images/navi-pc/products-img03.png'); ?>" alt=""></span>
									<span class="navi-pc-inner-column-item-sub">SharePoint</span><span class="navi-pc-inner-column-item-ttl">アクセス権限</span>
								</a><!-- /.navi-pc-inner-column-item -->
								<a class="navi-pc-inner-column-item" href="<?php echo esc_url( home_url( '/likehitswebpart/' ) ); ?>">
									<span class="navi-pc-inner-column-item-thumb"><img src="<?php echo get_theme_file_uri('/assets/images/navi-pc/products-img05.png'); ?>" alt=""></span>
									<span class="navi-pc-inner-column-item-sub">SharePoint</span><span class="navi-pc-inner-column-item-ttl">閲覧数/いいね数</span>
								</a><!-- /.navi-pc-inner-column-item -->
								<a class="navi-pc-inner-column-item" href="<?php echo esc_url( home_url( '/sharepointtab/' ) ); ?>">
									<span class="navi-pc-inner-column-item-thumb"><img src="<?php echo get_theme_file_uri('/assets/images/navi-pc/products-img04.png'); ?>" alt=""></span>
									<span class="navi-pc-inner-column-item-sub">SharePoint</span><span class="navi-pc-inner-column-item-ttl">タブ化</span>
								</a><!-- /.navi-pc-inner-column-item -->
								<a class="navi-pc-inner-column-item" href="<?php echo esc_url( home_url( '/advancedsearch/' ) ); ?>">
									<span class="navi-pc-inner-column-item-thumb"><img src="<?php echo get_theme_file_uri('/assets/images/navi-pc/products-img06.png'); ?>" alt=""></span>
									<span class="navi-pc-inner-column-item-sub">SharePoint</span><span class="navi-pc-inner-column-item-ttl">検索拡張機能Webパーツ</span>
								</a><!-- /.navi-pc-inner-column-item -->
								<a class="navi-pc-inner-column-item" href="<?php echo esc_url( home_url( '/sharepointslideshow/' ) ); ?>">
									<span class="navi-pc-inner-column-item-thumb"><img src="<?php echo get_theme_file_uri('/assets/images/navi-pc/products-img07.png'); ?>" alt=""></span>
									<span class="navi-pc-inner-column-item-sub">SharePoint</span><span class="navi-pc-inner-column-item-ttl">スライドショー</span>
								</a><!-- /.navi-pc-inner-column-item -->
								<a class="navi-pc-inner-column-item" href="<?php echo esc_url( home_url( '/sharepointlistitemextend/' ) ); ?>">
									<span class="navi-pc-inner-column-item-thumb"><img src="<?php echo get_theme_file_uri('/assets/images/navi-pc/products-img08.png'); ?>" alt=""></span>
									<span class="navi-pc-inner-column-item-sub">SharePoint</span><span class="navi-pc-inner-column-item-ttl">リストアイテム拡張機能</span>
								</a><!-- /.navi-pc-inner-column-item -->
								<!--<a class="navi-pc-inner-column-item" href="<?php echo esc_url( home_url( '/powerapps-equipment_management/' ) ); ?>">
									<span class="navi-pc-inner-column-item-thumb"><img src="<?php echo get_theme_file_uri('/assets/images/navi-pc/products-img09.png'); ?>" alt=""></span>
									<span class="navi-pc-inner-column-item-sub">Power Apps</span><span class="navi-pc-inner-column-item-ttl">備品管理</span>
								</a>
								<a class="navi-pc-inner-column-item" href="<?php echo esc_url( home_url( '/powerapps-humanresources_database/' ) ); ?>">
									<span class="navi-pc-inner-column-item-thumb"><img src="<?php echo get_theme_file_uri('/assets/images/navi-pc/products-img10.png'); ?>" alt=""></span>
									<span class="navi-pc-inner-column-item-sub">Power Apps</span><span class="navi-pc-inner-column-item-ttl">人事DB</span>
								</a> -->
								<a class="navi-pc-inner-column-item" href="<?php echo esc_url( home_url( '/teams-post-summary-tool/' ) ); ?>">
									<span class="navi-pc-inner-column-item-thumb"><img src="<?php echo get_theme_file_uri('/assets/images/navi-pc/products-img11.png'); ?>" alt=""></span>
									<span class="navi-pc-inner-column-item-sub">Teams</span><span class="navi-pc-inner-column-item-ttl">投稿集計ツール</span>
								</a><!-- /.navi-pc-inner-column-item -->
							</div><!-- /.navi-pc-inner-column -->

							<div class="navi-pc-inner-add">
								<a class="navi-pc-inner-add-btn" href="<?php echo esc_url( home_url( '/powerapps-equipment_management/' ) ); ?>"><span class="navi-pc-inner-column-item-sub">Power Apps</span>　<span class="navi-pc-inner-column-item-ttl">備品管理</span></a>
								<a class="navi-pc-inner-add-btn" href="<?php echo esc_url( home_url( '/powerapps-humanresources_database/' ) ); ?>"><span class="navi-pc-inner-column-item-sub">Power Apps</span>　<span class="navi-pc-inner-column-item-ttl">人事DB</span></a>
							</div>
						</section><!-- /.navi-pc-inner -->
					</li>
				</ul>
			</li>
			<li class="navi-pc-parent-list navi-pc-parent-list-default">
				<a href="<?php echo esc_url( home_url( '/blog/' ) ); ?>">ブログ</a>
			</li>
			<li class="navi-pc-parent-list navi-pc-parent-list-purple">
				<a class="navi-pc-parent-list-arrow" href="<?php echo esc_url( home_url( '/deepcom/company/' ) ); ?>">企業情報</a>
				<ul class="navi-pc-parent-list-second">
					<li class="navi-pc-parent-list-second-inner">
						<section class="navi-pc-inner">
							<div class="navi-pc-inner-ttl">
								<h2 class="navi-pc-inner-ttl-ttl">企業情報<span>About US</span></h2>
								<a class="navi-pc-inner-ttl-btn" href="<?php echo esc_url( home_url( '/deepcom/company/' ) ); ?>">企業情報のトップへ</a>
							</div><!-- /.navi-pc-inner-ttl -->
							<div class="navi-pc-inner-column">
								<a class="navi-pc-inner-column-item" href="<?php echo esc_url( home_url( '/deepcom/company/' ) ); ?>">
									<span class="navi-pc-inner-column-item-thumb"><img src="<?php echo get_theme_file_uri('/assets/images/navi-pc/company-img01.png'); ?>" alt=""></span>
									<span class="navi-pc-inner-column-item-ttl">会社概要</span>
								</a><!-- /.navi-pc-inner-column-item -->
								<a class="navi-pc-inner-column-item" href="<?php echo esc_url( home_url( '/msdivision/' ) ); ?>">
									<span class="navi-pc-inner-column-item-thumb"><img src="<?php echo get_theme_file_uri('/assets/images/navi-pc/company-img02.png'); ?>" alt=""></span>
									<span class="navi-pc-inner-column-item-ttl">MS開発部</span>
								</a><!-- /.navi-pc-inner-column-item -->
								<a class="navi-pc-inner-column-item" href="<?php echo esc_url( home_url( '/imdivision/' ) ); ?>">
									<span class="navi-pc-inner-column-item-thumb"><img src="<?php echo get_theme_file_uri('/assets/images/navi-pc/company-img03.png'); ?>" alt=""></span>
									<span class="navi-pc-inner-column-item-ttl">IM事業部</span>
								</a><!-- /.navi-pc-inner-column-item -->
							</div><!-- /.navi-pc-inner-column -->
						</section><!-- /.navi-pc-inner -->
					</li>
				</ul>
			</li>
			<li class="navi-pc-parent-list navi-pc-parent-list-default">
				<a href="<?php echo esc_url( home_url( '/deepcom/access/' ) ); ?>">アクセス</a>
			</li>
			<li class="navi-pc-parent-list navi-pc-parent-list-default">
				<a href="<?php echo esc_url( home_url( '/recruit/' ) ); ?>">採用情報</a>
			</li>

			<li class="navi-pc-parent-btn">
				<a class="navi-pc-parent-btn-dl" href="<?php echo esc_url( home_url( '/downloads/' ) ); ?>">資料ダウンロード</a>
			</li>

			<li class="navi-pc-parent-btn">
				<a class="navi-pc-parent-btn-contact" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">無料相談 / お問い合わせ</a>
			</li>
		</ul>
	</nav>


	<div class="menu-toggle js-menu-toggle"><i></i><i></i></div>

	<!-- <div class="gnav-overlay js-overlay"></div> -->

	<nav class="navi-sp js-navi">
		<div class="menu-header-menu-sp-container">
			<ul class="cta-box">
				<li class="cta-download"><a href="<?php echo esc_url( home_url( '/downloads/' ) ); ?>">資料ダウンロード</a></li>
				<li class="cta-contact"><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">無料相談 / お問い合わせ</a></li>
			</ul>

			<div class="navi-sp-accordion">
				<div class="navi-sp-option">
					<input type="checkbox" id="toggle1" class="navi-sp-toggle">
					<label class="navi-sp-title navi-sp-title-parent" for="toggle1">サービス<span>SERVICE</span></label>
					<div class="navi-sp-content">
						<ul>
							<li><a href="<?php echo esc_url( home_url( '/services/' ) ); ?>"><span class="navi-sp-content-ttl">サービスのトップへ</span></a></li>
							<li><a href="<?php echo esc_url( home_url( '/microsoft365/' ) ); ?>"><span class="navi-sp-content-sub">SaaS統合で業務全体を効率化</span><span class="navi-sp-content-main">Microsoft365</span></a></li>
							<li><a href="<?php echo esc_url( home_url( '/microsoft-azure/' ) ); ?>"><span class="navi-sp-content-sub">より幅広い事業領域をシステム化</span><span class="navi-sp-content-main">Microsoft Azure</span></a></li>
							<li><a href="<?php echo esc_url( home_url( '/about_dx/' ) ); ?>"><span class="navi-sp-content-sub">DX推進の中核を担う</span><span class="navi-sp-content-main">Power Platform DX推進</span></a></li>
							<li><a href="<?php echo esc_url( home_url( '/powerplatform_governance/' ) ); ?>"><span class="navi-sp-content-sub">導入前のガバナンス・セキュリティ定義</span><span class="navi-sp-content-main">Power Platform 導入支援サービス</span></a></li>
							<li><a href="<?php echo esc_url( home_url( '/sharepoint/' ) ); ?>"><span class="navi-sp-content-sub">社内の情報共有を最大限に強化</span><span class="navi-sp-content-main">SharePoint</span></a></li>
							<li><a href="<?php echo esc_url( home_url( '/sharepointonline_migrationservice/' ) ); ?>"><span class="navi-sp-content-sub">オンプレミスからクラウド化</span><span class="navi-sp-content-main">SharePoint Online 移行支援サービス</span></a></li>
							<li><a href="<?php echo esc_url( home_url( '/dynamics365sales_service/' ) ); ?>"><span class="navi-sp-content-sub">Office連携で効率的なCRM</span><span class="navi-sp-content-main">Dynamics 365 Sales 導入支援サービス</span></a></li>
						</ul>
					</div>
				</div>

				<div class="navi-sp-option">
					<input type="checkbox" id="toggle2" class="navi-sp-toggle">
					<label class="navi-sp-title navi-sp-title-parent" for="toggle2">プロダクト<span>PRODUCTS</span></label>
					<div class="navi-sp-content">
						<ul>
							<li><a href="<?php echo esc_url( home_url( '/products/' ) ); ?>"><span class="navi-sp-content-ttl">プロダクトのトップへ</span></a></li>
							<li><a href="<?php echo esc_url( home_url( '/sharepointtimeline/' ) ); ?>"><span class="navi-sp-content-sub navi-sp-content-sub-b">SharePoint</span><span class="navi-sp-content-main">スケジューラー連動</span></a></li>
							<li><a href="<?php echo esc_url( home_url( '/spfxparts/' ) ); ?>"><span class="navi-sp-content-sub navi-sp-content-sub-b">SharePoint</span><span class="navi-sp-content-main">未既読</span></a></li>
							<li><a href="<?php echo esc_url( home_url( '/access-permission-acquisition-tool/' ) ); ?>"><span class="navi-sp-content-sub navi-sp-content-sub-b">SharePoint</span><span class="navi-sp-content-main">アクセス権限</span></a></li>
							<li><a href="<?php echo esc_url( home_url( '/likehitswebpart/' ) ); ?>"><span class="navi-sp-content-sub navi-sp-content-sub-b">SharePoint</span><span class="navi-sp-content-main">閲覧数/いいね数</span></a></li>
							<li><a href="<?php echo esc_url( home_url( '/sharepointtab/' ) ); ?>"><span class="navi-sp-content-sub navi-sp-content-sub-b">SharePoint</span><span class="navi-sp-content-main">タブ化</span></a></li>
							<li><a href="<?php echo esc_url( home_url( '/advancedsearch/' ) ); ?>"><span class="navi-sp-content-sub navi-sp-content-sub-b">SharePoint</span><span class="navi-sp-content-main">検索拡張機能Webパーツ</span></a></li>
							<li><a href="<?php echo esc_url( home_url( '/sharepointslideshow/' ) ); ?>"><span class="navi-sp-content-sub navi-sp-content-sub-b">SharePoint</span><span class="navi-sp-content-main">スライドショー</span></a></li>
							<li><a href="<?php echo esc_url( home_url( '/sharepointlistitemextend/' ) ); ?>"><span class="navi-sp-content-sub navi-sp-content-sub-b">SharePoint</span><span class="navi-sp-content-main">リストアイテム拡張機能</span></a></li>
							<li><a href="<?php echo esc_url( home_url( '/powerapps-equipment_management/' ) ); ?>"><span class="navi-sp-content-sub navi-sp-content-sub-b">Power Apps</span><span class="navi-sp-content-main">備品管理</span></a></li>
							<li><a href="<?php echo esc_url( home_url( '/powerapps-humanresources_database/' ) ); ?>"><span class="navi-sp-content-sub navi-sp-content-sub-b">Power Apps</span><span class="navi-sp-content-main">人事DB</span></a></li>
							<li><a href="<?php echo esc_url( home_url( '/teams-post-summary-tool/' ) ); ?>"><span class="navi-sp-content-sub navi-sp-content-sub-b">Teams</span><span class="navi-sp-content-main">投稿集計ツール</span></a></li>
						</ul>
					</div>
				</div>

				<div class="navi-sp-option">
					<a class="navi-sp-title" href="<?php echo esc_url( home_url( '/blog/' ) ); ?>">ブログ<span>BLOG</span></a>
				</div>

				<div class="navi-sp-option">
					<input type="checkbox" id="toggle3" class="navi-sp-toggle">
					<label class="navi-sp-title navi-sp-title-parent" for="toggle3">企業情報<span>About US</span></label>
					<div class="navi-sp-content">
						<ul>
							<li><a href="<?php echo esc_url( home_url( '/deepcom/company/' ) ); ?>"><span class="navi-sp-content-ttl">会社概要</span></a></li>
							<li><a href="<?php echo esc_url( home_url( '/msdivision/' ) ); ?>"><span class="navi-sp-content-ttl">MS開発部</span></a></li>
							<li><a href="<?php echo esc_url( home_url( '/imdivision/' ) ); ?>"><span class="navi-sp-content-ttl">IM事業部</span></a></li>
						</ul>
					</div>
				</div>

				<div class="navi-sp-option">
					<a class="navi-sp-title" href="<?php echo esc_url( home_url( '/deepcom/access/' ) ); ?>">アクセス<span>ACCESS</span></a>
				</div>

				<div class="navi-sp-option">
					<a class="navi-sp-title" href="<?php echo esc_url( home_url( '/recruit/' ) ); ?>">採用情報<span>RECRUIT</span></a>
				</div>
			</div><!-- /.accordion-->

			<div class="navi-sp-ex">
				<ul>
					<li><a class="navi-sp-ex-icon" href="<?php echo esc_url( home_url( '/deepcom/company/' ) ); ?>">情報セキュリティポリシー</a></li>
					<li><a class="navi-sp-ex-icon" href="<?php echo esc_url( home_url( '/msdivision/' ) ); ?>">個人情報保護方針</a></li>
					<li><a class="navi-sp-ex-icon" href="<?php echo esc_url( home_url( '/imdivision/' ) ); ?>">個人情報の取り扱いについて</a></li>
				</ul>
			</div>

		</div>
	</nav>
</header>
