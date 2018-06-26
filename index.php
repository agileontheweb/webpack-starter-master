<!doctype html>
<html lang="en">
  <head>
    <title>Tailwind Starter Template</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link rel="stylesheet" href="./dist/styles.css">
  </head>

  <body class="font-sans">
    <?php include_once "shared/navbar.php"; ?>
    <div class="main">
      <?php include_once "shared/banner/home.php"; ?>
      <?php include_once "shared/best_sellers.php"; ?>
      <?php include_once "shared/tabs/tabs_sections.php"; ?>
      <?php include_once "shared/info_company.php"; ?>
      <?php include_once "shared/optin_discount.php"; ?>
      <?php include_once "shared/links_prefooter.php"; ?>
      <?php include_once "shared/social.php"; ?>
      <?php include_once "shared/footer.php"; ?>
    </div>
  </body>
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script src="js/navbar.js"></script>
</html>
