<?php

require ('../admin/inc/dbconfig.php');
require ('../admin/inc/essentials.php');

require("../inc/sendgrid/sendgrid-php.php");



function send_mail($uemail, $name, $token)
{
   
    $email = new \SendGrid\Mail\Mail(); 
    $email->setFrom("sanandresturismo2023@gmail.com", "BB SAN ANDRES");
    $email->setSubject("Link de verificación de tu cuenta");

    $email->addTo($uemail,$name);

    $email->addContent(
        "text/html", 
        "Click en el link para confirmar tu email: <br>
        <a href='".SITE_URL."email_confirm.php?email_confirmation&email=$uemail&token=$token"."'>
            CLICK ME
        </a>
        "
    );
    $sendgrid = new \SendGrid(SENDGRID_API_KEY);
    try{
        $sendgrid->send($email);
        return 1;
    }
    catch(Exception $e){
        return 0;
    }
   
}

if(isset($_POST['register']))
{
    $data = filteration($_POST);

    // confirmar password y coincidir password

    if($data['pass'] != $data['cpass']){
        echo 'pass_mismatch';
        exit;
    }

    //revisar usuario existente o no
    
    $u_exist = select("SELECT * FROM `user_cred` WHERE `email`=? OR `phonenum`=? LIMIT 1",
    [$data['email'],$data['phonenum']],"ss");


    if(mysqli_num_rows($u_exist)!=0)
    {
        $u_exist = mysqli_fetch_assoc($u_exist);
        echo ($u_exist_fetch['email'] == $data['email']) ? 'email_already' : 'phone_already';
        exit;
    }

    //subir imagen del usuario al servidor

   $img = uploadUserImage($_FILES['profile']);

   if($img == 'inv_img'){
    echo 'inv_img';
    exit;
   }
   else if($img == 'upd_failed'){
    echo 'upd_failed';
    exit;
   }

   //enviar link de confirmación al usuario email
   $token = bin2hex(random_bytes(16));
   if(!send_mail($data['email'], $data['name'], $token))
   {
    echo 'mail_failed';
    exit;
   }

   // ...
$enc_pass = password_hash($data['pass'], PASSWORD_BCRYPT);

$query = "INSERT INTO `user_cred` (`name`, `email`, `address`, `phonenum`, `pincode`, `dob`, `profile`, `password`, `token`)
    VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";

$values = [
    $data['name'], 
    $data['email'], 
    $data['address'], 
    $data['phonenum'], 
    $data['pincode'], 
    $data['dob'],
    $img, 
    $enc_pass,
    $token
];

// Verifica que el número de tipos coincida con el número de valores
// Supongamos que todos los valores son cadenas, por lo que "sssssssss"
$types = "sssssssss";

if (insert($query, $values, $types)) {
    echo 1;
} else {
    echo 'ins_failed';
}
// ...


//    $enc_pass = password_hash($data['pass'],PASSWORD_BCRYPT);

//    $query = "INSERT INTO `user_cred`( `name`, `email`, `address`, `phonenum`, `pincode`, `dob`,
//     `profile`, `password`, `token`) VALUES (?,?,?,?,?,?,?,?,?)";

//     $values = [$data['name'],$data['email'],$data['address'],$data['phonenum'],$data['pincode'],$data['dob']
//     ,$img,$enc_pass ,$token];

//     if(insert($query,$values,"ssssssssss"))
//     {
//         echo 1;
//     }else{
//         echo 'ins_failed';
//     }


}

?>