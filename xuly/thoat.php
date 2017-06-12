<?php
session_start();
if(isset($_GET['unset']))
{
	unset($_SESSION['user']);
	unset($_SESSION['khoihoc']);	
	//echo "<script>alert('Thoát thành công!!!');
	echo"<script>document.location.href='../index.php' </script>";
}
?>