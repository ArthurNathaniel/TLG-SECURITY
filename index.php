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


    <section>
        <div class="bag">
            <div class="why-box">
                <h2>We have Awesome Skills</h2>
                <br>
                <p>
                    TLG Security Agency stands out with its exceptional team possessing
                    a diverse range of expertise and unparalleled skills, ensuring optimal
                    protection for your security needs.
                </p>
                <div class="box-why">
                    <p>Hello World</p>
                </div>
            </div>
            <div class="why-box box--">
                <h1>Why Choose Us</h1>
                <br>
                <p>
                    When it comes to your security needs, choosing TLG Security Agency means 
                    opting for a trusted partner with a proven track record, 
                    unmatched professionalism, and a commitment to delivering comprehensive 
                    solutions that surpass expectations.
                </p>
            </div>
        </div>
    </section>


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


</body>

</html>