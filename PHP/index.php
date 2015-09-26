<html>
<head>
	<title>
		ON/OFF
	</title>
	<script type="text/javascript">
	function switchit(mode)
	{
		if (window.XMLHttpRequest) {
	            // code for IE7+, Firefox, Chrome, Opera, Safari
	            xmlhttp = new XMLHttpRequest();
	        } else {
	            // code for IE6, IE5
	            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	        }
	        xmlhttp.onreadystatechange = function() {
	        	if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
	        		console.log(xmlhttp.responseText)
	            }
	        }
	        xmlhttp.open("GET","onoff.php?on=" + mode,true);
	        xmlhttp.send();
	    }
	    </script>
	</head>
	<body>
		<button onclick="switchit(1);">ON</button>
		<button onclick="switchit(0);">OFF</button>
	</body>
</html>