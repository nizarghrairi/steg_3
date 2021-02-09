@extends('layouts.app')
@section('content')

    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex">
            <h6 class="m-0 font-weight-bold text-primary">Agent</h6>
        </div>
        <div class="card-body">
            <form action="{{route('admin.agent.update',$agent->id)}}" method="post" class="form">
                @csrf
                @method('PATCH')
                <div class="row justify-content-md-center">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="matricule">Matricule</label>
                            <input type="text" class="form-control" name="matricule" value="{{old('matricule',$agent->matricule)}}">
                            @error('matricule')<span class="help-block text-danger">{{$message}}</span>@enderror
                        </div>

                        <div class="form-group">
                            <label for="nom">Nom</label>
                            <input type="text" class="form-control" name="nom" value="{{old('nom',$agent->nom)}}">
                            @error('nom')<span class="help-block text-danger">{{$message}}</span>@enderror
                        </div>

                        <div class="form-group">
                            <label for="prenom">Prénom</label>
                            <input type="text" class="form-control" name="prenom" value="{{old('prenom',$agent->prenom)}}">
                            @error('prenom')<span class="help-block text-danger">{{$message}}</span>@enderror
                        </div>

                        <div class="form-group">
                            <label for="cnrps">ِCNRPS</label>
                            <input type="text" class="form-control" name="cnrps" value="{{old('cnrps',$agent->cnrps)}}">
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
