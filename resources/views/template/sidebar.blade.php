<!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="index.html">Start Bootstrap</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Home">
          <a class="nav-link" href="{{ url('/') }}">
            <i class="fa fa-fw fa-dashboard"></i>
            <span class="nav-link-text">Home</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Siwa">
          <a class="nav-link" href="{{ route('siswa.index') }}">
            <i class="fa fa-fw fa-area-chart"></i>
            <span class="nav-link-text">Siswa</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="About" color>
          <a class="nav-link" href="{{ url('about') }}">
            <i class="fa fa-fw fa-table"></i>
            <span class="nav-link-text">About</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="About" color>
          <a class="nav-link" href="{{ url('logout') }}">
            <i class="fa fa-fw fa-table"></i>
            <span class="nav-link-text">Logout</span>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
         
        <li class="nav-item">
            <label style="color:white">{{ Auth::user()->name }} - {{ Auth::user()->level }}</label>
        </li>
      </ul>
    </div>
  </nav>