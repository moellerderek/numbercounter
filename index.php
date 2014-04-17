<html>
<head>
<title>Number Counter</title>
</head>
<body>
<h2>Counting to <?php $num ?>:</h2>
	<br>
	<table>
	<?php
			for ($num=0; $num<=255; $num++)
			{
			echo <td>
			echo $num."<br>"
			echo </td>;
			}
	?>
	</table>
</body>
</html>
