<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="css/style.css"/>
<link rel="shortcut icon" href="favicon.ico" />
<title></title>
</head>
<body>
<?php
		session_start();
		include('config.php');
		if(!isset($_SESSION['USER']))
		{
            header('Location:login.php');
		} else {
			
		}
?>    
</body>
<div id="page-wrap">
    	<div id="header">
        	<h1 id="logo"><a href="index.php">logo</a></h1>
        </div>
        <!-- End Header-Logo -->
        
        <div id="top-bar">
        	<ul id="menu-page-menu" class="group">
            	<li><a href="index.php">Home</a></li>
                <li><a href="?menu=hocsinh_list">Quản lý học sinh</a></li>
                 
                <li><a href="?menu=dethi_list">Quản lý đề thi</a></li>
                
                <li><a href="?menu=cauhoi_list">Quản lý câu hỏi</a></li>
                	
                <li><a href="?menu=tintuc_list">Quản lý tin tức</a></li>
                	
                <li><a href="?menu=nhan-vien">Quản lý nhân viên</a></li>
             
                <li><a href="#">Công cụ</a>
                	<ul>
                        <li><a href="?menu=thong-ke">kết quả thi</a></li>
                        <li><a href="#">Thống kê</a></li>
                        <li><a href="#">Backup</a></li>
                        <li><a href="#">Sao lưu</a></li>
          			</ul>
                </li>
                <!--chao administrator-->
                <li style="color:#FF0; font-weight:bold; margin:3px 5px; font-size:14px;">Hello :
                        <li id="xinchao"><?php echo $_SESSION['USER'];?></li>
                        <a href='?menu=lout'><span style="margin:5px 5px;"><img border="0" src="images/logout.png"/></span></a>
                </li>	
            </ul>
          </div>
          <div id="rsidebar">
                <h5 style="margin-top:0px; margin-bottom:5px;"></h5>
				<?php
					if(isset($_GET['menu'])){
						if($_GET['menu']=='hocsinh_list'){
							include "hocsinh_list.php";
						}elseif($_GET['menu']=='hocsinh_edit'){
							include "hocsinh_edit.php";
						}elseif($_GET['menu']=='hocsinh_saveedit'){
							include "hocsinh_saveedit.php";
						}else if($_GET['menu']=='hocsinh_delete'){
							include("hocsinh_delete.php");
						}else if($_GET['menu']=='hocsinh_news'){
							include("hocsinh_news.php");
						}
						
						if($_GET['menu']=='cauhoi_list'){
							include "cauhoi_list.php";
						}else if($_GET['menu']=='cauhoi_news'){
							include("cauhoi_news.php");
						}else if($_GET['menu']=='cauhoi_delete'){
							include("cauhoi_delete.php");
						}else if($_GET['menu']=='cauhoi_edit'){
							include("cauhoi_edit.php");
						}else if($_GET['menu']=='cauhoi_saveedit'){
							include("cauhoi_saveedit.php");
						}
						
						if($_GET['menu']=='tintuc_list'){
							include "tintuc_list.php";
						}else if($_GET['menu']=='tintuc_news'){
							include("tintuc_news.php");
						}else if($_GET['menu']=='tintuc_delete'){
							include("tintuc_delete.php");
						}else if($_GET['menu']=='tintuc_edit'){
							include("tintuc_edit.php");
						}else if($_GET['menu']=='tintuc_saveedit'){
							include("tintuc_saveedit.php");
						}
						
						if($_GET['menu']=='dethi_list'){
							include "dethi_list.php";
						}elseif($_GET['menu']=='dethi_edit'){
							include "dethi_edit.php";
						}elseif($_GET['menu']=='dethi_saveedit'){
							include "dethi_saveedit.php";
						}else if($_GET['menu']=='dethi_delete'){
							include("dethi_delete.php");
						}else if($_GET['menu']=='dethi_news'){
							include("dethi_news.php");
						}else if($_GET['menu']=='thong-ke'){
							include("thong-ke.php");
						}else if($_GET['menu']=='nhan-vien'){
							include("nhan-vien.php");
						}else if($_GET['menu']=='nhanvien_news'){
							include("nhanvien_news.php");
						}else if($_GET['menu']=='phan-quyen'){
							include("nhanvien-phanquyen.php");
						}
						
						else if($_GET['menu']=='lout'){
							include("lout.php");
						}
						
						
						
						else{
						}
					}else
						include "hocsinh_list.php";
				?>
            </div>
    </div><!-- end page-wrap-->
</html>