        <fieldset>
                    <h2 class="fs-title">La société</h2>
                    <h3 class="fs-subtitle">Dites nous un peu plus sur votre entreprise</h3>
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <label for="fname">Titre</label>
                            <input value="{{$annonce->title}}" type="text" name="title" placeholder="Titre" />
                        </div>
                        <div class="col-md-6 col-sm-12 ">
                            <label for="fname">Site internet</label>
                            <input type="url" name="website" placeholder="Site internet" />

                        </div>
                        <div class="col-md-6 col-sm-12">
                            <label for="fname">Pays</label>
                            <input value="{{$annonce->country}}"  placeholder="Pays de résidence " type="text" name="country" id="country_2" >
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <label for="fname">Téléphone</label>

                             <input value="{{$annonce->phone}}" placeholder="Numéro de téléphone" type="text" name="phone" id="phone_2">
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <label for="fname">Catégories</label>
                            <select class="form-input" name="category_id">
                                @foreach($categories as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <label for="fname">Stade de développement</label>
                            <select class="" name="stage" id="">
                                <option {{$annonce->stage == 'Pré-démarrage/R&D' ? 'selected' : ''}} value="Pré-démarrage/R&D">Pré-démarrage/R&amp;D</option>
                                <option {{$annonce->stage == 'Produit fini' ? 'selected' : ''}} value="Produit fini">Produit fini</option>
                                <option {{$annonce->stage == 'Réalisation des ventes' ? 'selected' : ''}} value="Réalisation des ventes">Réalisation des ventes</option>
                                <option {{$annonce->stage == 'Seuil de rentabilité' ? 'selected' : ''}} value="Seuil de rentabilité">Seuil de rentabilité</option>
                                <option {{$annonce->stage == 'Rentable' ? 'selected' : ''}} value="Rentable">Rentable</option>
                                <option {{$annonce->stage == 'Autre' ? 'selected' : ''}} value="Autre">Autre</option>
                            </select>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <label for="">Rôle idéal de l'investisseur</label>
                            <select class="select " name="investor_role" id="">
                                <option value="Rôle de l'investisseur" selected="selected">Rôle de l'investisseur</option>
                                <option value="Passif">Passif</option>
                                <option value="Participation quotidienne">Participation quotidienne</option>
                                <option value="Participation hebdomadaire">Participation hebdomadaire</option>
                                <option value="Participation mensuelle">Participation mensuelle</option>
                                <option value="Ça m'est égal">Ça m'est égal</option>
                            </select>
                        </div>

                        <div class="col-md-6 col-sm-12">
                            <label for="fname">Quel est le montant total que vous levez ?</label>
                            <input type="number" value="raising_amount" name="raising_amount" placeholder="FCFA" />
                        </div>

                        <div class="col-md-6 col-sm-12">
                            <label for="fname">Combien de ce montant avez-vous déjà levé ?</label>
                            <input value="{{$annonce->previous_raising_amount}}" type="number" name="previous_raising_amount" placeholder="FCFA" />
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <label for="fname">Quel est le montant minimum par investisseur?</label>
                            <input value="{{$annonce->min_investor_amount}}" type="number" name="min_investor_amount" placeholder="FCFA" />
                        </div>


                    </div>

                    <input type="button" name="next" class="next action-button" value="Suivant" />
                </fieldset>

