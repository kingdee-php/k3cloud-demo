<?php
require('vendor/autoload.php');

// ------------------------------------------------------------
// 1、配置参数
// ------------------------------------------------------------
$config = [
    'auth_type' => 3, // 授权类型：1 用户名+密码；2 第三方授权应用ID+应用密钥；3 签名；
    'host_url' => 'http||https://xxxxxxxxxxxxxxxxx/k3cloud/', // 金蝶授权请求地址
    'acct_id' => 'xxxxxxxxxx', // 账户ID
    'username' => 'xxxxxxxxxx', // 用户名（授权类型为1时必须）
    'password' => 'xxxxxxxxxx', // 密码（授权类型为1时必须）
    'appid' => 'xxxxxxxxxx', // 应用ID（授权类型为2或3时必须）
    'appsecret' => 'xxxxxxxxxx', // 应用Secret（授权类型为2或3时必须）
    'lcid' => 2052, // 账套语系，默认2052
];
$server = new \Kingdeephp\K3cloud\K3CloudApiSdk($config); // 实例化 & 登录

// ------------------------------------------------------------
// 2、调用API
// ------------------------------------------------------------
$params = [
    'FormId' => 'BD_MATERIAL', // 业务对象表单Id【必填】
];
$response = $server->queryBusinessInfo($params); // 元数据查询

// ------------------------------------------------------------
// 3、打印API返回结果
// ------------------------------------------------------------
var_dump($response);
