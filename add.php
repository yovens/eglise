


<?php
include '../config/database.php'; 

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $date_naissance = $_POST['date_naissance'];
    $adresse = $_POST['adresse'];
    $telephone = $_POST['telephone'];

    $query = "INSERT INTO membres (nom, prenom, email, date_naissance, adresse, telephone) VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = $pdo->prepare($query);
    $stmt->execute([$nom, $prenom, $email, $date_naissance, $adresse, $telephone]);

    header('Location: ../index.php');
}
?>







<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un membre</title>
    <link rel="stylesheet" href="../assets/css/styles.css">
</head>
<body>
    <header>
        <h1>Ajouter un membre</h1>
    </header>
    <main>
        <form method="POST">
            <label for="nom">Nom</label>
            <input type="text" name="nom" id="nom" required>
            <label for="prenom">Prénom</label>
            <input type="text" name="prenom" id="prenom" required>
            <label for="email">Email</label>
            <input type="email" name="email" id="email" required>
            <label for="date_naissance">Date de naissance</label>
            <input type="date" name="date_naissance" id="date_naissance" required>
            <label for="adresse">Adresse</label>
            <textarea name="adresse" id="adresse" required></textarea>
            <label for="telephone">Téléphone</label>
            <input type="text" name="telephone" id="telephone" required>
            <button type="submit">Ajouter</button>
        </form>
    </main>
  
</body>
</html>
<br>
<br>
<br>
<br>
<br>
<br>

<?php
include '../layout/footer.php';
?>
