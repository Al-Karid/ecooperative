@extends('layouts.app') @section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Tableau de bord</div>

                <div class="panel-body">

                    <div class="btn-group btn-group-justified">
                        <a href="/assignations" class="btn btn-default">
                            <span class="glyphicon glyphicon-" aria-hidden="true">Liste</span>
                        </a>
                        <a href="/assignations/create" class="btn btn-default">
                            <span class="glyphicon glyphicon-" aria-hidden="true">Ajouter</span>
                        </a>
                    </div>

                    <h3>Liste des assignations</h3>
                    <hr/>
                    @if ($errors->any())
                    <div class="alert alert-warning">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif 

                    {!! Form::open(['url' => '/assignations', 'method'=>'post']) !!}
                        <div class="row">
                            <div class="form-group col col-md-12">
                                {{ Form::label('Planteur') }}
                                {{ Form::select('planteurs_id', $planteurs, null, ['class'=>'form-control']) }}
                            </div>
                            <div class="form-group col col-md-12">
                                {{ Form::label('Acheteur') }}
                                {{ Form::select('acheteurs_id', $acheteurs, null, ['class'=>'form-control']) }}
                            </div>
                            <div class="form-group col col-md-3 pull-right">
                                <input type="submit" class="btn btn-default pull-right" value="Enregistrer">
                            </div>
                        </div>
                    {!! Form::close() !!}

                </div>
            </div>
        </div>
    </div>
</div>
@endsection