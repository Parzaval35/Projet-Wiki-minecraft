<?php
session_start();
session_unset();
session_destroy();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Déconnexion</title>
  <link rel="stylesheet" href="style.css">
  <meta http-equiv="refresh" content="3;url=index.php">
</head>
<body style="justify-content: center; align-items: center;">
<body>
  <div class="box">
      <p>Déconnexion réussie ! Vous allez être redirigé vers la page d'accueil.</p>
  </div>
  <script src="script.js"></script>
</body>
</html>
