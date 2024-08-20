<?php include("../menu_user/menu.php");?>
<?php include("../controllers/controllers.php");?>


<div class="main-container mt-3 pb-5">

<div class="col-md-8 col-sm-12 mx-auto">
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


    
<div class="col-md-8 col-sm-12 mx-auto">
    <div class="card-box p-3">
        <div class="table-responsive">
            <table class="table table-striped table-bordered text-center">
                <thead class="text-center">
                    <tr>
                        <th>#</th>
                        <th>Classe</th>
                        <!-- <th>Prénom</th>
                        <th>Adresse</th>
                        <th>Contact</th>
                        <th>Email</th> -->
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>6ième</td>
                        <!-- <td>Jean</td>
                        <td>123 Rue Principale</td>
                        <td>+33 6 12 34 56 78</td>
                        <td>jean.dupont@example.com</td> -->
                        <td>
                            <button class="btn btn-danger btn-sm btn-xs shadow-none mx-3">Supprimer</button>
                            <button class="btn btn-info btn-sm btn-xs shadow-none">Détails</button>
                        </td>
                    </tr>
                    
                </tbody>
            </table>
        </div>
    </div>
</div>








</div>