<!-- CONTENT AREA -->
<div class="content-area">

    <!-- BREADCRUMBS -->
    <section class="page-section breadcrumbs text-center">
        <div class="container">
            <div class="page-header">
                <h1>Login</h1>
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
                    <!-- <h3 class="block-title"><span>Login</span></h3>
               
                <div class="box_content form_account"> -->
                    <?php
                    if (isset($_SESSION['user'])) {
                        extract($_SESSION['user']);
                    ?>
                        <div class="mb">
                            Xin chào
                            <?= $user ?>!!!
                        </div>
                        <div class="mb">
                            <li>
                                <a href="index.php?act=quenmk">Quên mật khẩu </a>
                            </li>
                            <li>
                                <a href="index.php?act=edit_taikhoan">Cập nhật tài khoản</a>
                            </li>
                            <?php
                            if ($id_role == 1) {
                            ?>
                                <li>
                                    <a href="admin/index.php">Đăng nhập Admin</a>
                                </li>
                            <?php } ?>
                            <li>
                                <a href="index.php?act=exit">Thoát</a>
                            </li>
                        </div>
                    <?php
                    } else {
                    ?>
                        <h3 class="block-title"><span>Login</span></h3>
                        <form action="index.php?act=dangnhap" class="form-login" method="post">
                            <div class="row">
                                <div class="col-md-12 hello-text-wrap">
                                    <span class="hello-text text-thin">Hello, welcome to your account</span>
                                </div>
                                <div class="col-md-12 col-lg-6">
                                    <a class="btn btn-theme btn-block btn-icon-left facebook" href="#"><i class="fa fa-facebook"></i>Sign in with Facebook</a>
                                </div>
                                <div class="col-md-12 col-lg-6">
                                    <a class="btn btn-theme btn-block btn-icon-left twitter" href="#"><i class="fa fa-twitter"></i>Sign in with Twitter</a>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group"><input class="form-control" name="user" type="text" placeholder="User name or email"></div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group"><input class="form-control" name="pass" type="password" placeholder="Your password"></div>
                                </div>
                                <div class="col-md-12 col-lg-6">
                                    <div class="checkbox">
                                        <label><input type="checkbox"> Remember me</label>
                                    </div>
                                </div>
                                <div class="col-md-12 col-lg-6 text-right-lg">
                                    <a class="forgot-password" href="index.php?act=quenmk">forgot password?</a>
                                </div>
                                <div class="col-md-6">
                                    <input class="btn btn-theme btn-block btn-theme-dark" type="submit" name="dangnhap" value="login">
                                </div>
                            </div>
                        </form>
                        <!-- <div class="box_content form_account">

                            <li>
                                <a href="index.php?act=quenmk">Quên mật khẩu </a>
                            </li>
                            <li>
                                <a href="index.php?act=dangky">Đăng kí thành viên</a>
                            </li> -->
                        <?php
                    }
                        ?>
                        <!-- </div> -->
                </div>
                <div class="col-sm-6">
                    <h3 class="block-title"><span>Create New Account</span></h3>
                    <form action="#" class="create-account">
                        <div class="row">
                            <div class="col-md-12 hello-text-wrap">
                                <span class="hello-text text-thin">Create Your Account</span>
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
                                <a class="btn btn-block btn-theme btn-theme-dark btn-create" href="index.php?act=dangky">Create Account</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        </div>
    </section>
    <!-- /PAGE -->
</div>
<!-- /CONTENT AREA -->