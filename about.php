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
        <p>
            TLG Security is a trusted security company in Ghana, specializing in providing top-notch
            security personnel to safeguard your property. With a strong emphasis on professionalism
            and customer satisfaction, we have established ourselves as a leading choice for individuals,
            businesses, and organizations seeking reliable security services.
        </p>

        <p>
            Our dedicated team of security personnel is extensively trained to handle various security
            challenges effectively. We understand that each client's security needs are unique, and therefore,
            we work closely with you to develop a tailored security solution that meets your specific
            requirements. Whether you need security personnel for residential properties, commercial
            establishments, construction sites, or events, we have the expertise to deliver exceptional
            services.
        </p>

        <p>
            At TLG Security, we prioritize the safety and protection of our clients and their assets.
            Our security personnel are carefully selected, thoroughly vetted, and trained to maintain
            a high level of vigilance and professionalism. They possess excellent communication skills
            and are trained to handle emergencies and conflict situations with utmost composure. You
            can trust our security personnel to safeguard your property, control access points, patrol
            the premises, and ensure a secure environment.
        </p>
        <p>

            We understand the importance of maintaining a secure and welcoming atmosphere for your
            visitors and employees. Our security personnel are trained to provide excellent customer
            service while maintaining a strong security presence. They are skilled in handling access
            control systems, visitor management, and maintaining a secure environment without compromising
            on hospitality and friendliness.
        </p>

        <p>
            As a local security company, TLG Security is deeply committed to contributing to the growth
            and development of Ghana. We prioritize the hiring and training of local personnel, providing
            job opportunities and supporting the local community. By choosing TLG Security, you not only
            receive top-quality security services but also contribute to the socio-economic progress of
            Ghana.
        </p>
        <p>

            TLG Security is a trusted security company in Ghana, offering reliable security
            personnel to guide and protect your property. With a focus on professionalism,
            customer satisfaction, and community development, we provide customized security
            solutions that meet your specific needs. Trust TLG Security to deliver exceptional
            security services and ensure the safety of your property and those within it.
        </p>
        
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