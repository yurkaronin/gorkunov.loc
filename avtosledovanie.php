<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Автонаследование</title>
  <meta name="description" content="">

  <!-- favicon css стили -->
  <?php include './components/styles_include.php'?>
</head>

<body class="body body--inner-page">

  <?php include './components/header.php';?>

  <main>

    <?php
    // Первый экран для внутренней страницы
    include './components/first-screen-inner-page.php';
    // Часто задаваемые вопросы
    include './components/faq.php';
    // реимущества - вариант 2 (отличия - наличие заголовка в секции)
    include './components/benefits-2.php';
    // Анонсы стратегий
    include './components/announce-cards.php';
    // Заказать звонок
    include './components/call-to-action.php';
    ?>

  </main>

  <?php
    // подвал
    include 'components/footer.php';
    // JS библиотеки и прочие зависимости
    include 'components/scripts_include.php'
    ?>
</body>

</html>
