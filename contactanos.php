<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>San Andres - Contactanos</title>
    <?php require('inc/links.php') ?>

</head>

<body class="bg-light">
    <?php require('inc/header.php') ?>

    <div class="my-5 px-4">
        <h2 class="fw-bold h-font text-center">Contáctanos </h2>
        <div class="h-line bg-dark"></div>
        <p class="text-center mt-3">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
            Asperiores aperiam ut numquam <br> alias labore cum culpa earum sit, minima excepturi.
        </p>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 mb-5 px-4">
                <div class="bg-white rounded shadow p-4  ">
                    <iframe class="w-100 rounded mb-4" height="320 px"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15953.109267514472!2d-78.71090427065312!3d-1.5924905247142362!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91d309a715b9857f%3A0x3acc2e14ff31a9c8!2sSan%20Andr%C3%A9s!5e0!3m2!1ses-419!2sec!4v1697568164714!5m2!1ses-419!2sec"
                        loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    <h5>Dirección</h5>
                    <a href="https://maps.app.goo.gl/jqb7AXAz5i8qETMAA" target="_blank"
                        class="d-inline-block text-decoration-none text-dark mb-2">
                        <i class="bi bi-geo-alt-fill"></i>
                        C75X+4HM, Chimborazo, San Andrés
                    </a>
                    <h5 class="mt-4">Llamanos </h5>
                    <a href="tel: 0987976325 " class="d-inline-block mb-2 text-decoration-none text-dark">
                        <i class="bi bi-telephone-fill"></i>
                        0987976325
                    </a>
                    <br>
                    <a href="tel: 0987976325 " class="d-inline-block  text-decoration-none text-dark">
                        <i class="bi bi-whatsapp"></i>
                        0987976325
                    </a>
                    <h5 class="mt-4">Correo Electónico</h5>
                    <a href="mailto: sanandres2023@gmail.com" class="d-inline-block  text-decoration-none text-dark">
                        <i class="bi bi-envelope-fill"></i> sanandres2023@gmail.com</a>

                    <h5 class="mt-4">Siguenos </h5>
                    <a href="# " class="d-inline-block text-dark fs-5 me-2">
                        <i class="bi bi-twitter-x me-1"></i>
                    </a>

                    <a href="# " class="d-inline-block  text-dark fs-5 me-2">
                        <i class="bi bi-facebook me-1"></i>
                    </a>

                    <a href="# " class="d-inline-block  text-dark fs-5 ">
                        <i class="bi bi-instagram me-1"></i>

                    </a>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 px-4">
                <div class="bg-white rounded shadow p-4 ">
                    <form>
                        <h5>Enviar mensaje</h5>
                        <div class="mt-3">
                            <label class="form-label" style="font-weight: 500;">Nombre</label>
                            <input type="text" class="form-control shadow-none">
                        </div>
                        <div class="mt-3">
                            <label class="form-label" style="font-weight: 500;">Correo Electrónico</label>
                            <input type="email" class="form-control shadow-none">
                        </div>
                        <div class="mt-3">
                            <label class="form-label" style="font-weight: 500;">Asunto</label>
                            <input type="text" class="form-control shadow-none">
                        </div>
                        <div class="mt-3">
                            <label class="form-label" style="font-weight: 500;">Mensaje</label>
                            <textarea class="form-control shadow-none" rows="5" style="resize:none;"></textarea>
                        </div>
                        <button type="submit" class="btn custon-bg text-white mt-3 ">Enviar Mensaje</button>

                    </form>
                </div>
            </div>

        </div>
    </div>

    <!-- footer-->
    <?php require('inc/footer.php') ?>

</body>

</html>