<?php
/*
Template Name: Power Platform - アプリ開発センター - LP
*/

add_action('wp_enqueue_scripts', function () {
  // wp_enqueue_script( 'page', get_theme_file_uri( '/assets/js/page.min.js' ), '', filemtime( get_theme_file_path( '/assets/js/page.min.js' ) ), true );
  wp_enqueue_style( 'layout-page', get_theme_file_uri( '/assets/css/layout-page.css' ), '', filemtime( get_theme_file_path( '/assets/css/layout-page.css' ) ) );

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

  if(is_page('enterprise_chatgpt')) {
    wp_enqueue_style( 'layout-recruit', get_theme_file_uri( '/assets/css/layout-recruit.css' ), '', filemtime( get_theme_file_path( '/assets/css/layout-recruit.css' ) ) );
    wp_enqueue_style( 'style-recruit', get_theme_file_uri( '/css/style-recruit.css' ), '', filemtime( get_theme_file_path( '/css/style-recruit.css' ) ) );
  }

  if(is_page('enterprise_chatgpt_organization_data')) {
    wp_enqueue_style( 'layout-recruit', get_theme_file_uri( '/assets/css/layout-recruit.css' ), '', filemtime( get_theme_file_path( '/assets/css/layout-recruit.css' ) ) );
    wp_enqueue_style( 'style-recruit', get_theme_file_uri( '/css/style-recruit.css' ), '', filemtime( get_theme_file_path( '/css/style-recruit.css' ) ) );
  }

  if(is_page('enterprise_chatgpt_sharepoint')) {
    wp_enqueue_style( 'layout-recruit', get_theme_file_uri( '/assets/css/layout-recruit.css' ), '', filemtime( get_theme_file_path( '/assets/css/layout-recruit.css' ) ) );
    wp_enqueue_style( 'style-recruit', get_theme_file_uri( '/css/style-recruit.css' ), '', filemtime( get_theme_file_path( '/css/style-recruit.css' ) ) );
  }

  if(is_page('powerplatform-app')) {
    wp_enqueue_style( 'layout-recruit', get_theme_file_uri( '/assets/css/layout-recruit.css' ), '', filemtime( get_theme_file_path( '/assets/css/layout-recruit.css' ) ) );
    wp_enqueue_style( 'style-recruit', get_theme_file_uri( '/css/style-recruit.css' ), '', filemtime( get_theme_file_path( '/css/style-recruit.css' ) ) );
    wp_enqueue_style( 'style-powerplatform-app', get_theme_file_uri( '/css/page-power-lp.css' ), '', filemtime( get_theme_file_path( '/css/page-power-lp.css' ) ) );
    wp_enqueue_script( 'script-powerplatform-app', get_theme_file_uri( '/js/page-power-lp.js' ), array(), filemtime( get_theme_file_path( '/js/page-power-lp.js' ) ), true );
  }
  
});
get_header();
?>

<main class="g-main power-lp">
  <div class="page-header">
    <div class="page-title adjust-width">
      <h1>SERVICE
        <span><?php single_post_title(); ?></span>
      </h1>
    </div>

    <section class="power-lp-mv">
      <div class="power-lp-mv__wrapper">
        <div class="power-lp-mv__inner power-lp-common-inner">
          <div class="power-lp-mv__content">
            <div class="power-lp-mv__logo">
              <img src='<?php echo get_template_directory_uri() ?>/images/lp/PowerPlatform_scalable.png' alt='' width='' height='' decoding='async' loading='lazy'>
            </div>
            <h2 class="power-lp-mv__title">Power Platform<br class="u-mobile">アプリ開発センター</h2>
            <p class="power-lp-mv__text">「PowerPlatformを社内で運用を行いたい」<br class="u-mobile">お客様向けの伴走型支援サービス</p>
          </div>
          <div class="power-lp-mv__img">
          <img src='<?php echo get_template_directory_uri() ?>/images/lp/main_illust.png' alt='' width='' height='' decoding='async' loading='lazy'>
          </div>
          <div class="power-lp-mv__btns">
            <div class="power-lp-mv__btn">
              <a href="">
                <picture>
                  <source srcset="<?php echo get_template_directory_uri() ?>/images/lp/download_btn.png" media="(min-width: 768px)" type="image/png">
                  <img src="<?php echo get_template_directory_uri() ?>/images/lp/download_btn_sp.png" alt='' width='' height='' loading='lazy'>
                </picture>
              </a>
            </div>
            <div class="power-lp-mv__btn">
              <a href="">
              <picture>
                  <source srcset="<?php echo get_template_directory_uri() ?>/images/lp/info_btn.png" media="(min-width: 768px)" type="image/png">
                  <img src="<?php echo get_template_directory_uri() ?>/images/lp/info_btn_sp.png" alt='' width='' height='' loading='lazy'>
                </picture>
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="power-lp-platform">
      <div class="power-lp-platform__wrapper">
        <div class="power-lp-platform__inner power-lp-common-inner__inner">
          <h3 class="power-lp-section-title">Power Platform<br class="u-mobile">- アプリ開発センター -</h3>
          <div class="power-lp-platform__items">
            <div class="power-lp-platform__item">
              <a href="#power-lp-d_worrise">
                <p class="power-lp-platform__item-text">小規模アプリケーションの開発や<br>調査目的、市民開発の土台に</p>
                <div class="power-lp-platform__item-icon --men">
                <img src='<?php echo get_template_directory_uri() ?>/images/lp/developer_illust_01.png' alt='' width='' height='' decoding='async' loading='lazy'>
                </div>
                <p class="power-lp-platform__item-title --green">定額アプリ開発サービス</p>
              </a>
            </div>
            <div class="power-lp-platform__item">
              <a href="#power-lp-t_worrise">
              <p class="power-lp-platform__item-text">QA対応や技術検証やサンプル作成など、<br>広い工程における技術面での支援を受けるなら</p>
                <div class="power-lp-platform__item-icon  --women">
                <img src='<?php echo get_template_directory_uri() ?>/images/lp/developer_illust_02.png' alt='' width='' height='' decoding='async' loading='lazy'>
                </div>
                <p class="power-lp-platform__item-title --orange">Power Platform<br>テクニカルサポートサービス</p>
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="power-lp-d_worrise" class="power-lp-d_worrise">
      <div class="power-lp-d_worrise__wrapper">
        <div class="power-lp-d_worrise__inner power-lp-common-inner__inner">
          <h3 class="power-lp-section-title -green">定額アプリ開発サービス</h3>
          <div class="power-lp-d_worrise__img">
            <picture>
                <source srcset="<?php echo get_template_directory_uri() ?>/images/lp/d_worrise.png" media="(min-width: 768px)" type="image/png">
                <img src="<?php echo get_template_directory_uri() ?>/images/lp/d_worrise_sp.png" alt='' width='' height='' loading='lazy'>
            </picture>
          </div>
        </div>

      </div>
    </section>

    <section class="power-lp-solution">
      <div class="power-lp-solution__wrapper">
        <div class="power-lp-solution__inner power-lp-common-inner">
          <div class="power-lp-solution__content">
            <div class="power-lp-solution__title">
            <picture>
                <source srcset="<?php echo get_template_directory_uri() ?>/images/lp/solution_title.png" media="(min-width: 768px)" type="image/png">
                <img src="<?php echo get_template_directory_uri() ?>/images/lp/solution_title_sp.png" alt='' width='' height='' loading='lazy'>
            </picture>
            </div>
            <p class="power-lp-solution__text power-lp-common-inner__inner">PowerPlatformを社内で運用されるお客様に向けた定額のアプリ作成サービスです。小規模案件や実現性の確認、要件整理の為の利用にも向いています。また、ドキュメント類を含まない為、より短いサイクルでの確認を可能とします。</p>
            <div class="power-lp-solution__flow power-lp-common-inner__inner">
            <picture>
                <source srcset="<?php echo get_template_directory_uri() ?>/images/lp/solution_flow.png" media="(min-width: 768px)" type="image/png">
                <img src="<?php echo get_template_directory_uri() ?>/images/lp/solution_flow_sp.png" alt='' width='' height='' loading='lazy'>
            </picture>
            </div>
            <div class="power-lp-solution__image power-lp-common-inner__inner">
              <h3 class="power-lp-solution__price-title">ご利用イメージ</h3>
              <p class="power-lp-solution__price-caption">image</p>
              <div class="power-lp-solution__price-content">
                <p class="power-lp-solution__price-ex">費用例</p>
                <ul class="power-lp-solution__price-lists">
                  <li class="power-lp-solution__price-list">
                    <p class="power-lp-solution__price-list-title">品名</p>
                    <p class="power-lp-solution__price-text">定額アプリ開発</p>
                  </li>
                  <li class="power-lp-solution__price-list">
                    <p class="power-lp-solution__price-list-title">数量</p>
                    <p class="power-lp-solution__price-text --number">3</p>
                  </li>
                  <li class="power-lp-solution__price-list">
                    <p class="power-lp-solution__price-list-title">単位</p>
                    <p class="power-lp-solution__price-text">アプリ</p>
                  </li>
                  <li class="power-lp-solution__price-list">
                    <p class="power-lp-solution__price-list-title">金額（円）</p>
                    <p class="power-lp-solution__price-text --number">150,000</p>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <p class="power-lp-solution-contact__text">サービスの詳細については、こちらから資料をダウンロードいただくか、<br class="u-desktop">お問い合わせフォームより、お気軽にお問い合わせください。</p>
          <div class="power-lp-solution-contact__btns">
            <div class="power-lp-solution-contact__btn">
              <a href="">
              <picture>
                  <source srcset="<?php echo get_template_directory_uri() ?>/images/lp/download_btn.png" media="(min-width: 768px)" type="image/png">
                  <img src="<?php echo get_template_directory_uri() ?>/images/lp/download_btn_sp.png" alt='' width='' height='' loading='lazy'>
                </picture>
              </a>
            </div>
            <div class="power-lp-solution-contact__btn">
              <a href="">
              <picture>
                  <source srcset="<?php echo get_template_directory_uri() ?>/images/lp/info_btn.png" media="(min-width: 768px)" type="image/png">
                  <img src="<?php echo get_template_directory_uri() ?>/images/lp/info_btn_sp.png" alt='' width='' height='' loading='lazy'>
                </picture>
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="power-lp-t_worrise" class="power-lp-d_worrise">
      <div class="power-lp-d_worrise__wrapper">
        <div class="power-lp-d_worrise__inner power-lp-common-inner__inner">
          <h3 class="power-lp-section-title -orange">Power Platform<br>テクニカルサポートサービス</h3>
          <div class="power-lp-d_worrise__img">
          <picture>
                <source srcset="<?php echo get_template_directory_uri() ?>/images/lp/t_worrise.png" media="(min-width: 768px)" type="image/png">
                <img src="<?php echo get_template_directory_uri() ?>/images/lp/t_worrise_sp.png" alt='' width='' height='' loading='lazy'>
            </picture>
          </div>
        </div>

      </div>
    </section>

    <section class="power-lp-solution -orange">
      <div class="power-lp-solution__wrapper">
        <div class="power-lp-solution__inner power-lp-common-inner">
          <div class="power-lp-solution__content not-border">
            <div class="power-lp-solution__title -orange">
            <picture>
                <source srcset="<?php echo get_template_directory_uri() ?>/images/lp/t_solution_title.png" media="(min-width: 768px)" type="image/png">
                <img src="<?php echo get_template_directory_uri() ?>/images/lp/t_solution_title_sp.png" alt='' width='' height='' loading='lazy'>
            </picture>
            </div>
            <p class="power-lp-solution__text power-lp-common-inner__inner">社内で開発・運用を行われたいお客さま向けサービスとなります。サービス説明Power Platformを開発・運用する上でのサポート業務を提供します。開発QAや、仕様、技術の検討、アプリ公開手順の考案など、経験豊富な社員がサポート致します。弊社だけでは解決できない場合はMicrosoft Solutionパートナーを活かし、Microsoft社にも協力を仰ぎます。</p>
            <div class="power-lp-solution__flow">
            <picture>
                <source srcset="<?php echo get_template_directory_uri() ?>/images/lp/t_solution_flow.png" media="(min-width: 768px)" type="image/png">
                <img src="<?php echo get_template_directory_uri() ?>/images/lp/t_solution_flow_sp.png" alt='' width='' height='' loading='lazy'>
            </picture>
            </div>
            <div class="power-lp-solution__image power-lp-common-inner__inner">
              <h3 class="power-lp-solution__price-title">ご利用イメージ</h3>
              <p class="power-lp-solution__price-caption">image</p>
              <div class="power-lp-solution__price-flow">
                <picture>
                  <source srcset="<?php echo get_template_directory_uri() ?>/images/lp/t_solution_image.png" media="(min-width: 768px)" type="image/png">
                  <img src="<?php echo get_template_directory_uri() ?>/images/lp/t_solution_image_sp.png" alt='' width='' height='' loading='lazy'>
                </picture>
              </div>
              <div class="power-lp-solution__price-content">
                <p class="power-lp-solution__price-ex -blue">費用例</p>
                <ul class="power-lp-solution__price-lists -orange">
                  <li class="power-lp-solution__price-list">
                    <p class="power-lp-solution__price-list-title">品名</p>
                    <p class="power-lp-solution__price-text">テクニカルサポート<br>サービス</p>
                  </li>
                  <li class="power-lp-solution__price-list">
                    <p class="power-lp-solution__price-list-title">数量</p>
                    <p class="power-lp-solution__price-text --number">1</p>
                  </li>
                  <li class="power-lp-solution__price-list">
                    <p class="power-lp-solution__price-list-title">単位</p>
                    <p class="power-lp-solution__price-text">月</p>
                  </li>
                  <li class="power-lp-solution__price-list">
                    <p class="power-lp-solution__price-list-title">金額（円）</p>
                    <p class="power-lp-solution__price-text --number">300,000</p>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="power-lp-faq">
      <div class="power-lp-faq__inner">
        <h3 class="power-lp-section-title">よくある質問</h3>
        <p class="power-lp-section-sub-title">faq</p>
        <ul class="power-lp-faq__list power-lp-faq-list">
          <li class="power-lp-faq-list__item">
            <p class="power-lp-faq-list__item-question js-power-lp-faq-question"><span>Q</span>依頼時に定額料金以外に別途料金は発生しますか？</p>
            <p class="power-lp-faq-list__item-answer"><span>A</span>発生致しません。</p>
          </li>
          <li class="power-lp-faq-list__item">
            <p class="power-lp-faq-list__item-question js-power-lp-faq-question"><span>Q</span>[定額アプリ開発サービス]<br class="u-mobile">開発したいアプリのイメージ提供は<br class="u-desktop">どのように行えばよいですか？</p>
            <p class="power-lp-faq-list__item-answer"><span>A</span>弊社からご提供するテンプレート<br class="u-mobile">に記載をお願いいたします。</p>
          </li>
          <li class="power-lp-faq-list__item">
            <p class="power-lp-faq-list__item-question js-power-lp-faq-question"><span>Q</span>最低契約期間はありますか？</p>
            <p class="power-lp-faq-list__item-answer"><span>A</span>半年になります。</p>
          </li>
        </ul>
      </div>
    </section>

</main>

<section id="contact" class="l-section-container -page-section-right section-about">
<div class="adjust-width">
<h2 class="page-section-title"><span class="en">Contact</span><span class="ja">お問い合わせ</span></h2>
<div class="about-block">
<h2 style="text-align: center;"><span style="color: #4372c1;"></span></h2>
<?php the_content(); ?>
</div>
</div>
</section>

<?php get_footer(); ?>