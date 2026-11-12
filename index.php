<!-- php -->
<?php
include("includes/fonctions.php");
$ressources = lire();
?>

<!-- php -->
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Mes ressources</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <?php foreach ($ressources as $res): ?>
        
        <div class="ressource">
            <h2><?php echo $res['titre']; ?></h2>
            <p><?php echo $res['description']; ?></p>
            <p><strong>ID :</strong> <?php echo $res['id']; ?></p>
            <p><strong>Mots-clés :</strong> <?php echo $res['mots-cles']; ?></p>
        </div>
        <hr>

    <?php endforeach; ?>

</body>
</html>