<?php
include 'config.php'; // Verbind met de database

// Start de sessie
session_start();

// Controleer of de gebruiker is ingelogd
if (isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id'];

    // Haal gebruikersgegevens op uit de database
    $sql = "SELECT Naam, Email, profielFoto FROM Gebruiker WHERE GebruikerID = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$user_id]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    // Als er geen gebruiker is, redirect naar login
    if (!$user) {
        header("Location: login.php");
        exit();
    }

    // Zet de variabelen
    $naam = $user['Naam'];
    $email = $user['Email'];
    $profielFoto = $user['profielFoto'];
} else {
    // Als de gebruiker niet ingelogd is, redirect naar login
    header("Location: login.php");
    exit();
}

include 'views/profile_view.php'; // Laadt de view voor het profiel