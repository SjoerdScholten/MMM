<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inloggen</title>
    <link rel="stylesheet" href="css/loginStyle.css">
</head>
<body>
<h1>Inloggen</h1>

<!-- Formulier voor inloggen -->
<form action="profile.php" method="POST">
    <label for="email">E-mail</label>
    <input type="email" name="email" id="email" required>

    <label for="wachtwoord">Wachtwoord</label>
    <input type="password" name="wachtwoord" id="wachtwoord" required>

    <button type="submit" name="login">Inloggen</button>
</form>

<p>Heb je geen account? <a href="register.php">Registreer hier!</a></p>

<!-- Verstuurd melding bij fout of succesvolle inlog -->
<?php if (isset($_SESSION['status'])): ?>
    <p><?php echo $_SESSION['status']; ?></p>
    <?php unset($_SESSION['status']); ?>
<?php endif; ?>
</body>
</html>
