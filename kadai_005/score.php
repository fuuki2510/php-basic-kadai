<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>kadai005</title>
</head>
<body>
<p>

  <?php
    $user_score1 = 80;
    $user_score2 = 60;
    $user_score3 = 55;
    $user_score4 = 40;
    $user_score5 = 100;
    $user_score6 = 25;
    $user_score7 = 80;
    $user_score8 = 95;
    $user_score9 = 30;
    $user_score10 = 60;

    $sum = $user_score1 + $user_score2 + $user_score3 + $user_score4 + $user_score5 + $user_score6 + $user_score7 + $user_score8 + $user_score9 + $user_score10;
    $avg = $sum/10;
    echo $avg;
    ?>

</p>
</body>
</html>