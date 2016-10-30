<?php namespace Petrosgames\hamurabi;
include ('Sumeria.php');

if (isset($_POST['submit'])) {
  $qans = $_POST['question_ans'];
  $qnum = $_POST['question_num'];
  //$qnum++;
  Sumeria::updateVals($qans, $qnum);
}


?>
<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hamurabi</title>
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <h1>Hamurabi</h1>
    <p>Try your hand at governing ancient Sumeria successfully for a ten year term of office.</p>
    <hr>

    <?php

      
        Sumeria::showStats();
    ?>
    <form action="" method="post">

    
      <?php
      $q = Sumeria::getCurrentQuestion();
      echo Question::getQuestion($q);
      ?>
      <input type="text" maxlength="5" size="5" name="question_ans">
      <input type="hidden" value="<?php echo $q; ?>" name="question_num">
      <input type="submit" name="submit" value="Enter">
 
    </form>
    
    <?php Sumeria::showAllVals();; ?>

  </body>
</html>
