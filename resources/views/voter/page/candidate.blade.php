@extends('voter.layout.master')
<title>Candidate Information</title>
<link rel="stylesheet" href="{{ asset('assets/css/voter/candidate.css') }}">
@section('content')
    <div class="container-fluid col-12 h1">
        <h3>Official American Elections Website. The best source is the direct source!</h3>
    </div><br><br>
    <div class="container candidate">
        <h1>Candidate and Campaign Information:</h1>
        <div class="col-12 information">
            @foreach ($candidates as $candidate)
                <div class="col-6 candidate2">
                    <div class="col-3 col-md-12 col-sm-12 box">
                        <img src="{{asset('/storage/profiles/'.$candidate->profile)}}" alt="">
                    </div>
                    <div class="col-3 col-md-12 col-sm-12 decription ">
                        <p><span>{{$candidate->name}}</span> {{$candidate->description}}</p>
                    </div>
                </div>
            @endforeach
        </div>
    @stop
