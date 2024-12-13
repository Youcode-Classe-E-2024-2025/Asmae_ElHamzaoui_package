<?php
include 'db.php';  // Connexion à la base de données



    // traitement pour ajouter un package
    if (isset($_POST['nom_package'])) {
        $nom_package = $_POST['nom_package'];
        $desc_package = $_POST['desc_package'];
        $url_package = $_POST['url_package'];

        $sql = "INSERT INTO G_Package (nom_Package, desc_Package, url_Package) VALUES (?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sss", $nom_package, $desc_package, $url_package);

        if ($stmt->execute()) {
            echo "Package ajouté avec succès!";
        } else {
            echo "Erreur : " . $stmt->error;
        }
        $stmt->close();
    }
