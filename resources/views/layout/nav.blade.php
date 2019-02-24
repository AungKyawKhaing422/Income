<div class="container mt-3 mb-2">
    <nav class="navbar navbar-expand-lg navbar-light bg-dark">
        <a class="navbar-brand text-white" href="{{url('/')}}">INCOME</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link text-white" href="{{url('/home')}}">Home <span
                                class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{url('/category')}}">show</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Category
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{url('/category/create')}}">Create</a>
                        <a class="dropdown-item" href="#">update</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Delete</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Member
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{url('/login')}}">Login</a>
                        <a class="dropdown-item" href="{{url("logout")}}">Logout</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Register</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
</div>
