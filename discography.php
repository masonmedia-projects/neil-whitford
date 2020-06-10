<?php include 'includes/header.php'; ?>

<!-- banner -->

<div class="container-fluid relative m-0 p-0" data-aos="fade">
    <div class="row m-0 bg--img-home-hero text-light">
        <div class="col-lg-12 d-flex flex-column justify-content-center align-items-start relative min-700 min--100 p-5">
            <h1 class="display-1 font-weight-bold m-0 tracking-in-expand rellax" data-rellax-speed="-2">Discography.</h1>
        </div>
    </div>
  </div>

  <div class="row relative bg-black p-5">
    <!-- shapes -->
    <div class="absolute z-0 left bg-dark shape-diamond-lg rellax" data-rellax-speed="1"></div>
    <div class="absolute z-0 left bg-github shape-diamond-sm rellax" data-rellax-speed="2"></div>

    <!-- cols -->
    <div class="col-lg-12 d-flex flex-column justify-content-center align-items-start text-left min-50 text-light p-4 my-4 rellax"
      data-rellax-speed="-1">

        <?php include './includes/components/disco_component.php'; ?>

        <div class="absolute z--1 right bottom bg-github shape-diamond-lg rellax" data-rellax-speed="1"></div>
        <div class="absolute z--1 right bottom bg-success shape-diamond-sm rellax" data-rellax-speed="2"></div>
      </div>

      <!-- pagination -->
      <?php 
      $prevUrl="/educator.php";
      $nextUrl="/index.php";
      include './includes/components/pagination.php'; 
      ?>
  </div>
</div>
<!--end container-->

<?php include 'includes/footer.php'; ?>