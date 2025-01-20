@extends('candidate.layout.master')
<title>Candidate Profile</title>
<link rel="stylesheet" href="{{ asset('candidate/css/profile.css') }}">
@section('header')
    <h4>Candidate Profile</h4>
@stop

@section('content')
    <div class="container-fluid">
        <div class="profile">
            <div class="head">
                @if ($user->profile)
                    <img src="{{ asset('/storage/profiles/' . $user->profile) }}" alt="">
                @else
                    <img src="" alt="no file">
                @endif
                <h2>{{ $user->name }}</h2>
            </div>

            <div class="detail">
                <p>Sex: <span>{{ $user->gender }}</span></p>
                <hr>
                <p>Age: <span>{{ $user->dob }}</span></p>
                <hr>
                <p>Email: <span>{{ $user->email }}</span></p>
                <hr>
                <p>{{ $user->description }}</p>
                <hr>
                <a href="{{ route('editprofile', $user->id) }}">Update Information</a>

            </div>
        </div>
    </div>
@stop
