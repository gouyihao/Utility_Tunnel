<!doctype html>
<html lang="en">
  <head>
    <?php include("module/head.php"); ?>

    <title>地下综合管廊预警系统</title>
  </head>
  <body  background="img/body/backgroundark.png">
  
	<?php include("module/body_head.php"); ?>
	
	<div style="bottom:0;height:92%;">
	
		<?php include("module/left_nav.php"); ?>
		
		<div id="pagecontent" style="width:85%;height:100%;float:left;background:url('img/body/background.png') no-repeat;background-size:cover">
			<!-- <iframe src ="http://www.iotclient.com:8008/Holliot/monitorforoutside.html" width="100%" height="100%" scrolling="no" style="border:0"> -->
			<iframe
				src="https://open.ys7.com/ezopen/h5/iframe?url=ezopen://TUIGUI@open.ys7.com/D75910530/1.hd.live&autoplay=1&accessToken=at.56ykdud5cth4nz3s7x7sfnqt0rqcsw9y-32g95au8np-0denxpn-lq21wv83u"
				width="600"
				height="400"
				id="ysOpenDevice"
				allowfullscreen
				>
			</iframe>
		</div>
	</div>
	  
	<?php include("module/body_script.php"); ?>
  </body>
</html>