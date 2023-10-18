<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>San Andres - Nosotros </title>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <?php require('inc/links.php') ?>
    <style>
        .box {
            border-top-color: #2ec1ac !important;
        }
    </style>
</head>

<body class="bg-light">
    <?php require('inc/header.php') ?>

    <div class="my-5 px-4">
        <h2 class="fw-bold h-font text-center">Nosotros</h2>
        <div class="h-line bg-dark"></div>
        <p class="text-center mt-3">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
            Asperiores aperiam ut numquam <br> alias labore cum culpa earum sit, minima excepturi.
        </p>
    </div>

    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-lg-6 col-md-5 mb-4 order-lg-1 order-md-1 order-2">
                <h3 class="mb-3">Lorem ipsum dolor sit.</h3>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Voluptatem qui, corrupti consectetur iure saepe voluptas quidem!
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Voluptatem qui, corrupti consectetur iure saepe voluptas quidem!
                </p>
            </div>
            <div class="col-lg-5 col-md-5 mb-4 order-lg-2 order-md-2 order-1">
                <img src="images/about/about.jpg" class="w-100">
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-3 col-md-6 mb-4 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
                    <img src="images/about/hotel.svg" width="70px">
                    <h4 class="mt-3">Mas de 100 Habitaciones</h4>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
                    <img src="images/about/customers.svg" width="70px">
                    <h4 class="mt-3">Mas de 200 Clientes</h4>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
                    <img src="images/about/rating.svg" width="70px">
                    <h4 class="mt-3">Mas de 150 Opiniones </h4>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
                    <img src="images/about/staff.svg" width="70px">
                    <h4 class="mt-3">Mas de 100 Miembros</h4>
                </div>
            </div>
        </div>
    </div>


    <h3 class="my-5 fw-bold h-font text-center">Nuestro Equipo</h3>
    
    <div class="container px-4">
    <div class="swiper  mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide bg-white text-center overflow-hidden rounded">
                    <img src="images/about/teams.jpg" class="w-100">
                    <h5 class="mt-2">Nombre Random 1</h5>
                </div>
                <div class="swiper-slide bg-white text-center overflow-hidden rounded">
                    <img src="images/about/teams.jpg" class="w-100">
                    <h5 class="mt-2">Nombre Random 1</h5>
                </div>
                <div class="swiper-slide bg-white text-center overflow-hidden rounded">
                    <img src="images/about/teams.jpg" class="w-100">
                    <h5 class="mt-2">Nombre Random 1</h5>
                </div>
                <div class="swiper-slide bg-white text-center overflow-hidden rounded">
                    <img src="images/about/teams.jpg" class="w-100">
                    <h5 class="mt-2">Nombre Random 1</h5>
                </div>
                <div class="swiper-slide bg-white text-center overflow-hidden rounded">
                    <img src="images/about/teams.jpg" class="w-100">
                    <h5 class="mt-2">Nombre Random 1</h5>
                </div>
                <div class="swiper-slide bg-white text-center overflow-hidden rounded">
                    <img src="images/about/teams.jpg" class="w-100">
                    <h5 class="mt-2">Nombre Random 1</h5>
                </div>
            </div>
            <br>
            <div class="swiper-pagination"></div>
        </div>
    </div>
    <?php require('inc/footer.php') ?>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 4,
            spaceBetween: 40,
            pagination: {
                el: ".swiper-pagination",
            },
            breakpoints: {
                320: {
                    slidesPerView: 1,
                },
                640: {
                    slidesPerView: 1,
                },
                768: {
                    slidesPerView: 3,
                },
                1024: {
                    slidesPerView: 3,
                }
            },

        });
    </script>
    <!-- footer-->
    

</body>

</html>