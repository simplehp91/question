<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="febe/style.css" type="text/css" media="screen" charset="utf-8">
<title></title>
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
#dethi_news{
	margin:30px 200px;
	border: 1px solid #C1DAD7;

	
}
.tbltitle
{
	margin:0px 10px;	
	
}
-->
</style>
</head>

<body>
<div style="margin:20px 70px 10px; font-size:14px;">
<font size="2" face="Tahoma"><b><a href="?menu=dethi_list">Đề thi</a><img src="images/bl3.gif" border="0" /> thêm mới đề thi</b></font></div>
<hr size="1" color="#cadadd" style="margin:15px auto;" />
<form action="" name="frmthemdethi" id="contact" class="contact-form" onsubmit="return checkform();" method="post" enctype="multipart/form-data">
<table width="650" border="0"  cellpadding="0" cellspacing="0" background="images/body.png" id="dethi_news">
    <tr>
      <td bgcolor="#CCCCCC"  height="38px"colspan="2" align="center" class="style1">THÊM ĐỀ THI MỚI</td>
    </tr>
    <tr>
      <td align="center" class="tbltitle">Tên đề:</td>
	    <td width="454"> <input size=25 type="text" name="tende" value="" autocomplete = "off"></td>
    </tr>
   <tr>
			<td align="center" class="tbltitle">Số câu hỏi:</td>
		<td><input size=20 type="text" name="socau" value=""autocomplete = "off"/></td>
  </tr>

     <tr>
			<td align="center" class="tbltitle">Tác giả: </td>
		<td><input size=25 type="text" name="tacgia" value="" autocomplete = "off"/></td>
  </tr>
   <tr>
			<td align="center" class="tbltitle">Thời gian: </td>
		<td><input size=25 type="text" name="timer" value="" autocomplete = "off"/></td>
  </tr>
    <tr>
      <td align="center" class="tbltitle">Hình ảnh: </td>
	     <td><input class="tepanh" type="file" name="file_up" />
         </td>	
    </tr>
    <tr>
    <td height="27" align="center" class="tbltitle2">Khối thi</td>
		<td>
          <select name="khoithi" id="tenmon">
		<?
		include("config.php");
		$sql = 'select * from tbl_khoihoc';
					$result = mysql_query($sql);
					while($rows = mysql_fetch_assoc($result))
					echo "<option value = '$rows[makhoi]'> $rows[tenkhoi] </option>";
		?>
		</select>
		</td>
    </tr>
    <tr>
      <td width="96" align="center" class="tbltitle">Thông tin: </td>
        <td><textarea name="thongtin" cols="50" rows="4"></textarea></td>	
    </tr>
    <tr>
      <td colspan="2"align="center"  style="padding:10px 0px 10px 0px"><label>
        <input type="submit" name="ok" id="ok" value="Thêm đề thi" />
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
		move_uploaded_file($_FILES["file_up"]["tmp_name"],"../upload/images/dethi/".$_FILES["file_up"]["name"]);
		$link=$_FILES["file_up"]["name"];
		$day=date("Y/m/d");
		$sql2="INSERT INTO tbl_dethi(tende,thongtin,socau,tacgia,hinhanh,khoithi,ngaydang, timer)
		VALUES
		('$_POST[tende]','$_POST[thongtin]','$_POST[socau]','$_POST[tacgia]','$link','$_POST[khoithi]','$day', '$_POST[timer]')";
		 $query2=mysql_query($sql2,$con);
		echo"<script>document.location.href='?menu=dethi_list' </script>";	
	}
?>