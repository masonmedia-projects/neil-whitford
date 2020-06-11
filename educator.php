<?php 
$navId="educator";
$navClass="bg-behance navbar-dark";
include 'includes/header.php'; ?>

<!-- banner -->

<div class="container-fluid relative m-0 p-0" data-aos="fade">
    <!-- banner -->
    <?php 
    $rowClass="bg--img-educator text-light";
    $shapeBig="bg-github shape-triangle-lg";
    $shapeSmall="bg-behance shape-triangle-sm bg--img-educator";
    $pageTitle="Educator.";
    include './includes/components/page_banner_component.php'; 
    ?>

    <div class="row relative bg-black text-light p-5">
        <!-- shapes -->
        <?php 
        $shapeBig="bg-github shape-triangle-lg";
        $shapeSmall="bg-behance shape-triangle-sm";
        include './includes/components/shape_top_component.php'
        ?>
        <!-- main text -->
        <div class="col-lg-12 d-flex flex-column justify-content-center align-items-start text-left min-500 p-4 mt-4 mb-0 rellax"
            data-rellax-speed="-1">
            <h2 class="display-3 text-lowercase font-weight-bold bg-black" data-aos="fade">
                educator <span class="text-behance display-3 font-weight-bold">↘</span>
            </h2>
            <hr class="hr-big bg-light" data-aos="fade-right">
            <p class="h2 font-weight-bold relative z-1" data-aos="fade">
                <span class="bg-black"><a href="http://www.oakwoodguitarschool.com/">Oakwood Guitar School</a> is a well equipped home studio that provides a comfortable, relaxed learning
                environment for students. Our primary goal is to have lessons that are consistently engaging and goal oriented, helping students reach their potential while enjoying the experience of learning music.</span>
            </p>
            <hr class="hr-big bg-light" data-aos="fade-right">
            <p class="h2 font-weight-bold relative z-1" data-aos="fade">
                <span class="bg-black">We teach electric guitar, acoustic guitar, classical guitar, bass
                guitar and upright bass. We are qualified to teach in a variety of musical styles - Rock, Pop, Folk, Country, Jazz, Classical, and many more. We also offer lessons in topics such as music theory, song writing, and improvisation. If you are interested in learning another instrument or topic, we can refer you to a qualified teacher.</span>
            </p>
            <hr class="hr-big bg-light" data-aos="fade-right">
            <p class="h2 font-weight-bold relative z-1" data-aos="fade">
                <span class="bg-black">Lessons are offered at $40 for one hour, $31 for 45-minutes, and $22 for 30-minutes. Group and ensemble lessons can also be arranged upon request.</span>
                <span class="bg-black" data-aos="fade">Children and adults of all levels and abilities are welcome! Students younger than 8 years might not be ready for learning guitar yet. It is best for us to meet your child in order to make a decision. Regardless of age, your first lesson is a no-cost, risk free trial.</span>
            </p>
            <!-- shapes bottom -->
            <?php 
            $shapeBig="bg-github shape-triangle-lg";
            $shapeSmall="bg-behance shape-triangle-sm";
            include './includes/components/shape_bottom_component.php'
            ?>
        </div>
        <!-- music iframes -->
        <div class="col-sm-12 relative min-500 rellax" data-rellax-speed="1">
            <!-- shapes -->
            <?php 
            include './includes/components/shape_top_component.php'
            ?>
            <h1 class="display-1 text-left mb-4 font-weight-bold" data-aos="fade">Music.</h1>
            <iframe class="min-500 w-100 relative shadow-lg" scrolling="no" frameborder="no" allow="autoplay" data-src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/playlists/28273551&color=%2314cfa0&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true"></iframe>
        </div>
        <!-- pagination -->
        <?php 
        $prevUrl="/producer";
        $nextUrl="/discography";
        include './includes/components/pagination.php'; 
        ?>
    </div>

</div>
<!--end container-->

<?php include 'includes/footer.php'; ?>