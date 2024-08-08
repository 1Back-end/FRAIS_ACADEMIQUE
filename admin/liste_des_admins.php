<?php include("../include/menu.php");?>
<?php include("../controllers/controllers.php");?>


<div class="main-container mt-3 pb-5">

<div class="col-md-12 col-sm-12">
    <div class="card-box p-3 mb-3 d-flex justify-content-between align-items-center">
        <!-- Section for the page title -->
        <div class="mr-auto">
            <h5 class="text-uppercase">
                <?php echo getCurrentPageName(); ?>
            </h5>
        </div>
        <!-- Section for the add button -->
        <div class="ml-auto">
            <a href="page_add.php" class="btn btn-customize text-white">
                <i class="fa fa-plus-circle" aria-hidden="true"></i> Ajouter
            </a>
        </div>
    </div>
</div>


<div class="col-md-12 col-sm-12">
    <div class="card-box p-3">
        <div class="table-responsive">
            
                <table class="table table-striped table-bordered text-center">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nom</th>
                            <th>Prénom</th>
                            <th>Adresse</th>
                            <th>Contact</th>
                            <th>Email</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php if (empty($admins)): ?>
                        <tr>
                            <td colspan="10">Aucun élément trouvé</td>
                        </tr>
                    <?php else:?>
                        <?php foreach ($admins as $index => $admin): ?>
                            <tr>
                                <td><?= $index + 1 ?></td> <!-- Numérotation automatique -->
                                <td><?= htmlspecialchars($admin['Nom']) ?></td>
                                <td><?= htmlspecialchars($admin['Prénom']) ?></td>
                                <td><?= htmlspecialchars($admin['Adresse']) ?></td>
                                <td><?= htmlspecialchars($admin['Contact']) ?></td>
                                <td><?= htmlspecialchars($admin['Email']) ?></td>
                                <td>
                                    <!-- Exemple d'actions, à adapter selon vos besoins -->
                                    <a href="script_delete.php?id=<?= urlencode($admin['id_user']) ?>" class="btn btn-danger btn-sm btn-xs">Supprimer</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            <?php endif; ?>
        </div>
    </div>
</div>


<!-- La boîte modale -->
<div id="modalDelete" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Confirmer la suppression</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Êtes-vous sûr de vouloir supprimer cet administrateur ?</p>
            </div>
            <div class="modal-footer">
                <form id="formDelete" method="post" action="">
                    <input type="hidden" name="id" id="modalUserId">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                    <button type="submit" class="btn btn-danger">Supprimer</button>
                </form>
            </div>
        </div>
    </div>
</div>
