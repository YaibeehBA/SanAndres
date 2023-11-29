 <div class="container-fluid bg-white mt-5">
     <div class="row">
         <div class="col-lg-4 p-4">
             <h3 class="h-font fw-bold fs-3 mb-2"><?php echo $settings_r['titulo']?></h3>
             <p>
             <?php echo $settings_r['nosotros']?>
             </p>
         </div>
         <div class="col-lg-4 p-4">
             <h5 class="mb-3">Enlaces</h5>
             <a href="index.php" class="d-inline-block mb-2 text-dark  text-decoration-none">Home</a><br>
             <a href="rooms.php" class="d-inline-block mb-2 text-dark  text-decoration-none">Hospedaje</a><br>
             <a href="" class="d-inline-block mb-2 text-dark  text-decoration-none">Guias turiticos</a><br>
             <a href="" class="d-inline-block mb-2 text-dark  text-decoration-none">Bar</a><br>
             <a href="nosotros.php" class="d-inline-block mb-2 text-dark  text-decoration-none">Nosotros</a><br>

         </div>
         <div class="col-lg-4 p-4">
             <h5 class="mb-3">Siguenos</h5>
             <?php
                if ($contact_r['tw'] != "") {
                    echo <<<data
                <a href="$contact_r[tw]" class="d-inline-block text-dark text-decoration-none mb-2">
                    <i class="bi bi-twitter-x me-1"></i>Twitter
                </a><br>
                data;
                }
                ?>
             <a href="<?php echo $contact_r['fb'] ?>" class="d-inline-block text-dark text-decoration-none mb-2">
                 <i class="bi bi-facebook me-1"></i>Facebook
             </a><br>
             <a href="<?php echo $contact_r['insta'] ?> " class="d-inline-block text-dark text-decoration-none ">
                 <i class="bi bi-instagram me-1"></i>Instagram
             </a><br>
         </div>
     </div>

 </div>

 <h6 class="text-center bg-dark text-white  p-3 m-0">Desarrollado por Stalyn y Gitur-ESPOCH</h6>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

 <script>
     function alert(type, msg, position = 'body') {

         let bs_class = (type == "success") ? "alert-success" : "alert-danger";
         let element = document.createElement('div');
         element.innerHTML = `
            <div class="alert ${bs_class} alert-dismissible fade show "  role="alert" ">
                <strong class="me-3">${msg}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            `;
         if (position == 'body') {
             document.body.append(element);
             element.classList.add('custon-alert');
         } else {
             document.getElementById(position).appendChild(element);
         }
         setTimeout(remAlert, 3000);

     }

     function remAlert() {
         document.getElementsByClassName('alert')[0].remove();

     }


     function setActive() {
         let navbar = document.getElementById('nav-bar');
         let a_tags = navbar.getElementsByTagName('a');

         for (i = 0; i < a_tags.length; i++) {
             let file = a_tags[i].href.split('/').pop();
             let file_name = file.split('.')[0];

             if (document.location.href.indexOf(file_name) >= 0) {
                 a_tags[i].classList.add('active');
             }
         }
     }


     let register_form = document.getElementById('register-form');
     register_form.addEventListener('submit', (e) => {
         e.preventDefault();

         let data = new FormData();

         data.append('name', register_form.elements['name'].value);
         data.append('email', register_form.elements['email'].value);
         data.append('phonenum', register_form.elements['phonenum'].value);
         data.append('address', register_form.elements['address'].value);
         data.append('pincode', register_form.elements['pincode'].value);
         data.append('dob', register_form.elements['dob'].value);
         data.append('pass', register_form.elements['pass'].value);
         data.append('cpass', register_form.elements['cpass'].value);
         data.append('profile', register_form.elements['profile'].files[0]);
         data.append('register', '');


         var myModal = document.getElementById("registerModal");
         var modal = bootstrap.Modal.getInstance(myModal);
         modal.hide();

         let xhr = new XMLHttpRequest();
         xhr.open("POST", "/SanAndres/ajax/login_register.php", true);

        //  xhr.open("POST", "ajax/login_register", true);


         xhr.onload = function() {
             if (this.responseText == 'pass_mismatch') {
                 alert('error', "La contraseña no coinciden");
             }else if(this.responseText == 'email_already'){
                alert('error', "Correo electrónico ya registrado");
             }else if(this.responseText == 'phone_already'){
                alert('error', "Numero de teléfono ya registrado");
             }else if (this.responseText =='inv_img'){
                alert('error', "Solo imagen en formato JPG, WEBP Y PNG");
             }else if (this.responseText =='upd_failed'){
                alert('error', "Imagen subida fallida!");
             }else if (this.responseText =='mail_failed'){
                alert('error', "No se pudo enviar el email de confirmación! Servidor caído");
             }else if (this.responseText =='ins_failed'){
                alert('error', "No se pudo registrar! Servidor caído");
             }else{
                alert('success', "Registro exitoso. Confirme su cuenta link enviado a su correo");
                register_form.reset();
             }

         };
         xhr.send(data);




     });



     setActive();
 </script>
 <!-- chat bot  -->
 <script type="text/javascript">
     (function(d, m) {
         var kommunicateSettings = {
             "appId": "aaf89c949af73ff1593bffaeb9f3aca6",
             "popupWidget": true,
             "automaticChatOpenOnNavigation": true
         };
         var s = document.createElement("script");
         s.type = "text/javascript";
         s.async = true;
         s.src = "https://widget.kommunicate.io/v2/kommunicate.app";
         var h = document.getElementsByTagName("head")[0];
         h.appendChild(s);
         window.kommunicate = m;
         m._globals = kommunicateSettings;
     })(document, window.kommunicate || {});
     /* NOTE : Use web server to view HTML files as real-time update will not work if you directly open the HTML file in the browser. */
 </script>