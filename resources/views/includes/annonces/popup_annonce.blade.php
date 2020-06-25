@auth
<!--Modal de l'ajout d'un membre de l'équipe-->
<!-- The Modal -->
          <div class="modal fade" id="myModal_2">

                <div class="modal-dialog modal-dialog-centered">
                  <div class="modal-content" style="padding: 32px;">

                    <!-- Modal Header -->
                    <div class="modal-header">

                        <h4 class="modal-title text-center title-annonce"> La société </h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body body-annonce">
                        <form action="{{route('annonces.store')}}" method="post" enctype="multipart/form-data" id="msform1">
                            @csrf
                      <div class="input">
                        <input type="text" class="form-control form-control-lg" placeholder="Titre de la société " name="title">
                      </div>
                        <div class="input">
                          <input type="text" class="form-control form-control-lg" placeholder="Pays " name="country" id="country" >
                        </div>

                        <div class="input">
                          <input type="number" class="form-control form-control-lg" name="phone" id="" placeholder="Téléphone">
                        </div>

                        <input hidden type="text" name="user_id" value="{{Auth::user()->id}}">
                        <button type="submit" class="btn btn-primary">Créer</button>
                        </form>
                    </div>

                    <!-- Modal footer -->
                    <div class="modal-footer">
                      <button type="button" class="btn btn-danger" data-dismiss="modal">Fermer</button>
                    </div>

                  </div>
                </div>

          </div>

<!--/ Modal de l'ajout d'un membre de l'équipe-->
<!-- /The Modal -->

<script src="/plugin/build/js/intlTelInput.js"></script>
  <script>
    var input = document.querySelector("#phone_3");
    window.intlTelInput(input, {

      autoPlaceholder: "polite",

       hiddenInput: "phone",

       nationalMode: true,

       preferredCountries: ["ci", "fr"],
       separateDialCode: true,
      utilsScript: "/plugin/build/js/utils.js",
    });
  </script>


  <script src="/plugin/build/js/countrySelect.min.js"></script>
  <script>
    $("#country").countrySelect();

  </script>

  @endauth
