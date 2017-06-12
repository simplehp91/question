<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="febe/style.css" type="text/css" media="screen" charset="utf-8">
<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
	<script type="text/javascript" src="js/jquery.validate.min.js"></script>
	<script type="text/javascript" src="js/messages_vi.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$("#contact").validate({
				errorElement: "span", // Định dạng cho thẻ HTML hiện thông báo lỗi
				rules: {
					cpassword: {
						equalTo: "#password" // So sánh trường cpassword với trường có id là password
					},
					min_field: { min: 5 }, //Giá trị tối thiểu
					max_field: { max : 10 }, //Giá trị tối đa
					range_field: { range: [4,10] }, //Giá trị trong khoảng từ 4 - 10
					rangelength_field: { rangelength: [4,10] } //Chiều dài chuỗi trong khoảng từ 4 - 10 ký tự
				}
			});
		});
	</script>
<title>Untitled Document</title>
<style type="text/css">
<!--
.style1 {
	font-size: 18px;
	font-weight: bold;
	color: #000;
}
.style2 { padding:10px 0px 10px 0px; color: #808000}
.ten_field{
padding:10px;
}
.form1 {
	margin:0px 0px 0px 20px;
}
.dethi_news{
	margin:20px 200px;
	border: 1px solid #C1DAD7;

	
}
.tbltitle
{
	margin:0px 10px;	
	
}
#required{
	color:#F00;
	background:#F00;}
-->
</style>
</head>

<body>
<div style="margin:20px 70px 10px; font-size:14px;">
<font size="2" face="Tahoma"><b><a href="">Nhân viên</a><img src="images/bl3.gif" border="0" /> Thêm nhân viên mới</b></font></div>
<hr size="1" color="#cadadd" style="margin:15px auto;" />
<form action="" name="frmthemhs" id="contact" class="contact-form" onsubmit="return checkform();" method="post" enctype="multipart/form-data">
<table width="550" border="0"  cellpadding="0" cellspacing="0" background="images/body.png" class="dethi_news">
    <tr>
      <td height="38px"colspan="2" align="center" class="style1">THÊM DANH SÁCH NHÂN VIÊN</td>
    </tr>
     <tr>
      <td width="102" align="right" class="tbltitle">Tên đăng nhập :</td>
		   <td width="343"> <input class="required1" minlength="4" size=30 type="text" name="tendn" value="" autocomplete = "off" id="tendn"></td>
    </tr>
    <tr>
      <td width="102" align="right" class="tbltitle">Tên nhân viên :</td>
		   <td width="343"> <input size=30 type="text" name="tennv" value="" autocomplete = "off" id="tennv"></td>
    </tr>
   <tr>
			<td align="right" class="tbltitle">Mật khẩu :</td>
			<td><input size=25  class="required" minlength="6" type="password" name="pass" value=""autocomplete = "off" id="password"/></td>
  </tr>
  <tr>
			<td align="right" class="tbltitle">Nhập lại mật khẩu :</td>
			<td><input  class="required" size=25 type="password" name="cpassword" id="pass" value=""autocomplete = "off"/></td>
  </tr>

     <tr>
			<td align="right" class="tbltitle">Email : </td>
		<td><input class="required1" size=30 type="text" name="email" value="" autocomplete = "off" id="email"/></td>
  </tr>
    <tr>
      <td align="right" class="tbltitle">Quyền User: </td>
		<td>
        	<select name='level'>
			<option value='1'>1-Admin</option>
			<option value='2'>2-Giáo Viên</option>
			</select><br />
        </td>	
    </tr>
    <tr>
      <td colspan="2" style="padding: 10px 0px 10px 0px" align="center">
      <label>
        <input type="submit" name="ok" id="ok" value="Thêm nhân viên" />
      </label>
      </td>
    </tr>
  </table>
  </form>
</body>
</html>
<?php
if(isset($_POST['ok']))
	{	 
		$day=date("d/m/Y");
		$tendn=($_POST['tendn']);
		$tenvn=($_POST['tennv']);
		$email=($_POST['email']);
		$p=md5($_POST['pass']);	
		$level=($_POST['level']);
		
		//
		$check="select tendn from tbl_nhanvien where tendn='".$tendn."' LIMIT 1";
		$result=mysql_query($check);
		$i=mysql_num_rows($result);
		if ($i)
		{
 			
			echo "<center> Tên đăng nhập " . $tendn . " đã có, bạn hãy tạo tên đăng nhập khác! </center>";
		}
		else
		{
			echo $sql2="INSERT INTO tbl_nhanvien(tendn, tennv, email,password,level,ngaythem)
			VALUES
			('$_POST[tendn]','$_POST[tennv]','$_POST[email]','$p','$_POST[level]','$day')";
			$query2=mysql_query($sql2,$con);
		}
		echo"<script>document.location.href='?menu=nhan-vien'</script>";
}
?>