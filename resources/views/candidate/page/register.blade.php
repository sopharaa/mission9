<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Candidate Register</title>
    <link rel="stylesheet" href="{{ asset('candidate/css/register.css') }}">
</head>
<body>
<form>
       @csrf     <!-- Username -->
       <h1>Become Candidate</h1>
            <div class="username-section">
                <label for="Name">Name</label>
            </div>
            <div class="name-section">
                <input type="text" id="Name" name="Name" placeholder="Name">
            </div>
            <div class="name-section">
            <label>Gender:</label>
            <input type="radio" id="male" name="gender" value="male">
            <label for="male">Male</label>
            <input type="radio" id="female" name="gender" value="female">
            <label for="female">Female</label>
            </div>
            
            <label for="date">Date of Birth:</label>
            <input type="date" id="date" name="date">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="Email address">
            <!-- Password -->
            <div class="username-section">
                <label for="password">Password</label>  
            </div>
            <div class="username-section">
                <label for="confirmPassword">Confirm Password</label>
            </div>
            <div class="name-section">
                <input type="password" id="password" name="password" placeholder="Create password">
                <input type="password" id="confirmPassword" name="confirmPassword" placeholder="Confirm password">
            </div>
            <div class="username-section">
                <label for="profile">Profile</label>
            </div>
            <div class="name-section">
                <input type="file" id="profile" name="profile" placeholder="Profile">
            </div>
            <div class="username-section">
                <label for="description">Description</label>
            </div>
            <div class="name-section">
                <input type="" id="description" name="description" placeholder="write your goal" min="0" max="500" >
            </div>
            <div class="checkbox-container">
                <input type="checkbox" id="terms" name="terms">
                <label for="terms">Agree with all of our Terms & Conditions</label>
            </div>
            <div class="checkbox-container">
                <label for="terms"><a href="http://127.0.0.1:8000/candidate/login">already has account</a></label>
            </div>
            <button type="submit">Create Account</button>
        </form>
    </div>
</body>
</html>