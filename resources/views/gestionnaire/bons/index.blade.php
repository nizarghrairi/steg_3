@extends('layouts.app')
@section('content')

    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex">
            <h6 class="m-0 font-weight-bold text-primary">Bon</h6>
            <div class="ml-auto">
                <a href="{{route('gest.bons.create')}}" class="btn btn-primary">
                    <span class="icon text-white-50">
                        <i class="fa fa-plus"></i>
                    </span>
                    <span class="text">Ajouter un Bon</span>
                </a>
            </div>
            <div class="ml-auto">
                <a href="{{route('gest.bons.print')}}" target=_blanck class="btn btn-info">
                    <span class="icon text-white-50">
                    </span>
                    <span class="text">IMPRIMER</span>
                </a>
            </div>
        </div>


        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th>N°Bon</th>
                    <th>Matricule</th>
                    <th>Nom</th>
                    <th>Prenom</th>
                    <th>CNRPS</th>
                    <th class="text-center" style="width: 30px;">Actions</th>
                </tr>
                </thead>
                <tbody>
                @forelse($bons as $bon)
                    <tr>
                        <td>{{ $bon->id }}</a></td>
                        <td>{{$bon->matricule}}</td>
                        <td>{{$bon->nom}}</td>
                        <td>{{$bon->prenom}}</td>
                        <td>{{$bon->cnrps}}</td>
                        <td>
                            <div class="btn-group float-left">
                                <a href="{{ route('gest.bons.edit', $bon->id) }}" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                                <a href="javascript:void(0)" onclick="if (confirm('Vous etez sur de vouloir supprime bon?') ) { document.getElementById('bon-delete-{{ $bon->id }}').submit(); } else { return false; }" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                                <form action="{{ route('gest.bons.destroy', $bon->id) }}" method="post" id="bon-delete-{{ $bon->id }}" style="display: none;">
                                    @csrf
                                    @method('DELETE')
                                </form>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="text-center">Aucun Bon</td>
                    </tr>
                @endforelse
                </tbody>
                <tfoot>
                <tr>
                    <td colspan="6">
                        <div class="float-right">
                            {!! $bons->links() !!}
                        </div>
                    </td>
                </tr>
                </tfoot>

            </table>
        </div>
    </div>


@endsection
