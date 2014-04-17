<html>
<head>
<title>Number Counter</title>
</head>
<body>
<h2>Counting to <?php echo $numend.":"</h2>
	echo"<br>";
	
	$numstart=0;
	$numend=255;
	
			for ($num=$numstart; $num<=$numend; $num++)
			{
			echo $num."<br>";
			}
	?>
	<br>
	<br>
<h2>Counting backwards from <?php echo $numend.":"?></h2>
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
