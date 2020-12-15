@extends('layouts.app')
@section('content')

    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex">
            <h6 class="m-0 font-weight-bold text-primary">Agent</h6>
        </div>


        <div class="card-body">
            <form action="{{route('admin.agent.store')}}" method="post">
                {{csrf_field()}}
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <label for="matricule">Matricule</label>
                            <input type="text" class="form-control" name="matricule" id="matricule">
                            @error('matricule')<span class="help-block text-danger">{{$message}}</span>@enderror
                        </div>

                        <div class="form-group">
                            <label for="nom">Nom</label>
                            <input type="text" class="form-control" name="nom" id="nom">
                            @error('nom')<span class="help-block text-danger">{{$message}}</span>@enderror
                        </div>

                        <div class="form-group">
                            <label for="prenom">Prénomom</label>
                            <input type="text" class="form-control" name="prenom" id="prenom">
                            @error('prenom')<span class="help-block text-danger">{{$message}}</span>@enderror
                        </div>

                        <div class="form-group">
                            <label for="cnrps">ِCNRPS</label>
                            <input type="text" class="form-control" name="cnrps" id="cnrps">
                            @error('cnrps')<span class="help-block text-danger">{{$message}}</span>@enderror
                        </div>

                        <div class="form-group pt-4">
                            <button type="submit" name="save" class="btn btn-primary"> engistré </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>


@endsection
