@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        @foreach ($trains as $train)
        <div class="card">
            <h1 class="train-company">{{$train->company}}</h1>
            <div class="station-row">
                <div>From: {{$train->departure_station}}</div>
                <div>To: {{$train->arrival_station}}</div>
            </div>

            <div class="train-date">train departure date: <span>{{$train->departure_date}}</span></div>

            <div class="time-row">
                <div>departure time: {{$train->departure_time}}</div>
                <div>arrival time: {{$train->arrival_time}}</div>
            </div>

            <div class="details-row">
                <div>Train code: {{$train->train_code}}</div>
                <div>Ticket Price: {{$train->price}} &euro;</div>
                <div>Carriage Number: {{$train->carriage}}</div>
            </div>
        </div>
        @endforeach
    </div>
</div>
    
@endsection