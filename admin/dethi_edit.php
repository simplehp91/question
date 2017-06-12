<link rel="stylesheet" href="febe/style.css" type="text/css" media="screen" charset="utf-8">
<style type="text/css">
<!--
.style1 {
	font-size: 18px;
	font-weight: bold;
	color: #000;
}
.dethi_edit {
	margin:20px 200px  auto;
}
-->
</style>
<?php
	include('config.php');
	$made=$_GET['made'];
	$results = mysql_query("SELECT * FROM tbl_dethi WHERE made='$made'");
	while($rows = mysql_fetch_array($results))
	  {
	  $made=$rows['made'];
	  $tende=$rows['tende'];
	  $timer=$rows['timer'];
	  $socau=$rows['socau'];
	  $hinhanh=$rows['hinhanh'];
	  }
?>
<div style="margin:20px 70px 10px; font-size:14px;">
<font size="2" face="Tahoma"><b><a href="?menu=dethi_list">Đề thi</a><img src="images/bl3.gif" border="0" /> Sửa thông tin đề thi</b></font></div>
<hr size="1" color="#cadadd" style="margin:15px auto;" />
<form action="?menu=dethi_saveedit" method="post" class="dethi_edit">
  <table width="600" border="0"  cellpadding="0" cellspacing="0" background="images/body.png">
    <tr>
     <td bgcolor="#CCCCCC"  height="38px"colspan="2" align="center" class="style1">Cập nhật thông tin đề thi</td>
    </tr>
   <tr>
	<td width="20%"  align="right">Mã đề</td>
    <td width="80%"> <input size=30 type="text" name="idmade" readonly="readonly" style="background-color:#CCC" value="<?php echo $made?>"/></td>
	</tr>
	<tr>
	<td align="right">Tên đề</td>
   <td> <input size=35 type="text" name="tende" value="<?php echo $tende?>"></td>
	 
  <tr>
    <td align="right">Số câu</td>
    <td><input size=35 type="text" name="socau" value="<?php echo $socau?>"/></td>
  </tr>
    <tr>
      <td align="right">Thời gian</td>
      <td><input size=20 type="text" name="timer" value="<?php echo $timer?>"/></td>
    </tr>
     <tr>
	<td align="right">Hình ảnh</td>
	<td><input name="fileimg" type="file" /><input type="hidden" name="imgfile" value="<?php echo $hinhanh?>" /><img src="../upload/images/dethi/<?php echo $hinhanh?>" height="80px" width="90px" alt="Hình ảnh"/></td>
  </tr>
    <tr>
      <td colspan="2" style="padding: 10px 0px 10px 0px" align="center"><label>
        <input type="submit" name="edit" id="edit" value="Cập nhật" />
      </label></td>
    </tr>
  </table>
</form>