<?php

?>

<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-body">
                <h4 class="mt-0 header-title">Saisie de données Légales</h4>

                <form id="form_add_prisonier" class="form-horizontal form-wizard-wrapper" method="post" enctype="multipart/form-data">
                    <h3>Informations d'Identité</h3>
                    <fieldset>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label for="form_matricule" class="col-lg-3 col-form-label">Matricule</label>
                                    <div class="col-lg-9">
                                        <input id="form_matricule" name="form_matricule" type="text" class="form-control" value="" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label for="form_id_numero" class="col-lg-3 col-form-label">ID Numero</label>
                                    <div class="col-lg-9">
                                        <input id="form_id_numero" name="form_id_numero" type="text" class="form-control" value="{{ date().timestamp }}{{ random(999,111010) }}" readonly="readonly">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label for="form_nom_famille" class="col-lg-3 col-form-label">Nom de famille</label>
                                    <div class="col-lg-9">
                                        <input id="form_nom_famille" name="form_nom_famille" type="text" class="form-control" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label for="form_prenom" class="col-lg-3 col-form-label">Prénom</label>
                                    <div class="col-lg-9">
                                        <input id="form_prenom" name="form_prenom" type="text" class="form-control" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label for="form_postnom" class="col-lg-3 col-form-label">PostNom</label>
                                    <div class="col-lg-9">
                                        <input id="form_postnom" name="form_postnom" type="text" class="form-control" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label for="form_lieu_naissance" class="col-lg-3 col-form-label">Lieu de Naissance</label>
                                    <div class="col-lg-9">
                                        <input id="form_lieu_naissance" name="form_lieu_naissance" type="text" class="form-control" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">

                                    <label for="form_date_naissance" class="col-lg-3 col-form-label">Date de Naissance</label>
                                    <div class="col-lg-9">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="mm/dd/yyyy" id="form_date_naissance" name="form_date_naissance">
                                            <div class="input-group-append">
                                                <span class="input-group-text"><i class="mdi mdi-calendar"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label for="form_adresse" class="col-lg-3 col-form-label">Adresse</label>
                                    <div class="col-lg-9">
                                        <input type="text" class="form-control" id="form_adresse" name="form_adresse" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label for="form_etat_civil" class="col-lg-3 col-form-label">Etat Civil</label>
                                    <div class="col-lg-9">
                                        <select name="form_etat_civil" id="form_etat_civil" class="custom-select" required>
                                            <option value=""></option>
                                            <option value="celibataire">Celibataire</option>
                                            <option value="mariee">Mariéé</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </fieldset>
                    <h3>Picture Processing</h3>
                    <fieldset>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label for="form_picture" class="col-lg-3 col-form-label">Photo (Picture)</label>
                                    <div class="col-lg-9">
                                        <input type="file" name="form_picture" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>

