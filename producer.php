<?php 
$navId="producer";
$navClass="bg-gradient-red-orange navbar-dark";
include 'includes/header.php'; ?>

<div class="container-fluid relative m-0 p-0" data-aos="fade">
  <!-- banner -->
  <?php 
  $rowClass="bg--img-producer text-light";
  $shapeBig="bg-dribble shape-square-lg";
  $shapeSmall="shape-square-sm bg--img-producer";
  $pageTitle="Producer.";
  include './includes/components/page_banner_component.php'; 
  ?>
  <div class="row relative bg-black text-light p-5">
    <!-- shapes -->
    <?php 
    $shapeBig="bg-dribble shape-square-lg";
    $shapeSmall="bg-gradient-red-orange shape-square-sm";
    include './includes/components/shape_top_component.php'
    ?>
    <!-- main text -->
    <div
      class="col-lg-12 d-flex flex-column justify-content-center align-items-start text-left min-500 p-4 mt-4 mb-0 rellax"
      data-rellax-speed="-1">
      <h2 class="display-3 text-lowercase font-weight-bold bg-black" data-aos="fade">Producer 
        <span class="display-3 font-weight-bold">↘</span>
      </h2>
      <hr class="hr-big bg-black" data-aos="fade-right">
      <p class="h2 font-weight-bold relative z-1">
        <span class="bg-black" data-aos="fade">Neil is confidently able to give you tracks that will suit your song, whether it's current pop, hard rock or avant-garde. Neil has dozens writing and recording credits in genres spanning folk, pop, electronic and rock music. He fully produced <a href="https://georgianbay.bandcamp.com/album/patience" target="_blank">"Patience" by Georgian Bay</a> and co-produced <a href="https://soundcloud.com/chloecharles/sets/with-blindfolds-on-1" target="_blank">"With Blindfolds On" by Chloe Charles,</a> both albums that were nominated for the <a href="https://polarismusicprize.ca/blog/behold-the-longer-list" target="_blank">Polaris Prize</a> in 2016. Neil has extensive experience producing and mixing audio with the gear and the ears to bring your song to life.</span>
      </p>
      <!-- shapes bottom -->
      <?php 
        $shapeBig="bg-gradient-red-orange shape-square-lg";
        $shapeSmall="bg-dribble shape-square-sm";
        include './includes/components/shape_bottom_component.php'
        ?>
    </div>
    <!-- music -->
    <div class="col-sm-12 relative min-500 rellax" data-rellax-speed="1">
      <!-- shapes -->
      <?php 
      $shapeBig="bg-dribble shape-square-lg";
      $shapeSmall="bg-gradient-red-orange shape-square-sm";
      include './includes/components/shape_top_component.php'
      ?>
      <h1 class="display-1 w-25 text-left mb-5 font-weight-bold " data-aos="fade">Music.</h1>
      <!-- player -->
      <iframe class="min-500 w-100 relative shadow-lg" scrolling="no" id="hearthis_at_user_neil-whitford" width="100%" height="350" src="https://app.hearthis.at/neil-whitford/embed/?hcolor=14cfa0" frameborder="0" allowtransparency></iframe> 
    </div>
    <!-- pagination -->
    <?php 
    $prevUrl="/guitarist";
    $nextUrl="/educator";
    include './includes/components/pagination.php'; 
    ?>
  </div>
</div><!--end container-->

<?php include 'includes/footer.php'; ?>