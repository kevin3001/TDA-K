<?php
    include ("menu.php");
?>
<h1>Este es el inicio</h1>
<?php
    $db = new mysqli('localhost','root','','td3');
    if($db->connect_errno)
    {
        die("error al conectar".$db->connect_error);
    }
    $sql = "SELECT * FROM paul" ;
    $result = $db->query($sql);

    if(!$result){
        die("error al consultar: ".$db->error);
    }
    if($result->num_rows==0){
        echo "No hay registros";
    }
    else{
        echo "<table border=1>";
        echo "<tr>";
        echo "<tH>ID</tH><tH>NOMBRES</tH><tH>APELLIDOS</tH><tH>EDAD</tH><tH>OPCIONES</tH>";
        echo "</tr>";
        while($reg = $result->fetch_assoc()){
            echo "<tr>";
            echo "<td>".$reg['id']."</td>";
            echo "<td>".$reg['nombres']."</td>";
            echo "<td>".$reg['apellidos']."</td>";
            echo "<td>".$reg['edad']."</td>";
            echo "<td><a href='eliminar.php?id=".$reg['id']."'>Eliminar</a></td>";
            echo "</tr>";
        }
        echo "</table>";
    }
?>