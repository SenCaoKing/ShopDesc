<?php defined('API') or exit('https://baidu.com');?>
<!doctype html>
<html lang="zh-CN" style="height: 100%;">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>API接口管理工具</title>
    <link rel="icon" type="image/x-icon" href="./MinPHP/res/favicon.ico">
    <link href="./MinPHP/res/bootstrap-3.3.4-dist/css/bootstrap.min.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="./MinPHP/res/html5shiv.min.js"></script>
    <script src="./MinPHP/res/respond.min.js"></script>
    <![endif]-->
    <link href="./MinPHP/res/style.css" rel="stylesheet" type="text/css"/>
</head>
<body style="height: 100%;">
<div class="container-fluid" style="background: white; height: 100%;">
    <div class="row" style="height: 100%;">
        <!-- 左侧导航 -->
        <div class="col-md-3" style="position: relative; background: #f5f5f5; padding: 10px; height: 100%; border-right: #ddd 1px solid; overflow-y: auto;">
            <div style="height: 50px; font-size: 30px; line-height: 50px;">
                <a style="color: #000000; text-shadow: 1px 0px 1px #666; text-decoration: none;" href="<?php echo U()?>">
                    <span class="glyphicon glyphicon-random" aria-hidden="true" style="width: 40px;"></span>&nbsp;&nbsp;
                    <span style="position: relative; top: -3px;">API Manager <span style="font-size: 12px; position: relative; top: -13px;">&nbsp;<?php echo C('version->no')?></span>
                    </span>
                </a>
            </div>
            <?php
            include('./MinPHP/run/menu.php');
            ?>
        </div>
        <!-- 左侧导航 end -->
        <div class="col-md-9" style="height: 100%; background: white; margin: 0px; overflow-y: auto; padding: 0px;">
            <!-- 顶部导航 start -->
            <div class="textshadow" style="font-size: 16px; width: 100%; height: 60px; line-height: 60px; padding: 0 16px 0 16px; border-bottom: #ddd 1px solid;">
                <span> <a href="<?php echo U() ?>">Home</a>   </span>
                <span style="float: right;">
                    <?php
                    echo '<a href="?act=login&type=quit">退出&nbsp;&nbsp;<span class="glyphicon glyphicon-log-out" aria-hidden="true"></span></a>';



                    echo '<a href="?act=login">登录&nbsp;&nbsp;<span class="glyphicon glyphicon-log-in" aria-hidden="true"></span></a>';
                    ?>
                </span>
            </div>
            <!-- 顶部导航 end -->
            <!-- 主窗口 start -->
            <div style="padding: 16px;">





            </div>
            <!-- 主窗口 end -->
        </div>
    </div>
</div>
<script src="./MinPHP/res/jquery.min.js"></script>
<script src="./MinPHP/res/bootstrap-3.3.4-dist/js/bootstrap.min.js"></script>
</body>
</html>