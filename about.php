<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - TLG Security</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="about.css">
</head>

<body>
    <!-- Swiper -->
    <div class="swiper mySwiper">
        <div class="swiper-wrapper rest">

            <div class="swiper-slide">
                <div class="s-text">
                    <h1>About Us</h1>
                </div>
                <img src="images/hero-one.jpg" alt="">
            </div>
        </div>

    </div>



    <div class="about-bg">
        <h1>About Us</h1>

    </div>


    <?php include 'skills.php'; ?>

    <div class="skilled-bg">
        <h1>Skilled & Qualified Security Professionals</h1>
        <p>
            TLG Security Agency stands out with its exceptional team possessing a diverse range of
            expertise and unparalleled skills, ensuring optimal protection for your security needs.
        </p>

        <div class="v-grid">
            <div class="v-box">
                <div class="v-img">

                </div>
                <br>
                <h5 class="text---">Our Mission</h5>
                <p class="text---">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                </p>
            </div>

            <div class="v-box">
                <div class="v-img">

                </div>
                <br>
                <h5 class="text---">Our Vision</h5>
                <p class="text---">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                </p>
            </div>

            <div class="v-box">
                <div class="v-img">

                </div>
                <br>
                <h5 class="text---">Core Value</h5>
                <p class="text---">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                </p>
            </div>
        </div>
    </div>
    <section style="margin-top: 60px;">
        <?php include 'call.php'; ?>
    </section>
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