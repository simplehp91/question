<?php //session_start();
	if(isset($_SESSION['khoihoc'])) {
				$sql="select * from tbl_dethi WHERE khoithi='".$_SESSION['khoihoc']."'";
				//echo $sql;
				$query=mysql_query($sql);
				while($row=mysql_fetch_array($query))
				{
				?>
                            <div class="dethi">
                            <a href="?page=dethi&made=<?php echo $row['made'];?>"><?php echo $row['tende'];?></a></h3>
                            <p class="dethi1"><?php echo $row['thongtin'];?></p>
                            </div>
                            <div class="images" style="padding: 0px 0 0px 5px;"><a href="?page=dethi&made=<?php echo $row['made'];?>"><img  height=120px width=150px src="./upload/images/dethi/<?php echo $row['hinhanh']; ?>"></a></div>
                <div class="clear"></div>
	<?php
	}
	} else {
		$sql1="select * from tbl_dethi ";
	$query1=mysql_query($sql1);
	while($rows=mysql_fetch_array($query1))
	{
	?>
	<div class="dethi">
	<a href="?page=dethi&made=<?php echo $rows['made'];?>"><?php echo $rows['tende'];?></a></h3>
	<p class="dethi1"><?php echo $rows['thongtin'];?></p>
	</div>
	<div class="images" style="padding: 0px 0 0px 5px;"><a href="?page=dethi&made=<?php echo $rows['made'];?>"><img  height=120px width=150px src="./upload/images/dethi/<?php echo $rows['hinhanh']; ?>"></a></div>
    <div class="clear"></div>
	<?php
	}
	}
?>