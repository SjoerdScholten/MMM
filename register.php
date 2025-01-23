<?php
include 'config.php'; // Verbind met de database

// Start de sessie
session_start();

// Controleer of het formulier is ingediend
if (isset($_POST['register'])) {
    // Verkrijg de gegevens uit het formulier
    $Naam = $_POST['naam'];
    $Email = $_POST['email'];
    $Wachtwoord = $_POST['wachtwoord'];

    // Hash wachtwoord
    $wachtwoordHash = password_hash($Wachtwoord, PASSWORD_BCRYPT);

    // Profiel foto uploaden
    if (isset($_FILES['profielFoto']) && $_FILES['profielFoto']['error'] == 0) {
        $bestandsnaam = $_FILES['profielFoto']['name'];
        $bestemmingsmap = 'uploads/' . $bestandsnaam;

        // Controleer of de uploads map bestaat, anders maak deze aan
        if (!is_dir('uploads')) {
            mkdir('uploads', 0777, true);
        }

        // Verplaats de afbeelding naar de gewenste map
        move_uploaded_file($_FILES['profielFoto']['tmp_name'], $bestemmingsmap);
    } else {
        $bestandsnaam = ''; // Als er geen afbeelding is, sla null of een lege string op
    }

    // Functie om de gebruiker op te slaan in de database
    registerGebruiker($Naam, $Email, $wachtwoordHash, $bestandsnaam);

    // Zet een succesbericht in de sessie
    $_SESSION['status'] = 'Registratie succesvol!';
}

// Functie om de gebruiker op te slaan in de database
function registerGebruiker($Naam, $Email, $WachtwoordHash, $bestandsnaam) {
    global $pdo;

    // Controleer of 'profielFoto' null is, anders zet lege string
    if ($bestandsnaam === '') {
        $bestandsnaam = 'media/profile.png';  // Of zet hier een default foto zoals 'default.jpg'


        // SQL-query om de gebruiker in de database op te slaan
        $sql = "INSERT INTO Gebruiker (Naam, Email, Wachtwoord, profielFoto) VALUES (?, ?, ?, ?)";
        $stmt = $pdo->prepare($sql);

        try {
            $stmt->execute([$Naam, $Email, $WachtwoordHash, $bestandsnaam]);
        } catch (PDOException $e) {
            echo "Fout bij het invoegen van de gebruiker: " . $e->getMessage();
        }
    }
}

// Nu wordt de HTML view geladen na de logica
include 'views/register_view.php'; // Laadt de view zonder redirect