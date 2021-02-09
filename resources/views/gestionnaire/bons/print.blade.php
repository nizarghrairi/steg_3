@extends('layouts.print')

@section('content')
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="card">
                <div class="card-header d-flex">
                    <h2> Etat des bons medicaux</h2>
                    <br>
                    <h2>STEG/UF</h2>
                </div>
                <div class="card-body">
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
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
        window.print();
    </script>
@endsection
