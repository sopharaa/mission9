@extends('candidate.layout.master')
<title>Candidate Home</title>
<link rel="stylesheet" href="{{ asset('candidate/css/index.css') }}">
@section('header')
<h4>Home</h4>
@stop

@section('content')
<div class="container-fluid">
    <div class="intro">
        <h1>Welcome Candidate</h1>
        <p>Introducing a passionate advocate for our community and a proven leader ready to make a difference. With years of experience in public service, they have consistently demonstrated a commitment to improving the lives of our citizens through thoughtful policy and dedicated action. Their platform focuses on enhancing education, advancing healthcare, and fostering economic growth, all while ensuring sustainability and equity. This candidate embodies the values of integrity, innovation, and inclusivity, and is determined to address the challenges we face with practical solutions and visionary leadership. Let's come together to support this remarkable individual and work towards a brighter future for all.</p>
    </div>
    <div class="image">
        <img src="{{asset('candidate/image/lady.png')}}" alt="">
    </div>
</div>
@stop