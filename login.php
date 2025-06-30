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


    <!-- LOGIN SECTION -->
    <section id="login">
        <div class="login">
            <div class="left"></div>

            <div class="right">
                <div class="insideRight">
                    <!-- <div class="login-header">
                        <h2 class="logo">Yelocode</h2>
                        <button class="help-btn">Login help</button>
                    </div> -->

                    <h1 class="welcome">Welcome back!</h1>

                    <form class="login-form">
                        <label>Email address</label>
                        <input type="email" placeholder="Enter your email" required />

                        <div class="password-row">
                            <label>Password</label>
                            <a href="#" class="forgot">Forgot password?</a>
                        </div>
                        <input type="password" placeholder="Enter your password" required />

                        <button type="submit" class="login-btn">Log in</button>
                    </form>

                    <a href="#" class="alt-login">View other login options</a>

                    <div class="qr-section">
                        <img src="assets/QR.png"
                            alt=""/>
                        <div class="qr-text">
                            <strong>Download our mobile app</strong>
                            <p>Scan the QR code and manage your 401(k) account from your phone.</p>
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