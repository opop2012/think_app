<?php
// 配置信息
return array
(
    // 数据库类型
    'DB_TYPE'               => 'mysql',
    // 服务器地址
    'DB_HOST'               => 'localhost',
    // 数据库名
    'DB_NAME'               => 'tjb',
    // 用户名
    'DB_USER'               => 'root',
    // 密码
    'DB_PWD'                => '',
    // 端口
    'DB_PORT'               => '3306',
    // 数据库表前缀
    'DB_PREFIX'             => 'think_',
    // 数据库编码
    'DB_CHARSET'            => 'utf8',
    
    // 表单令牌
    'TOKEN_ON'              => true,
    // 令牌名称
    'TOKEN_NAME'            => 'token_id',
    // 加密方式
    'TOKEN_TYPE'            => 'md5',
    // 是否重置
    'TOKEN_RESET'           => true,
    
    // URL模式
    'URL_MODEL'             => 0,
    // URL不区分大小写
    'URL_CASE_INSENSITIVE'  => true,
    'URL_HTML_SUFFIX'       => false,
    'LAYOUT_ON'             => true,
);