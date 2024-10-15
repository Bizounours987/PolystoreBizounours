<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nos Boutiques</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Nos Boutiques</h1>
    </header>

    <div class="container">
        <?php foreach ($stores as $store): ?>
        <div class="boutique">
            <img src="<?= $store['image']; ?>" alt="<?= $store['name']; ?>">
            <div>
                <h2><?= $store['name']; ?></h2>
                <p>Commune : <?= $store['commune']; ?><br><?= $store['description']; ?></p>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</body>
</html>
