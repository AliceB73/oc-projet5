<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>The ArtBox</title>
</head>
<body>

<?php include('header.php'); ?>

<main>

<?php include('oeuvres.php'); ?>

<!-- boucle -> if (id tableau == id url) then echo contenu -->
<?php $GETid = $_GET['id'] - 1; ?>

<article id="detail-oeuvre">
        <div id="img-oeuvre">
            <img src="<?php echo $oeuvres[$GETid]['image']; ?>" alt="<?php echo $oeuvres[$GETid]['alt']; ?>">
        </div>
        <div id="contenu-oeuvre">
            <h1><?php echo $oeuvres[$GETid]['titre']; ?></h1>
            <p class="description"><?php echo $oeuvres[$GETid]['description']; ?></p>
            <p class="description-complete">
            <?php echo $oeuvres[$GETid]['description-complete']; ?>
            </p>
        </div>
</article>

</main>

<?php include('footer.php'); ?>

</body>
</html>