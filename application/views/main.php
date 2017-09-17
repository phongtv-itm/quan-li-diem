<!-- 
Created on : Aug 28, 2017, 5:50:37 AM
Author     : phongtv
Library    : bootstrap-4-beta
-->

<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <title>Administrator</title>
   <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
   <link rel="stylesheet" href="<?php echo public_url(); ?>/css/bootstrap.min.css">
   <!-- Theme style -->
   <link rel="stylesheet" href="<?php echo public_url(); ?>/css/font-awesome.min.css">
   <link rel="stylesheet" href="<?php echo public_url(); ?>/css/main.css">
</head>
<body onload="//$('#menu-toggle').click()">
   <div id="wrapper">
      <!-- Sidebar -->
      <div id="sidebar-wrapper">
         <div class="sidebar-brand">
            <a href="#">
               <img src="<?php echo public_url(); ?>/img/avt.png" alt="avt" class="usr-avt img-circle">
               <h5>Welcome PhongTV!</h5>
               <img src="<?php echo public_url(); ?>/img/sidebarSep2.png" alt="brandSep">
            </a>
         </div>
         <div class="sidebar-nav">
           <ul>
            <li>
               <a href="<?php echo base_url(); ?>"><i class="fa fa-tachometer" aria-hidden="true"></i> Trang chủ</a>
            </li>
            <!--========================Nhap DL===========================-->
            <li> 
               <a href="#" data-toggle="collapse" data-target="#collapseNhapDL" aria-expanded="false" aria-controls="collapseNhapDL">
                  <i class="fa fa-database" aria-hidden="true"></i> Nhập dữ liệu <i style="height: 40px; padding: 12px" class="fa fa-angle-right pull-right"></i>
               </a>
               <ul class="collapse" id="collapseNhapDL">
                  <li>
                     <a href="<?php echo base_url(); ?>input_data/"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Nhập điểm</a>
                  </li>
                  <li>
                     <a href="#"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Nhập môn học</a>
                  </li>
               </ul>
            </li>
            <!--=========================Bang Diem==========================-->
            <li>
               <a href="#" data-toggle="collapse" data-target="#collapseBangDiem" aria-expanded="false" aria-controls="collapseBangDiem">
                  <i class="fa fa-gavel" aria-hidden="true"></i> Quản lí bảng điểm <i style="height: 40px; padding: 12px" class="fa fa-angle-right pull-right"></i>
               </a>
               <ul class="collapse" id="collapseBangDiem">
                  <li>
                     <a href="<?php echo base_url(); ?>transcripts"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Bảng điểm sinh viên</a>
                  </li>
                  <li>
                     <a href="<?php echo base_url(); ?>transcripts"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Bảng điểm môn học</a>
                  </li>
                  <li>
                     <a href="<?php echo base_url(); ?>transcripts"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Bảng điểm lớp</a>
                  </li>
               </ul>
            </li>
            <!--==========================Thong Ke=========================-->
            <li>
               <a href="#" data-toggle="collapse" data-target="#collapseThongKe" aria-expanded="false" aria-controls="collapseThongKe">
                  <i class="fa fa-bar-chart" aria-hidden="true"></i> Biểu mẫu thống kê <i style="height: 40px; padding: 12px" class="fa fa-angle-right pull-right"></i>
               </a>
               <ul class="collapse" id="collapseThongKe">
                  <li>
                     <a href="<?php echo base_url(); ?>forms"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Thong ke hssv</a>
                  </li>
                  <li>
                     <a href="<?php echo base_url(); ?>forms"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Cac bieu mau khac</a>
                  </li>
               </ul>
            </li>
            <!--==========================Mon hoc=========================-->
            <li>
               <a href="#" data-toggle="collapse" data-target="#collapseMonHoc" aria-expanded="false" aria-controls="collapseMonHoc">
               <i class="fa fa-folder-open" aria-hidden="true"></i> Quản lí môn học <i style="height: 40px; padding: 12px" class="fa fa-angle-right pull-right"></i>
               </a>
               <ul class="collapse" id="collapseMonHoc">
                  <li>
                     <a href="<?php echo base_url(); ?>subjects"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Danh sách môn học</a>
                  </li>
                  <li>
                     <a href="<?php echo base_url(); ?>subjects"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Chỉnh sửa</a>
                  </li>
               </ul>
            </li>
            <!--==========================Lop=========================-->
            <li>
               <a href="#" data-toggle="collapse" data-target="#collapseLopHoc" aria-expanded="false" aria-controls="collapseLopHoc"><i class="fa fa-university" aria-hidden="true"></i> Quản lí lớp <i style="height: 40px; padding: 12px" class="fa fa-angle-right pull-right"></i>
               </a>
               <ul class="collapse" id="collapseLopHoc">
                  <li>
                     <a href="<?php echo base_url(); ?>courses"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Nhập thông tin lớp</a>
                  </li>
                  <li>
                     <a href="<?php echo base_url(); ?>courses"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Chỉnh sửa</a>
                  </li>
               </ul>
            </li>
            <!--==========================Sinh Vien=========================-->
            <li>
               <a href="#" data-toggle="collapse" data-target="#collapseSinhVien" aria-expanded="false" aria-controls="collapseSinhVien"><i class="fa fa-user" aria-hidden="true"></i> Quản lí sinh viên <i style="height: 40px; padding: 12px" class="fa fa-angle-right pull-right"></i>
               </a>
               <ul class="collapse" id="collapseSinhVien">
                  <li>
                     <a href="<?php echo base_url(); ?>student"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Nhập thông tin sinh viên</a>
                  </li>
                  <li>
                     <a href="<?php echo base_url(); ?>student"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Chỉnh sửa</a>
                  </li>
               </ul>
            </li>
            <!--===========================Giang Vien========================-->
            <li>
               <a href="#" data-toggle="collapse" data-target="#collapseGiangVien" aria-expanded="false" aria-controls="collapseGiangVien"><i class="fa fa-user-circle-o" aria-hidden="true"></i> Quản lí giảng viên <i style="height: 40px; padding: 12px" class="fa fa-angle-right pull-right"></i>
               </a>
               <ul class="collapse" id="collapseGiangVien">
                  <li>
                     <a href="<?php echo base_url(); ?>teacher"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Nhập thông tin giảng viên</a>
                  </li>
                  <li>
                     <a href="<?php echo base_url(); ?>teacher" ><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Chỉnh sửa</a>
                  </li>
               </ul>
            </li>
            <!--=========================Quan Tri==========================-->
            <li>
               <a href="#" data-toggle="collapse" data-target="#collapseQuanTri" aria-expanded="false" aria-controls="collapseQuanTri"><i class="fa fa-user" aria-hidden="true"></i> Quản trị viên <i style="height: 40px; padding: 12px" class="fa fa-angle-right pull-right"></i>
               </a>
               <ul class="collapse" id="collapseQuanTri">
                  <li>
                     <a href="<?php echo base_url(); ?>user"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Quản trị viên</a>
                  </li>
                  <li>
                     <a href="<?php echo base_url(); ?>user"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Quản lí</a>
                  </li>
               </ul>
            </li>
          </ul>
         </div>
      </div>
      <!-- /#sidebar-wrapper -->

      <!--xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx-->
      <!-- Header -->
      <header class="main-header navbar">
         <a class="tgmenu navbar-brand" href="#menu-toogle" id="menu-toggle">
            <i id="tgmenu" class="fa fa-cog" aria-hidden="true"></i>
         </a>
         
         <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fa fa-bars" aria-hidden="true"></i>
         </button>

         <div class="collapse navbar-collapse" id="main-menu">
            <!-- header float right-->
            <ul class="nav navbar-nav navbar-right">  
               <li class="">
                  <a class="" href="<?php echo base_url(); ?>">
                     <i class="fa fa-home" aria-hidden="true"></i> Trang chủ
                  </a>
               </li>
               <li class="">
                  <a class="" href="<?php echo base_url('logout'); ?>">
                     <i class="fa fa-sign-out" aria-hidden="true"></i> Đăng xuất
                  </a>
               </li>
            </ul>
         </div>
      </header>

      <!-- Page Content -->
      <div id="page-content-wrapper">
         <div class="container-fluid">
            <?php $this->load->view($content);?>
         </div>
      </div>
      <!-- /#page-content-wrapper -->
   </div>
   <!-- /#wrapper-->

   <!--Load js-->
   <script src="<?php echo public_url(); ?>js/jquery-3.2.1.min.js"></script>
   <script src="<?php echo public_url(); ?>js/bootstrap.min.js"></script>

   <!-- Menu Toggle Script -->
   <script>
      $("#menu-toggle").click(function(e) {
         e.preventDefault();
         $("#wrapper").toggleClass("toggled");
         $('#tgmenu').toggleClass("fa-cog");
         $('#tgmenu').toggleClass("fa-angle-double-left");
      });
      $("#menu-toggle").mouseenter(function(e) {
         e.preventDefault();
         if($('#tgmenu').hasClass('fa-cog')) 
         {
            $('#tgmenu').toggleClass("fa-angle-double-right");
            $('#tgmenu').toggleClass("fa-cog");
         }
      });
      $("#menu-toggle").mouseleave(function(e) {
         e.preventDefault();
         if($('#tgmenu').hasClass('fa-angle-double-right')) 
         {
            $('#tgmenu').toggleClass("fa-angle-double-right");
            $('#tgmenu').toggleClass("fa-cog");
         }
      });
   </script>
</body>
</html>