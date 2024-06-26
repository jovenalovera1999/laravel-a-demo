<!-- ======= Mobile nav toggle button ======= -->
<i class="bi bi-list mobile-nav-toggle d-xl-none"></i>

<!-- ======= Header ======= -->
<header id="header">
    <div class="d-flex flex-column">
        <div class="profile">
            <h1 class="text-light mt-3">Demo App</h1>
            <img src="#" alt="" class="img-fluid rounded-circle bg-light">
            <h1 class="text-light">User Full Name</h1>
        </div>
        <!-- .nav-menu -->
        <nav id="navbar" class="nav-menu navbar">
            <ul>
                <li><a href="/users"><span>List of Users</span></a></li>
                <li><a href="/genders"><span>List of Genders</span></a></li>
                <li><a href="/user/create"><span>Add User</span></a></li>
                <li><a href="/gender/create"><span>Add Gender</span></a></li>


                <li><a href="/logout"><span>Logout</span></a></li>



                <form action="/process/logout" method="post">
                    @csrf
                    <button type="submit" class="btn btn-danger">Logout</button>
                </form>
            </ul>
        </nav>
    </div>
</header>
<!-- End Header -->