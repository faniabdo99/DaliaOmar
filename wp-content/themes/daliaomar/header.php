<!DOCTYPE html>
<html lang="en">
<head>
    <?php wp_head();?>
    <meta content="width=device-width, initial-scale=1" name="viewport" />
</head>
<body>
    <div class="upper-nav">
        <!-- <a class="newsletter-signup" href="#"><i class="fas fa-newspaper"></i> SIGN UP FOR MY NEWSLETTER</a>
        <br> -->
        <a class="logo-img" href="/"><img src="<?php echo get_template_directory_uri(); ?>/assets/icons/logo.png" alt="Dalia Omar" title="Dalia Omar" ></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
        </button>
    </div>
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/about-us">MEET DALIA</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/health-nutrition-coaching">HEALTH & NUTRITION COACHING</a>
                    </li>
                </ul>
                <a class="logo-img" href="/"><img src="<?php echo get_template_directory_uri(); ?>/assets/icons/logo.png" alt="Dalia Omar" title="Dalia Omar" ></a>
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/excerscise">EXERCISE</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/wellness-hub">WELLNESS HUB</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/contact-us">CONTACT US</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>  