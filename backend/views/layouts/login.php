<?php
/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
    <head>
        <meta charset="UTF-8">
        <title>Đăng nhập hệ thống</title>
        <link rel="stylesheet" href="<?= Yii::getAlias('@web').'/toandq/css/style.css'?>">
    </head>

    <body>
        <?php $this->beginBody() ?>
        <div class="login">
            <div class="login-container" style="text-align:center; font-size: 14px; font-weight: bold;">
                <span style="color: #28d;">MANAGER SHOPPING</span>
            </div>
            <div class="login-header" style="text-align: left;">
                <table>
                    <tr>
                        <td>
                            <img src="<?= Yii::getAlias('@web')?>/toandq/images/logo.jpg" style="width: 90px; height: 88px;" />
                        </td>
                        <td class="login-header" style="text-align: center;">
                            ĐĂNG NHẬP HỆ THỐNG
                        </td>
                    </tr>
                </table>
            </div>
            <?= $content?>
        </div>
        <?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage() ?>
