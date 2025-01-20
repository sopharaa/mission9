<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="{{ asset('assets/css/voter/register.css') }}">
</head>

<body>
    <form action="{{ route('register') }}" method="POST">
        @csrf <!-- Username -->
        <h1>Register Election</h1>
        <div class="username-section">
            <label for="Name">Name</label>
        </div>
        <div class="name-section">
            <input type="text" id="Name" name="name" placeholder="Name">
        </div>
        <div class="name-section">
            <label>Gender:</label>
            <input type="radio" id="male" name="gender" value="male">
            <label for="male">Male</label>
            <input type="radio" id="female" name="gender" value="female">
            <label for="female">Female</label>
        </div>

        <label for="date">Date of Birth:</label>
        <input type="date" id="date" name="dob">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" placeholder="Email address">
        <label for="id">National ID</label>
        <input type="id" id="id" name="nationalId" placeholder="National ID">
        <!-- Password -->
        <div class="username-section">
            <label for="password">Password</label>
        </div>
        <div class="name-section">
            <input type="password" name="password" placeholder="Create password">
        </div>
        <div class="checkbox-container">
            <label for="terms"><a href="{{route('login')}}">already has account</a></label>
        </div>
        <button type="submit">Create Account</button>
    </form>
    </div>
</body>

</html>
