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
        <h1>Liste des Boutiques</h1>
    </header>

    <div class="container">
        <?php if (!empty($stores)): ?>
            <?php foreach ($stores as $store): ?>
            <div class="boutique">
                <div>
                    <h2><?= htmlspecialchars($store['name']); ?></h2>
                    <p>Numéro de registre : <?= htmlspecialchars($store['registrationNumber']); ?></p>
                    <p>ID utilisateur : <?= htmlspecialchars($store['idUser']); ?></p>
                </div>
            </div>
            <?php endforeach; ?>
        <?php else: ?>
            <p>Aucune boutique trouvée.</p>
        <?php endif; ?>
    </div>
</body>
</html>
