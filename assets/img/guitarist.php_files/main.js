$(document).ready(function(){

const swup = new Swup({
    doScrollingRightAway: false,
    animateScroll: false,
    scrollFriction: .3,
    scrollAcceleration: .04
});

whitfordJS();

});//end doc ready

document.addEventListener('swup:contentReplaced', function () {
    whitfordJS();
});

function whitfordJS() {

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

    //   function init() {
    //     var vidDefer = document.getElementsByTagName('iframe');
    //     for (var i=0; i<vidDefer.length; i++) {
    //     if(vidDefer[i].getAttribute('data-src')) {
    //     vidDefer[i].setAttribute('src',vidDefer[i].getAttribute('data-src'));
    //     } } }
    //     window.onload = init;
    
    }//end function whitford