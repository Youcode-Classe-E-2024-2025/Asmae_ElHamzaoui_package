
# Gestion des Packages JavaScript


## Contexte du projet
Une application web centralisée de gestion des packages JAVASCRIPT  et des auteurs

## Fonctionnalités principales

**Intégration UI et Ajout Dynamique des packagew**

-   Formulaires permettant l'ajout des packages avec des champs .

**Gestion des cartes de joueurs**

-   Ajout des packages
-   Ajout des auteurs
-   Ajout des versions
-   Ajout des colaborations

**L'affichage des packages**
-   Permettre l'affichage des packages 

## Technologies Requises
-   HTML
-   CSS natif 
-   JS  natif
-   PHP natif
-   SQL ( base de donnée MySQL)

## Table des matières

- La gestion des tâches sur un Scrum Board : [Backlog · Asmae_Elhamzaoui-fut](https://github.com/orgs/Youcode-Classe-E-2024-2025/projects/53)
-  Lien vers le repository GitHub contenant :[Repo · Asmae_Elhamzaoui_Package](https://github.com/Youcode-Classe-E-2024-2025/Asmae_ElHamzaoui_package)

 
## Installation

### Cloner le dépôt

Pour installer et démarrer l'application, commencez par cloner ce dépôt sur votre machine locale :
 

# Installation et Configuration du Projet

## Prérequis

Avant de cloner ce projet, assurez-vous d'avoir les outils suivants installés :

1. **Serveur Web** : Apache (inclus dans XAMPP, WAMP, ou MAMP).
2. **Base de Données** : MySQL.
3. **PHP** : Version compatible avec les scripts utilisés (au minimum PHP 7.4 recommandé).
4. **Git** : Pour cloner le dépôt.

## Installation

### Étape 1 : Cloner le projet

```bash
git clone https://github.com/Youcode-Classe-E-2024-2025/Asmae_ElHamzaoui_package
cd Asmae_ElHamzaoui_package
```

### Étape 2 : Configuration de l'environnement

1. **Serveur Apache et MySQL**  
   - Utilisez un logiciel comme XAMPP, WAMP, ou MAMP pour démarrer Apache et MySQL.  
   - Placez les fichiers du projet dans le répertoire `htdocs` (pour XAMPP) ou dans le répertoire équivalent de votre serveur local.

2. **Base de Données**  
   - Ouvrez phpMyAdmin (accessible via `http://localhost/phpmyadmin`).  
   - Créez une base de données avec le nom  : `gestion_packages`.  
   - Importez le fichier SQL contenant la structure et les données :
     - Si votre fichier SQL n'existe pas, créez-le et ajoutez-le au dépôt pour faciliter l'installation.

3. **Fichier de Configuration**  
   - Vérifiez le fichier `connection.php` et mettez à jour les paramètres de connexion à la base de données si nécessaire :
     ```php
     $servername = "localhost";
     $username = "root"; // Nom d'utilisateur MySQL par défaut
     $password = "";     // Mot de passe par défaut (vide pour XAMPP)
     $dbname = "gestion_packages";
     ```

### Étape 3 : Exécution du projet

1. Lancez le serveur Apache et MySQL via votre environnement local (exemple : XAMPP).
2. Accédez à votre projet en ouvrant un navigateur et en allant à l'adresse suivante :
   ```
   http://localhost/formulaires.php
   ```

## Fonctionnalités

- **Formulaires dynamiques** : Gestion via PHP et JavaScript.
- **Interaction avec une base de données MySQL** : Stockage et récupération des données.
- **Style et animations** : Ajoutés avec CSS et JavaScript.

## Structure du Projet
 ![Structure du projet](structure.jpg)
## Outils Utilisés

- **Serveur Web Apache** : Hébergement du projet localement.
- **MySQL** : Base de données pour stocker les informations.
- **PHP** : Traitement côté serveur.
- **HTML, CSS, JavaScript** : Frontend du projet.