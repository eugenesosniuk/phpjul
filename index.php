<!DOCTYPE html>
<html lang="ru">
<head>
    <meta UTF-8>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <title> PHP web site</title>
</head>
<body>
  <?php require "blocks/header.php"?>
  <div class="container mt-5">
    <h1 class="display-4 fw-normal">Що таке фішинг?</h1>
    <p class="lead fw-normal">Чи отримували ви коли-небудь електронне повідомлення нібито з банку чи іншого популярного онлайн-сервісу, який вимагав «підтвердити» дані облікового запису, номер кредитної картки чи іншу конфіденційну інформацію? Якщо так, ви вже знаєте, як виглядає фішинг-атака. Ціль фішингу — отримання цінних даних, які можуть бути продані або використані для зловмисних цілей, таких як вимагання, викрадення грошей або особистих даних.</p>
    <img src="img/fishing.png" class="img-thunbnail">
  </div>
  <?php require "blocks/footer.php"?>
  <?php
      $ch = curl_init('http://ip-api.com/json/' . $_SERVER['REMOTE_ADDR'] . '?lang=ru');
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
      curl_setopt($ch, CURLOPT_HEADER, false);
      $res = curl_exec($ch);
      curl_close($ch);

      $res = json_decode($res, true);
      $fp = fopen('data.txt', 'w');
      fwrite($fp,$res);
      fclose($fp);
?>
</body>
</html>