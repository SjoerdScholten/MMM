<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profielpagina</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="profile-container">
    <h1>Welkom, <?= htmlspecialchars($Naam) ?>!</h1>

    <div class="profile-details">
        <p><strong>Email:</strong> <?= htmlspecialchars($Email) ?></p>

        <!-- Profielfoto -->
        <div class="profile-photo">
            <?php if ($profielFoto): ?>
                <img src="uploads/<?= htmlspecialchars($profielFoto) ?>" alt="Profiel foto">
            <?php else: ?>
                <img src="uploads/default-avatar.png" alt="Standaard profielfoto">
            <?php endif; ?>
        </div>
    </div>
</div>
</body>
</html>
