<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="col-md-6 col-lg-6 text-center mx-auto mt-6">
                        <h5 class="fw-bold text-danger fs-3 fs-lg-5 lh-sm my-2">Organisation du suivie de votre regime</h4>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="content table-responsive table-full-width">
                                <table class="table table-striped">
                                    <thead>
                                        <th>Jour</th>
                                        <th>Matin</th>
                                        <th>Midi</th>
                                        <th>Soir</th>
                                    </thead>
                                    <tbody>
                                    <?php 
                                        $j=0;
                                        $total = (7*$regime[0]['duree']);
                                        while ($j< $total){?>
                                        <?php for($i =0 ; $i<count($table);$i++){
                                            $j++;
                                            ?>
                                        <tr>
                                            <td><?= $j?></td>
                                            <td><?= $table[$i]['matin']?></td>
                                            <td><?= $table[$i]['midi']?></td>
                                            <td><?= $table[$i]['soir']?></td>
                                        </tr>
                                        <?php }?>
                                    <?php }?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <p class="mb-md-0 fs-1 mx-5">Voici l'emploi du temps que vous devriez suivre pour pouvoir atteindre votre objectif</p><br>
                            <div class="container">
                                <!-- Section Tittle -->
                                <div class="row d-flex justify-content-center">
                                    <div class="col-lg-6">
                                        <div class="section-tittle text-center">
                                            <h5>Les activites sportives<br>a faire!</h5>
                                        </div>
                                    </div>
                                </div>
                                <!-- Section caption -->
                                <div class="row">
                                    <div class="col-xl-4 col-lg-4 col-md-4">
                                        <div class="services-caption active text-center mb-30">
                                            <div class="service-icon">
                                                <span class="flaticon-pay"></span>
                                            </div> 
                                            <div class="service-cap">
                                                <h4>Facile</h4>
                                                <ul>
                                                    <li>pont</li>
                                                    <li>pompe</li>
                                                    <li>flection</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div> 
                                    <div class="col-xl-4 col-lg-4 col-md-4">
                                        <div class="services-caption active text-center mb-30">
                                            <div class="service-icon">
                                                <span class="flaticon-pay"></span>
                                            </div> 
                                            <div class="service-cap">
                                                <h4>Moyen</h4>
                                                <ul>
                                                    <li>pont</li>
                                                    <li>pompe</li>
                                                    <li>flection</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div> 
                                    <div class="col-xl-4 col-lg-4 col-md-4">
                                        <div class="services-caption text-center mb-30">
                                            <div class="service-icon">
                                                <span class="flaticon-plane"></span>
                                            </div> 
                                            <div class="service-cap">
                                                <h4>Difficile</h4>
                                                <ul>
                                                    <li>pont</li>
                                                    <li>pompe</li>
                                                    <li>flection</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
