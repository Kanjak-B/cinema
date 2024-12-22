<nav class="navbar bg-body-tertiary shadow fixed-top">
    <div class="container">
      <a class="navbar-brand" style="font-size: 30px" href="/">Ciné<strong class="text-danger">Star</strong></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Ciné<strong class="text-danger">Star</strong></h5>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
          <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('films.index') }}">Listes des films</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('films.create') }}">Publier un film</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Billets payés</a>
            </li>
          </ul>
          <form class="d-flex mt-3" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
        </div>
        <ul class="justify-content-end pe-3 mt-auto">
          <li class="nav-item">
            By <strong>Kanjak | Breniacs</strong><strong class="text-danger" style="font-size: 16px">Laboratory</strong>
          </li>
        </ul>
      </div>
    </div>
</nav>