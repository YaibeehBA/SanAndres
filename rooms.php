<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require('inc/links.php') ?>
    <title><?php echo $settings_r['titulo']?> - HOSPEDAJE</title>


</head>

<body class="bg-light">
    <?php require('inc/header.php') ?>

    <div class="my-5 px-4">
        <h2 class="fw-bold h-font text-center">Hospedaje </h2>
        <div class="h-line bg-dark"></div>

    </div>

    <div class="container-fluid">
        <div class="row">

            <div class="col-lg-3 col-md-12 mb-lg-0 mb-4 ps-4">
                <nav class="navbar navbar-expand-lg navbar-light bg-white rounded shadow">
                    <div class="container-fluid flex-lg-column align-items-stretch">
                        <h4 class="mt-2">Buscar por</h4>
                        <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#filterDropdown" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
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

            <?php
            $room_res = select("SELECT * FROM `rooms` WHERE `status`=? AND `removed`=? ", [1,0],'ii');
            while($room_data = mysqli_fetch_assoc($room_res) ){
                // obtener características 
                $fea_q = mysqli_query($con, "SELECT f.name FROM `features`f 
                INNER JOIN `room_features` rfea ON f.id = rfea.features_id 
                WHERE rfea.room_id = '$room_data[id]'" );

                $features_data = "";
                while($fea_row = mysqli_fetch_assoc($fea_q) ){
                    $features_data.=" <span class='badge rounded-pill bg-light text-dark  text-wrap me-1 mb-1 '>
                    $fea_row[name]
                    </span>";
                }
                // obtener facilidades
                $fac_q = mysqli_query($con, "SELECT f.name FROM `facilities`f 
                INNER JOIN `room_facilities` rfac ON f.id = rfac.facilities_id 
                WHERE rfac.room_id ='$room_data[id]'" );

                $facilities_data = "";
                while($fac_row = mysqli_fetch_assoc($fac_q) ){
                    $facilities_data.=" <span class='badge rounded-pill bg-light text-dark  text-wrap me-1 mb-1 '>
                    $fac_row[name]
                    </span>";
                }
               // obtener imagen

                $room_thumb = ROOM_IMG_PATH. "thumbnail.jpg";
                $thumb_q =mysqli_query($con,"SELECT * FROM `room_images` 
                WHERE `room_id`=$room_data[id] 
                AND `thumb`='1'");

                if(mysqli_num_rows($thumb_q)>0){
                    $thumb_res =  mysqli_fetch_assoc($thumb_q);
                    $room_thumb = ROOM_IMG_PATH.$thumb_res['image'];
                }

                // impimir habitación  la  card-> de bootstrap
                echo <<<data
                <!-- Inicio de la carta de rooms -->
                <div class="card mb-4 border-0 shadow">
                    <div class="row g-0 p-3 align-items-center">
                        <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
                            <div class="card-img-container">
                                <img src="$room_thumb" class="card-img rounded" style="height: 210px; object-fit: cover;" alt="...">
                            </div>
                        </div>
                
                        <div class="col-md-5 px-lg-3 px-md-3 px-0">
                            <h5 class="mb-3">$room_data[name]</h5>
                            <div class="features mb-3">
                                <h6 class="mb-1">Características</h6>
                                $features_data
                            </div>
                            <div class="facilities mb-3">
                                <h6 class="mb-1">Comodidades</h6>
                                $facilities_data
                            </div>
                
                            <div class="guests">
                                <h6 class="mb-1">Capacidad</h6>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                    $room_data[adult] Adultos
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                    $room_data[children] Niños
                                </span>
                            </div>
                        </div>
                
                        <div class="col-md-2 mt-lg-0 mt-md-0 mt-4 text-center">
                            <h6 class="mb-4">$ $room_data[price] por noche</h6>
                            <a href="#" class="btn btn-sm w-100 text-white custon-bg shadow-none mb-2">Reservar ahora</a>
                            <a href="room_detalles.php?id=$room_data[id]" class="btn btn-sm w-100 btn-outline-dark shadow-none">Más detalles</a>
                        </div>
                    </div>
                </div>
                <!-- Fin de la carta de rooms -->
                data;
                


            }
            
            ?>

        
            </div>

        </div>
    </div>

    <!-- footer-->
    <?php require('inc/footer.php') ?>

</body>

</html>