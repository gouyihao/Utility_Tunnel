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
	
	function actuator_operator($id, $deviceId, $sensorId, $ctrlAction)
	{
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
		// var_dump($header);

		// post 控制下发
		$url_control = 'http://www.iotclient.com:7002/module/deviceControl';
		/*
		$post_control['deviceId'] = 275;
		$post_control['sensorId'] = 6;
		$post_control['ctrlAction'] = 1;
		$post_control['id'] = 188;
		*/
		$post_control['deviceId'] = $deviceId;
		$post_control['sensorId'] = $sensorId;
		$post_control['ctrlAction'] = $ctrlAction;
		$post_control['id'] = $id;
		// var_dump($post_control);
		$res_control_json = httpRequest($url_control, 'post', $post_control, $header);
		// var_dump($res_control_json);
		$res_control = json_decode($res_control_json, true);
		// var_dump($res_control);
		$re = $res_control['code'];
		return($re);
	}
	
	$id = $_GET['id'];
	$deviceId = $_GET['deviceId'];
	$sensorId = $_GET['sensorId'];
	$ctrlAction = $_GET['ctrlAction'];
	$retu = actuator_operator($id, $deviceId, $sensorId, $ctrlAction);
	// $retu = actuator_operator(188, 275, 6, 0);
	// var_dump($retu);
	echo $retu;
?>