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
            {{--<div class="ml-auto">
                <a href="#" class="btn btn-info">
                    <span class="icon text-white-50">
                    </span>
                    <span class="text">IMPRIMER</span>
                </a>
            </div>--}}
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
                @forelse($fiche_agents as $fiche_agent)
                    <tr>
                        <td>{{$fiche_agent->id }}</a></td>
                        <td>{{$fiche_agent->matricule}}</td>
                        <td>{{$fiche_agent->nom}}</td>
                        <td>{{$fiche_agent->prenom}}</td>
                        <td>{{$fiche_agent->n_bon}}</td>
                        <td>{{$fiche_agent->montant}}</td>
                        <td>
                            <div class="btn-group float-left">
                                <a href="{{route('admin.agent_fiche.edit', $fiche_agent->id)}}" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                                <a href="javascript:void(0)" onclick="if (confirm('Vous etez sur de vouloir supprime la fiche agents?') ) { document.getElementById('bon-delete-{{ $fiche_agent->id }}').submit(); } else { return false; }" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                                <form action="{{ route('admin.agent_fiche.destroy', $fiche_agent->id) }}" method="post" id="bon-delete-{{ $fiche_agent->id }}" style="display: none;">
                                    @csrf
                                    @method('DELETE')
                                </form>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="text-center">Aucune fiche d'agent</td>
                    </tr>
                @endforelse
                </tbody>

            </table>
        </div>
    </div>


@endsection
