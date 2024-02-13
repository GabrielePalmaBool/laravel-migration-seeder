@extends('layouts.main-layout')
@section('head')
    <title>Home</title>
@endsection
@section('content')
    
    <table class="trains">
        
        <tr>
            <th>Nome Azienda</th>
            <th>stazione di partenza</th>
            <th>stazione di arrivo</th>
            <th>orario di partenza</th>
            <th>orario di arrivo</th>
            <th>codice treno</th>
            <th>numero carrozze</th>
            <th>in orario</th>
            <th>cancellato</th>
        </tr>

        @foreach ( $trains as $train)

            <tr>
                <td>{{$train -> azienda}}</td>
                <td>{{$train -> stazione_partenza}}</td>
                <td>{{$train -> stazione_arrivo}}</td>
                <td>{{$train -> orario_partenza}}</td>
                <td>{{$train -> orario_arrivo}}</td>
                <td>{{$train -> codice_treno}}</td>
                <td>{{$train -> num_carrozze}}</td>
                <td>{{$train -> in_orario}}</td>
                <td>{{$train -> cancellato}}</td>
            </tr>
           

        @endforeach
    </table>
@endsection
