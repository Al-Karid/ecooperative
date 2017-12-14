@extends('layouts.app') @section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Tableau de bord</div>

                <div class="panel-body">

                    <h3 style="margin:0px">Gestion</h3>
                    <hr style="margin-top:10px" />

                    <div class="btn-group btn-group-justified">
                        <a href="/gestion/p1" type="button" class="btn btn-default">Ajouter produits</a>
                        <a href="/gestion/p2" type="button" class="btn btn-default">Ajouter planteur</a>
                        <a href="/gestion/a" type="button" class="btn btn-default">Ajouter acheteur</a>
                    </div>
                    @if($p == "p1")
                    <hr/>
                    <h4>Ajouter un nouveau
                        <span style="color:blue">produit</span>
                    </h4>
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
                    @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                    @endif
                    {!! Form::open(['url' => '/produits', 'method' => 'post']) !!}
                        <div class="row">
                            <div class="form-group col col-md-12">
                                {{ Form::label('nom du produits') }} 
                                {{ Form::text('libelle',null, ['class'=>'form-control', 'placeholder'=>'ex. Cacao'])}} 
                            </div>
                            <div class="form-group col col-md-12">
                                {{ Form::label('prix unitaire') }} 
                                {{ Form::text('prixu',null, ['class'=>'form-control', 'placeholder'=>'ex. 725'])}} 
                            </div>
                            <div class="form-group col col-md-3 pull-right">
                                <input type="submit" class="btn btn-default pull-right" value="Enregistrer">
                            </div>
                        </div>
                    {!! Form::close() !!}
                    @elseif($p=="a")

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
                    @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                    @endif
                    <h4>Ajouter un nouvel
                        <span style="color:blue">acheteur</span>
                    </h4>
                    <hr/>
                    {!! Form::open(['url' => '/acheteurs', 'method' => 'post']) !!}
                        <div class="row">
                            <div class="form-group col col-md-12">
                                {{ Form::label('nom complet') }} 
                                {{ Form::text('nom',null, ['class'=>'form-control', 'placeholder'=>'ex. Kouassi Josef'])}} 
                            </div>
                            <div class="form-group col col-md-12">
                                {{ Form::label('téléphone') }} 
                                {{ Form::text('tel',null, ['class'=>'form-control', 'placeholder'=>'ex. 41235695'])}} 
                            </div>
                            <div class="form-group col col-md-12">
                                {{ Form::label('email') }} 
                                {{ Form::email('email',null, ['class'=>'form-control', 'placeholder'=>'ex. uncompte@domaine.com'])}} 
                            </div>
                            <div class="form-group col col-md-3 pull-right">
                                <input type="submit" class="btn btn-default pull-right" value="Enregistrer">
                            </div>
                        </div>
                    {!! Form::close() !!}
                    @elseif($p=="p2")
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
                    @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                    @endif
                    <h4>Ajouter un nouveau
                        <span style="color:blue">planteur</span>
                    </h4>
                    <hr/>
                    {!! Form::open(['url' => '/planteurs', 'method' => 'post']) !!}
                        <div class="row">
                            <div class="form-group col col-md-12">
                                {{ Form::label('nom complet') }} 
                                {{ Form::text('nom',null, ['class'=>'form-control', 'placeholder'=>'ex. Kouassi Josef'])}} 
                            </div>
                            <div class="form-group col col-md-12">
                                {{ Form::label('téléphone') }} 
                                {{ Form::text('tel',null, ['class'=>'form-control', 'placeholder'=>'ex. 41235695'])}} 
                            </div>
                            <div class="form-group col col-md-12">
                                {{ Form::label('localite') }} 
                                {{ Form::text('localite',null, ['class'=>'form-control', 'placeholder'=>'ex. N\'Douci'])}} 
                            </div>
                            <div class="form-group col col-md-3 pull-right">
                                <input type="submit" class="btn btn-default pull-right" value="Enregistrer">
                            </div>
                        </div>
                    {!! Form::close() !!}
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection