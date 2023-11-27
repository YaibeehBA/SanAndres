<?php
require('inc/essentials.php');
require('inc/dbconfig.php');
adminLogin();


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN PANEL - Habitaciones</title>
    <?php require('inc/links.php') ?>


</head>

<body class="bg-light">

    <?php require('inc/header.php'); ?>


    <div class="container-fluid" id="main-content">
        <div class="row">
            <div class="col-lg-10 ms-auto p-4 overflow-hidden ">
                <h3 class="mb-4">Habitaciones</h3>

                <div class="card border-0 shadow-sm mb-4">
                    <div class="card-body">
                        <div class="text-end  mb-4">
                            <button type="button" class="btn btn-dark shadow-none btn-sm" data-bs-toggle="modal" data-bs-target="#add-room">
                                <i class="bi bi-plus-square"></i> Añadir
                            </button>
                        </div>

                        <div class="table-responsive-lg" style="height: 450px; overflow-y: scroll;">
                            <table class="table table-hover border text-center">
                                <thead>
                                    <tr class="bg-dark text-light">
                                        <th scope="col">#</th>
                                        <th scope="col">Nombre</th>
                                        <th scope="col">Area</th>
                                        <th scope="col">Capacidad</th>
                                        <th scope="col">Precio</th>
                                        <th scope="col">Cantidad</th>
                                        <th scope="col">Estado</th>
                                        <th scope="col">Acción</th>
                                    </tr>
                                </thead>
                                <tbody id="room-data">

                                </tbody>
                            </table>
                        </div>

                    </div>

                </div>

            </div>
        </div>


        <!-- Modal Configuraciones añadir habitación -->
        <div class="modal fade" id="add-room" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <form id="add_room_form" autocomplete="off">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Añadir Habitación</h5>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label class="form-label fw-bold">Nombre</label>
                                    <input type="text" name="name" class="form-control shadow-none" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label fw-bold">Area</label>
                                    <input type="number" min="1" name="area" class="form-control shadow-none" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label fw-bold">Precio</label>
                                    <input type="number" name="price" class="form-control shadow-none" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label fw-bold">Cantidad</label>
                                    <input type="number" name="quantity" class="form-control shadow-none" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label fw-bold">Adultos (Max.)</label>
                                    <input type="number" min="1" name="adult" class="form-control shadow-none" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label fw-bold">Niños (Max.)</label>
                                    <input type="number" min="1" name="children" class="form-control shadow-none" required>
                                </div>
                                <div class="col-12 mb-3">
                                    <label class="form-label fw-bold">Características</label>
                                    <div class="row">
                                        <?php
                                        $res = selectAll('features');
                                        while ($opt = mysqli_fetch_assoc($res)) {
                                            echo "
                                                <div class='col-md-3 mb-1'>
                                                   <label>
                                                     <input type='checkbox' name='features' value='$opt[id]' class='form-check-input shadow-none'>
                                                     $opt[name]
                                                   </label>
                                                </div>
                                            ";
                                        }
                                        ?>

                                    </div>
                                </div>
                                <div class="col-12 mb-3">
                                    <label class="form-label fw-bold">Facilidades</label>
                                    <div class="row">
                                        <?php
                                        $res = selectAll('facilities');
                                        while ($opt = mysqli_fetch_assoc($res)) {
                                            echo "
                                                <div class='col-md-3 mb-1'>
                                                   <label>
                                                     <input type='checkbox' name='facilities' value='$opt[id]' class='form-check-input shadow-none'>
                                                     $opt[name]
                                                   </label>
                                                </div>
                                            ";
                                        }
                                        ?>

                                    </div>
                                </div>
                                <div class="col-12 mb-3">
                                    <label class="form-label fw-bold">Descripción</label>
                                    <textarea name="desc" rows="4" class="form-control shadow-none" required></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="reset" class="btn text-secondary shadow-none" data-bs-dismiss="modal">Cancelar</button>
                            <button type="submit" class="btn custon-bg text-white shadow-none">Guardar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <!-- Modal Configuraciones editar habitación -->
        <div class="modal fade" id="edit-room" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <form id="edit_room_form" autocomplete="off">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Editar Habitación</h5>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label class="form-label fw-bold">Nombre</label>
                                    <input type="text" name="name" class="form-control shadow-none" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label fw-bold">Area</label>
                                    <input type="number" min="1" name="area" class="form-control shadow-none" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label fw-bold">Precio</label>
                                    <input type="number" name="price" class="form-control shadow-none" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label fw-bold">Cantidad</label>
                                    <input type="number" name="quantity" class="form-control shadow-none" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label fw-bold">Adultos (Max.)</label>
                                    <input type="number" min="1" name="adult" class="form-control shadow-none" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label fw-bold">Niños (Max.)</label>
                                    <input type="number" min="1" name="children" class="form-control shadow-none" required>
                                </div>
                                <div class="col-12 mb-3">
                                    <label class="form-label fw-bold">Características</label>
                                    <div class="row">
                                        <?php
                                        $res = selectAll('features');
                                        while ($opt = mysqli_fetch_assoc($res)) {
                                            echo "
                                                <div class='col-md-3 mb-1'>
                                                   <label>
                                                     <input type='checkbox' name='features' value='$opt[id]' class='form-check-input shadow-none'>
                                                     $opt[name]
                                                   </label>
                                                </div>
                                            ";
                                        }
                                        ?>

                                    </div>
                                </div>
                                <div class="col-12 mb-3">
                                    <label class="form-label fw-bold">Facilidades</label>
                                    <div class="row">
                                        <?php
                                        $res = selectAll('facilities');
                                        while ($opt = mysqli_fetch_assoc($res)) {
                                            echo "
                                                <div class='col-md-3 mb-1'>
                                                   <label>
                                                     <input type='checkbox' name='facilities' value='$opt[id]' class='form-check-input shadow-none'>
                                                     $opt[name]
                                                   </label>
                                                </div>
                                            ";
                                        }
                                        ?>

                                    </div>
                                </div>
                                <div class="col-12 mb-3">
                                    <label class="form-label fw-bold">Descripción</label>
                                    <textarea name="desc" rows="4" class="form-control shadow-none" required></textarea>
                                </div>
                                <input type="hidden" name="room_id">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="reset" class="btn text-secondary shadow-none" data-bs-dismiss="modal">Cancelar</button>
                            <button type="submit" class="btn custon-bg text-white shadow-none">Guardar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <!-- Modal  gestión de imagen habitación -->
        <div class="modal fade" id="room-images" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Nombre de la habitación</h5>
                        <button type="button" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div id="image-alert">

                        </div>
                        <div class="border-bottom border-3 pb-3 mb-3  ">
                            <form id="add_image_form">
                                <label class="form-label fw-bold">Añadir imagen</label>
                                <input type="file" name="image" accept=".jpg, .png, .webp, .jpeg" class="form-control shadow-none mb-3" required>
                                <button class="btn custon-bg text-white shadow-none">Añadir</button>
                                <input type="hidden" name="room_id">
                            </form>
                        </div>
                        <div class="table-responsive-lg" style="height: 350px; overflow-y: scroll;">
                            <table class="table table-hover border text-center">
                                <thead>
                                    <tr class="bg-dark text-light sticky-top">
                                        <th scope="col" width="60%">Imagen</th>
                                        <th scope="col">Vista previa</th>
                                        <th scope="col">Eliminar</th>

                                    </tr>
                                </thead>
                                <tbody id="room-image-data">

                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <?php require('inc/scripts.php') ?>
        
        <script src="scripts/rooms.js"></script>

</body>

</html>