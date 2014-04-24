<html>
<title>Number Counter</title>
<head>
<!-- My own stylesheet -->
<link href="/css/index.css" rel="stylesheet">
<!-- Google Fonts -->
<link href='http://fonts.googleapis.com/css?family=Alike' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Ruluko' rel='stylesheet' type='text/css'>
<!-- Bootstrap core CSS -->
<link href="/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
<link href="jumbotron.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <div class="masthead">

      <?php

        include ("masthead.php");

      ?>
    </div>

        <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <h1>Let's count some numbers!</h1>
        <p>This project is just to use a get request to count numbers from and to a defined number in the url.</p>
        </div>
    </div>
<br>
    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-4">
        <?php
        
        include ('counter-pos.php');
        
        ?>
      </div>

      <div class="col-md-4">
        <?php

        include ('counter-prime-2.php');

        ?>
      </div>
      <div class="col-md-4">
        <?php

        include ('counter-neg.php');

        ?>
      </div>
    </div>
  </div>
</body>
<div class="footer">

    <?php

    include ("footer.php");

    ?>
  </div>
</html>
