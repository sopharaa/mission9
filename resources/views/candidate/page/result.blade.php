@extends('candidate.layout.master')
<title>Checking Result</title>
<link rel="stylesheet" href="{{ asset('candidate/css/result.css') }}">
@section('header')
<h4>Checking Result</h4>
@stop

@section('content')
<table>
          <thead>
            <tr>
              <th >Candidate</th>
              <th >Amount</th>
              <th>Other</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td >30</td>
              <td >25000</td>
              <td >50%</td>
              <td ><form action="">
                @csrf
                    <a href="http://127.0.0.1:8000/candidate/result"><input type="submit" value="Refresh"></a>
              </form></td>
            </tr>

          </tbody>
        </table>
@stop
