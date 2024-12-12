<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="formulaires.css">
</head>


<body>
        <h1 class="titre"> Gestion des packages </h1>
          <div class="container">
            <button onclick="">Ajouter Package</button>
            <button onclick="">Ajouter Auteur</button>
            <button onclick="">Ajouter Version</button>
          </div>



    <!-- début  section1 -->
      <section id="package" class="formulaires">
       <!-- Formulaire pour insérer un nouvel package -->
       <form action="" method="post">
        <label for="">Nom du package : </label><br>
        <input type="text" name="nom_package" required><br><br>

        <label for="">Description du package : </label><br>
        <input type="teatarea" name="desc_package" required><br><br>

        <label for="">URL du package : </label><br>
        <input type="url" name="url_package" required><br>

        <button type="submit">Ajouter le package </button>
       </form>
      </section>
    <!-- Fin  section1 -->


    <!-- début  section2 -->
      <section id="auteur" class="formulaires" style="height:500px;">
         <!-- Formulaire pour insérer un nouvel auteur -->
       <form action="" method="post">
        <label for="">Nom d'auteur : </label><br>
        <input type="text" name="nom_auteur" required><br><br>

        <label for="">Prénom d'auteur :</label><br>
        <input type="teatarea" name="prenom_auteur" required><br><br>

        <label for="">Email du package : </label><br>
        <input type="email" name="email_auteur" required><br>

        <label for="">Date_Auteur : </label><br>
        <input type="date" name="date_inscription_auteur" required><br>

        <button type="submit">Ajouter l'auteur </button>
       </form>
      </section>
    <!-- Fin  section2 -->

   <!-- début section3 : Formulaire pour ajouter une version -->
<section id="version" class="formulaires">
    <h2>Ajouter une Version</h2>
    <form action="" method="post">
        <label for="package_id">Sélectionner un Package :</label><br>
        <select name="package_id" required>
    
        </select><br><br>

        <label for="num_version">Numéro de version :</label><br>
        <input type="text" name="num_version" required><br><br>

        <label for="date_sortie_version">Date de sortie :</label><br>
        <input type="date" name="date_sortie_version" required><br><br>

        <button type="submit">Ajouter la Version</button>
    </form>
</section>
<!-- Fin section3 -->



    <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $nom_Package = $_POST['nom_Package'];
    $desc_Package = $_POST['desc_Package'];
    $url_Package = $_POST['url_Package'];
    // Connexion à la base de données
    $conn = new mysqli('localhost', 'root', '', 'gestion_packages');
    if ($conn->connect_error) {
        die("Connexion échouée: " . $conn->connect_error);
    }
    // Requête préparée pour éviter l'injection SQL
    $stmt = $conn->prepare("INSERT INTO G_Package (nom_Package, desc_Package, url_Package) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $nom_Package, $desc_Package, $url_Package);
    // Exécution de la requête
    if ($stmt->execute()) {
        echo "Package ajouté avec succès!";
    } else {
        echo "Erreur lors de l'insertion: " . $stmt->error;
    }
    $stmt->close();
    $conn->close();
}
?>
</body>

</html>