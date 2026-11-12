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
    <title>FULLBOX</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
	<h1 id="titre">FULLBOX</h1>
    <?php foreach ($ressources as $res): ?>

        
        <div class="ressource">
            <h2><?php echo $res['titre']; ?></h2>
            <p><?php echo $res['description']; ?></p>
            <p>ID : <?php echo $res['id']; ?></p>
            <p>Mots-clés : <?php echo $res['mots-cles']; ?></p>
			<a href="modifier.php?id=<?php echo $res['id']; ?>">Modifier</a>
        </div>
        <hr>

    <?php endforeach; ?>
	

	
</body>
</html>