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
#hocsinh_news{
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
<font size="2" face="Tahoma"><b><a href="?menu=hocsinh_list">QL Học Sinh</a><img src="images/bl3.gif" border="0" /> Thêm Học sinh mới</b></font></div>
<hr size="1" color="#cadadd" style="margin:15px auto;" />
<form action="" name="frmthemhs" id="contact" class="contact-form" onsubmit="return checkform();" method="post" enctype="multipart/form-data">
<table border="0" width="500" cellpadding="0" cellspacing="0" align="center" id="hocsinh_news" background="images/body.png">
    <tr>
      <td bgcolor="#CCCCCC"  height="38px"colspan="3" align="center" class="style1">THÊM HỌC SINH MỚI</td>
    </tr>
    <tr>
      <td width="138" align="right" class="tbltitle">Mã HS:</td>
      <td width="12" align="right" class="tbltitle"></td>
      <td width="348"> <input class="required" minlength="3" size=25 type="text" name="idhs" id="hoten" value=""autocomplete = "off"/></td>
    </tr>
   <tr>
     <td align="right" class="tbltitle">Họ Tên:</td>
     <td align="right" class="tbltitle"> </td>
		<td> <input class="required" minlength="8" size=25 type="text" name="hoten" id="hoten" value=""autocomplete = "off"/></td>
  </tr>

     <tr>
       <td align="right" class="tbltitle">Mật khẩu: </td>
       <td align="right" class="tbltitle">&nbsp;</td>
		<td> <input class="required" minlength="8" size=25 type="password" id="password" name="pass" value=""autocomplete = "off"/></td>
  </tr>
  <tr>
    <td align="right" class="tbltitle">Nhập lại mật khẩu :</td>
    <td align="right" class="tbltitle">&nbsp;</td>
		<td> <input size=25 type="password" name="cpassword" id="pass" value=""autocomplete = "off"/></td>
  </tr>
    <tr>
      <td align="right" class="tbltitle">Ngày Sinh : </td>
      <td align="right" class="tbltitle">&nbsp;</td>
      <td>
        <select name="ngay" id="ngay" class="required">
		  <option value="0">Ngày</option>
		  <?php for($i=1;$i<=31;$i++) {?>
		  <option onclick="('<?php echo $i ?>')" value="<?=$i?>"><?php echo $i ?></option>
		  <?php }?>
	    </select>
        <select name="thang" id="thang" class="required">
          <option value="0" >Tháng</option>
          <?php for($i=1;$i<=12;$i++) {?>
          <option onclick="('<?php echo $i ?>')" value="<?=$i?>"><?php echo $i ?></option>
          <?php }?>
        </select>
        <select name="nam" id="nam" class="required">
          <option value="0" >Năm</option>
		  <?php for($i=1990;$i<=date("Y")+5;$i++,$j++) {?>
          <option onclick="('<?php echo $i ?>')" value="<?=$i?>"><?php echo $i ?></option>
          <?php }?>
        </select>
        </td>
    </tr>
    <tr>
      <td align="right" class="tbltitle2">Giới tính:</td>
      <td align="right" class="tbltitle2">&nbsp;</td>
    <td><select name='gioitinh'>
			<option value='Nam'>Nam</option>
			<option value='Nữ'>Nữ</option>
			</select><br />
        </td>
    </tr>
    <tr>
      <td align="right" class="tbltitle2">Địa chỉ: </td>
      <td align="right" class="tbltitle2">&nbsp;</td>
      <td><input size=40 type="text" name="diachi" value=""autocomplete = "off"/></td>
    </tr>
    <tr>
      <td align="right" class="tbltitle">Khối học: </td>
      <td align="right" class="tbltitle">&nbsp;</td>
      <td>
        <select name="tenkhoi" id="tenkhoi">
		  <?php
					include('config.php');
					$sql = 'select * from tbl_khoihoc';
					$result = mysql_query($sql);
					while($rows = mysql_fetch_assoc($result))
					echo "<option value = '$rows[makhoi]'> $rows[tenkhoi] </option>";
			?>
	    </select>
		</td>
    </tr>
    <tr>
      <td align="right" class="tbltitle">Tên Lớp: </td>
      <td align="right" class="tbltitle">&nbsp;</td>
      <td> 
   	    <input class="required" minlength="2" size=25 type="text" name="lop" id="lop" value=""autocomplete = "off"/>
        </td>
    </tr>
    <tr>
      <td colspan="3" style="padding: 10px 0px 10px 0px" align="center">
      <label>
        <input type="submit" name="ok" id="ok" value="Thêm học sinh" />
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
	 $idhs=$_POST['idhs'];
	 $sql="select * from tbl_hocsinh where idhs='".$idhs."'";
	 $query=mysql_query($sql, $con);
	if(mysql_num_rows($query)>0 )
		//$error = "Lỗi! Username đã tồn tại vui lòng chọn tên khác ! ";	
	{
		echo "<span style='color:#F00;'><center> ID học sinh $idhs này đã tồn tại rồi<br />  Vui lòng chọn ID khác </center></span>";	
		
	}	
	else
	{
	$ngay=$_POST['ngay'];
	$thang=$_POST['thang'];
	$nam=$_POST['nam'];
	$strdays=$nam."-".$thang."-".$ngay;
	$ngaysinh = date('Y-m-d');
	$pass=md5($_POST['pass']);
	$tenkhoi=$_POST['tenkhoi'];
	
	$sql2="INSERT INTO tbl_hocsinh(idhs,hoten,pass,ngaysinh,gioitinh,diachi,khoi,lop)
	VALUES
	('$_POST[idhs]','$_POST[hoten]','$pass','$strdays','$_POST[gioitinh]','$_POST[diachi]','$_POST[tenkhoi]','$_POST[lop]')";
	$query2=mysql_query($sql2,$con);
	//header('Location: ?menu=hocsinh_list' );
	echo"<script>document.location.href='?menu=hocsinh_list'</script>";
	}
}
?>