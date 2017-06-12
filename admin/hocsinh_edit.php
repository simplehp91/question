<link rel="stylesheet" href="febe/style.css" type="text/css" media="screen" charset="utf-8">
<style type="text/css">
<!--
.style1 {
	font-size: 18px;
	font-weight: bold;
	color: #000;
}
.form1 {
	margin:20px 250px  auto;
}
-->
</style>
<?php
	include('config.php');
	$idhs=$_GET['idhs'];
	$results = mysql_query("SELECT * FROM tbl_hocsinh WHERE idhs='$idhs'");
	while($rows = mysql_fetch_array($results))
	  {
	  $idhs=$rows['idhs'];
	  $hoten=$rows['hoten'];
	  $ngaysinh=$rows['ngaysinh'];
	  $gioitinh=$rows['gioitinh'];
	  //$diachi=$rows['diachi'];
	  $lop=$rows['lop'];
	  }
?>
<div style="margin:20px 70px 10px; font-size:14px;">
<font size="2" face="Tahoma"><b><a href="?menu=hocsinh_list">Học Sinh</a><img src="images/bl3.gif" border="0" /> Sửa thông tin học sinh</b></font></div>
<hr size="1" color="#cadadd" style="margin:15px auto;" />
<form action="?menu=hocsinh_saveedit" method="post">
  <table width="500" border="0" align="center"  cellpadding="0" cellspacing="0" background="images/body.png" class="form1">
    <tr>
     <td bgcolor="#CCCCCC"  height="38px"colspan="2" align="center" class="style1">Sửa thông tin học sinh</td>
    </tr>
   <tr>
	<td width="27%" class="tbltitle" style="text-align: right">Mã Học Sinh</td>
    <td width="73%"> <input size=30 type="text" name="idhs" readonly="readonly" style="background-color:#FFFFCC" value="<?php echo $idhs?>"></td>
	</tr>
	<tr>
	<td class="tbltitle" style="text-align: right">Tên Học Sinh</td>
   <td> <input size=35 type="text" name="hoten" value="<?php echo $hoten?>"></td>
	 
  <tr>
    <td class="tbltitle" style="text-align: right">Ngày Sinh</td>
    <td><input size=35 type="text" name="ngaysinh" value="<?php echo $ngaysinh?>"/></td>
  </tr>
  
    <tr>
      <td class="tbltitle2" style="text-align: right">Giới tính</td>
	<td>
	  <label for="gioitinh"></label>
	  <select name="gioitinh" id="gioitinh">
      <?php
	  if ( $gioitinh==Nam)
	  {?>
	    <option selected="selected" value="<?php echo $gioitinh?>">Nam</option>
        <option value="Nữ">Nữ</option>
        <?php
	  }else
	  {?>
		 <option selected="selected" value="<?php echo $gioitinh?>">Nữ</option>
        <option value="Nam">Nam</option> 
	  <?php
      }?>
	    </select></td>
    </tr>
    <tr>
      <td class="tbltitle2" style="text-align: right">Lớp</td>
	<td><input size=20 type="text" name="lop" value="<?php echo $lop?>"/></td>
    </tr>
    <tr>
      <td colspan="2" style="padding: 10px 0px 10px 0px" align="center"><label>
        <input type="submit" name="edit" id="edit" value="Cập nhật" onclick="" />
      </label></td>
    </tr>
  </table>
</form>