// Sélectionner les éléments du DOM

const increaseButton = document.getElementById('increase');
const decreaseButton = document.getElementById('decrease');
const stockE = document.getElementById('input');

// Définir le stock initial
let stock = 0;

// Mettre à jour le stock affiché
function updateStock() {
 
  stockE.value = stock;

}

// Augmenter le stock
function increaseStock() {
  stock++;
  updateStock();
}

// Diminuer le stock (avec vérification pour éviter un stock négatif)
function decreaseStock() {
  if (stock > 0) {
    stock--;
    updateStock();
  }
}

// Ajouter des écouteurs d'événements aux boutons
increaseButton.addEventListener('click', increaseStock);
decreaseButton.addEventListener('click', decreaseStock);

// Mettre à jour le stock initial
updateStock();
