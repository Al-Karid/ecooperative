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
                        <a href="/gestion/p1" type="button" class="btn btn-default">Ajouter produits</a>
                        <a href="/gestion/p2" type="button" class="btn btn-default">Ajouter planteur</a>
                        <a href="/gestion/a" type="button" class="btn btn-default">Ajouter acheteur</a>
                    </div>
                    @if($p == "p1")
                    <hr/>
                    <h4>Ajouter un nouveau
                        <span style="color:blue">produit</span>
                    </h4>
                    <hr/> @if ($errors->any())
                    <div class="alert alert-warning">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                    @endif @endif {{--
                    <form action="/produits" method="post"> --}} {!! Form::open(['url' => '/produits', 'method' => 'post']) !!}
                        <div class="row">
                            <div class="form-group col col-md-12">
                                {{ Form::label('nom du produits') }} {{ Form::text('libelle',null, ['class'=>'form-control', 'placeholder'=>'ex. Cacao'])
                                }} {{--
                                <input type="text" class="form-control" id="name"
                                    placeholder="nom du produit" required> --}}
                            </div>
                            <div class="form-group col col-md-12">
                                {{ Form::label('prix unitaire (FCFA)') }} {{ Form::text('prixu',null, ['class'=>'form-control', 'placeholder'=>'ex. 775'])
                                }} {{--
                                <input type="number" class="form-control" id="unit"
                                    placeholder="prix unitaire" required> --}}
                            </div>
                            <div class="form-group col col-md-3 pull-right">
                                <input type="submit" class="btn btn-default pull-right" value="Enregistrer">
                            </div>
                        </div>
                        {!! Form::close() !!} {{-- </form> --}} @elseif($p=="a")

                    <hr/>
                    <h4>Ajouter un nouveau
                        <span style="color:blue">acheteur</span>
                    </h4>
                    <hr/>
                    <form action="" method="post">
                        <div class="row">
                            <div class="form-group col col-md-12">
                                <input type="text" class="form-control" id="" placeholder="nom complet" required>
                            </div>
                            <div class="form-group col col-md-12">
                                <input type="tel" class="form-control" id="" placeholder="telephone" required>
                            </div>
                            <div class="form-group col col-md-12">
                                <input type="email" class="form-control" id="" placeholder="email">
                            </div>
                            <div class="form-group col col-md-3 pull-right">
                                <input type="submit" class="btn btn-default pull-right" value="Enregistrer">
                            </div>
                        </div>
                    </form>
                    @elseif($p=="p2")
                    <hr/>
                    <h4>Ajouter un nouveau
                        <span style="color:blue">planteur</span>
                    </h4>
                    <hr/>
                    <form action="" method="post">
                        <div class="row">
                            <div class="form-group col col-md-12">
                                <input type="text" class="form-control" id="" placeholder="nom complet" required>
                            </div>
                            <div class="form-group col col-md-12">
                                <input type="tel" class="form-control" id="" placeholder="telephone" required>
                            </div>
                            <div class="form-group col col-md-12">
                                <input type="text" class="form-control" id="" placeholder="localite">
                            </div>
                            <div class="form-group col col-md-3 pull-right">
                                <input type="submit" class="btn btn-default pull-right" value="Enregistrer">
                            </div>
                        </div>
                    </form>
                    @endif

                </div>
            </div>
        </div>
    </div>
</div>
@endsection