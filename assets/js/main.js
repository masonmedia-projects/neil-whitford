$(document).ready(function(){

const swup = new Swup({
    doScrollingRightAway: false,
    animateScroll: false,
    scrollFriction: .3,
    scrollAcceleration: .04
});

whitfordJS();

// document.getElementsByClassName(".navbar-dark .navbar-nav .nav-link").setAttribute("data-toggle", "collapse");
// document.querySelector(".navbar-dark .navbar-nav .nav-link").setAttribute("data-target", "#navbarDark");

// $(function(){ 
//     var navMain = $(".navbar-collapse"); // avoid dependency on #id
//     // "a:not([data-toggle])" - to avoid issues caused
//     // when you have dropdown inside navbar
//     navMain.on("click", "a:not([data-toggle])", null, function () {
//         navMain.collapse('hide');
//     });
// });

});//end doc ready

document.addEventListener('swup:contentReplaced', function () {
    whitfordJS();
});

function whitfordJS() {

    // const p = document.querySelector('p');
    // p.insertAdjacentHTML('beforebegin', '<a href="https://andrewmasonmedia.com">Fuck Yes</a>');


    //close dropdown/mobile menu on li click
    $('.nav-link').on('click',function() {
        $('.navbar-collapse').collapse('hide');
      });

    // scroll top on page change
    window.scrollTo(0, 0);
    
    // parallax
    var rellax = new Rellax('.rellax', {
        center: true,
        callback: function(position) {
            // callback every position change
            console.log(position);
        }
      });

      AOS.init({
        offset: 0, // offset (in px) from the original trigger point
        anchorPlacement: 'top-top', 
        easing: 'ease-in-out-back',
        duration: 1000
      });

    // slick slider  
    $('.slider').slick({
        dots: false,
        arrows: true,
        infinite: true,
        // speed: 300,
        slidesToShow: 4,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        responsive: [
          {
            breakpoint: 1024,
            settings: {
              slidesToShow: 3,
              slidesToScroll: 3,
              infinite: true,
              dots: true
            }
          },
          {
            breakpoint: 600,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 2
            }
          },
          {
            breakpoint: 480,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1
            }
          }
          // You can unslick at a given breakpoint now by adding:
          // settings: "unslick"
          // instead of a settings object
        ]
      });
    
    //   video defer after load

    var vidDefer = document.getElementsByTagName('iframe');
        for (var i=0; i<vidDefer.length; i++) {
        if(vidDefer[i].getAttribute('data-src')) {
        vidDefer[i].setAttribute('src',vidDefer[i].getAttribute('data-src'));
        } } 

        // fetch hearthis.at API
        // https://api-v2.hearthis.at/neil-whitford/

        // fetch('https://api.github.com/repos/javascript-tutorial/en.javascript.info/commits')
        // .then(response => response.json())
        // .then(commits => alert(commits[0].author.login));
    
    }//end function whitford