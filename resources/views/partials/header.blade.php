<header class="page-header">
  <div class="container p-3">
    <div class="row justify-content-between">
      <div class="col-auto my-col-logo">
        <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="">
      </div>
      <div class="col-auto my-col-link">
        <ul class="list-group list-group-horizontal list-unstyled">
          <li class=" p-2">
            <a class="text-decoration-none" href="{{ route('home') }}">HOME</a>
          </li>
          <li class=" p-2">
            <a class="text-decoration-none" href="{{ route('comics') }}">COMICS</a>
          </li>
          <li class=" p-2">
            <a class="text-decoration-none" href="#">CHARACTERS</a>
          </li>
          <li class=" p-2">
            <a class="text-decoration-none" href="#">MOVIES</a>
          </li>
          <li class=" p-2">
            <a class="text-decoration-none" href="#">TV</a>
          </li>
          <li class=" p-2">
            <a class="text-decoration-none" href="#">GAMES</a>
          </li>
          <li class=" p-2">
            <a class="text-decoration-none" href="#">VIDEOS</a>
          </li>
          <li class=" p-2">
            <a class="text-decoration-none" href="#">FANS</a>
          </li>
          <li class=" p-2">
            <a class="text-decoration-none" href="#">NEWS</a>
          </li>
          <li class=" p-2">
            <div class="btn-group my-dropdown">
              <button type="button">SHOP</button>
              <button type="button" class="dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false" data-bs-reference="parent">
                <span class="visually-hidden">Toggle Dropdown</span>
              </button>
              <ul class="dropdown-menu my-dropdown-menu">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
                <li><a class="dropdown-item" href="#">Separated link</a></li>
              </ul>
            </div>
            <!-- <a class="text-decoration-none" href="#">SHOP</a> -->
          </li>
        </ul>
      </div>
      <div class="col-auto my-col-search">
        <input type="text" placeholder="Search">
        <i class="fa-solid fa-magnifying-glass"></i>
      </div>
    </div>
  </div>
</header>