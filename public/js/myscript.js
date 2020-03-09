

// window.addEventListener('load', function(){
//     const pageclick = document.querySelectorAll('.navbar .navbar-nav .nav-item .nav-link');
//     pageclick.forEach(page => {
//         page.addEventListener('click', function(e){
//             console.log(scrollY);
//         });
//     })
// })
// window.addEventListener("scroll", function(){
//     const navbar = document.querySelector('.navbar');
//     if(this.scrollY > 0){
//       navbar.classList.add("nav-custom")
//     }else{
//         navbar.classList.remove("nav-custom");
//     }

//     // console.log(scrollY)

// })


jQuery(document).ready(function(){

    $('document').ready(function(){

        $('.nav-link').on('click', function(){
            $('.nav-link').removeClass('active');
            $(this).addClass('active');

        });

        $('.page-scroll').on('click' , function(e){
            //ambil elemen
            var elemen = $(this).attr('href')
            //isi element
            var element = $(elemen)
            //animasi
            $('html,body').animate({
                scrollTop: element.offset().top - 150
            }, 800);

            console.log(elemen)
            e.preventDefault();
        });
        /* carousel */
        $('#carouselExampleCaptions').carousel({
            interval: 3000,
            direction:left
        });
    });
    $(window).scroll(function(){
        if($(this).scrollTop() > 100){
            $('.navbar').addClass('nav-custom')
        }else{
            $('.navbar').removeClass('nav-custom')
        }
        // console.log($(this).scrollTop());
    })

    $('#backto').on('click', function(){
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
    })
})

