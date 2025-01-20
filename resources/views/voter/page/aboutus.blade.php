@extends('voter.layout.master')
<title>About Us</title>
<link rel="stylesheet" href="{{ asset('assets/css/voter/aboutus.css') }}">
@section('content')

    <div class="container-fluid col-12 h1">
        <h1>About Us for Election</h1>
    </div>
    <div class="col-12 aboutus ">
        <div class="info">
            <h6>The Election Department is a division of the Clerk-Recorder’s department and is overseen by the Registrar of
                Voters. The staff of the Elections Department is responsible for all aspects of voting and elections,
                including:</h6>
            <ul>
                <li>Registering new voters, updating voter information, and maintaining the voter registration file</li>
                <li>Arranging for all polling locations and recruiting and training polling place workers</li>
                <li>Administering federal, state, and local elections held in Inyo County</li>
                <li>Working with candidates to assist them with the nomination processes, campaign reporting laws and
                    required legal documents</li>
            </ul>
            <hr>
        </div>
    </div>
    <div class="col-12 test">
        <div class="col-lg-6 information ">
            <div class="col-4 bg-white information123">
                <br>
                <h4>Office address</h4>
                <p>PO Box F168 N Edwards Street Independence CA, 93526</p>
                <hr>
                <br>
                <h4>Phone numbers</h4>
                <p>Phone: (760) 878-0224</p>
                <hr>
                <br>
                <h4>Email</h4>
                <p>menglongloveTAA@minister.interoir.gov</p>
                <hr>
                <br>
                <h4>Hours</h4>
                <p>Monday – Friday, Excluding Holidays</p>
                <p>8:30 am to 12:00 pm and 1:00 pm – 5:00</p>
                <hr>
            </div>
        </div>
        <div class="col-lg-6 contactus">
            <div class="contact contact">
                <div class="text">
                    Feedback
                </div>
                <form action="{{route('contact.post')}}" method="POST">
                    @csrf
                    <div class="form-row">
                        <div class="input-data">
                            <input type="text" value="{{auth()->user()->name}}" name="name">
                            <div class="underline"></div>
                            <label for="">Name</label>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="input-data">
                            <input type="text" value="{{auth()->user()->email}}" name="email">
                            <div class="underline"></div>
                            <label for="">Email</label>
                        </div>
                        <div class="form-row">
                            <div class="input-data textarea">
                                <textarea rows="8" cols="80" required name="description"></textarea>
                                <br />
                                <div class="underline"></div>
                                <label for="">Write your message</label>

                                <div class="form-row submit-btn">
                                    <div class="input-data">
                                        <div class="inner"></div>
                                        <input type="submit" value="submit">
                                    </div>
                                </div>
                            </div>
                        </div>
                </form>
            </div>
        </div>
    </div>
@stop
