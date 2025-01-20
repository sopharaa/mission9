@extends('candidate.layout.master')
<title>Description</title>
<link rel="stylesheet" href="{{ asset('candidate/css/desc.css') }}">
@section('header')
<h4>Description</h4>
@stop

@section('content')
<table>
          <thead>
            <tr>
              <th colspan="3">Description</th>
              <th colspan="2">Action</th>
              
            </tr>
          </thead>
          <tbody>
            <tr>
              <td colspan="3" >Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum mollitia inventore eveniet blanditiis necessitatibus, molestias error libero qui in commodi, quae eos eius eligendi! Sunt quisquam quas unde praesentium excepturi. Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit esse eveniet soluta quaerat sunt. Eveniet harum, officiis, cupiditate nihil qui beatae quam veritatis ducimus doloribus, non vitae quia commodi nobis!</td>
              <td colspan="2"><form action="">
                @csrf
                    <a href="http://127.0.0.1:8000/candidate/result"><input type="submit" value="Update"></a>
              </form></td>
            </tr>
            
            </tr>
          </tbody>
        </table>
@stop