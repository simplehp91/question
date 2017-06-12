<link rel="stylesheet" href="febe/style.css" type="text/css" media="screen" charset="utf-8">
<script type="text/javascript" src="tiny_mce/tiny_mce.js"></script>
<script type="text/javascript" src="tiny_mce/int.load.js"></script>
<style type="text/css">
<!--
.style1 {
	font-size: 18px;
	font-weight: bold;
	color: #000;
}
.form1 {
	margin:20px 100px  auto;
}
-->
</style>
<?php
	$id=$_GET['id'];
	$results = mysql_query("SELECT * FROM tbl_news WHERE id='$id'");
	while($rows = mysql_fetch_array($results))
	{
	  $id=$rows['id'];
	  $tieude=$rows['tieude'];
	  $tomtat=$rows['tomtat'];
	  $chitiet=$rows['chitiet'];
	  $hinhanh=$rows['hinhanh'];
	}
?>
<div style="margin:20px 70px 10px; font-size:14px;">
<font size="2" face="Tahoma"><b><a href="?menu=tintuc_list">Tin tức</a><img src="images/bl3.gif" border="0" /> Cập nhật tin tức</b></font></div>
<hr size="1" color="#cadadd" style="margin:15px auto;" />
<form action="?menu=tintuc_saveedit" method="post" class="form1">
  <table width="100%" border="0"  cellpadding="0" cellspacing="0" background="images/body.png">
    <tr>
      <td bgcolor="#CCCCCC"  height="38px"colspan="2" align="center" class="style1">CẬP NHẬT TIN TỨC</td>
    </tr>
   <tr>
	<td width="12%" align="center" class="tbltitle">IDNews</td>
    <td width="88%"> <input size=30 type="text" name="idNews" readonly="readonly" style="background-color:#FFFFCC" value="<?php echo $id ?>"></td>
	</tr>
	<tr>
	<td align="center" class="tbltitle">Tiêu đề</td>
   <td> <input size=35 type="text" name="tieude" value="<?php echo $tieude ?>"></td>
	 
  <tr>
    <td align="center" class="tbltitle">Tóm tắt</td>
    <td><textarea name="tomtat" cols="20" rows="2" value="<?php echo $tomtat ?>"><?php echo $tomtat ?></textarea></td>
  </tr>
    <tr>
      <td align="center" class="tbltitle2">Chi tiết</td>
      <td><textarea name="chitiet" id="textarea_full" cols="20" rows="3" value="<?php echo $chitiet ?>"><?php echo $chitiet ?></textarea></td>
    </tr>
    <tr>
		<td align="center">Duyệt:(*)</td>
        <td>
        	<select name='trangthai' id="trangthai">
			<option value='1'>1-Duyet va dang bai</option>
			<option value='2'>2-Khong duyet</option>
		  </select>
        </td>
     <tr>
	<td align="center" class="tbltitle2">Hình ảnh</td>
	<td><input name="fileimg" type="file" /><input type="hidden" name="imgfile" value="<?php echo $hinhanh?>" /><img src="../upload/images/news/<?php echo $hinhanh?>" height="80px" width="90px" alt="Hình ảnh"/></td>
  </tr>
    <tr>
      <td colspan="2" style="padding: 10px 0px 10px 0px" align="center"><label>
        <input type="submit" name="edit" id="edit" value="Cập nhật" />
      </label></td>
    </tr>
  </table>
</form>