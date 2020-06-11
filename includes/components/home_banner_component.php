<div class="row min-700 min--100 relative p-5 m-0 text-light <?php echo $sectionBg; ?>">
  <!-- shapes -->
  <?php 
  $shapeBig;
  $shapeSmall;
  include 'shape_top_component.php'
  ?>
  <div class="col-lg-6 d-flex flex-column justify-content-center align-items-start">
    <h1 class="display-1 text-github font-weight-bold absolute z-0 m-0" data-aos="fade-down">
      <?php echo $sectionTitle; ?>
    </h1>
    <h1 class="display-1 text-dark font-weight-bold absolute z-0 m-0" data-aos="fade-up">
      <?php echo $sectionTitle; ?>
    </h1>
    <h1 class="display-1 text-github font-weight-bold absolute z-0 m-0" data-aos="zoom-in">
      <?php echo $sectionTitle; ?>
    </h1>
    <h1 class="display-1 font-weight-bold m-0" data-aos="fade-right">
      <?php echo $sectionTitle; ?>
    </h1>
  </div>
  <div class="col-lg-6 d-flex flex-column justify-content-center align-items-start">
    <p class="h3 border-left pl-3" data-aos="fade-down" data-aos-duration="800">
      <?php echo $sectionText; ?>
    </p>
    <a href="<?php echo $sectionLink?>.php" data-aos="fade-up" data-aos-duration="800">
        <button class="btn btn-lg btn-outline-light rounded-0 mt-3">
            <span class="h5">Read more</span>  
        </button>  
    </a>
  </div>
</div>