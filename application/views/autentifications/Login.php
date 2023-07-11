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
                        <h4>Bonjour! C'est un plaisir de vous revoir</h4>
                        <h6 class="font-weight-light">Connecter vous a votre compte.</h6>
                        <form class="pt-3">
                            <div class="form-group">
                                <input type="email" class="form-control form-control-lg" id="exampleInputEmail1" name="username" placeholder="Nom Utilisateur">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control form-control-lg" id="exampleInputPassword1" name="password" placeholder="Mot de passe">
                            </div>
                            <div class="mt-3">
                            <input class="btn btn-block btn-warning btn-lg font-weight-medium auth-form-btn" type="submit" value="LOG IN">
                            </div>
                            <div class="my-2 d-flex justify-content-between align-items-center">
                                <div class="form-check">
                                    <label class="form-check-label text-muted">
                                    <input type="checkbox" class="form-check-input">
                                    S'en souvenir
                                    </label>
                                </div>
                                <a href="#" class="auth-link text-black">Forgot password?</a>
                            </div>
                            <div class="text-center mt-4 font-weight-light">
                                Vous n'avez pas encore de compte?<br><a href="<?php echo base_url('index.php/AccountController/signin')?>" class="text-primary">Creez-en un</a>
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
