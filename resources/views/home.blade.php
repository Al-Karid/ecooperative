@extends('layouts.app') @section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Tableau de bord</div>

                <div class="panel-body">

                    <div class="btn-group btn-group-justified">
                        <a href="/assignations" class="btn btn-default">
                            <span class="glyphicon glyphicon-" aria-hidden="true">Assignations</span>
                        </a>
                        <a href="/membres" class="btn btn-default">
                            <span class="glyphicon glyphicon-" aria-hidden="true">Membres</span>
                        </a>
                        <a href="/gestion/p1" class="btn btn-default">
                            <span class="glyphicon glyphicon-" aria-hidden="true">Gestion</span>
                        </a>
                    </div>

                    <h3>Vue d'ensemble</h3>
                    <hr/>

                    <h6>Ventes recentes</h6>
                    <div class="list-group" style="margin-bottom:0px!important">
                        <a href="#" class="list-group-item">vide</a>
                        {{--  <a href="#" class="list-group-item">Item 2</a>  --}}
                        {{--  <a href="#" class="list-group-item">Item 3</a>  --}}
                    </div>
                    <h6>Assignations recentes</h6>
                    <div class="list-group" style="margin-bottom:0px!important">
                        @foreach($assignationss->slice(1,3) as $item)
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