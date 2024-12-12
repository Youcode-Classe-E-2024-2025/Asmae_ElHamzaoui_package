// Obtenir les éléments du DOM pour les boutons
const btnPackage = document.getElementById("btn-package");
const btnAuteur = document.getElementById("btn-auteur");
const btnVersion = document.getElementById("btn-version");
const btnCollaboration = document.getElementById("btn-collaboration");

// Obtenir les éléments des modals
const modalPackage = document.getElementById("package");
const modalAuteur = document.getElementById("auteur");
const modalVersion = document.getElementById("version");
const modalColaboration = document.getElementById("colaboration");

// Cacher tous les modals au départ
modalPackage.style.display = "none";
modalAuteur.style.display = "none";
modalVersion.style.display = "none";
modalColaboration.style.display = "none";

// Afficher le modal correspondant lorsque l'on clique sur un bouton
btnPackage.onclick = function() {
    modalPackage.style.display = "block";
    modalAuteur.style.display = "none";
    modalVersion.style.display = "none";
    modalColaboration.style.display = "none";
}

btnAuteur.onclick = function() {
    modalAuteur.style.display = "block";
    modalPackage.style.display = "none";
    modalVersion.style.display = "none";
    modalColaboration.style.display = "none";
}

btnVersion.onclick = function() {
    modalVersion.style.display = "block";
    modalPackage.style.display = "none";
    modalAuteur.style.display = "none";
    modalColaboration.style.display = "none";
}

btnCollaboration.onclick = function() {
    modalColaboration.style.display = "block";
    modalPackage.style.display = "none";
    modalAuteur.style.display = "none";
    modalVersion.style.display = "none";
}