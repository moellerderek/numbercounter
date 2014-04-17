<html>
<head>
<title>Number Counter</title>
</head>
<body>
<h2>Counting to 255:</h2>
	<br>
	<?php
	$numstart=0;
	$numend=255;
	
			for ($num=$startnum; $num<=$endnum; $num++)
			{
			echo $num."<br>";
			}
	?>
	<br>
	<br>
<h2>Counting backwards from the same number</h2>
	<br>
	<?php
			for ($num=255; $num>=0; $num--)
			{
			echo $num."<br>";
			}

	?>
<br>
</body>
</html>
