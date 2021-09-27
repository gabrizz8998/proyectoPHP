<?php
$conexion=mysql_connect("localhost","s022045b_ci_it","luangalv14");
mysql_select_db("s022045b_ci_it",$conexion);
?>
<?php

$consulta="SELECT * FROM Negocios";
$resultado=mysql_query($consulta,$conexion);
?>
<?php
echo "<table border=2>";
echo "<tr>";
echo    "<th>Id Negocio</th>";
echo    "<th>Nombre</th>";
echo    "<th>Descripcion</th>";
echo    "<th>Latitud</th>";
echo    "<th>Longitud</th>";
echo    "<th>Imagen</th>";
echo "</tr>";

for($i=0;$i<4;$i++){
    echo "<tr>";
        echo "<td>".mysql_result($resultado, $i, "idNegocio")."</td>";
        echo "<td>".mysql_result($resultado, $i, "nombre")."</td>";
        echo "<td>: ".mysql_result($resultado, $i, "descripcion")."</td>";
        echo "<td>".mysql_result($resultado, $i, "latitud")."</td>";
        echo "<td>".mysql_result($resultado, $i, "longitud")."</td>";
        echo "<td>".mysql_result($resultado, $i, "imagen")."</td>"; 
        echo "</tr>";
}
echo "</table>";
?>
