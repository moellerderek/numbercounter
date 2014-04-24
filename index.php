<html>
<head>
<title>Number Counter</title>
<link href="/css/index.css" rel="stylesheet">
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
<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Number Counter</a>
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
        <h1>Let's count some numbers!</h1>
        <p>This project is just to use a get request to count numbers from and to a defined number in the url.</p>
        <p><a class="btn btn-primary btn-lg" role="button">Learn more &raquo;</a></p>
      </div>
    </div>
<br>
    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-4">
        <?php

        include ('counter-pos.php');
        return $num;
        
        ?>
      </div>
      <div class="col-md-4">
        <?php

        include ('counter-prime.php');
        

        ?>
      </div>
      <div class="col-md-4">
        <?php

        include ('counter-neg.php');
      ?>
      </div>

      <div class="col-md-4">
        <?php

        include ('counter-prime.php');
      ?>
      </div>
    </div>
</body>
</html>
