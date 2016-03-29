<?php
  // Richard Davis
  // CSCI4000
  // 24 Mar 2016
  // Assignment 2

  if (isset($_POST['seq1'])) {
    $button = 1;
  } elseif (isset($_POST['seq2'])) {
    $button = 2;
  } elseif (isset($_POST['seq3'])) {
    $button = 3;
  } else {
    $button = 4;
  }

  ?>
<!DOCTYPE html>
  <head>
    <meta charset="UTF-8">
    <title>Richard Davis's Kung Fu Panda Po Sequence</title>
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>
    <header>
      <h1>Richard Davis's Kung Fu Panda Po Sequence</h1>
    </header>
    <section>
      <h3>You pressed button <?php echo $button; ?></h3>
      <h4>Po's Sequence:</h4>
      <?php
        if ($button == 1) {
          for ($i = 1; $i < 10; $i++) {
            echo "<p>When n=".$i.";  10-2n = 10-2x".
              $i." = 10 - ".($i*2)." = ".(10-$i*2)."</p>";
          }
        } elseif ($button == 2) {
          for ($i = 1; $i < 10; $i++) {
            echo "<p>When n=".$i.";  4n+3 = 4x".$i.
              "+3 = ".(4*$i)."+3 = ".(4*$i+3)."</p>";
          }
        } elseif ($button == 3) {
          for ($i = 1; $i < 10; $i++) {
            echo "<p>When n=".$i.";  n*n-2 = ".$i."x".$i."-2 = ".
              ($i*$i)."-2 = ".($i*$i-2)."</p>";
          }
        } else {
          $a = 3;
          for ($i = 1; $i < 10; $i++) {
            echo "<p>When n=".$i.";  ".$a."x2 = ".($a*2)."</p>";
            $a = $a * 2;
          }
        }
      ?>
      <br>
      <a href="index.htm">Go back</a>
    </section>
  </body>
</html>
