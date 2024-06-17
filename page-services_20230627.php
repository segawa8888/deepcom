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

	<!--WP editable ↓-->
<div class="page-link">
<ul>
        <li><a href="#Microsoft365">Microsoft 365</a></li>
        <li><a href="#MicrosoftAzure">Microsoft Azure</a></li>
        <li><a href="#PowerPlatformDX">Power Platform<br>DX推進</a></li>
        <li><a href="#PowerPlatformIntroductionService">Power Platform<br>導入支援サービス</a></li>
        <li><a href="#SharePoint">SharePoint</a></li>
        <li><a href="#SharePointMigration">SharePoint Online</br>移行支援サービス</a></li>
        <li><a href="#dynamics365sales_service">Dynamics 365 Sales</br>導入支援サービス</a></li>
</ul>
</div>


<!-- 左から -->
<section id="Microsoft365" class="l-section-container -page-section-left section-about">
    <div class="adjust-width">
        <div class="myContainer">
            <div class="myBox order2">
                <h2 class="page-section-title">
                    <span class="en en-48">
                        Microsoft 365
                    </span>
                    <span class="txt">SaaS統合による業界全体の効率化</span>
                </h2>
                <p class="page-section-paragraph">
                    Microsoft 365の幅広いサービスの活用による社内の業務活性化を目的として、 Exchange、Teamsだけでなくそれ以外の各種アプリの活用も含めた支援をいたします。
                </p>
                <a class="myButton" href="/deepcom/microsoft365/" target="_blank" rel="noopener" style="text-decoration:none;">より詳しくみる</a>
            </div>
            <div class="myBox order1">
                <picture>
                    <source media="(max-width: 767px)"
                        srcset="/wps/wp-content/themes/deepcom2023/assets/images/recruit/365_kv.png">
                    <img src="/wps/wp-content/themes/deepcom2023/assets/images/recruit/365_kv.png" alt=""
                        style="display: block; margin: auto;">
                </picture>
            </div>
        </div>
    </div>
</section>

<!-- 右から -->
<section id="MicrosoftAzure" class="l-section-container -page-section-right section-about">
    <div class="adjust-width">
        <div class="myContainer">
            <div class="myBox">
                <picture>
                    <source media="(max-width: 767px)"
                        srcset="/wps/wp-content/themes/deepcom2023/assets/images/recruit/Azure_kv.png">
                    <img src="/wps/wp-content/themes/deepcom2023/assets/images/recruit/Azure_kv.png" alt=""
                        style="display: block; margin: auto;">
                </picture>
            </div>
            <div class="myBox">
                <h2 class="page-section-title">
                    <span class="en en-48">
                        Microsoft Azure
                    </span>
                    <span class="txt">より幅広い事業領域をシステム化</span>
                </h2>
                <p class="page-section-paragraph">
                    Azureクラウドの機能を組み合わせる事で、従来では実現できない領域をシステム化する事で、新しいビジネス機会のクリエイトを支援します。
                </p>
                <a class="myButton" href="/deepcom/microsoft-azure/" target="_blank" rel="noopener" style="text-decoration:none;">より詳しくみる</a>
            </div>
        </div>
    </div>
</section>

<!-- 左から -->
<section id="PowerPlatformDX" class="l-section-container -page-section-left section-about">
    <div class="adjust-width">
        <div class="myContainer">
            <div class="myBox order2">
                <h2 class="page-section-title">
                    
                    <span class="en en-48">
                        Power Platform
                    </span>
                    <span class="ja-38">DX推進</span>
                    <span class="txt">DX推進の中核を担う</span>
                </h2>
                <p class="page-section-paragraph">
                   目まぐるしい接客ニーズの変化に伴い、業務プロセス整備の遅れは、機械の損失に繋がります。 自社リソースの最適化と、業務プロセスの構築・見直しをPower Platformを用いて支援しています。
                </p>
                <a class="myButton" href="/about_dx/" target="_blank" rel="noopener" style="text-decoration:none;">より詳しくみる</a>
            </div>
            <div class="myBox order1">
                <picture>
                    <source media="(max-width: 767px)"
                        srcset="/wps/wp-content/themes/deepcom2023/assets/images/services/03_Power_Platform_kv.png">
                    <img src="/wps/wp-content/themes/deepcom2023/assets/images/services/03_Power_Platform_kv.png" alt=""
                        style="display: block; margin: auto;">
                </picture>
            </div>
        </div>
    </div>
</section>

<!-- 右から -->
<section id="PowerPlatformIntroductionService" class="l-section-container -page-section-right section-about">
    <div class="adjust-width">
        <div class="myContainer">
            <div class="myBox">
                <picture>
                    <source media="(max-width: 767px)"
                        srcset="/wps/wp-content/themes/deepcom2023/assets/images/services/04_Power_Platform_kv.png">
                    <img src="/wps/wp-content/themes/deepcom2023/assets/images/services/04_Power_Platform_kv.png" alt=""
                        style="display: block; margin: auto;">
                </picture>
            </div>
            <div class="myBox">
                <h2 class="page-section-title">
                    <span class="en en-48">
                        Power Platform
                    </span>
                    <span class="ja-38">導入支援サービス</span>
                    <span class="txt">導入前のガバナンス・セキュリティ定義</span>
                </h2>
                <p class="page-section-paragraph">
                   ローコード・ノーコード プラットフォームである、Microsoft Power Platform の導入支援（ガバナンス＆セキュリティ）サービスのご紹介です。
ガバナンス＆セキュリティ策定支援・トレーニング・QA支援を包括し、お客様の環境や運用に合わせ 3段階でのご提供としています。 
                </p>
                <a class="myButton" href="/powerplatform_governance/" target="_blank" rel="noopener" style="text-decoration:none;">より詳しくみる</a>
            </div>
        </div>
    </div>
</section>

<!-- 左から -->
<section id="SharePoint" class="l-section-container -page-section-left section-about">
    <div class="adjust-width">
        <div class="myContainer">
            <div class="myBox order2">
                <h2 class="page-section-title">
                    <span class="en en-48">
                        SharePoint
                    </span>
                    <span class="txt">社内の情報共有を最大限に強化</span>
                </h2>
                <p class="page-section-paragraph">
                    ディープコムでは、SharePointの黎明期から今日に至るまで開発・運用に携わっており、以下掲載しているサービスは、SharePointのバージョン問わず対応可能です。
                </p>
                <a class="myButton" href="/deepcom/sharepoint/" target="_blank" rel="noopener" style="text-decoration:none;">より詳しくみる</a>
            </div>
            <div class="myBox order1">
                <picture>
                    <source media="(max-width: 767px)"
                        srcset="/wps/wp-content/themes/deepcom2023/assets/images/services/05_SharePoint_kv.png">
                    <img src="/wps/wp-content/themes/deepcom2023/assets/images/services/05_SharePoint_kv.png" alt=""
                        style="display: block; margin: auto;">
                </picture>
            </div>
        </div>
    </div>
</section>

<!-- 右から -->
<section id="SharePointMigration" class="l-section-container -page-section-right section-about">
    <div class="adjust-width">
        <div class="myContainer">
            <div class="myBox">
                <picture>
                    <source media="(max-width: 767px)"
                        srcset="/wps/wp-content/themes/deepcom2023/assets/images/services/06_SharePoint_ol_kv.png">
                    <img src="/wps/wp-content/themes/deepcom2023/assets/images/services/06_SharePoint_ol_kv.png" alt=""
                        style="display: block; margin: auto;">
                </picture>
            </div>
            <div class="myBox">
                <h2 class="page-section-title">
                    <span class="en en-48">
                        SharePoint Online
                    </span>
                    <span class="ja-38">移行支援サービス</span>
                    <span class="txt">オンプレミスからクラウド化</span>
                </h2>
                <p class="page-section-paragraph">
                    SharePoint Onlineへの移行時に整理するべき一般的な項目、移行計画の策定／現状把握／移行対象の選定／対応検討／運用方針を、お客さまの規模や予算感に応じてLv.1 ～ Lv.3 の3段階のオプションにてご提供しています。
                </p>
                <a class="myButton" href="/sharepointonline_migrationservice/" target="_blank" rel="noopener" style="text-decoration:none;">より詳しくみる</a>
            </div>
        </div>
    </div>
</section>

<!-- 左から -->
<section id="dynamics365sales_service" class="l-section-container -page-section-left section-about">
    <div class="adjust-width">
        <div class="myContainer">
            <div class="myBox order2">
                <h2 class="page-section-title">
                    <span class="en" style="color:#0092CC">
                        Dynamics 365 Sales</br>導入支援サービス
                    </span>
                    <span>Office連携で効率的なCRM</span>
                </h2>
                <br>
                <p>
                    Microsoftが提供するクラウド型の営業支援システムである、Dynamics 365 Sales の導入支援サービスで、初期設定からOffice製品との連携、弊社で作成した独自のダッシュボードテンプレートなどをご提供いたします。
                </p>
                <br>
                <br>
                <a class="myButton" href="https://deepcom.co.jp/dynamics365sales_service/" target="_blank" rel="noopener" style="text-decoration:none;">より詳しくみる</a>
            </div>
            <div class="myBox order1">
                <picture>
                    <source media="(max-width: 767px)"
                        srcset="/wps/wp-content/themes/deepcom/assets/images/recruit/365_kv.png">
                    <img src="https://deepcom.co.jp/wps/wp-content/uploads/2023/06/07_dynamics365_sales_kv.webp" alt=""
                        style="display: block; margin: auto;">
                </picture>
            </div>
        </div>
    </div>
</section>

<style>
    .myButton {
        display: flex;
        align-items: center;
        justify-content: center;
        min-width: 180px;
        padding: 9px 0.6875em;
        border-radius: 5px;
        background: #0092CC;
        color: #fff;
        width: 80%;
        margin:0 auto;
    }

    .myContainer {
        display: flex;
    }

    .myBox {
        margin: 20px;
        width: 100%;
    }

    .page-section-title {
        text-align: left;
    }

    .page-section-title .en {
        line-height: 1.2;
    }




    @media screen and (max-width: 767px) {
      .page-link ul li {
           padding: 0px 0.25em;
      }

      .page-link ul li a {
           font-size: 50%;
      }

      .myContainer {
           flex-direction: column;　/* 積み重なるように配置 */
      }

      .page-section-title {
           text-align: center;
           font-size: 20px;
      }

      .page-section-title .en {
           font-size: 20px;
           line-height: 1.3;
      }

      .order1 {
           order: 1;　/*上から1番目に表示*/
      }
      .order2 {
           order: 2;　/*上から2番目に表示*/
      }
    }
</style>

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


