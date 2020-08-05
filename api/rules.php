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
	$url_devices = 'https://www.gouyihao.net/api/rules.php';
	$post2['sensorid'] = $res_item[1];
	$res2_json = httpRequest($url_devices, 'post', $post2);
	// echo $res2_json;
	$res2 = json_decode($res2_json, true);
	// var_dump($res2);
?>