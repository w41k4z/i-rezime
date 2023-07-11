<section class="py-4 overflow-hidden">
    <div class="container">
        <div class="row h-100">
            <div class="col-md-8 grid-margin stretch-card">
                <div class="card">
                    <form action="#" method="post">
                        <div class="card-body">
                            <h4 class="card-title">Code et validation</h4>
                            <p class="card-description">
                                Selectionnez un <code>code</code> pour ajouter l'argent dans votre compte
                            </p>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                        <th>Utilisateur</th>
                                        <th>Code</th>
                                        <th>Validation</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                        <td>Jacob</td>
                                        <td class="form-group">
                                            <select class="form-control">
                                            <option>214451001</option>
                                            <option>447502021</option>
                                            <option>787753601</option>
                                            </select>
                                        </td>
                                        <td>
                                            <div class="col-md-3 choixRegime">
                                                <a class="btn btn-lg btn-danger" href="#!" role="button">Choisir</a>
                                            </div>
                                        </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <?php
            $this->load->view('template/Deco');
        ?>
    </div>
</section>