// 100vhをios safariでもキレイに表示させる
$(function () {
	var wHeight = $(window).height();
	$(".js-100vh").height(wHeight);
});
//MV用　100vh
$(window).on('load resize', function () {
	var wWidth = $(window).width();
	var wHeight = $(window).height();
	$(".js-100vh").height(wHeight);

  var wSP = 1024;
	var header_height;
  if (wWidth <= wSP) {
		header_height = 60;
  } else {
    header_height = 100;
	}
	var mvHeight = wHeight - header_height;
	$(".js-100vh.p-main-header, .js-100vh .swiper-slide").height(mvHeight);
});

//ローダー
$(window).on("load", function () {
  setTimeout(function () {
    $(".js-loading").addClass("is-loaded");
  }, 300);
  setTimeout(function () {
    if (!$(".js-loading").hasClass("is-loaded")) {
      $(".js-loading").addClass("is-loaded");
    }
  }, 5000);
});

var state = false;
$(".p-hum").on("click touch", function () {
  $(".p-hum-line, .p-hum-wrap").toggleClass("js-open");
	$(".p-hum-gnav").fadeToggle(200);
  if (state == false) {
		$("body").addClass("is-fixed");
    state = true;
  } else {
		$("body").removeClass("is-fixed");
    state = false;
  }
});
//メニュークリック時、ハンバーガーメニューを閉じる
$(".p-hum-gnav-link").click(function () {
  $(".p-hum").trigger('click');
});


//スライダー
//メインビジュアル
var swiper1 = new Swiper(".slider1", {
  loop: true,
  speed: 800,
  effect: "slide", //slide,fade,cube,coverflow,flip
  autoplay: {
    delay: 4000,
    disableOnInteraction: true, //スワイプされたら自動再生停止
  },
});
//p-home-facility
var swiper2 = new Swiper(".slider2", {
  loop: true,
  speed: 800,
  effect: "slide", //slide,fade,cube,coverflow,flip
  autoplay: {
    delay: 2000,
    disableOnInteraction: true, //スワイプされたら自動再生停止
  },
  pagination: {
    el: ".swiper-pagination",
    type: "bullets",
    clickable: true,
  },
  slidesPerView: 1,
  centeredSlides: true,
  spaceBetween: 10,
  breakpoints: {
    768: {
      slidesPerView: 3.01,
      spaceBetween: 25,
    },
  },
});
//p-home-blog
var swiper3 = new Swiper(".slider3", {
  speed: 400,
  effect: "slide", //slide,fade,cube,coverflow,flip
  navigation: {
    prevEl: ".swiper-button-prev",
    nextEl: ".swiper-button-next",
  },
  slidesPerView: 1,
  spaceBetween: 10,
  breakpoints: {
    768: {
      slidesPerView: 3,
      spaceBetween: 25,
    },
  },
});


//アニメーション
$(window).on("load scroll", function () {
  $(".js-animate").each(function () {
    var objPos = $(this).offset().top; //対象の画面上部からの距離
    var scroll = $(window).scrollTop(); //スクロールの量
    var windowHeight = $(window).height(); //ウィンドウの高さ
    if (scroll > objPos - windowHeight / 1.15) {
      $(this).addClass("is-animated");
    }
  });
});

//スムーススクロール ページ遷移
$(window).on("load", function () {
  var headerHeight = $(".l-header").outerHeight();
  var urlHash = location.hash;
  if (urlHash) {
    $("body,html").stop().scrollTop(0);
    setTimeout(function () {
      var target = $(urlHash);
      var position = target.offset().top - headerHeight;
      $("body,html").stop().animate({ scrollTop: position }, 500, "swing");
    }, 200);
  }
  $('a[href^="#"]').click(function () {
    var href = $(this).attr("href");
    var target = $(href);
    var position = target.offset().top - headerHeight;
    $("body,html").stop().animate({ scrollTop: position }, 500);
  });
});

//アコーディオン
$(".p-faq-item").click(function () {
  var angle = $(this).find(".fa-angle-down"); //矢印マーク
  var question = $(this).find(".p-faq-item-question");
  var answer = $(this).find(".p-faq-item-answer");
  if (answer.hasClass("is-open")) {
    question.removeClass("is-open");
    answer.removeClass("is-open");
    answer.slideUp(300);
    angle.removeClass("rotate-fa-angle");
  } else {
    question.addClass("is-open");
    answer.addClass("is-open");
    answer.slideDown(300);
    angle.addClass("rotate-fa-angle");
  }
});

$(".p-home-faq-item").click(function () {
  var angle = $(this).find(".fa-angle-down"); //矢印マーク
  var question = $(this).find(".p-home-faq-item-question");
  var answer = $(this).find(".p-home-faq-item-answer");
  if (answer.hasClass("is-open")) {
    question.removeClass("is-open");
    answer.removeClass("is-open");
    answer.slideUp(300);
    angle.removeClass("rotate-fa-angle");
  } else {
    question.addClass("is-open");
    answer.addClass("is-open");
    answer.slideDown(300);
    angle.addClass("rotate-fa-angle");
  }
});
