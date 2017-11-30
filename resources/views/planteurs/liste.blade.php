@extends('layouts.app')
{{--  <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href=" {{ asset('css/app.css')}} ">
    <title>Liste des producteurs</title>
</head>

<body>  --}}
@section('content')
    
    <div class="container">
        <div class="row">
            <div class="col col-md-12">
                <h3>Liste des producteurs</h3>
                <hr>
            </div>
            @foreach($planteurs as $p)
            <div class="col col-md-4">

                <div class="alert alert-warning">
                    <strong>
                        <p class="text-primary"> {{$p['nom']}} {{$p['prenom']}} </p>
                    </strong>
                    <br/> {{$p['tel']}}
                </div>

            </div>
            @endforeach
        </div>
    </div>
@endsection
{{--  </body>

</html>  --}}