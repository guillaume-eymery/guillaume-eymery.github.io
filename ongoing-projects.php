<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $password = $_POST['password'];
    if ($password == 'securePassword') { // Remplacez 'securePassword' par votre mot de passe
        $_SESSION['authenticated'] = true;
    } else {
        $error = "Mot de passe incorrect";
    }
}

if (!isset($_SESSION['authenticated']) || !$_SESSION['authenticated']) {
    header('Location: login.html');
    exit();
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guillaume Eymery - Ongoing Projects</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            color: #333;
        }
        header, footer {
            background-image: url('background-picture.jpg');
            color: white;
            padding: 1rem 0;
            text-align: center;
            background-size: cover;
            background-position: center;
        }
        section {
            padding: 20px;
            margin: 10px;
            background: white;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
    </style>
</head>
<body>
    <header>
        <h1>Ongoing Projects</h1>
    </header>
    <section>
        <h2>Current Work</h2>
        <p>Here you can find details about my ongoing projects.</p>
        <!-- Ajoutez ici le contenu des projets en cours -->
    </section>
    <footer>
        <p>&copy; 2024 Guillaume Eymery</p>
    </footer>
</body>
</html>
