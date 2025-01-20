<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon" href="{{ asset('assets/image/voter/7201157.jpg') }}">
    <!-- link bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- link icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="{{ asset('assets/css/voter/index.css') }}">
    <title>Home</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body>
    <!-- section home -->
    <section id="home" class="home">
        <!-- navbar  -->
        <nav class="navbar navbar-expand-lg navbar-light">
            @include('voter.layout.navbar')
        </nav>
        <!-- hero -->
        <div class="hero">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 hero-text">
                        <!-- Content here -->
                    </div>
                </div>
            </div>

        </div>

    </section>
    <section>
    <div class="hero1">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-12 hero1-text">

                                <span class="fw-bold" id="loy">The United State of Election</span>

                            <h4 class="lead text-secondary">Make America Great Again</h4>
                            <a href="http://127.0.0.1:8000/voting" class="btn ">
                                <span class="text-light fw-bold">Vote Now</span>
                            </a>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12 hero1-img mt-lg-0 mt-5 flag">
                            <img src="{{ asset('assets/image/voter/7201157.png') }}" alt="hero" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <!-- section product -->
    <section class="product" id="products">
        <div class="container">
            <div class="row product-list">

            </div>
        </div>
    </section>
    <section class="service" id="service"></section>
    <section class="contact" id="contact"></section>
    <footer class="container-fluid-flex flex-column h-100 w-100 py-4 flex-shrink-0">
    <div class="container py-4">
            <div class="row gy-4 gx-5">
                <div class="col-lg-4 col-md-6 footer1">
                    <h5 class="h1 text-white mb-3">Official Election</h5>
                    <p class="small text-muted-white">The American election is a democratic process where citizens vote to elect representatives, including the President, members of Congress, and local officials.</p>
                    <p class="small text-muted-white mb-0">&copy; Copyrights. All rights reserved. <a class="text-white" href="#">USAElection.gov.us</a></p>
                </div>
                <div class="col-lg-2 col-md-6 footer2">
                    <h5 class="text-white mb-3">Quick links</h5>
                    <ul class="list-unstyled text-muted-link">
                        <li><a href="http://127.0.0.1:8000">Home</a></li><br>
                        <li><a href="http://127.0.0.1:8000/can">Candidate</a></li><br>
                        <li><a href="#">Voting</a></li><br>
                        <li><a href="http://127.0.0.1:8000/FAQ">FAQ</a></li><br>
                        <li><a href="http://127.0.0.1:8000/aboutus">About Us</a></li><br>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 footer4">
                    <h5 class="text-white mb-3">Contact</h5>
                    <p class="small text-muted-white">(855) 878-0224</p>
                    <p class="small text-muted-white">(855) 878-1805 fax</p>
                    <p class="small text-muted-white">Email: menglongloveTAA@minister.interoir.gov</p>

                </div>
                <div class="col-lg-3 col-md-6 footer4">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1162.0237564405497!2d104.89838314706401!3d11.582906784814712!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3109517bf7757d23%3A0x965c34888684bf1!2sParagon%20International%20University!5e0!3m2!1sen!2skh!4v1716464765626!5m2!1sen!2skh" width="300" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer -->
    <script src="{{ asset('assets/js/voter/index.js') }}"></script>
    <script src="https://unpkg.com/scrollreveal"></script>
</body>
</html>
