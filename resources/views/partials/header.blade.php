<header class="page-header">
  <div class="container p-3">
    <div class="row justify-content-between">
      <div class="col-auto my-col-logo">
        <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="">
      </div>
      <div class="col-auto my-col-link">
        <ul class="list-group list-group-horizontal">
          <li class="list-unstyled p-2">
            <a class="text-decoration-none" href="{{ route('home') }}">HOME</a>
          </li>
          <li class="list-unstyled p-2">
            <a class="text-decoration-none" href="{{ route('comics') }}">COMICS</a>
          </li>
          <li class="list-unstyled p-2">
            <a class="text-decoration-none" href="#">MOVIES</a>
          </li>
          <li class="list-unstyled p-2">
            <a class="text-decoration-none" href="#">TV</a>
          </li>
          <li class="list-unstyled p-2">
            <a class="text-decoration-none" href="#">GAMES</a>
          </li>
          <li class="list-unstyled p-2">
            <a class="text-decoration-none" href="#">VIDEOS</a>
          </li>
          <li class="list-unstyled p-2">
            <a class="text-decoration-none" href="#">FANS</a>
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