<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Activo</title>
    <!-- Agrega los enlaces a los estilos de Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body style="background-color: #f8f9fa;">

<div class="container mt-5">
    <div class="row">
        <div class="col-md-8">
            <form method="POST" action="{{ route('activo.guardar') }}" class="p-4" style="background-color: #ffffff; border-radius: 10px; box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);">
                @csrf
                <h2 class="text-center mb-4" style="color: #007bff;">Formulario Activo</h2>
                <div class="form-group">
                    <label for="nombre" style="color: #343a40;">Nombre:</label>
                    <input type="text" name="nombre" id="nombre" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="edad" style="color: #343a40;">Edad:</label>
                    <input type="number" name="edad" id="edad" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="correo" style="color: #343a40;">Correo:</label>
                    <input type="email" name="correo" id="correo" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="telefono" style="color: #343a40;">Teléfono:</label>
                    <input type="tel" name="telefono" id="telefono" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-primary btn-block" style="background-color: #007bff;">Enviar</button>
            </form>
        </div>
        <div class="col-md-4">
            <div class="p-4" style="background-color: #ffffff; border-radius: 10px; box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);">
                <h4 class="mb-3">Opciones</h4>
                <p><a href="{{ route('home') }}" class="btn btn-secondary btn-block">Volver al Inicio</a></p>
            </div>
        </div>
    </div>
</div>

<!-- Agrega los scripts de Bootstrap -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>
</html>

