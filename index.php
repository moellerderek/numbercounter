<html>
<head>
<title>Number Counter</title>
</head>
<body>
<?php

  $num = $_GET['num'];
  
	if (!isset($num)) die("Give me a number, boo");
	if ($num < 0) die ("Yo, those digits are not valid, bro...");
	
	

echo "<h2>Counting towards ".$num.":"."</h2>";
	
			for ($i = 0; $i <= $num; $i++) 
			{
			echo "$i"."<br>";	
			}
            			
print "<br><br>";

echo "<h2>Counting backwards from ".$startnum.":"."</h2>";
print "<br>";

			//for ($num=$numend; $num>=$numstart; $num--)
			//{
			//echo $num."<br>";
			//}
	?>
<br>
</body>
</html>
