<?php
  // get data from form
  $hours = $_GET['hours'];
  $pay_rate = $_GET['pay_rate'];
  $dependents = $_GET['dependents'];

  // calculate gross pay
  if ($hours > 40) {
    $over_hours = $hours - 40;
    $overtime = $over_hours * $pay_rate * 1.5;
    $normal_pay = 40 * $pay_rate;
    $gross = $normal_pay + $overtime;
  } else {
    $overhours = 0;
    $overtime = 0;
    $gross = $hours*$pay_rate;
  }

  // determine tax rate
  if ($dependents < 1) {
    $tax_rate = .28;
  } elseif ($dependents > 0 && $dependents < 4) {
    $tax_rate = .25;
  } elseif ($dependents > 3 && $dependents < 7) {
    $tax_rate = .15;
  } else {
    $tax_rate = .1;
  }

  // calculate net pay
?>
<!DOCTYPE html>
<!--
    Richard Davis
    CSCI4000
    24 Mar 2016
    Assignment 2
-->
  <head>
    <meta charset="UTF-8">
    <title>Richard Davis's Employee Net Pay</title>
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>
    <header>
      <h1>Richard Davis's Employee Net Pay</h1>
    </header>
    <section>
      <h3>This page calculates an employee's net pay.</h3>
      <h4>You entered:</h4>
      <div id="descriptions">
        <p>Employee's hourly rate of pay =</p>
        <p>Number of hours worked that week =</p>
        <p>Number of dependents employee has =</p>
        <p>Number of overtime hours =</p>
        <p>First 40 hours pay =</p>
        <p>Next hours pay (overtime) = </p>
        <p>Gross pay = </p>
        <p>Tax rate for dependents =</p>
        <p>Tax deduction =</p>
        <p>Net pay =</p>
        <p>This employee earned:</p>
      </div>
      <div id="results">
        <p><?php echo htmlspecialchars($pay_rate); ?></p>
        <p><?php echo htmlspecialchars($hours); ?></p>
        <p><?php echo htmlspecialchars($dependents); ?></p>
        <p>Filler</p>
        <p>Filler</p>
        <p>Filler</p>
        <p>Filler</p>
        <p>Filler</p>
        <p>Filler</p>
        <p>Filler</p>
        <p>Filler</p>
      </div>
      <br>
    </section>
  </body>
</html>
