
    <title>Pengui Bookworm</title>
    <nav class="navbar navbar-expand-md navbar-light fixed-top" style="background-color: #e3f2fd;">
    <div class="navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2">
    <div class="container-fluid">
      <a class="navbar-brand">
        <img src="../../images/pp5.png" alt="logo" style="width:40px;">
      </a>    
    <ul class="navbar-nav mr-auto">
    <a class="nav-link" aria-current="page" href="/">Home</a>
          </li>
          <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        About me
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="/pendidikan">Education Timeline</a>
        <a class="dropdown-item" href="/jadwalkuliah">Class Schedule</a>
        <a class="dropdown-item" href="/aktivitas">Activity</a>
      </div>
        </ul>
    </div>
    <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
        <ul class="navbar-nav ml-auto">
      @auth 
      </li>
    <a class="nav-link" aria-current="page" href="/bok">Book Data</a>
    <ul class="navbar-nav ml-auto">
    <li class="nav-item">
            <a class="nav-link" aria-current="page" href="#">Welcome back, {{ Auth::User()->nama_pengguna }} !</a>
          </li>
          <li class="nav-item">
          <form action="/logout" method="post">
              @csrf
              <button type="submit" class="btn btn-info btn-md"  onclick="return confirm('Are you sure to logout?');">Logout</button>
          </form>

          </li>
          
          </li>
</ul>
      @else

       
        <li class="nav-item">
              
        <a href="/logins" class="btn btn-info" role="button">Login</a>

          </li>
            <li class="nav-item">
            <a class="nav-link" aria-current="page" href="/registers">Register</a>
          </li>
      
         @endauth
        </ul>
    </div>
</nav>