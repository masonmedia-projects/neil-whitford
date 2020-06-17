<?php 
$navClass="bg-black navbar-dark";
include 'includes/header.php'; ?>

  <div class="container-fluid m-0 p-0" data-aos="fade">

    <!-- banner -->
    <div class="row min-700-lg min--100 bg--img-home-hero p-5 m-0 text-light">
      <div class="col-lg-12 d-flex flex-column justify-content-center align-items-start rellax">
        <span class="display-1 mb-2 stroke-white" data-aos="zoom-in-down" data-aos-delay="400">
            <img src="assets/img/icons8-rock-music_white.png" alt="Neil Whitford">
        </span>
        <h1 
        style="line-height: 75%;" 
        class="display-2 font-weight-bold m-0" 
        data-aos="fade">Neil <span class="text-success" >Whitford</span>
        </h1>  
        <h1 style="line-height: 75%;" class="display-2 font-weight-bold m-0">
        <span class="d-table" data-aos="fade-down"
        data-aos-delay="100">Guitarist.</span>
        <span class="d-table" data-aos="fade-right"
        data-aos-delay="200">Producer.</span> 
        <span class="d-table" data-aos="fade-up"
        data-aos-delay="300">Educator.</span> </h1> 
      </div>
    </div>

    <!-- about -->

    <?php
    $sectionBg="bg--img-about";
    $shapeBig="bg-github shape-diamond-lg";
    $shapeSmall="bg-success shape-diamond-sm";
    $sectionTitle="About";
    $accentColor="text-success";
    $sectionText="Neil Whitford is a prolific guitarist, producer and dedicated music professional from Toronto, Ontario.";
    $sectionLink="/about";
    include 'includes/components/home_banner_component.php';
    ?>

    <!-- guitarist -->

    <?php
    $sectionBg="bg--img-guitarist";
    $shapeBig="bg-github shape-parallelo-lg";
    $shapeSmall="bg-dribble shape-parallelo-sm";
    $sectionTitle="Guitarist.";
    $accentColor="text-dribble";
    $sectionText="Neil performs, records and tours with dozens of artists in many genres across Canada and several other countries.";
    $sectionLink="/guitarist";
    include 'includes/components/home_banner_component.php';
    ?>

    <!-- producer -->

    <?php
    $sectionBg="bg--img-producer";
    $shapeBig="bg-github shape-square-lg";
    $shapeSmall="bg-gradient-red-orange shape-square-sm";
    $sectionTitle="Producer.";
    $accentColor="text-github";
    $sectionText="Neil has produced many full length recording projects for artists and has many programming, editing and mixing credits.";
    $sectionLink="/producer";
    include 'includes/components/home_banner_component.php';
    ?>

    <!-- educator  -->

    <?php
    $sectionBg="bg--img-educator";
    $shapeBig="bg-github shape-triangle-lg";
    $shapeSmall="bg-behance shape-triangle-sm";
    $sectionTitle="Educator.";
    $accentColor="text-behance";
    $sectionText="Neil has been a music educator for individuals and groups for over a decade. He owns and operates the Oakwood Guitar School in Toronto.";
    $sectionLink="/educator";
    include 'includes/components/home_banner_component.php';
    ?>
    
    <!-- disco  -->
    
    <?php
    $sectionBg="bg--img-disco";
    $shapeBig="bg-github shape-circle-lg";
    $shapeSmall="bg-dribble shape-circle-sm";
    $sectionTitle="Credits.";
    $accentColor="text-dribble";
    $sectionText="A discography of Neil's work with samples from performance, production, mixing, and composition credits.";
    $sectionLink="/discography";
    include 'includes/components/home_banner_component.php';
    ?>

  </div><!--end container-->

<?php include 'includes/footer.php'; ?>