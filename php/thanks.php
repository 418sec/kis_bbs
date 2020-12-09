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

    $nickname = htmlspecialchars($nickname);
    $category = htmlspecialchars($category);
    $question = htmlspecialchars($question);

    echo $nickname;
    echo '様<br />';
    echo '質問ありがとうございます<br />';
    echo '頂いた質問『';
    echo $question;
    echo '』<br />';
    echo $email;
    echo 'にメールを送信しましたので，ご確認ください';
  ?>

</body>
</html>
