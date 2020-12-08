<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>つなぐ会</title>
</head>
<body>
  
  <form method="post" action="/post_notification.php">
    ニックネームを入力してください．<br />
    <input name="nickname" type="text" style="width:100px">
    <br />
    <br />
    <input type="submit" value="送信">
  </form>
  
  <?php
    require (dirname (__FILE__) . '/post_notification.php');
  ?>
  
</body>
</html>


