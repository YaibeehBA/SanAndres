<?php

$hname = "localhost";
$uname = "root";
$pass = "";
$db = "dbsanandres";

// Crear la conexión a la base de datos
$con = mysqli_connect($hname, $uname, $pass, $db);

// Verificar la conexión
if (!$con) {
    die("No se pudo conectar con la base de datos: " . mysqli_connect_error());
}
 
function filteration($data){
    foreach($data as $key => $value) {
    $value= trim($value);
    $value= stripcslashes($value);
    $value= htmlspecialchars($value);
    $value= strip_tags($value);
    $data [$key] = $value;
    }
    return $data;
}

function selectAll($table)
{
    $con = $GLOBALS['con'];
    $res = mysqli_query($con,"SELECT * FROM $table");
    return $res;

}
function select($sql,$values,$datatypes)
{
 $con=$GLOBALS['con'];
 if($stmt = mysqli_prepare($con,$sql)){
    mysqli_stmt_bind_param($stmt,$datatypes,...$values);
    if(mysqli_stmt_execute($stmt)){
        $res= mysqli_stmt_get_result($stmt);
        mysqli_stmt_close($stmt);
        return $res;
    }
    else{
        mysqli_stmt_close($stmt);
        die("La consulta no se puede ejecutar - Select");
    
    }
 }
 else{
    die("La consulta no se puede preparar - Select ");
 }
}

function update($sql,$values,$datatypes)
{
 $con=$GLOBALS['con'];
 if($stmt = mysqli_prepare($con,$sql)){
    mysqli_stmt_bind_param($stmt,$datatypes,...$values);
    if(mysqli_stmt_execute($stmt)){
        $res= mysqli_stmt_affected_rows($stmt);
        mysqli_stmt_close($stmt);
        return $res;
    }
    else{
        mysqli_stmt_close($stmt);
        die("La consulta no  puede ejecutar - Actualizar");
    
    }
 }
 else{
    die("La consulta no se puede preparar - Actualizar ");
 }
}

function insert($sql,$values,$datatypes)
{
 $con=$GLOBALS['con'];
 if($stmt = mysqli_prepare($con,$sql)){
    mysqli_stmt_bind_param($stmt,$datatypes,...$values);
    if(mysqli_stmt_execute($stmt)){
        $res= mysqli_stmt_affected_rows($stmt);
        mysqli_stmt_close($stmt);
        return $res;
    }
    else{
        mysqli_stmt_close($stmt);
        die("La consulta no  puede ejecutar - Insertar");
    
    }
 }
 else{
    die("La consulta no puede preparar - Insertar ");
 }
}



function delete($sql,$values,$datatypes)
{
 $con=$GLOBALS['con'];
 if($stmt = mysqli_prepare($con,$sql)){
    mysqli_stmt_bind_param($stmt,$datatypes, ...$values);
    if(mysqli_stmt_execute($stmt)){
        $res= mysqli_stmt_affected_rows($stmt);
        mysqli_stmt_close($stmt);
        return $res;
    }
    else{
        mysqli_stmt_close($stmt);
        die("La consulta no  puede ejecutar - Eliminar");

    }
 }
 else{
    die("La consulta no se puede preparar - Eliminar ");
 }
}

function del($sql, $values, $datatypes)
{
    $con = $GLOBALS['con'];
    if ($stmt = mysqli_prepare($con, $sql)) {
        // Verificamos si $values es un array
        if (!is_array($values)) {
            die("Los valores deben ser un array");
        }
        // Agregamos los parámetros al statement
        mysqli_stmt_bind_param($stmt, $datatypes, ...$values);

        if (mysqli_stmt_execute($stmt)) {
            $res = mysqli_stmt_affected_rows($stmt);
            mysqli_stmt_close($stmt);
            return $res;
        } else {
            mysqli_stmt_close($stmt);
            die("La consulta no puede ejecutarse - Eliminar");
        }
    } else {
        die("La consulta no se puede preparar - Eliminar");
    }
}
