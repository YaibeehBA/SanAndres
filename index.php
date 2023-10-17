<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Merienda:wght@400;700&family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="css/comun.css">

    <title>San Andres</title>
    <style>
        .availability-form {
            margin-top: -50px;
            z-index: 2;
            position: relative;

        }

        @media screen and (max-width: 575px) {
            .availability-form {
                margin-top: 25px;
                padding: 0 35px;


            }
        }
    </style>
</head>

<body class="bg-light">
    <nav class="navbar navbar-expand-lg navbar-light bg-white px-lg-3 py-lg-2 shadow-sm sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand me-5 fw-bold fs-3 h-font" href="#index.php">BB San Andres</a>
            <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active me-2" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link me-2" href="#">Hospedaje</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link me-2" href="#">Guía Turístico</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link me-2" href="#">Bar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link me-2" href="#">Contáctanos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="#">Nosotros</a>
                    </li>


                </ul>
                <div class="d-flex">
                    <button type="button" class="btn btn-outline-dark shadow-none me-lg-3 me-2" data-bs-toggle="modal" data-bs-target="#loginModal">
                        Iniciar Sesión
                    </button>
                    <button type="button" class="btn btn-outline-dark shadow-none " data-bs-toggle="modal" data-bs-target="#registerModal">
                        Registrarse
                    </button>
                </div>
            </div>
        </div>
    </nav>

    <!-- loginModal -->
    <div class="modal fade" id="loginModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form>
                    <div class="modal-header">
                        <h5 class="modal-title d-flex align-items-center">
                            <i class="bi bi-person-circle fs-3 me-2"></i>Iniciar Sesión
                        </h5>
                        <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label class="form-label">Correo Electrónico</label>
                            <input type="email" class="form-control shadow-none">
                        </div>
                        <div class="mb-4">
                            <label class="form-label">Contraseña</label>
                            <input type="password" class="form-control shadow-none">
                        </div>
                        <div class="d-flex align-items-center justify-content-between mb-2">
                            <button type="submit" class="btn btn-dark shadow-none">Iniciar Sesión</button>
                            <a href="javascript: void(0)" class="text-secondary text-decoration-none">Olvide mi contraseña? </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- registerModal -->
    <div class="modal fade" id="registerModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <form>
                    <div class="modal-header">
                        <h5 class="modal-title d-flex align-items-center">
                            <i class="bi bi-person-lines-fill fs-3 me-2"></i>
                            Registro de usuario
                        </h5>
                        <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
                            Nota: Sus datos deben coincidir con su identificación (Nombres, celular,correo, etc)
                            que se solicitará al registrarse
                        </span>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-6 ps-0 mb-3">
                                    <label class="form-label">Nombre</label>
                                    <input type="text" class="form-control shadow-none">
                                </div>
                                <div class="col-md-6 p-0 mb-3">
                                    <label class="form-label">Correo Electrónico</label>
                                    <input type="email" class="form-control shadow-none">
                                </div>
                                <div class="col-md-6 ps-0 mb-3">
                                    <label class="form-label">Número de celular</label>
                                    <input type="number" class="form-control shadow-none">
                                </div>
                                <div class="col-md-6 p-0 mb-3">
                                    <label class="form-label">Foto</label>
                                    <input type="file" class="form-control shadow-none">
                                </div>
                                <div class="col-md-12 p-0 mb-3">
                                    <label class="form-label">Dirección</label>
                                    <textarea class="form-control shadow-none" rows="1"></textarea>
                                </div>
                                <div class="col-md-6 ps-0 mb-3">
                                    <label class="form-label ">Pincode</label>
                                    <input type="number" class="form-control shadow-none">
                                </div>
                                <div class="col-md-6 p-0 mb-3">
                                    <label class="form-label">Fecha de cumpleaños</label>
                                    <input type="date" class="form-control shadow-none">
                                </div>
                                <div class="col-md-6 ps-0 mb-3">
                                    <label class="form-label ">Contraseña</label>
                                    <input type="password" class="form-control shadow-none">
                                </div>
                                <div class="col-md-6 p-0 mb-3">
                                    <label class="form-label">Confirme su contraseña</label>
                                    <input type="password" class="form-control shadow-none">
                                </div>
                            </div>
                        </div>
                        <div class="text-center my-1">
                            <button type="submit" class="btn btn-dark shadow-none">Registrarse</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Carousel -->
    <div class="container-fluid px-lg-4 mt-4">
        <div class="swiper swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="images/carousel/1.png" class="w-100 d-block">
                </div>
                <div class="swiper-slide">
                    <img src="images/carousel/2.png" class="w-100 d-block">
                </div>
                <div class="swiper-slide">
                    <img src="images/carousel/3.png" class="w-100 d-block">
                </div>
                <div class="swiper-slide">
                    <img src="images/carousel/4.png" class="w-100 d-block">
                </div>
                <div class="swiper-slide">
                    <img src="images/carousel/5.png" class="w-100 d-block">
                </div>
                <div class="swiper-slide">
                    <img src="images/carousel/6.png" class="w-100 d-block">
                </div>
            </div>
        </div>
    </div>

    <!-- revisar disponibilidad  -->
    <div class="container availability-form">
        <div class="row">
            <div class="col-lg-12 bg-white shadow p-4 rounded">
                <h5 class="mb-4">Consultar disponibilidad de la reservación</h5>
                <form>
                    <div class="row align-items-end">
                        <div class="col-lg-3 mb-3">
                            <label class="form-label" style="font: weight 500;">Fecha de llegada</label>
                            <input type="date" class="form-control shadow-none">
                        </div>
                        <div class="col-lg-3 mb-3">
                            <label class="form-label" style="font: weight 500;">Fecha de salida</label>
                            <input type="date" class="form-control shadow-none">
                        </div>
                        <div class="col-lg-3 mb-3">
                            <label class="form-label" style="font: weight 500;">Adultos</label>
                            <select class="form-select shadow-none">
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="col-lg-2 mb-3">
                            <label class="form-label" style="font: weight 500;">Niños</label>
                            <select class="form-select shadow-none">
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="col-lg-1 mb-lg-3 mt-2">
                            <button type="submit" class="btn text-white shadow-none custon-bg">Buscar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>



    <!-- Hospedaje Rooms -->
    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Nuestras Habitaciones</h2>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 md-6 my-3">
                <div class="card border-0 shadow" style="max-width: 350px; margin:auto;">
                    <img src="images/rooms/1.jpg" class="card-img-top">
                    <div class="card-body">
                        <h5>Habitacion simple </h5>
                        <h6 class="mb-4">$ 15 por noche</h6>
                        <div class="features mb-4">
                            <h6 class="mb-1">Características</h6>
                            <span class="badge rounded-pill bg-light text-dark  text-wrap ">
                                2 Habitaciones
                            </span>
                            <span class="badge rounded-pill bg-light text-dark  text-wrap ">
                                1 Baño
                            </span>
                            <span class="badge rounded-pill bg-light text-dark  text-wrap ">
                                1 Balcon
                            </span>
                            <span class="badge rounded-pill bg-light text-dark  text-wrap ">
                                3 Sofa
                            </span>
                        </div>
                        <div class="facilities mb-4 ">
                            <h6 class="mb-1">Comodidades</h6>
                            <span class="badge rounded-pill bg-light text-dark  text-wrap ">
                                Wifi
                            </span>
                            <span class="badge rounded-pill bg-light text-dark  text-wrap ">
                                Televisión
                            </span>
                            <span class="badge rounded-pill bg-light text-dark  text-wrap ">
                                Calefacción
                            </span>
                            <span class="badge rounded-pill bg-light text-dark  text-wrap ">
                                A/C
                            </span>
                        </div>
                        <div class="rating mb-4">
                            <h6 class="mb-1">Clasificación</h6>
                            <span class="badge rounded-pill bg-light">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                            </span>

                        </div>
                        <div class="d-flex justify-content-evenly mb-2">
                            <a href="#" class="btn btn-sm text-white custon-bg shadow-none">Reservar ahora</a>
                            <a href="#" class="btn btn-sm btn-outline-dark shadow-none">Mas detalles</a>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 md-6 my-3">
                <div class="card border-0 shadow" style="max-width: 350px; margin:auto;">
                    <img src="images/rooms/1.jpg" class="card-img-top">
                    <div class="card-body">
                        <h5>Habitacion simple </h5>
                        <h6 class="mb-4">$ 15 por noche</h6>
                        <div class="features mb-4">
                            <h6 class="mb-1">Características</h6>
                            <span class="badge rounded-pill bg-light text-dark  text-wrap ">
                                2 Habitaciones
                            </span>
                            <span class="badge rounded-pill bg-light text-dark  text-wrap ">
                                1 Baño
                            </span>
                            <span class="badge rounded-pill bg-light text-dark  text-wrap ">
                                1 Balcon
                            </span>
                            <span class="badge rounded-pill bg-light text-dark  text-wrap ">
                                3 Sofa
                            </span>
                        </div>
                        <div class="facilities mb-4 ">
                            <h6 class="mb-1">Comodidades</h6>
                            <span class="badge rounded-pill bg-light text-dark  text-wrap ">
                                Wifi
                            </span>
                            <span class="badge rounded-pill bg-light text-dark  text-wrap ">
                                Televisión
                            </span>
                            <span class="badge rounded-pill bg-light text-dark  text-wrap ">
                                Calefacción
                            </span>
                            <span class="badge rounded-pill bg-light text-dark  text-wrap ">
                                A/C
                            </span>
                        </div>
                        <div class="rating mb-4">
                            <h6 class="mb-1">Clasificación</h6>
                            <span class="badge rounded-pill bg-light">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                            </span>

                        </div>
                        <div class="d-flex justify-content-evenly mb-2">
                            <a href="#" class="btn btn-sm text-white custon-bg shadow-none">Reservar ahora</a>
                            <a href="#" class="btn btn-sm btn-outline-dark shadow-none">Mas detalles</a>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 md-6 my-3">
                <div class="card border-0 shadow" style="max-width: 350px; margin:auto;">
                    <img src="images/rooms/1.jpg" class="card-img-top">
                    <div class="card-body">
                        <h5>Habitacion simple </h5>
                        <h6 class="mb-4">$ 15 por noche</h6>
                        <div class="features mb-4">
                            <h6 class="mb-1">Características</h6>
                            <span class="badge rounded-pill bg-light text-dark  text-wrap ">
                                2 Habitaciones
                            </span>
                            <span class="badge rounded-pill bg-light text-dark  text-wrap ">
                                1 Baño
                            </span>
                            <span class="badge rounded-pill bg-light text-dark  text-wrap ">
                                1 Balcon
                            </span>
                            <span class="badge rounded-pill bg-light text-dark  text-wrap ">
                                3 Sofa
                            </span>
                        </div>
                        <div class="facilities mb-4 ">
                            <h6 class="mb-1">Comodidades</h6>
                            <span class="badge rounded-pill bg-light text-dark  text-wrap ">
                                Wifi
                            </span>
                            <span class="badge rounded-pill bg-light text-dark  text-wrap ">
                                Televisión
                            </span>
                            <span class="badge rounded-pill bg-light text-dark  text-wrap ">
                                Calefacción
                            </span>
                            <span class="badge rounded-pill bg-light text-dark  text-wrap ">
                                A/C
                            </span>
                        </div>
                        <div class="rating mb-4">
                            <h6 class="mb-1">Clasificación</h6>
                            <span class="badge rounded-pill bg-light">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                            </span>

                        </div>
                        <div class="d-flex justify-content-evenly mb-2">
                            <a href="#" class="btn btn-sm text-white custon-bg shadow-none">Reservar ahora</a>
                            <a href="#" class="btn btn-sm btn-outline-dark shadow-none">Mas detalles</a>

                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-12  text-center mt-5">
                <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">Mas Habitaciones</a>
            </div>
        </div>
    </div>

    <!-- facilidades -->

    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Nuestras facilidades</h2>
    <div class="container">
        <div class="row justify-content-evenly px-lg-0 px-md-0 px-5">
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                <img src="images/facilities/wifi.svg" width="80px" alt="">
                <h5 class="mt-3">Wifi</h5>
            </div>
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                <img src="images/facilities/tv.svg" width="80px" alt="">
                <h5 class="mt-3">Televisión</h5>
            </div>
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                <img src="images/facilities/calefaccion.svg" width="80px" alt="">
                <h5 class="mt-3">Calefacción</h5>
            </div>
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                <img src="images/facilities/aire.svg" width="80px" alt="">
                <h5 class="mt-3">Aire acondicionado </h5>
            </div>
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                <img src="images/facilities/masajes.svg" width="80px" alt="">
                <h5 class="mt-3">Masajes</h5>
            </div>
            <div class="col-lg-12 text-center mt-5">
                <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">Mas facilidades</a>

            </div>
        </div>
    </div>

    <!-- Guias turiticos --><!-- 
    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Guía turístico</h2>
     -->

    <!-- Testimonios -->
    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Testimonios</h2>

    <div class="container mt-5">
        <div class="swiper swiper-testimonials">
            <div class="swiper-wrapper mb-5">

                <div class="swiper-slide bg-white p-4">
                    <div class="profile d-flex align-items-center m-3">
                        <img src="images/facilities/star.svg" width="30px">
                        <h6 class="m-0 ms-2">Usuario 1</h6>
                    </div>

                    <p>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                        Accusamus exercitationem enim magnam vero velit iste.
                        Maiores quae nisi quisquam repellendus.
                    </p>
                    <div class="rating">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                    </div>
                </div>

                <div class="swiper-slide bg-white p-4">
                    <div class="profile d-flex align-items-center m-3">
                        <img src="images/facilities/star.svg" width="30px">
                        <h6 class="m-0 ms-2">Usuario 1</h6>
                    </div>

                    <p>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                        Accusamus exercitationem enim magnam vero velit iste.
                        Maiores quae nisi quisquam repellendus.
                    </p>
                    <div class="rating">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                    </div>
                </div>

                <div class="swiper-slide bg-white p-4">
                    <div class="profile d-flex align-items-center m-3">
                        <img src="images/facilities/star.svg" width="30px">
                        <h6 class="m-0 ms-2">Usuario 1</h6>
                    </div>

                    <p>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                        Accusamus exercitationem enim magnam vero velit iste.
                        Maiores quae nisi quisquam repellendus.
                    </p>
                    <div class="rating">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                    </div>
                </div>

                <div class="swiper-slide bg-white p-4">
                    <div class="profile d-flex align-items-center m-3">
                        <img src="images/facilities/star.svg" width="30px">
                        <h6 class="m-0 ms-2">Usuario 1</h6>
                    </div>

                    <p>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                        Accusamus exercitationem enim magnam vero velit iste.
                        Maiores quae nisi quisquam repellendus.
                    </p>
                    <div class="rating">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                    </div>
                </div>

                <div class="swiper-slide bg-white p-4">
                    <div class="profile d-flex align-items-center m-3">
                        <img src="images/facilities/star.svg" width="30px">
                        <h6 class="m-0 ms-2">Usuario 1</h6>
                    </div>

                    <p>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                        Accusamus exercitationem enim magnam vero velit iste.
                        Maiores quae nisi quisquam repellendus.
                    </p>
                    <div class="rating">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                    </div>
                </div>

            </div>
            <div class="swiper-pagination"></div>
        </div>
        <div class="col-lg-12 text-center mt-5">
                <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">Mas Testimonios</a>
            </div>
    </div>

    <!-- Encuéntranos -->
    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Encuéntranos</h2>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 p-4 mb-lg-0 mb-3 bg-white rounded">
                <iframe class="w-100 rounded" height="320 px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15953.109267514472!2d-78.71090427065312!3d-1.5924905247142362!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91d309a715b9857f%3A0x3acc2e14ff31a9c8!2sSan%20Andr%C3%A9s!5e0!3m2!1ses-419!2sec!4v1697568164714!5m2!1ses-419!2sec" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="col-lg-4 col-md-4 ">
                <div class="bg-white p-4 rounded mb-4">
                    <h5>Llamanos </h5>
                    <a href="tel: 0987976325 " class="d-inline-block mb-2 text-decoration-none text-dark">
                        <i class="bi bi-telephone-fill"></i>
                        0987976325
                    </a>
                    <br>
                    <a href="tel: 0987976325 " class="d-inline-block  text-decoration-none text-dark">
                        <i class="bi bi-whatsapp"></i>
                        0987976325
                    </a>
                </div>

                <div class="bg-white p-4 rounded mb-4">
                    <h5>Siguenos </h5>
                    <a href="# " class="d-inline-block mb-3">
                        <span class="badge bg-light text-dark  fs-6 p-2">
                            <i class="bi bi-twitter-x me-1"></i>Twitter
                        </span>
                    </a>
                    <br>
                    <a href="# " class="d-inline-block mb-3">
                        <span class="badge bg-light text-dark  fs-6 p-2">
                            <i class="bi bi-facebook me-1"></i>Facebook
                        </span>
                    </a>
                    <br>
                    <a href="# " class="d-inline-block">
                        <span class="badge bg-light text-dark  fs-6 p-2">
                            <i class="bi bi-instagram me-1"></i>Instagram
                        </span>
                    </a>


                </div>

            </div>
        </div>
    </div>

    <!-- footer-->
    <div class="container-fluid bg-white mt-5">
        <div class="row">
            <div class="col-lg-4 p-4">
                <h3 class="h-font fw-bold fs-3 mb-2">BB SAN ANDRES</h3>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Omnis at debitis voluptatibus aut laboriosam.
                    Quam, eos! Amet nesciunt sed inventore similique veniam rerum saepe repudiandae beatae.
                    Alias maiores tempore illum?
                </p>
            </div>
            <div class="col-lg-4 p-4">
                <h5 class="mb-3">Enlaces</h5>
                <a href="#" class="d-inline-block mb-2 text-dark  text-decoration-none">Home</a><br>
                <a href="#" class="d-inline-block mb-2 text-dark  text-decoration-none">Hospedaje</a><br>
                <a href="#" class="d-inline-block mb-2 text-dark  text-decoration-none">Guias turiticos</a><br>
                <a href="#" class="d-inline-block mb-2 text-dark  text-decoration-none">Bar</a><br>
                <a href="#" class="d-inline-block mb-2 text-dark  text-decoration-none">Nosotros</a><br>

            </div>
            <div class="col-lg-4 p-4">
                <h5 class="mb-3">Siguenos</h5>
                <a href="# " class="d-inline-block text-dark text-decaration-none mb-2">
                    <i class="bi bi-twitter-x me-1"></i>Twitter
                </a><br>
                <a href="# " class="d-inline-block text-dark text-decaration-none mb-2">
                    <i class="bi bi-facebook me-1"></i>Facebook
                </a><br>
                <a href="# " class="d-inline-block text-dark text-decaration-none ">
                    <i class="bi bi-instagram me-1"></i>Instagram
                </a><br>
            </div>
        </div>

    </div>

    <h6 class="text-center bg-dark text-white  p-3 m-0">Desarrollado por Stalyn y Gitur-ESPOCH</h6>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper(".swiper-container", {
            spaceBetween: 30,
            effect: "fade",
            loop: true,
            autoplay: {
                delay: 3500,
                disableOnInteraction: false,
            }

        });
        var swiper = new Swiper(".swiper-testimonials", {
            effect: "coverflow",
            grabCursor: true,
            centeredSlides: true,
            slidesPerView: "auto",
            slidesPerView: "3",
            loop: true,
            coverflowEffect: {
                rotate: 50,
                stretch: 0,
                depth: 100,
                modifier: 1,
                slideShadows: false,
            },
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
                    slidesPerView: 2,
                },
                1024: {
                    slidesPerView: 3,
                }
            },

        });

        // 
    </script>

</body>

</html>