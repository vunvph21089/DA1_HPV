 <!-- CONTENT AREA -->
 <div class="content-area">

     <!-- BREADCRUMBS -->
     <section class="page-section breadcrumbs text-center">
         <div class="container">
             <div class="page-header">
                 <h1>register</h1>
             </div>
             <ul class="breadcrumb">
                 <li><a href="#">Home</a></li>
                 <li><a href="#">Pages</a></li>
                 <li class="active">Login</li>
             </ul>
         </div>
     </section>
     <!-- /BREADCRUMBS -->

     <!-- PAGE -->
     <section class="page-section color">
         <div class="container">
             <div class="row">
                 <div class="col-sm-6">
                     <h3 class="block-title"><span>register</span></h3>
                     <form action="index.php?act=dangky" method="POST" class="form-login">
                         <div class="row">
                             <div class="col-md-12 hello-text-wrap">
                                 <span class="hello-text text-thin">Hello, welcome to your register</span>
                             </div>
                             <div class="col-md-12 col-lg-6">
                                 <a class="btn btn-theme btn-block btn-icon-left facebook" href="#"><i class="fa fa-facebook"></i>Sign in with Facebook</a>
                             </div>
                             <div class="col-md-12 col-lg-6">
                                 <a class="btn btn-theme btn-block btn-icon-left twitter" href="#"><i class="fa fa-twitter"></i>Sign in with Twitter</a>
                             </div>
                             <div class="col-md-12">
                                 <div class="form-group"><input class="form-control" name="email" type="email" placeholder="Email"></div>
                             </div>
                             <div class="col-md-12">
                                 <div class="form-group"><input class="form-control" name="user" type="text" placeholder="Tên đăng nhập"></div>
                             </div>
                             <div class="col-md-12">
                                 <div class="form-group"><input class="form-control" name="pass" type="password" placeholder="Mật khẩu"></div>
                             </div>
                             
                             <div class="col-md-12 col-lg-6 text-right-lg">
                                 <!-- <a class="forgot-password" href="#">forgot password?</a> -->
                             </div>
                             <div class="col-md-6">
                                 <input  class="btn btn-theme btn-block btn-theme-dark" type="submit" name="dangky" value="Đăng ký">

                             </div>
                         </div>
                     </form>
                     <h2 class="thongbao">
                         <?php
                            if (isset($thongbao) && ($thongbao != "")) {
                                echo $thongbao;
                            }
                            ?>
                     </h2>
                     <!-- <div class="box_left">
                         <div class="mb">
                             <div class="box_title">ĐĂNG KÝ THÀNH VIÊN</div>
                             <div class="box_content form_account">
                                 <form action="index.php?act=dangky" method="POST">
                                     <div>
                                         Email
                                         <input type="email" name="email">
                                     </div>
                                     <div>
                                         Username
                                         <input type="text" name="user">
                                     </div>
                                     <div>
                                         Password
                                         <input type="password" name="pass">
                                     </div>
                                     <div class="mt">
                                         <input type="submit" name="dangky" value="Đăng ký">
                                         <input type="reset" name="reset" value="Nhập lại">
                                     </div>
                                 </form>
                                 <h2 class="thongbao">
                                      <?php
                                        // if (isset($thongbao) && ($thongbao != "")) {
                                        //     echo $thongbao;
                                        // }
                                        ?> 
                                 </h2>
                             </div>
                         </div>
                     </div> -->
                 </div>
                     <div class="col-sm-6">
                         <h3 class="block-title"><span>Create New Account</span></h3>
                         <form action="#" class="create-account">
                             <div class="row">
                                 <div class="col-md-12 hello-text-wrap">
                                     <span class="hello-text text-thin">login</span>
                                 </div>
                                 <div class="col-md-12">
                                     <h3 class="block-title">Signup Today and You'll be able to</h3>
                                     <ul class="list-check">
                                         <li>Online Order Status</li>
                                         <li>See Ready Hot Deals</li>
                                         <li>Love List</li>
                                         <li>Sign up to receive exclusive news and private sales</li>
                                         <li>Quick Buy Stuffs</li>
                                     </ul>
                                 </div>
                                 <div class="col-md-6">
                                     <a class="btn btn-block btn-theme btn-theme-dark btn-create" href="index.php?act=dangnhap">login</a>
                                 </div>
                             </div>
                         </form>
                     </div>
                 </div>
             </div>
     </section>
     <!-- /PAGE -->

 </div>
 <!-- /CONTENT AREA -->