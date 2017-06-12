<?php
	include("connect.php");
	include("rewrite.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en-US">
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" href="xuly/css/stylecuon.css" type="text/css" media="screen" />
<link rel="shortcut icon" href="favicon-2.ico" />
<script src="xuly/javascript/jquery-latest.pack.js" type="text/javascript"></script>
<script src="xuly/javascript/jcarousellite_1.0.1c4.js" type="text/javascript"></script>


<title>Thi toan bac THCS - trac nghiem toan bac THCS - de thi toan lop 6 - 7 - 8 - 9 </title>
<link rel="stylesheet" type="text/css" href="style.css"/>
</head>
<body>

<div id="page">
<?
	session_start();
	if(isset($_SESSION['user']))
	{
	}
	else{
	}
?>
	<!-- Begin Header -->
<div id="head">
		<div class="logo">
            <a href="" title="Thi Toán online" rel="home">Thi Toán online</a>
		</div>	 
        <div id="navigation">
       <div class="menu-header"><ul id="menu-navigation" class="menu">
			<li><a href="index.php">Trang chủ</a></li>
			<li><a href="?page=gt">Giới thiệu</a></li>
			<li><a href="?page=vaothi">Vào thi</a></li>
            <li><a href="?page=hd">Hướng dẫn</a></li>
            <li><a href="?page=lienhe">Liên hệ</a></li>
			</ul>
			</div>        
	</div>
    <form role="search" method="post" id="searchform" action="index.php?page=search" >
	<div>
    <label class="screen-reader-text" for="s">Search for:</label>
    <input type="text" value="Tìm kiếm..." onClick="if(this.value=='Tìm kiếm...')this.value='';" onBlur="if(this.value=='')this.value='Tìm kiếm...';" name="txtkey" id="txtkey" /> 
	<input type="submit" name="ok" value="Search" />
	</div>
	</form>    
    </div>
    <!-- End Header -->
    <!-- Begin Wrap -->
    <div id="wrap">
			<div id="content" role="main"><!--cot chinh-->
            <div class="corner" style="padding: 0 10px 10px;">
	<? $page="";
		if(isset($_GET["page"])){
			$page=$_GET["page"];
		}
		switch($page){
			case "chon_dapan": include("xuly/chon_dapan.php"); break;
			case "dethi": include("xuly/dethi.php"); break;
			case "vaothi": include("xuly/home.php"); break;
			case "thongtin": include("xuly/thongtindethi.php"); break;
			case "hd": include("xuly/huongdan.php"); break;
			case "gt": include("xuly/gioithieu.php"); break;
			case "lienhe": include("xuly/gopy.php"); break;
			case "editmeber": include("xuly/editmeber.php"); break;
			case "news": include("xuly/news_detail.php"); break;
			case "xemkq": include("xuly/xemketqua.php"); break;
			case "search": include("xuly/kqsearch.php"); break;
			case "error": include("error.php"); break;
			default: include("xuly/news.php"); break;
		}
		?>
 </div> 
 </div>
 <!----------------------------cot ben phai------------------------------------>
  
<div id="sidebar" role="complementary">
	<ul>      
		<?php include("xuly/login.php");?>
    </ul> 
    <ul>      
		<?php include("xuly/danhmucthi.php");?>
    </ul> 
</div>
</div>
<div class="footer">
   	  <p> Copyright © 2013 * Web thi toán bậc Trung Học Cơ Sở </p>
     <strong> Powered (+) Designe  <a href="index.php" style="color:#F90;">Hiep Nguyen</a></strong>
      <p>&nbsp;</p>

</div>
 </div>
</div>
</div>
<!-- End Page -->
</body>
</html>