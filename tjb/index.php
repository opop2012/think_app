<?php
    ini_set('date.timezone','Asia/Shanghai');
    // 调试模式开关
    define('APP_DEBUG', false);
    define('DS', DIRECTORY_SEPARATOR);
    // 入口文件所在目录
    define('WWW_ROOT',dirname(dirname(__FILE__)).DS);
    // 定义项目名称
    define('APP_NAME', 'tjb');
    // 定义项目路径
    define('APP_PATH', WWW_ROOT.APP_NAME.DS);
    // 载入核心文件
    require WWW_ROOT.'Lib/ThinkPHP.php';