<?php
	// include('login.php');
	
	
	// 根据传感器编号获取传感器数据
	$id = $sensor_item[1];
	// echo $id;
	$curl = curl_init();

	curl_setopt_array($curl, array(
	  CURLOPT_URL => "http://www.iotclient.com:7002/deviceCommand/queryDeviceSensor/".$id,
	  CURLOPT_RETURNTRANSFER => true,
	  CURLOPT_ENCODING => "",
	  CURLOPT_MAXREDIRS => 10,
	  CURLOPT_TIMEOUT => 0,
	  CURLOPT_CONNECTTIMEOUT => 1,
	  CURLOPT_FOLLOWLOCATION => true,
	  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	  CURLOPT_CUSTOMREQUEST => "GET",
	  CURLOPT_HTTPHEADER => array(
		"Content-Type: application/x-www-form-urlencoded",
		"sign: ".$header['sign'],
		"sessionId: ".$header['sessionId']
	  ),
	));

	$response_json = curl_exec($curl);
	curl_close($curl);
	$response = json_decode($response_json, true);
		
	if ($response['info'] == [])
	{
		$response['info'] = "0";
	}
	
	// echo $response_json;
	// echo json_encode($response);
?>