@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
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
                            <th>Montant</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($bons as $bon)
                            <tr>
                                <td>{{ $bon->id }}</a></td>
                                <td>{{$bon->matricule}}</td>
                                <td>{{$bon->nom}}</td>
                                <td>{{$bon->prenom}}</td>
                                <td>{{$bon->montant}}</td>

                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="text-center">Aucun Bon</td>
                            </tr>
                        @endforelse
                        </tbody>

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
