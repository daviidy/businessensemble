<fieldset>
    <h2 class="fs-title">Médias et documents</h2>
    <h3 class="fs-subtitle">Fill in your credentials to authorize submission</h3>
    <div class="row">
        <div class="col-md-6 col-sm-12">
            <label for="fname">Logo</label>
            <input type="file" name="logo" />
        </div>
        <div class="col-md-6 col-sm-12">
            <label for="fname">Votre bannière</label>
            <input type="file" name="banner"/>
        </div>
        <div class="col-md-6 col-sm-12">
            <label for="fname">Images</label>
            <input type="file" name="images[]" multiple/>
        </div>
        <div class="col-md-6 col-sm-12" style="padding: 15px 0;">
            <label for="fname">Vidéo (Intégrer ou Télécharger)</label>

            <div class="container" style="padding: 15px 0;">
                <button type="button" class="btn btn-basic btn-sm line">Youtube</button>
                 <button type="button" class="btn btn-basic btn-sm vimeo">Vimeo</button>
                <button type="button" class="btn btn-basic btn-sm update ">Télécharger</button>
            </div>
            <input class="video_t " id="int" type="url" name="youtube" placeholder="Intégrer une vidéo Youtube" />
            <input class="video_t " id="vimeo" type="url" name="vimeo" placeholder="Intégrer une vidéo Vimeo" />
            <input class="video_t" id="tele" type="file" name="videoDownload"/>
        </div>
        <div class="col-md-6 col-sm-12">
            <label for="fname">Plan d'Affaires</label>
            <input type="file" name="businessplan[]" placeholder="Télécharger un ou plusieurs documents" multiple/>
        </div>
        <div class="col-md-6 col-sm-12">
            <label for="fname">Données Financières</label>
            <input type="file" name="financialplan[]" placeholder="Télécharger un ou plusieurs documents" multiple/>
        </div>
        <div class="col-md-6 col-sm-12">
            <label for="fname">Documents Supplémentaires</label>
            <input type="file" name="docs[]" placeholder="Télécharger un ou plusieurs documents" multiple/>
        </div>

    </div>
        <input type="button" name="previous" class="previous action-button-previous" value="Précédent"/>
        <button type="submit" name="submit" class="submit action-button">Envoyer</button>
</fieldset>
