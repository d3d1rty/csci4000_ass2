<?php
  // Richard Davis
  // CSCI4000
  // 24 Mar 2016
  // Assignment 2

  // get data from form
  $hours = $_GET['hours'];
  $pay_rate = $_GET['pay_rate'];
  $dependents = $_GET['dependents'];

  // calculate gross pay
  if ($hours > 40) {
    $over_hours = $hours - 40;
    $over_pay = $over_hours * $pay_rate * 1.5;
    $normal_pay = 40 * $pay_rate;
    $gross = $normal_pay + $over_pay;
  } else {
    $over_hours = 0;
    $over_pay = 0;
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

  // calculate deduction
  $tax_deduction = $gross * $tax_rate;

  // calculate net pay
  $net_pay = $gross - $tax_deduction;

?>
<!DOCTYPE html>
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
        <p>Next <?php echo htmlspecialchars($over_hours); ?> hours pay (overtime) = </p>
        <p>Gross pay = </p>
        <p>Tax rate for dependents =</p>
        <p>Tax deduction =</p>
        <p>Net pay =</p>
        <p>This employee earned:</p>
      </div>
      <div id="results">
        <p><?php echo htmlspecialchars("$".$pay_rate." per hour"); ?></p>
        <p><?php echo htmlspecialchars(($hours+$over_hours)." hours"); ?></p>
        <p><?php echo htmlspecialchars($dependents." dependents"); ?></p>
        <p><?php echo htmlspecialchars($hours." - 40 = ".$over_hours); ?></p>
        <p><?php echo htmlspecialchars("$".$pay_rate." x ".($hours-$over_hours)." = $".$normal_pay); ?></p>
        <p><?php echo htmlspecialchars("$".$pay_rate." x ".$over_hours." x 1.5 = $".$over_pay); ?></p>
        <p><?php echo htmlspecialchars("$".$normal_pay." + $".$over_pay." = $".$gross); ?></p>
        <p><?php echo htmlspecialchars(($tax_rate*100)."%"); ?></p>
        <p><?php echo htmlspecialchars($gross." x ".($tax_rate*100)."% = $".$tax_deduction); ?></p>
        <p><?php echo htmlspecialchars($gross." - ".$tax_deduction." = ".$net_pay); ?></p>
        <p><?php echo htmlspecialchars($net_pay." this week."); ?></p>
      </div>
      <br>
      <a href="index.htm">Go back</a>
    </section>
  </body>
</html>
