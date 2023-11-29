<?php 

//fronted datos iniciales

define ('SITE_URL', 'http://127.0.0.1/sanandres/');
define ('ABOUT_IMG_PATH',SITE_URL.'images/about/');
define ('CAROUSEL_IMG_PATH',SITE_URL.'images/carousel/');
define ('FACILITIES_IMG_PATH',SITE_URL.'images/facilities/');
define ('ROOM_IMG_PATH',SITE_URL.'images/rooms/');
define ('USERS_IMG_PATH',SITE_URL.'images/users/');

//backend  proceso de carga necesita estos datos 

define ('UPLOAD_IMAGE_PATH',$_SERVER['DOCUMENT_ROOT'].'/sanandres/images/');
define ('ABOUT_FOLDER','about/');
define ('CAROUSEL_FOLDER','carousel/');
define ('FACILITIES_FOLDER','facilities/');
define ('ROOMS_FOLDER','rooms/');
define ('USERS_FOLDER','users/');

// sendgrid  api key

define('SENDGRID_API_KEY',"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");
function adminLogin(){
  session_start();
  if(!(isset($_SESSION['adminLogin']) && $_SESSION['adminLogin']== true)){
      header("location: index.php");
      exit;
  }
//  session_regenerate_id(true) ;

}

function redirect ($url) {
  header("Location: $url");
  exit;
}



function alert( $type,$msg ) {
    
    $bs_class = ($type == "success") ? "alert-success" : "alert-danger";
    
    echo <<<alert
    <div class="alert $bs_class alert-dismissible fade show custon-alert" style="position:fixed;
    top: 80px;
    right: 25px;" role="alert">
      <strong class="me-3">$msg</strong>
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    alert;
}

function uploadImage( $image, $folder ) 
{
  $valid_mine =['image/jpeg','image/png','image/webp'];
  $img_mine = $image['type'];
  if(! in_array($img_mine, $valid_mine) ){
    return 'inv_img'; // formato invalido de la imagen
  }
  else if(($image['size']/(1024*1024))>2){
    return 'inv_size';  // tamaño invalido 2mb
  }else{
    $ext = pathinfo($image['name'], PATHINFO_EXTENSION);
    $rname = 'IMG'.random_int(11111,99999).".$ext";

    $img_path = UPLOAD_IMAGE_PATH.$folder.$rname;
    if(move_uploaded_file($image['tmp_name'],$img_path)){
      return $rname;
    }
    else{
      return 'upd_failed';
    }
  }
}


function  deleteImage($image, $folder)
{
  if(unlink(UPLOAD_IMAGE_PATH.$folder.$image)){
    return true;
  }
  else{
    return false;
  }
}

function uploadSVGImage( $image, $folder ) 
{
  $valid_mine =['image/svg+xml'];
  $img_mine = $image['type'];
  if(! in_array($img_mine, $valid_mine) ){
    return 'inv_img'; // formato invalido de la imagen
  }
  else if(($image['size']/(1024*1024))>1){
    return 'inv_size';  // tamaño invalido 1mb
  }else{
    $ext = pathinfo($image['name'], PATHINFO_EXTENSION);
    $rname = 'IMG'.random_int(11111,99999).".$ext";

    $img_path = UPLOAD_IMAGE_PATH.$folder.$rname;
    if(move_uploaded_file($image['tmp_name'],$img_path)){
      return $rname;
    }
    else{
      return 'upd_failed';
    }
  }
}

function uploadUserImage($image)
{
  $valid_mine =['image/jpeg','image/png','image/webp'];
  $img_mine = $image['type'];
  if(! in_array($img_mine, $valid_mine) ){
    return 'inv_img'; // formato invalido de la imagen
  }
  else{
    $ext = pathinfo($image['name'], PATHINFO_EXTENSION);
    $rname = 'IMG'.random_int(11111,99999).".jpeg";

    $img_path = UPLOAD_IMAGE_PATH.USERS_FOLDER.$rname;

    if($ext == 'png' || $ext == 'PNG'){
      $img = imagecreatefrompng($image['tmp_name']);
    }
    else if($ext == 'webp' || $ext == 'WEBP'){
      $img = imagecreatefromwebp($image['tmp_name']);
    }
    else{
      $img = imagecreatefromjpeg($image['tmp_name']);
    }



    if(imagejpeg($img, $img_path,75)){
      return $rname;
    }
    else{
      return 'upd_failed';
    }
  }
}