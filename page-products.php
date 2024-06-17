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
      <?php elseif( is_page('enterprise_chatgpt') ): ?>PRODUCT
      <?php elseif( is_page('about_dx') ): ?>SERVICE
      <?php elseif( is_page('powerplatform_governance') ): ?>SERVICE
      <?php elseif( is_page('sharepointonline_migrationservice') ): ?>SERVICE
      <?php elseif( is_page('powerapps-humanresources_database') ): ?>PRODUCT
      <?php elseif( is_page('news') ): ?>NEWS<?php endif; ?>
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

	<!--WP editable ↓-->

<div class="page-link">
<ul>
       <li><a href="#TimelineApp"><span>SharePoint</span><br>スケジューラー<br>連動</a></li>
       <li><a href="#UnreadApp"><span>SharePoint</span><br>未既読</a></li>
       <li><a href="#AccessRightsApp"><span>SharePoint</span><br>アクセス権限</a></li>
       <li><a href="#ViewsLikesApp"><span>SharePoint</span><br>閲覧数/いいね数</a></li>
       <li><a href="#TabPart"><span>SharePoint</span><br>タブ化</a></li>
       <li><a href="#SearchPart"><span>SharePoint</span><br>検索拡張機能</a></li>
       <li><a href="#SlideShowPart"><span>SharePoint</span><br>スライドショー</a></li>
       <li><a href="#listitemextendPart"><span>SharePoint</span><br>リストアイテム<br>拡張機能</a></li>
       <li><a href="#EquipmentManagement"><span>Power Platform</span><br>Power Apps<br>備品管理</a></li>
       <li><a href="#HumanresourcesDatabase"><span>Power Platform</span><br>Power Apps<br>人事DB</a></li>
       <li><a href="#TeamsSummary"><span>Teams</span><br>投稿集計</a></li>
	   <li><a href="#BizCopilot"><span>Azure</span><br>BizCopilot<br>Powered By ChatGPT</a></li>
</ul>
</div>

<!-- product sec -->
<section id="TimelineApp" class="l-section-container -page-section-left section-about">
	<div class="adjust-width">
		<div class="p-grid">
			<div class="p-grid-item p-grid-item-1">
				<h2 class="page-section-title">
					<span class="en">SharePoint</span>
					<span class="ja">スケジューラー連動</span>
					<span class="txt">SharePointモダンサイトで<br>1日/1週間単位で設定したグループの<br>会議予定を確認</span>
				</h2>
			</div><!--/.p-grid-item -->
			<div class="p-grid-item p-grid-item-2">
				<div class="p-grid-item-thumb p-grid-item-thumb-1">
					<img decoding="async" src="/wps/wp-content/uploads/2022/04/scheduletimeline_logo2.jpg" alt="">
				</div>

				<ul>
					<li>管理者ユーザーで簡単に導入可能</li>
					<li>SharePoint上で予定を確認</li>
					<li>Exchangeとの連携</li>
				</ul>
			</div><!--/.p-grid-item -->
			<div class="p-grid-item p-grid-item-3">
				<a class="myButton" href="/sharepointtimeline/" target="_blank" rel="noopener" style="text-decoration:none;">より詳しくみる</a>
			</div><!--/.p-grid-item -->
		</div><!--/.p-grid -->
	</div><!--/.adjust-width -->
</section>
<!-- product sec -->

<!-- product sec -->
<section id="UnreadApp" class="l-section-container -page-section-right section-about">
	<div class="adjust-width">
		<div class="p-grid p-grid-rev">
			<div class="p-grid-item p-grid-item-1">
				<h2 class="page-section-title">
					<span class="en">SharePoint</span>
					<span class="ja">未既読 </span>
					<span class="txt">SharePointモダンサイトで<br>未既読機能を実装</span>
				</h2>
			</div><!--/.p-grid-item -->
			<div class="p-grid-item p-grid-item-2">
				<div class="p-grid-item-thumb p-grid-item-thumb-2">
					<img decoding="async" src="/wps/wp-content/uploads/2022/04/read2.jpg" alt="">
				</div>

				<ul>
					<li>未既読を簡単識別</li>
					<li>開封履歴データ保持</li>
					<li>ドキュメントライブラリ、リストに導入可能</li>
				</ul>
			</div><!--/.p-grid-item -->
			<div class="p-grid-item p-grid-item-3">
				<a class="myButton" href="/spfxparts/" target="_blank" rel="noopener" style="text-decoration:none;">より詳しくみる</a>
			</div><!--/.p-grid-item -->
		</div><!--/.p-grid -->
	</div><!--/.adjust-width -->
</section>
<!-- product sec -->


<!-- product sec -->
<section id="AccessRightsApp" class="l-section-container -page-section-left section-about">
	<div class="adjust-width">
		<div class="p-grid">
			<div class="p-grid-item p-grid-item-1">
				<h2 class="page-section-title">
					<span class="en">SharePoint</span>
					<span class="ja">アクセス権限 </span>
					<span class="txt">SharePointの権限を<br>マトリックス表示し権限管理</span>
				</h2>
			</div><!--/.p-grid-item -->
			<div class="p-grid-item p-grid-item-2">
				<div class="p-grid-item-thumb p-grid-item-thumb-3">
					<img decoding="async" src="/wps/wp-content/uploads/2022/04/kengen2.jpg" alt="">
				</div>

				<ul>
					<li>権限情報を一覧表示</li>
					<li>接続制限時リトライ実施</li>
				</ul>
			</div><!--/.p-grid-item -->
			<div class="p-grid-item p-grid-item-3">
				<a class="myButton" href="/access-permission-acquisition-tool/" target="_blank" rel="noopener" style="text-decoration:none;">より詳しくみる</a>
			</div><!--/.p-grid-item -->
		</div><!--/.p-grid -->
	</div><!--/.adjust-width -->
</section>
<!-- product sec -->

<!-- product sec -->
<section id="ViewsLikesApp" class="l-section-container -page-section-right section-about">
	<div class="adjust-width">
		<div class="p-grid p-grid-rev">
			<div class="p-grid-item p-grid-item-1">
				<h2 class="page-section-title">
					<span class="en">SharePoint</span>
					<span class="ja"> 閲覧数/いいね数 </span>
					<span class="txt"> SharePointサイトの<br>閲覧数・いいね数を簡単に確認 </span>
				</h2>
			</div><!--/.p-grid-item -->
			<div class="p-grid-item p-grid-item-2">
				<div class="p-grid-item-thumb p-grid-item-thumb-4">
					<img decoding="async" src="/wps/wp-content/uploads/2022/04/eturan.jpg" alt="">
				</div>

				<ul>
					<li>閲覧・いいね機能切替</li>
					<li>サイトテーマ統一</li>
				</ul>
			</div><!--/.p-grid-item -->
			<div class="p-grid-item p-grid-item-3">
				<a class="myButton" href="/likehitswebpart/" target="_blank" rel="noopener" style="text-decoration:none;">より詳しくみる</a>
			</div><!--/.p-grid-item -->
		</div><!--/.p-grid -->
	</div><!--/.adjust-width -->
</section>
<!-- product sec -->

<!-- product sec -->
<section id="TabPart" class="l-section-container -page-section-left section-about">
	<div class="adjust-width">
		<div class="p-grid">
			<div class="p-grid-item p-grid-item-1">
				<h2 class="page-section-title">
					<span class="en">SharePoint</span>
					<span class="ja"> タブ化 </span>
					<span class="txt"> SharePointのコンテンツを<br>タブ化しサイトUIを向上 </span>
				</h2>
			</div><!--/.p-grid-item -->
			<div class="p-grid-item p-grid-item-2">
				<div class="p-grid-item-thumb p-grid-item-thumb-5">
					<img decoding="async" src="/wps/wp-content/uploads/2022/04/modernsitetab.jpg" alt="">
				</div>

				<ul>
					<li>コンテンツ簡単切り替え</li>
					<li>全Webパーツタブ化可能</li>
					<li>レスポンシブデザイン対応</li>
				</ul>
			</div><!--/.p-grid-item -->
			<div class="p-grid-item p-grid-item-3">
				<a class="myButton" href="/sharepointtab/" target="_blank" rel="noopener" style="text-decoration:none;">より詳しくみる</a>
			</div><!--/.p-grid-item -->
		</div><!--/.p-grid -->
	</div><!--/.adjust-width -->
</section>
<!-- product sec -->

<!-- product sec -->
<section id="SearchPart" class="l-section-container -page-section-right section-about">
	<div class="adjust-width">
		<div class="p-grid p-grid-rev">
			<div class="p-grid-item p-grid-item-1">
				<h2 class="page-section-title">
					<span class="en">SharePoint</span>
					<span class="ja"> 検索拡張機能 </span>
					<span class="txt"> SharePointモダンサイトの検索機能を拡張 </span>
				</h2>
			</div><!--/.p-grid-item -->
			<div class="p-grid-item p-grid-item-2">
				<div class="p-grid-item-thumb p-grid-item-thumb-6">
					<img decoding="async" src="/wps/wp-content/uploads/2022/04/searchadvance2.jpg" alt="">
				</div>

				<ul>
					<li>サイトを跨いだ検索</li>
					<li>検索結果の並び替え</li>
					<li>検索結果に任意の項目を表示</li>
					<li>複数の絞り込み検索</li>
				</ul>
			</div><!--/.p-grid-item -->
			<div class="p-grid-item p-grid-item-3">
				<a class="myButton" href="/advancedsearch/" target="_blank" rel="noopener" style="text-decoration:none;">より詳しくみる</a>
			</div><!--/.p-grid-item -->
		</div><!--/.p-grid -->
	</div><!--/.adjust-width -->
</section>
<!-- product sec -->

<section id="SlideShowPart" class="l-section-container -page-section-left section-about">
	<div class="adjust-width">
		<div class="p-grid">
			<div class="p-grid-item p-grid-item-1">
				<h2 class="page-section-title">
					<span class="en">SharePoint</span>
					<span class="ja">スライドショー</span>
					<span class="txt">SharePointモダンサイトで<br>画面をスライド表示</span>
				</h2>
			</div><!--/.p-grid-item -->
			<div class="p-grid-item p-grid-item-2">
				<div class="p-grid-item-thumb p-grid-item-thumb-7">
					<img decoding="async" src="/wps/wp-content/uploads/2022/07/slideshow4.jpg" alt="">
				</div>

				<ul>
					<li>限られたスペースで多くの情報を掲載可能</li>
					<li>画像毎に同窓 or 別窓リンク設定</li>
					<li>スライド憑依でユーザーの興味関心UP</li>
				</ul>
			</div><!--/.p-grid-item -->
			<div class="p-grid-item p-grid-item-3">
				<a class="myButton" href="/sharepointslideshow/" target="_blank" rel="noopener" style="text-decoration:none;">より詳しくみる</a>
			</div><!--/.p-grid-item -->
		</div><!--/.p-grid -->
	</div><!--/.adjust-width -->
</section>
<!-- product sec -->

<!-- product sec -->
<section id="listitemextendPart" class="l-section-container -page-section-right section-about">
	<div class="adjust-width">
		<div class="p-grid p-grid-rev">
			<div class="p-grid-item p-grid-item-1">
				<h2 class="page-section-title">
					<span class="en">SharePoint</span>
					<span class="ja">リストアイテム拡張機能</span>
					<span class="txt">リストアイテムの<br>複数行テキストを自動展開</span>
				</h2>
			</div><!--/.p-grid-item -->
			<div class="p-grid-item p-grid-item-2">
				<div class="p-grid-item-thumb p-grid-item-thumb-8">
					<img decoding="async" src="/wps/wp-content/uploads/2022/12/listitem.jpg" alt="">
				</div>

				<ul>
					<li>閲覧画面で編集不可</li>
					<li>編集ボタンのエリア拡大</li>
					<li>複数行テキストの自動展開</li>
				</ul>
			</div><!--/.p-grid-item -->
			<div class="p-grid-item p-grid-item-3">
				<a class="myButton" href="/sharepointlistitemextend/" target="_blank" rel="noopener" style="text-decoration:none;">より詳しくみる</a>
			</div><!--/.p-grid-item -->
		</div><!--/.p-grid -->
	</div><!--/.adjust-width -->
</section>
<!-- product sec -->

<section id="EquipmentManagement" class="l-section-container -page-section-left section-about">
	<div class="adjust-width">
		<div class="p-grid">
			<div class="p-grid-item p-grid-item-1">
				<h2 class="page-section-title">
					<span class="en">Power Platform </span>
					<span class="ja"> Power Apps 備品管理 </span>
					<span class="txt">QRコードと<br>Power Appsモバイルアプリで備品管理</span>
				</h2>
			</div><!--/.p-grid-item -->
			<div class="p-grid-item p-grid-item-2">
				<div class="p-grid-item-thumb p-grid-item-thumb-9">
					<img decoding="async" src="/wps/wp-content/uploads/2022/10/1.jpg" alt="">
				</div>

				<ul>
					<li>QRコードの読取により管理の簡易化</li>
					<li>レンタルや返却、返却期限超過時にメールでリマインド</li>
					<li>定期的に行う棚卸作業の排除</li>
				</ul>
			</div><!--/.p-grid-item -->
			<div class="p-grid-item p-grid-item-3">
				<a class="myButton" href="/powerapps-equipment_management/" target="_blank" rel="noopener" style="text-decoration:none;">より詳しくみる</a>
			</div><!--/.p-grid-item -->
		</div><!--/.p-grid -->
	</div><!--/.adjust-width -->
</section>
<!-- product sec -->

<!-- product sec -->
<section id="HumanresourcesDatabase" class="l-section-container -page-section-right section-about">
	<div class="adjust-width">
		<div class="p-grid p-grid-rev">
			<div class="p-grid-item p-grid-item-1">
				<h2 class="page-section-title">
					<span class="en">Power Platform </span>
					<span class="ja">Power Apps 人事DB</span>
					<span class="txt">Power Apps モデル駆動型アプリで<br>人事管理</span>
				</h2>
			</div><!--/.p-grid-item -->
			<div class="p-grid-item p-grid-item-2">
				<div class="p-grid-item-thumb p-grid-item-thumb-10">
					<img decoding="async" src="/wps/wp-content/uploads/2023/01/a11b4bb3ba448d1fa402ac3dc62cc91f-2.jpg" alt="">
				</div>

				<ul>
					<li>人事管理のペーパーレス化</li>
					<li>社員データのビジュアル化</li>
					<li>入退職処理工程の管理</li>
				</ul>
			</div><!--/.p-grid-item -->
			<div class="p-grid-item p-grid-item-3">
				<a class="myButton" href="/powerapps-humanresources_database/" target="_blank" rel="noopener" style="text-decoration:none;">より詳しくみる</a>
			</div><!--/.p-grid-item -->
		</div><!--/.p-grid -->
	</div><!--/.adjust-width -->
</section>
<!-- product sec -->

<section id="TeamsSummary" class="l-section-container -page-section-left section-about">
	<div class="adjust-width">
		<div class="p-grid">
			<div class="p-grid-item p-grid-item-1">
				<h2 class="page-section-title">
					<span class="en">Teams</span>
					<span class="ja">投稿集計</span>
					<span class="txt">チームユーザー毎の投稿数を集計 </span>
				</h2>
			</div><!--/.p-grid-item -->
			<div class="p-grid-item p-grid-item-2">
				<div class="p-grid-item-thumb p-grid-item-thumb-11">
					<img decoding="async" src="/wps/wp-content/uploads/2023/02/teams-post-summary-tool.jpg" alt="">
				</div>

				<ul>
					<li>Teams投稿のユーザ分析</li>
					<li>抽出期間を自由に設定</li>
					<li>投稿と返信、リアクションを集計</li>
				</ul>
			</div><!--/.p-grid-item -->
			<div class="p-grid-item p-grid-item-3">
				<a class="myButton" href="/teams-post-summary-tool/" target="_blank" rel="noopener" style="text-decoration:none;">より詳しくみる</a>
			</div><!--/.p-grid-item -->
		</div><!--/.p-grid -->
	</div><!--/.adjust-width -->
</section>

<section id="BizCopilot" class="l-section-container -page-section-right section-about">
	<div class="adjust-width">
		<div class="p-grid">
			<div class="p-grid-item p-grid-item-1">
				<h2 class="page-section-title">
					<span class="en">Azure</span>
					<span class="ja">BizCopilot Powered By ChatGPT</span>
					<span class="txt">Azure Open AI を利用した セキュアな社内利用向け ChatGPT </span>
				</h2>
			</div><!--/.p-grid-item -->
			<div class="p-grid-item p-grid-item-2">
				<div class="p-grid-item-thumb p-grid-item-thumb-12">
					<img decoding="async" src="/wps/wp-content/uploads/2023/06/a565eff4102f6da9c0f7d78f676f13a8-2.jpg" alt="">
				</div>

				<ul>
					<li>セキュアな環境を構築</li>
					<li>社内データ活用</li>
					<li>業務生産性向上</li>
				</ul>
			</div><!--/.p-grid-item -->
			<div class="p-grid-item p-grid-item-3">
				<a class="myButton" href="/enterprise_chatgpt/" target="_blank" rel="noopener" style="text-decoration:none;">より詳しくみる</a>
			</div><!--/.p-grid-item -->
		</div><!--/.p-grid -->
	</div><!--/.adjust-width -->
</section>
<!-- product sec -->


	<!--WP editable-->
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


