<?php 

//fronted datos iniciales

define ('SITE_URL', 'http://127.0.0.1/sanandres/');
define ('ABOUT_IMG_PATH',SITE_URL.'images/about/');
define ('CAROUSEL_IMG_PATH',SITE_URL.'images/carousel/');

//backend  proceso de carga necesita estos datos 

define ('UPLOAD_IMAGE_PATH',$_SERVER['DOCUMENT_ROOT'].'/sanandres/images/');
define ('ABOUT_FOLDER','about/');
define ('CAROUSEL_FOLDER','carousel/');

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
    <div class="alert $bs_class alert-dismissible fade show custon-alert" role="alert">
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