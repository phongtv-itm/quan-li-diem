<!DOCTYPE html>
<html lang="en">
<head>
   <!-- Standard Meta -->
   <meta charset="utf-8"/>
   <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
   <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

   <!-- Site Properties -->
   <title>Administrator</title>

   <!-- Stylesheets -->
   <link rel="stylesheet" href="<?php echo public_url(); ?>/css/font-awesome.min.css">
   <link rel="stylesheet" href="<?php echo public_url(); ?>/css/bootstrap.min.css">
   <link rel="stylesheet" href="<?php echo public_url(); ?>/css/login.css">
</head>
<body>
   <div class="header navbar container-fluid">
         <h3 class="nav navbar-nav"><i id="tgmenu" class="fa fa-cog"></i> Quản lý điểm</h3>
         <a class="home navbar-nav navbar-right" href="<?php echo base_url(); ?>">
            <i class="fa fa-home" aria-hidden="true"></i> Trang chủ
         </a>
   </div>
   <div class="container">   
      <div class="row">
         <div class="Absolute-Center is-Responsive">
            <div id="logo-container">
            </div>
            <div class="col-sm-12 col-md-12 col-md-offset-1">
               <form action="#" id="loginForm" method="POST">
                  <h4>Đăng nhập<hr style="margin-top: 9px"></h4>
                  <div id="loginError" class="form-group">
                     <span class="text-danger align-middle">
                        <!-- Put password error message here -->   
                        <i class="fa fa-close"></i> Error message 
                     </span>
                  </div>
                  <div class="form-group input-group">
                     <span class="input-group-addon"style="width: 40px"><i class="fa fa-user"></i></span>
                     <input class="form-control" type="text" name='username' placeholder="Tên đăng nhập"/>          
                  </div>
                  <div class="form-group input-group">
                     <span class="input-group-addon"style="width: 40px"><i class="fa fa-key"></i></span>
                     <input class="form-control" type="password" name='password' placeholder="Mật khẩu"/>     
                  </div>
                  <div class="checkbox">
                     <label>
                        <input type="checkbox"> Ghi nhớ mật khẩu
                     </label>
                  </div>
                  <div class="form-group">
                     <button type="button" class="btn btn-primary"><i class="fa fa-sign-in"></i> Đăng nhập</button>
                     <a class="btn btn-link" href="#">Quên mật khẩu?</a>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!--Load js-->
      <script src="<?php echo public_url(); ?>/js/jquery-3.2.1.min.js"></script>
      <script src="<?php echo public_url(); ?>/js/bootstrap.min.js"></script>
   </body>
   </html>