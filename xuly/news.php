<div class="tgp_box">
	<h1><span>THÔNG TIN - THÔNG BÁO</span></h1>
	<div class="content">
	<div class="clearfix">
<?php
	$sql="select * from tbl_news where linhvuc='2' and trangthai='1' ";
	$query=mysql_query($sql);
	while($row=mysql_fetch_array($query))
	{
	?>
    
	<div class="dethi">
	<a href="?page=news&id=<?php echo $row['id'];?>"><?php echo $row['tieude'];?></a><img  height=11px width=22px src="images/new.gif" /></h3>
	<p class="dethi1"><?php echo $row['tomtat'];?></p>
	</div>
	<div class="images" style="padding: 0px 0 0px 5px;"><a href="?page=news&id=<?php echo $row['id'];?>"><img  height=120px width=150px src="./upload/images/news/<?php echo $row['hinhanh']; ?>"></a></div>
    <div class="clear"></div>

	<?php
	}
?>
	</div>
	</div>
</div>

<div class="tgp_box">
	<h1><span>TIN TỨC - SỰ KIỆN</span></h1>
	<div class="content">
	<div class="clearfix">
<?php
	$sql="select * from tbl_news where linhvuc='3' and trangthai='1' ";
	$query=mysql_query($sql);
	while($row=mysql_fetch_array($query))
	{
	?>
    
	<div class="dethi">
	<a href="?page=news&id=<?php echo $row['id'];?>"><?php echo $row['tieude'];?></a><img  height=11px width=22px src="images/new.gif" /></h3>
	<p class="dethi1"><?php echo $row['tomtat'];?></p>
	</div>
	<div class="images" style="padding: 0px 0 0px 5px;"><a href="?page=news&id=<?php echo $row['id'];?>"><img  height=120px width=150px src="./upload/images/news/<?php echo $row['hinhanh']; ?>"></a></div>
    <div class="clear"></div>

	<?php
	}
?>
	</div>
	</div>
</div>