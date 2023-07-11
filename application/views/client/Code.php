<section class="pb-5 pt-8">

    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card card-span mb-3 shadow-lg">
                    <div class="card-body py-0">
                        <div class="row justify-content-center">
                            <div class="col-md-5 col-xl-7 col-xxl-8 g-0 order-0 order-md-1"><img
                                    class="img-fluid w-100 fit-cover h-100 rounded-top rounded-md-end rounded-md-top-0"
                                    src="<?= base_url("assets/img/gallery/crispy-sandwiches.png") ?>" alt="..." /></div>
                            <div class="col-md-7 col-xl-5 col-xxl-4 p-4 p-lg-5">
                                <h1 class="card-title mt-xl-5 mb-4">Meilleur des services chez <span
                                        class="text-primary"> i-rezime</span></h1>
                                <p class="fs-1">Ne laissez pas les barrières financières vous freiner dans votre quête
                                    de bien-être - investissez dans vous-même dès aujourd'hui.</p>
                                <div class="d-grid bottom-0">
                                    <button class="btn btn-lg btn-primary mt-xl-6" data-bs-toggle="modal"
                                        data-bs-target="#insertModal">ENTRER
                                        LE CODE<i class="fas fa-chevron-right ms-2"></i>
                                    </button>
                                    <div class="modal fade" id="insertModal" tabindex="-1"
                                        aria-labelledby="insertModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header d-flex justify-content-between">
                                                    <h4 class="modal-title" id="insertModalLabel">Insert your<span
                                                            class="text-primary"> code</span></h4>
                                                    <button class="btn btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="model-body justify-content-around mt-3 p-3">
                                                    <div class="text-black">
                                                        <div class="card">
                                                            <form
                                                                action="<?= base_url("index.php/CodeController/code_insert") ?>/docks/new"
                                                                class="card-body row mt-3 g-3 px-3" method="post">
                                                                <input type="text" name="code" id="code"
                                                                    class="form-control"
                                                                    placeholder="# # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # #"
                                                                    required />
                                                                <input class="btn btn-lg btn-primary mt-xl-6"
                                                                    type="submit" value="Valider">
                                                        </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Modal -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div><!-- end of .container-->

</section>