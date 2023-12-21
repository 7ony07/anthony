<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Activo Guardado</title>
    <!-- Agrega los enlaces a los estilos de Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="row">
        <div class="col-md-8">
            <h2>Activo Guardado</h2>
            <p class="mt-3">
                <a href="{{ route('activo.crear') }}" class="btn btn-primary">Volver al Formulario</a>
            </p>
        </div>
        <div class="col-md-4 text-right">
            <p class="mt-3">
                <a href="{{ route('home') }}" class="btn btn-secondary">Volver al Inicio</a>
            </p>
        </div>
    </div>
</div>

<!-- Agrega los scripts de Bootstrap -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>
</html>

