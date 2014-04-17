<html>
<head>
<title>Number Counter</title>
</head>
<body>
<h2>Counting to 255:</h2>
	<br>
	<?php
			for ($num=0; $num<=255; $num++)
			{
			echo $num."<br>";
			}
	?>
	<br>
	<br>
	<br>
	<?php
			for ($num=255; $num<=0; $num--)
			{
			echo $num."<br>";
			}

	?>
<br>
</body>
</html>
