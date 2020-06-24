		<fieldset>
                    <h2 class="fs-title">La présentation et l'offre</h2>
                    <h3 class="fs-subtitle">Parlez nous de votre marché cible et votre offre</h3>
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <label for="fname">Bref Résumé</label>
                            <textarea name="short_description" placeholder="Brève description de votre entreprise">
                                {{$annonce->short_description}}
                            </textarea>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <label for="fname">Le Marché</label>
                            <textarea name="market_description" placeholder="Description du marché">
                                {{$annonce->market_description}}
                            </textarea>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <label for="fname">Progrès/Preuve</label>
                            <textarea name="proof_description" placeholder="Etat du marché où vous souhaitez entrer">
                                {{$annonce->proof_description}}
                            </textarea>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <label for="fname">Objectifs/Avenir</label>
                            <textarea name="goals_description" placeholder="Quelle direction votre entreprise souhaite t-elle prendre ?">
                                {{$annonce->goals_description}}
                            </textarea>
                        </div>

                    </div>



                    <input type="button" name="previous" class="previous action-button-previous" value="Précédent" />
                    <input type="button" name="next" class="next action-button" value="Suivant" />
                </fieldset>
