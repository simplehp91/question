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
	$ma_ch=$_GET['ma_ch'];
	$results = mysql_query("SELECT * FROM tbl_cauhoi WHERE ma_ch='$ma_ch'");
	while($rows = mysql_fetch_array($results))
	{
	  $ma_ch=$rows['ma_ch'];
	  $noidung=$rows['noidung'];
	  $lc1=$rows['lc1'];
	  $lc2=$rows['lc2'];
	  $lc3=$rows['lc3'];
	  $lc4=$rows['lc4'];
	  $dapan=$rows['dapan'];
	}
?>
<div style="margin:20px 70px 10px; font-size:14px;">
<font size="2" face="Tahoma"><b><a href="?menu=cauhoi_list">Câu hỏi</a><img src="images/bl3.gif" border="0" /> Cập nhật câu hỏi</b></font></div>
<hr size="1" color="#cadadd" style="margin:15px auto;" />
<form action="?menu=cauhoi_saveedit" method="post" class="form1">
  <table width="750" border="0"  cellpadding="0" cellspacing="0" background="images/body.png">
    <tr>
       <td bgcolor="#CCCCCC"  height="38px"colspan="2" align="center" class="style1">CẬP NHẬT THÔNG TIN CÂU HỎI</td>
    </tr>
   <tr>
	<td width="17%"  align="right">Mã câu hỏi</td>
    <td width="83%"> <input size=30 type="text" name="idmach" readonly="readonly" style="background-color:#CCC" value="<?php echo $ma_ch ?>"></td>
	</tr>
	<tr>
	<td align="right">Nội dung</td>
   <td> <textarea name="noidung" id="textarea_full" cols="20" rows="2" value="<?php echo $noidung ?>"><?php echo $noidung ?></textarea></td>
	 
  <tr>
    <td align="right">Lựa chọn A *</td>
    <td><input size=35 type="text" name="lc1" value="<?php echo $lc1 ?>"/></td>
  </tr>
  <tr>
    <td align="right">Lựa chọn B *</td>
    <td><input size=35 type="text" name="lc2" value="<?php  echo $lc2 ?>"/></td>
  </tr>
  <tr>
    <td align="right">Lựa chọn C *</td>
    <td><input size=35 type="text" name="lc3" value="<?php echo $lc3 ?>"/></td>
  </tr>
  <tr>
    <td align="right">Lựa chọn D *</td>
    <td><input size=35 type="text" name="lc4" value="<?php echo $lc4 ?>"/></td>
  </tr>
  <tr>
      <tr>
       	<td align="right" class="tbltitle2">Đáp án: <span style="color:red;font-size:22px">*</span></td>
		<td>
        	<select name='dapan'>
			<option value="<?=$lc1?>">Đáp án A</option>
			<option value="<?=$lc2?>">Đáp án B</option>
			<option value="<?=$lc3?>">Đáp án C</option>
			<option value="<?=$lc4?>">Đáp án D</option>
		  </select>
        </td>
     </tr> 
    <tr>
      <td colspan="2" style="padding: 10px 0px 10px 0px" align="center"><label>
        <input type="submit" name="edit" id="edit" value="Cập nhật" />
      </label></td>
    </tr>
  </table>
</form>