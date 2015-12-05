
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	
	<title>Login</title>

<script type="text/javascript" src="js/main.js"></script>

</head>
<body>



<?php 

require("constantes.php");
require("conexion.php");

$email = $_POST['email'];
$pwd = md5($_POST['password']);
$ip = $_SERVER['REMOTE_ADDR'];

$sql = "SELECT count(*) FROM usuario AS u
			WHERE u.email='".$email."' AND
				u.password='".$pwd."'";

$sql_result = mysql_query($sql) or die ("Error".$sql);

$valida_login = mysql_fetch_array($sql_result);

if($valida_login[0] == 1){

//INSERTAR LOG

	$insert_log = "INSERT INTO log(email,id_accion,ip)
						VALUES('".$email."',1,'".$ip."')";

	$insert_log_result = mysql_query($insert_log) or die ("Error al insertar el log!");


session_start();
$_SESSION["email"] = $email;

echo "Login correcto, en 5 segundos será redireccionado";
?>

<script>


 function loginCorrecto(){  

  window.location ="index.php";
  } setTimeout ("loginCorrecto()", 5000);  


</script>
<?php 
}



else{

//INSERTAR LOG

	$insert_log = "INSERT INTO log(email,id_accion,ip)
						VALUES('".$email."',2,'".$ip."')";

	$insert_log_result = mysql_query($insert_log) or die ("Error al insertar el log!");

	echo "Login incorrecto";


?>

<script>
	

 function loginIncorrecto(){

  window.location = "login.php";
  } setTimeout ("loginIncorrecto()", 5000);

							
	
</script>

<?php 
}


 ?>
	
</body>
</html>
