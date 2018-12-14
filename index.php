<?php
$age = 17
 ?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <title>php part2 exe 6</title>
  <link rel="stylesheet" href="style.css" />
</head>
<body>
  <p>
    <?php
    if ($age >= 18){ ?>
    <p id="major">Tu es majeur.</p>
    <?php }else{ ?>
    <p id="minor">Tu es mineur.</p>
    <?php }
/* echo ($age >= 18) ? 'Tu es majeur' : 'Tu n\'es pas majeur';*/
    ?>
  </p>
</body>
</html>
