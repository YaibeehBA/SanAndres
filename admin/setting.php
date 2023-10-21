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
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <h5 class="card-title">Configuraciones General</h5>
                            <button type="button" class="btn btn-dark shadow-none btn-sm" data-bs-toggle="modal" data-bs-target="#general-s">
                                <i class="bi bi-pencil-square"></i> Editar
                            </button>
                        </div>
                        <h6 class="card-subtitle mb-1 fw-bold">Titulo</h6>
                        <p class="card-text" id="site_title"></p>
                        <h6 class="card-subtitle mb-1 fw-bold">Nosotros</h6>
                        <p class="card-text" id="site_about"></p>
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
                                        <input type="text" name="site_title" class="form-control shadow-none">
                                    </div>
                                    <div class="col-md-12 p-0 mb-3">
                                        <label class="form-label">Nosotros</label>
                                        <textarea name="site_about" class="form-control shadow-none" rows="6"></textarea>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn text-secondary shadow-none" data-bs-dismiss="modal">Cancelar</button>
                                    <button type="button" class="btn custon-bg text-white shadow-none">Guardar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <?php require('inc/scripts.php') ?>

    <script>
        let general_data;

        function get_general()
        {
            let site_title = document.getElementById('site_title');
            let site_about = document.getElementById('site_about');

            let xhr = new XMLHttpRequest();
            xhr.open("POST", "ajax/settings_crud.php", true);
            xhr.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
 

            xhr.onload =function (){
                general_data = JSON.parse(this.responseText);

                site_title.innerText = general_data.site_title;
                site_about.innerText = general_data.site_about;

                console.log(general_data);

            }

            xhr.send('get_general');


        }

        window.onload = function(){
            get_general();
        }
    

    </script>

</body>

</html>