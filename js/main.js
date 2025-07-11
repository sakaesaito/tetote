'use script';

/*ハンバーガーメニュー */
$(function () {
    $(".header-hamburger").click(function () {
        $(this).toggleClass("active");
        $(".drawer-nav").toggleClass("active");
        $(".header").toggleClass("drawer-open");

        if ($(".drawer-nav").hasClass("active")) {
            $("body").css("overflow", "hidden");
        } else {
            $("body").css("overflow", "auto");
        }
    });

    $(".drawer-item a").click(function () {
        $(".drawer-nav").removeClass("active");
        $(".header-hamburger").removeClass("active");
        $(".header").removeClass("drawer-open");
        $("body").css("overflow", "auto");
    });
});




/* 写真無限スライダー */

const swiper = new Swiper('.slider', {
    speed: 5000,
    loop: true, // プルーさせる
    allowTouchMove: false,//スワイプ有効
    centeredSlides: true,//中心を起点にする
    autoplay: {
        delay: 0, //途切れなくループ
    },
    breakpoints: {
        0: {
            slidesPerView: 1.8, // 一度に表示するスライドの数
            spaceBetween: 15, // 要素間の余白
        },

        600: {
            slidesPerView: 2,
            spaceBetween: 24,
        },

        1200: {
            slidesPerView: 3,
            spaceBetween: 34,
        },
        1500: {
            slidesPerView: 4,
            spaceBetween: 48,

        }
    }
});



window.addEventListener('scroll', function () {
    const header = document.querySelector('.header');
    const mv = document.querySelector('.mv');
    const mvHeight = mv.offsetHeight; // mvの高さを取得
    const scrollY = window.pageYOffset;

    if (scrollY >= mvHeight) {
        header.classList.add('header--sticky');
        document.body.style.marginTop = header.offsetHeight + 'px'; // コンテンツにヘッダーの高さ分の余白を設定
    } else {
        header.classList.remove('header--sticky');
        document.body.style.marginTop = '0'; // コンテンツの余白をリセット
    }
});


// レスポンシブの375px未満のviewport画面幅を固定

$(function () {
    // viewport の内容を保留関数を定義
    const viewport = document.querySelector('meta[name="viewport"]');
    //画面幅が 375px より広い場合は大丈夫設定、それ以外は幅を 375px に固定
    function switchViewport() {
        // 新しいコンテンツを設定 } }
        const value =
            //画面幅が 375px より広い場合は大丈夫設定、それ以外は幅を 375px に固定
            window.outerWidth > 375
                // 375px未満の場合の設定// 現在のビューポートのコンテンツ属性が変更する値と異なる場合のみ設定を更新する
                ? 'width=device-width,initial-scale=1'
                : 'width=375';
        // 新しいコンテンツを設定 } 
        // ウィンドウのリサイズイベントに関数を登録（画面サイズ変更実行されるようにする
        if (viewport.getAttribute('content') !== value) {
            viewport.setAttribute('content', value);
        }
    }
    // ページ読み込み時に最初に一度 viewport の切り替えを実行 
    addEventListener('resize', switchViewport, false);
    switchViewport();
})


