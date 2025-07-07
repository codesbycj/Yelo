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

    <title>Yelocode</title>
</head>

<body>
    <!-- NAVIGATION BAR -->
    <?php include('inc/header.php') ?>

    <section id="portfolio">
        <div class="portfolioz ">
            <div class="portHead text-center">
                <div class="head container">
                    <h1 class="display-1">WE BRING YOUR IDEAS  TO LIFE</h1>
                    <p class="lead">Since 2009, we’ve worked with ambitious startups, global nonprofits,
                        and Fortune 500s to design and develop digital experiences and custom applications
                        that increase sales, boost brand awareness, and streamline operations.</p>

                    <a href="" class="btn">Book A Call</a>
                </div>
            </div>

            <div class="portfolio container">
                <div class="each">
                    <img src="./assets/Portfolio.webp" alt="">

                    <div class="details">
                        <p class="lead">WEBSITE</p>
                        <h2>Business Wire</h2>

                        <p>A digital transformation to unite multiple applications into one powerful customer experience</p>

                        <p>Branding / Content Strategy / Dev Ops / Enterprise System Development / Front End Development / Information Architecture / UX/UI Design / Website Design</p>

                        <a href="" class="btn">View Live</a>
                    </div>
                </div>

                <div class="each">
                    <div class="details">
                        <p class="lead">WEBSITE</p>
                        <h2>Business Wire</h2>

                        <p>A digital transformation to unite multiple applications into one powerful customer experience</p>

                        <p>Branding / Content Strategy / Dev Ops / Enterprise System Development / Front End Development / Information Architecture / UX/UI Design / Website Design</p>

                        <a href="" class="btn">View Live</a>
                    </div>

                    <img src="./assets/casestudy.webp" alt="">
                </div>

                <div class="each">
                    <img src="./assets/Portfolio.webp" alt="">

                    <div class="details">
                        <p class="lead">WEBSITE</p>
                        <h2>Business Wire</h2>

                        <p>A digital transformation to unite multiple applications into one powerful customer experience</p>

                        <p>Branding / Content Strategy / Dev Ops / Enterprise System Development / Front End Development / Information Architecture / UX/UI Design / Website Design</p>

                        <a href="" class="btn">View Live</a>
                    </div>
                </div>

                <div class="each">
                    <div class="details">
                        <p class="lead">WEBSITE</p>
                        <h2>Business Wire</h2>

                        <p>A digital transformation to unite multiple applications into one powerful customer experience</p>

                        <p>Branding / Content Strategy / Dev Ops / Enterprise System Development / Front End Development / Information Architecture / UX/UI Design / Website Design</p>

                        <a href="" class="btn">View Live</a>
                    </div>


                    <img src="./assets/Portfolio.webp" alt="">

                </div>

                <div class="each">
                    <img src="./assets/Portfolio.webp" alt="">

                    <div class="details">
                        <p class="lead">WEBSITE</p>
                        <h2>Business Wire</h2>

                        <p>A digital transformation to unite multiple applications into one powerful customer experience</p>

                        <p>Branding / Content Strategy / Dev Ops / Enterprise System Development / Front End Development / Information Architecture / UX/UI Design / Website Design</p>

                        <a href="" class="btn">View Live</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <?php include('inc/footer.php') ?>

    <!-- BOOTSTRAP JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq"
        crossorigin="anonymous"></script>

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