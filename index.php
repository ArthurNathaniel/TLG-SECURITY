<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - TLG Security</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <link rel="stylesheet" href="style.css">
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

    <section style="margin-top: 60px;">
        <?php include 'top.php'; ?>
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
        <div class="help-grid">
            <div class="help-box">
                <h1>325</h1>
                <h5>PEOPLE GUARDED</h5>
            </div>
            <div class="help-box">
                <h1>325</h1>
                <h5>PEOPLE GUARDED</h5>
            </div>
            <div class="help-box">
                <h1>325</h1>
                <h5>PEOPLE GUARDED</h5>
            </div>
            <div class="help-box">
                <h1>325</h1>
                <h5>PEOPLE GUARDED</h5>
            </div>
        </div>

        <div class="help-last">
            <p>With over 2 decades of experience, We deliver</p>
            <h3>PREMIUM SECURITY SOLUTIONS AT BEST PRICE</h3>
        </div>
    </section>

    <section>
        <div class="test-bg">
            <div class="one">

            </div>
            <div class="two">
                <div class="two-text">
                    <h1>Clients & Partners</h1>
                    <p>
                        TLG Security Agency values its clients and partners, building
                        strong relationships based on trust, reliability, and exceptional
                        service.
                    </p>

                </div>

            </div>
        </div>
    </section>


    <section>
        <div class="team">
            <h1>Our Team</h1>
            <p>
                TLG Security Agency takes pride in its highly skilled and dedicated team,
                ensuring unparalleled expertise and a proactive approach to fulfilling
                your security requirements.
            </p>
            <div class="team-grid">
                <div class="team-box">
                    <div class="team-all">
                        <div class="team-img" style="background-image:url(./images/2.jpg)">

                        </div>
                    </div>
                    <div class="team-info">
                        <p>Chief Security</p>

                    </div>
                </div>

                <div class="team-box">
                    <div class="team-all">
                        <div class="team-img" style="background-image:url(./images/2.jpg)">

                        </div>
                    </div>
                    <div class="team-info">
                        <p>Chief Security</p>

                    </div>
                </div>

                <div class="team-box">
                    <div class="team-all">
                        <div class="team-img" style="background-image:url(./images/2.jpg)">

                        </div>
                    </div>
                    <div class="team-info">
                        <p>Chief Security</p>

                    </div>
                </div>

                <div class="team-box">
                    <div class="team-all">
                        <div class="team-img" style="background-image:url(./images/2.jpg)">

                        </div>
                    </div>
                    <div class="team-info">
                        <p>Chief Security</p>

                    </div>
                </div>
            </div>
        </div>
    </section>


    <?php include 'skills.php'; ?>

    <?php include 'call.php'; ?>
    <?php include 'cv.php'; ?>
    <?php include 'footer.php' ?>

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>



    <script>
        var swiper = new Swiper(".mySwiper", {
            loop: true,
            spaceBetween: 30,
            centeredSlides: true,

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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

</body>

</html>