<!-- Sidebar Start -->
<div class="sidebar pe-4 pb-3">
    <nav class="navbar bg-light navbar-light">
        <a href="index.html" class="navbar-brand mx-4 mb-3">
            <h3 class="text-primary"><i class="fa fa-hashtag me-2"></i>DASHMIN</h3>
        </a>
        <div class="d-flex align-items-center ms-4 mb-4">
            <div class="position-relative">
                <img class="rounded-circle" src="{{asset('imgs/cafe-cup-logo-vector-36667967.webp')}}" alt="" style="width: 100px; height: 100px;">
                <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
            </div>

        </div>
        <div class="navbar-nav w-100">
            <a href="index.html" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>Elements</a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a href="button.html" class="dropdown-item">Marcas</a>
                    <a href="typography.html" class="dropdown-item">Tipos</a>
                    <a href="element.html" class="dropdown-item">Tipo Licencia</a>
                    <a href="element.html" class="dropdown-item">Capacidad</a>
                    <a href="element.html" class="dropdown-item">Puesto "docente ,chofer,admin"</a>
                    <a href="element.html" class="dropdown-item">Status</a>
                </div>
            </div>
            <a href="widget.html" class="nav-item nav-link"><i class="fa fa-th me-2"></i>Widgets</a>
            <a href="{{Route('trabajadores.index')}}" class="nav-item nav-link"><i class="fa fa-keyboard me-2"></i>Trabajadores</a>


            <a href="{{Route('automoviles.index')}}" class="nav-item nav-link"><i class="fa fa-keyboard me-2"></i>Automoviles</a>
            <a href="{{Route('usuarios')}}" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Usuarios</a>
            <a href="chart.html" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i>Charts</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="far fa-file-alt me-2"></i>Pages</a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a href="signin.html" class="dropdown-item">Sign In</a>
                    <a href="signup.html" class="dropdown-item">Sign Up</a>
                    <a href="404.html" class="dropdown-item">404 Error</a>
                    <a href="blank.html" class="dropdown-item">Blank Page</a>
                </div>
            </div>
        </div>
    </nav>
</div>
<!-- Sidebar End -->
