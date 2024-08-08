<?php include("../include/menu.php");?>
<?php include("script_add_admin.php");?>
<link rel="stylesheet" href="style.css">

<div class="main-container mt-3 pb-5">
<div class="col-md-12 col-sm-12 mb-3">
    <div class="card-box p-2 text-center">
        <!-- <a href="liste_des_parents.php" class="icon-back text-white">
            <i class="fa fa-arrow-circle-left" style="font-size: 1.2em;"></i>
        </a> -->
        <h5 class="text-uppercase" style="margin: 0;">Ajouter un Administrateur</h5>
    </div>
</div>

<div class="col-md-12 col-sm-12">
<?php if (!empty($erreur)): ?>
            <div class="alert alert-danger text-center" role="alert">
                <?= htmlspecialchars($erreur) ?>
            </div>
        <?php endif; ?>

        <?php if (!empty($succes)): ?>
            <div class="alert alert-success text-center" role="alert">
                <?= htmlspecialchars($succes) ?>
            </div>
        <?php endif; ?>
</div>

<div class="col-md-12 col-sm-12 mb-3">
<form action="" method="post" enctype="multipart/form-data">
    <div class="card-box p-3">
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <div class="mb-2">
                    <label for="nom">Nom <span class="text-danger">*</span></label>
                    <input type="text" class="form-control shadow-none" id="nom" name="nom"  value="<?= !empty($succes) ? '' : htmlspecialchars($_POST['nom'] ?? '') ?>">
                    <?php if(isset($erreur_champ) && empty($_POST['nom'])): ?>
                        <small class="text-danger"><?=$erreur_champ?></small>
                        <?php endif; ?>
                </div>

                <div class="mb-2">
                    <label for="prenom">Prénom <span class="text-danger">*</span></label>
                    <input type="text" class="form-control shadow-none" id="prenom" name="prenom" value="<?= !empty($succes) ? '' : htmlspecialchars($_POST['prenom'] ?? '') ?>">
                    <?php if(isset($erreur_champ) && empty($_POST['prenom'])): ?>
                        <small class="text-danger"><?=$erreur_champ?></small>
                        <?php endif; ?>
                </div>

                

                <div class="mb-2">
                    <label for="adresse">Adresse <span class="text-danger">*</span></label>
                    <input type="text" class="form-control shadow-none" id="adresse" name="adresse" value="<?= !empty($succes) ? '' : htmlspecialchars($_POST['adresse'] ?? '') ?>">
                    <?php if(isset($erreur_champ) && empty($_POST['adresse'])): ?>
                        <small class="text-danger"><?=$erreur_champ?></small>
                        <?php endif; ?>
                </div>


            </div>

            <div class="col-md-6 col-sm-12">
                <div class="mb-2">
                    <label for="telephone">Numéro de téléphone <span class="text-danger">*</span></label>
                    <input type="text" class="form-control shadow-none" id="telephone" name="telephone" value="<?= !empty($succes) ? '' : htmlspecialchars($_POST['telephone'] ?? '') ?>">
                    <?php if(isset($erreur_champ) && empty($_POST['telephone'])): ?>
                        <small class="text-danger"><?=$erreur_champ?></small>
                        <?php endif; ?>
                </div>

                <div class="mb-2">
                    <label for="email"> Email <span class="text-danger">*</span></label>
                    <input type="email" class="form-control shadow-none" id="email" name="email" value="<?= !empty($succes) ? '' : htmlspecialchars($_POST['email'] ?? '') ?>">
                    <?php if(isset($erreur_champ) && empty($_POST['email'])): ?>
                        <small class="text-danger"><?=$erreur_champ?></small>
                        <?php endif; ?>
                </div>

                <div class="mb-2">
                    <label for="photo">Photo <span class="text-danger">*</span></label>
                    <div class="d-flex align-items-center">
                        <!-- Conteneur pour l'image affichée -->
                        <div>
                            <img id="avatar" src="../vendors/images/profile.jpg" alt="Aperçu de l'image" class="profile-image">
                        </div>
                        <!-- Conteneur pour le champ d'entrée de fichier -->
                        <div class="ml-3 w-100">
                            <input type="file" name="photo" class="shadow-none form-control" id="photoInput" accept="image/*">
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="mb-5 d-flex flex-column flex-sm-row align-items-center justify-content-between">
        <button type="submit" name="submit" class="btn btn-customize shadow-none text-white btn-responsive mb-2 mb-sm-0 mx-2">Enregistrer</button>
        <a href="liste_des_admins.php" class="btn btn-secondary shadow-none btn-responsive mb-2 mx-2">Annuler</a>
    </div>



    </div>
</form>


</div>


<script src="script.js"></script>