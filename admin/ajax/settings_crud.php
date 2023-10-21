<?php
require('../inc/dbconfig.php');
require('../inc/essentials.php');

adminLogin();

if (isset($_POST['get_general'])) 
{

    $q = "SELECT * FROM `settings` WHERE  `sr_no`= ? ";
    $values = [1];
    $res = select($q, $values,"i");
    $data= mysqli_fetch_assoc($res);
    $json_data = json_encode($data);
    echo $json_data;


}
if (isset($_POST['upd_general']))
{
    $frm_data = filteration($_POST);
    $q = "UPDATE `settings` SET `titulo`=?,`nosotros`=?  WHERE  `sr_no`=?";
    $values = [$frm_data['titulo'],$frm_data['nosotros'],1];
    $res = update($q,$values,'ssi');
    echo $res;
}

if (isset($_POST['upd_shutdown']))
{
    $frm_data = ($_POST['upd_shutdown']==0) ? 1 :0;
    
    $q = "UPDATE `settings` SET `shutdown`=? WHERE `sr_no`=?";
    $values = [$frm_data,1];
    $res = update($q,$values,'ii');
    echo $res;
}



?>