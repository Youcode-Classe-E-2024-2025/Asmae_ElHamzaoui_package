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
      <section id="package">
         <!-- Formulaire pour insérer un nouvel package -->
       <form action="" method="post">

        <label for=""> Nom du package : </label>
        <input type="text" name="nom_package" required>

        <label for=""> Description du package : </label>
        <teatarea name="desc_package" required></teatarea>

        <label for="">URL du package</label>
        <input type="url" name="url_package" required>

        <button type="submit">Ajouter le package </button>
        
       </form>




      </section>
    <!-- Fin  section1 -->









    <!-- début  section2 -->
      <section id="auteur">

      </section>
    <!-- Fin  section2 -->

    <!-- début  section3 -->
      <section id="version">

      </section>
    <!-- Fin  section3 -->

</body>

</html>