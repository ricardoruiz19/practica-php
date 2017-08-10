<?php
   include("config.php");
   session_start();
//se envia la consulta  
//$result = mysql_query("SELECT id, fecha, usuario, clave FROM form");  


/*$sql = "SELECT * FROM form ";
$result = mysqli_query($db,$sql);
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
//se despliega el resultado  
echo "<table>";  
echo "<tr>";  
echo "<th>Id</th>";  
echo "<th>Fecha</th>";  
echo "<th>Usuario</th>";
echo "<th>Clave</th>";   
echo "</tr>";  
while ($result = mysql_fetch_row()){   
    echo "<tr>";  
    echo "<td>$row[5]></td>";  
    echo "<td>$row[7]</td>";  
    echo "<td>$row[4]</td>";  
    echo "<td>$row[2]</td>"; 
    echo "</tr>";  
}  
echo "</table>";  
?> */

mysql_connect("localhost", "root", "", "practica") or
    die("No se pudo conectar: " . mysql_error());
mysql_select_db("mibd");

$resultado = mysql_query("SELECT * FROM form");

while ($fila = mysql_fetch_array($resultado, MYSQL_NUM)) {
    printf("ID: %s  Nombre: %s", $fila[0], $fila[1]);  
}

mysql_free_result($resultado);
?> 

