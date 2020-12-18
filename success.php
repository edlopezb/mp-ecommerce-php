<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Success</h1>

      <p><strong>Payment method:</strong> <?php echo $_SERVER['payment_method_id'] ?></p>
      <p><strong>External reference:</strong> <?php echo $_SERVER['external_reference'] ?></p>
      <p><strong>Payment ID:</strong> <?php echo $_SERVER['payment_id'] ?></p>
  </body>
</html>
