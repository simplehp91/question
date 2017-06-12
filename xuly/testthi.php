<?php
$_SESSION['tg_bat_dau']="";
	if(isset($_SESSION['id']))
	{
		 $sid=$_SESSION['id'];
 		 if($sid!="")
	if(!isset($_SESSION['user']))
	{
		echo "<center> Bạn chưa đăng nhập,  Vui lòng đăng nhập để vào thi </center>";
	}
 	else
	{
	include("ketnoi/ketnoi.php");
	//if(isset($_POST["chon_da"]))
	$id=$_GET['made'];
	$made=$_GET['made'];
	$iUser=$_SESSION['id'];
?>

<?php if(!returntime($iUser,$made)){?>
<?php
$tg_lam_bai=time()+(10);
$_SESSION['het_han'] = false; //Bien dung kiem tra thoi gian lam bai da het han
//Kiem tra neu lan dau truy cap thi set session bat dau thoi gian
if( !isset($_SESSION['tg_bat_dau']) )
{
   $_SESSION['tg_bat_dau'] = time(); // dat thoi gian bat dau lam bai
}

// Kiem tra neu het han lam bai gan session het han bang true
if( time() - $_SESSION['tg_bat_dau'] > $tg_lam_bai )
{
    $_SESSION['het_han'] = true;
}
else
{
    // so giay bu dap dem nguoc
    $until = (time() - $_SESSION['tg_bat_dau'] - $tg_lam_bai ) * -1; 
}

if(!returntime($iUser,$made))
	{
		 Uploadtiem(1,$iUser,$made);	
	}
	
	
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
 <script src="http://code.jquery.com/jquery-1.8.3.min.js"></script>
 <script type="text/javascript" src="http://keith-wood.name/js/jquery.countdown.js"></script>
</head>
<body>
<div id="time" ></div>
<script type="text/javascript">
    $('#time').countdown({
        until: <?=$until?>, 
        format: 'HMS',
        compact: true,
        onExpiry: function() {
        location.reload();		
        }		
    });

</script>

<?php
if(!isset($_POST['chon_da']))
$id=$_GET['made'];

{
	//?page=xemkq
?>

<form action="" method="POST" name="frmdethi" id="frmdethi">
				
				<table width=100% class="tracnghiem">
                <input type="hidden" name="count" value="3">
                <input type="hidden" name="idmade" value="<?=$id?>">
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
                else
				if($count>0)
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
                	<tr bgcolor="#FF99FF">
                    <td width="46%" style="color:#00F"> Câu hỏi <?=$i?></td>
                    </tr>
                   
                    <td style="color:#F00"><font face="Arial, Helvetica" size="+6"></font><?=$rows['noidung']?> </td>
                    </tr>
					<tr>
                    <input type="hidden" name="ma<?=$i?>" id="ma<?=$i?>" value="<?=$rows['ma_ch']?>">
					<td height=35>
                    <input type="radio" name="da<?=$i?>" id="da<?=$i?>"  value="<?=$rows['lc1']?>"><b>A:<?=$rows['lc1']?></b>
                    </td>
					<td width="54%">
                    <input type="radio" name="da<?=$i?>" id="da<?=$i?>"  value="<?=$rows['lc2']?>"><b>B: <?=$rows['lc2']?></b>
                    </td>
					</tr>
					<tr>
					<td height=35>
                    <input type="radio" id="da<?=$i?>"  name="da<?=$i?>" value="<?=$rows['lc3']?>"><b>C: <?=$rows['lc3']?></b>
                    </td>
					<td>
                    <input type="radio" id="da<?=$i?>"  name="da<?=$i?>" value="<?=$rows['lc4']?>"><b>D: <?=$rows['lc4']?></b>
                    </td>
					</tr>
                  <?php
				  $stt++;
				}
				}?>
                    
				<tr>
					<td height=35></td>
					<td><input type="submit" name="chon_da" class="chon" value="Chọn" ></td>
				</tr>
				</table>
		

<?php
		}
}
else
{
echo "<center>Ban da lam bai nay roi nhe ku.</center>";
echo "<input type='submit' name='chon_da' class='chon' value='Xem kết quả'>";	
}
		
}
	
	
	//else
//	{
//	echo "<center> Bạn chưa đang nhập,  Vui lòng đăng nhập để vào thi </center>";
//	}

}

?>
	</form>


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
</script>

</body>
</html>
<?php
function returntime($iuser,$imade)
{
	$sql="SELECT * FROM tbl_time WHERE iUser='".$iuser."' and iMade=".$imade ;
	$rs=mysql_query($sql);
	if(mysql_num_rows($rs)>0)
	{
	$rows=mysql_fetch_array($rs);
	$status=$rows['iStatus'];
		if($status=="1")
		{
			return true;
		}
		else
		{
			return false;
		}
	
	}
	else
	{
	return false;	
	}
}
function Uploadtiem($status,$iuser,$imade)
{
	
	$sql="INSERT INTO tbl_time (iStatus,iUser,iMade) VALUES ('$status','$iuser','$imade')";
	$rs=mysql_query($sql);
}
?>