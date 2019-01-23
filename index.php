<?php
include './MinPHP/run/init.php';
$act = $_GET['act'];
$act = empty($act) ? 'index' : $_GET['act'];
$menu = '';
switch($act){
    // 接口分类
    case 'cate':
        $menu = ' - 分类管理';
        $file = './MinPHP/run/cate.php';
        break;
    // 登录退出
    case 'login':
        $menu = ' - 登录';
        $file = './MinPHP/run/login.php';
        break;
    // 首页
    case 'index':
        $menu = ' - 欢迎';
        $file = './MinPHP/run/hello.php';
        break;
    // 接口详情页
    case 'api':


        $menu = ' - ';
        $file = './MinPHP/run/info.php';
        break;
        
    default:
        $menu = ' - 欢迎';
        $file = './MinPHP/run/hello.php';
        break;
}
include './MinPHP/run/main.php';