<nav class="navbar navbar-expand-md navbar-toggler bg-light sticky-top">
<a class="navbar-brand nav-link" href="{{route('articles.index')}}">LOGO</a>
    <ul class="nav nav-pills">
        <li class="nav-item">
        <a class="nav-link" href="{{route('articles.create')}}">Create</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Link2</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Link3</a>
        </li>
        <ul class=" navbar-nav mr-auto"></ul>
        <ul class=" navbar-nav mr-auto nabar-right">
        
        <li class="nav-item">
            <a href="{{route('logout')}}" class="btn btn-link"><i class="fa fa-user" aria-hidden="true"></i>Logout </a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">MORE</a>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="#">OP1</a>
                <a class="dropdown-item" href="#">OP2</a>
                <a class="dropdown-item" href="#">OP3</a>
            </div>
        </li>
    </ul>
    </ul>
</nav>
