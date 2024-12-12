<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<!-- forluaire pour insérer un nouvel package -->
<form action="affichage.php" method="post">
    <label for="nom_Package">Nom du package:</label>
    <input type="text" id="nom_Package" name="nom_Package" required>
    
    <label for="desc_Package">Description du package:</label>
    <textarea id="desc_Package" name="desc_Package" required></textarea>
    
    <label for="url_Package">URL du package:</label>
    <input type="url" id="url_Package" name="url_Package" required>
    
    <button type="submit">Ajouter le package</button>
</form>

<!--  traitement pour l'insertion d'un nouvel package dans la base de donnée  -->

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $nom_Package = $_POST['nom_Package'];
    $desc_Package = $_POST['desc_Package'];
    $url_Package = $_POST['url_Package'];

    // Connexion à la base de données
    $conn = new mysqli('localhost', 'username', 'password', 'gestion_packages');

    if ($conn->connect_error) {
        die("Connexion échouée: " . $conn->connect_error);
    }

    // Insertion du package dans la base de données
    $sql = "INSERT INTO package (nom_Package, desc_Package, url_Package) VALUES ('$nom_Package', '$desc_Package', '$url_Package')";

    if ($conn->query($sql) === TRUE) {
        echo "Package ajouté avec succès!";
    } else {
        echo "Erreur: " . $conn->error;
    }

    $conn->close();
}
?>


</body>
</html>