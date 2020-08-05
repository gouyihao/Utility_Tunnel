<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
	
    <title>Control</title>
  </head>
  <body style="background-color:transparent;">
    <div style="width:100%;margin-left:25%;margin-top:-1%">
	  <div class="card" style="width: 15%;float:left;margin:2%">
		<img src="../img/actutor/yellowled.jpg" class="card-img-top" alt="...">
		<div class="card-body">
		  <h5 class="card-title">黄灯</h5>
		  <button type="button" class="btn btn-primary" id="green_1_open">运行</button>
		  <button type="button" class="btn btn-danger" id="green_1_close">停止</button>
		</div>
	  </div>

	  <div class="card" style="width: 15%;float:left;margin:2%">
		<img src="../img/actutor/redled.jpg" class="card-img-top" alt="...">
		<div class="card-body">
		  <h5 class="card-title">红灯</h5>
		  <button type="button" class="btn btn-primary" id="red_1_open">运行</button>
		  <button type="button" class="btn btn-danger" id="red_1_close">停止</button>
		</div>
	  </div>
	
	  <div class="card" style="width: 15%;float:left;margin:2%;margin-right:10%">
		<img src="../img/actutor/fan.jpg" class="card-img-top" alt="...">
		<div class="card-body">
		  <h5 class="card-title">风机</h5>
		  <button type="button" class="btn btn-primary" id="fan_open">运行</button>
		  <button type="button" class="btn btn-danger" id="fan_close">停止</button>
		</div>
	  </div>
	</div>
	
	<div style="width:100%;margin-left:5%">
	  <div class="card" style="width: 15%;float:left;margin:2%;margin-left:22%">
		<img src="../img/actutor/greenled.jpg" class="card-img-top" alt="...">
		<div class="card-body">
		  <h5 class="card-title">绿灯</h5>
		  <button type="button" class="btn btn-primary" id="green_2_open">运行</button>
		  <button type="button" class="btn btn-danger" id="green_2_close">停止</button>
		</div>
	  </div>

	  <div class="card" style="width: 15%;float:left;margin:2%">
		<img src="../img/actutor/pump.jpg" class="card-img-top" alt="...">
		<div class="card-body">
		  <h5 class="card-title">水泵</h5>
		  <button type="button" class="btn btn-primary" id="red_2_open">运行</button>
		  <button type="button" class="btn btn-danger" id="red_2_close">停止</button>
		</div>
	  </div>
	
	  <div class="card" style="width: 15%;float:left;margin:2%">
		<img src="../img/actutor/light.jpg" class="card-img-top" alt="...">
		<div class="card-body">
		  <h5 class="card-title">报警灯</h5>
		  <button type="button" class="btn btn-primary" id="light_open">运行</button>
		  <button type="button" class="btn btn-danger" id="light_close">停止</button>
		</div>
	  </div>
	</div>
	<!--  onclick="javascript:open_green_1() -->
	
	<script>
		// 绿灯1
		$("#green_1_open").click(function() {
			// console.log('OK');
			$.ajax({
				type: 'get',
				dataType: "json",
				url: '../api/control.php',
				data: {
					id: 188,
					deviceId: 275,
					sensorId: 6,
					ctrlAction: 1,
				},
				success: function(data) {
					// console.log(data);
					if (data == 200)
					{
						alert('打开成功');
					}
					else
					{
						alert('打开失败');
					}
				},
			});
		});
		$("#green_1_close").click(function() {
			// console.log('OK');
			$.ajax({
				type: 'get',
				dataType: "json",
				url: '../api/control.php',
				data: {
					id: 188,
					deviceId: 275,
					sensorId: 6,
					ctrlAction: 0,
				},
				success: function(data) {
					// console.log(data);
					if (data == 200)
					{
						alert('关闭成功');
					}
					else
					{
						alert('关闭失败');
					}
				},
			});
		});
		
		// 绿灯2
		$("#green_2_open").click(function() {
			// console.log('OK');
			$.ajax({
				type: 'get',
				dataType: "json",
				url: '../api/control.php',
				data: {
					id: 189,
					deviceId: 275,
					sensorId: 7,
					ctrlAction: 1,
				},
				success: function(data) {
					// console.log(data);
					if (data == 200)
					{
						alert('打开成功');
					}
					else
					{
						alert('打开失败');
					}
				},
			});
		});
		$("#green_2_close").click(function() {
			// console.log('OK');
			$.ajax({
				type: 'get',
				dataType: "json",
				url: '../api/control.php',
				data: {
					id: 189,
					deviceId: 275,
					sensorId: 7,
					ctrlAction: 0,
				},
				success: function(data) {
					// console.log(data);
					if (data == 200)
					{
						alert('关闭成功');
					}
					else
					{
						alert('关闭失败');
					}
				},
			});
		});
		
		// 红灯1
		$("#red_1_open").click(function() {
			// console.log('OK');
			$.ajax({
				type: 'get',
				dataType: "json",
				url: '../api/control.php',
				data: {
					id: 192,
					deviceId: 275,
					sensorId: 4,
					ctrlAction: 1,
				},
				success: function(data) {
					// console.log(data);
					if (data == 200)
					{
						alert('打开成功');
					}
					else
					{
						alert('打开失败');
					}
				},
			});
		});
		$("#red_1_close").click(function() {
			// console.log('OK');
			$.ajax({
				type: 'get',
				dataType: "json",
				url: '../api/control.php',
				data: {
					id: 192,
					deviceId: 275,
					sensorId: 4,
					ctrlAction: 0,
				},
				success: function(data) {
					// console.log(data);
					if (data == 200)
					{
						alert('关闭成功');
					}
					else
					{
						alert('关闭失败');
					}
				},
			});
		});
		
		// 红灯2
		$("#red_2_open").click(function() {
			// console.log('OK');
			$.ajax({
				type: 'get',
				dataType: "json",
				url: '../api/control.php',
				data: {
					id: 193,
					deviceId: 275,
					sensorId: 5,
					ctrlAction: 1,
				},
				success: function(data) {
					// console.log(data);
					if (data == 200)
					{
						alert('打开成功');
					}
					else
					{
						alert('打开失败');
					}
				},
			});
		});
		$("#red_2_close").click(function() {
			// console.log('OK');
			$.ajax({
				type: 'get',
				dataType: "json",
				url: '../api/control.php',
				data: {
					id: 193,
					deviceId: 275,
					sensorId: 5,
					ctrlAction: 0,
				},
				success: function(data) {
					// console.log(data);
					if (data == 200)
					{
						alert('关闭成功');
					}
					else
					{
						alert('关闭失败');
					}
				},
			});
		});
		
		// 风机
		$("#fan_open").click(function() {
			// console.log('OK');
			$.ajax({
				type: 'get',
				dataType: "json",
				url: '../api/control.php',
				data: {
					id: 190,
					deviceId: 275,
					sensorId: 2,
					ctrlAction: 1,
				},
				success: function(data) {
					// console.log(data);
					if (data == 200)
					{
						alert('打开成功');
					}
					else
					{
						alert('打开失败');
					}
				},
			});
		});
		$("#fan_close").click(function() {
			// console.log('OK');
			$.ajax({
				type: 'get',
				dataType: "json",
				url: '../api/control.php',
				data: {
					id: 190,
					deviceId: 275,
					sensorId: 2,
					ctrlAction: 0,
				},
				success: function(data) {
					// console.log(data);
					if (data == 200)
					{
						alert('关闭成功');
					}
					else
					{
						alert('关闭失败');
					}
				},
			});
		});
		
		// 报警灯
		$("#light_open").click(function() {
			// console.log('OK');
			$.ajax({
				type: 'get',
				dataType: "json",
				url: '../api/control.php',
				data: {
					id: 191,
					deviceId: 275,
					sensorId: 3,
					ctrlAction: 1,
				},
				success: function(data) {
					// console.log(data);
					if (data == 200)
					{
						alert('打开成功');
					}
					else
					{
						alert('打开失败');
					}
				},
			});
		});
		$("#light_close").click(function() {
			// console.log('OK');
			$.ajax({
				type: 'get',
				dataType: "json",
				url: '../api/control.php',
				data: {
					id: 191,
					deviceId: 275,
					sensorId: 3,
					ctrlAction: 0,
				},
				success: function(data) {
					// console.log(data);
					if (data == 200)
					{
						alert('关闭成功');
					}
					else
					{
						alert('关闭失败');
					}
				},
			});
		});
	</script>
	
	<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    </body>
</html>