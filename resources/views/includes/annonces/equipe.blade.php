

<fieldset>
    <h2 class="fs-title">L'équipe</h2>
    <h3 class="fs-subtitle">Parlez-nous de votre équipe</h3>
    <div class="row">
        <div class="col-md-12 col-sm-12">
            <label for="fname">L'équipe</label>
            <textarea name="team_description" placeholder="Description">
                {{$annonce->team_description}}
            </textarea>
        </div>

        <div class="col-md-12 col-sm-12">
            <label for="fname">Membres de l'équipe</label>
            <div id="team_list" class="col-md-8 col-sm-12">
                @foreach($annonce->teams as $team)
                <div id="teammyTeam{{$team->id}}" class="chip">
                  <img src="/storage/images/users/{{$team->image}}" alt="{{$team->name}}" width="96" height="96">
                  {{$team->name}}
                  <span class="closebtn deleteTeam" id="{{$team->id}}">
                          <i class="far fa-trash-alt" style="font-size: 15px;"></i>
                </span>
                  <span class="pencil closebtn"><i data-toggle="modal" data-target="#modalmyTeam{{$team->id}}" class="fas fa-pencil-alt" style="font-size: 15px;"></i></span>
                </div>
                @endforeach
            </div>

        </div>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addTeamModal">
            Ajouter un membre de l'équipe
          </button>
    </div>

    <input type="button" name="previous" class="previous action-button-previous" value="Précédent" />
    <input type="button" name="next" class="next action-button" value="Suivant" />
</fieldset>
