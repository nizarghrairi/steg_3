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
            <form action="{{route('admin.agent_fiche.store')}}" method="post" class="form">
                {{--{{csrf_field()}}--}}
                @csrf
                <div class="row justify-content-md-center">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="matricule">Matricule</label>
                            <input type="number" class="form-control" placeholder="{{Request::old('matricule')}}" name="matricule" id="matricule">
                            @error('matricule')<span class="help-block text-danger">{{$message}}</span>@enderror
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="cnrps">ِCNRPS</label>
                            <input type="number" class="form-control" placeholder="{{Request::old('cnrps')}}" name="cnrps" id="cnrps">
                            @error('cnrps')<span class="help-block text-danger">{{$message}}</span>@enderror
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="nom">Nom</label>
                            <input type="text" class="form-control" placeholder="{{Request::old('nom')}}" name="nom" id="nom">
                            @error('nom')<span class="help-block text-danger">{{$message}}</span>@enderror
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="prenom">Prénom</label>
                            <input type="text" class="form-control" placeholder="{{Request::old('prenom')}}" name="prenom" id="prenom">
                            @error('prenom')<span class="help-block text-danger">{{$message}}</span>@enderror
                        </div>
                    </div>
                </div>
                <div class="row justify-content">
                    <div class="col-md-4 offset-1">
                        <div class="form-group">
                            <label for="n_bon">N°bon</label>
                            <input type="number" class="form-control" placeholder="{{Request::old('n_bon')}}" name="n_bon" id="n_bon">
                            @error('n_bon')<span class="help-block text-danger">{{$message}}</span>@enderror
                        </div>
                    </div>
                    <div class="col-md-3 offset-1">
                        <div class="form-group">
                            <label for="date">Date</label>
                            <input type="date" name="date" placeholder="{{Request::old('date')}}" class="form-control pickdate">
                            @error('date')<span class="help-block text-danger">{{$message}}</span>@enderror
                        </div>
                    </div>
                </div>
                <div class="row justify-content">
                    <div class="col-md-4 offset-1">
                        <div class="form-group">
                            <label for="uf">UF</label>
                            <input type="text" class="form-control" placeholder="{{Request::old('uf')}}" name="uf" id="uf">
                            @error('uf')<span class="help-block text-danger">{{$message}}</span>@enderror
                        </div>
                    </div>
                    <div class="col-md-4 offset-1">
                        <div class="form-group">
                            <label for="filiere">Filière</label>
                            <input type="text" class="form-control" placeholder="{{Request::old('filiere')}}" name="filiere" id="filiere">
                            @error('filiere')<span class="help-block text-danger">{{$message}}</span>@enderror
                        </div>
                    </div>
                </div>
                <div class="row justify-content">
                    <div class="col-md-4 offset-1">
                        <div class="form-group">
                            <label for="type_talon">Type Talon</label>
                            <input type="text" class="form-control" placeholder="{{Request::old('type_talon')}}" name="type_talon" id="type_talon">
                            @error('type_talon')<span class="help-block text-danger">{{$message}}</span>@enderror
                        </div>
                    </div>
                    <div class="col-md-4 offset-1">
                        <div class="form-group">
                            <label for="montant">Montant</label>
                            <input type="number" class="form-control" placeholder="{{Request::old('montant')}}" name="montant" id="montant">
                            @error('montant')<span class="help-block text-danger">{{$message}}</span>@enderror
                        </div>
                    </div>
                </div>

                <div class="form-group pt-4">
                    <button type="submit" name="save" class="btn btn-primary"> engistré </button>
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
                'matricule'   : {required:true, digits:true},
                'cnrps'       : {required:true, digits:true,  minlength:8, maxlength:13},
                'nom'         :{required:true},
                'prenom'      :{required:true},
                'n_bon'       :{required:true, digits: true},
                'date'        :{required:true},
                'uf'          :{required:true},
                'filiere'     :{required:true},
                'type_talon'  :{required:true},
                'montant'     :{required:true},
            },
            submitHandler: function (form) {
                form.submit();
            }
        })

    </script>

@stop
