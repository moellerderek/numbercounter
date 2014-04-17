<html>
<head>
<title>Number Counter</title>
</head>
<body>
<h2>Counting to 255:</h2>
	<br>
	<table>
	<tr>
	<?php
			for ($num=0; $num<=255; $num++)
			{
			echo "<td>"..$num."<br>"."</td>"."<br>";
			}
	?>
	</tr>
	</table>
</body>
</html>
