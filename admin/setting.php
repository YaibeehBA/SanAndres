<?php
require('inc/essentials.php');
adminLogin();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN PANEL - Configuraciones</title>
    <?php require('inc/links.php') ?>


</head>

<body class="bg-light">

    <?php require('inc/header.php'); ?>


    <div class="container-fluid" id="main-content">
        <div class="row">
            <div class="col-lg-10 ms-auto p-4 overflow-hidden ">
                <h3 class="mb-4">Configuraciones</h3>

                <!-- General Configuraciones -->
                <div class="card border-0 shadow-sm mb-4">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <h5 class="card-title">Configuraciones General</h5>
                            <button type="button" class="btn btn-dark shadow-none btn-sm" data-bs-toggle="modal" data-bs-target="#general-s">
                                <i class="bi bi-pencil-square"></i> Editar
                            </button>
                        </div>
                        <h6 class="card-subtitle mb-1 fw-bold">Titulo</h6>
                        <p class="card-text" id="titulo"></p>
                        <h6 class="card-subtitle mb-1 fw-bold">Nosotros</h6>
                        <p class="card-text" id="nosotros"></p>
                    </div>
                </div>
                <!-- Modal Configuraciones -->
                <div class="modal fade" id="general-s" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <form>
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Configuraciones Generales</h5>
                                </div>
                                <div class="modal-body">
                                    <div class="mb-3">
                                        <label class="form-label">Titulo</label>
                                        <input type="text" name="site_title" id="titulo_inp" class="form-control shadow-none">
                                    </div>
                                    <div class="col-md-12 p-0 mb-3">
                                        <label class="form-label">Nosotros</label>
                                        <textarea name="site_about" id="nosotros_inp" class="form-control shadow-none" rows="6"></textarea>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" onclick="site_title.value= general_data.titulo , site_about.value =general_data.nosotros" class="btn text-secondary shadow-none" data-bs-dismiss="modal">Cancelar</button>
                                    <button type="button" onclick="upd_general(site_title.value, site_about.value)" class="btn custon-bg text-white shadow-none">Guardar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- Sesion Shutdown -->

                <div class="card border-0 shadow-sm ">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <h5 class="card-title m-0 ">Suspender Web </h5>
                            <div class="form-check form-switch">
                                <form>
                                    <input onchange="upd_shutdown(this.value)" class="form-check-input" type="checkbox" id="shutdown-toggle">
                                </form>
                            </div>
                        </div>
                        <p class="card-text">
                            No se permitirá a ningún cliente poder realizar una reservarción cuando este activado el modo suspender
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <?php require('inc/scripts.php') ?>

    <script>
        let general_data;

        function get_general() {
            let site_title = document.getElementById('titulo');
            let site_about = document.getElementById('nosotros');

            let site_title_inp = document.getElementById('titulo_inp');
            let site_about_inp = document.getElementById('nosotros_inp');

            let shutdown_toggle = document.getElementById('shutdown-toggle');

            let xhr = new XMLHttpRequest();
            xhr.open("POST", "ajax/settings_crud.php", true);
            xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");


            xhr.onload = function() {
                general_data = JSON.parse(this.responseText);

                site_title.innerText = general_data.titulo;
                site_about.innerText = general_data.nosotros;

                site_title_inp.value = general_data.titulo;
                site_about_inp.value = general_data.nosotros;

                if (general_data.shutdown == 0) {
                    shutdown_toggle.checked = false;
                    shutdown_toggle.value = 0;
                } else {
                    shutdown_toggle.checked = true;
                    shutdown_toggle.value = 1;
                }

            }

            xhr.send('get_general');


        }



        function upd_general(site_title_val, site_about_value) {
            let xhr = new XMLHttpRequest();
            xhr.open("POST", "ajax/settings_crud.php", true);
            xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");


            xhr.onload = function() {
                // Ocultar el modal despues de dar click en guardar
                var myModal = document.getElementById('general-s');
                var modal = bootstrap.Modal.getInstance(myModal);
                modal.hide();

                if (this.responseText == 1) {
                    alert('success', 'Cambios guardados!')
                    get_general();
                } else {
                    alert('error', 'No se guardaron los cambios!')

                }

            }

            xhr.send('titulo=' + site_title_val + '&nosotros=' + site_about_value + '&upd_general');

        }

        function upd_shutdown(val) {
            let xhr = new XMLHttpRequest();
            xhr.open("POST", "ajax/settings_crud.php", true);
            xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

            xhr.onload = function() {
              

            if(this.responseText == 1 && general_data.shutdown == 0)
            {
                alert('success', 'Web activado el modo suspender');
            }
            else
            {
                alert('success', 'Web desactivado el modo suspender');

            }
            get_general();
        }

        xhr.send('upd_shutdown=' + val);

        }


        window.onload = function() {
            get_general();
        }
    </script>

</body>

</html>