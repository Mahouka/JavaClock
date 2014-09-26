<!doctype html>
<html>
<head>
	<title>Algorithm Test</title>
</head>
<body onload="onloadFunctions();">
<div id="aux"></div>

<script type="text/javascript">
function onloadFunctions() {
	var count = 0;
	var refId = null;
	var target = document.getElementById("aux"),
		n;

	var countUp = function() {
		n = new Date();
		t = n.getDate() + "-" + n.getMonth() + "-" + n.getFullYear() + " " + n.getHours() + ":" + n.getMinutes() + ":" + n.getSeconds();
		target.innerHTML = t;
	}

	refId = window.setInterval(countUp, 1000); //Masukin interval ke ref id
}
</script>
</body>
</html>