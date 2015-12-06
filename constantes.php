<?php 

/*

Primer nivel: mysql.user: Son los permisos para la base de datos completa.
Segundo nivel: mysql.db Es para una base de datos puntual. Esta tiene prioridad sobre la anterior.
Tercer nivel: mysql.tables_priv: Igual que mysql.db pero para una tabla en especial.
Cuarto nivel: mysql.columns_priv Igual que el anterior pero para una columna dentro de una tabla. 

Para llamar a una constante se **NO SE USA $**

*/

$ruta = $_SERVER['HTTP_HOST'];


if($ruta == "localhost"){

define("db_server", "localhost");
define("db_user", "");
define("db_pwd", "asdqwe123");
define("db_name", "dba10");

}

else if($ruta == "10.80.0.101"){

define("db_server", "10.80.0.101");
define("db_user", "dba15_10");
define("db_pwd", "dba15_10");
define("db_name", "dba15_10");

}

else{

echo "Hubo un error en la conexión a la base de datos";

}


 ?>
