<html>
<head>
<title>Number Counter</title>
</head>
<body>
<?php

	$numstart=0;
	$numend=255;
	
echo "<h2>Counting towards". $numend.":"."</h2>";
	
			for ($num=$numstart; $num<=$numend; $num++)
			{
			echo $num."<br>";
			}

print "<br>.<br>";

echo "<h2>Counting backwards from"..$numend.":"."</h2>";
print "<br>";

			for ($num=$numend; $num>=$numstart; $num--)
			{
			echo $num"<br>";
			}
	?>
<br>
</body>
</html>
