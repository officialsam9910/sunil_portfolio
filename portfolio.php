<?php
include 'header.php';
?>
<body>
<header>
        <nav class="collapsible-nav" id="collapsible-nav">
            <a href="index.php" class="nav-link">HOME</a>
            <a href="#" class="nav-link">RESUME</a>
            <a href="portfolio.php" class="nav-link active">PORTFOLIO</a>
            <a href="contact.php" class="nav-link">CONTACT</a>
        </nav>
        <button class="btn btn-menu-toggle btn-white rounded-circle" data-toggle="collapsible-nav"
            data-target="collapsible-nav"><img src="assets/images/hamburger.svg" alt="hamburger"></button>
    </header>

    <div class="content-wrapper">
        <?php include 'sidebar.php' ?>
        <main>
            <section class="portfolio-section">
                <h2 class="section-title">PORTFOLIO</h2>
                
                <div class="portfolio-wrapper">
                    <figure class="portfolio-item hover-box">
                        <img src="assets/images/IMG-1.png" alt="project" class="portfolio-item-img">
                        <figcaption class="portfolio-item-details overlay">
                            <h5 class="portfolio-item-title">Website Development</h5>
                            <p class="portfolio-item-description">Financial Agency</p>
                        </figcaption>
                    </figure>
                    <figure class="portfolio-item hover-box">
                        <img src="assets/images/IMG-2.png" alt="project" class="portfolio-item-img">
                        <figcaption class="portfolio-item-details overlay">
                            <h5 class="portfolio-item-title">Personal Portfolio</h5>
                            <p class="portfolio-item-description">Web Development</p>
                        </figcaption>
                    </figure>
                    <figure class="portfolio-item hover-box">
                        <img src="assets/images/IMG-3.png" alt="project" class="portfolio-item-img">
                        <figcaption class="portfolio-item-details overlay">
                            <h5 class="portfolio-item-title">Admin Dashboard</h5>
                            <p class="portfolio-item-description">PHP Development</p>
                        </figcaption>
                    </figure>
                    <figure class="portfolio-item hover-box">
                        <img src="assets/images/IMG-4.png" alt="project" class="portfolio-item-img">
                        <figcaption class="portfolio-item-details overlay">
                            <h5 class="portfolio-item-title">Personal Portfolio</h5>
                            <p class="portfolio-item-description">Bootstrap Development</p>
                        </figcaption>
                    </figure>
                </div>
            </section>
            
            <section class="testimonial-section">
                <div id="testimonialCarousel" class="testimonial-carousel carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                    <?php include 'footer.php'; ?>
                    </div>
                </div>
            </section> 
        </main>
    </div>
    <?php include 'script.php' ?>