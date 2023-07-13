<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services - TLG Security</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="services.css">
</head>

<body>
    <!-- Swiper -->
    <div class="swiper mySwiper">
        <div class="swiper-wrapper rest">

            <div class="swiper-slide">
                <div class="s-text">
                    <h1>Services</h1>
                </div>
                <img src="images/bg.jpg" alt="">
            </div>
        </div>

    </div>

    <?php include 'list.php'; ?>

    <section>
        <div class="s-bg">
            <div class="s-one">
                <img src="https://placehold.jp/450x450.png" alt="">
            </div>
            <div class="s-two">
                <h2>Why Choose Us</h2>
                <br>
                <p>
                    When it comes to your security needs, choosing TLG Security Agency means
                    opting for a trusted partner with a proven track record,
                    unmatched professionalism, and a commitment to delivering comprehensive
                    solutions that surpass expectations.
                </p>
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button style="background-color: #fff;" class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                <span style="color: #51db3d;">01. </span> Expertise
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>
                                    TLG Security Agency boasts a team of highly trained professionals with extensive experience in the field,
                                    equipped with the knowledge and skills necessary to address a wide range of security challenges.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button style="background-color: #fff;" class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                <span style="color: #51db3d;">02. </span> Customized Solutions
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>
                                    We understand that each client has unique security requirements.
                                    That's why TLG Security Agency offers tailored solutions,
                                    meticulously designed to meet your specific needs, ensuring maximum
                                    effectiveness and efficiency.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button style="background-color: #fff;" class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                <span style="color: #51db3d;"> 03. </span> Reliability
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>
                                    When you choose TLG Security Agency, you can rely on our unwavering
                                    commitment to excellence and the utmost reliability. We prioritize delivering
                                    prompt and dependable security services, giving you the confidence
                                    that your protection is in capable hands.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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