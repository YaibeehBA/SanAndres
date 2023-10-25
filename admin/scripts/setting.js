
let general_data, contacts_data;
let general_s_form = document.getElementById('general_s_form');
let site_title_inp = document.getElementById('titulo_inp');
let site_about_inp = document.getElementById('nosotros_inp');
let contacts_s_form = document.getElementById('contacts_s_form');

let team_s_form = document.getElementById('team_s_form');
let member_name_inp = document.getElementById('member_name_inp');
let member_picture_inp = document.getElementById('member_picture_inp');



function get_general() {
    let site_title = document.getElementById('titulo');
    let site_about = document.getElementById('nosotros');

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

general_s_form.addEventListener('submit', function(e) {
    e.preventDefault();
    upd_general(site_title_inp.value, site_about_inp.value);

});

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


        if (this.responseText == 1 && general_data.shutdown == 0) {
            alert('success', 'Web activado el modo suspender');
        } else {
            alert('success', 'Web desactivado el modo suspender');

        }
        get_general();
    }

    xhr.send('upd_shutdown=' + val);

}


function get_contacts() {

    let contacts_p_id = ['address', 'gmap', 'pn1', 'pn2', 'email', 'fb', 'insta', 'tw'];
    let iframe = document.getElementById('iframe');

    let xhr = new XMLHttpRequest();
    xhr.open("POST", "ajax/settings_crud.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");


    xhr.onload = function() {
        contacts_data = JSON.parse(this.responseText);
        contacts_data = Object.values(contacts_data);

        for (i = 0; i < contacts_p_id.length; i++) {
            document.getElementById(contacts_p_id[i]).innerText = contacts_data[i + 1];

        }
        iframe.src = contacts_data[9];

        contacts_inp(contacts_data);
        //  console.log(contacts_data);


    }

    xhr.send('get_contacts');


}

function contacts_inp(data) {
    let contacts_inp_id = ['address_inp', 'gmap_inp', 'pn1_inp', 'pn2_inp', 'email_inp', 'fb_inp', 'insta_inp', 'tw_inp', 'iframe_inp'];
    for (i = 0; i < contacts_inp_id.length; i++) {
        document.getElementById(contacts_inp_id[i]).value = data[i + 1];

    }
}


contacts_s_form.addEventListener('submit', function(e) {
    e.preventDefault();
    upd_contacts();
});

function upd_contacts() {
    let index = ['address', 'gmap', 'pn1', 'pn2', 'email', 'fb', 'insta', 'tw', 'iframe'];
    let contacts_inp_id = ['address_inp', 'gmap_inp', 'pn1_inp', 'pn2_inp', 'email_inp', 'fb_inp', 'insta_inp', 'tw_inp', 'iframe_inp'];

    let data_str = "";
    for (i = 0; i < index.length; i++) {
        data_str += index[i] + "=" + document.getElementById(contacts_inp_id[i]).value + '&';
    }
    data_str += "upd_contacts";

    let xhr = new XMLHttpRequest();
    xhr.open("POST", "ajax/settings_crud.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");


    xhr.onload = function() {
        var myModal = document.getElementById('contacts-s');
        var modal = bootstrap.Modal.getInstance(myModal);
        modal.hide();
        if (this.responseText == 1) {
            alert('success', 'Cambios Guardados!');
            get_contacts();
        } else {
            alert('error', 'No se guardaron los cambios');

        }
    }

    xhr.send(data_str);
}

team_s_form.addEventListener('submit', function(e) {
    e.preventDefault();
    add_member();
});

function add_member() {
    let data = new FormData();
    data.append('name', member_name_inp.value);
    data.append('picture', member_picture_inp.files[0]);
    data.append('add_member', '');


    let xhr = new XMLHttpRequest();
    xhr.open("POST", "ajax/settings_crud.php", true);


    xhr.onload = function() {

        // Ocultar el modal despues de dar click en guardar
        var myModal = document.getElementById('team-s');
        var modal = bootstrap.Modal.getInstance(myModal);
        modal.hide();

        if (this.responseText == 'inv_img') {
            alert('error', 'Solo se permiten imagenes JPG Y PNG!')
        } else if (this.responseText == 'inv_size') {
            alert('error', 'La imagen debe tener menos de 2MB!')
        } else if (this.responseText == 'upd_failed') {
            alert('error', 'Fallo la carga de la imagen ¡Servidor caído!')
        } else {
            alert('success', 'Nuevo miembro añadido!');
            member_name_inp.value = '';
            member_picture_inp.value = '';
            get_members();

        }

    }

    xhr.send(data);


};

function get_members(){


    let xhr = new XMLHttpRequest();
    xhr.open("POST", "ajax/settings_crud.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");


    xhr.onload = function() {
        document.getElementById('team-data').innerHTML = this.responseText;
       

    }

    xhr.send('get_members');


}

function rem_member(val)
{

    let xhr = new XMLHttpRequest();
    xhr.open("POST", "ajax/settings_crud.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");


    xhr.onload = function() {
        if(this.responseText==1){
        alert('success', 'Miembro eliminado!');
        get_members();
    }
    else{
        alert('error', '¡Servidor caído!')
    }
    }


    xhr.send('rem_member='+val);

}

window.onload = function() {
    get_general();
    get_contacts()
    get_members();
}
