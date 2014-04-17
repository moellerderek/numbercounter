<html>
<head>
<title>Number Counter</title>
</head>
<body>
<h2>Counting to <?php $num ?>:
	<?php
			for ($num=0; $num<=255; $num++)
			{
			echo $num."<br>";
			}
	?>
</body>
</html>
