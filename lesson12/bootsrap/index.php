<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fully Featured Bootstrap 5 Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
        /* Custom styles to enhance Bootstrap's default for specific sections */
        .hero-section {
            padding: 6rem 0; /* More padding for a spacious hero */
            background-color: var(--bs-body-bg); /* Use Bootstrap's default body background for a clean look */
        }
        .hero-section .display-5 {
            font-weight: 300; /* Lighter font weight for display headings */
        }
        .feature-card {
            min-height: 220px; /* Consistent height for feature cards */
        }
        .icon-square {
            width: 3rem;
            height: 3rem;
            border-radius: .75rem;
            background-color: var(--bs-primary); /* Bootstrap primary color for icons */
            display: inline-flex;
            align-items: center;
            justify-content: center;
            color: white;
        }
        /* Sticky footer setup */
        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }
        .flex-grow-1 {
            flex-grow: 1;
        }
    </style>
</head>
<body class="d-flex flex-column min-vh-100">

    <nav class="navbar navbar-expand-lg bg-body-tertiary sticky-top shadow-sm">
        <div class="container-fluid container-xl"> <a class="navbar-brand fw-bold" href="#">BrandName</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0"> <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#features">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#services">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#pricing">Pricing</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            More
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#testimonials">Testimonials</a></li>
                            <li><a class="dropdown-item" href="#faq">FAQ</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#contact">Contact</a></li>
                        </ul>
                    </li>
                </ul>
                <form class="d-flex ms-lg-3" role="search"> <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-primary" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>

    <div class="flex-grow-1">

        <section id="home" class="hero-section text-center py-5 border-bottom">
            <div class="container py-5">
                <h1 class="display-5 fw-bold mb-3">Your Journey to Success Starts Here</h1>
                <p class="fs-4 text-muted mb-4">
                    Unlock unparalleled potential with our innovative solutions designed for modern businesses.
                </p>
                <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                    <a href="#contact" class="btn btn-primary btn-lg px-4 me-sm-3">Get Started</a>
                    <button type="button" class="btn btn-outline-secondary btn-lg px-4" data-bs-toggle="modal" data-bs-target="#videoModal">
                        Watch Demo
                    </button>
                </div>
            </div>
        </section>

        <section id="features" class="container my-5">
            <h2 class="text-center mb-5 fw-light">Discover Powerful Features</h2>
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
                <div class="col">
                    <div class="card h-100 shadow-sm feature-card">
                        <div class="card-body text-center">
                            <div class="icon-square text-white fs-4 mb-3">
                                <i class="bi bi-rocket-takeoff-fill"></i>
                            </div>
                            <h5 class="card-title mb-2">Blazing Fast</h5>
                            <p class="card-text text-body-secondary">Optimized for speed, our platform ensures a seamless experience.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 shadow-sm feature-card">
                        <div class="card-body text-center">
                            <div class="icon-square text-white fs-4 mb-3">
                                <i class="bi bi-shield-check-fill"></i>
                            </div>
                            <h5 class="card-title mb-2">Secure & Reliable</h5>
                            <p class="card-text text-body-secondary">Your data is protected with industry-leading security measures.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 shadow-sm feature-card">
                        <div class="card-body text-center">
                            <div class="icon-square text-white fs-4 mb-3">
                                <i class="bi bi-gem"></i>
                            </div>
                            <h5 class="card-title mb-2">Premium Quality</h5>
                            <p class="card-text text-body-secondary">Experience high-quality design and robust functionality.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 shadow-sm feature-card">
                        <div class="card-body text-center">
                            <div class="icon-square text-white fs-4 mb-3">
                                <i class="bi bi-globe"></i>
                            </div>
                            <h5 class="card-title mb-2">Global Reach</h5>
                            <p class="card-text text-body-secondary">Connect with users and markets across the world effortlessly.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 shadow-sm feature-card">
                        <div class="card-body text-center">
                            <div class="icon-square text-white fs-4 mb-3">
                                <i class="bi bi-life-preserver"></i>
                            </div>
                            <h5 class="card-title mb-2">Dedicated Support</h5>
                            <p class="card-text text-body-secondary">Our team is here to assist you 24/7 with any queries.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 shadow-sm feature-card">
                        <div class="card-body text-center">
                            <div class="icon-square text-white fs-4 mb-3">
                                <i class="bi bi-bar-chart-line-fill"></i>
                            </div>
                            <h5 class="card-title mb-2">Advanced Analytics</h5>
                            <p class="card-text text-body-secondary">Gain insights with powerful and easy-to-understand data tools.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="services" class="container my-5 py-5 bg-light border rounded-3 shadow-sm">
            <h2 class="text-center mb-5 fw-light">Our Comprehensive Services</h2>
            <div class="row row-cols-1 row-cols-md-2 g-4">
                <div class="col">
                    <div class="d-flex align-items-start">
                        <div class="icon-square flex-shrink-0 me-3">
                            <i class="bi bi-code-slash"></i>
                        </div>
                        <div>
                            <h4 class="fw-bold mb-0">Web Development</h4>
                            <p class="text-body-secondary">Crafting responsive and dynamic web applications tailored to your needs.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="d-flex align-items-start">
                        <div class="icon-square flex-shrink-0 me-3">
                            <i class="bi bi-phone-fill"></i>
                        </div>
                        <div>
                            <h4 class="fw-bold mb-0">Mobile App Development</h4>
                            <p class="text-body-secondary">Building intuitive and high-performance mobile applications for iOS and Android.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="d-flex align-items-start">
                        <div class="icon-square flex-shrink-0 me-3">
                            <i class="bi bi-cloud-fill"></i>
                        </div>
                        <div>
                            <h4 class="fw-bold mb-0">Cloud Solutions</h4>
                            <p class="text-body-secondary">Scalable and secure cloud infrastructure and migration services.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="d-flex align-items-start">
                        <div class="icon-square flex-shrink-0 me-3">
                            <i class="bi bi-megaphone-fill"></i>
                        </div>
                        <div>
                            <h4 class="fw-bold mb-0">Digital Marketing</h4>
                            <p class="text-body-secondary">Boosting your online presence with effective SEO, social media, and content strategies.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="pricing" class="container my-5">
            <h2 class="text-center mb-5 fw-light">Choose Your Perfect Plan</h2>
            <div class="row row-cols-1 row-cols-md-3 mb-3 text-center g-4">
                <div class="col">
                    <div class="card mb-4 rounded-3 shadow-sm">
                        <div class="card-header py-3">
                            <h4 class="my-0 fw-normal">Free</h4>
                        </div>
                        <div class="card-body">
                            <h1 class="card-title pricing-card-title">$0<small class="text-body-secondary fw-light">/mo</small></h1>
                            <ul class="list-unstyled mt-3 mb-4">
                                <li>10 users included</li>
                                <li>2 GB of storage</li>
                                <li>Email support</li>
                                <li>Help center access</li>
                            </ul>
                            <button type="button" class="w-100 btn btn-lg btn-outline-primary">Sign up for free</button>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card mb-4 rounded-3 shadow-sm border-primary">
                        <div class="card-header py-3 text-bg-primary border-primary">
                            <h4 class="my-0 fw-normal">Pro</h4>
                        </div>
                        <div class="card-body">
                            <h1 class="card-title pricing-card-title">$15<small class="text-body-secondary fw-light">/mo</small></h1>
                            <ul class="list-unstyled mt-3 mb-4">
                                <li>20 users included</li>
                                <li>10 GB of storage</li>
                                <li>Priority email support</li>
                                <li>Help center access</li>
                            </ul>
                            <button type="button" class="w-100 btn btn-lg btn-primary">Get started</button>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card mb-4 rounded-3 shadow-sm">
                        <div class="card-header py-3">
                            <h4 class="my-0 fw-normal">Enterprise</h4>
                        </div>
                        <div class="card-body">
                            <h1 class="card-title pricing-card-title">$29<small class="text-body-secondary fw-light">/mo</small></h1>
                            <ul class="list-unstyled mt-3 mb-4">
                                <li>30 users included</li>
                                <li>15 GB of storage</li>
                                <li>Phone and email support</li>
                                <li>Dedicated help</li>
                            </ul>
                            <button type="button" class="w-100 btn btn-lg btn-primary">Contact us</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="testimonials" class="bg-body-tertiary py-5 border-top border-bottom">
            <div class="container">
                <h2 class="text-center mb-5 fw-light">What Our Clients Say</h2>
                <div id="testimonialCarousel" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#testimonialCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#testimonialCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#testimonialCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <figure class="text-center bg-white p-4 rounded shadow-sm">
                                        <blockquote class="blockquote">
                                            <p class="mb-0 fs-5">"This platform has truly transformed our workflow. Highly recommend!"</p>
                                        </blockquote>
                                        <figcaption class="blockquote-footer mt-2">
                                            <cite title="Source Title">Jane Doe</cite>, CEO of Tech Solutions
                                        </figcaption>
                                    </figure>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <figure class="text-center bg-white p-4 rounded shadow-sm">
                                        <blockquote class="blockquote">
                                            <p class="mb-0 fs-5">"Incredible support and a robust feature set. A game-changer for our business."</p>
                                        </blockquote>
                                        <figcaption class="blockquote-footer mt-2">
                                            <cite title="Source Title">John Smith</cite>, Marketing Director at Innovate Co.
                                        </figcaption>
                                    </figure>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <figure class="text-center bg-white p-4 rounded shadow-sm">
                                        <blockquote class="blockquote">
                                            <p class="mb-0 fs-5">"Efficient, user-friendly, and powerful. Exactly what we needed."</p>
                                        </blockquote>
                                        <figcaption class="blockquote-footer mt-2">
                                            <cite title="Source Title">Emily White</cite>, Founder of Creative Hub
                                        </figcaption>
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </section>

        <section id="faq" class="container my-5">
            <h2 class="text-center mb-5 fw-light">Frequently Asked Questions</h2>
            <div class="accordion accordion-flush" id="faqAccordionFlush"> <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingOne">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                            What is your return policy?
                        </button>
                    </h2>
                    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#faqAccordionFlush">
                        <div class="accordion-body text-body-secondary">
                            Our return policy allows for full refunds within 30 days of purchase, provided the item is in its original condition.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                            How can I contact customer support?
                        </button>
                    </h2>
                    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#faqAccordionFlush">
                        <div class="accordion-body text-body-secondary">
                            You can reach our customer support team via email at support@example.com or by calling us at (123) 456-7890 during business hours.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                            Do you offer international shipping?
                        </button>
                    </h2>
                    <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#faqAccordionFlush">
                        <div class="accordion-body text-body-secondary">
                            Yes, we offer international shipping to most countries. Shipping costs and delivery times vary by destination.
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="bg-primary text-white text-center py-5">
            <div class="container">
                <h2 class="mb-3">Ready to Get Started?</h2>
                <p class="lead mb-4">Join thousands of satisfied customers today and experience the difference!</p>
                <a href="#pricing" class="btn btn-light btn-lg">View Plans</a>
            </div>
        </section>

        <section id="contact" class="container my-5">
            <h2 class="text-center mb-5 fw-light">Get in Touch</h2>
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6">
                    <p class="text-center text-body-secondary mb-4">Have questions or feedback? Fill out the form below, and we'll get back to you shortly.</p>
                    <form>
                        <div class="mb-3">
                            <label for="contactName" class="form-label">Name</label>
                            <input type="text" class="form-control" id="contactName" placeholder="Your Name" required>
                        </div>
                        <div class="mb-3">
                            <label for="contactEmail" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="contactEmail" placeholder="name@example.com" required>
                        </div>
                        <div class="mb-3">
                            <label for="contactSubject" class="form-label">Subject</label>
                            <input type="text" class="form-control" id="contactSubject" placeholder="Inquiry subject">
                        </div>
                        <div class="mb-3">
                            <label for="contactMessage" class="form-label">Message</label>
                            <textarea class="form-control" id="contactMessage" rows="5" placeholder="Your message..." required></textarea>
                        </div>
                        <div class="form-check mb-3">
                            <input class="form-check-input" type="checkbox" value="" id="privacyCheck">
                            <label class="form-check-label text-body-secondary" for="privacyCheck">
                                I agree to the <a href="#" class="text-decoration-none">Privacy Policy</a>
                            </label>
                        </div>
                        <button type="submit" class="btn btn-primary w-100 py-2">Send Message</button>
                    </form>
                </div>
            </div>
        </section>

        <section class="container my-5 py-4 border-top">
            <h2 class="text-center mb-4 fw-light">Offcanvas & Modal Demonstrations</h2>
            <div class="d-flex flex-wrap justify-content-center gap-3">
                <button class="btn btn-outline-info" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
                    Default Offcanvas (Left)
                </button>
                <button class="btn btn-outline-success" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop" aria-controls="offcanvasTop">
                    Offcanvas (Top)
                </button>
                <button class="btn btn-outline-danger" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasEnd" aria-controls="offcanvasEnd">
                    Offcanvas (Right)
                </button>
                <button class="btn btn-outline-secondary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom" aria-controls="offcanvasBottom">
                    Offcanvas (Bottom)
                </button>
                <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#videoModal">
                    Open Video Modal
                </button>
            </div>
        </section>

    </div> <footer class="footer mt-auto py-5 bg-body-tertiary border-top">
        <div class="container text-center text-md-start">
            <div class="row row-cols-1 row-cols-md-4 g-4">
                <div class="col-md-3 mb-4">
                    <h6 class="text-uppercase fw-bold mb-4">BrandName</h6>
                    <p class="text-body-secondary">
                        Delivering innovative solutions for a better tomorrow. Our mission is to empower businesses with cutting-edge technology.
                    </p>
                </div>

                <div class="col-md-3 mb-4">
                    <h6 class="text-uppercase fw-bold mb-4">Quick Links</h6>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="#home" class="text-body-secondary text-decoration-none">Home</a></li>
                        <li class="mb-2"><a href="#features" class="text-body-secondary text-decoration-none">Features</a></li>
                        <li class="mb-2"><a href="#services" class="text-body-secondary text-decoration-none">Services</a></li>
                        <li class="mb-2"><a href="#pricing" class="text-body-secondary text-decoration-none">Pricing</a></li>
                    </ul>
                </div>

                <div class="col-md-3 mb-4">
                    <h6 class="text-uppercase fw-bold mb-4">Support</h6>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="#faq" class="text-body-secondary text-decoration-none">FAQ</a></li>
                        <li class="mb-2"><a href="#" class="text-body-secondary text-decoration-none">Support Center</a></li>
                        <li class="mb-2"><a href="#" class="text-body-secondary text-decoration-none">Documentation</a></li>
                        <li class="mb-2"><a href="#" class="text-body-secondary text-decoration-none">Refund Policy</a></li>
                    </ul>
                </div>

                <div class="col-md-3 mb-4">
                    <h6 class="text-uppercase fw-bold mb-4">Contact Us</h6>
                    <p class="text-body-secondary mb-2"><i class="bi bi-geo-alt-fill me-2"></i> 123 Main St, Anytown, USA 12345</p>
                    <p class="text-body-secondary mb-2"><i class="bi bi-envelope-fill me-2"></i> info@brandname.com</p>
                    <p class="text-body-secondary mb-2"><i class="bi bi-telephone-fill me-2"></i> +1 (555) 123-4567</p>
                </div>
            </div>
            <hr class="mb-4">
            <div class="d-flex justify-content-between flex-column flex-md-row pt-2 align-items-center">
                <div class="text-body-secondary mb-2 mb-md-0">
                    &copy; <span id="currentYear"></span> BrandName. All rights reserved.
                </div>
                <div>
                    <a href="#" class="text-body-secondary me-3 fs-5"><i class="bi bi-twitter"></i></a>
                    <a href="#" class="text-body-secondary me-3 fs-5"><i class="bi bi-facebook"></i></a>
                    <a href="#" class="text-body-secondary me-3 fs-5"><i class="bi bi-instagram"></i></a>
                    <a href="#" class="text-body-secondary me-3 fs-5"><i class="bi bi-linkedin"></i></a>
                </div>
            </div>
        </div>
    </footer>

    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
        <div class="offcanvas-header bg-body-tertiary">
            <h5 class="offcanvas-title" id="offcanvasExampleLabel">Offcanvas Menu</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <p>This is a typical offcanvas panel. You can put navigation, forms, or other content here.</p>
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><a href="#" class="text-decoration-none">Dashboard</a></li>
                <li class="list-group-item"><a href="#" class="text-decoration-none">Profile Settings</a></li>
                <li class="list-group-item"><a href="#" class="text-decoration-none">Messages <span class="badge bg-primary rounded-pill">5</span></a></li>
                <li class="list-group-item"><a href="#" class="text-decoration-none">Support</a></li>
            </ul>
            <div class="d-grid mt-3">
                <button class="btn btn-outline-primary" type="button">Action Button</button>
            </div>
        </div>
    </div>

    <div class="offcanvas offcanvas-top" tabindex="-1" id="offcanvasTop" aria-labelledby="offcanvasTopLabel">
        <div class="offcanvas-header bg-body-tertiary">
            <h5 class="offcanvas-title" id="offcanvasTopLabel">Top Offcanvas</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <p>This offcanvas slides in from the top.</p>
            <div class="alert alert-info" role="alert">
                Information goes here.
            </div>
        </div>
    </div>

    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasEnd" aria-labelledby="offcanvasEndLabel">
        <div class="offcanvas-header bg-body-tertiary">
            <h5 class="offcanvas-title" id="offcanvasEndLabel">Right Offcanvas</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <p>Content for the right-sided offcanvas.</p>
            <form>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>

    <div class="offcanvas offcanvas-bottom" tabindex="-1" id="offcanvasBottom" aria-labelledby="offcanvasBottomLabel">
        <div class="offcanvas-header bg-body-tertiary">
            <h5 class="offcanvas-title" id="offcanvasBottomLabel">Bottom Offcanvas</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body small">
            <p>This offcanvas appears from the bottom.</p>
            <div class="d-flex justify-content-center">
                <button class="btn btn-sm btn-outline-primary me-2">Option A</button>
                <button class="btn btn-sm btn-outline-secondary">Option B</button>
            </div>
        </div>
    </div>

    <div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="videoModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg"> <div class="modal-content">
                <div class="modal-header bg-body-tertiary">
                    <h5 class="modal-title" id="videoModalLabel">Product Demo Video</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-0"> <div class="ratio ratio-16x9">
                        <iframe src="https://www.youtube.com/embed/dQw4w9WgXcQ?rel=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="modal-footer bg-body-tertiary">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Learn More</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script>
        // Script to dynamically update the current year in the footer
        document.getElementById('currentYear').textContent = new Date().getFullYear();
    </script>
</body>
</html>