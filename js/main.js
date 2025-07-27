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

const swiper1 = new Swiper('.infinity-slider .slider', {
    speed: 5000,
    loop: true,
    allowTouchMove: false,
    centeredSlides: true,
    autoplay: { delay: 0 },
    breakpoints: {
        0: { slidesPerView: 1, spaceBetween: 15 },
        600: { slidesPerView: 2, spaceBetween: 24 },
        1200: { slidesPerView: 3, spaceBetween: 34 },
        1500: { slidesPerView: 4, spaceBetween: 42 }
    },
});


// _____レスポンシブの375px未満のviewport画面幅を固定_______

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


// _______________ページ内スムーススクロール＿＿＿＿＿＿＿_____

document.addEventListener("DOMContentLoaded", function () {
    const buttons = document.querySelectorAll(".details-btn");

    buttons.forEach(button => {
        button.addEventListener("click", function () {
            const targetId = this.getAttribute("data-target");
            const targetElement = document.querySelector(targetId);

            if (targetElement) {
                window.scrollTo({
                    top: targetElement.offsetTop,
                    behavior: "smooth"
                });
            }
        });
    });
});

// _______________アコーディオン＿＿＿＿＿＿＿＿＿

document.addEventListener("DOMContentLoaded", function () {
    const headers = document.querySelectorAll(".accordion-header");

    headers.forEach(header => {
        header.addEventListener("click", function () {
            const content = this.nextElementSibling;
            const icon = this.querySelector(".toggle-icon");

            this.classList.toggle("active");

            if (content.style.display === "block") {
                content.style.display = "none";
                icon.textContent = "+";
            } else {
                content.style.display = "block";
                icon.textContent = "−";
            }
        });
    });
});


// _________________フェードアップ＿＿＿＿＿＿＿＿＿＿＿＿


document.addEventListener("DOMContentLoaded", () => {
    // headerとfooter以外のbody内の要素に.fade-upを付与
    document.querySelectorAll("body > *:not(header):not(footer)").forEach(el => {
        el.classList.add("fade-up");
    });

    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add("show");
            }
        });
    });

    document.querySelectorAll(".fade-up").forEach(el => observer.observe(el));
});



// ___________________MVの写真切り替え＿＿＿＿＿＿＿＿＿＿＿＿＿＿


document.addEventListener("DOMContentLoaded", function () {
    const slides = document.querySelectorAll(".mv-slide");
    let current = 0;

    setInterval(() => {
        slides[current].classList.remove("active");
        current = (current + 1) % slides.length;
        slides[current].classList.add("active");
    }, 5000); // 5秒ごとに切り替え
});


// ________________2つ目のスライダー＿＿＿＿＿＿＿＿＿


const swiper2 = new Swiper('.limited-slider', {
    speed: 800,
    loop: true,
    centeredSlides: false,
    autoplay: {
        delay: 4000, // 4秒ごとに切り替え
        disableOnInteraction: false // ユーザー操作後も自動再開
    },
    navigation: {
        nextEl: '.page-button-white__right',
        prevEl: '.page-button-white__left'
    },

    breakpoints: {
        0: { slidesPerView: 1.4, spaceBetween: 20 },
        600: { slidesPerView: 2, spaceBetween: 24 },
        1024: { slidesPerView: 3, spaceBetween: 34 },
        1400: { slidesPerView: 3.5, spaceBetween: 30 },
        1500: { slidesPerView: 4, spaceBetween: 30 }
    }
});

// _______________page-staff　aside追従＿＿＿＿＿＿

document.addEventListener('DOMContentLoaded', function () {
    const items = document.querySelectorAll('.a-side-list li');

    function getSections() {
        const titles = document.querySelectorAll('.page-staff__title');
        return Array.from(titles).map(el => ({
            id: el.id,
            offsetTop: el.getBoundingClientRect().top + window.pageYOffset
        }));
    }

    window.addEventListener('scroll', function () {
        const sections = getSections();
        const scrollPos = window.pageYOffset + 250;
        let currentId = sections[0].id;

        for (const sec of sections) {
            if (scrollPos >= sec.offsetTop) currentId = sec.id;
        }

        items.forEach(li => {
            li.classList.toggle('active', li.dataset.target === currentId);
        });
    });
});

//   ＿＿＿＿＿＿＿＿＿スクロール後ヘッダーが降りてくる＿＿＿＿＿＿


document.addEventListener('DOMContentLoaded', () => {
    const header = document.querySelector('.header');
    const mv = document.querySelector('.mv');

    if (!header || !mv) return;

    window.addEventListener('scroll', () => {
        const scrollTop = window.scrollY;
        const mvHeight = mv.offsetHeight;

        if (scrollTop >= mvHeight) {
            header.classList.add('header--sticky');
            document.body.style.marginTop = header.offsetHeight + 'px';
        } else {
            header.classList.remove('header--sticky');
            document.body.style.marginTop = '0';
        }
    });
});