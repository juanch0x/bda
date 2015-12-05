function validarContrasena () {
	
	var bandera;
	var pwd = document.getElementById("password");
	var pwd2 = document.getElementById("vpassword");

		if(pwd.value != pwd2.value){

			bandera = false;
			alert("Las contraseñas no son iguales!");

		} else{

			bandera = true;

		}

			return bandera;

}



 
   


 

