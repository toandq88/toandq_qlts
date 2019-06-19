<?php
/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\AppAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <?php $this->registerCsrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>

        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Google Font -->
        <link rel="stylesheet"
              href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic" />
              <?php $this->head() ?>
    </head>
    <body class="hold-transition skin-blue sidebar-mini">
        <?php $this->beginBody() ?>
        <div class="wrapper">

            <!-- Main Header -->
            <header class="main-header">
                <!-- Logo -->
                <a href="<?= Yii::$app->homeUrl ?>" class="logo">
                    <!-- mini logo for sidebar mini 50x50 pixels -->
                    <span class="logo-mini"><b>S</b>hop</span>
                    <!-- logo for regular state and mobile devices -->
                    <span class="logo-lg"><b>Shop</b> Manager</span>
                </a>

                <!-- Header Navbar -->
                <nav class="navbar navbar-static-top" role="navigation">
                    <!-- Sidebar toggle button-->
                    <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                        <span class="sr-only">Toggle navigation</span>
                    </a>
                    <!-- Navbar Right Menu -->
                    <div class="navbar-custom-menu">
                        <ul class="nav navbar-nav">
                            <li class="dropdown user user-menu">
                                <!-- Menu Toggle Button -->
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <!-- The user image in the navbar-->
                                    <img src="<?= Yii::$app->homeUrl ?>/toandq/dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
                                    <!-- hidden-xs hides the username on small devices so only the image appears. -->
                                    <span class="hidden-xs">Đinh Quốc Toản</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <!-- The user image in the menu -->
                                    <li class="user-header">
                                        <img src="<?= Yii::$app->homeUrl ?>/toandq/dist/img/user2-160x160.jpg" class="img-circle" alt="Ảnh">
                                        <p>
                                            Đinh Quốc Toản - Web Developer
                                            <small>Thành viên từ 01/6/2019</small>
                                        </p>
                                    </li>
                                    <!-- Menu Footer-->
                                    <li class="user-footer">
                                        <div class="pull-left">
                                            <a href="#" class="btn btn-default btn-flat">Thông tin cá nhân</a>
                                        </div>
                                        <div class="pull-right">
                                            <a href="#" class="btn btn-default btn-flat">Thoát</a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="main-sidebar">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- search form (Optional) -->
                    <form action="#" method="get" class="sidebar-form">
                        <div class="input-group">
                            <input type="text" name="q" class="form-control" placeholder="Search...">
                            <span class="input-group-btn">
                                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                                </button>
                            </span>
                        </div>
                    </form>
                    <!-- /.search form -->

                    <!-- Sidebar Menu -->
                    <ul class="sidebar-menu" data-widget="tree">
                        <li>
                            <a href="<?= Yii::$app->homeUrl ?>cauhinh">
                                <i class="fa fa-cog"></i>
                                <span>Cấu hình</span>
                            </a>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-slack"></i>
                                <span>Sản phẩm</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="<?= Yii::$app->homeUrl ?>sanpham"><i class="fa fa-slack"></i> Sản phẩm</a></li>
                                <li><a href="<?= Yii::$app->homeUrl ?>sanpham-danhmuc"><i class="fa fa-bars"></i> Danh mục sản phẩm</a></li>
                                <li><a href="<?= Yii::$app->homeUrl ?>sanpham-thuonghieu"><i class="fa fa-empire"></i> Thương hiệu</a></li>
                                <li><a href="<?= Yii::$app->homeUrl ?>timkiem-theogia"><i class="fa fa-search"></i> Khoảng giá tìm kiếm</a></li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-building-o"></i>
                                <span>Hóa đơn</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="#"><i class="fa fa-calculator"></i> Đặt hàng</a></li>
                                <li><a href="#"><i class="fa fa-building-o"></i> Xuất hóa đơn</a></li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-external-link"></i>
                                <span>Thông tin</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="#"><i class="fa fa-external-link"></i> Thông tin</a></li>
                                <li><a href="#"><i class="fa fa-bars"></i> Danh mục</a></li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-newspaper-o"></i>
                                <span>Tin tức</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="#"><i class="fa fa-newspaper-o"></i> Tin tức</a></li>
                                <li><a href="#"><i class="fa fa-bars"></i> Danh mục</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="<?= Yii::$app->homeUrl ?>quangcao">
                                <i class="fa fa-newspaper-o"></i> <span>Quảng cáo</span>
                                <span class="pull-right-container">
                                    <small class="label pull-right bg-green">new</small>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="<?= Yii::$app->homeUrl ?>lienhe">
                                <i class="fa fa-sticky-note"></i> <span>Liên hệ</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?= Yii::$app->homeUrl ?>thanhvien">
                                <i class="fa fa-user"></i> <span>Thành viên</span>
                            </a>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-tasks"></i>
                                <span>Đơn vị hành chính</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="#"><i class="fa fa-circle-o"></i> Tỉnh / Thành phố</a></li>
                                <li><a href="#"><i class="fa fa-circle-o"></i> Quận / Huyện</a></li>
                                <li><a href="#"><i class="fa fa-circle-o"></i> Xã / Phường</a></li>
                            </ul>
                        </li>
                    </ul>
                    <!-- /.sidebar-menu -->
                </section>
                <!-- /.sidebar -->
            </aside>

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <ol class="breadcrumb">
                        <?=
                        Breadcrumbs::widget([
                            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                        ])
                        ?>
                    </ol>
                </section>
                
                <!-- Main content -->
                <section class="content container-fluid">
                    <?= $content ?>
                </section>
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->

            <!-- Main Footer -->
            <footer class="main-footer">
                <!-- To the right -->
                <div class="pull-right hidden-xs">
                    Bất cứ thứ gì bạn muốn!
                </div>
                <!-- Default to the left -->
                <strong>Bản quyền &copy; <?=date('Y',time())?> của <a href="#">toandq</a>.</strong> Đã đăng ký bản quyền.
            </footer>
        </div>
        <!-- ./wrapper -->
        <?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage() ?>
