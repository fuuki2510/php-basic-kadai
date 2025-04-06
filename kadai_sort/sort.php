<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
          $nums = [15, 4, 18, 23, 10 ];
        function sort_2way($nums , $order) {
          if($order) {
            asort($nums);
              echo '昇順にソートします。';
              echo '<br>';
          } else {
            arsort($nums);
            echo '降順にソートします。';
              echo '<br>';
          }
            foreach ($nums as $num) {
              echo $num. '<br>';
          }
        }
      
      echo sort_2way($nums , true);
      echo sort_2way($nums , false);

        ?>
    </p>
</body>

</html>