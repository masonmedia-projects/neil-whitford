<?php 
$navId="disco";
$navClass="bg-black navbar-dark";
include 'includes/header.php'; ?>

<div class="container-fluid relative m-0 p-0" data-aos="fade">

<!-- banner -->
  <?php 
  $rowClass="bg--img-disco";
  $shapeBig="bg-success shape-circle-lg";
  $shapeSmall="shape-circle-sm bg--img-disco";
  $pageTitle="Discography.";
  include './includes/components/page_banner_component.php'; 
  ?>
  <div class="row relative bg-black text-light p-5">
    <!-- shapes -->
    <!-- <?php 
    $shapeBig="bg-dark shape-circle-lg";
    $shapeSmall="bg-github shape-circle-sm";
    include './includes/components/shape_top_component.php'
    ?> -->
    <!-- cols -->
    <div class="col-lg-12 d-flex flex-column justify-content-center align-items-start text-left min-50 p-4 my-4 rellax" data-rellax-speed="-1">
      <!-- disco items component -->
        <?php include './includes/components/disco_component.php'; ?>
        <!-- shapes bottom -->

        <!-- THESE ARE CAUSING scroll probs - try putting in disco_component? -->
        <!-- <?php 
        include './includes/components/shape_bottom_component.php'
        ?> -->
    </div>

      <!-- pagination -->
      <?php 
      $prevUrl="/educator";
      $nextUrl="/";
      include './includes/components/pagination.php'; 
      ?>
  </div>
</div>
<!--end container-->

<?php include 'includes/footer.php'; ?>