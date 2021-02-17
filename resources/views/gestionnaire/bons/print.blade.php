@extends('layouts.print')
@section('style')
    <style>
        table, th, td {
            border: 1px solid black;
        }
    </style>
@endsection
@section('content')
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 style='text-align:center;margin-bottom:20px'>ETAT DES BONS MEDICAUX</h3>
                    <h3 style='text-align:center;margin-bottom:20px'>STEG / UF</h3>
                </div>
                <div class="card-body">
                    @foreach($bons->groupBy('uf') as $bonsByUF)
                        <h3>UF : {{$bonsByUF[0]['uf'] }}</h3>
                        <div class="table-responsive">
                            <table class="table table-hover">
                            <thead class="thead-dark">
                                <tr>
                                    <th width="20%">N°Bon</th>
                                    <th width="20%">Matricule</th>
                                    <th width="20%">Nom</th>
                                    <th width="20%">Prenom</th>
                                    <th width="20%">Montant</th>
                                </tr>
                            </thead>
                            <tbody>
                            @forelse($bonsByUF as $bon)
                                <tr>
                                    <td style='text-align:center'>{{$bon->n_bon}}</td>
                                    <td>{{$bon->matricule}}</td>
                                    <td>{{$bon->nom}}</td>
                                    <td>{{$bon->prenom}}</td>
                                    <td style='text-align:right'>{{$bon->montant}}</td>

                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5" class="text-center">Aucun Bon</td>
                                </tr>
                            @endforelse
                            </tbody>
                        </table>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
                <?php
                    $editDate = date("d/m/Y");
                ?>
                <div style="text-align:center;bottom:100px;position:absolute">
                    <p>Edité le {{$editDate}}</p>
                    <p>Par Mr {{ Auth::user()->name }} </p>
                </div>
    </div>
@endsection
@section('script')
    <script>
        window.print();
    </script>
@endsection
