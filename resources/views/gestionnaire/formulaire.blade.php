@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row mt-4">
            <div class="col-md-8 offset-2">
                <form>
                    <div class="form-group">
                        <label for="">Numero Engistrement </label>
                        <input type="text" placeholder="(Nouv)">
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2" for="exampleFormControlSelect1">UFA</label>
                        <select class="form-control col-sm-2 offset-1" id="exampleFormControlSelect1">
                            <option> </option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                        </select>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3">Numéro Bordereau</label>
                        <input class="col-sm-5 " type="text" placeholder="">
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3">N°Piéce Reglement</label>
                        <input class="col-sm-5" type="text" placeholder="">
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3" for="exampleFormControlSelect1">Prestataire Services</label>
                        <select class="form-control col-sm-5" id="exampleFormControlSelect1">
                            <option> </option>
                            <option>1</option>
                            <option>2</option>
                        </select>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3" for="exampleFormControlSelect1">Matricule Agent</label>
                        <select class="form-control col-sm-5" id="exampleFormControlSelect1">
                            <option> </option>
                            <option>1</option>
                            <option>2</option>
                        </select>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3">Nom Agent</label>
                        <input class="col-sm-5 " type="text" placeholder="">
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3">Prénom Agent</label>
                        <input class="col-sm-5" type="text" placeholder="">
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2">CNRPS Agent</label>
                        <input class="col-sm-2" type="text" placeholder="">
                        <label class="col-sm-2">Filiére</label>
                        <input class="col-sm-2" type="text" placeholder="">
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3" for="exampleFormControlSelect1">Type Acte</label>
                        <select class="form-control col-sm-5" id="exampleFormControlSelect1">
                            <option>Médicament</option>
                            <option>Opération</option>
                            <option>Traitementmedical</option>
                        </select>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3" for="exampleFormControlSelect1">CV/CE</label>
                        <select class="form-control col-sm-5" id="exampleFormControlSelect1">
                            <option> </option>
                            <option>1</option>
                            <option>2</option>
                        </select>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3">Document Médical</label>
                        <input class="col-sm-5" type="text" placeholder="">
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3">Date Soin</label>
                        <input class="col-sm-5" type="text" placeholder="">
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3">Prénom Agent</label>
                        <input class="col-sm-5" type="text" placeholder="">
                    </div>

                </form>
            </div>
        </div>
    </div>

@endsection

