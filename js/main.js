'use strict';

//   ＿＿＿＿＿＿＿＿＿スクロール後ヘッダーが降りてくる＿＿＿＿＿＿

document.addEventListener('DOMContentLoaded', function () {
    const header = document.querySelector('.header');
    const mv = document.querySelector('.mv') || document.querySelector('.sub-mv');
    const hamburger = document.querySelector('.header-hamburger');
    const drawer = document.querySelector('.drawer-nav');
    const hamburgerSpans = document.querySelectorAll('.header-hamburger span');
    const menuText = document.querySelector('.header-hamburger-item');
    const whiteLogo = document.querySelector('.logo-white');
    const blackLogo = document.querySelector('.logo-black');

    if (!header || !hamburger || !drawer) return;

    const isHome = document.body.classList.contains('home');

    if (isHome && mv) {
        window.addEventListener('scroll', function () {
            const scrollY = window.pageYOffset;
            const headerHeight = header.offsetHeight;

            if (scrollY >= 100) {
                header.classList.add('header--sticky');
                header.style.backgroundColor = '#fff';
                document.body.style.marginTop = headerHeight + 'px';
                if (whiteLogo) whiteLogo.classList.add('hidden');
                if (blackLogo) blackLogo.classList.remove('hidden');
                hamburgerSpans.forEach(span => span.style.backgroundColor = '#222');
                if (menuText) menuText.style.color = '#222';
            } else {
                header.classList.remove('header--sticky');
                header.style.backgroundColor = 'transparent';
                document.body.style.marginTop = '0';
                if (!drawer.classList.contains('active')) {
                    if (whiteLogo) whiteLogo.classList.remove('hidden');
                    if (blackLogo) blackLogo.classList.add('hidden');
                    hamburgerSpans.forEach(span => span.style.backgroundColor = '#fff');
                    if (menuText) menuText.style.color = '#fff';
                }
            }
        });
    } else {
        // 下層ページ
        header.classList.add('header--sticky');
        header.style.backgroundColor = '#fff';
        if (whiteLogo) whiteLogo.classList.add('hidden');
        if (blackLogo) blackLogo.classList.remove('hidden');
        hamburgerSpans.forEach(span => span.style.backgroundColor = '#222');
        if (menuText) menuText.style.color = '#222';
    }

    // ドロワーの開閉でロゴと色を切り替え
    hamburger.addEventListener('click', function () {
        drawer.classList.toggle('active');
        hamburger.classList.toggle('active');
        header.classList.toggle('drawer-open');

        const drawerOpen = drawer.classList.contains('active');

        if (drawerOpen) {
            // ドロワー開いたら黒ロゴに
            if (whiteLogo) whiteLogo.classList.add('hidden');
            if (blackLogo) blackLogo.classList.remove('hidden');
            header.style.backgroundColor = '#fff';
            hamburgerSpans.forEach(span => span.style.backgroundColor = '#222');
            if (menuText) menuText.style.color = '#222';
            document.body.style.overflow = 'hidden';
        } else {
            // ドロワー閉じたらスクロール位置に応じて戻す
            const scrollY = window.pageYOffset;
            if (isHome && scrollY < 100) {
                if (whiteLogo) whiteLogo.classList.remove('hidden');
                if (blackLogo) blackLogo.classList.add('hidden');
                hamburgerSpans.forEach(span => span.style.backgroundColor = '#fff');
                if (menuText) menuText.style.color = '#fff';
            }
            document.body.style.overflow = 'auto';
        }
    });
});



/* 無限スライダー */
const slider1 = new Swiper('.slider1', {
    loop: true,
    speed: 5000,
    autoHeight: true,
    slidesPerView: 1.2,
    spaceBetween: 16,
    autoplay: {
        delay: 0,
        disableOnInteraction: false,
    },
    breakpoints: {
        1000: { slidesPerView: 2, spaceBetween: 22 },
        1400: { slidesPerView: 2.8, spaceBetween: 34 },
        1600: { slidesPerView: 4, spaceBetween: 32 },
    },
});



/* STAFFスライダー */

document.addEventListener('DOMContentLoaded', function () {
    const staffSliderEl = document.querySelector('.staff-sec-inner.swiper02');
    if (staffSliderEl) {
        new Swiper(staffSliderEl, {
            loop: true,
            speed: 600,
            autoHeight: false,
            slidesPerView: 1,
            spaceBetween: 20,
            allowTouchMove: true,
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            breakpoints: {
                640: { slidesPerView: 2, spaceBetween: 24 },
                1200: { slidesPerView: 2.5, spaceBetween: 28 },
                1400: { slidesPerView: 3, spaceBetween: 32 },
            },
            watchSlidesProgress: true,
            watchOverflow: true,
            preloadImages: false,
            lazy: true,
        });
    }
});


// _____レスポンシブの375px未満のviewport画面幅を固定_____

(function ($) {
    $(function () {
        const viewport = document.querySelector('meta[name="viewport"]');

        function switchViewport() {
            const value = window.outerWidth > 375
                ? 'width=device-width,initial-scale=1'
                : 'width=375';

            if (viewport.getAttribute('content') !== value) {
                viewport.setAttribute('content', value);
            }
        }

        addEventListener('resize', switchViewport, false);
        switchViewport();
    });
})(jQuery);


// ________ページ内スムーススクロール＿＿＿＿＿＿

document.addEventListener("DOMContentLoaded", function () {
    if (!document.body.classList.contains('front-page')) return;
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


jQuery(function ($) {
    $('.accordion-title').on('click', function () {
        const $header = $(this).closest('.accordion-title');
        $(this).toggleClass('is-active');
        $(this).next().slideToggle();
    });
});


// _________________フェードアップ＿＿＿＿＿＿＿＿＿＿＿＿



document.addEventListener("DOMContentLoaded", () => {
    const isTop = document.body.classList.contains('home') || document.body.classList.contains('front-page');
    if (!isTop) return;
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
    if (!document.body.classList.contains("home")) return;

    const slides = document.querySelectorAll(".mv-slide");
    let current = 0;

    setInterval(() => {
        slides[current].classList.remove("active");
        current = (current + 1) % slides.length;
        slides[current].classList.add("active");
    }, 5000); // 5秒ごとに切り替え
});



// _______________page-staff aside追従＿＿＿＿＿＿

document.addEventListener('DOMContentLoaded', function () {
    const items = document.querySelectorAll('.a-side-list li');

    function getSections() {
        const titles = document.querySelectorAll('.page-staff-title');
        return Array.from(titles).map(el => ({
            id: el.id,
            offsetTop: el.getBoundingClientRect().top + window.scrollY
        }));
    }

    window.addEventListener('scroll', function () {
        const sections = getSections();
        const scrollPos = window.scrollY + 250;

        if (sections.length === 0) return;

        let currentId = sections[0].id;

        for (const sec of sections) {
            if (scrollPos >= sec.offsetTop) currentId = sec.id;
        }

        items.forEach(li => {
            li.classList.toggle('active', li.dataset.target === currentId);
        });
    });
});


// ________送信フォーム全入力で送信ボタン反映＿＿＿＿＿＿

jQuery(function($) {
    const $form = $('#form');  
const $submitBtn = $('#js-submit')
$('#form input,#form textarea, #form select').on('change', function () {
    if (
        $('#form input[type="text"]').val() .trim()!== "" &&
        $('#form input[type="email"]').val() .trim()!== "" &&
        $('#form input[type="tel"]').val() .trim()!== "" &&
        $('#form input[type="radio"]:checked').length > 0 &&
        $('#form textarea').val() !== "" &&
        $('#form select').val() !== "" &&
        $('#form privacy-check').prop('checked') === true
    ) {
        $submitBtn.prop('disabled', false);

    } else {
        $submitBtn.prop('disabled', true);
    }
});
});
