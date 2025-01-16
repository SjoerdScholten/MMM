<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registratie</title>
</head>
<body>
<h2>Registreren</h2>

<!-- Toon een foutmelding als die er is -->
<?php if (isset($_SESSION['status'])): ?>
    <p><?php echo $_SESSION['status']; ?></p>
    <?php unset($_SESSION['status']); ?>
<?php endif; ?>

<form action="login.php" method="POST" enctype="multipart/form-data">
    <label for="naam">Naam:</label>
    <input type="text" name="naam" id="naam" required><br>

    <label for="email">Email:</label>
    <input type="email" name="email" id="email" required><br>

    <label for="wachtwoord">Wachtwoord:</label>
    <input type="password" name="wachtwoord" id="wachtwoord" required><br>

    <label for="profielFoto">Profielfoto (optie):</label>
    <input type="file" name="profielFoto" id="profielFoto"><br>

    <button type="submit" name="register">Registreren</button>
</form>
</body>
</html>
