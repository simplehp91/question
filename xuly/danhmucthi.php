<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
</head>
<body>
<div class="total">
    <span class="frame-total">
    <div class="totalbq">
      <div class="total-top">DANH SÁCH ĐỀ THI</div>
      <div class="total-cent">
       <?php
	$sql="select * from tbl_dethi ";
	$query=mysql_query($sql);
	while($row=mysql_fetch_array($query))
	{
	?>
    
	
	<a href="?page=dethi&made=<?php echo $row['made'];?>"><?php echo $row['tende'];?></a>
	<a href="?page=dethi&made=<?php echo $row['made'];?>"><img  height=60px width=80px src="./upload/images/dethi/<?php echo $row['hinhanh']; ?>"></a>
    <div class="clear"></div>

	<?php
	}
?>
      </div>
    </div>
    </span>
  </div>
</body>
</html>