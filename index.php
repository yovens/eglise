<?php
include 'config/database.php'; 


$query = "SELECT * FROM membres ORDER BY date_inscription DESC";
$stmt = $pdo->query($query);
$membres = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Gestion de l'Église</title>
    <link rel="stylesheet" href="styles.css">
  
    
</head>
<body>
    <header>
    <div id="hero">
    <div id="hero_content">

    
 <h2> Bienvenue dans le système de<br> <span>Gestion de l'Église Evangelique de simon</span> <br>Dirigé par pasteur Samuel </h2>
      
 <main>
        <h1>Liste des membres</h1>
        <br>
        <a href="membres/add.php">Ajouter un membre</a><br>
        <br>
<br>
<br>
        <a href="membres/list.php">Voir la liste des membres</a>
       
</main>
      </div>
    </div>
    </header>
   
</body>
</html>


<br>
<?php
include 'layout/footer.php';

?>
