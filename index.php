<html>
<title>Number Counter</title>
<head>
<!-- My own stylesheet -->
<link href="/css/index.css" rel="stylesheet">
<!-- Google Fonts -->
<link href='http://fonts.googleapis.com/css?family=Alike' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Ruluko' rel='stylesheet' type='text/css'>

<!-- Bootstrap Custom CSS -->
	<link href="/css/bootstrap-derek.css" rel="stylesheet">

<!-- Bootstrap Core CSS -->
	<link href="/css/bootstrap.css" rel="stylesheet">
	<link href="/css/bootstrap.min.css" rel="stylesheet">


    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
<?php

  include ('functions.php');

?>
</head>

<body>
      <?php

        callMasthead("Input Number Generator", "voteforderek.azurewebsites.net", "", "http://derek-php-test01.azurewebsites.net/?date=19821008", "Birthday Calculator");

      ?>

      <!-- Main jumbotron for a primary marketing message or call to action -->
      <?php

        callJumboTron("Input Number Generator","This project is just to use a get request to count numbers from and to a defined number in the url.");
        
      ?>
<br>
    <div class="container-fluid">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-4 col-xs-6">
        <?php
        
        include ('counter-pos.php');
        
        ?>
      </div>

      <div class="col-md-4 col-xs-6">
        <?php

        include ('counter-prime-2.php');

        ?>
      </div>
      <div class="col-md-4 col-xs-6">
        <?php

        include ('counter-neg.php');

        ?>
      </div>
    </div>
  </div>
</body>
<footer>
    <?php

    include ("footer.php");

    ?>
</footer>

</html>
