<? error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);?>
<DIV id="categories-3" class="widget widget_categories"><h2 class="widgettitle">Đăng Nhập</h2>
<script language="javascript">
function check_frmdangnhap(the_form)
{ 
 var the_tendn = the_form.userid.value;
 var the_password=the_form.password.value;
	 if (the_tendn==''){
			alert("Vui lòng nhập user name!");
			the_form.userid.focus();
			return false;
		}
		if (the_password=='')
		{
			alert("Vui lòng nhật mật khẩu!");
			the_form.password.focus();
			return false;
		}
}
</script>
<?PHP
	if(isset($_SESSION['user']))
	{
	echo "<center>Xin chào:<br/><b>".$_SESSION['user'];
	echo '</b><br/><a href="xuly/thoat.php?unset">Thoát</a></center>';
	}
	else{
	//echo'<a class="login" href="?page=dangnhap" title="Trắc nghiệm" rel="home">Đăng nhập</a>';
?>
		<form action="" name="frmdangnhap" onSubmit="return check_frmdangnhap(this)" method="post" enctype="multipart/form-data">
		<ul>
			<li style="padding:2px 0px; color:#00F;  font-weight:bold;">
			Username:
			<input type="text" name="userid" size="28" value="tên đăng nhập">
			</li>
			<li style="padding:2px 0px;color:#00F; font:Verdana; font-weight:bold;">
			Password:
			<input type="password" name="password" size="28" value="nhập mật khẩu">
			</li>
			<li  style="padding:2px 0px; text-align:center;">
			<input type="submit" name="dangnhap" value="Đăng nhập">
			</li>
		</ul>
		</form>
<?php
	}
?>		
 </DIV>
<?
 if(isset($_POST['dangnhap']))
 {
	include("config/connect.php");
	$id=$_POST['userid'];
	$p=md5($_POST['password']); 
	if($id && $p)
     {
      $sql="select * from tbl_hocsinh where idhs='".$id."' and pass='".$p."'";
	  $query=mysql_query($sql);
	  @$count=mysql_num_rows($query);
      if($count<1)
      {
     echo "<script>alert('Đăng nhập sai!');</script>";
	  echo"<script>document.location.href='index.php?page=dangnhap' </script>";
      }
      else
      { 
	  session_start();
	  $row=mysql_fetch_array($query);
	  $_SESSION['id']=$row['idhs'];
      $_SESSION['user']=$row['hoten'];
	  $_SESSION['khoihoc']=$row['khoi'];
	  echo"<script>document.location.href='index.php?page=vaothi' </script>";
	}
    }
}?>