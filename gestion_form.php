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


    // traitement pour ajouter un auteur
    if (isset($_POST['nom_auteur'])) {
        $nom_auteur = $_POST['nom_auteur'];
        $prenom_auteur = $_POST['prenom_auteur'];
        $email_auteur = $_POST['email_auteur'];
        $date_inscription_auteur = $_POST['date_inscription_auteur'];

        $sql = "INSERT INTO auteur (nom_Auteur, prenom_Auteur, email_Auteur, date_inscription_Auteur) VALUES (?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssss", $nom_auteur, $prenom_auteur, $email_auteur, $date_inscription_auteur);

        if ($stmt->execute()) {
            echo "Auteur ajouté avec succès!";
        } else {
            echo "Erreur : " . $stmt->error;
        }
        $stmt->close();
    }


    // traitement pour ajouter une version
    if (isset($_POST['num_version'])) {
        $package_id = $_POST['package_id'];
        $num_version = $_POST['num_version'];
        $date_sortie_version = $_POST['date_sortie_version'];

        $sql = "INSERT INTO version (id_Package, num_version, date_sortie_version) VALUES (?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("iss", $package_id, $num_version, $date_sortie_version);

        if ($stmt->execute()) {
            echo "Version ajoutée avec succès!";
        } else {
            echo "Erreur : " . $stmt->error;
        }
        $stmt->close();
    }
