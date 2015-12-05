<?php 
//session_start();
if(isset($_SESSION["email"])){
	
?>

<div id="menu-wrapper">
		<div id="menu">
			<ul>
				<li class="current_page_item"><a href="/bda/index.php" accesskey="1" title="">Homepage</a></li>
				<!--<li><a href="registro.php" accesskey="2" title=""></a></li>-->
				<li><a href="/bda/admincp/log_out.php" accesskey="3" title="">Salir</a></li>
				<li><a href="/bda/admincp/index.php" accesskey="4" title="">Admin CP</a></li>
				<li><a href="#" accesskey="5" title="">Bienvenido <?php echo $_SESSION["email"] ?></a></li>
			</ul>
		</div>
</div>

<?php 


}else{

  ?>

  <div id="menu-wrapper">
		<div id="menu">
			<ul>
				<li class="current_page_item"><a href="index.php" accesskey="1" title="">Homepage</a></li>
				<li><a href="registro.php" accesskey="2" title="">Registrate</a></li>
				<li><a href="login.php" accesskey="3" title="">Ingresar</a></li>
				<li><a href="#" accesskey="4" title="">Careers</a></li>
				<li><a href="#" accesskey="5" title="">Contact Us</a></li>
			</ul>
		</div>
</div>

<?php } ?>