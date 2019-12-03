<!-- Déclaration d'une variable age -->
<?php
$age=12;
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8"/>
  <title>PHP2Ex4</title>
</head>
<body>
  <?php
  // Si tu as 18 ans ou plus tu es majeur
  if($age>=18)
  {
    echo'Tu es majeur';
  }
  // Sinon si tu as en dessous de 18 ans alors tu es mineur
  else
  {
    echo'Tu n\'es pas majeur';
  }
  ?>
</body>
</html>
