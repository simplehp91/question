<?php
if(isset($_POST["edit"]))
{
		
	$idNews = $_POST["idNews"];
	$tieude=$_POST['tieude'];
	$tomtat=$_POST['tomtat'];
	$chitiet=$_POST['chitiet'];
	$trangthai=$_POST['trangthai'];
	if(!isset($_FILES["fileimg"]["name"]))
	{
		$hinh=$_POST['imgfile'];	
	}
	else
	{
		
		move_uploaded_file($_FILES["fileimg"]["tmp_name"],"../upload/images/news/".$_FILES["fileimg"]["name"]);	
		$hinh=$_FILES["fileimg"]["name"];
	}
	if ($hinh <> "") 
	{
		 $sql="UPDATE tbl_news SET tieude = '".$tieude."' , tomtat ='".$tomtat."', chitiet ='".$chitiet."' ,trangthai ='".$trangthai."' , hinhanh = '".$hinh."' WHERE id = ".$idNews;
		 mysql_query($sql);
	}
	else
	{
		$sql="UPDATE tbl_news SET tieude = '".$tieude."' , tomtat ='".$tomtat."', chitiet ='".$chitiet."' ,trangthai ='".$trangthai."'  WHERE id = ".$idNews;
		mysql_query($sql);			
	}
	echo"<script>document.location.href='?menu=tintuc_list' </script>";	
}
?>