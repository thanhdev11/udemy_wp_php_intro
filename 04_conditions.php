<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Introduction to PHP</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,900&amp;subset=latin-ext" rel="stylesheet">
  </head>
  <body>
    
    <div class="container">
          <h1>Up & Running with PHP</h1>
          
          <div class="code-content">
          <?php
            $number_1 = 20;
            $number_2 = 20;

            if($number_1 > $number_2) {
                echo "number 1 is bigger";
            } else if ($number_1 == $number_2) {
                echo "the numbers is equal";
            } else {
                echo "number 2 is bigger";
            }

            echo "<hr>";

            if ($number_1 != $number_2) {
                echo "no, they're not equal";
            } else {
                echo "yes, they're not equal";
            }

            echo "<hr>";

            $user_logged_in = true;

            if ($user_logged_in) {
                echo "Wellcome";
            } else {
                echo "Please login";
            }
          ?>
          </div>
    </div>
    
  </body>
</html>
