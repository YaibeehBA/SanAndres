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

            <div class="col-lg-3 col-md-12 mb-lg-0 mb-4">
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

            
        </div>
    </div>

    <!-- footer-->
    <?php require('inc/footer.php') ?>

</body>

</html>