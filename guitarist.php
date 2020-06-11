<?php 
$navId="guitarist";
$navClass="bg-dribble navbar-dark";
include 'includes/header.php'; ?>

<div class="container-fluid relative m-0 p-0" data-aos="fade">
    <!-- banner -->
    <?php 
    $rowClass="bg--img-guitarist";
    $shapeBig="bg-success shape-parallelo-lg";
    $shapeSmall="bg-dribble shape-parallelo-sm bg--img-guitarist";
    $pageTitle="Guitarist.";
    include './includes/components/page_banner_component.php'; 
    ?>

    <div class="row relative bg-black text-light p-5">
      <!-- shapes -->
      <?php 
      $shapeBig="bg-success shape-parallelo-lg";
      $shapeSmall="bg-dribble shape-parallelo-sm";
      include './includes/components/shape_top_component.php'
      ?>
      <!-- main text -->
      <div class="col-lg-12 d-flex flex-column justify-content-center align-items-start text-left min-500 p-4 mt-4 mb-0 rellax" data-rellax-speed="-1">
        <h2 class="display-3 text-lowercase font-weight-bold bg-black text-light" data-aos="fade">
          Guitarist <span class="text-dribble display-3 font-weight-bold">↘</span>
        </h2>
        <hr class="hr-big bg-light" data-aos="fade-right">
        <p class="h2 font-weight-bold relative z-1" data-aos="fade">
          <span class="bg-black">A diverse, multi-genre guitarist and composer, Neil has performed and toured with national and international acts including <a href="https://chloecharles.bandcamp.com/" target="_blank">Chloe Charles,</a> <a href="https://www.candicesand.com/" target="_blank">Candice Sand,</a> and Eurovision 2016 winner <a href="http://www.rykka.com/" target="_blank">Rykka,</a> and has dozens of <a href="/discography.php">writing and recording credits</a>.
          </span>
        </p>
        <hr class="hr-big bg-light" data-aos="fade-right">
        <p class="h2 font-weight-bold relative z-1" data-aos="fade">
          <span class="bg-black">Neil holds a diploma in Music from Grant MacEwan University and a BA in Music Performance from University of Toronto. He has been a sought-after freelancer in a wide range of genres spanning rock, jazz, blues, funk, top-40 and more with over a decade of professional playing experience.
          </span>
        </p>
        <hr class="hr-big bg-light" data-aos="fade-right">
        <p class="h2 font-weight-bold relative z-1" data-aos="fade">
          <span class="bg-black">He has played hundreds of shows with dozens of artists as a sideman and creative collaborator.  Neil can also hire groups including jazz duo or trio, rock and pop cover band or other groups for a variety of events and occasions.</span>
        </p>
        <!-- shapes -->
        <?php 
        $shapeBig="bg-success shape-parallelo-lg";
        $shapeSmall="bg-dribble shape-parallelo-sm";
        include './includes/components/shape_bottom_component.php'
        ?>
      </div>

      <!-- player -->
      <div class="col-sm-12 relative min-500 rellax" data-rellax-speed="1">
        <?php 
        $shapeBig="bg-success shape-parallelo-lg";
        $shapeSmall="bg-dribble shape-parallelo-sm";
        include './includes/components/shape_top_component.php'
        ?>
        <h1 class="display-1 w-25 text-left mb-5 font-weight-bold hr-thick" data-aos="fade">Music.</h1>
        <iframe class="min-500 w-100 shadow-lg relative" scrolling="no" frameborder="no" allow="autoplay" data-src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/playlists/112441897&color=%2314cfa0&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true"></iframe>   
      </div>
      <!-- pagination -->
      <?php 
      $prevUrl="/about";
      $nextUrl="/producer";
      include './includes/components/pagination.php'; 
      ?>
    </div>
  </div>
  <!--end container-->

  <?php include 'includes/footer.php'; ?>