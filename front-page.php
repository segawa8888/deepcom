<?php
add_action('wp_enqueue_scripts', function () {
  // アクセサイト運用
  wp_enqueue_script( 'top', get_theme_file_uri( '/assets/js/top.min.js' ), '', filemtime( get_theme_file_path( '/assets/js/top.min.js' ) ), true );
  wp_enqueue_style( 'layout-top', get_theme_file_uri( '/assets/css/layout-top.css' ), '', filemtime( get_theme_file_path( '/assets/css/layout-top.css' ) ) );

  // Deepcom運用
  wp_enqueue_style( 'style-top', get_theme_file_uri( '/css/style-top.css' ), '', filemtime( get_theme_file_path( '/css/style-top.css' ) ) ); 

});

get_header();
?>


<script>
  jQuery(document).ready(function () {
  // swiperをイニシャライズ
  var mySwiper = new Swiper ('.swiper-container', {
    // オプションのパラメーターを指定
    direction: 'horizontal',
    effect: "slid",
    loop: true,
    spaceBetween: 30,
    centeredSlides: true,
    autoplay: {
      delay: 3000,
      disableOnInteraction: false,
    },
    pagination: {
      el: '.swiper-pagination',
      dynamicBullets: true,
      clickable: true,
    },
    slidesPerView: 3,
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
		breakpoints: {
			0: {
				slidesPerView: 1.5,
				spaceBetween: 10,
			},
			1026: {
				slidesPerView: 3,
				spaceBetween: 30,
			},
		},
    })
  });
</script>

<main class="g-main">
  <div class="top-container">

    <!--
    <div class="main-image">
      <div class="adjust-width">
        <div class="image">
          <picture>
            <source media="(max-width: 767px)" srcset="<?php echo get_theme_file_uri('/assets/images/top/main-img-sp.png'); ?>">
            <img src="<?php echo get_theme_file_uri('/assets/images/top/main-img.png'); ?>" alt="Build The Future">
          </picture>
        </div>
        <div class="contents">
          <p class="main-copy">Build The Future</p>
          <div class="site-copy">
            <p class="text">Microsoft製品に関する各種導入支援サービスと運用支援サービスを中心に、サービスを展開しています。</p>
            <div class="icon">
              <picture>
                <source media="(max-width: 767px)" srcset="<?php echo get_theme_file_uri('/assets/images/top/main-img-gold-ms-partner-sp.png'); ?>">
                <img src="<?php echo get_theme_file_uri('/assets/images/top/main-img-gold-ms-partner.png'); ?>" alt="Gold Microsoft Partner">
              </picture>
            </div>
          </div>
          <p class="l-button"><a href="/contact/">まずは無料相談</a></p>
        </div>
      </div>
      <div class="scroll-down"><span>SCROLL DOWN</span><i></i></div>
    </div>-->
    
    <!--ここから-->
    <?php /*if (is_user_logged_in()){ */?>
    
    <div class="main-image">
      <div class="adjust-width">
        <div class="image2">
          <picture>
            <source media="(max-width: 767px)" srcset="<?php echo get_theme_file_uri('/assets/images/top/main-img-sp.png'); ?>">
            <img src="<?php echo get_theme_file_uri('/assets/images/top/kv.png'); ?>" alt="Build The Future">
          </picture>
        </div>
        <div class="contents" style="width:100%;">
          <p class="main-copy2"style="color: black;line-height: 1;font-family: a-otf-gothic-mb101-pr6n, sans-serif;font-style: normal;font-weight: bold;">社内の<br>Microsoftクラウドを<br>より利用促進したい</p>
          <p class="l-button" style="margin-top: 5%;">
            <a class="lbtn" href="/services/">
              <!--<img src="https://deepcom.co.jp/wps/wp-content/themes/deepcom/assets/images/top/main-img-gold-ms-partner.png" style="height: 75px;">-->
              <span style="width: 25px; height: 75px;"></span>
              DeepComの提案<img src="https://deepcom.co.jp/wps/wp-content/themes/deepcom/assets/images/top/arrow.png" style="height: 65px;padding-left: 10px;vertical-align: text-bottom;">
            </a>
          </p>
        </div>
      </div>
      <div class="scroll-down"><span>SCROLL DOWN</span><i></i></div>
      <div class="image2">
          <picture>
            <source media="(max-width: 767px)" srcset="<?php echo get_theme_file_uri('/assets/images/top/BuildTheFuture.png'); ?>">
            <source media="(max-width: 1000px)" srcset="">
            <img src="<?php echo get_theme_file_uri('/assets/images/top/dummy.png'); ?>" alt="Build The Future">
          </picture>
        </div>
    </div>

    <?php /*}else{*/ ?>
    <?php /*}*/ ?>
    <!--ここまで-->

	<div class="adjust-width">
		<section class="home-news">
			<h2 class="home-news-ttl"><img src="<?php echo get_theme_file_uri('/assets/images/top/news-ttl.svg'); ?>" alt="LATEST NEWS"></h2>
			<div class="home-news-data">
				<?php echo do_shortcode('[showwhatsnew]'); ?>
			</div>
		</section><!--home-news-->
	</div>

    <section class="l-section-container -decoration-square-left section-service pcpt-50 sppt-20">
      <div class="adjust-width">
        <h2 class="l-section-title"><span class="en">SERVICE</span><span class="ja">サービス紹介</span></h2>
        <div class="l-section-description">Microsoft製品に関する各種導入支援サービスと運用支援サービスを中心に、サービスを展開しています。</div>

        <div class="service-group js-wp">
          <!--<div class="service-col">
            <div class="image"><img src="<?php echo get_theme_file_uri('/assets/images/top/service-img01.png'); ?>" alt=""></div>
            <div class="content">
              <p class="home-sub-ja">SaaS統合による業務全体の効率化</p>
              <h3 class="home-main-en">Microsoft 365</h3>
              <div class="text">
                <p>近年ビジネス速度は向上しており、コミュニティ基盤を用いた迅速な意思疎通と判断が必要です。弊社ではAzureAD、Exchange、Teams、SharePointを主軸に、コミュニティ活性・IT運用負担軽減をミッションとしています。</p>
              </div>
            </div>
          </div>
          <div class="service-col">
            <div class="image"><img src="<?php echo get_theme_file_uri('/assets/images/top/service-img02.png'); ?>" alt=""></div>
            <div class="content">
              <p class="home-sub-ja">より幅広い事業領域をシステム化</p>
              <h3 class="home-main-en">Microsoft Azure</h3>
              <div class="text">
                <p>信頼性の高いクラウドサービスであるMicrosoft Azureに力を入れています。ビッグデータと分析、システム統合、クラウド移行。要望に合ったMicrosoft Azureのソリューションをご提供します。クラウドの利点を活かしたWebシステム開発・移行お任せください。</p>
              </div>
            </div>
          </div>
          <div class="service-col">
            <div class="image"><img src="<?php echo get_theme_file_uri('/assets/images/top/service-img03.png'); ?>" alt=""></div>
            <div class="content">
              <p class="home-sub-ja">DX推進の中核を担う</p>
              <h3 class="home-main-en">PowerPlatform</h3>
              <div class="text">
                <p>目まぐるしい顧客ニーズの変化に伴い、業務プロセス整備の遅れは、機会の損失に繋がります。自社リソースの最適化と、業務プロセスの構築・見直しをPower Platformを用いて支援しています。</p>
              </div>
            </div>
          </div>
          <div class="service-col">
            <div class="image"><img src="<?php echo get_theme_file_uri('/assets/images/top/service-img04.png'); ?>" alt=""></div>
            <div class="content">
              <p class="home-sub-ja">社内の情報共有を最大限に強化</p>
              <h3 class="home-main-en">SharePoint</h3>
              <div class="text">
                <p>導入からWebパーツの開発・導入後の運用支援や活用アドバイスまで、トータルにご支援します。SharePointに関する悩みは、かかわる役割ごとに多岐に渡ります。SharePointの利用や運用に携わる、あらゆる皆さまのお悩みを解決致します。</p>
              </div>
            </div>
          </div> -->
          <div class="service-col">
            <div class="image"><img src="<?php echo get_theme_file_uri('/assets/images/services/06_SharePoint_ol_kv.png'); ?>" alt=""></div>
            <div class="content">
              <p class="home-sub-ja">オンプレミスからクラウド化</p>
              <h3 class="home-main-en">SharePoint<br>移行支援サービス</h3>
              <div class="text">
                <p>SharePoint Onlineへの移行時に整理するべき一般的な項目、移行計画の策定／現状把握／移行対象の選定／対応検討／運用方針を、お客さまの規模や予算感に応じてLv.1 ～ Lv.3 の3段階のオプションにてご提供しています。</p>
              </div>
            </div>
          </div>
          <div class="service-col">
            <div class="image"><img src="<?php echo get_theme_file_uri('/assets/images/services/04_Power_Platform_kv.png'); ?>" alt=""></div>
            <div class="content">
              <p class="home-sub-ja">導入前ガバナンス・セキュリティ定義</p>
              <h3 class="home-main-en">Power Platform<br>導入支援サービス</h3>
              <div class="text">
                <p>ローコード・ノーコード プラットフォームである、Microsoft Power Platform の導入支援（ガバナンス＆セキュリティ）サービスのご紹介です。 ガバナンス＆セキュリティ策定支援・トレーニング・QA支援を包括し、お客様の環境や運用に合わせ 3段階でのご提供としています。</p>
              </div>
            </div>
          </div>
          <div class="service-col">
            <div class="image"><img src="<?php echo get_theme_file_uri('/assets/images/services/07_dynamics365_sales_kv.png'); ?>" alt=""></div>
            <div class="content">
              <p class="home-sub-ja">BizCopilotの拡張機能</p>
              <h3 class="home-main-en">BizCopilot<br>サービス</h3>
              <div class="text">
                <p>弊社製品である、Azure OpenAI Serviceを利用したセキュアな環境でお使いいただける社内利用向けChatGPT「BizCopilot」の拡張機能導入サービスです。生成AIの機能をより充実させることでより業務の効率化を目指すことができます。</p>
              </div>
            </div>
          </div>
          <div class="service-col">
            <div class="image"><img src="<?php echo get_theme_file_uri('/assets/images/services/05_SharePoint_kv.png'); ?>" alt=""></div>
            <div class="content">
              <p class="home-sub-ja">Microsoft Cloud<br>ログ分析ソリューション</p>
              <h3 class="home-main-en">BizLog</h3>
              <div class="text">
                <p>Microsoft 365のアクセスログ、監査ログを収集＆分析するSaaSです。組織のエンゲージメント状況や、会社の方針に対する情報の閲覧状況や活用状況を把握し、最適な情報発信・共有の仕組みを作ることが可能になります。</p>
              </div>
            </div>
          </div>
        </div>
          <br>
          <p class="l-button l-button-blue"><a href="/services/">サービス一覧</a></p>
      </div>
    </section>

    <section class="l-section-container -decoration-square-right -decoration-square-right-green section-feature">
      <div class="adjust-width">
        <h2 class="l-section-title l-section-title-green"><span class="en">ADVANTAGE</span><span class="ja">DeepComの３つの強み</span></h2>
        <div class="l-section-description">Microsoft製品のパイオニアならではの技術力と豊富なノウハウが生み出す業界随一の強みを活かし、お客様が独自に運用する事を前提としたデジタルトランスフォーメーション（DX）領域での包括的なサービスを提供いたします。</div>
        <div class="feature-group">
          <div class="feature-style-media js-wp">
            <div class="image"><img src="<?php echo get_theme_file_uri('/assets/images/top/top-history2.png'); ?>" alt=""></div>
            <div class="content">
              <h3>業界随一の豊富な実績とノウハウ</h3>
              <div class="text">
                <p>当社は黎明期である2005年頃からMicrosoft SharePointに関わってきたメンバーで構成されております。<br>
導入支援、デザイン、拡張機能パーツ開発、データ移行含むバージョンアップ、運用支援など多数の開発・運用に携わってまいりました。<br>
豊富な実績やノウハウは業界随一です。</p>
              </div>
            </div>
          </div>

          <div class="feature-style-media js-wp">
            <!--<div class="image"><img src="<?php echo get_theme_file_uri('/assets/images/top/gold-ms-partner.png'); ?>" alt=""></div>-->
            <div class="image"><img src="<?php echo get_theme_file_uri('/assets/images/top/SP.png'); ?>" alt="" style="margin-left: -65px;"></div>
            <div class="content">
              <!--<h3>Microsoft Goldコンピテンシーパートナー</h3>-->
              <h3>Microsoft Solutions Partner</h3>
              <div class="text">
                <!--<p>当社はMicrosoft ソリューションの分野でクラス最高の能力を備えていることを証明する「Microsoft Goldコンピテンシーパートナー」です。さらにメンバーの大半が「MCP（Microsoft Certification Program）」所有者です。Microsoft製品のパイオニアならではの、確かな技術力をお約束します。</p>-->
                <p>当社はMicrosoft 365 を活用しながら、顧客の生産性向上やハイブリッドワークへの移行を支援する幅広い能力や、クラウド製品導入の高い実績や顧客への導入支援等の能力を備えていることを証明する「Microsoft Solutions Partner」です。さらにメンバーの大半が「MCP（Microsoft Certification Program）」所有者です。Microsoft製品のパイオニアならではの、確かな技術力をお約束します。</p>
              </div>
            </div>
          </div>

          <div class="feature-style-media js-wp">
            <div class="image"><img src="<?php echo get_theme_file_uri('/assets/images/top/challenge.png'); ?>" alt=""></div>
            <div class="content">
              <h3>絶やさない新技術へのチャレンジ</h3>
              <div class="text">
                <p>お客様からの多様なニーズに応えるべく、新技術へのチャレンジも絶やしません。技術リサーチに加え、自社での環境構築を経て、新たなサービスやプロダクトのリリースを次々に行なっております。
<br>
全ては「お客様がご自身で運用できるシステムの提供を行うため」。それがディープコムにできるデジタルトランスフォーメーション（DX）支援です。</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


	<section class="l-section-container -decoration-square-left -decoration-square-left-olive section-products">
		<div class="adjust-width">
			<h2 class="l-section-title l-section-title-olive"><span class="en">PRODUCTS</span><span class="ja">自社開発製品紹介</span></h2>
			<div class="l-section-description pcmb-20 spmb-20">SharePointの活用から、より事業効率を引き出すための自社開発ツールを提供しております。</div>
		<!--<div class="l-section-description">ディスクリプション</div>-->
			<div class="swiper-outer pcmb-20 spmb-20">
				<div class="swiper-container">
					<div class="swiper-wrapper">

						<div class="swiper-slide">
							<div class="swiper-slide-thumb">
								<a href="/sharepointtimeline/"><img src="<?php echo get_theme_file_uri('/images/ScheduleTimelineProducts.png'); ?>" alt=""></a>
							</div>
							<p class="swiper-slide-title">
								<a href="/sharepointtimeline/"><span class="p-ttl">SharePoint</span><span class="p-sub">スケジューラー連動</span></a>
							</p>
						</div><!--/.swiper-slide-->

						<div class="swiper-slide">
							<div class="swiper-slide-thumb">
								<a href="/spfxparts/"><img src="<?php echo get_theme_file_uri('/images/UnreadreadProducts.png'); ?>" alt=""></a>
							</div>
							<p class="swiper-slide-title">
								<a href="/spfxparts/"><span class="p-ttl">SharePoint</span><span class="p-sub">未既読</span></a>
							</p>
						</div><!--/.swiper-slide-->

						<div class="swiper-slide">
							<div class="swiper-slide-thumb">
								<a href="/access-permission-acquisition-tool/"><img src="<?php echo get_theme_file_uri('/images/PermissionProducts.png'); ?>" alt=""></a>
							</div>
							<p class="swiper-slide-title">
								<a href="/access-permission-acquisition-tool/"><span class="p-ttl">SharePoint</span><span class="p-sub">アクセス権限</span></a>
							</p>
						</div><!--/.swiper-slide-->

						<div class="swiper-slide">
							<div class="swiper-slide-thumb">
								<a href="/likehitswebpart/"><img src="<?php echo get_theme_file_uri('/images/LikeHitsWebPart.png'); ?>" alt=""></a>
							</div>
							<p class="swiper-slide-title">
								<a href="/likehitswebpart/"><span class="p-ttl">SharePoint</span><span class="p-sub">閲覧数/いいね数</span></a>
							</p>
						</div><!--/.swiper-slide-->

						<div class="swiper-slide">
							<div class="swiper-slide-thumb">
								<a href="/sharepointtab/"><img src="<?php echo get_theme_file_uri('/images/TabMordenWebPart.png'); ?>" alt=""></a>
							</div>
							<p class="swiper-slide-title">
								<a href="/sharepointtab/"><span class="p-ttl">SharePoint</span><span class="p-sub">タブ化</span></a>
							</p>
						</div><!--/.swiper-slide-->

						<div class="swiper-slide">
							<div class="swiper-slide-thumb">
								<a href="/advancedsearch/"><img src="<?php echo get_theme_file_uri('/images/advancedsearchwebpart.png'); ?>" alt=""></a>
							</div>
							<p class="swiper-slide-title">
								<a href="/sharepointtab/"><span class="p-ttl">SharePoint</span><span class="p-sub">検索拡張機能</span></a>
							</p>
						</div><!--/.swiper-slide-->

					</div><!--/.swiper-wrapper-->
				</div><!--/.swiper-container-->
				<!-- Add Arrows -->
				<div class="swiper-button-next swiperButton"></div>
				<div class="swiper-button-prev swiperButton"></div>
			</div><!-- /.swiper-outer-->
			<p class="l-button l-button-olive"><a href="/products/">プロダクト一覧</a></p>
		</div><!-- /.adjust-width-->
	</section>

	<section class="l-section-container -decoration-square-right -decoration-square-right-orange section-download">
		<div class="adjust-width">
			<h2 class="l-section-title l-section-title-orange"><span class="en">DOWNLOAD</span><span class="ja">資料ダウンロード</span></h2>
			<div class="l-section-description pcmb-20 spmb-20">弊社が開発する各種ツールに関する詳細資料を提供しております。導入ご検討の際にご利用ください。</div>
			<div class="swiper-outer pcmb-20 spmb-20">
				<div class="swiper-container">
					<div class="swiper-wrapper">
<?php
$args = array(
'post_type' => 'downloads',
'post_status' => 'publish',
'paged' => $paged,
'posts_per_page' => 10,
'orderby' => array('date' => 'DESC')
);
$loop = new WP_Query($args);
global $post;
?>
<?php
/* Start the Loop */
while ($loop->have_posts()) : $loop->the_post();
?>
						<div class="swiper-slide">
							<div class="swiper-slide-thumb">
								<a href="<?php the_permalink(); ?>" style="background-image: url('<?php echo get_the_post_thumbnail_url($post->ID, 'full'); ?>)"><img src="<?php echo get_the_post_thumbnail_url($post->ID, 'full');?>" style="object-fit:cover;"></a>
							</div>
							<p class="swiper-slide-title">
								<a href="<?php the_permalink(); ?>" rel="bookmark" title="<?= $post->post_title; ?>"><?php echo $post->post_title; ?></a>
							</p>
							<!-- <ul class="l-category-list"><?php foreach($category_list as $cat_list): ?><li><span><?php echo $cat_list['name']; ?></span></li><?php endforeach; ?></ul> -->
						</div><!--/.swiper-slide-->
<?php
endwhile;
wp_reset_query();
?>
					</div><!--/.swiper-wrapper-->
				</div><!--/.swiper-container-->
				<!-- Add Arrows -->
				<div class="swiper-button-next swiperButton"></div>
				<div class="swiper-button-prev swiperButton"></div>
			</div><!-- /.swiper-outer-->
			<p class="l-button l-button-orange"><a href="/downloads/">資料ダウンロード一覧</a></p>
		</div><!-- /.adjust-width-->
	</section>

	<section class="l-section-container -decoration-square-left -decoration-square-left-red section-blog">
		<div class="adjust-width">
			<h2 class="l-section-title l-section-title-red"><span class="en">BLOG</span><span class="ja">ブログ</span></h2>
			<div class="l-section-description pcmb-20 spmb-20">SharePointやPowerAppsを中心に、業務効率化に繋げるポストを情報発信しています。</div>
			<div class="swiper-outer pcmb-20 spmb-20">
				<div class="swiper-container">
					<div class="swiper-wrapper">
<?php
$args = array(
'post_type' => 'post',
'post_status' => 'publish',
'paged' => $paged,
'posts_per_page' => 6,
'orderby' => array('date' => 'DESC')
);
$loop = new WP_Query($args);
global $post;
?>
<?php
/* Start the Loop */
while ($loop->have_posts()) : $loop->the_post();
?>
						<div class="swiper-slide">
							<div class="swiper-slide-thumb">
								<a href="<?php the_permalink(); ?>" style="background-image: url('<?php echo get_the_post_thumbnail_url($post->ID, 'full'); ?>)"><img src="<?php echo get_the_post_thumbnail_url($post->ID, 'full');?>" style="object-fit:cover;"></a>
							</div>
							<p class="swiper-slide-title">
								<a href="<?php the_permalink(); ?>" rel="bookmark" title="<?= $post->post_title; ?>"><?php echo $post->post_title; ?></a>
							</p>
							<p class="swiper-slide-date"><?php the_time('Y.m.d'); ?></p>
							<!-- <ul class="l-category-list"><?php foreach($category_list as $cat_list): ?><li><span><?php echo $cat_list['name']; ?></span></li><?php endforeach; ?></ul> -->
						</div><!--/.swiper-slide-->
<?php
endwhile;
wp_reset_query();
?>
					</div><!--/.swiper-wrapper-->
				</div><!--/.swiper-container-->
				<!-- Add Arrows -->
				<div class="swiper-button-next swiperButton"></div>
				<div class="swiper-button-prev swiperButton"></div>
			</div><!-- /.swiper-outer-->
			<p class="l-button l-button-red"><a href="/blog/">ブログ一覧</a></p>
		</div><!-- /.adjust-width-->
	</section>

    <section class="l-section-container section-news">
      <div class="adjust-width">
        <h2 class="l-section-title l-section-title-pink"><span class="en">NEWS</span><span class="ja">ニュース</span></h2>

        <div class="news-group">
          <div class="news-row">
          <?php echo do_shortcode('[showwhatsnew]'); ?>
          <!--<div class="news-info">
              <div class="date">2021.01.29</div>
              <div class="category"><a href="">リリース</a></div>
            </div>
            <p class="news-title"><a href="">ブログ記事を掲載しました。</a></p>
          </div>
          <div class="news-row">
            <div class="news-info">
              <div class="date">2021.01.29</div>
              <div class="category"><a href="">リリース</a></div>
            </div>
            <p class="news-title"><a href="">ブログ記事を掲載しました。ブログ記事を掲載しました。ブログ記事を掲載しました。ブログ記事を掲載しました。ブログ記事を掲載しました。ブログ記事を掲載しました。</a></p>
          </div>
          <div class="news-row">
            <div class="news-info">
              <div class="date">2021.01.29</div>
              <div class="category"><a href="">リリース</a></div>
            </div>
            <p class="news-title"><a href="">ブログ記事を掲載しました。</a></p>
          </div>
          <div class="news-row">
            <div class="news-info">
              <div class="date">2021.01.29</div>
              <div class="category"><a href="">リリース</a></div>
            </div>
            <p class="news-title"><a href="">ブログ記事を掲載しました。ブログ記事を掲載しました。ブログ記事を掲載しました。ブログ記事を掲載しました。ブログ記事を掲載しました。ブログ記事を掲載しました。</a></p>
          </div>
          <div class="news-row">
            <div class="news-info">
              <div class="date">2021.01.29</div>
              <div class="category"><a href="">リリース</a></div>
            </div>
            <p class="news-title"><a href="">ブログ記事を掲載しました。</a></p>-->
          </div>
        </div>

        <p class="l-button l-button-pink"><a href="/news/">ニュース一覧</a></p>
      </div>
    </section>
  </div>
</main>

<?php get_footer(); ?>
