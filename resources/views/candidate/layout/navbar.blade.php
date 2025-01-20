<nav class="nav">
    <div> <a href="#" class="nav_logo"> <i class='bx bx-layer nav_logo-icon'></i> <span
                class="nav_logo-name">Candidate Election</span> </a>
        <div class="nav_list">
            <a href="http://127.0.0.1:8000/candidate/index" class="nav_link active"> <i
                    class='bx bx-grid-alt nav_icon'></i> <span class="nav_name">Home</span> </a>
            <a href="http://127.0.0.1:8000/candidate/description" class="nav_link"> <i class='bx bx-user nav_icon'></i>
                <span class="nav_name">Description</span> </a>
            <a href="http://127.0.0.1:8000/candidate/result" class="nav_link"> <i class='bx bx-folder nav_icon'></i>
                <span class="nav_name">Result Tracking</span> </a>
            <a href="{{route('can.profile')}}" class="nav_link"> <i
                    class='bx bx-bar-chart-alt-2 nav_icon'></i> <span class="nav_name">Profile</span> </a>
        </div>
    </div> <a href="http://127.0.0.1:8000/candidate/login" class="nav_link"> <i class='bx bx-log-out nav_icon'></i>
        <span class="nav_name">SignOut</span> </a>
</nav>
