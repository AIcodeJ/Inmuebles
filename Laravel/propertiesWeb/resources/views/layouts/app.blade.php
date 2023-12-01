<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <title>Properties Menu</title>
</head>
<body>
    <header>
        Properties | Project
    </header>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="/">Inicio</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('properties.index') }}">Properties</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('buyers.index') }}">Buyers</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('expedients.index') }}">Expedients</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('personals.index') }}">Personals</a>
                </li>
            </ul>
        </div>
    </nav>

    <div>
        @yield('content')
    </div>

    <footer>
        Project Web
    </footer>
</body>
</html>