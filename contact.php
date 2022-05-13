<?php 
include 'header.php';
?>

<body>
<header>
        <nav class="collapsible-nav" id="collapsible-nav">
            <a href="index.php" class="nav-link">HOME</a>
            <a href="#" class="nav-link">RESUME</a>
            <a href="portfolio.php" class="nav-link">PORTFOLIO</a>
            <a href="#" class="nav-link active">CONTACT</a>
        </nav>
        <button class="btn btn-menu-toggle btn-white rounded-circle" data-toggle="collapsible-nav"
            data-target="collapsible-nav"><img src="assets/images/hamburger.svg" alt="hamburger"></button>
    </header>

    <div class="content-wrapper">
        <?php include 'sidebar.php' ?>
        
        <main>
            <section class="contact-section">
                <h2 class="section-title">GET IN TOUCH</h2>
                <p class="mb-4">If you’d like to talk about a project, our work or anything else then get in touch.</p>
                
                <div class="contact-cards-wrapper">
                    <div class="contact-card">
                        <h6 class="contact-card-title">CALL US</h6>
                        <p class="contact-card-content">+91 99104 83796</p>
                    </div>
                    <div class="contact-card">
                        <h6 class="contact-card-title">Email Us</h6>
                        <p class="contact-card-content">officialworksunil@gmail.com</p>
                    </div>
                </div>

                <form action="code.php" method="POST" class="contact-form">
                    <div class="form-group form-group-name">
                            <label for="name" class="sr-only">Name</label>
                            <input type="text" name="name" id="name" class="form-control" placeholder="NAME" required>
                    </div>
                        <div class="form-group form-group-email">
                            <label for="email" class="sr-only">Email</label>
                            <input type="email" name="email" id="email" class="form-control" placeholder="EMAIL" required>
                        </div>
                    <div class="form-group">
                        <label for="message" class="sr-only">Message</label>
                            <textarea name="message" id="message" class="form-control" placeholder="MESSAGE" rows="5" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary form-submit-btn">SEND MESSAGE</button>
                </form>
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
    <?php include 'script.php'; ?>