<?php
include '../config/database.php'; 


if (!isset($_GET['id'])) {
    die('ID du membre requis.');
}

$id = $_GET['id'];


$query = "DELETE FROM membres WHERE id = ?";
$stmt = $pdo->prepare($query);


if ($stmt->execute([$id])) {
   
    header('Location: ../index.php');
    exit();
} else {
    die('Erreur lors de la suppression du membre.');
}
?>
