<?php
$db = new mysqli('localhost','root','','td3');
    if($db->connect_errno)
    {
        die("error al conectar".$db->connect_error);
    }
    $nombres = $_POST['nombres'];
    $apellidos = $_POST['apellidos'];
    $edad = $_POST['edad'];

    $result=$db->query( "INSERT INTO paul(nombres,apellidos,edad)
                VALUES('{$nombres}','{$apellidos}','{$edad}')");
$result = $db->query("DELETE FROM paul WHERE id='{$id}'");
if(!$result){
    die("error al consultar: ".$db->error);
}
//echo "Borrado el registro".$id;

header("location:index.php");
?>