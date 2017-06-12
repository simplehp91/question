<?php
if(isset($_SESSION['id']))
{
 $sid=$_SESSION['id'];
 
 if($sid!="")
 {
	include("config/connect.php");
	$count=mysql_num_rows(mysql_query("select diem from tbl_cauhoi where diem>0"));
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
</head>
<body>
<?php
if (isset($_POST['chon_da']))
{
	$dem=0;
	$i=0;
	$counts=$_POST['count'];
		for($j=0;$j<$counts;$j++)
		{
			$i++;
			if(isset($_POST['da'.$i]))
		{
			$kqchon=$_POST['da'.$i];
			$ma=$_POST['ma'.$i];
			$iUser=$_SESSION['id'];
			
			
			$sql1="SELECT * FROM tbl_cauhoi WHERE ma_ch=".$ma;
			$rs1=mysql_query($sql1);
			$rows1=mysql_fetch_array($rs1);		
				
			$sqlupdate="UPDATE tbl_cauhoi SET diem='$kqchon' WHERE ma_ch=".$ma;
			$rsupdate=mysql_query($sqlupdate);
			if($rows1['dapan']==$kqchon)
			{
				$dem++;
			}
		}
	  }
   }
	
 }
}
?> 
<div style="top:10; background:#0CF; border:1px solid #93F; padding:5px 100px; text-align:center;">
<?
	$imade=$_POST['idmade'];
	
	$socau=mysql_num_rows(mysql_query("SELECT * FROM tbl_cauhoi WHERE made=".$imade));
	$dung=$dem;
	$phantram =($dung/$socau)*100; // Tính ra % số câu đúng , sau đó phân loại cơ bản
	 echo "<center><h2>KẾT QUẢ LÀM BÀI THI CỦA HỌC SINH.</h2></center>";	
	if ($phantram == 100) $ketqua= "Đạt";
	elseif (($phantram >= 50) && ($phantram <= 80)) $ketqua = "Đạt";
	elseif ($phantram > 80) $ketqua= " Đạt";
	elseif ($phantram < 50) $ketqua = "Không đạt !";  
	echo "<h2 align='center'>Kết Quả : $ketqua</h2><p align='center'>Số câu Đúng Là $dung / $socau . Đạt $phantram %</p>"; // Xuất kết quả ra.
	
	$sql="SELECT * FROM tbl_kqlambai WHERE made=".$imade." and idhs=".$iUser;
	$rs=mysql_query($sql);
	if(mysql_num_rows($rs)>0)
	{
		//echo "<script>location.href='./error.php';
        echo "<script>location.href='./index.php?page=error';</script>";
	}
	else
	{
		mysql_query("INSERT INTO tbl_kqlambai (idhs, made, socau, caudung, ketqua) VALUES ('$iUser', '$imade', '$socau', '$dung','$ketqua')");
    	//$rs=mysql_query($sql);
	}
	
?>

</div>
<style type="text/css">
	#resultTable {
					
					margin-top: 8px;
					width: 90%;
					
					margin:10px 25px ;
				}
											#resultTable th.sortable {
												background: url("bg_header.jpg") no-repeat scroll 0 0 #CAE8EA;
												border-bottom: 1px solid #C1DAD7;
												border-right: 1px solid #C1DAD7;
												border-top: 1px solid #C1DAD7;
												color: #4F6B72;
												font: normal 11px "Trebuchet MS",Verdana,Arial,Helvetica,sans-serif;
												letter-spacing: 2px;
												padding: 3px 3px 3px 6px;
												text-align: left;
												text-transform: uppercase;
												color: #666;
												cursor: pointer;
												text-decoration: none;
											}
											#resultTable th.sortable:hover { color: black; }
											#resultTable th {
												background: url("bg_header.jpg") no-repeat scroll 0 0 #CAE8EA;
												border-bottom: 1px solid #C1DAD7;
												border-right: 1px solid #C1DAD7;
												border-top: 1px solid #C1DAD7;
												color: #4F6B72;
												font: normal 11px "Trebuchet MS",Verdana,Arial,Helvetica,sans-serif;
												letter-spacing: 2px;
												padding: 3px 3px 3px 6px;
												text-align: left;
												text-transform: uppercase;
												color: #666;
												cursor: pointer;
												text-decoration: none;
											}
											#resultTable th:hover { color: black; }
											#resultTable th.sorted-asc, th.sorted-desc  { color: black; }

											#resultTable td {
												background: none repeat scroll 0 0 #FFFFFF;
												border-bottom: 1px solid #C1DAD7;
												border-right: 1px solid #C1DAD7;
												color: #4F6B72;
												padding: 3px 3px 3px 6px;
												font: normal 11px "Trebuchet MS",Verdana,Arial,Helvetica,sans-serif;
											}
											#resultTable td.odd {
												background: none repeat scroll 0 0 #F5FAFA;
												color: #797268;
												font: normal 11px "Trebuchet MS",Verdana,Arial,Helvetica,sans-serif;
											}
											
											#resultTable td.hovered {
											  background-color: lightblue;
											  color: #666;
											}
</style>

<h2 style="text-align:center;">Đề thi và đáp án để thí sinh đối chiếu</h2>
<table cellpadding="1" cellspacing="1" id="resultTable">

			<thead>
				<tr>
					<th>Nội dung</th>
                    <th>P.A</th>
					<th>P.B</th>
					<th>P.C</th>
					<th>P.D</th>
					<th>Đáp án</th>
				</tr>
			</thead>
        <tbody>
        <?php
			$imade=$_POST['idmade'];
	 	   $sqlcauhoi=("SELECT * FROM tbl_cauhoi WHERE made=".$imade);
		   $result=mysql_query($sqlcauhoi); 
   		   while ($row = mysql_fetch_array($result))
		   {
				echo '<tr class="teacher">
				<td>'.$row['noidung'].'</td>
				<td>'.$row['lc1'].'</td>
				<td>'.$row['lc2'].'</td>
				<td>'.$row['lc3'].'</td>
				<td>'.$row['lc4'].'</td>
				<td style="font-size:14px;" align="center"; bgcolor="#FFCC00";>'.$row['dapan'].'</td>
				</tr>';
		 }
		 ?>
         </tbody>
          <?
    	 echo "<p align='right'><a href='#' onclick='window.print()'>In kết quả</a></p>";  
     	 echo "<div style='visibility:hidden;display:none'>"; 
	?>
   </table>
   