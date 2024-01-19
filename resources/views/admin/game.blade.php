@extends('layouts.base-new')
@section('body')
    <div class="row">
        <div class="col-4">
            <form action="" method="post" class="row g-3">
                @csrf
                <div class="col-4">
                    <label for="name" class="form-label">Catégorie:</label>
                    <select class="form-select" name="categoryID">
                        @foreach ($categories as $category)
                            {{-- @if (isset($game->categoryID) && $category->categoryID == $game->categoryID)
                            <option value="{{ $category->categoryID }}" selected>{{ $category->name }}</option>;
                        @else --}}
                            <option value="{{ $category->categoryID }}">{{ $category->name }}</option>;
                            {{-- @endif --}}
                        @endforeach
                        {{-- 
    
                    foreach($categoryService->GetAll() as $category ){
                         if(isset($game->categoryID) && $category->categoryID == $game->categoryID) 
                         echo '<option value="'.$category->categoryID.'" selected>'.$category->name.'</option>';
                        else
                            echo '<option value="'.$category->categoryID.'" >'.$category->name.'</option>';
                    }
                 --}}
                    </select>
                </div>
                <div class="w-100"></div>
                <div class="col-4">
                    <label for="name" class="form-label">Date de la rencontre:</label>
                    <input type="date" name="date" required="required" class="form-control"
                        value="<?php if (isset($game->date)) {
                            echo $game->date;
                        } ?>" />
                </div>
                <div class="col-3">
                    <label for="name" class="form-label">Heure de la rencontre:</label>
                    <input type="time" name="time" required="required" class="form-control" min="9:00"
                        step="300" max="22:00" value="<?php if (isset($game->time)) {
                            echo $game->time;
                        } ?>" />
                </div>
                {{-- <div class="w-100"></div> --}}
                <div class="col-5">
                    <label for="location" class="form-label">Lieu:</label>
                    <input type="text" name="location" required="required" class="form-control"
                        value="<?php if (isset($game->location)) {
                            echo $game->location;
                        } ?>" />
                </div>
                <div class="w-100"></div>
                {{-- <div class="col-4">
                    <label for="name" class="form-label">&nbsp;</label>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="1" name="isExterior">
                        <label class="form-check-label" for="flexCheckDefault">
                            A l'extérieur ?
                        </label>
                    </div>
                </div> --}}
                <div class="w-100"></div>
                <div class="col-6">
                    <label for="name" class="form-label">Recevant:</label>
                    <select class="form-select" name="receivingTeamID">
                        @foreach ($teams as $team)
                            @if ($team->teamID == 12)
                                <option value="{{ $team->teamID }}" selected>{{ $team->name }}</option>';
                            @else
                                <option value="{{ $team->teamID }}">{{ $team->name }}</option>';
                            @endif
                        @endforeach
                    </select>
                </div>
                {{-- <div class="w-100"></div> --}}
                <div class="col-6">
                    <label for="name" class="form-label">Visiteur:</label>
                    <select class="form-select" name="visitorTeamID">

                        @foreach ($teams as $team)
                            @if ($team->teamID == 12)
                                <option value="{{ $team->teamID }}" selected>{{ $team->name }}</option>';
                            @else
                                <option value="{{ $team->teamID }}">{{ $team->name }}</option>';
                            @endif
                        @endforeach

                    </select>
                </div>
                <div class="w-100"></div>
                <div class="col-8">
                    {{-- 
                if(isset($_GET['action']) && $_GET['action'] == "update"){
                    echo '<button class="btn btn-outline-danger" type="submit">Modifier</button>'; 
                }
                else {
                    echo '<button class="btn btn-outline-danger" type="submit">Ajouter</button>';
                }
                
                echo ' <a href="game.php" class="btn btn-outline-danger" type="submit">Vider</a>';
             --}}
                </div>
                
                <div class="col-6 text-end">
                <button class="btn btn-outline-danger" type="submit">Ajouter</button>
                </div>
                <div class="col-6 text-end">
                    <a href="index.php" class="btn btn-outline-danger">Retour</a>
                </div>
            </form>
        </div>
        <div class="col-6">
            <h2>Liste des matchs à venir</h2>
        </div>
    </div>


    </section>

    <!-- Modal -->
    <div class="modal fade" id="delete-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Supprimer le match</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Voulez-vous supprimer le match ?
                </div>
                <div class="modal-footer">
                    <a href="game.php?id=1&action=delete" class="btn btn-outline-danger" id="link-delete">Supprimer</a>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                </div>
            </div>
        </div>
    </div>
@endsection()
@section('script')
    <script>
        $(function() {
            $("#contact").addClass('active');
        });
    </script>
@endsection()
