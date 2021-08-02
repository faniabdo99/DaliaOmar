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
                <ul class="navbar-nav ms-auto me-0 text-start">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/about-us">MEET DALIA</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-center" href="/health-nutrition-coaching"><span >HEALTH & NUTRITION COACHING</span></a>
                    </li>
                </ul>
                <a class="logo-img" href="/"><img src="<?php echo get_template_directory_uri(); ?>/assets/icons/logo.png" alt="Dalia Omar" title="Dalia Omar" ></a>
                <ul class="navbar-nav me-auto ms-0 text-end second-nav-menu">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            EXERCISE
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="/excerscise">ALL CLASSES</a></li>
                            <li><a class="dropdown-item" href="/class/zumba">ZUMBA</a></li>
                            <li><a class="dropdown-item" href="/class/pilates-class">PILATES</a></li>
                            <li><a class="dropdown-item" href="/class/bb-plus">BOOTYBARRE</a></li>
                            <li><a class="dropdown-item" href="/exercise-scheduled">CLASS SCHEDULE</a></li>

                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="/wellness-hub" id="navbarDropdown2" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            WELLNESS HUB
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown2">
                            <li><a class="dropdown-item" href="/wellness-hub">WELLNESS HUB</a></li>
                            <li><a class="dropdown-item" href="/recipes">RECIPES</a></li>
                            <li><a class="dropdown-item" href="/exercises-from-home/">EXERCISE AT HOME</a></li>
                            <li><a class="dropdown-item" href="/blog">TIPS & TRICKS</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/contact-us">CONTACT US</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>  