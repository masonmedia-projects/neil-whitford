<?php include 'includes/header.php'; ?>

<!-- banner -->

<div class="container-fluid relative m-0 p-0" data-aos="fade">
  <!-- banner -->
  <?php 
  $rowClass="bg--img-about";
  $shapeBig="bg-github shape-diamond-lg";
  $shapeSmall="bg-success shape-diamond-sm bg--img-about";
  $pageTitle="About.";
  include './includes/components/page_banner_component.php'; ?>
  
  <div class="row relative bg-black p-5">
    <!-- shapes -->
    <?php 
    $shapeBig="bg-github shape-diamond-lg";
    $shapeSmall="bg-success shape-diamond-sm";
    include './includes/components/shape_top_component.php'
    ?>
    <!-- main text -->
    <div class="col-lg-12 d-flex flex-column justify-content-center align-items-start text-left min-50 text-light p-4 my-4 rellax"
      data-rellax-speed="-1">
      <h2 class="display-3 font-weight-bold text-lowercase text-light bg-black font-weight-bold" data-aos="fade">
        Biography 
        <span class="text-success display-3 font-weight-bold">↘</span>
      </h2>
      <hr class="hr-big bg-light" data-aos="fade-right">
      <p class="h2 font-weight-bold bg-black" data-aos="fade">
        Neil Whitford is a prolific guitarist and multi-genre composer, songwriter and producer from Toronto, Ontario who has been highly involved in the local independent music scene for nearly a decade. Neil hails from the small town of Medicine Hat, Alberta, and received a diploma in Music from Grant MacEwan University and his BA in Music Performance from University of Toronto.
      </p>
      <hr class="hr-big bg-light" data-aos="fade-right">
      <p class="h2 font-weight-bold bg-black" data-aos="fade">
        His writing and recording credits include four albums with the <a href="https://ninjafunk.ca/" target="_blank">Ninja Funk Orchestra,</a> three with the Circles Quartet, and a number of additional albums including <a href="https://chloecharles.bandcamp.com/" target="_blank">Chloe Charles,</a> <a href="https://sacredbalance.bandcamp.com/" target="_blank">Sacred Balance,</a> <a href="https://www.mackenzielongpre.com/" target="_blank">Mackenzie Longpre Group</a> and <a href="http://www.najuah.com/" target="_blank">Najuah.</a> He has additionally served as a musical director for Chloe Charles, <a href="https://www.candicesand.com/" target="_blank">Candice Sand</a> and <a href="http://www.alisonjanetaylor.com/about" target="_blank">Alison Jane.</a> His production credits include tracks for Chloe Charles, Alison Jane and Will Conquer and he is currently working on the debut album for <a href="https://www.georgianbayband.com/home" target="_blank">Georgian Bay.</a>
      </p>
      <hr class="hr-big bg-light" data-aos="fade-right">
      <p class="h2 font-weight-bold bg-black" data-aos="fade">
        Neil has also been involved as a talent consultant for <a href="http://www.sonablast.com/" target="_blank">SonaBLAST! Records Canada,</a> has five years as the director of <a href="https://torontomusiccamp.com/" target="_blank">Toronto Music Camp</a> and owner of <a href="http://www.oakwoodguitarschool.com/" target="_blank">Oakwood Guitar School.</a>
      </p>
      <hr class="hr-big bg-light" data-aos="fade-right">
      <p class="h2 font-weight-bold bg-black" data-aos="fade">Neil has always been highly active in the local music scene, as well as abroad through multiple tours, and is always looking for new creative collaborations to engage in.</p>
      </p>
      <!-- shapes bottom -->
      <?php 
      include './includes/components/shape_bottom_component.php'
      ?>
    </div>
    <!-- pagination -->
    <?php 
    $prevUrl="/index";
    $nextUrl="/guitarist";
    include './includes/components/pagination.php'; 
    ?>
  </div>
</div>
<!--end container-->

<?php include 'includes/footer.php'; ?>