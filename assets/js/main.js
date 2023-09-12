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

    //close dropdown/mobile menu on li click
    $('.nav-link').on('click',function() {
        $('.navbar-collapse').collapse('hide');
      });

    // scroll top on page change
    window.scrollTo(0, 0);
    
    // parallax
    var rellax = new Rellax('.rellax', {
        center: true,
        // callback: function(position) {
        //     // callback every position change
        //     console.log(position);
        // }
      });

      AOS.init({
        offset: 0, // offset (in px) from the original trigger point
        anchorPlacement: 'top-top', 
        easing: 'ease-in-out-back',
        duration: 1000
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