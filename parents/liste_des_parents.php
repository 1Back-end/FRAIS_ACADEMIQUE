<?php include("../include/menu.php");?>
<?php include("../controllers/controllers.php");?>


<div class="main-container mt-3 pb-5">

<div class="col-md-12 col-sm-12">
    <div class="card-box p-3 mb-3 d-flex justify-content-between align-items-center">
        <!-- Section for the page title -->
        <div class="mr-auto">
            <h2>
                <?php echo getCurrentPageName(); ?>
            </h2>
        </div>
        <!-- Section for the add button -->
        <div class="ml-auto">
            <a href="#" class="btn btn-customize text-white">
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
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    <tr>
                            <td colspan="10">Aucun élément trouvé</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>







</div>