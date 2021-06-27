<?php get_header(); ?>
<section class="hero-section" id="homepage-hero-section">
    <div class="dark-overlap">
        <div class="container">
            <div class="row">
                <div class="col-12 d-flex align-items-center">
                    <div class="hero-content text-center">
                        <h1 class="wow animate__animated animate__fadeInLeft mb-5">SHIFT YOUR MINDSET,<br>CHANGE YOUR HABITS,<br>BUILD YOUR <br><span>Lifestyle</span></h1>
                        <a class="dalia-button wow animate__animated animate__fadeInLeft" href="#">BOOK & CONSULTAION</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="features-slider">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <?php
                    echo do_shortcode('[lgx-carousel cat="features" bgcolor="#f2f1eb" itemdesk="4" itemlarge="4" dotes="no"]');
                ?>
            </div>
        </div>
    </div>
</section>
<section class="content-section wellines-hub">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="section-header text-center wow animate__animated animate__fadeInDown">WELLNESS HUB</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-12">
                <div class="wellines-hub-card wow animate__animated animate__zoomIn">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/wellnes-3.jpg" alt="Card title here">
                    <div class="card-content">
                        <h3>BEETROOT<br>SALAD</h3>
                        <p>Recipes</p>
                    </div>
                    <p class="card-sub-title">BEETROOT HEALTHY SALAD</p>
                </div>
            </div>
            <div class="col-lg-4 col-12">
                <div class="wellines-hub-card wow animate__animated animate__zoomIn">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/wellnes-2.jpg" alt="Card title here">
                    <div class="card-content">
                        <h3>PREGNANCY</h3>
                        <p>Plans</p>
                    </div>
                    <p class="card-sub-title">MOM TO BE PLANS</p>
                </div>
            </div>
            <div class="col-lg-4 col-12">
                <div class="wellines-hub-card wow animate__animated animate__zoomIn">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/wellnes-1.jpg" alt="Card title here">
                    <div class="card-content">
                        <h3>ZUMBA</h3>
                        <p>Classes</p>
                    </div>
                    <p class="card-sub-title">ZUMBA CLASSES</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="content-section programs-section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="section-header text-center">HEALTH & NUTRITION PROGRAMS</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <?php
                    echo do_shortcode('[lgx-carousel cat="programs" bgcolor="#f2f1eb" itemdesk="4" itemlarge="4" dotes="no"]');
                ?>
            </div>
        </div>
    </div>
</section>
<section class="content-section classes-section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="section-header text-center wow animate__animated animate__fadeInDown">AVAILABLE CLASSES</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <div class="class-card">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/icons/zumba.png" alt="">
                    <ul>
                        <li>ZUMBA</li>
                        <li>ZUMBA TONING</li>
                        <li>STRONG NATION</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="class-card">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/icons/pilates.jpg" alt="">
                    <ul>
                        <li>MAT PILATES</li>
                        <li>REFORMER PILATES</li>
                        <li>PILATES ON THE BARRE</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="class-card">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/icons/booty-bar.jpg" alt="">
                    <ul>
                        <li>bb PLUS</li>
                        <li>bb FLEX & FLOW</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<?php get_template_part( '/partials/template', 'customers-reviews' ); ?>
<?php get_footer(); ?>
