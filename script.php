<?php
// For header 

// Khi sử dụng PHP trong các môi trường web, các tác vụ tương tự với DOM cần phải được xử lý thông qua mã HTML hoặc mã JavaScript chứ không phải PHP.

// for home pages 
// Đoạn mã dưới đây sẽ chứa mã HTML và các đoạn mã JavaScript. 

?>

<div id="menu-btn"></div>
<div class="navbar"></div>
<div class="header"></div>

<script>
    let menu = document.querySelector('#menu-btn');
    let navbar = document.querySelector('.navbar');

    menu.onclick = () =>{
        menu.classList.toggle('fa-times');
        navbar.classList.toggle('active');
    } 

    // for window scroll 

    window.onscroll = () =>{
        menu.classList.remove('fa-times');
        navbar.classList.remove('active');

        if(window.scrollY > 0){
            document.querySelector('.header').classList.add('active');
        }else{
            document.querySelector('.header').classList.remove('active');
        }

    }

    window.onload = () =>{
        if(window.scrollY > 0){
            document.querySelector('.header').classList.add('active');
        }else{
            document.querySelector('.header').classList.remove('active');
        }
    }

    // for home pages 
    var swiper = new Swiper(".home-slider", {
        spaceBetween: 20,
        effect: "fade",
        grabCursor: true,
        loop:true,
        centeredSlides: true,
        autoplay: {
            delay: 9500,
            disableOnInteraction: false,
        },
    });

    // for feature section 
    var swiper = new Swiper(".feature-slider", {
        spaceBetween: 20,
        loop:true,
        grabCursor: true,
        centeredSlides: true,
        autoplay: {
            delay: 9500,
            disableOnInteraction: false,
        },
        breakpoints: {
            0: {
                slidesPerView: 1,
            },
            768: {
                slidesPerView: 2,
            },
            991: {
                slidesPerView: 3,
            },
        },
    });

    // for trainers section 
    var swiper = new Swiper(".trainer-slider", {
        spaceBetween: 20,
        loop:true,
        grabCursor: true,
        centeredSlides: true,
        autoplay: {
            delay: 9500,
            disableOnInteraction: false,
        },
        breakpoints: {
            0: {
                slidesPerView: 1,
            },
            768: {
                slidesPerView: 2,
            },
            991: {
                slidesPerView: 3,
            },
        },
    });

    // for blogs section 
    var swiper = new Swiper(".blogs-slider", {
        spaceBetween: 20,
        loop:true,
        grabCursor: true,
        centeredSlides: true,
        autoplay: {
            delay: 9500,
            disableOnInteraction: false,
        },
        breakpoints: {
            0: {
                slidesPerView: 1,
            },
            768: {
                slidesPerView: 2,
            },
            991: {
                slidesPerView: 3,
            },
        },
    });
</script>
?>