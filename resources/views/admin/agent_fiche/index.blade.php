@extends('layouts.app')
@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex">
            <h6 class="m-0 font-weight-bold text-primary">Fiche Agents</h6>
            @can('manage-users')
            <div class="ml-auto">
                <a href="{{ route('admin.agent_fiche.create') }}" class="btn btn-primary">
                    <span class="icon text-white-50">
                        <i class="fa fa-plus"></i>
                    </span>
                    <span class="text">Ajouter une fiche Agent</span>
                </a>
            </div>
            <div class="ml-auto">
                <a href="#" class="btn btn-info">
                    <span class="icon text-white-50">
                    </span>
                    <span class="text">IMPRIMER</span>
                </a>
            </div>
            @endcan
        </div>
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Matricule</th>
                    <th>Nom</th>
                    <th>Prenom</th>
                    <th>N°Bon</th>
                    <th>Montant</th>
                    <th class="text-center" style="width: 30px;">Actions</th>
                </tr>
                </thead>
                <tbody>
                @forelse($agent_fiches as $agent_fiche)
                    <tr>
                        <td>{{$agent_fiche->id }}</a></td>
                        <td>{{$agent_fiche->matricule}}</td>
                        <td>{{$agent_fiche->nom}}</td>
                        <td>{{$agent_fiche->prenom}}</td>
                        <td>{{$agent_fiche->n_bon}}</td>
                        <td>{{$agent_fiche->montant}}</td>
                        <td>
                            <div class="btn-group float-left">
                                <a href="{{route('admin.agent_fiche.edit', $agent_fiche->id)}}" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                                <a href="javascript:void(0)" onclick="if (confirm('Vous etez sur de vouloir supprime le bon?') ) { document.getElementById('bon-delete-{{ $agent_fiche->id }}').submit(); } else { return false; }" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                                <form action="{{ route('admin.agent_fiche.destroy', $agent_fiche->id) }}" method="post" id="bon-delete-{{ $agent_fiche->id }}" style="display: none;">
                                    @csrf
                                    @method('DELETE')
                                </form>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="text-center">Aucun bon</td>
                    </tr>
                @endforelse
                </tbody>

            </table>
        </div>
    </div>


@endsection
