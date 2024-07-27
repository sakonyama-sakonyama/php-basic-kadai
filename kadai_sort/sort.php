<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>PHP基礎編</title>
</head>
<body>
  <p>
    <?php
      function sort_2way($array, $order) {
        if($order){
          //引数2がtrueのときの処理
          echo '昇順でソートします。<br>';
          sort($array);
        } else {
          //引数2がfalseのときの処理
          echo '降順でソートします。<br>';
          rsort($array);
        }
        //ソートされた配列$arrayのデータを一つずつ取り出し、改行して、表示する
        foreach($array as $value){
          echo $value . '<br>';
        }
      }
      //引数1となる、配列を定義
      $nums = [15,4,18,23,10];

      sort_2way($nums,true);
      sort_2way($nums,false);
    ?>
  </p>
  
</body>
</html>