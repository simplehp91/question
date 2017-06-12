<?php
	include("connect.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en-US">
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" href="style.css" type="text/css" media="screen" />

<link rel="stylesheet" href="xuly/css/stylecuon.css" type="text/css" media="screen" />
<script src="xuly/javascript/jquery-latest.pack.js" type="text/javascript"></script>
<script src="xuly/javascript/jcarousellite_1.0.1c4.js" type="text/javascript"></script>


<title>Thi Toán Online || Thi trắc nghiệm || toán online Thi toán ||</title>
<link rel="stylesheet" href="style.css" type="text/css" media="screen" />
</head>
<body class="archive category category-trac-nghiem-vui">

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
		<object
        classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000"
        codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=8,0,42,0"
        id="hieu"
        width="940" height="126"
      >
        <param name="movie" value="hieu.swf">
        <param name="bgcolor" value="#FFFFFF">
        <param name="quality" value="high">
        <param name="seamlesstabbing" value="false">
        <param name="allowscriptaccess" value="samedomain">
        <embed
          type="application/x-shockwave-flash"
          pluginspage="http://www.adobe.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash"
          name="hieu"
          width="940" height="126"
          src="hieu.swf"
          bgcolor="#FFFFFF"
          quality="high"
          seamlesstabbing="false"
          allowscriptaccess="samedomain"
        >
          <noembed>
          </noembed>
        </embed>
      </object>

        <div id="navigation">
       <div class="menu-header"><ul id="menu-navigation" class="menu">
			<li><a href="index.php">Trang chủ</a></li>
			<li><a href="index.php?page=gt">Giới thiệu</a></li>
			<li><a href="index.php?page=vaothi">Vào thi</a></li>
            <li><a href="">Hướng dẫn</a></li>
            <li><a href="">Góp ý</a></li>
			</ul>
			</div>        
	</div>
    </div>
    <!-- End Header -->
    <!-- Begin Style choice -->
    <div class="style">
    	<ul>
            <li><a href="" rel="style" class="styleswitch">styles</a></li>
            <li><a href="" rel="green" class="styleswitch">green</a></li>
		</ul>
    </div>
    <!-- End Style choice -->
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
			case "gopy": include("xuly/gopy.php"); break;
			case "editmeber": include("xuly/editmeber.php"); break;
			case "news": include("xuly/news_detail.php"); break;
			case "xemkq": include("xuly/xemketqua.php"); break;
			case "search": include("xuly/kqserach.php"); break;
			default: include("xuly/news.php"); break;
		}
		?>
 </div> 
 </div>
 <!----------------------------cot ben phai------------------------------------>
<div id="sidebar" role="complementary">
	<ul>      
		<?php include("xuly/search.php");?>
    </ul> 
	<ul>      
		<?php include("xuly/dangnhap.php");?>
    </ul> 
<div id="categories-3" class="widget widget_categories"><h2 class="widgettitle">Chuyên mục đề thi</h2>
<div id="demo">
    <div class="jcarouse">
		<ul>
            <li>
                <?php
				$sql="select * from tbl_dethi";
				$query=mysql_query($sql);
				while($row=mysql_fetch_array($query))
				{
					?>
                 <div class="info">
					<a href="a href="?page=dethi&made=<?php echo $row['made'];?>"><?php echo $row['tende'];?></a>
                   
				</div>
                <div class="thumb">
					<div class="thumb"><a href=""><img height=38px width=58px src="./upload/images/dethi/<?php echo $row['hinhanh']; ?>">
    </a></div>
				</div>
				<div class="clr"></div>
                 <? 
					}
					?>
			</li>
       </ul>
       </div>
   </div>      
</div>

	</div>
    <!-- End Wrapper -->
    
    <!-- Begin Footer -->
    <div id="footer">
    <div class="menu-header"><ul id="menu-navigation-1" class="menu">
    <li class="menu-item menu-item-type-post_type menu-item-163"><a href="">Lời ngỏ</a></li>
    <li class="menu-item menu-item-type-custom menu-item-166"><a href="">Xem bói</a></li>
    <li class="menu-item menu-item-type-custom menu-item-859"><a href="">Danh ngôn</a></li>
    <li class="menu-item menu-item-type-custom menu-item-167"><a href="">Sống đẹp</a></li>
    <li class="menu-item menu-item-type-custom menu-item-168"><a href="">Tình yêu</a></li>
	</ul>
    </div>
    <p>Bản quyền © 2013 <a href="#page"> Hiep Nguyen </a></p>      
    </div>
</div>
</div>
<!-- End Page -->
</body>
</html>