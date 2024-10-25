<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Relojes</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/custom.css">
    <style>
        body {
            background: linear-gradient(to bottom right, #f5f5dc, #d2b48c);
        }
        h1 {
            color: #6f4c3e;
            text-align: center;
            margin-bottom: 20px;
        }
        .btn-primary {
            background-color: #8b5a2b;
            border: none;
        }
        .btn-primary:hover {
            background-color: #a0522d;
        }
        .thead-dark {
            background-color: #5b3a29;
            color: white;
        }
        .table {
            background-color: #fff8e1;
        }
        .btn-warning {
            background-color: #d19a4b;
            border: none;
        }
        .btn-warning:hover {
            background-color: #f0ad4e;
        }
        .btn-danger {
            background-color: #c94c4c;
            border: none;
        }
        .btn-danger:hover {
            background-color: #e74c3c;
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
    <div class="container mt-4">
        <h1>Lista de Relojes</h1>

        <div class="d-flex justify-content-between mb-3">
            <a href="{{ route('relojes.create') }}" class="btn btn-primary">Añadir nuevo reloj</a>
            <a class="nav-link" href="/">Inicio</a>
        </div>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <table class="table table-striped">
            <thead class="thead-dark">
                <tr>
                    <th>Marca</th>
                    <th>Modelo</th>
                    <th>Material de la Correa</th>
                    <th>Resistencia al Agua (metros)</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($relojes as $reloj)
                    <tr>
                        <td>{{ $reloj->marca }}</td>
                        <td>{{ $reloj->modelo }}</td>
                        <td>{{ $reloj->material_correa }}</td>
                        <td>{{ $reloj->resistencia_agua }}</td>
                        <td>
                            <a href="{{ route('relojes.edit', $reloj->id) }}" class="btn btn-warning">Editar</a>
                            <form action="{{ route('relojes.destroy', $reloj->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        @if ($relojes->isEmpty())
            <div class="alert alert-info" role="alert">
                No hay relojes registrados en la lista.
            </div>
        @endif
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
