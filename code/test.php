<?php
// MySQL-Zugangsdaten anpassen
$host = "192.168.178.28";      // z.B. "127.0.0.1" oder Servername
$user = "root";           // MySQL-Benutzername
$password = "passwort";   // Passwort
$database = "testdb";     // optional: Datenbankname

// Verbindung herstellen
$conn = new mysqli($host, $user, $password, $database);

// Prüfen, ob die Verbindung erfolgreich war
if ($conn->connect_error) {
    die("Verbindung fehlgeschlagen: " . $conn->connect_error);
} else {
    echo "Erfolgreich mit MySQL verbunden!";
}

// Verbindung schließen
$conn->close();
?>
