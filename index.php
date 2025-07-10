<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="assets/10001.png" type="image/x-icon">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <title>Yelocode systems</title>
</head>

<body>
    <!-- NAVIGATION BAR -->
    <?php
    include('inc/header.php');
    ?>
    <!-- HERO SECTION -->
    <section id="hero">
        <div class="hero container">
            <div class="left">
                <h2 class="display-4">Develop products that simplify and improve daily life.</h2>
                <p class="lead">Your partner in groundbreaking technology solutions, transforming ideas into impactful
                    digital experiences</p>

                <div class="inputSec">
                    <input type="text" name="" id="" placeholder="Enter your work email address">
                    <a class="btn" type="submit">Explore</a>
                </div>

                <p style="margin-top: 2rem;" class="">Already have a Yelocode account? <a href=""
                        style="font-weight: 500; color: var(--color-black);">Click here to log in</a></p>

                <p style="font-size: 12px; margin-top: 4rem;" class="my-0">Your partner in groundbreaking technology solutions, transforming ideas into impactful digital experiences.</p>
            </div>

            <div id="carouselExampleAutoplaying" class="carousel slide right d-none d-md-block" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="assets/ba1.jpeg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="assets/ba2.jpeg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="assets/ba3.jpeg" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>

            <!-- <div class="right swiper">
                <ul class="swiper-wrapper">
                    <li class="swiper-slide">
                        <div class="wrapper">
                            <img class="slide1" src="assets/Smile.jpeg" alt="" srcset="">
                        </div>
                    </li>
                    <li class="swiper-slide">
                        <div class="wrapper">
                            <img class="slide2" src="assets/up3.jpeg" alt="" srcset="">
                        </div>
                    </li>
                    <li class="swiper-slide">
                        <div class="wrapper">
                            <img class="slide3" src="assets/up2.jpeg" alt="" srcset="">
                        </div>
                    </li>
                    <li class="swiper-slide">
                        <div class="wrapper">
                            <img class="slide4" src="assets/up1.jpeg" alt="" srcset="">
                        </div>
                    </li>
                    <li class="swiper-slide">
                        <div class="wrapper">
                            <img class="slide5"
                                src="https://img.freepik.com/free-photo/woman-wearing-virtual-reality-simulator_23-2148910255.jpg?t=st=1735945674~exp=1735949274~hmac=a0a5903f865e09b0673364a3f02d4f18e88afaf0fc0a0b197fca3373b283a002&w=826"
                                alt="" srcset="">
                        </div>
                    </li>
                </ul>

                <div class="swiper-pagination"></div>

                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div> -->
        </div>
    </section>

    <!-- STUDENTS DETAILS -->
    <?php include('inc/student.php') ?>


    <!-- WHO WE ARE -->

    <div id="wwa">
        <div class="wwa container">
            <div class="wwaEmployers text-center">
                <h2>We work with World's Top Companies</h2>
                <p>Focused on building solutions where technology meets creativity.</p>


                <div class="wrapper">
                    <div class="item item1"><img src="assets/f10001.png" alt="" srcset=""></div>
                    <div class="item item2"><img src="assets/10002.png" alt="" srcset=""></div>
                    <div class="item item3"><img src="assets/10003.png" alt="" srcset=""></div>
                    <div class="item item4"><img src="assets/10004.png" alt="" srcset=""></div>
                    <div class="item item5"><img src="assets/amazon.webp" alt="" srcset=""></div>
                    <div class="item item6"><img src="assets/amazon.png" alt="" srcset=""></div>
                    <div class="item item7"><img src="assets/10005.png" alt="" srcset=""></div>
                </div>
            </div>
        </div>
    </div>


    <!-- BUSINESSES SECTION -->
    <section id="businesses">
        <div class="businesses container">
            <div class="business">
                <p class="display-4">10</p>
                <p class="under">Years</p>
            </div>

            <div class="business">
                <p class="display-4">27</p>
                <p class="under">Developers</p>
            </div>

            <div class="business">
                <p class="display-4">76</p>
                <p class="under">Satisfied Customers</p>
            </div>

            <div class="business">
                <p class="display-4">104+</p>
                <p class="under">Completed Projects</p>
            </div>

            <div class="business">
                <img src="assets/stars.svg" alt="" srcset="">
                <p class="under">We strive to work with the best.</p>
            </div>
        </div>
    </section>


    <!-- TESTIMONIALS -->
    <div id="testimonials">
        <div class="testimonials container">
            <div class="tHead">
                <h3>Testimonials</h3>
                <p class="lead">What are our clients saying</p>
            </div>

            <div class="tAside swiper">
                <ul class="swiper-wrapper">
                    <li class="swiper-slide">
                        <div class="wrapper">
                            <div class="thumbnail">
                                <img src="assets/Testimonial.webp" alt="">
                            </div>

                            <div class="onTheSide">
                                <p>
                                    "Yelocode transformed our business operations with their AI-driven solutions. Their team is professional, innovative, and truly dedicated to delivering results."
                                </p>
                                <div class="name" style="width: 170px;">
                                    <h4 class="my-0 text-end">Dr Anthony K</h4>
                                    <p class="lead my-0" style="font-size: 13px; text-align: right;"> </p>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li class="swiper-slide">
                        <div class="wrapper">
                            <div class="thumbnail">
                                <img src="assets/Testimonial.jpg" alt="">
                            </div>

                            <div class="onTheSide">
                                <p>
                                    "They listened to our needs and delivered a product that perfectly aligned with our vision. Yelocode doesn’t just build solutions—they build relationships."
                                </p>
                                <div class="name" style="width: 170px;">
                                    <h4 class="my-0 text-end">— Mark T., CFO.</h4>
                                    <p class="lead my-0" style="font-size: 13px; text-align: right;"> </p>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li class="swiper-slide">
                        <div class="wrapper">
                            <div class="thumbnail">
                                <img src="assets/testimonial2.jpeg" alt="">
                            </div>

                            <div class="onTheSide">
                                <p>
                                    "The telehealth platform Yelocode developed for us exceeded all expectations. It’s seamless, secure, and a game-changer for our industry."
                                </p>
                                <div class="name" style="width: 170px;">
                                    <h4 class="my-0 text-end">Johnson Burg</h4>
                                    <p class="lead my-0" style="font-size: 13px; text-align: right;"> </p>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li class="swiper-slide">
                        <div class="wrapper">
                            <div class="thumbnail">
                                <img src="assets/Testimonial-Videos-1.png   " alt="">
                            </div>

                            <div class="onTheSide">
                                <p>Partnering with Yelocode Systems has been an outstanding experience. Their team combines deep technical expertise with a clear understanding of business needs, delivering innovative, reliable,
                                    and efficient solutions. From software development to system integration,
                                    Yelocode Systems consistently goes above and beyond to ensure project success.
                                    I highly recommend them to any organization looking for a dependable technology partner
                                    that drives real results.</p>
                                <div class="name" style="width: 170px;">
                                    <h4 class="my-0 text-end">Denis Paul .J</h4>
                                    <p class="lead my-0" style="font-size: 13px; text-align: right;"> AI Coach</p>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>

                <!-- If we need pagination -->
                <div class="swiper-pagination"></div>

                <!-- If we need navigation buttons -->
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>

            </div>
        </div>
    </div>

    <?php include('inc/industry.php') ?>

    <!-- SAVE ON FEES -->
    <div id="save">
        <div class="save container">
            <h3 class="display-2 fw-bold">Discover the Tech Innovations</h3>
            <p>10+ years of experience in cloud, cybersecurity, and digital transformation</p>

            <p><a href="">See the fees you won’t be paying</a></p>

            <div class="cards mt-5">
                <div class="eachCard">
                    <img src="assets/fees.svg" alt="" srcset="">
                    <h3>Courses Designed for Real-World Success</h3>
                    <p class="my-0">Equip yourself with the skills that employers
                        demand, through courses that focus on
                        practical outcomes and real-world application.</p>
                </div>

                <div class="eachCard">
                    <img src="assets/fees1.svg" alt="" srcset="">
                    <h3>Learn at Your Own Pace
                    </h3>
                    <p class="my-0">We understand that your time is valuable.
                        Our flexible online courses are customised to suit your schedule,
                        offering you the freedom to learn at your own pace.</p>
                </div>

                <div class="eachCard">
                    <img src="assets/fees2.svg" alt="" srcset="">
                    <h3>Expert Support Every Step of the Way</h3>
                    <p class="my-0">Our expert trainers offer 1-on-1 mentoring and support to
                        ensure you get the most out of your course and reach your goals.</p>
                </div>
            </div>


        </div>


    </div>

    <!-- POWERFUL TECH -->
    <div id="tech">
        <div class="tech container">
            <div class="top">
                <h1 class="display-6 fw-bold">Powerful tech at your fingertips</h1>

                <p>Experience innovation without limits. We put the latest technology directly in your hands — empowering you to work smarter, connect faster, and solve complex challenges with ease.</p>

                <p> Whether you're a business leader, a creator, or a curious mind, our solutions are designed to deliver speed, efficiency, and reliability, all accessible at the touch of a button. From intelligent software to next-gen hardware,
                    the power to transform your world is just a tap away.
                </p>
            </div>

            <div class="bottom">
                <div class="each">
                    <p class="display-6 fw-bold ees">Graphics Design <span class="arrow"><i
                                class="fa-solid fa-arrow-right"></i></span></p>
                    <p class="display-6 fw-bold ees">Full- Stack Development <span class="arrow"><i
                                class="fa-solid fa-arrow-right"></i></span></p>
                    <p class="display-6 fw-bold ees">Data Analysis <span class="arrow"><i
                                class="fa-solid fa-arrow-right"></i></span></p>
                    <p class="display-6 fw-bold ees">UI/UX <span class="arrow"><i
                                class="fa-solid fa-arrow-right"></i></span></p>
                </div>

                <div class="each d-none d-md-block">
                    <div class="img">
                        <img src="assets/ba1.jpeg" alt="" srcset="">
                    </div>

                    <div class="text">
                        <p>Explore what's possible - because powerful tech belongs at your fingertips.
                        </p>

                        <a href="">See all courses <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- CUSTOMER SUPPORT -->
    <div id="support">
        <div class="support">
            <div class="images d-none d-md-block">
                <div class="ups">
                    <img class="up itm1" src="assets/up.jpeg" alt="" srcset="">
                    <img class="up itm2" src="assets/up1.jpeg" alt="" srcset="">
                    <img class="up itm3" src="assets/up2.jpeg" alt="" srcset="">
                    <img class="up itm4" src="assets/up3.jpeg" alt="" srcset="">
                    <img class="up itm5" src="assets/up4.jpeg" alt="" srcset="">
                    <img class="up itm6" src="assets/up5.jpeg" alt="" srcset="">
                    <img class="up itm7" src="assets/up6.jpeg" alt="" srcset="">
                    <img class="up itm8" src="assets/up7.jpeg" alt="" srcset="">
                </div>

                <div class="downs">
                    <img class="down itm1" src="assets/up.jpeg" alt="" srcset="">
                    <img class="down itm2" src="assets/up1.jpeg" alt="" srcset="">
                    <img class="down itm3" src="assets/up2.jpeg" alt="" srcset="">
                    <img class="down itm4" src="assets/up3.jpeg" alt="" srcset="">
                    <img class="down itm5" src="assets/up4.jpeg" alt="" srcset="">
                    <img class="down itm6" src="assets/up5.jpeg" alt="" srcset="">
                    <img class="down itm7" src="assets/up6.jpeg" alt="" srcset="">
                    <img class="down itm8" src="assets/up7.jpeg" alt="" srcset="">
                </div>
            </div>

            <div class="right">
                <div class="firstTwo">
                    <p style="color: var(--color-btn); font-size: 20px; font-weight: 600;">Top Performing Students</p>
                </div>

                <div class="down">
                    <h2 class="display-5 fw-bolder">Consistent High Performance</h2>
                    <p class="my-3" style="font-size: 20px;">We proudly celebrate the dedication, resilience,
                        and outstanding achievements of our top-performing students.
                        Their hard work and pursuit of excellence set the standard for academic
                        success and inspire others to reach their full potential.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- FOOTER -->
    <?php include('inc/footer.php');  ?>


    <!-- BOOTSTRAP JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq"
        crossorigin="anonymous"></script>


    <!-- JQUERY -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- LINKED JAVASCRIPT -->
    <script src="script.js"></script>



    <!-- SWIPER JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        const swiper = new Swiper('.swiper', {
            autoHeight: true,
            loop: true,

            // If we need pagination
            pagination: {
                el: '.swiper-pagination',
            },

            // Navigation arrows
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            }
        });
    </script>

</body>

</html>