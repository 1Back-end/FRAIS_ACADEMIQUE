<?php include("../include/menu.php");?>
<?php include("../controllers/controllers.php");?>
<link rel="stylesheet" href="style.css">

<div class="main-container mt-3 pb-5">
<div class="col-md-12 col-sm-12 mb-3">
    <div class="card-box p-2 text-center">
        <!-- <a href="liste_des_parents.php" class="icon-back text-white">
            <i class="fa fa-arrow-circle-left" style="font-size: 1.2em;"></i>
        </a> -->
        <h5 class="text-uppercase" style="margin: 0;">Ajouter un parent</h5>
    </div>
</div>


<div class="col-md-12 col-sm-12 mb-3">
<form action="" method="post" enctype="multipart/form-data">
    <div class="card-box p-3">
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <div class="mb-2">
                    <label for="nom">Nom <span class="text-danger">*</span></label>
                    <input type="text" class="form-control shadow-none" id="nom" name="nom" required>
                </div>

                <div class="mb-2">
                    <label for="prenom">Prénom <span class="text-danger">*</span></label>
                    <input type="text" class="form-control shadow-none" id="prenom" name="prenom" required>
                </div>

                <div class="mb-2">
                    <label for="lieu_naissance">Lieu de naissance <span class="text-danger">*</span></label>
                    <input type="text" class="form-control shadow-none" id="lieu_naissance" name="lieu_naissance" required>
                </div>

                <div class="mb-2">
                    <label for="adresse">Adresse <span class="text-danger">*</span></label>
                    <input type="text" class="form-control shadow-none" id="adresse" name="adresse" required>
                </div>


            </div>

            <div class="col-md-6 col-sm-12">
                <div class="mb-2">
                    <label for="telephone">Numéro de téléphone <span class="text-danger">*</span></label>
                    <input type="text" class="form-control shadow-none" id="telephone" name="telephone" required>
                </div>

                <div class="mb-2">
                    <label for="email">Adresse Email <span class="text-danger">*</span></label>
                    <input type="email" class="form-control shadow-none" id="email" name="email" required>
                </div>

                <div class="mb-2">
                    <label for="profession">Profession <span class="text-danger">*</span></label>
                    <input type="text" class="form-control shadow-none" id="profession" name="profession" required>
                </div>
                <div class="mb-2">
                    <label for="relation">Relation <span class="text-danger">*</span></label>
                    <select class="form-control shadow-none select-form" id="relation" name="relation" required>
                    <option value="" disabled selected>Choisir une relation</option>
                    <?php foreach ($members as $value => $label): ?>
                        <option value="<?php echo htmlspecialchars($value); ?>">
                            <?php echo htmlspecialchars($label); ?>
                        </option>
                    <?php endforeach; ?>
                </select>
                </div>
            </div>
        </div>


        <div class="mb-3 d-flex align-items-center justify-content-between">
        <button type="submit" class="btn btn-customize shadow-none text-white btn-responsive mb-2 mx-2">Enregistrer</button>
        <a href="liste_des_parents.php" class="btn btn-secondary shadow-none btn-responsive mb-2 mx-2">Annuler</a>
        </div>


    </div>
</form>


</div>


<script src="script.js"></script>