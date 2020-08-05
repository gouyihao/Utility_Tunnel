<?php
	// 加载库文件
	if (!function_exists("httpRequest"))
	{
		include("httprequest.php");
		// echo "未定义";
	}
	else
	{
		// echo "已定义";
	}
	
	// post 获取 用户验证信息
	$url_user = 'https://www.gouyihao.net/api/sensor.php';
	$post = [];
	$res_json = httpRequest($url_user, 'post', $post);
	// echo $res_json;
	$res = json_decode($res_json, true);
	// var_dump($res);
?>