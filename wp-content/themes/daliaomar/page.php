<?php get_header(); ?>
<section class="hero-section" id="homepage-hero-section">
    <div class="container">
        <div class="row">
            <div class="col-12 d-flex align-items-center">
                <div class="hero-content text-center">
                    <h1 class="wow animate__animated animate__fadeInLeft mb-5"> <?php the_title(); ?></h1>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="features-slider">
    <div class="container">
        <div class="row">
            <div class="col-12">
            <div> <?php the_content(); ?></div>
            </div>
        </div>
    </div>
</section>


<?php get_footer(); ?>
