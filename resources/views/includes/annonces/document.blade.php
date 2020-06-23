<fieldset>
    <h2 class="fs-title">Médias et documents</h2>
    <h3 class="fs-subtitle">Fill in your credentials to authorize submission</h3>
    <div class="row">
        <div class="col-md-6 col-sm-12">
            <label for="fname">Logo</label>
            <input type="file" name="logo" placeholder="Site internet" multiple />
        </div>
        <div class="col-md-6 col-sm-12">
            <label for="fname">Votre bannière</label>
            <input type="file" name="website" placeholder="Site internet" multiple/>
        </div>
        <div class="col-md-6 col-sm-12">
            <label for="fname">Images</label>
            <input type="file" name="website" placeholder="Site internet" multiple/>
        </div>
        <div class="col-md-6 col-sm-12" style="padding: 15px 0;">
            <label for="fname">Vidéo (Intégrer ou Télécharger)</label>
            
            <div class="container" style="padding: 15px 0;">
                <button type="button" class="btn btn-basic btn-sm line">Youtube</button>
                 <button type="button" class="btn btn-basic btn-sm vimeo">Vimeo</button>
                <button type="button" class="btn btn-basic btn-sm update ">Télécharger</button>
            </div>
            <input class="video_t " id="int" type="url" name="video" placeholder="Intégrer une vidéo Youtube" />
            <input class="video_t " id="vimeo" type="url" name="video" placeholder="Intégrer une vidéo Vimeo" />
            <input class="video_t" id="tele" type="file" name="video" placeholder="Télécharger une vidéo" multiple/>
        </div>
        <div class="col-md-6 col-sm-12">
            <label for="fname">Plan d'Affaires</label>
            <input type="file" name="video" placeholder="Télécharger un ou plusieurs documents" multiple/>
        </div>
        <div class="col-md-6 col-sm-12">
            <label for="fname">Données Financières</label>
            <input type="file" name="video" placeholder="Télécharger un ou plusieurs documents" multiple/>
        </div>
        <div class="col-md-6 col-sm-12">
            <label for="fname">Documents Supplémentaires</label>
            <input type="file" name="video" placeholder="Télécharger un ou plusieurs documents" multiple/>
        </div>
        
    </div>
        <input type="button" name="previous" class="previous action-button-previous" value="Previous"/>
        <input type="submit" name="submit" class="submit action-button" value="Submit"/>
</fieldset>

<script type="text/javascript">
    $(document).ready(function(){

        $('.line').click(function() {
            $('#int').toggle('slow');
            $('#tele, #vimeo').hide();
        });

        $('.vimeo').click(function() {
            $('#vimeo').toggle('slow');
            $('#tele, #int').hide();
        });

        $('.update').click(function() {
            $('#tele').toggle('slow');
            $('#int, #vimeo').hide();
        });

});
</script>
