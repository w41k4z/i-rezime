<section class="py-4 overflow-hidden">

    <div class="container">
        <div class="col-lg-6 text-center mx-auto mt-6">
            <h5 class="fw-bold text-danger fs-3 fs-lg-5 lh-sm my-2">Je veux ...</h5>
        </div>
        <div class="row h-100 gx-2 mt-7">

            <div class="col-md-6">
                <div class="col-lg-6 text-center mx-auto mb-3 mb-md-5 mt-4">
                    <h4>Perdre</h4>
                </div>
                <div class="row h-100 gx-2 mt-7">
                    <?php for($i =0; $i<count($perdre);$i++){?>
                    <div class="col-sm-6 col-lg-6 mb-3 mb-md-0 h-100 pb-4">
                        <div class="card card-span h-100">
                            <div class="position-relative"> <img class="img-fluid rounded-3 w-100" src="<?= base_url('assets/img/gallery/discount-item-1.png')?>" alt="..." />
                                <div class="card-actions">
                                    <div class="badge badge-foodwagon bg-primary p-4">
                                        <div class="d-flex flex-between-center">
                                            <div class="text-white fs-7"><?= $perdre[$i]['de']?> à <?= $perdre[$i]['a']?></div>
                                            <div class="d-block text-white fs-2">Kg<br />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body px-0">
                                <div class="col-md-4 choixRegime">
                                    <h5 class="fw-bold text-1000 text-truncate"><?= $perdre[$i]['duree']?> semaine</h5>
                                    <span class="badge bg-soft-danger py-2 px-3">
                                        <span class="fs-1 text-danger"><?= $perdre[$i]['prix']?></span>
                                    </span>
                                </div>
                                <div class="row">
                                    <div class="col-md-3 choixRegime">
                                        <a class="btn btn-lg btn-danger" href="#!" role="button">Choisir</a>
                                    </div>

                                    <div class="col-md-4 choixRegime" style="margin-left:15%">
                                        <a class="btn btn-lg btn-danger" href="#!" role="button">Detail</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                   <?php }?>
                </div>
            </div>

            <div class="col-md-6">
                <div class="col-lg-6 text-center mx-auto mb-3 mb-md-5 mt-4">
                    <h4>Gagner</h4>
                </div>
                <div class="row h-100 gx-2 mt-7">
                <?php for($i =0; $i<count($gagner);$i++){?>
                    <div class="col-sm-6 col-lg-6 mb-3 mb-md-0 h-100 pb-4">
                        <div class="card card-span h-100">
                            <div class="position-relative"> <img class="img-fluid rounded-3 w-100" src="<?= base_url('assets/img/gallery/discount-item-2.png')?>" alt="..." />
                                <div class="card-actions">
                                    <div class="badge badge-foodwagon bg-primary p-4">
                                        <div class="d-flex flex-between-center">
                                            <div class="text-white fs-7"><?= $gagner[$i]['de']?> à <?= $gagner[$i]['a']?></div>
                                            <div class="d-block text-white fs-2">Kg<br />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body px-0">
                                <div class="col-md-4 choixRegime">
                                    <h5 class="fw-bold text-1000 text-truncate"><?= $gagner[$i]['duree']?> semaine</h5>
                                    <span class="badge bg-soft-danger py-2 px-3">
                                        <span class="fs-1 text-danger"><?= $gagner[$i]['prix']?></span>
                                    </span>
                                </div>
                                <div class="row">
                                    <div class="col-md-3 choixRegime">
                                        <a class="btn btn-lg btn-danger" href="#!" role="button">Choisir</a>
                                    </div>

                                    <div class="col-md-4 choixRegime" style="margin-left:15%">
                                        <a class="btn btn-lg btn-danger" href="#!" role="button">Detail</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                   <?php }?>
                </div>
            </div>

        </div>
    </div>

</section>