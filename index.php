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
	
			for ($num=$numstart; $num<=$numend; $num++)
			{
			echo $num."<br>";
			}
	?>
	<br>
	<br>
<h2>Counting backwards from the same number</h2>
	<br>
	<?php
			for ($num=$numend; $num>=$numstart; $num--)
			{
			echo $num."<br>";
			}

	?>
<br>
</body>
</html>
