<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />

</head>

<body>
    <!-- Swiper -->
    <div class="swiper mySwiper">
        <div class="swiper-wrapper">
            
            <div class="swiper-slide">
                <div class="swiper-text">
                    <span>WELCOME TO TLG SECURITY</span>
                    <h1>


                        THE MOST SUCCESSFUL SECURITY AGENCY
                    </h1>
                    <div class="button">
                        <a href="" class="button--">LEARN MORE</a>
                    </div>
                </div>
                <img src="images/hero-one.jpg" alt="">
            </div>
        </div>

    </div>

    <section>
        <div class="welcome">
            <h1>Welcome to TLG Security</h1>
            <p>
                Welcome to TLG Security, your trusted partner in security solutions.
                We are committed to providing top-notch protection for your assets
                and ensuring your peace of mind. With our team of highly trained security
                personnel, we deliver comprehensive security services tailored to meet your
                specific needs.
            </p>
        </div>
        <div class="welcome-grid">
            <div class="grid-box">
                <h3>Technical Security</h3>
            </div>
            <div class="grid-box">
                <h3>Technical Security</h3>
            </div>
            <div class="grid-box">
                <h3>Technical Security</h3>
            </div>
        </div>
    </section>

    <section>
        <div class="top-level-grid">
            <div class="top-level-text">
                <h2>Top Level of Protection</h2>
            </div>
            <div class="top-level-image">

            </div>
        </div>
    </section>

    <section>
        <div class="help">
            <h1>We Will Help You</h1>
            <p>
                With our expert team of professionals, we are committed to
                providing top-notch security solutions tailored to your
                specific needs. Trust us to protect what matters most
                to you.
            </p>
        </div>
    </section>

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".mySwiper", {
            loop: true,
            spaceBetween: 30,
            centeredSlides: true,
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });
    </script>
</body>

</html>