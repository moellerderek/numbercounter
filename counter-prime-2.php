<html>
<title>Prime Numbers</title>
<head>
</head>
<body>

<?php

        $n = $_GET['num'];
        


function prima($n){

  for($i=1;$i<=$n;$i++){  //numbers to be checked as prime

          $counter = 0; 
          for($j=1;$j<=$i;$j++){ //all divisible factors


                if($i % $j==0){ 

                      $counter++;
                }
          }

        //prime requires 2 rules ( divisible by 1 and divisible by itself)
        if($counter==2){

               print $i." is Prime <br/>";
        }
    }
}

prima($n);  //find prime numbers from 1-20

?>
</body>
</html>