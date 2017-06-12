<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<style type="text/css">
	#wrapper{
	width:1000px;
	margin:0 auto;
}
.products{
	width:200px;
	padding:20px;
	background:#FFFFFF;
	min-height:190px;
	height:auto!important;
	height:190px;
	margin-bottom:20px;
}
#col1{
	width:300px;
	float:left;
}

#col1 img{
	border:1px solid #666666;
	padding:2px;
}
#col2{
	width:390px;
	float:left;
	padding:5px;
}
</style>
<body>
<div id="wrapper">
	<!--Begin Products-->
    <?php 
	$sql="select * from tbl_dethi";
	$query=mysql_query($sql);
	while($row=mysql_fetch_array($query))
	{
	?>
	<div class="products">
    	<div id="col1"><a href="?page=dethi&made=<?php echo $row['made'];?>"><img  height=120px width=150px src="./upload/images/dethi/<?php echo $row['hinhanh']; ?>"></a></div>
        <div id="col2">
        	<h1><a href="?page=dethi&made=<?php echo $row['made'];?>"><?php echo $row['tende'];?></a></h1>
            <div class="text"><?php echo $row["thongtin"];?></div>
            
        </div>
        
    </div>
    <?php } ?>
</div>
</body>
</html>