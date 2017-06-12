<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
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
</head>
<body>
<div class="total">
    <span class="frame-total">
    <div class="totalbq">
      <div class="total-top">ĐĂNG NHẬP</div>
      <div class="total-cent">
      <?PHP
	if(isset($_SESSION['user']))
	{
	echo "<center>Xin chào:<br/><b>".$_SESSION['user'];
	echo '</b><br/><a href="xuly/thoat.php?unset">Thoát</a></center>';
	}
	else{
	
?>
              <form action="" name="frmdangnhap" onSubmit="return check_frmdangnhap(this)" method="post" enctype="multipart/form-data">
             <label for="userid" class="username"><img src="images/icon_username.png" width="15" height="15" align="absmiddle" /></label>
      <input type="text" name="userid" placeholder="UserName" id="userid" value="" size="22" />
                          <br />
           <label for="password"><img src="images/icon_forget.png" width="15" height="15" align="absmiddle" /></label>
                <input type="password" placeholder="PassWord" name="password" id="password" value="" size="22" />               
       		<br />
              <input type="submit" class="bottom1" name="dangnhap" id="dangnhap" value="Đăng nhập" />
        </form> 
        <?php
	}
?>	
      </div>
    </div>
    </span>
  </div>
</body>
</html>
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