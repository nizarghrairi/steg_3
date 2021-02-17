@extends('layouts.app')
@section('content')

    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex">
            <h6 class="m-0 font-weight-bold text-primary">Agent</h6>
            <div class="ml-auto">
                <a href="{{ route('admin.agent.create') }}" class="btn btn-primary">
                    <span class="icon text-white-50">
                        <i class="fa fa-plus"></i>
                    </span>
                    <span class="text">Ajouter un agent actif</span>
                </a>
            </div>
        </div>


        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Matricule</th>
                    <th>Nom</th>
                    <th>Prenom</th>
                    <th>CNRPS</th>
                    <th class="text-center" style="width: 30px;">Actions</th>
                </tr>
                </thead>
                <tbody>
                @forelse($agents as $agent)
                    <tr>
                        <td>{{ $agent->id }}</a></td>
                        <td>{{$agent->matricule}}</td>
                        <td>{{$agent->nom}}</td>
                        <td>{{$agent->prenom}}</td>
                        <td>{{$agent->cnrps}}</td>
                        <td>
                            <div class="btn-group float-left">
                                <a href="{{ route('admin.agent.edit', $agent->id) }}" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                                <a href="javascript:void(0)" onclick="if (confirm('Vous etez sur de vouloir supprime agent?') ) { document.getElementById('agent-delete-{{ $agent->id }}').submit(); } else { return false; }" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                                <form action="{{ route('admin.agent.destroy', $agent->id) }}" method="post" id="agent-delete-{{ $agent->id }}" style="display: none;">
                                    @csrf
                                    @method('DELETE')
                                </form>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="text-center">Aucun Agent</td>
                    </tr>
                @endforelse
                </tbody>

            </table>
        </div>
    </div>


@endsection
