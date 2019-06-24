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
                    <span class="logo-mini"><b>VEC</b></span>
                    <!-- logo for regular state and mobile devices -->
                    <span class="logo-lg"><b>VEC</b> - QLTS</span>
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
                                    <span class="hidden-xs"><?= Yii::$app->user->identity->name ?></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <!-- The user image in the menu -->
                                    <li class="user-header">
                                        <img src="<?= Yii::$app->homeUrl ?>/toandq/dist/img/user2-160x160.jpg" class="img-circle" alt="Ảnh">
                                        <p>
                                            <?= Yii::$app->user->identity->name ?> - Web Developer
                                            <small>Thành viên từ <?= date('d/m/Y', Yii::$app->user->identity->created_at) ?></small>
                                        </p>
                                    </li>
                                    <!-- Menu Footer-->
                                    <li class="user-footer">
                                        <div class="pull-left">
                                            <?=
                                            Html::a('Thông tin cá nhân', ['/user/view?id=' . Yii::$app->user->identity->id], ['class' => 'btn btn-default btn-flat'])
                                            ?>
                                        </div>
                                        <div class="pull-right">
                                            <?=
                                            Html::a('Thoát', ['/site/logout'], ['class' => 'btn btn-default btn-flat profile-link'])
                                            ?>
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
                            <a href="<?= Yii::$app->homeUrl ?>tuyenduong">
                                <i class="fa fa-road"></i>
                                <span>Tuyến đường</span>
                            </a>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-list"></i>
                                <span>Hạ tầng đường bộ</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="<?= Yii::$app->homeUrl ?>bienbao"><i class="fa fa-arrow-circle-right"></i> 1. Biển báo</a></li>
                                <li><a href="<?= Yii::$app->homeUrl ?>cau"><i class="fa fa-slack"></i> 2. Cầu</a></li>
                                <li><a href="<?= Yii::$app->homeUrl ?>cauvuot"><i class="fa fa-empire"></i> 3. Cầu vượt</a></li>
                                <li><a href="<?= Yii::$app->homeUrl ?>congchuidansinh"><i class="fa fa-object-group"></i> 4. Cống chui dân sinh</a></li>
                                <li><a href="<?= Yii::$app->homeUrl ?>congthoatnuoc"><i class="fa fa-minus-square-o"></i> 5. Cống thoát nước</a></li>
                                <li><a href="<?= Yii::$app->homeUrl ?>cotkm"><i class="fa fa-sign-out"></i> 6. Cột Km</a></li>
                                <li><a href="<?= Yii::$app->homeUrl ?>daiphancach"><i class="fa fa-sort-amount-asc"></i> 7. Dải phân cách</a></li>
                                <li><a href="<?= Yii::$app->homeUrl ?>dat"><i class="fa fa-square"></i> 8. Đất thuộc TSHTĐB</a></li>
                                <li><a href="<?= Yii::$app->homeUrl ?>hangraobaove"><i class="fa fa-retweet"></i> 9. Hàng rào bảo vệ</a></li>
                                <li><a href="<?= Yii::$app->homeUrl ?>hangraochongchoi"><i class="fa fa-star-half-full"></i> 10. Hàng rào chống chói</a></li>
                                <li><a href="<?= Yii::$app->homeUrl ?>ham"><i class="fa fa-toggle-off"></i> 11. Hầm</a></li>
                                <li><a href="<?= Yii::$app->homeUrl ?>hethongchieusang"><i class="fa fa-lightbulb-o"></i> 12. Hệ thống chiếu sáng</a></li>
                                <li><a href="<?= Yii::$app->homeUrl ?>hethongits"><i class="fa fa-send-o"></i> 13. Hệ thống ITS</a></li>
                                <li><a href="<?= Yii::$app->homeUrl ?>hoga"><i class="fa fa-hourglass-end"></i> 14. Hố ga</a></li>
                                <li><a href="<?= Yii::$app->homeUrl ?>khhobaiduphong"><i class="fa fa-industry"></i> 15. Kho bãi dự phòng</a></li>
                                <li><a href="<?= Yii::$app->homeUrl ?>maidoc"><i class="fa fa-ticket"></i> 16. Mái dốc</a></li>
                                <li><a href="<?= Yii::$app->homeUrl ?>matduong"><i class="fa fa-building"></i> 17. Mặt đường</a></li>
                                <li><a href="<?= Yii::$app->homeUrl ?>nutgiaoduongbo"><i class="fa fa-arrows"></i> 18. Nút giao đường bộ</a></li>
                                <li><a href="<?= Yii::$app->homeUrl ?>ranhdoc"><i class="fa fa-map-signs"></i> 19. Rãnh dọc</a></li>
                                <li><a href="<?= Yii::$app->homeUrl ?>raochanon"><i class="fa fa-tags"></i> 20. Rào chắn ồn</a></li>
                                <li><a href="<?= Yii::$app->homeUrl ?>tonholan"><i class="fa fa-sign-in"></i> 21. Tôn hộ lan</a></li>
                                <li><a href="<?= Yii::$app->homeUrl ?>thamcocayxanh"><i class="fa fa-ship"></i> 22. Thảm cỏ cây xanh</a></li>
                                <li><a href="<?= Yii::$app->homeUrl ?>thietbicanxe"><i class="fa fa-rss-square"></i> 23. Thiết bị cân xe</a></li>
                                <li><a href="<?= Yii::$app->homeUrl ?>tramdungnghi"><i class="fa fa-cutlery"></i> 24. Trạm dừng nghỉ</a></li>
                                <li><a href="<?= Yii::$app->homeUrl ?>tramthuphi"><i class="fa fa-money"></i> 25. Trạm thu phí</a></li>
                                <li><a href="<?= Yii::$app->homeUrl ?>tramytecuuho"><i class="fa fa-code-fork"></i> 26. Trạm y tế cứu hộ</a></li>
                                <li><a href="<?= Yii::$app->homeUrl ?>trungtamdieuhanh"><i class="fa fa-certificate"></i> 27. Trung tâm điều hành</a></li>
                                <li><a href="<?= Yii::$app->homeUrl ?>vachkeduong"><i class="fa fa-arrows-v"></i> 28. Vạch kẻ đường</a></li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-slack"></i>
                                <span>Tài sản khác</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="<?= Yii::$app->homeUrl ?>phuongtiendilai"><i class="fa fa-cab"></i> 1. Phương tiện đi lại</a></li>
                                <li><a href="<?= Yii::$app->homeUrl ?>thietbiom"><i class="fa fa-truck"></i> 2. Thiết bị O&M</a></li>
                                <li><a href="<?= Yii::$app->homeUrl ?>thietbithinghiem"><i class="fa fa-cc"></i> 3. Thiết bị thí nghiệm</a></li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-file-text-o"></i>
                                <span>Báo cáo</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="<?= Yii::$app->homeUrl ?>"><i class="fa fa-bars"></i> Báo cáo 1</a></li>
                                <li><a href="<?= Yii::$app->homeUrl ?>"><i class="fa fa-bars"></i> Báo cáo 2</a></li>
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
                            <a href="<?= Yii::$app->homeUrl ?>user">
                                <i class="fa fa-user"></i> <span>Thành viên</span>
                            </a>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-navicon"></i> <span>Thông tin chung</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="<?= Yii::$app->homeUrl ?>cauhinh">
                                        <i class="fa fa-cog"></i><span>Cấu hình</span>
                                    </a>
                                </li>
                                <li><a href="<?= Yii::$app->homeUrl ?>donvi"><i class="fa fa-users"></i> Đơn vị</a></li>
                                <li><a href="<?= Yii::$app->homeUrl ?>user"><i class="fa fa-user"></i> Người sử dụng</a></li>
                                <li><a href="<?= Yii::$app->homeUrl ?>mucdokiemtra"><i class="fa fa-toggle-right"></i> Mức độ kiểm tra</a></li>
                                <li><a href="<?= Yii::$app->homeUrl ?>mucdobaotri"><i class="fa fa-toggle-down"></i> Mức độ bảo trì</a></li>
                                <li class="treeview">
                                    <a href="#"><i class="fa fa-th-list"></i> Địa giới hành chính
                                        <span class="pull-right-container">
                                            <i class="fa fa-angle-left pull-right"></i>
                                        </span>
                                    </a>
                                    <ul class="treeview-menu">
                                        <li><a href="<?= Yii::$app->homeUrl ?>vn-tinh"><i class="fa fa-list-alt"></i> Tỉnh / Thành phố</a></li>
                                        <li><a href="<?= Yii::$app->homeUrl ?>vn-huyen"><i class="fa fa-list-alt"></i> Quận / Huyện</a></li>
                                        <li><a href="<?= Yii::$app->homeUrl ?>vn-xa"><i class="fa fa-list-alt"></i> Xã / Phường</a></li>
                                    </ul>
                                </li>
                                <li><a href="<?= Yii::$app->homeUrl ?>vn-tinh"><i class="fa fa-circle-o"></i> Tỉnh / Thành phố</a></li>
                                <li><a href="<?= Yii::$app->homeUrl ?>vn-huyen"><i class="fa fa-circle-o"></i> Quận / Huyện</a></li>
                                <li><a href="<?= Yii::$app->homeUrl ?>vn-xa"><i class="fa fa-circle-o"></i> Xã / Phường</a></li>
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
                <strong>Bản quyền &copy; <?= date('Y', time()) ?> của <a href="#">toandq</a>.</strong> Đã đăng ký bản quyền.
            </footer>
        </div>
        <!-- ./wrapper -->
        <?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage() ?>
