<link rel="stylesheet" href="febe/style.css" type="text/css" media="screen" charset="utf-8">
<?php
if(isset($_POST["edit"]))
	{
		$idmade = $_POST["idmade"];
		$tende=$_POST['tende'];
		$socau=$_POST['socau'];
		$timer=$_POST['timer'];
		
		if(!isset($_FILES["fileimg"]["name"]))
		{
		$hinh=$_POST['imgfile'];	
		}
		else
		{
		$hinh=$_FILES["fileimg"]["name"];
		move_uploaded_file($_FILES["fileimg"]["tmp_name"],"../upload/images/dethi/".$_FILES["fileimg"]["name"]);	
		}
		if ($hinh <> "") 
		{
			$sql="UPDATE tbl_dethi SET tende = '".$tende."' ,socau= '".$socau."', timer ='".$timer."', hinhanh='".$hinh."'  WHERE made = ".$idmade;
			 mysql_query($sql);	
		}
		else
		{
			 $sql="UPDATE tbl_dethi SET tende = '".$tende."' ,socau= '".$socau."', timer ='".$timer."', WHERE made = ".$idmade;
			 mysql_query($sql);	
		}
		echo"<script>document.location.href='?menu=dethi_list' </script>";
		
	}
?>