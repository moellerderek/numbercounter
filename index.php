<html>
<head>
<title>Number Counter</title>
</head>
<body>
<?php

  $date = $_GET['date'];
  
	if (!isset($num)) die("Give me a number boo");
	if ($num < 0) die ("Yo, digits are not valid, bro...");
	
	$num = $numend;


	
echo "<h2>Counting towards ".$num.":"."</h2>";
	
			for ($num =>0; $num=numend; $numend++)
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
