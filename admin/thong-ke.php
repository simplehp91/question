<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en-US">
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Thi Toán Online || Thi trắc nghiệm || toán online Thi toán ||</title>
</title>
<!--sa poip up-->
	<link href="src/facebox.css" media="screen" rel="stylesheet" type="text/css" />
	<script src="lib/jquery.js" type="text/javascript"></script>
	  <script src="src/facebox.js" type="text/javascript"></script>
	  <script type="text/javascript">
		jQuery(document).ready(function($) {
		  $('a[rel*=facebox]').facebox({
			loadingImage : 'src/loading.gif',
			closeImage   : 'src/closelabel.png'
		  })
		})
	  </script>
	  <link rel="stylesheet" href="febe/style.css" type="text/css" media="screen" charset="utf-8">
	<script src="argiepolicarpio.js" type="text/javascript" charset="utf-8"></script>
	<script src="js/application.js" type="text/javascript" charset="utf-8"></script>
	
	<script type="text/javascript">
        $(document).ready(function() {
        $("#resultTable thead tr th:first input:checkbox").click(function() {
            var checkedStatus = this.checked;
            $("#resultTable tbody tr td:first-child input:checkbox").each(function() {
                this.checked = checkedStatus;
            });
        });

            $("#resultTable").selectAllRows();

            $("#resultTable").selectAllRows({ column: 'last' });

            $("#resultTable").selectAllRows({
                column: '2',
                selectTip: 'Select All Students',
                unselectTip: 'Un-Select All Students'
                })
                .css("border-width", "10px");
        });
    </script>
<?php
			$counts=0;
			$rscount = mysql_query("SELECT * FROM tbl_kqlambai");
			while($rowscounts = mysql_fetch_array($rscount))
			{
				$counts++;
			}
?>
</head>
<body>  
<div style="margin:20px 70px 10px; font-size:14px;">
<font size="2" face="Tahoma"><b>Thống kê<img src="images/bl3.gif" border="0" /> Kết quả thi</b></font></div>
<hr size="1" color="#cadadd" style="margin:15px auto;" />
<div class='wrapper'>
  <input id="filter" type="text" value="Tìm kiếm..." onClick="if(this.value=='Tìm kiếm...')this.value='';" onBlur="if(this.value=='')this.value='Tìm kiếm...';" name="filter" /> 
  <form action="" method="post">
    <table cellpadding="1" cellspacing="1" id="resultTable">
			<thead>
				<tr>
					
					<th><input type="checkbox" name="checkid[]" id="checkid" value="<?=$counts?>" onClick="CheckALL(<?=$counts?>);" /></th>
					<th>ID Học sinh</th>
                    <th>Số câu đúng</th>
					<th>Kết quả</th>
				</tr>
			</thead>
        <tbody>
		<?php
			
			$results = mysql_query("SELECT * FROM tbl_kqlambai ");
			while($rows = mysql_fetch_array($results))
			{
				
			echo '<tr class="teacher">
			<td>' . '<input type="checkbox" name="selector[]" value="'.$rows['id'].'" />' . '</td>
			<td>'.$rows['idhs'].'</td>
			<td>'.$rows['socau'].'/'.$rows['caudung'].'</td>
			<td>'.$rows['ketqua'].'</td>
			</tr>';
			}
		?>
        </tbody>
    </table>
	<input type="submit" name="bnm" value="Delete all" style="margin:3px 50px auto;">
	</form>
</div>
  </body>
</html>
<script>
function CheckALL(counts)
{
	for(i=0;i<counts;i++)
	{
		
	if(document.getElementById("checkid").checked!="")
	{
	document.getElementById("checkid").checked	='checked';
	}else{
	document.getElementById("checkid").checked	='';	
	}
	}
}
</script>