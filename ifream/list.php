<!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title>List</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim 和 Respond.js 是为了让 IE8 支持 HTML5 元素和媒体查询（media queries）功能 -->
    <!-- 警告：通过 file:// 协议（就是直接将 html 页面拖拽到浏览器中）访问页面时 Respond.js 不起作用 -->
    <!--[if lt IE 9]>
      <script src="https://cdn.jsdelivr.net/npm/html5shiv@3.7.3/dist/html5shiv.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/respond.js@1.4.2/dest/respond.min.js"></script>
    <![endif]-->
  </head>
  <body style="background-color:transparent;">
    <div class="panel panel-default" style="margin:3% 5%;margin-bottom:none;border-radius:0;">
		<!-- Table -->
		<table class="table">
		  <tr>
			<th>编号</th>
			<th>当前状态</th>
			<th>项目名称</th>
			<th>设备名称</th>
			<th>规格型号</th>
			<th>大修频次</th>
			<th>查看详情</th>
		  </tr>

		  <?php include("../api/subsystem.php"); ?>
		  <?php
			foreach($res as $res_item)
			{
		  ?>
		  <tr>
			<th><?php echo $res_item[1]; ?></th>
			<th></th>
			<th></th>
			<th></th>
			<th></th>
			<th></th>
			<th></th>
		  <tr>
		  <?php include("../api/deviceslist.php"); ?>
		  <?php
			foreach($res2 as $device_item)
			{
		  ?>
		  <tr>
			<td><?php echo $device_item[0];?></td>
			<td><?php
				if ($device_item[9] == "使用")
				{
					echo "<font color=\"#00FF00\">";
				}
				elseif ($device_item[9] == "停用")
				{
					echo "<font color=\"#000000\">";
				}
				else
				{
					echo "<font color=\"#FF0000\">";
				}
				echo $device_item[9];
				?></font></td>
			<td><?php echo $device_item[10];?></td>
			<td><?php echo $device_item[1];?></td>
			<td><?php echo $device_item[2];?></td>
			<td><?php echo $device_item[11]; echo "/"; echo $device_item[12]; ?></td>
			<td>
				<button type="button" data-toggle="modal" data-target="#deviceModal<?php echo $device_item[0]; ?>" class="btn btn-primary">详情</button>
				<!-- Modal -->
				<div class="modal fade" id="deviceModal<?php echo $device_item[0]; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				  <div class="modal-dialog" role="document">
					<div class="modal-content">
					  <div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title" id="myModalLabel">详细信息</h4>
					  </div>
					  <div class="modal-body">
						<div class="panel panel-default" style="margin:3% 5%;margin-bottom:none">
						  <table class="table">
							<tr>
								<th><?php echo $device_item[1];?></th>
								<th>(<?php echo $device_item[14];?>)</th>
							</tr>
							<tr>
								<td>型号：<?php echo $device_item[2];?></td>
								<td>产地：<?php echo $device_item[3];?></td>
							</tr>
							<tr>
								<td>当前状态：<?php echo $device_item[9];?></td>
								<td>变更日期：<?php echo $device_item[6];?></td>
							</tr>
							<tr>
								<td>使用年限：<?php echo $device_item[8];?></td>
								<td>安装地点：<?php echo $device_item[10];?></td>
							</tr>
							<tr>
								<td>出厂价：<?php echo $device_item[13];?></td>
								<td>移交时间：<?php echo $device_item[7];?></td>
							</tr>
							<tr>
								<td>供应商：</td>
								<td><?php echo $device_item[5];?></td>
							</tr>
							<tr>
								<td>生产商：</td>
								<td><?php echo $device_item[4];?></td>
							</tr>
						  </table>
						</div>
					  </div>
					  <!--<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						<button type="button" class="btn btn-primary">Save changes</button>
					  </div>
					</div>-->
				  </div>
				</div>
			</td>
		  </tr>  
		  <?php
		    }
		  ?>
		  <?php
		    }
		  ?>
		</table>
	</div>

    <!-- jQuery (Bootstrap 的所有 JavaScript 插件都依赖 jQuery，所以必须放在前边) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@1.12.4/dist/jquery.min.js"></script>
    <!-- 加载 Bootstrap 的所有 JavaScript 插件。你也可以根据需要只加载单个插件。 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js"></script>
  </body>
</html>