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
        <div class="col-md-6 col-sm-12">
            <label for="fname">Vidéo (Intégrer)</label>
            <div class="col-md-12 col-sm-12" id="check-input">
                <div class="form-check-inline  custom-radio">
                  <label class="form-check-label" for="radio1">
                    <input type="radio" class="form-check-input " id="radio" name="video" value="Youtube" checked>Youtube
                  </label>
                </div>
                <div class="form-check-inline custom-radio">
                  <label class="form-check-label" for="radio2">
                    <input type="radio" class="form-check-input " id="radio" name="video" value="Vimeo">Vimeo
                  </label>
                </div>
                <div class="form-check-inline  custom-radio">
                  <label class="form-check-label">
                    <input type="radio" class="form-check-input " id="radio" name="video" value="Télécharger">Télécharger
                  </label>
                </div>
            </div>
            <input class=" " id="int" type="url" name="video" placeholder="Intégrer une vidéo" />
            <input class="video_t" id="tele" type="file" name="video" placeholder="Télécharger une vidéo" multiple/>
        </div>
        <div class="col-md-6 col-sm-12">
            <label for="fname">Plan d'Affaires</label>
            <input type="file" name="video" placeholder="Télécharger une vidéo" multiple/>
        </div>
        <div class="col-md-6 col-sm-12">
            <label for="fname">Données Financières</label>
            <input type="file" name="video" placeholder="Télécharger une vidéo" multiple/>
        </div>
        <div class="col-md-6 col-sm-12">
            <label for="fname">Documents Supplémentaires</label>
            <input type="file" name="video" placeholder="Télécharger une vidéo" multiple/>
        </div>
        
    </div>
    
</fieldset>

<script type="text/javascript">
    $(document).ready(function(){

    $("input[type='button']").click(function(){
            var radioValue = $("input[id='radio']:checked").val('Télécharger');
           
            if(radioValue==true){
                $('#int').addClass('video_t');
                $('#tele').removeClass('video_t');
                
            }
            
            else{
                $('#int').addClass('video_t');
                $('#tele').removeClass('video_t');
            }
        });


});
</script>
