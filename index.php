<html>
<head>
<title>Number Counter</title>
<link href="index.css" rel="stylesheet">
<link href='http://fonts.googleapis.com/css?family=Alike' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Ruluko' rel='stylesheet' type='text/css'>
</head>
<body>
<?php

  $num = $_GET['num'];
  
	if (!isset($num)) die("Give me a number, boo");
	if ($num < 0) die ("Yo, those digits are not valid, bro...");
	
<<<<<<< HEAD


echo '<h2>Counting towards '.$num.':'.'</h2>';
=======

echo "<div='positive'>";
echo "Counting towards ".$num.":".";

>>>>>>> 3d4a054c078fbb84e0f7ec4f79334370940ab2e1
	
			for ($i = 0; $i <= $num; $i++) 
			{
			echo "$i"."<br>";	
			}
			
echo "<br><br>";
<<<<<<< HEAD

=======
echo "</div>";
echo "<br>";
>>>>>>> 3d4a054c078fbb84e0f7ec4f79334370940ab2e1

echo '<h2>Counting backwards from '.$num.':'.'</h2>';
echo '<br>';

			for ($i = $num; $i >= 0; $i--) 
			{
			echo "$i"."<br>";	
			}
	?>
<br>
</body>
</html>
