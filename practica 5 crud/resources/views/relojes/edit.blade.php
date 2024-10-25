<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Reloj</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background: linear-gradient(to bottom right, #f5f5dc, #d2b48c);
        }
        h1 {
            color: #6f4c3e;
        }
        .btn-primary {
            background-color: #8b5a2b;
            border: none;
        }
        .btn-primary:hover {
            background-color: #a0522d;
        }
        .alert {
            background-color: #e7d6a8;
            color: #4c4c4c;
        }
        .nav-link {
            color: #6f4c3e;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="{{ url('/') }}">Mi Aplicación</a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('index') }}">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('news') }}">Noticias</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('portfolio') }}">Portafolio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('relojes.index') }}">Relojes</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container mt-4">
        <h1>Editar Reloj</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('relojes.update', $reloj->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="marca">Marca:</label>
                <input type="text" class="form-control" id="marca" name="marca" value="{{ $reloj->marca }}" required>
            </div>
            <div class="form-group">
                <label for="modelo">Modelo:</label>
                <input type="text" class="form-control" id="modelo" name="modelo" value="{{ $reloj->modelo }}" required>
            </div>
            <div class="form-group">
                <label for="material_correa">Material de la Correa:</label>
                <input type="text" class="form-control" id="material_correa" name="material_correa" value="{{ $reloj->material_correa }}" required>
            </div>
            <div class="form-group">
                <label for="resistencia_agua">Resistencia al Agua (metros):</label>
                <input type="number" class="form-control" id="resistencia_agua" name="resistencia_agua" value="{{ $reloj->resistencia_agua }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Actualizar Reloj</button>
            <a href="{{ route('relojes.index') }}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
