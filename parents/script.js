// Sélection de l'élément input de type file
const photoInput = document.getElementById('photoInput');

// Écouter les changements dans l'input file
photoInput.addEventListener('change', function() {
    const file = this.files[0]; // Récupérer le premier fichier sélectionné
    if (file) {
        const reader = new FileReader(); // Créer un objet FileReader

        // Événement déclenché lorsque la lecture du fichier est terminée
        reader.onload = function(e) {
            const imgElement = document.getElementById('avatar');
            imgElement.src = e.target.result; // Mettre à jour l'attribut src de l'élément img avec l'aperçu de l'image
        };

        // Lire le contenu du fichier en tant que URL de données
        reader.readAsDataURL(file);
    }
});