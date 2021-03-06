@extends('layouts.app')
@section('style')
    <!-- style for form data&time-->
    <link rel="stylesheet" href="{{asset('css/pickadate/classic.css')}}">
    <link rel="stylesheet" href="{{asset('css/pickadate/classic.date.css')}}">
    <link rel="stylesheet" href="{{asset('css/pickadate/classic.time.css')}}">
@endsection
@section('content')

    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex">
            <h6 class="m-0 font-weight-bold text-primary">Bon</h6>
        </div>


        <div class="card-body">
            <form action="{{route('gest.bons.update', $bon->id)}}" method="post" class="form">
                @csrf
                @method('PATCH')
                <div class="row justify-content-md-center">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="n_engistrement">N°Engistrement</label>
                            <input type="number" class="form-control" value="{{old('n_engistrement',$bon->n_engistrement)}}" name="n_engistrement" id="n_engistrement">
                            @error('n_engistrement')<span class="help-block text-danger">{{$message}}</span>@enderror
                        </div>
                    </div>
                </div>
                <div class="row justify-content-md-center">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="matricule">Matricule</label>
                            <input type="number" class="form-control" value="{{old('matricule',$bon->matricule)}}" name="matricule" id="matricule">
                            @error('matricule')<span class="help-block text-danger">{{$message}}</span>@enderror
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="cnrps">ِCNRPS</label>
                            <input type="number" class="form-control" value="{{old('cnrps',$bon->cnrps)}}" name="cnrps" id="cnrps">
                            @error('cnrps')<span class="help-block text-danger">{{$message}}</span>@enderror
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="nom">Nom</label>
                            <input type="text" class="form-control" value="{{old('nom',$bon->nom)}}" name="nom" id="nom">
                            @error('nom')<span class="help-block text-danger">{{$message}}</span>@enderror
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="prenom">Prénom</label>
                            <input type="text" class="form-control" value="{{old('prenom',$bon->prenom)}}" name="prenom" id="prenom">
                            @error('prenom')<span class="help-block text-danger">{{$message}}</span>@enderror
                        </div>
                    </div>
                </div>
                <div class="row justify-content">
                    <div class="col-md-4 offset-1">
                        <div class="form-group">
                            <label for="n_bon">N°bon</label>
                            <input type="number" class="form-control" value="{{old('n_bon',$bon->n_bon)}}" name="n_bon" id="n_bon">
                            @error('n_bon')<span class="help-block text-danger">{{$message}}</span>@enderror
                        </div>
                    </div>
                    <div class="col-md-3 offset-1">
                        <div class="form-group">
                            <label for="date">Date</label>
                            <input type="date" name="date" value="{{old('date',$bon->date)}}" class="form-control pickdate">
                            @error('date')<span class="help-block text-danger">{{$message}}</span>@enderror
                        </div>
                    </div>
                </div>
                <div class="row justify-content">
                    <div class="col-md-4 offset-1">
                        <div class="form-group">
                            <label for="uf">UF</label>
                            <select class="form-control" name="uf" value="{{old('uf',$bon->uf)}}" id="uf">
                                <option value=""></option>
                                <option value="DIRECTION DES AFFAIRES GENERALES">DIRECTION DES AFFAIRES GENERALES</option>
                                <option value="DIRECTION DES RESOURCES HUMAINES ET JURIDIQUE">DIRECTION DES RESOURCES HUMAINES ET JURIDIQUE</option>
                                <option value="DIRECTION DE LA DISTRIBUTION">DIRECTION DE LA DISTRIBUTION</option>
                                <option value="DIRECTION DE PRODUCTION ET TRANSPORT DE L'ELECTRICITE">DIRECTION DE PRODUCTION ET TRANSPORT DE L'ELECTRICITE</option>
                                <option value="DIRECTION DE MAITRISE DE LA TECHNOLOGIE">DIRECTION DE MAITRISE DE LA TECHNOLOGIE</option>
                                <option value="DIRECTION DU GAZ">DIRECTION DU GAZ</option>
                                <option value="DIRECTION DES AFFAIRES FINANCIERES">DIRECTION DES AFFAIRES FINANCIERES</option>
                                <option value="DIRECTION DES ETUDES ET DE LA PLANIFICATION">DIRECTION DES ETUDES ET DE LA PLANIFICATION</option>
                                <option value="DIRECTION DE L'EQUIPEMENT">DIRECTION DE L'EQUIPEMENT</option>
                                <option value="DIRECTION DE L'INFORMATIQUE">DIRECTION DE L'INFORMATIQUE</option>
                                <option value="DIRECTION D'ORGANISATION ET SYSTEME D'INFORMATION">DIRECTION D'ORGANISATION ET SYSTEME D'INFORMATION</option>
                                <option value="DIRECTION DE CONTROLE DE GESTION">DIRECTION DE CONTROLE DE GESTION</option>
                                <option value="DIRECTION AUDIT">DIRECTION AUDIT</option>
                                <option value="DIRECTION COMMERCIAL">DIRECTION COMMERCIAL</option>
                            </select>
                            @error('uf')<span class="help-block text-danger">{{$message}}</span>@enderror
                        </div>
                    </div>
                    <div class="col-md-4 offset-1">
                        <div class="form-group">
                            <label for="filiere">Cote par Agent</label>
                            <input type="text" class="form-control" value="{{old('cote_par_agent',$bon->cote_par_agent)}}" name="filiere" id="filiere">
                            @error('filiere')<span class="help-block text-danger">{{$message}}</span>@enderror
                        </div>
                    </div>
                </div>
                <div class="row justify-content">
                    <div class="col-md-4 offset-1">
                        <div class="form-group">
                            <label for="type_talon">Type Acte</label>
                            <select class="form-control"id="type_acte" value="{{old('type_acte',$bon->type_acte)}}" name="type_acte">
                                <option value=""></option>
                                <option value="medicament">Médicament</option>
                                <option value="kiné">Kiné</option>
                                <option value="rx">Rx</option>
                                <option value="biologie">Biologie</option>
                                <option value="acte_medical">Acte Médical</option>
                            </select>
                            @error('type_talon')<span class="help-block text-danger">{{$message}}</span>@enderror
                        </div>
                    </div>
                    <div class="col-md-4 offset-1">
                        <div class="form-group">
                            <label for="montant">CV/CE</label>
                            <input type="number" class="form-control" value="{{old('cv_ce',$bon->cv_ce)}}" name="cv_ce" id="cv_ce">
                            @error('cv_ce')<span class="help-block text-danger">{{$message}}</span>@enderror
                        </div>
                    </div>
                </div>
                <div class="row justify-content">
                    <div class="col-md-4 offset-1">
                        <div class="form-group">
                            <label for="montant">Montant</label>
                            <input type="number" class="form-control" value="{{old('montant',$bon->montant)}}" name="montant" id="montant">
                            @error('montant')<span class="help-block text-danger">{{$message}}</span>@enderror
                        </div>
                    </div>
                </div>

                <div class="form-group pt-4">
                    <button type="submit" name="save" class="btn btn-primary"> Engistré </button>
                </div>
            </form>
        </div>
    </div>
@endsection
@section('script')
    <!-- Jquery for form-validation-->
    <script src="{{asset('js/form_validation/jquery.form.js')}}"></script>
    <script src="{{asset('js/form_validation/jquery.validate.min.js')}}"></script>
    <script src="{{asset('js/form_validation/additional-methods.min.js')}}"></script>

    <!-- jquary for form data&time-->
    <script src="{{asset('js/pickadate/picker.js')}}"></script>
    <script src="{{asset('js/pickadate/picker.date.js')}}"></script>
    <script src="{{asset('js/pickadate/picker.time.js')}}"></script>

    <script>
        $(document).ready(function () {
            $('.pickdate').pickadate({
                format: 'yyyy-mm-dd',
                selectMonth:true,
                selectYear:true,
                clear:'clear',
                close:'OK',
                closeOnSelect:true
            })
        });
        $('form').validate({
            rules:{
                'matricule'         : {required:true, digits:true},
                'cnrps'             : {required:true, digits:true,  minlength:8, maxlength:13},
                'nom'               :{required:true},
                'prenom'            :{required:true},
                'n_bon'             :{required:true, digits: true},
                'date'              :{required:true},
                'uf'                :{required:true},
                'cote_par_agent'    :{required:true},
                'type_acte'         :{required:true},
                'cv_ce'             :{required:true},
                'montant'           :{required:true},
            },
            submitHandler: function (form) {
                form.submit();
            }
        })

    </script>

@stop
