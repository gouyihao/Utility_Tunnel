<?php
	// 获取传感器信息
	include("sensor.php");
	// var_dump($res);
	
	
	foreach($res as $sensor_item)
	{
		include("queryDeviceSensor.php");
		// var_dump($sensor_item);
		// echo "<br>";
		// var_dump($response);
		// echo "<br>";
		
		$result[]['name'] = $sensor_item[3];
		$result[count($result) - 1]['value'] = $response['info'];

		$sendtoserver['sensorId'] = $sensor_item[1];
		$sendtoserver['data'] = $response['info'];
		$sendtoserver['receivedtime'] = date("Y-m-d H:i:s");
		$url_savetoserver = 'https://www.gouyihao.net/api/saveSensorData.php';
		$savetoserver_json = httpRequest($url_savetoserver, 'post', $sendtoserver);
		
		// var_dump($savetoserver_json);
	}
	
	echo json_encode($result);
	// var_dump($result);
?>