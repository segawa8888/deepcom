$(document).ready(function() {
	$('.drawer').drawer();
});


var wow = new WOW(
  {
    boxClass:     'wow',      // animated element css class (default is wow)
    animateClass: 'animated', // animation css class (default is animated)
    offset:       0,          // distance to the element when triggering the animation (default is 0)
    mobile:       true,       // trigger animations on mobile devices (default is true)
    live:         true,       // act on asynchronously loaded content (default is true)
    callback:     function(box) {
      // the callback is fired every time an animation is started
      // the argument that is passed in is the DOM node being animated
    },
    scrollContainer: null // optional scroll container selector, otherwise use window
  }
);
wow.init();


$(function() {

	var headNav = $("body");
	//scrollだけだと読み込み時困るのでloadも追加
	$(window).on('load scroll', function () {
		//現在の位置が500px以上かつ、クラスfixedが付与されていない時
		if($(this).scrollTop() > 100 && headNav.hasClass('scrolled') == false) {
			//クラスfixedを付与
			headNav.addClass('scrolled');
		}
		//現在の位置が300px以下かつ、クラスfixedが付与されている時にfixedを外す
		else if($(this).scrollTop() < 100 && headNav.hasClass('scrolled') == true){
			headNav.removeClass('scrolled');
		}
	});

//ページ内スクロール（ページ内リンク、画面遷移後のページ内リンクに対応）
	if (window.matchMedia( '(max-width: 1079px)' ).matches) {
	//URLのハッシュ値を取得
	var urlHash = location.hash;
	//ハッシュ値があればページ内スクロール
	if(urlHash) {
		//スクロールを0に戻す
		$('body,html').stop().scrollTop(0);
		setTimeout(function () {
			//ロード時の処理を待ち、時間差でスクロール実行
			scrollToAnker(urlHash) ;
		}, 100);
	}

	//通常のクリック時
	$('a[href^="#"], area[href^="#"]').click(function() {
		//ページ内リンク先を取得
		var href= $(this).attr("href");
		//リンク先が#か空だったらhtmlに
		var hash = href == "#" || href == "" ? 'html' : href;
		//スクロール実行
		scrollToAnker(hash);
		//リンク無効化
		return false;
	});

	// 関数：スムーススクロール
	// 指定したアンカー(#ID)へアニメーションでスクロール
	function scrollToAnker(hash) {
		var target = $(hash);
		var position = target.offset().top - 50;
		$('body,html').stop().animate({scrollTop:position}, 500);
	}
	//for pc
	} else {
	//URLのハッシュ値を取得
	var urlHash = location.hash;
	//ハッシュ値があればページ内スクロール
	if(urlHash) {
		//スクロールを0に戻す
		$('body,html').stop().scrollTop(0);
		setTimeout(function () {
			//ロード時の処理を待ち、時間差でスクロール実行
			scrollToAnker(urlHash) ;
		}, 100);
	}

	//通常のクリック時
	$('a[href^="#"], area[href^="#"]').click(function() {
		//ページ内リンク先を取得
		var href= $(this).attr("href");
		//リンク先が#か空だったらhtmlに
		var hash = href == "#" || href == "" ? 'html' : href;
		//スクロール実行
		scrollToAnker(hash);
		//リンク無効化
		return false;
	});

	// 関数：スムーススクロール
	// 指定したアンカー(#ID)へアニメーションでスクロール
	function scrollToAnker(hash) {
		var target = $(hash);
		var position = target.offset().top - 80;
		$('body,html').stop().animate({scrollTop:position}, 500);
	}
	};


	var topBtn = $('.pagetop');
	topBtn.hide();
	//スクロールが100に達したらボタン表示
	$(window).scroll(function () {
		if ($(this).scrollTop() > 100) {
			topBtn.fadeIn();
		} else {
			topBtn.fadeOut();
		}
	});



});


