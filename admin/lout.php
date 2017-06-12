<?php
session_start();
	//if(isset($_GET['$_']))
	//{
		//unset($_SESSION['USER']);
		session_destroy(); 
		header('Location: login.php' );
	//}
?>