<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script src="../scripts/FormValidation.js" type="text/javascript"></script>
<script src="../scripts/FormValidation.js.php" type="text/javascript"></script>
<title></title>
</head>
<body>
<h1 style="font-size:14px; text-align:left;">Gửi cho chúng tôi ý kiên của bạn</h1>
<div class="lienhe">

<form method="post" id="form1" action="?page=lienhe">
  <table cellpadding="2" cellspacing="0">
    <tr>
      <td class="KT_th"><label for="ten">Tên bạn:</label></td>
      <td><input type="text" name="ten" id="ten" value="" size="50" />
         </td>
    </tr>
    <tr>
      <td class="KT_th"><label for="email">Email:</label></td>
      <td><input type="text" name="email" id="email" value="" size="50" />
        <span class="KT_field_hint">(E-mail)</span>
 </td>
    </tr>
    <tr>
      <td valign="top" class="KT_th"><label for="noidung">Nội dung:</label></td>
      <td><textarea name="noidung" id="noidung" cols="50" rows="5"></textarea>
         </td>
    </tr>
    <tr>
      <td colspan="2" align="center"><input type="submit" name="KT_Insert1" id="KT_Insert1" value="Gửi'" /></td>
    </tr>
  </table>
  <input type="hidden" name="ngaylienhe" id="ngaylienhe" value="15/06/2013 23:02:41" />
</form>
</div>
</div>


</body>
</html>