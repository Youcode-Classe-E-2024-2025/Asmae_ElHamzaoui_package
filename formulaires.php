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
      <section id="auteur" class="formulaires">
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

        <button type="submit">Ajouter l'auteur'</button>
       </form>
      </section>
    <!-- Fin  section2 -->

    <!-- début  section3 -->
      <section id="version" class="formulaires">

      </section>
    <!-- Fin  section3 -->

</body>

</html>