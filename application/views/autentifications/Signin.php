<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Client - Login</title>
<link rel="stylesheet" href="<?= base_url('assets/vendors/mdi/css/materialdesignicons.min.css')?>">
<link rel="stylesheet" href="<?= base_url('assets/vendors/base/vendor.bundle.base.css')?>">
<link rel="stylesheet" href="<?= base_url('assets/css/style.css')?>">
</head>

<body>
<div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth px-0">
            <div class="row w-100 mx-0">
                <div class="col-lg-4 mx-auto">
                    <div class="auth-form-light text-left py-5 px-4 px-sm-5">
                        <h4>Nouveaux ici?</h4>
                        <h6 class="font-weight-light">Creer un compte est facile. Ca se fait en quelque clique</h6>
                        <form class="pt-3" action="<?php echo base_url('index.php/AccountController/new_account') ?>" method="post">
                            <div class="form-group">
                                <input type="text" class="form-control form-control-lg" name="name" placeholder="Nom Utilisateur">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-lg" name="first_name" placeholder="Prenom Utilisateur">
                            </div>
                            <div class="form-group">
                                <input type="date" class="form-control form-control-lg" name="birthdate" placeholder="Date de naissance">
                            </div>
                            <!-- <div class="form-group">
                                <input type="text" class="form-control form-control-lg" id="exampleInputGenre" placeholder="Genre">
                            </div> -->
                            <div class="form-group">
                                <input type="email" class="form-control form-control-lg" name="email" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control form-control-lg" name="password" placeholder="Mot de passe">
                            </div>
                            <div class="mb-4">
                                <div class="form-check">
                                    <label class="form-check-label text-muted">
                                    <input type="checkbox" class="form-check-input">
                                    J'ai lu et accepte les politiques de confidentialite et les conditions d'utilisation
                                    </label>
                                </div>
                            </div>
                            <div class="mt-3">
                                <input class="btn btn-block btn-warning btn-lg font-weight-medium auth-form-btn" type="submit" value="SIGN UP">
                            </div>
                            <div class="text-center mt-4 font-weight-light">
                                Avez vous deja un compte? <a href="<?php echo base_url('index.php/AccountController/login')?>"  class="text-primary">Se connecter</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="<?= base_url('assets/vendors/base/vendor.bundle.base.js')?>"></script>
<script src="<?= base_url('assets/js/off-canvas.js')?>"></script>
<script src="<?= base_url('assets/js/hoverable-collapse.js')?>"></script>
<script src="<?= base_url('assets/js/template.js')?>"></script>
</body>

</html>
