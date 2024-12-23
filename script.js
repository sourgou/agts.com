document.getElementById('contact-form').addEventListener('submit', function(event) {
    event.preventDefault(); // Empêche le rechargement de la page
    alert('Merci pour votre message ! Nous vous contacterons bientôt.');
    this.reset(); // Réinitialise le formulaire
});
