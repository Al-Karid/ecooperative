@extends('layouts.app') @section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Tableau de bord</div>

                <div class="panel-body">
                    @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                    @endif

                    <h3 style="margin:0px">Gestion</h3>
                    <hr style="margin-top:10px" />

                    <div class="btn-group btn-group-justified">
                        <a href="#" type="button" class="btn btn-default">Ajouter planteur</a>
                        <a href="#" type="button" class="btn btn-default">Ajouter acheteur</a>
                        <a href="#" type="button" class="btn btn-default">Ajouter produits</a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection