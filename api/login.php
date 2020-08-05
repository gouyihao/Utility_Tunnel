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
	$url_user = 'http://www.iotclient.com:7002/sign/getSign';
	$post_user['username'] = 'holliotsh';
	$post_user['password'] = 'holliotsh';
	$res_user_json = httpRequest($url_user, 'post', $post_user);
	// echo $res_user_json;
	$res_user = json_decode($res_user_json, true);
	// echo $res_user_json;
	$sign = $res_user["info"]["gLOBAL_SIGN"];
	$sessionId = $res_user["info"]["gLOBAL_SESSION_ID"];
	$header['sign'] = $sign;
	$header['sessionId'] = $sessionId;
	// echo json_encode($header);
?>