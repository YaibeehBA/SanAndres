<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>San Andres - Hospedaje</title>
    <?php require('inc/links.php') ?>

</head>

<body class="bg-light">
    <?php require('inc/header.php') ?>

    <div class="my-5 px-4">
        <h2 class="fw-bold h-font text-center">Hospedaje </h2>
        <div class="h-line bg-dark"></div>

    </div>

    <div class="container">
        <div class="row">

            <div class="col-lg-3 col-md-12 mb-lg-0 mb-4 px-lg-0">
                <nav class="navbar navbar-expand-lg navbar-light bg-white rounded shadow">
                    <div class="container-fluid flex-lg-column align-items-stretch">
                        <h4 class="mt-2">Buscar por</h4>
                        <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse"
                            data-bs-target="#filterDropdown" aria-controls="navbarNav" aria-expanded="false"
                            aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse flex-column align-items-stretch mt-2" id="filterDropdown">
                            <div class="border bg-light p-3 rounded mb-3">
                                <h5 class="mb-3" style="font-size: 18px;">Disponibilidad</h5>
                                <label class="form-label">Fecha de llegada</label>
                                <input type="date" class="form-control shadow-none mb-3">
                                <label class="form-label">Fecha de salida</label>
                                <input type="date" class="form-control shadow-none">
                            </div>

                            <div class="border bg-light p-3 rounded mb-3">
                                <h5 class="mb-3" style="font-size: 18px;">Facilidades</h5>
                                <div class="mb-2">
                                    <input type="checkbox" id="f1" class="form-check-input shadow-none me-1">
                                    <label class="form-check-label" for="f1">Facilidad 1</label>
                                </div>
                                <div class="mb-2">
                                    <input type="checkbox" id="f2" class="form-check-input shadow-none me-1">
                                    <label class="form-check-label" for="f2">Facilidad 2</label>
                                </div>
                                <div class="mb-2">
                                    <input type="checkbox" id="f3" class="form-check-input shadow-none me-1">
                                    <label class="form-check-label" for="f3">Facilidad 3</label>
                                </div>

                            </div>


                        </div>
                        <div class="border bg-light p-3 rounded mb-3">
                            <h5 class="mb-3" style="font-size: 18px;">Capasidad</h5>
                            <div class="d-flex">
                                <div class="me-3 ">
                                    <label class="form-label">Adultos</label>
                                    <input type="number" class="form-control shadow-none">
                                </div>
                                <div>
                                    <label class="form-label">Niños</label>
                                    <input type="number" class="form-control shadow-none">
                                </div>
                            </div>

                        </div>
                    </div>
                </nav>
            </div>

            <div class="col-lg-9 col-md-12 px-4 ">
                <!-- Inicio de la carta de rooms  -->
                <div class="card mb-4 border-0 shadow">
                    <div class="row g-0 p-3 align-items-center">
                        <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
                            <img src="images/rooms/1.jpg" class="img-fluid rounded" alt="...">
                        </div>

                        <div class="col-md-5 px-lg-3 px-md-3 px-0">
                            <h5 class="mb-3">Habitacion simple</h5>
                            <div class="features mb-3">
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
                            <div class="facilities mb-3 ">
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

                            <div class="guests ">
                                <h6 class="mb-1">Capacidad</h6>
                                <span class="badge rounded-pill bg-light text-dark  text-wrap ">
                                    5 Adultos
                                </span>
                                <span class="badge rounded-pill bg-light text-dark  text-wrap ">
                                    4 Niños
                                </span>

                            </div>
                        </div>

                        <div class="col-md-2 mt-lg-0  mt-md-0 mt-4 text-center">
                            <h6 class="mb-4">$ 15 por noche</h6>
                            <a href="#" class="btn btn-sm w-100 text-white custon-bg shadow-none mb-2">Reservar
                                ahora</a>
                            <a href="#" class="btn btn-sm  w-100 btn-outline-dark shadow-none">Mas detalles</a>

                        </div>
                    </div>
                </div>
                <!-- Fin de la carta de rooms  -->
                <!-- Inicio de la carta de rooms  -->
                <div class="card mb-4 border-0 shadow">
                    <div class="row g-0 p-3 align-items-center">
                        <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
                            <img src="images/rooms/1.jpg" class="img-fluid rounded" alt="...">
                        </div>

                        <div class="col-md-5 px-lg-3 px-md-3 px-0">
                            <h5 class="mb-3">Habitacion simple</h5>
                            <div class="features mb-3">
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
                            <div class="facilities mb-3 ">
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

                            <div class="guests ">
                                <h6 class="mb-1">Capacidad</h6>
                                <span class="badge rounded-pill bg-light text-dark  text-wrap ">
                                    5 Adultos
                                </span>
                                <span class="badge rounded-pill bg-light text-dark  text-wrap ">
                                    4 Niños
                                </span>

                            </div>
                        </div>

                        <div class="col-md-2 text-center">
                            <h6 class="mb-4">$ 15 por noche</h6>
                            <a href="#" class="btn btn-sm w-100 text-white custon-bg shadow-none mb-2">Reservar
                                ahora</a>
                            <a href="#" class="btn btn-sm  w-100 btn-outline-dark shadow-none">Mas detalles</a>

                        </div>
                    </div>
                </div>
                <!-- Fin de la carta de rooms  -->
                <!-- Inicio de la carta de rooms  -->
                <div class="card mb-4 border-0 shadow">
                    <div class="row g-0 p-3 align-items-center">
                        <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
                            <img src="images/rooms/1.jpg" class="img-fluid rounded" alt="...">
                        </div>

                        <div class="col-md-5 px-lg-3 px-md-3 px-0">
                            <h5 class="mb-3">Habitacion simple</h5>
                            <div class="features mb-3">
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
                            <div class="facilities mb-3 ">
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

                            <div class="guests ">
                                <h6 class="mb-1">Capacidad</h6>
                                <span class="badge rounded-pill bg-light text-dark  text-wrap ">
                                    5 Adultos
                                </span>
                                <span class="badge rounded-pill bg-light text-dark  text-wrap ">
                                    4 Niños
                                </span>

                            </div>
                        </div>

                        <div class="col-md-2 text-center">
                            <h6 class="mb-4">$ 15 por noche</h6>
                            <a href="#" class="btn btn-sm w-100 text-white custon-bg shadow-none mb-2">Reservar
                                ahora</a>
                            <a href="#" class="btn btn-sm  w-100 btn-outline-dark shadow-none">Mas detalles</a>

                        </div>
                    </div>
                </div>
                <!-- Fin de la carta de rooms  -->
            </div>
      
        </div>
    </div>

    <!-- footer-->
    <?php require('inc/footer.php') ?>

</body>

</html>