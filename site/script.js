document.getElementById('contact-form').addEventListener('submit', function(event) {
    // Ne pas utiliser event.preventDefault() pour permettre l'envoi du formulaire
    alert('Merci pour votre message ! Nous vous contacterons bientôt.');
    // this.reset(); // Réinitialise le formulaire après l'envoi
});
