<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="formulaires.css">
</head>


<body>
        <h1 class="titre"> Gestion des packages JAVASCRIPT </h1>
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

        <label for="auteur_id">Sélectionner un Auteur :</label><br>
        <select name="auteur_id" required>
        <?php
                // Connexion à la base de données et récupérer tous les auteurs
                $conn = new mysqli('localhost', 'root', '', 'gestion_packages');
                $result = $conn->query("SELECT id_Auteur, CONCAT(nom_Auteur, ' ', prenom_Auteur) AS nom_complet FROM auteur");
                while ($row = $result->fetch_assoc()) {
                    echo "<option value='" . $row['id_Auteur'] . "'>" . $row['nom_complet'] . "</option>";
                }
                $conn->close();
            ?>
        </select><br><br>

        <label for="date_contribution">Date de Contribution :</label><br>
        <input type="date" name="date_contribution" required><br><br>

        <button type="submit">Associer Auteur au Package</button>
    </form>
</section>
<!-- Fin section4 -->

<!-- début section5 : Affichage des Auteurs -->
<section id="affichage-auteurs">
    <h2>Auteurs</h2>
    <table>
        <thead>
            <tr>
                <th>ID Auteur</th>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Email</th>
                <th>Date d'Inscription</th>
            </tr>
        </thead>
        <tbody>
            <?php
                // Connexion à la base de données
                include 'connection.php';

                // Requête SQL pour récupérer tous les auteurs
                $sql = "SELECT id_Auteur, nom_Auteur, prenom_Auteur, email_Auteur, date_inscription_Auteur FROM auteur";

                // Exécution de la requête
                $result = $conn->query($sql);

                // Vérification s'il y a des résultats
                if ($result->num_rows > 0) {
                    // Affichage des données des auteurs dans le tableau
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . htmlspecialchars($row['id_Auteur']) . "</td>";
                        echo "<td>" . htmlspecialchars($row['nom_Auteur']) . "</td>";
                        echo "<td>" . htmlspecialchars($row['prenom_Auteur']) . "</td>";
                        echo "<td>" . htmlspecialchars($row['email_Auteur']) . "</td>";
                        echo "<td>" . htmlspecialchars($row['date_inscription_Auteur']) . "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='5'>Aucun auteur trouvé.</td></tr>";
                }

                // Fermeture de la connexion
                $conn->close();
            ?>
        </tbody>
    </table>
</section>
<!-- Fin section5 -->

<!-- début section6 : Affichage des Packages -->
<section id="affichage-packages">
    <h2>Packages</h2>
    <table>
        <thead>
            <tr>
                <th>ID Package</th>
                <th>Nom</th>
                <th>Description</th>
                <th>URL</th>
            </tr>
        </thead>
        <tbody>
            <?php
                // Connexion à la base de données
                include 'connection.php';
                // Requête SQL pour récupérer tous les packages
                $sql = "SELECT id_Package, nom_Package, desc_Package, url_Package FROM G_Package";
                // Exécution de la requête
                $result = $conn->query($sql);
                // Vérification s'il y a des résultats
                if ($result->num_rows > 0) {
                    // Affichage des données des packages dans le tableau
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . htmlspecialchars($row['id_Package']) . "</td>";
                        echo "<td>" . htmlspecialchars($row['nom_Package']) . "</td>";
                        echo "<td>" . htmlspecialchars($row['desc_Package']) . "</td>";
                        echo "<td>" . htmlspecialchars($row['url_Package']) . "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='4'>Aucun package trouvé.</td></tr>";
                }
                // Fermeture de la connexion
                $conn->close();
            ?>
        </tbody>
    </table>
</section>
<!-- Fin section6 -->


<script src="formulaires.js"></script>
</body>

</html>