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
            <button id="btn-package">Ajouter Package</button>
            <button id="btn-auteur">Ajouter Auteur</button>
            <button id="btn-version">Ajouter Version</button>
            <button id="btn-collaboration">colaboration</button>
          </div>



    <!-- début  section1 -->
      <section id="package" class="formulaires">
       <!-- Formulaire pour insérer un nouvel package -->
       <form action="gestion_form.php" method="post">
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
       <form action="gestion_form.php" method="post">
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
    <form action="gestion_form.php" method="post">
        <label for="package_id">Sélectionner un Package :</label><br>
        <select name="package_id" required>
         <?php
                // Connexion à la base de données et récupérer tous les packages
                $conn = new mysqli('localhost', 'root', '', 'gestion_packages');
                $result = $conn->query("SELECT id_Package, nom_Package FROM G_Package");
                while ($row = $result->fetch_assoc()) {
                    echo "<option value='" . $row['id_Package'] . "'>" . $row['nom_Package'] . "</option>";
                }
                $conn->close();
            ?>
        </select><br><br>

        <label for="num_version">Numéro de version :</label><br>
        <input type="text" name="num_version" required><br><br>

        <label for="date_sortie_version">Date de sortie :</label><br>
        <input type="date" name="date_sortie_version" required><br><br>

        <button type="submit">Ajouter la Version</button>
    </form>
</section>
<!-- Fin section3 -->


<!-- début section4 : Formulaire pour ajouter une collaboration -->
<section id="colaboration" class="formulaires">
    <h2>Associer un Auteur à un Package</h2>
    <form action="gestion_form.php" method="post">
        <label for="package_id">Sélectionner un Package :</label><br>
        <select name="package_id" required>
        
        </select><br><br>

        <label for="auteur_id">Sélectionner un Auteur :</label><br>
        <select name="auteur_id" required>
        
        </select><br><br>

        <label for="date_contribution">Date de Contribution :</label><br>
        <input type="date" name="date_contribution" required><br><br>

        <button type="submit">Associer Auteur au Package</button>
    </form>
</section>
<!-- Fin section4 -->
<script src="formulaires.js"></script>
</body>

</html>