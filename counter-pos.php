<html>
<head>
</head>
<title>Number Counter</title>
<body>
<?php
        $num = $_GET['num'];

echo "<h2>"."Counting Towards ".$num."</h2>";
  
		if (!isset($num)) die("Give me a number, boo");
		if ($num < 0) die ("Yo, those digits are not valid, bro...");

			for ($i = 0; $i <= $num; $i++) 
			{
			echo "$i"."<br>";	
			}
			
echo "<br>"."<br>";

?>
</body>
<html>
