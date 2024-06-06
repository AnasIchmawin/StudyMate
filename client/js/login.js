 // JavaScript pour ajouter une classe au bluescreen lors du clic sur le lien Sign Up
 document.getElementById('signup-link').addEventListener('click', function () {
    document.querySelector('.bluescreen').classList.add('translate-right');
});

// JavaScript pour retirer la classe bluescreen lors du clic sur le lien Sign In
document.getElementById('signin-link').addEventListener('click', function () {
    document.querySelector('.bluescreen').classList.remove('translate-right');
});