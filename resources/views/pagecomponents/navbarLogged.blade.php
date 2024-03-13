<!-- header section strats -->
<header class="header_section">
    <div class="container-fluid">
      <nav class="navbar navbar-expand-lg custom_nav-container ">
        <a class="navbar-brand" href="/">
          <span>
            Pizza Amore
          </span>
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class=""> </span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav  ">
            <li class="nav-item ">
              <a class="nav-link" href="/Logged">Home </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/aboutLogged"> About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/menuLogged">Menu</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                <form id="logout-form" action={{ route('logout') }} method="POST" style="display: none">@csrf</form>
              </li>
            <li class="nav-item">
              <a class="btn btn-outline-dark" href="{{ route('cart') }}"> <i class="fa fa-shopping-cart" aria-hidden="true"></i> Cart <span class="badge bg-danger">{{ count((array) session('cart')) }}</span></a>
            </li>
            <form class="form-inline">
              <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit">
                <i class="fa fa-search" aria-hidden="true"></i>
              </button>
            </form>
          </ul>
        </div>
      </nav>
    </div>
  </header>
  <!-- end header section -->

  <!-- <span class="sr-only">(current)</span>-->
