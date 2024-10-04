jQuery(document).on('ready', function () {
    // Открыть модальное окно footer header
    document.getElementById("open-modal-btn-header").addEventListener("click", function() {
        document.getElementById("my-modal").classList.add("open")
    })
    document.getElementById("open-modal-btn-footer").addEventListener("click", function() {
        document.getElementById("my-modal").classList.add("open")
    })	
    document.getElementById("open-modal-btn-footer-mini").addEventListener("click", function() {
        document.getElementById("my-modal").classList.add("open")
    })

    // Закрыть модальное окно footer header
    document.getElementById("close-my-modal-btn").addEventListener("click", function () {
        document.getElementById("my-modal").classList.remove("open")
    })

    window.addEventListener('keydown', (e) => {
        if (e.key === "Escape") {
            document.getElementById("my-modal").classList.remove("open")
        }
    });
    document.querySelector("#my-modal .modal__box").addEventListener('click', event => {
        event._isClickWithInModal = true;
    });
    document.getElementById("my-modal").addEventListener('click', event => {
        if (event._isClickWithInModal) return;
        event.currentTarget.classList.remove('open');
    });

   

    var swiper1 = new Swiper('.swiper1', {
        paginationClickable: true,
        slidesPerView: 1,
        loop: true,
        navigation: {
            nextEl: '.swiper-button-next-project',
            prevEl: '.swiper-button-prev-project',
        },
        pagination: {
            el: ".swiper-pagination",
        },
    });

    var swiper2 = new Swiper('.swiper2', {
        paginationClickable: true,
        slidesPerView: 1,
        loop: true,
        navigation: {
            nextEl: '.swiper-button-next-2',
            prevEl: '.swiper-button-prev-2',
        },
        pagination: {
            el: ".swiper-pagination",
        },
    });

    var swiper3 = new Swiper('.swiperProject', {
        paginationClickable: true,
        slidesPerView: 1,
        loop: true,
        navigation: {
            nextEl: '.swiper-button-next-project',
            prevEl: '.swiper-button-prev-project',
        },
        pagination: {
            el: ".swiper-pagination",
        },
    });
});





jQuery(document).on('ready', function () {
    $('input[type="tel"]').mask("+7 (999) 999-99-99");
});


jQuery(document).on('ready', function () {
    //БУРГЕР
    const menu = document.querySelector(".menu-list");
    const hamburger = document.querySelector(".burger-checkbox");
    const close = document.querySelector(".close");
    function toggleMenu() {
        if (menu.classList.contains("burger-open")) {
            menu.classList.remove("burger-open");
            document.getElementById("burger-checkbox").checked = false;
        } else {
            menu.classList.add("burger-open");
        }
    }
    hamburger.addEventListener("click", toggleMenu);
    close.addEventListener("click", toggleMenu);
});

$(document).ready(function() {
    $('.gallery-item a').attr('data-fancybox', 'gallery');
});


