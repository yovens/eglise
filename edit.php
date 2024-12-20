<?php
include '../config/database.php'; 


if (!isset($_GET['id'])) {
    die('ID du membre requis.');
}

$id = $_GET['id'];


$query = "SELECT * FROM membres WHERE id = ?";
$stmt = $pdo->prepare($query);
$stmt->execute([$id]);
$membre = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$membre) {
    die('Membre non trouvé.');
}


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
   
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $date_naissance = $_POST['date_naissance'];
    $adresse = $_POST['adresse'];
    $telephone = $_POST['telephone'];

   
    $query = "UPDATE membres SET nom = ?, prenom = ?, email = ?, date_naissance = ?, adresse = ?, telephone = ? WHERE id = ?";
    $stmt = $pdo->prepare($query);
    $stmt->execute([$nom, $prenom, $email, $date_naissance, $adresse, $telephone, $id]);


    header('Location: ../index.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier le membre</title>
    <link rel="stylesheet" href="../assets/css/styles.css">
</head>
<body>
    <header>
        <h1>Modifier le membre</h1>
    </header>
    <main>
        <form method="POST">
            <label for="nom">Nom</label>
            <input type="text" name="nom" id="nom" value="<?php echo htmlspecialchars($membre['nom']); ?>" required>

            <label for="prenom">Prénom</label>
            <input type="text" name="prenom" id="prenom" value="<?php echo htmlspecialchars($membre['prenom']); ?>" required>

            <label for="email">Email</label>
            <input type="email" name="email" id="email" value="<?php echo htmlspecialchars($membre['email']); ?>" required>

            <label for="date_naissance">Date de naissance</label>
            <input type="date" name="date_naissance" id="date_naissance" value="<?php echo htmlspecialchars($membre['date_naissance']); ?>" required>

            <label for="adresse">Adresse</label>
            <textarea name="adresse" id="adresse" required><?php echo htmlspecialchars($membre['adresse']); ?></textarea>

            <label for="telephone">Téléphone</label>
            <input type="text" name="telephone" id="telephone" value="<?php echo htmlspecialchars($membre['telephone']); ?>" required>

            <button type="submit">Mettre à jour</button>
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




