<section class="py-4 overflow-hidden">

    <div class="container">
        <div class="row h-100">
            <div class="col-lg-7 mx-auto text-center mt-7 mb-5">
                <h5 class="fw-bold fs-3 fs-lg-5 lh-sm">Faites votre choix</h5>
            </div>
            <div class="col-12">
                <div class="carousel slide" id="carouselPopularItems" data-bs-touch="false" data-bs-interval="false">
                    <div class="carousel-inner">
                        <div class="carousel-item active" data-bs-interval="10000">
                            <div class="row align-items-center">
                                <div class="col-sm-6 col-md-4 col-xl mb-5 h-100 regimeChoix">
                                    <form action="<?php echo base_url('index.php/IndexController/regimeChoix')?>" method="post">
                                        <div class="card card-span h-100 rounded-3">
                                            <div class="card-body ps-0">
                                                <h5 class="fw-bold text-1000 text-truncate mb-1">Basique</h5>
                                                <div class="detailk">
                                                    <span class="text-primary">Leger mais efficace</span>
                                                </div>
                                                <span class="text-1000 fw-bold"><h6>Poids</h6><input type="number" name="poids" id=""></span>
                                                <input type="hidden" name="id_categorie" value= 1 >
                                            </div>
                                        </div>
                                        <div class= " d-grid gap-2">
                                            <input type="submit" class="btn btn-lg btn-danger" role="button" value=" Je Valide ">
                                        </div>
                                    </form>
                                </div>

                                <div class="col-sm-6 col-md-4 col-xl mb-5 h-100 regimeChoix">
                                    <form action="<?php echo base_url('index.php/IndexController/regimeChoix')?>" method="post">
                                    <div class="card card-span h-100 rounded-3">
                                        <div class="card-body ps-0">
                                            <h5 class="fw-bold text-1000 text-truncate mb-1">Dynamique</h5>
                                            <div class="detailk">
                                                <span class="text-primary">Plus rapide mais equilibre</span>
                                            </div><span class="text-1000 fw-bold"><h6>Poids</h6><input type="number" name="poids" id=""></span>
                                            <input type="hidden" name="id_categorie" value= 2 >
                                        </div>
                                    </div>
                                    <div class= " d-grid gap-2">
                                            <input type="submit" class="btn btn-lg btn-danger" role="button" value=" Je Valide ">
                                    </div>
                                    </form>
                                </div>

                                <div class="col-sm-6 col-md-4 col-xl mb-5 h-100 regimeChoix">
                                <form action="<?php echo base_url('index.php/IndexController/regimeChoix')?>" method="post">
                                    <div class="card card-span h-100 rounded-3">
                                        <div class="card-body ps-0">
                                            <h5 class="fw-bold text-1000 text-truncate mb-1">Personnalise</h5>
                                            <div class="detailk">
                                                <span class="text-primary">C'est votre choix</span>
                                            </div><span class="text-1000 fw-bold"><h6>Poids</h6><input type="number" name="poids" id=""></span>
                                        </div>
                                    </div>
                                        <div class= " d-grid gap-2">
                                            <input type="submit" class="btn btn-lg btn-danger" role="button" value=" Je Valide ">
                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
