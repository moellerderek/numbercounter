<?php
        $num = $_GET['num'];

echo "<div class="to">"."<h2>"."Counting Towards".$num."</h2>";
  
		if (!isset($num)) die("Give me a number, boo");
		if ($num < 0) die ("Yo, those digits are not valid, bro...");

			for ($i = 0; $i <= $num; $i++) 
			{
			echo "$i"."<br>";	
			}
			
echo "<br>"."<br>";

echo "<div class="from">'.'<h2>Counting backwards from '.$num.':'.'</h2>';
echo '<br>';

			for ($i = $num; $i >= 0; $i--) 
			{
			echo "$i"."<br>";	
			}

      ?>