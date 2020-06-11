<?php 
$navId="producer";
$navClass="bg-cream navbar-light";
include 'includes/header.php'; ?>

<!-- banner -->

<div class="container-fluid relative m-0 p-0" data-aos="fade">
  <div class="row min-700 min--100 relative p-5 m-0 bg--img-producer">
    <div class="absolute z-0 left bg-dribble shape-square-lg rellax" data-rellax-speed="1"></div>
    <div class="absolute z-0 left bg-cream shape-square-sm bg--img-producer rellax" data-rellax-speed="-5"></div>
    <div class="col-lg-6 d-flex flex-column justify-content-center align-items-start">
      <h1 class="display-1 font-weight-bold m-0 tracking-in-expand rellax" data-rellax-speed="-2">Producer.</h1>
    </div>
    <div class="offset-lg-6"></div>
  </div>

  <div class="row relative bg-gradient-white p-5">
    <!-- shapes -->
    <div class="absolute z-0 left bg-dribble shape-square-lg rellax" data-rellax-speed="1"></div>
    <div class="absolute z-0 left bg-cream shape-square-sm rellax" data-rellax-speed="2"></div>
    <!-- cols -->
    <div
      class="col-lg-12 d-flex flex-column justify-content-center align-items-start text-left min-500 p-4 mt-4 mb-0 rellax"
      data-rellax-speed="-1">
      <h2 class="display-3 text-lowercase font-weight-bold bg-cream" data-aos="fade">Producer //</h2>
      <hr class="hr-big bg-dark" data-aos="fade">
      <p class="h2 font-weight-bold relative z-1">
        <span class="bg-white" data-aos="fade">Neil is confidently able to give you tracks that will suit your song, whether it's current pop, hard rock or avant-garde. Neil has dozens writing and recording credits in genres spanning folk, pop, electronic and rock music. He fully produced <a href="https://georgianbay.bandcamp.com/album/patience" target="_blank">"Patience" by Georgian Bay</a> and co-produced <a href="https://soundcloud.com/chloecharles/sets/with-blindfolds-on-1" target="_blank">"With Blindfolds On" by Chloe Charles,</a> both albums that were nominated for the <a href="https://polarismusicprize.ca/blog/behold-the-longer-list" target="_blank">Polaris Prize</a> in 2016. Neil has extensive experience producing and mixing audio with the gear and the ears to bring your song to life.</span>
      </p>
      <div class="absolute z--1 right bottom bg-cream shape-square-lg rellax" data-rellax-speed="1"></div>
      <div class="absolute z--1 right bottom bg-dribble shape-square-sm rellax" data-rellax-speed="2"></div>
    </div>
    <!-- music -->
    <div class="col-sm-12 relative min-500 rellax" data-rellax-speed="1">
      <div class="absolute z--1 left top bg-dribble shape-square-lg rellax" data-rellax-speed="1"></div>
      <div class="absolute z--1 left top bg-cream shape-square-sm rellax" data-rellax-speed="2"></div>
      <h1 class="display-1 w-25 text-left mb-5 font-weight-bold hr-thick-dark" data-aos="fade">Music.</h1>

      <iframe class="min-500 w-100 shadow-lg" scrolling="no" id="hearthis_at_user_neil-whitford" width="100%" height="350" src="https://app.hearthis.at/neil-whitford/embed/?hcolor=14cfa0" frameborder="0" allowtransparency></iframe> 

    </div>
    <!-- pagination -->
    <?php 
    $prevUrl="/guitarist";
    $nextUrl="/educator";
    include './includes/components/pagination.php'; 
    ?>
  </div>

</div>
<!--end container-->

<?php include 'includes/footer.php'; ?>