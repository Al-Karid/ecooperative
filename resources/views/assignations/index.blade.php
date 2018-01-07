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
                    @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                    @endif

                    <div class="list-group" style="margin-bottom:0px!important">
                        @foreach($assignationss as $item)
                        <a href="#" class="list-group-item">
                            <span style="color:red">Planteur    :</span>
                        {{ $item['planteurs_id']['nom']}} 
                            <span class="pull-right"><i>{{  $item['created_at']  }}</i></span>
                            <br><span style="color:red">Acheteur:</span>
                        {{  $item['acheteurs_id']['nom']  }}
                        </a>  
                        @endforeach
                        
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection