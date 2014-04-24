<html>
<head>
</head>
<title>Number Counter</title>
<body>
<?php

        $num = $_GET['num'];

echo "<h2>"."Counting backwards from ".$num.":"."</h2>"."<br>";

			for ($i = $num; $i >= 0; $i--) 
			{
			echo "$i"."<br>";	
			}
?>
</body>
<html>
