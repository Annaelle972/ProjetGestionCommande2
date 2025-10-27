<?php
// Fichier de connexion PDO à la base de données

$host = 'localhost';     // Ou '127.0.0.1' ou 'db' si Docker Compose
$port = 3306;            // Port MySQL/MariaDB (et non le port de phpMyAdmin)
$dbname = 'gestion_commandes';
$username = 'root';      // Met le login MySQL réel
$password = 'rootpassword'; // Met le bon mot de passe root MySQL

try {
    $pdo = new PDO(
        "mysql:host=$host;port=$port;dbname=$dbname;charset=utf8",
        $username,
        $password
    );
    // Options : erreurs en exceptions
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erreur de connexion à la base de données : " . $e->getMessage());
}
?>
