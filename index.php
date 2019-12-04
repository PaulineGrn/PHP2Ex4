<?php
// Déclaration d'une variable age
$age=12;
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8"/>
  <title>PHP2Ex4</title>
</head>
<body>
  <!-- Si tu as 18 ans ou plus tu es majeur -->
  <?php if($age>=18)?>{
    <p>Tu es majeur</p>
    <!-- Sinon tu es mineur -->
  <?php }else{?>
    <p>Tu n\'es pas majeur</p>
  <?php } ?>
</body>
</html>
