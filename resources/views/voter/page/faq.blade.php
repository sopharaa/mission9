@extends('voter.layout.master')
<title>FAQ</title>
<link rel="stylesheet" href="{{ asset('assets/css/voter/faq.css') }}">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
@section('content')
<div class="container-fluid col-12 h1">
    <h3>Official American Elections Website. The best source is the direct source!</h3>
</div><br><br>
<div class="container faq">
    <h1>Frequently Asked Questions</h1>
    <hr>
    <div class="container">
    <div class="head">
        <i class="bi bi-patch-question-fill"></i>
        <h3>Registering to Vote</h3>
    </div>
    <div class="list">
        <h5>Do I need an ID to register online to vote?</h5>
        <p>All California residents who are eligible to vote may fill out a voter registration application online on the Secretary of State’s website. If you don’t have a California driver license or identification card number but you enter your other information, the website will create a voter registration application for you to print, sign, and mail.</p>

        <h5>I’ve moved. How do I change my address?</h5>
        <p>California residents must be registered to vote at least 15 days before Election Day. For this date and other important election deadlines, see our election calendar. If the registration deadline has passed for an upcoming election, you may visit the Inyo County Elections office at 168 N. Edwards Street, Independence CA 93526 to register and vote during the 14 days prior to, and including Election Day. You may also vote conditionally at any polling place on Election Day. This process is called Same Day Voter Registration.</p>
        <h5>When is the deadline to register to vote?</h5>
        <p>Voters can update their California residence address by re-registering online or by submitting a paper voter registration application.</p>

        <h5>How do I change my political party preference?</h5>
        <p>Voters can change their political party preference by re-registering online or by submitting a paper voter registration application.</p>
    </div>
    </div>
    <hr>
    <div class="container">
    <div class="head">
        <i class="bi bi-patch-question-fill"></i>
        <h3>What to Expect on Election Day</h3>
    </div>
    <div class="list">
        <h5>What do I need to bring with me?</h5>
        <p>You will need to bring your mailed ballot with you to surrender to a poll worker to receive an in-person ballot. In most cases, Inyo County voters are not required to show identification at their polling place. However, it is a good idea to bring identification with you when you vote for the first time. See the full list of acceptable forms of ID.</p>

        <h5>What are my rights as a voter?</h5>
        <p><ul>
                 <li>If the polls close while you’re still in line, stay in line – you have the right to vote.</li>
                 <li>If you make a mistake on your ballot, ask for a new one.</li>
                 <li>Voters are entitled to a provisional ballot, even if they aren’t in the poll book.</li>
                 <li>If you run into any problems or have questions on Election Day, call the Election Protection Hotline:
                    <ol>
                        <li>English: 1-866-OUR-VOTE / 1-866-687-8683</li>
                        <li>Spanish: 1-888-VE-Y-VOTA / 1-888-839-8682</li>
                        <li>Arabic: 1-844-YALLA-US / 1-844-925-5287</li>
                        <li>For Bengali, Cantonese, Hindi, Urdu, Korean, Mandarin, Tagalog, or Vietnamese: 1-888-274-8683</li>
                    </ol>
                 </li>
            </ul>
        </p>

        <h5>When will I know the Election Results?</h5>
        <p>Results from mailed ballots received by the elections office and processed prior to Election Day will be posted by 8:15 pm on election night. Results from all ballots cast in-person are expected to be posted by 1:00 am on Election Night. Ballots that were postmarked by Election Day, and received by the deadline, will be processed daily and added to the elections results daily starting the Wednesday after the election. Final results are expected to be certified by the Secretary of State 38 days after Election Day.</p>
    </div>
    </div>

    
    </div>
    
</div>
@stop