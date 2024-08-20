<?php include("../menu_user/menu.php");?>
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
                        <th>Classe</th>
                        <th>Inscription</th>
                        <th>Frais de scolarité</th>
                        <th>Frais d'examen</th>
                        <th>Autres frais</th>
                        <th>Total</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>6ème</td>
                        <td>20,000 FCFA</td>
                        <td>500,000 FCFA</td>
                        <td>30,000 FCFA</td>
                        <td>10,000 FCFA</td>
                        <td>590,000 FCFA</td>
                        <td class="d-flex align-items-center">
                            <button class="btn btn-customize text-white btn-sm btn-xs mx-2">Modifier</button>
                            <button class="btn btn-danger btn-sm btn-xs">Supprimer</button>
                        </td>
                    </tr>
                    <!-- Ajouter d'autres lignes ici pour d'autres classes -->
                </tbody>
            </table>
        </div>
    </div>
</div>
