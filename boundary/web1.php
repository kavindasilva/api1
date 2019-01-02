<?php

//require_once __DIR__."/../control/main.php";

/**
* 	Boundary for accessing API through web interface
*/

?>

<!DOCTYPE html>
<html>
<head>
	<title>Web interface 1</title>
</head>
<body>

<div>
	<div>
		<button id="t1" name="t1">Test1</button><br><br>
		<button id="t2" name="t2">Test2</button>
	</div>
	<div id="dtable1">
		
	</div>
</div>


<script src="../lib/jquery-3.3.1.min.js">
</script>

<script>
$("#t2").click(function(){
	$.post( "../control/main.php", 
		{ "read": "ok", "get":"ok"},
		function( data ) {
			console.log(data);
			$("#dtable1").empty();
			for(i=0; i<data.data.length; i++){
				tmp=data.data[i];
				$("#dtable1").append("<tr><td>"+tmp.id+"</td><td>"+tmp.email+"</td><td>"+tmp.pass+"</td></tr>")
			}
		}
	);
});


$("#t1").click(function(){
	$.post( "../control/main.php?read=1", 
		function( data ) {
			console.log(data);
		}
	);
});

$(document).ajaxError(function(xhr, status, error){
	console.log(error);
});
</script>

</body>
</html>




