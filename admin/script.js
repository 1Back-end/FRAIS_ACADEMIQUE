document.getElementById('photoInput').addEventListener('change', function(event) {
    const file = event.target.files[0];
    if (file) {
        const reader = new FileReader();
        reader.onload = function(e) {
            document.getElementById('avatar').src = e.target.result;
        };
        reader.readAsDataURL(file);
    }
});

$(document).ready(function() {
    // Cacher l'alerte après 2 secondes (2000 ms)
    setTimeout(function() {
        $(".alert").alert('close');
    }, 2000);
});

$(document).ready(function() {
    // Lorsque le bouton de suppression est cliqué
    $('.btn-delete').on('click', function() {
        var userId = $(this).data('id');
        var actionUrl = $(this).data('url');
        
        // Définir l'URL d'action du formulaire dans la boîte modale
        $('#formDelete').attr('action', actionUrl);
        
        // Définir l'ID de l'utilisateur dans le champ caché
        $('#modalUserId').val(userId);
        
        // Afficher la boîte modale
        $('#modalDelete').modal('show');
    });
});