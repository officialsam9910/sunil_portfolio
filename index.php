<?php 
include 'header.php';
include 'nav.php';
?>
    <div class="content-wrapper">
        <?php
         include 'sidebar.php' 
         ?>
        <main>
            <section class="intro-section">
                <h2 class="section-title">Hello, Sunil Yadav!</h2>
                <p>I'm Web Developer & SEO Expert from New Delhi, India, working as a web developer in a financial agency. I enjoy turning complex problems into simple, beautiful and intuitive solution. My job is to
                    build your website so that it is functional, user-friendly and easy to use and at the same time attractive.
                    Moreover, I add personal touch to your product and make sure that is eye-catching and easy to use.
                    My aim is to bring across your message and identity in the most creative way. I am a passionate and dedicated web developer with a strong background in web development and SEO.
                </p>
                <a href="#!" class="btn btn-primary btn-hire-me">HIRE ME</a>
            </section>
            
            <?php include 'resume.php' ?>

            <?php include 'services.php' ?>
           
            <section class="testimonial-section">
                <div id="testimonialCarousel" class="testimonial-carousel carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                    <?php include 'footer.php'; ?>
                    </div>
                </div>
            </section>  
        </main>
    </div>
    
<?php include 'script.php'; ?>