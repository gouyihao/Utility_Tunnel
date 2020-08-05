<!DOCTYPE html>
<html>
<head>
  <title>DataV</title>
  <script src="https://unpkg.com/vue"></script>
  <!--调试版-->
  <script src="https://cdn.bootcss.com/jquery/3.4.1/jquery.js"></script>
  <script src="https://unpkg.com/@jiaminghi/data-view/dist/datav.map.vue.js"></script>
  <!--压缩版 生产版本-->
  <!-- <script src="https://unpkg.com/@jiaminghi/data-view/dist/datav.min.vue.js"></script> -->
  <style>
    html, body {
      width: 100%;
      height: 100%;
      margin: 0px;
      padding: 0px;
    }
	
	#app {
		width:33%;
		height:50%;
		float:left;
	}
	
	#app2 {
		width:66%;
		height:50%;
		float:left;
	}
	
	#app3 {
		width:33%;
		height:50%;
		float:left;
	}
	
	#app4 {
		width:34%;
		height:50%;
		float:right;
	}
	
	#app5 {
		width:34%;
		height:50%;
		float:left;
	}

    .border-box-content {
      color: rgb(66,185,131);
      font-size: 40px;
      font-weight: bold;
      display: flex;
      justify-content: center;
      align-items: center;
    }
	
	#app .border-box-content {
	  flex-direction:column;
	}
	
	#app2 .dv-digital-flop {
		margin-top:100%;
	}
	
	#app .border-box-content text {
		margin-left:20px;
		display:none;
	}
	
	#app3 .border-box-content {
		color: #FFFFFF;
	}
  </style>
</head>
<body>
  <div id="app">
	<dv-border-box-11 title="概览">
	  <div style="width:100%;margin-bottom:3%">
	    <div style="float:left;width:15%;margin-left:10%">
			<font color="#FFFFFF" size="3%">健康度</font>
		</div>
		<div style="float:left;width:45%;margin:3%">
			<dv-percent-pond :config="config1" style="width:100%;height:30px;" />
		</div>
		<div style="float:left;margin-left:3%">
			<font color="#00FF00" size="3%">正常</font>
		</div>
	  </div>
	  <div style="width:100%;margin-bottom:3%">
		<div style="margin-left:10%">
			<font color="#FFFFFF" size="3%">安全时间：33天</font>
		</div>
	  </div>
	  <div style="width:100%">
		<div style="margin-left:10%">
			<font color="#FFFFFF" size="3%">信息：临港新城海港大道1550号</font>
		</div>
	  </div>
	</dv-border-box-11>
  </div>
  
  <div id="app3">
	<?php
		include("../api/sensor.php");
		// var_dump($res);
	?>
	<dv-border-box-11 title="各传感器实时数据">
		<div style="font-size:60%;font-color:#FFFFFF">
			<table>
				<tr>
					<td>温度(℃)</td>
					<td>{{config.data[1].value}}</td>
					<td>正常</td>
				</tr>
				<tr>
					<td>湿度(%RH)</td>
					<td>{{config.data[2].value}}</td>
					<td>正常</td>
				</tr>
				<tr>
					<td>氧气(%VOL)</td>
					<td>{{config.data[3].value}}</td>
					<td>正常</td>
				</tr>
				<tr>
					<td>可燃气体(%LEL)</td>
					<td>{{config.data[0].value}}</td>
					<td>正常</td>
				</tr>
				<tr>
					<td>烟感</td>
					<td>未报警</td>
					<td>正常</td>
				</tr>
				<tr>
					<td>pH值</td>
					<td>7.5</td>
					<td>正常</td>
				</tr>
			</table>
		</div>
		<!-- {{config.data}} -->
	</dv-border-box-11>
  </div>
  
  <div id="app4">
	<dv-border-box-11 title="设备实时上报信息">
		<dv-scroll-board :config="config" style="width:350px;height:200px;margin-top:5%" />
	</dv-border-box-11>
  </div>
  
  <div id="app2">
	<dv-border-box-9>
		<div style="width:30%;margin-top:2%">
		    <font color="#FFFFFF" style="margin-left:30%" size="5%">能耗</font>
			<dv-active-ring-chart :config="config1" style="width:200px;height:300px" />
		</div>
		<div style="width:30%;margin-top:2%">
			<font color="#FFFFFF" style="margin-left:22%" size="5%">设备状态</font>
			<dv-active-ring-chart :config="config2" style="width:200px;height:300px" />
		</div>
		<div style="width:30%;margin-top:2%">
			<font color="#FFFFFF" style="margin-left:22%" size="5%">报警信息</font>
			<dv-active-ring-chart :config="config3" style="width:200px;height:300px" />
		</div>
	</dv-border-box-9>
  </div>
  
  <div id="app5">
	<dv-border-box-11 title="舱室视频监控">
		<iframe
			src="https://open.ys7.com/ezopen/h5/iframe?url=ezopen://TUIGUI@open.ys7.com/D75910530/1.hd.live&autoplay=1&accessToken=at.5gtpy48p2udi5zlk3bh6z1thb6m87bl2-708mw5wl8i-03sjoiw-aops1gxnj"
			width="80%"
			height="70%"
			id="ysOpenDevice"
			style="margin-top:10%"
			allowfullscreen
		>
		</iframe>
	</dv-border-box-11>
  </div>

  <script>
    var app = new Vue({
      el: '#app',
	  data () {
		return {
			config1: {
				value: 100,
				lineDash: [60, 3],
				colors: ['#ff0000', '#00ff00'],
			}
		}
	  }
    })
	var app2 = new Vue({
      el: '#app2',
	  data () {
		return {
		  config1: {
			data: [
			  {
				name: '风机',
				value: 55
			  },
			  {
				name: '水泵',
				value: 120
			  },
			  {
				name: '照明',
				value: 78
			  },
			  {
				name: '系统',
				value: 66
			  }
			],
			lineWidth: 120,
			radius: '5%',
			activeRadius: '10%',
		  },
		  config2: {
			data: [
			  {
				name: '正常设备',
				value: 49
			  },
			  {
				name: '异常设备',
				value: 1
			  }
			],
			lineWidth: 120,
			radius: '5%',
			activeRadius: '10%',
		  },
		  config3: {
			data: [
			  {
				name: '温度/次',
				value: 3
			  },
			  {
				name: '湿度/次',
				value: 2
			  },
			  {
				name: '易燃气体/次',
				value: 1
			  },
			  {
				name: '氧气/次',
				value: 5
			  },
			  {
				name: '烟雾/次',
				value: 1
			  }
			],
			lineWidth: 120,
			showOriginValue: true,
			radius: '5%',
			activeRadius: '10%',
		  },
		}
	  }
    })
	var app3 = new Vue({
      el: '#app3',
	  data () {
		return {
		  config: {
			data: [
			<?php
				// echo $res;
				foreach($res as $sensor_item)
				{
			?>			
			{
			  name: '<?php echo $sensor_item[3]; ?>',
			  value: <?php 
						require("../api/queryDeviceSensor.php");
						if (empty($response['info']))
						{
							echo 0;
						}
						else
						{
							echo $response['info'];
						}
						// echo $sensor_item[0]; 
					 ?>
			},
				<?php } ?>
		  ],
		  img: [
			<?php
				// var_dump($res);
				foreach($res as $sensor_item)
				{
					// var_dump($sensor_item[1]);
			?>
			'../img/sensor/transparent.png',
			
				<?php } ?>
		  ],
		  showValue: true
		  }
		}
	  },
	  mounted() {
		let _this = this; // 声明一个变量指向Vue实例this，保证作用域一致
		this.timer = setInterval(() => {
			// alert("1")
			console.log("Last:")
			console.log(_this.config.data)
			$.ajax({
				url:"../api/updateDeviceSensor.php",
				// async: false,
				success:function(result){
					// _this.config.data = JSON.parse(result);
					var before_flag = JSON.parse(result);
					var flag = 1;
					for (i = 0; i < before_flag.length; i++) {
						if (!isNaN(before_flag[i].value))
						{
							console.log("是数值");
						}
						else
						{
							flag = 0;
						}
					}
					if (flag == 1)
					{
						// _this.config.data = before_flag;
						Vue.delete(_this.config, 'data')
						_this.$set(_this.config, 'data', before_flag)
					}
					// console.log(result)
					console.log("Now:")
					console.log(_this.config.data)
					_this.$forceUpdate();
				}
			});
			_this.$forceUpdate();
		}, 5000)
	  },
	  beforeDestroy() {
		if (this.timer) {
		  clearInterval(this.timer); // 在Vue实例销毁前，清除我们的定时器
		}
	  }
	})
	var app4 = new Vue({
      el: '#app4',
	  data () {
		return {
		  config: {
			header: ['上报时间', '具体信息'],
			indexHeader: '编号',
			data: [
			  ['2020-07-01 15:29:59', '电力舱风扇关闭'],
			  ['2020-07-02 14:29:59', '电力舱水泵启动'],
			  ['2020-07-04 19:27:35', '电力舱照明启动'],
			  ['2020-07-06 08:27:32', '综合舱风扇关闭'],
			  ['2020-07-08 07:26:57', '电力舱水泵启动'],
			  ['2020-07-10 09:26:31', '综合舱水泵启动'],
			  ['2020-07-13 20:25:44', '综合舱水泵关闭'],
			  ['2020-07-13 06:25:22', '电力舱风扇启动'],
			  ['2020-07-15 08:24:01', '综合舱水泵启动'],
			  ['2020-07-07 10:24:01', '电力舱风扇关闭']
			],
			index: true,
			columnWidth: [70, 170, 170],
			align: ['center'],
			rowNum: 7,
			headerBGC: '#1981f6',
			headerHeight: 45,
			oddRowBGC: 'rgba(0, 44, 81, 0.8)',
			evenRowBGC: 'rgba(10, 29, 50, 0.8)'
		  }
		}
	  }
    })
	var app5 = new Vue({
      el: '#app5'
    })
  </script>
</body>
</html>