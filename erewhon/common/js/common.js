var isSP = function() {
	return $('.sp_view:visible').length != 0;
};

// accordion
$(function() {
	$('.accordion').click(function() {
		$(this).next().slideToggle();
		$(this).toggleClass('_active_');
	});
	if (isSP()) {
		$('.accordion-sp').click(function() {
			$(this).next().slideToggle();
			$(this).toggleClass('_active_');
		});
	}
});


/* スクロール後hraderにclass付与 */
$(function() {
  var $win = $(window),
      $header = $('.header'),
      animationClass = 'is-animation';
	
		$win.on('load scroll', function() {
			var value = $(this).scrollTop();
			if ( value > 100 ) {
				$header.addClass(animationClass);
			} else {
				$header.removeClass(animationClass);
			}
		});
});


// gnavi
$(function () {
  $('.header-menu').click(function () {
    $(this).toggleClass('_active_');
    $('body').toggleClass('_gnav-show_');
  });

  $('.gnav__item a[href*="#"],.gnav-btn a[href*="#"]').on('click', function () {
    $(".header-menu").removeClass('_active_');
    $("body").removeClass('_gnav-show_');
  });
});

/* アンカーリンク */
const header = $('.header').outerHeight();
$('a[href^="#"]').on('click', function() {
		const speed = 500,
				href = $(this).attr("href"),
				target = $(href == "#" || href == "" ? "html" : href),
				position = target.offset().top;
	$("html, body").animate({ scrollTop: position }, speed, "swing");
	return false;
});
$(window).on('load', function() {
	let urlHash = location.hash;
	if (urlHash) {
		let position = $(urlHash).offset().top;
		$('html, body').animate({ scrollTop: position }, 0);
	}
});

// gnavi アクティブ
document.querySelectorAll('.hnav__link').forEach(link => {
  if(link.href === window.location.href){
    link.classList.add('active')
  }
})

// Tel link
const ua = navigator.userAgent.toLowerCase(),
  isMobile = /iphone/u.test(ua) || /android(?<test>.+)?mobile/u.test(ua);

if (!isMobile) {
  $('a[href^="tel:"]').on("click", function (e) {
    e.preventDefault();
  });
}

// animation
$(function () {
    // ウィンドウをスクロールしたら…
    $(window).scroll(function () {
        // ウィンドウの高さを取得
        const wHeight = $(window).height();
        // スクロールした量を取得
        const wScroll = $(window).scrollTop();
            // それぞれのblockクラスに対して…
            $(".fade-up").each(function () {
                // それぞれのblockクラスのウィンドウからの高さを取得
                const bPosition = $(this).offset().top;
                // スクロールした量が要素の高さを上回ったら
                // その数値にウィンドウの高さを引き、最後に200pxを足す
            if (wScroll > bPosition - wHeight + 200) {
                $(this).addClass("is-active");
            }
        });
    });
});

// entry-btn
//スクロールした際の動きを関数でまとめる
function PageTopAnime() {
		var scroll = $(window).scrollTop(); //スクロール値を取得
		if (scroll >= 200){//200pxスクロールしたら
			$('.entry-btn').removeClass('DownMove');		// DownMoveというクラス名を除去して
			$('.entry-btn').addClass('UpMove');			// UpMoveというクラス名を追加して出現
		}else{//それ以外は
			if($('.entry-btn').hasClass('UpMove')){//UpMoveというクラス名が既に付与されていたら
				$('.entry-btn').removeClass('UpMove');	//  UpMoveというクラス名を除去し
				$('.entry-btn').addClass('DownMove');	// DownMoveというクラス名を追加して非表示
			}
		}
		
		var wH = window.innerHeight; //画面の高さを取得
		var footerPos =  $('.footer').offset().top; //footerの位置を取得
		if(scroll+wH >= (footerPos+30)) {
			var pos = (scroll+wH) - footerPos+30 //スクロールの値＋画面の高さからfooterの位置＋10pxを引いた場所を取得し
			$('.entry-btn').css('bottom',pos);	//.entry-btnに上記の値をCSSのbottomに直接指定してフッター手前で止まるようにする
		}else{//それ以外は
			if($('.entry-btn').hasClass('UpMove')){//UpMoveというクラス名がついていたら
				$('.entry-btn').css('bottom','30px');// 下から10pxの位置にページリンクを指定
			}
		}
	
	if (window.matchMedia('(max-width: 768px)').matches) {
		if(scroll+wH >= (footerPos+15)) {
			var pos = (scroll+wH) - footerPos+15 
			$('.entry-btn').css('bottom',pos);	
		}else{
			if($('.entry-btn').hasClass('UpMove')){
				$('.entry-btn').css('bottom','15px');
			}
		}
	} else {
		// それ以外の処理
	}
}

// 画面をスクロールをしたら動かしたい場合の記述
$(window).scroll(function () {
	PageTopAnime();/* スクロールした際の動きの関数を呼ぶ*/
});

// ページが読み込まれたらすぐに動かしたい場合の記述
$(window).on('load', function () {
	PageTopAnime();/* スクロールした際の動きの関数を呼ぶ*/
});

