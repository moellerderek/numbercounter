<html>
<head>
<title>Number Counter</title>
</head>
<body>
<?php

  $num = $_GET['number'];
  
  if (!isset($num)) die("Give me a number boo");
  if ($num < 0) die("Yo, digits are not valid, bro...");

	$numstart=0;
	$numend=255;
	
echo "<h2>Counting towards ".$numend.":"."</h2>";
	
			for ($num=$numstart; $num<=$numend; $num++)
			{
			echo $num."<br>";
			}

print "<br><br>";

echo "<h2>Counting backwards from ".$numend.":"."</h2>";
print "<br>";

			for ($num=$numend; $num>=$numstart; $num--)
			{
			
			echo $num."<br>";
			}
	?>
<br>
</body>
</html>
