<html>
<head>
<title>Number Counter</title>
</head>
<body>
<?php

  $date = $_GET['date'];
  
	if (!isset($date)) die("Give me a number boo");
	if ($date < 0) die ("Yo, digits are not valid, bro...");
	
	$date = $numend;
	$numstart=0;

	
echo "<h2>Counting towards ".$date.":"."</h2>";
	
			for ($date<=$numstart; $date=$numend; $numend++)
			{
			echo $numend."<br>";
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
