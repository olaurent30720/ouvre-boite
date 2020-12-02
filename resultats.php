<?php

$de=$_POST['choixNombreDes'];
$face=$_POST['choixFaceDes'];

$listeDe= array ("");

for ($numeroDuDe=1; $numeroDuDe<$de+1; $numeroDuDe++) {
    $resultatDe = random_int(1,$face);
    array_push($listeDe, "$resultatDe");
}

$total = array_sum($listeDe);

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta description="L'Ouvre-Boîtes est une ludothèque associatique">
    <title>L'Ouvre-Boîtes</title>
    <link rel="stylesheet" href="ouvreboite.css">
</head>
<header>
    <h1 class="un">Résultat du lancer</h1>
    
</header>
<body>

<main>

<?php

for ($numeroDuDe=1; $numeroDuDe<$de+1; $numeroDuDe++) {
?>
<p class="re">Le résultat du dé <?php echo $numeroDuDe ?> est : <?php echo $listeDe[$numeroDuDe]?></p>
<?php
}
?>
</main>
<a href="index.html"><input id="retour" type=submit value="Retour acceuil"></a>

<form method="post" action="resultats.php">
    <input name="choixNombreDes" type="hidden" value="<?php echo ($de);?>">
    <input name="choixFaceDes" type="hidden" value="<?php echo ($face);?>">
    <input type="submit" value="Relancez vos dés">
</form>
</body>
</html>
