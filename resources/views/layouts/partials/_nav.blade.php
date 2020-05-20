<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('root_path') }}">Laracarte</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample03" aria-controls="navbarsExample03" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

      <div class="collapse navbar-collapse" id="navbarsExample03">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="{{ route('root_path') }}">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="{{ route('about_path') }}">About <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="#">Artisans <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dropdown03" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Planet</a>
            <div class="dropdown-menu" aria-labelledby="dropdown03">
              <a class="dropdown-item" href="#">Laravel.com</a>
              <a class="dropdown-item" href="#">Laravel.io</a>
              <a class="dropdown-item" href="#">Laracasts</a>
              <a class="dropdown-item" href="#">Larajobs</a>
              <a class="dropdown-item" href="#">Laravel News</a>
              <a class="dropdown-item" href="#">Larachat</a>
            </div>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="#">Contact <span class="sr-only">(current)</span></a>
          </li>
        </ul>
        <ul class="navbar-nav my-md-2">
            <li class="nav-item">
                <a class="nav-link" href="#">Login <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Register <span class="sr-only">(current)</span></a>
            </li>
        </ul>
      </div>
    </div>
</nav>


