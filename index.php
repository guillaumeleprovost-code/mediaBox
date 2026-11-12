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
    <title>MediaBox</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
	<h1 id="titre">MediaBox</h1>
    <?php foreach ($ressources as $res): ?>

        
        <div class="ressource">
            <h2><?php echo $res['titre']; ?></h2>
            <p><?php echo $res['description']; ?></p>
            <p>ID : <?php echo $res['id']; ?></p>
            <p>Mots-clés : <?php echo $res['mots-cles']; ?></p>
        </div>
        <hr>

    <?php endforeach; ?>

</body>
</html>