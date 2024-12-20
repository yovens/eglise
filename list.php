<?php
include '../config/database.php'; 


$query = "SELECT * FROM membres ORDER BY date_inscription DESC";
$stmt = $pdo->query($query);
$membres = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des membres</title>
    <link rel="stylesheet" href="../assets/css/styles.css">
</head>
<body>
    <header>
        <h1>Liste des membres de l'Église</h1>
    </header>
    <main>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Email</th>
                    <th>Date de naissance</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($membres as $membre): ?>
                <tr>
                    <td><?php echo $membre['id']; ?></td>
                    <td><?php echo $membre['nom']; ?></td>
                    <td><?php echo $membre['prenom']; ?></td>
                    <td><?php echo $membre['email']; ?></td>
                    <td><?php echo $membre['date_naissance']; ?></td>
                    <td>
                        <a href="edit.php?id=<?php echo $membre['id']; ?>">Modifier</a>
                        <a href="delete.php?id=<?php echo $membre['id']; ?>" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce membre ?')">Supprimer</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <br>
        <br>
        
        <a href="../index.php">Retour au tableau de bord</a>
    </main>
   
</body>
</html>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>


<br>
<br>
<br>
<br>
<br>
<br>

<?php
include '../layout/footer.php';
?>
