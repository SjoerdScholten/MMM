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
    <title>Artiest Registratie</title>
    <link rel="stylesheet" href="css/registerStyle.css">
<div class="navbar">
    <a href="profile.html">
        <svg class="icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/></svg>
    </a>
    <svg class="icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><rect x="5" y="6" width="14" height="2"/><rect x="5" y="11" width="14" height="2"/><rect x="5" y="16" width="14" height="2"/></svg>
</div>

<div class="container">
    <h1>Artiest Registratie</h1>
    <form action="../register.php" method="POST" enctype="multipart/form-data">
        <label for="naam">Artiestnaam</label>
        <input type="text" name="naam" id="naam" required>

        <label for="email">E-mail</label>
        <input type="email" name="email" id="email" required>

        <label for="wachtwoord">Wachtwoord</label>
        <input type="password" name="wachtwoord" id="wachtwoord" required>

        <label for="profielFoto">Profiel foto</label>
        <input type="file" name="profielFoto" id="profielFoto" accept="image/*">

        <button type="submit" name="register">Registreer</button>
        <p>Heb je al een account? <a href="../login.php">log hier in!</a></p>
    </form>
</div>

<div class="footer">
    <a href="index.html">
        <svg class="icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
            <path d="M12 3L2 12h3v7h14v-7h3L12 3z"/></svg>
    </a>
    <a href="search.html">
        <svg class="icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
            <circle cx="12" cy="12" r="10"/>
        </svg>
    </a>
    <a href="nieuws.html">
        <svg class="icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
            <polygon points="5 3 19 12 5 21 5 3"/>
        </svg>
    </a>
</div>
</body>
</html>
