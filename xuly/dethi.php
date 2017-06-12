<?php
//if( !Kiemtrakhoicuauser() )
//{
//	echo "cho nhay sang trang chu hoac hien thi thong bao ";
//}

/*	if(!isset($_SESSION['khoithi']) || (!isset($_SESSION['user'])) )
	{
		echo "<script>location.href='./index.php?page=error';</script>";
	}*/
	if(isset($_SESSION['id']))
	{
		$sid=$_SESSION['id'];
		
	if($sid!="")
	if(!isset($_SESSION['user']))
	{
		echo "<center> Bạn chưa đăng nhập,  Vui lòng đăng nhập để vào thi </center>";
	} else
	{
		$id=$_GET['made'];
		$made=$_GET['made'];
		$iUser=$_SESSION['id'];
		
	 	/*Kiem tra bai lam da lam chua*/
	
		$sql="SELECT * FROM tbl_ktbailam WHERE idmade=".$made." and iduser=".$iUser;
		$rs=mysql_query($sql);
		if(mysql_num_rows($rs)>0)
	{
        echo "<script>location.href='./index.php?page=error';</script>";
	}
	
	else
	{
		$sql="INSERT INTO tbl_ktbailam (idmade,iduser) VALUES ('$made', '$sid')";
    	$rs=mysql_query($sql);
	}

?>

<!-- // ssrits dem thoi gian-->
</head>
<body>
<?
			$sql="select made, tende, timer from tbl_dethi where made='$id'";
			$query=mysql_query($sql);
			while($row=mysql_fetch_array($query))
			{
				$TimeWork=$row["timer"];
				$tendethi=$row["tende"];
			?>
				<div style="top:5; background:#FC9; border:1px solid #93F; padding:5px 50px; text-align:center;">
                    <td> Tên đề    : <? echo $row["tende"];?></td><br>
                    <td> Thời gian : <? echo $row["timer"];?></td> phút
                </div>
				
			<?
			}
			
?>

<div id="popload" style="background:#f3f3f3; position:absolute; z-index:9999; width:97%; height:85%;opacity:0.2; display:none;">
</div>
<div id="messenger_error" style="color:#F00; font-size:14px; font-weight:bold;position:absolute; z-index:9999;display:none; text-align:center; margin:-15px; padding-left:80px;">Thông báo đã hết giờ làm bài !! Vui lòng nộp bài</div>
<?php
if(!isset($_POST['chon_da']))
$id=$_GET['made'];
{
	if($id)
	{
		//Lấy dữ liệu trong Database
		$query = mysql_query("SELECT made, timer FROM tbl_dethi WHERE made = '$id'");
		$arr = mysql_fetch_array($query);
	}
?>

<?php if($arr){ ?>

<form action="index.php?page=xemkq" method="POST" name="frmdethi" id="frmdethi" enctype="multipart/form-data">
<div style="position:fixed; left:0; top:150; background:#F90; border:1px solid #93F; padding:10px 0px; text-align:center;">
<div style="padding:8px; text-align:center; color:#606; font-weight:bold;">Thời gian làm bài: <?=$TimeWork;?></td> phút</div>
<div style="padding:8px; color:#FFF;"><input type="text" disabled name="txtTime" id="txtTime" size="15" /></div>
</div>
<table width=100% class="tracnghiem">
  <input type="hidden" name="count" value="3">
  <input type="hidden" name="idmade" id="idmade" value="<?=$id?>">              
<?php 				
	$i=0;
	$sql="SELECT * FROM tbl_cauhoi WHERE made='".$id."'";
	$rs=mysql_query($sql);
	$count=mysql_num_rows($rs);
?>
	<input type="hidden" name="count" id="count" value="<?=$count?>">
<?php 
	$stt=1;
	if(mysql_num_rows($rs) == "")
	{
		echo "<tr><td colspan=5 align=center>Dữ liệu đang được cập nhật</td></tr>";
	}
	 else if($count>0)
	{
		while($rows=mysql_fetch_array($rs))
	{
		if($stt %2==0)
		{
			echo "<tr bgcolor='#CCCCCC'></tr>";
		}
		else
		{
			"<tr bgcolor='#0000FF'></tr>";	
		}
		$i++;
?>

</div>

    <div class="thongtinde">
      <tr style="color:#00F; background:#FCF;">
        <td colspan="2"> Câu hỏi <?=$i?><?=$rows['noidung']?></td>
      </tr>
    </div>
    <tr>
      <input type="hidden" name="ma<?=$i?>" id="ma<?=$i?>" value="<?=$rows['ma_ch']?>">
      <td width="46%" height=35>
        <input type="radio" name="da<?=$i?>" id="da<?=$i?>"  value="<?=$rows['lc1']?>"><b> A:
<?=$rows['lc1']?></b>
   	  </td>
   	  <td width="54%">
        <input type="radio" name="da<?=$i?>" id="da<?=$i?>"  value="<?=$rows['lc2']?>"><b> B:
<?=$rows['lc2']?></b>
      </td>
      </tr>
        <tr>
        	<td height=35>
            <input type="radio" id="da<?=$i?>"  name="da<?=$i?>" value="<?=$rows['lc3']?>"><b> C:
<?=$rows['lc3']?></b>
        	</td>
        	<td>
        	<input type="radio" id="da<?=$i?>"  name="da<?=$i?>" value="<?=$rows['lc4']?>"><b> D:
<?=$rows['lc4']?></b>
       		 </td>
   	 </tr>
	 <?php
	$stt++;
	
	}
}
?>
<div class="Showform" id="Showform" style="display:none;">
</div>
<!--<div id="ketquam" style="position:fixed; background:#fff; width:300px; height:400px;"></div>-->
<div id="ShowSubForm" style="z-index:99999; display:none; color:#F00; text-align:center; top:500px;">
<span style="padding:20px 20px; background:url(../images/style/login.png); border-radius: 3px 3px;">
HẾT THỜI GIAN LÀM BÀI</span>
</div>
<tr>
<td height=35></td>
<td><input type="submit" name="chon_da" class="chon" value="Nộp bài" style="z-index:999999; position:absolute; text-align:center; size:20; padding:0px 10px; color:#606; font-weight:bold;" /></td>
</tr>             
</table>
</form>
<script type="text/javascript">
		var milisec = 0;
		var seconds = <?php echo $arr['timer'];?>;
		document.getElementById("txtTime").value = <?php echo $arr['timer'];?>;
	</script>
<script type="text/javascript" src="./scripts/time.js"></script>
	
	
	<?php }?>
<?php
}	
	} 
}
?>



<script type="text/javascript" language="javascript">
function checkoption()
{
	countcheck=0;
	i=0;
	counts=document.getElementById("count").value;
	for (j=0;j<counts;j++)
	{
		
		i=j+1;
		alert(document.getElementById("da"+i).checked);
		
			//alert(document.getElementById("da"+k+i).checked);
			//if (document.getElementById("da"+i).checked!="")
			//{
				//alert(document.getElementById("ma"+i).checked);
				//countcheck=countcheck+1;
			
			//}
		
			
	}
	
	if(counts==countcheck)
	{
			return true;
	}
	else
	{
		alert("Ban vui long chon het cau hoi?");
		return false;
	}
	
}
fuction submitform()
{
$("#chon_da").click(function() {

    var url = "index.php?page=xemkq"; // the script where you handle the form input.

    $.ajax({
           type: "POST",
           url: url,
           data: $("#frmdethi").serialize(), // serializes the form's elements.
           success: function(data)
           {             
			 document.getElementById("htmldata").innerHTML=data;			  
           }
         });

    return true; // avoid to execute the actual submit of the form.
});
}
function showCustomer()
{
var xmlhttp;

if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("POST","?page=xemkq",true);
xmlhttp.send();
}



</script>
<style type="text/css">
.Showform
{
	top:0;
	left:0;
	position:fixed;
	width:1500px;
	height:900px;
	background:#999;
	opacity: 0.5;
	
}
</style>
<div id="htmldata"></div>

<?
function  Kiemtrakhoicuauser()
{
	// lay ra ma khoi cua Id dang dang nhap
	$sql="SELECT * FROM tbl_hocsinh where idhs=".$_SESSION['id'];
	$rs=mysql_query($sql);
	$rows=mysql_fetch_row($rs);
	$Makhoihs=$rows['khoi'];
	
	$sql1="SELECT * FROM tbl_dethi where idhs=".$_GET['made'];
	$rs1=mysql_query($sql1);
	$rows1=mysql_fetch_row($rs1);
	$Makhoidethi=$rows['khoithi'];
	
	if ($Makhoihs==$Makhoidethi) 
	{
	$rturn=true;
	}	
	else
	{
	$rturn=false;	
	}
	
	return $rturn;
	
}

?>