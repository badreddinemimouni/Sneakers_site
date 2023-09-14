
function validatePassword() {
  var password = document.getElementById('password').value;
  var confirmPassword = document.getElementById('confirm_password').value;
  var errorElement = document.getElementById('error');

  if (password !== confirmPassword) {
    errorElement.textContent = "Les mots de passe ne correspondent pas.";
    return;
  }

  // Si les mots de passe correspondent, vous pouvez effectuer d'autres actions ici
  // window.location.href = 'inscription.php';
  document.getElementById('registration_form').submit();

  alert("Confirmation du mot de passe réussie !");
}

// Définition de la fonction val qui effectue une requête AJAX
function val(element) {
  // Création d'une instance de l'objet XMLHttpRequest
  var xhr = new XMLHttpRequest();

  // Ouverture d'une requête GET avec le paramètre "element" spécifié
  xhr.open('GET', 'element=' + element, true);

  // Envoi de la requête
  xhr.send();

  // Affichage de l'objet XMLHttpRequest dans la console
  console.log(xhr);
}
