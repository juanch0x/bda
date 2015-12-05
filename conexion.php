<?php 

require_once("constantes.php");

$connect = mysql_connect(db_server, db_user, db_pwd);


if(!$connect){

echo "Error de conexión!";

}

$db_selected = mysql_select_db(db_name, $connect);

?>