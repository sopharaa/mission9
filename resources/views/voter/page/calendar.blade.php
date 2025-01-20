@extends('voter.layout.master')
<title>Calendar</title>
<link rel="stylesheet" href="{{ asset('assets/css/voter/calendar.css') }}">
@section('content')

<script>
// Set the date and time of the event (year, month (0-indexed), day, hour, minute)
const eventDate = new Date(2024, 6, 6, 18, 30); // Example: July 6, 2024, 6:30 PM

// Function to update the countdown
function updateCountdown() {
    const currentDate = new Date();
    const timeDifference = eventDate - currentDate;

    // Calculate the remaining time
    const days = Math.floor(timeDifference / (1000 * 60 * 60 * 24));
    const hours = Math.floor((timeDifference % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    const minutes = Math.floor((timeDifference % (1000 * 60 * 60)) / (1000 * 60));
    const seconds = Math.floor((timeDifference % (1000 * 60)) / 1000);

    // Display the countdown
    document.getElementById("countdown").innerHTML = `${days} days`;
    document.getElementById("countdown1").innerHTML = `${hours} hours, ${minutes} minutes, ${seconds} seconds`;

    // If the event has passed, display a message
    if (timeDifference < 0) {
        document.getElementById("countdown").innerHTML = "The event has already passed.";
    }
}

// Update the countdown every second
setInterval(updateCountdown, 1000);
</script>
<div class="container calendar">
<h1>Election Calendars</h1>
<hr>
<p id="countdown"></p>
<p id="countdown1"></p>
<h2> Election – November 5, 2024</h2>
</div>

@stop
