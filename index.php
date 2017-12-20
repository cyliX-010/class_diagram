<!DOCTYPE html>
<html>
	<head>
		<script type="text/javascript" src='jquery-1.10.2.js'></script>
	</head>
	<body>

		<div id = "base" style = "position:absolute; top:0px; left:0px; height: 420%; width:100%; background-color:gray;">

			<div id="progressBase" style="position:absolute; top:100px; left:400px; height: 500px; width:500px; background-color:transparent;">

				<img id="progressbar" src="loading.gif" width="100%" height="100%">
			</div>

			<div id="imageBase" style="position:absolute; top:-770px; left:0px; height: 100%; width:100%; background-color:white; opacity:0;">
				<div id="stakes" style="position:absolute; top:0px; left:0px; height: 50px; width:100%; background-color:black; color:white; font-size: 30px; text-align:center; padding-top:5px;">CLASS DIAGRAM</div>
				<img src="class_diagram1.png" width="100%" height="80%" style="position:absolute; top:70px;">
			</div>

			




			</div>
				


		</div>
	</body>
</html>
<script>

$("#imageBase").delay(5000);

$("#progressBase").animate({ opacity: '0'},5000);

$("#imageBase").animate({top:'0', opacity:'1'}, 2000);



</script>