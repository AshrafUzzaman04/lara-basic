<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <a class="nav-link @if (request()->path() == "/")
                    active fw-bold
                @endif" href={{ url('/') }}>Home</a>
            </li>
          <li class="nav-item">
            <a class="nav-link @if (request()->path() == "student")
                active fw-bold
            @endif" aria-current="page" href={{ url('student') }}>Student List</a>
          </li>
          <li class="nav-item">
            <a class="nav-link @if (request()->path() == "student/create")
                active fw-bold
            @endif" href={{url('student/create')}}>Add Student</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
