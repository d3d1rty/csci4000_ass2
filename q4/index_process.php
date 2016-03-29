<?php
  // Richard Davis
  // CSCI4000
  // 26 Mar 2016
  // Assignment 2

  $word = $_GET['word'];
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
      <h3>Po's Guess:</h3>
      <h4><?php echo "You entered ".$word; ?></h4>
      <?php
        if (strlen($word) != 9 && strpos($word, "@") == false) {
          echo "<p>\"".$word."\" does not contain exactly 9 characters.</p>";
          echo "<p>\"".$word."\" does not contain any @ sign.</p>";
          echo "<p>You cannot open the secret scroll. Please try again.</p>";
        } elseif (strlen($word) != 9 && strpos($word, "@") != false) {
          echo "<p>\"".$word."\" does not contain exactly 9 characters.</p>";
          echo "<p>You cannot open the secret scroll. Please try again.</p>";
        } elseif (strlen($word) == 9 && strpos($word, "@") == false) {
          echo "<p>\"".$word."\" does not contain any @ sign.</p>";
          echo "<p>You cannot open the secret scroll. Please try again.</p>";
        } else {
          echo "<p>\"".$word."\" contains exactly 9 characters and there is at least one @ sign.</p>";
          echo "<p>Good job! You can open the secret scroll.</p>";
        }
      ?>
      <br>
      <a href="index.htm">Go back</a>
    </section>
  </body>
</html>
