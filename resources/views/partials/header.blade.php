<header>
    <nav class="navbar navbar-expand-lg bg-body-tertiary shadow-sm mb-5">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('admin.projects.index') }}">All Projects</a>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.projects.create') }}">Add a new Projects</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                </li>
            </ul>
        </div>
    </nav>
</header>
