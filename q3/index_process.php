<?php
  // Richard Davis
  // CSCI4000
  // 24 Mar 2016
  // Assignment 2

  $rows = $_POST['rows'];
  $columns = $_POST['columns'];
  ?>
<!DOCTYPE html>
  <head>
    <meta charset="UTF-8">
    <title>Richard Davis's Kung Fu Panda Po Magic Rectangle</title>
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>
    <header>
      <h1>Richard Davis's Kung Fu Panda Po Magic Rectangle</h1>
    </header>
    <section>
    <h3><?php echo "Po's magic rectangle has ".$rows." rows, and ".$columns." columns."; ?></h3>
      <h4>Nested for loop rectangle</h4>
      <p>
        <?php
          for ($i = 0; $i < $rows; $i++) {
            for ($j = 0; $j < $columns; $j++) {
              echo "F";
            }
            echo "<br>";
          }
        ?>
      </p>
      <h4>Nested while loop rectangle</h4>
      <p>
        <?php
          $a = 1;
          $b = 1;
          while ($a <= $rows) {
            while ($b <= $columns) {
              echo "W,row".$a."col".$b."; ";
              $b++;
            }
            echo "<br>";
            $a++;
            $b = 1;
          }
        ?>
      </p>
      <h4>Nested do...while loop rectangle</h4>
      <p>
        <?php
          $x = 1;
          $y = 1;
          do {
            do {
              echo $x."x".$y."=".($x*$y)."; ";
              $y++;
            } while ($y <= $columns);
            echo "<br>";
            $x++;
            $y = 1;
          } while ($x <= $rows);
        ?>
      </p>
      <br>
      <a href="index.htm">Go back</a>
    </section>
  </body>
</html>
