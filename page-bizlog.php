<link rel="stylesheet" href="style-bizlog.css">

<?php
/*
Template Name:Bizlog
*/

add_action('wp_enqueue_scripts', function () {
	// wp_enqueue_script( 'page', get_theme_file_uri( '/assets/js/page.min.js' ), '', filemtime( get_theme_file_path( '/assets/js/page.min.js' ) ), true );
	wp_enqueue_style( 'layout-page', get_theme_file_uri( '/assets/css/layout-page.css' ), '', filemtime( get_theme_file_path( '/assets/css/layout-page.css' ) ) );
  
	wp_enqueue_style( 'style-bizlog', get_theme_file_uri( '/css/style-bizlog.css' ), '', filemtime( get_theme_file_path( '/css/style-bizlog.css' ) ) );
});
?>
<?php get_header(); ?>
<body class="drawer drawer--top" id="home">
<?php get_sidebar(); ?>

<main class="g-main">
  <div class="page-header">
    <div class="page-title adjust-width">
      <h1>SERVICE<span><?php single_post_title(); ?></span>
      </h1>
    </div>
</div>
</main>

	<div class="l-breadcrumb adjust-width">
      <ol>
        <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">HOME</a></li>
        <li><?php single_post_title(); ?></li>
      </ol>
    </div>



<section class="key">
	<div class="key-sp"><img src="<?php echo get_template_directory_uri(); ?>/images/key-bg.png" alt=""></div>
	<div class="key-inner">
		<div class="key-inner-txt">
			<div class="key-inner-txt-logo"><img src="<?php echo get_template_directory_uri(); ?>/images/BizLog_A.png" alt="BizLog"></div>
			<h2 class="key-inner-txt-ttl">Microsoft 365<br>ログ収集＆分析</h2>
			<p class="key-inner-txt-txt">Microsoft 365のアクセスログ、監査ログを収集＆分析するSaaSです。</p>
			<div class="key-inner-txt-btns">
				<a class="btn alpha" href="https://deepcom.co.jp/downloads/bizlog" target="_blank">資料をダウンロード</a>
				<a class="btn btn-wh alpha" href="https://deepcom.co.jp/contact/">お問い合わせ</a>
			</div>
		</div>
	</div>
</section><!--/.key -->


<section class="bg-p-orange common-padding worries">
	<div class="contents contents-1000">
		<div class="worries-read">
			<h2 class="ttl-round pcmb-40 spmb-40">情報システム担当者、総務・人事部様</h2>
			<h3 class="ttl-40 pcmb-40 spmb-40">Microsoft 365のログ収集に関して<br>このようなお悩みありませんか？</h3>
			<img class="worries-illust" src="<?php echo get_template_directory_uri(); ?>/images/illust.svg" alt="">
		</div>
		<div class="worries-column">
			<div class="worries-column-col">
				<div class="worries-column-col-num">
					<div class="worries-column-col-num-txt">お悩み</div>
					<div class="worries-column-col-num-num">01</div>
				</div>
				<h3 class="worries-column-col-ttl">プロダクティビティを<br>向上させたい</h3>
				<h3 class="worries-column-col-txt">社員のアクセスログを分析することにより、どのような業務に時間を費やしているかを把握することができます。特定のアプリケーションやWebサイトへのアクセスログを分析し、時間の浪費や非生産的な活動を特定することで、効率の向上や業務プロセスの改善に繋げることができます。</h3>
			</div><!--/.worries-column-col -->

			<div class="worries-column-col">
				<div class="worries-column-col-num">
					<div class="worries-column-col-num-txt">お悩み</div>
					<div class="worries-column-col-num-num">02</div>
				</div>
				<h3 class="worries-column-col-ttl">セキュリティ対策の<br>強化をしたい</h3>
				<h3 class="worries-column-col-txt">社内ネットワークのアクセスログを収集し分析することで、セキュリティ対策を強化することができます。不正アクセスや異常なアクティビティを検出し、早期に対処することで、情報漏洩やデータ侵害などのセキュリティリスクを軽減することができます。</h3>
			</div><!--/.worries-column-col -->

			<div class="worries-column-col">
				<div class="worries-column-col-num">
					<div class="worries-column-col-num-txt">お悩み</div>
					<div class="worries-column-col-num-num">03</div>
				</div>
				<h3 class="worries-column-col-ttl">コンプライアンスの<br>確保をしたい</h3>
				<h3 class="worries-column-col-txt">アクセスログの収集と分析は、コンプライアンス要件を満たすためにも重要です。特定の法律や規制が適用される業界や特定のデータにアクセスする社員の行動を監視し、コンプライアンス違反のリスクを最小限に抑えることができます。</h3>
			</div><!--/.worries-column-col -->

     		<div class="worries-column-col">
				<div class="worries-column-col-num">
					<div class="worries-column-col-num-txt">お悩み</div>
					<div class="worries-column-col-num-num">04</div>
				</div>
				<h3 class="worries-column-col-ttl">リソースを<br>最適化したい</h3>
				<h3 class="worries-column-col-txt">アクセスログの分析により、社内システムやリソースの利用状況を把握することができます。特定のアプリケーションやツールが頻繁に使用されている場合、それに対するリソースの割り当てを最適化することで、コストの削減やパフォーマンスの向上を図ることができます。</h3>
			</div><!--/.worries-column-col -->
		</div><!--/.worries-column -->
	</div><!--/.contents-1000 -->
</section><!--/.bg-orange -->

<section class="result">
	<div class="contents contents-1200">
		<div class="result-ttl">
			<h2 class="result-ttl-inner"><span class="result-ttl-inner-img"><img src="<?php echo get_template_directory_uri(); ?>/images/BizLog_A.png" alt="BizLog"></span><br class="sp-inline"><span>を導入して</span><br class="sp-inline"><span>すべて解決！</span></h2>
		</div>
		<div class="result-column">
			<div class="result-column-ph"><!--340-360 -->
 				<img class="result-column-ph-1" src="<?php echo get_template_directory_uri(); ?>/images/BizLog_イメージ.png" alt="494-276">
			</div><!--/.result-column-ph -->
			<div class="result-column-txt">
			
				<h3 class="result-column-txt-sub">エンゲージメントの向上へとつながる<br>Microsoft 365ログ収集＆分析</h3>
				<p class="result-column-txt-txt">組織のエンゲージメント状況や、会社の方針に対する情報の閲覧状況や活用状況を把握し、最適な情報発信・共有の仕組みを作ることが可能になります。</p>
				<!-- <p class="result-column-txt-price">
					<span class="result-column-txt-price-small">月額1ユーザー</span>
					<span class="result-column-txt-price-small2">￥</span>
					<span class="result-column-txt-price-big">300</span>
					※税別
				</p> -->
			</div><!--/.result-column-txt -->
		</div><!--/.result-column -->
<!-- 		<p class="attention">注意書き</p> -->
	</div><!--/.contents-1200 -->
</section><!--/.result -->

<!--<div class="cv bg-sand">
	<div class="contents cv-btns">
		<a class="btn btn-dl alpha" href="https://deepcom.co.jp/downloads/bizlog" target="_blank"><span>資料をダウンロード</span></a>
		<a class="btn btn-wh btn-mail alpha" href="https://deepcom.co.jp/contact/"><span>お問い合わせ</span></a>
	</div>
</div>--><!--/.cv -->

<section class="features" id="sec-1">
	<div class="contents bg-l-orange">
		<div class="contents-1000 features-point">
			<div class="features-point-column">
				<div class="features-point-column-fig"><img src="<?php echo get_template_directory_uri(); ?>/images/BizLog_ページ別平均滞在時間集計.png" alt="526-305"></div>
				<div class="features-point-column-txt">
					<div class="features-point-column-txt-icon"><span class="features-point-column-txt-icon-s">POINT</span><span class="features-point-column-txt-icon-b">01</span></div>
					<h3 class="features-point-column-txt-ttl">レポート表示</h3>
					<div class="features-point-column-txt-txt">SharePoint標準機能ではSharePointサイト毎のレポートを表示しますが、BizLogの機能では同テナントのSharePointサイトを一覧で表示することができます。</div>
				</div>
			</div><!--/.features-point-column -->
			<div class="features-point-column features-point-column-rev">
				<div class="features-point-column-fig"><img src="<?php echo get_template_directory_uri(); ?>/images/BizLog_サマリ一覧.png" alt="526-305"></div>
				<div class="features-point-column-txt">
					<div class="features-point-column-txt-icon"><span class="features-point-column-txt-icon-s">POINT</span><span class="features-point-column-txt-icon-b">02</span></div>
					<h3 class="features-point-column-txt-ttl">分析単位</h3>
					<div class="features-point-column-txt-txt">SharePoint標準機能ではSharePointサイト単位での分析しかすることができませんが、BizLogの機能ではサイト/ページ/リスト/ドキュメント単位での分析をすることができます。</div>
				</div>
			</div><!--/.features-point-column -->
			<div class="features-point-column">
				<div class="features-point-column-fig"><img src="<?php echo get_template_directory_uri(); ?>/images/BizLog_サマリ散布図.png" alt="526-305"></div>
				<div class="features-point-column-txt">
					<div class="features-point-column-txt-icon"><span class="features-point-column-txt-icon-s">POINT</span><span class="features-point-column-txt-icon-b">03</span></div>
					<h3 class="features-point-column-txt-ttl">ログ保存期間</h3>
					<div class="features-point-column-txt-txt">Microsoft 365標準機能では90日間（E5ライセンスは365日）ログを保存しますが、BizLogの機能では導入開始から無制限でログを保存することができます。</div>
				</div>
			</div><!--/.features-point-column -->
		</div><!--/.contents-1000 -->
	</div><!--/.contents -->
</section><!--/.features -->

<section class="func bg-sand" id="sec-2" style="background-image:url(<?php echo get_template_directory_uri(); ?>/img/bg_illust.png);">
	<div class="contents">
		<div class="features-ttl">
			<h2 class="features-ttl-inner">
				<span class="features-ttl-inner-en">function</span>
				<span class="features-ttl-inner-ja">機能紹介</span>
			</h2>
		</div><!--/.features-ttl -->
	</div>
	<div class="contents">
		<div class="func-column">
			<div class="func-column-col">
				<div class="func-column-col-func"><img src="<?php echo get_template_directory_uri(); ?>/images/f-1.png" alt="function-1"></div>
				<div class="func-column-col-icon"><img src="<?php echo get_template_directory_uri(); ?>/images/features-column-col-icon.png" alt=""></div>
				<h3 class="func-column-col-ttl">サマリ一覧</h3>
				<p class="func-column-col-txt">ページ単位で、ページの表示回数やセッション数を確認することができます。</p>
			</div><!--/.func-column-col -->

			<div class="func-column-col">
				<div class="func-column-col-func"><img src="<?php echo get_template_directory_uri(); ?>/images/f-2.png" alt="function-2"></div>
				<div class="func-column-col-icon"><img src="<?php echo get_template_directory_uri(); ?>/images/features-column-col-icon.png" alt=""></div>
				<h3 class="func-column-col-ttl">サマリ散布図</h3>
				<p class="func-column-col-txt">各ページの表示回数と表示ユーザー数の分布図を確認することができます。</p>
			</div><!--/.func-column-col -->

			<div class="func-column-col">
				<div class="func-column-col-func"><img src="<?php echo get_template_directory_uri(); ?>/images/f-3.png" alt="function-3"></div>
				<div class="func-column-col-icon"><img src="<?php echo get_template_directory_uri(); ?>/images/features-column-col-icon.png" alt=""></div>
				<h3 class="func-column-col-ttl">ページ別<br>平均滞在時間集計</h3>
				<p class="func-column-col-txt">各ページの平均滞在時間、表示回数、セッション数を確認することができます。</p>
			</div><!--/.func-column-col -->

			<div class="func-column-col">
				<div class="func-column-col-func"><img src="<?php echo get_template_directory_uri(); ?>/images/f-4.png" alt="function-4"></div>
				<div class="func-column-col-icon"><img src="<?php echo get_template_directory_uri(); ?>/images/features-column-col-icon.png" alt=""></div>
				<h3 class="func-column-col-ttl">時間帯別集計</h3>
				<p class="func-column-col-txt">ページの表示ユーザー数を時間帯ごとにグラフで確認することができます。</p>
			</div><!--/.func-column-col -->

			<div class="func-column-col">
				<div class="func-column-col-func"><img src="<?php echo get_template_directory_uri(); ?>/images/f-5.png" alt="function-5"></div>
				<div class="func-column-col-icon"><img src="<?php echo get_template_directory_uri(); ?>/images/features-column-col-icon.png" alt=""></div>
				<h3 class="func-column-col-ttl">遷移元集計</h3>
				<p class="func-column-col-txt">アクセス元となったページからの遷移回数を確認することができます。</p>
			</div><!--/.func-column-col -->

			<div class="func-column-col">
				<div class="func-column-col-func"><img src="<?php echo get_template_directory_uri(); ?>/images/f-6.png" alt="function-6"></div>
				<div class="func-column-col-icon"><img src="<?php echo get_template_directory_uri(); ?>/images/features-column-col-icon.png" alt=""></div>
				<h3 class="func-column-col-ttl">遷移経路図</h3>
				<p class="func-column-col-txt">サイト内の閲覧経路を表した遷移経路図を表示します。</p>
			</div><!--/.func-column-col -->

			<div class="func-column-col">
				<div class="func-column-col-func"><img src="<?php echo get_template_directory_uri(); ?>/images/f-7.png" alt="function-7"></div>
				<div class="func-column-col-icon"><img src="<?php echo get_template_directory_uri(); ?>/images/features-column-col-icon.png" alt=""></div>
				<h3 class="func-column-col-ttl">アクセスランキング</h3>
				<p class="func-column-col-txt">サイトを活用しているユーザーをページ表示回数の合計でランキング表示します。</p>
			</div><!--/.func-column-col -->

			<div class="func-column-col">
				<div class="func-column-col-func"><img src="<?php echo get_template_directory_uri(); ?>/images/f-8.png" alt="function-8"></div>
				<div class="func-column-col-icon"><img src="<?php echo get_template_directory_uri(); ?>/images/features-column-col-icon.png" alt=""></div>
				<h3 class="func-column-col-ttl">ヒートマップ</h3>
				<p class="func-column-col-txt">コンテンツ内のユーザーの行動を直感的に把握できるようマップ表示します。</p>
			</div><!--/.func-column-col -->

			<div class="func-column-col">
				<div class="func-column-col-func"><img src="<?php echo get_template_directory_uri(); ?>/images/f-9.png" alt="function-9"></div>
				<div class="func-column-col-icon"><img src="<?php echo get_template_directory_uri(); ?>/images/features-column-col-icon.png" alt=""></div>
				<h3 class="func-column-col-ttl">検索キーワード<br>ランキング</h3>
				<p class="func-column-col-txt">ユーザーの検索キーワードをランキング表示します。</p>
			</div><!--/.func-column-col -->

			<div class="func-column-col">
				<div class="func-column-col-func"><img src="<?php echo get_template_directory_uri(); ?>/images/f-10.png" alt="function-10"></div>
				<div class="func-column-col-icon"><img src="<?php echo get_template_directory_uri(); ?>/images/features-column-col-icon.png" alt=""></div>
				<h3 class="func-column-col-ttl">速度分析</h3>
				<p class="func-column-col-txt">コンテンツの表示速度やポータルサイトの起動速度を表示します。</p>
			</div><!--/.func-column-col -->

			<div class="func-column-col">
				<div class="func-column-col-func"><img src="<?php echo get_template_directory_uri(); ?>/images/f-11.png" alt="function-11"></div>
				<div class="func-column-col-icon"><img src="<?php echo get_template_directory_uri(); ?>/images/features-column-col-icon.png" alt=""></div>
				<h3 class="func-column-col-ttl">スクロール率の分析</h3>
				<p class="func-column-col-txt">各ページのスクロール率を表示します。</p>
			</div><!--/.func-column-col -->

			<div class="func-column-col">
				<div class="func-column-col-func"><img src="<?php echo get_template_directory_uri(); ?>/images/f-12.png" alt="function-12"></div>
				<div class="func-column-col-icon"><img src="<?php echo get_template_directory_uri(); ?>/images/features-column-col-icon.png" alt=""></div>
				<h3 class="func-column-col-ttl">エクスポート</h3>
				<p class="func-column-col-txt">アクセスログや監査ログをエクスポートできます。</p>
			</div><!--/.func-column-col -->

		</div><!--/.func-column -->

		<p class="func-info">各機能については、導入後も電話やメールなどで手厚いサポートをご用意しております。<br>
		機能の詳細については、こちらから資料をダウンロードいただくか、<br>お問い合わせフォームより、お気軽にお問い合わせください。</p>

		<div class="cv">
			<div class="cv-btns">
				<a class="btn btn-dl alpha" href="https://deepcom.co.jp/downloads/bizlog" target="_blank"><span>資料をダウンロード</span></a>
				<a class="btn btn-wh btn-mail alpha" href="https://deepcom.co.jp/contact/"><span>お問い合わせ</span></a>
			</div>
		</div><!--/.cv -->
	</div>
</section>


<!-- <section class="case bg-p-orange" id="sec-3">
	<div class="contents"> -->
		<!--<div class="features-ttl">
			<h2 class="features-ttl-inner">
				<span class="features-ttl-inner-en">case study</span>
				<span class="features-ttl-inner-ja">導入事例</span>
			</h2>
		</div>--><!--/.features-ttl -->
	<!-- </div>> -->
	<!-- <div class="contents contents-1200"> -->
<!-- 		<p class="case-read">テスト</p> -->
		<!-- <div class="case-column"> -->
			<!--<div class="case-column-col">
				<h3 class="case-column-col-ttl">業務プロセスの可視化と効率化</h3>
				<p class="case-column-col-txt">アクセスログを基にしたデータ分析により、社員の業務パターンや利用ツールの使用状況を把握することができました。これにより、業務プロセスの可視化が可能となり、重要な業務を効率化する改善策を見つけ出すことができました。</p>
				<p class="case-column-col-icon case-column-col-icon-male">製造業 A社 経営者 aさん</p>
			</div>--><!--/.func-column-col -->
			<!--<div class="case-column-col">
				<h3 class="case-column-col-ttl">コンプライアンスの強化</h3>
				<p class="case-column-col-txt">アクセスログ取得サービスの導入により、重要な規制や法的な遵守事項に対しても準拠できるようになりました。アクセスログは監査対象として活用され、必要な情報や証拠が簡単に取得できるようになりました。</p>
				<p class="case-column-col-icon case-column-col-icon-female">情報通信業 B社 IT部門 bさん</p>
			</div>--><!--/.func-column-col -->
		<!--</div>--><!--/.case-column -->

<!-- 		<p class="attention">注意書き</p> -->

		<!-- <div class="case-flow">
			<div class="case-flow-inner">
				<h3 class="case-flow-inner-ttl">導入までの5ステップ</h3> -->
<!-- 				<p class="case-flow-inner-read">テスト</p> -->
				<!--<div class="case-flow-inner-column">-->
					<!--<div class="case-flow-inner-column-col">
						<h4 class="case-flow-inner-column-col-ttl"><span>1</span>打ち合わせ</h4>
						<p class="case-flow-inner-column-col-txt">課題をWeb会議でヒアリング致します。</p>
					</div>--><!--/.case-flow-inner-column-col -->

					<!--<div class="case-flow-inner-column-col">
						<h4 class="case-flow-inner-column-col-ttl"><span>2</span>無償トライアル申込</h4>
						<p class="case-flow-inner-column-col-txt">1週間ほどで無償トライアル可能な環境をご用意いたします。</p>
					</div>--><!--/.case-flow-inner-column-col -->

					<!--<div class="case-flow-inner-column-col">
						<h4 class="case-flow-inner-column-col-ttl"><span>3</span>無償トライアル実施</h4>
						<p class="case-flow-inner-column-col-txt">BizLogを30日間無償でトライアルしていただけます。</p>
					</div>--><!--/.case-flow-inner-column-col -->

					<!--<div class="case-flow-inner-column-col">
						<h4 class="case-flow-inner-column-col-ttl"><span>4</span>サービス申込</h4>
						<p class="case-flow-inner-column-col-txt">無償期間中に申し込みしていただけた場合、無償トライアル環境をそのまま本番環境へと切り替えることができます。</p>
					</div>--><!--/.case-flow-inner-column-col -->

					<!--<div class="case-flow-inner-column-col">
						<h4 class="case-flow-inner-column-col-ttl"><span>5</span>サービス提供開始</h4>
						<p class="case-flow-inner-column-col-txt">実際に本番環境として運用を開始していただけます。</p>
					</div>--><!--/.case-flow-inner-column-col -->
				<!--</div>--><!--/.case-flow-inner-column -->
			<!--</div>--><!--/.case-flow-inner -->
		<!--</div>--><!--/.case-flow -->

		<!--<div class="cv">
			<div class="cv-btns">
				<a class="btn btn-dl alpha" href="<?php echo get_template_directory_uri(); ?>/pdf/sample_20220816-01.pdf" target="_blank"><span>資料をダウンロード</span></a>
				<a class="btn btn-wh btn-mail alpha" href="#sec-5"><span>お問い合わせ</span></a>
			</div>
		</div>--><!--/.cv -->

	</div>
</section>

<section class="faq" id="sec-4">
	<div class="contents">
		<div class="features-ttl">
			<h2 class="features-ttl-inner">
				<span class="features-ttl-inner-en">FAQ</span>
				<span class="features-ttl-inner-ja">よくある質問</span>
			</h2>
		</div><!--/.features-ttl -->
	</div>
	<div class="contents contents-780">
		<!--ここから　1ブロック-->
		<input id="block-01" type="checkbox" class="toggle"><!-- id="block-01"と、直下のlabelの for="block-01"が一致している必要があります-->
		<label class="Label" for="block-01">本サービスのサポート体系について教えてください。</label>
		<div class="content">
			<p>サポートは土日、祝祭日及び年末年始休暇を除く、<br>弊社営業日の10:00~17:30で対応させていただきます。</p>
		</div>
		<!--ここまで　1ブロック-->
		<input id="block-03" type="checkbox" class="toggle">
		<label class="Label" for="block-03">毎日のログを集計する時間を教えてください。</label>
		<div class="content">
			<p>日本時間9:00に前日分のアクセスログ集計を実行します。<br>前日分のレポートは集計完了後の日本時間9:30以降に参照可能です。</p>
		</div>
	</div><!--/.contents -->
</section>

<section class="contact bg-sand common-padding">
	<div class="contents contents-1200 rounded-wh" id="sec-5">
		<div class="features-ttl">
			<h2 class="features-ttl-inner">
				<span class="features-ttl-inner-en">inquiry</span>
				<span class="features-ttl-inner-ja">お問い合わせ</span>
			</h2>
		</div><!--/.features-ttl -->

		<div class="contents-643">
<?php if(have_posts()): ?>
<?php while(have_posts()):the_post(); ?>
<?php remove_filter('the_content', 'wpautop'); ?>
<?php the_content(); ?>
<?php endwhile; else: ?>
<?php endif; ?>
		</div>
	</div><!--/.contents -->
</section>


<?php get_footer(); ?>