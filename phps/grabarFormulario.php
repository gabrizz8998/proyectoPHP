<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Headers: Content-Type');
mysql_connect("localhost","s022045b_ci_it","luangalv14");
mysql_select_db("s022045b_ci_it");
$v1=$_POST['idNegocio'];
$v2=$_POST['Nombre'];
$v3=$_POST['Descripcion'];
$v4=$_POST['Latitud'];
$v5=$_POST['Longitud'];
$v6=$_POST['Imagen'];
if($v1==0){
$consulta = "insert into Negocios values(0,$v2,$v3,$v4,$v5,$v6)";
}
else
{
$consulta = "update Negocios set idNegocio=$v1,Nombre=$v2,Descripcion=$v3,Latitud=$v4,Longitud=$v5,Imagen=$v6 where idNegocio=$v1";
}
$sql= mysql_query($consulta);
echo "inserción creada ".$consulta;
mysql_close();
?>