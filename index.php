<html>
<head>
<title>Number Counter</title>
<link href="index.css" rel="stylesheet">
<link href='http://fonts.googleapis.com/css?family=Alike' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Ruluko' rel='stylesheet' type='text/css'>
</head>
<body>

<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Project name</a>
        </div>
        <div class="navbar-collapse collapse">
          <form class="navbar-form navbar-right" role="form">
            <div class="form-group">
              <input type="text" placeholder="Email" class="form-control">
            </div>
            <div class="form-group">
              <input type="password" placeholder="Password" class="form-control">
            </div>
            <button type="submit" class="btn btn-success">Sign in</button>
          </form>
        </div><!--/.navbar-collapse -->
      </div>
    </div>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <h1>Hello, world!</h1>
        <p>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
        <p><a class="btn btn-primary btn-lg" role="button">Learn more &raquo;</a></p>
      </div>
    </div>

<?php

  $num = $_GET['num'];
  
	if (!isset($num)) die("Give me a number, boo");
	if ($num < 0) die ("Yo, those digits are not valid, bro...");

echo '<div class="to">'.'<h2>Counting towards '.$num.':'.'</h2>';

			for ($i = 0; $i <= $num; $i++) 
			{
			echo "$i"."<br>";	
			}
			
echo "</div>"."<br>";

echo '<div class="from">'.'<h2>Counting backwards from '.$num.':'.'</h2>';
echo '<br>';

			for ($i = $num; $i >= 0; $i--) 
			{
			echo "$i"."<br>";	
			}
echo '</div>';

?>
<br>
</body>
</html>
