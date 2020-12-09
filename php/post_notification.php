<!--
    質問ページからの質問を始めに受け取るファイル．
    post_database.pyとpost_slack_bot.py
    を動かす
 -->
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>つなぐ会</title>
</head>
<body>

  <?php
    $nickname = $_POST['nickname'];
    $category = $_POST['category'];
    $question = $_POST['question'];

    if ($nickname == '') {
      echo 'ニックネームが入力されていません<br/>';
    } else {
      echo 'ようこそ';
      echo $nickname . '様';
      echo '<br/>';
    }

    if ($category == '') {
      echo 'カテゴリーが入力されていません<br/>';
    } else {
      echo 'カテゴリー：';
      echo $category;
      echo '<br/>';
    }

    if ($question == '') {
      echo '質問が入力されていません<br/>';
    } else {
      echo '質問内容『';
      echo $question;
      echo '』<br/>';
    }

    echo '<br/>';

    if ($nickname == '' || $category == '' || $question == '') {
      echo '<form>';
      echo '<input type="button" onclick="history.back()" value="戻る">';
      echo '</form>';
    } else {
      echo '<form method="post" action="thanks.php">';
      echo '<input type="button" onclick="history.back()" value="戻る">';
      echo '<input type="submit" value="OK">';
      echo '</form>';
    }
  ?>

</body>
</html>
