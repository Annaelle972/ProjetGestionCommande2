<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Accueil - Projet Gestion des Commandes</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body class="bg-light">
    <div class="container p-4 mt-4 shadow rounded bg-white" style="max-width:600px">
        <h1 class="mb-4 text-center">Projet Gestion des Commandes</h1>
        <p class="mb-4 text-center">Bienvenue sur l’application de gestion des commandes version étudiante.<br>Utilisez les boutons ci-dessous pour accéder aux différents modules :</p>
        <div class="d-grid gap-3">
            <a href="vues/liste_clients.php" class="btn btn-primary btn-lg">Gérer les clients</a>
            <a href="vues/liste_produits.php" class="btn btn-success btn-lg">Gérer les produits</a>
            <a href="vues/liste_commandes.php" class="btn btn-info btn-lg">Gérer les commandes</a>
            <a href="login.php" class="btn btn-secondary btn-lg">Connexion utilisateur</a>
        </div>
        <footer class="mt-5 text-center text-muted">
            <small>&copy; 2025 · Projet SIO étudiant</small>
        </footer>
    </div>
</body>
</html>

<?php echo 'Bienvenue, le serveur fonctionne !'; ?>