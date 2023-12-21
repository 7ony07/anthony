@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1 class="m-0 text-dark">Dashboard</h1>
@stop

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">¡Hola, coqueto! ¡Hay que chambear!</h3>
                </div>
                <div class="card-body">
                    <p>Puedes buscar trabajo como contador u cualquier otra cosa que desees ser. ¡Mejor si eliges ser contador! ;)</p>
                </div>
                <div class="card-footer">
                    <a href="#" class="btn btn-primary">Ver historial</a>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">¡Calculadora!</h3>
                </div>
                <div class="card-body">
                    <p>Esta página está diseñada para ayudarte con tus cálculos. ¡No te compliques tanto, lokita! :)
                    calculadora de prestamos</p>
                </div>
                <div class="card-footer">
                    <a href="#" class="btn btn-info">Ir a la calculadora</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">¡Hola, coqueto! ¡Hay que chambear!</h3>
                </div>
                <div class="card-body">
                    <p>Puedes buscar trabajo como contador u cualquier otra cosa que desees ser. ¡Mejor si eliges ser contador! ;)</p>
                </div>
                <div class="card-footer">
                    <a href="#" class="btn btn-primary">Ver historial</a>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">¡Calculadora!</h3>
                </div>
                <div class="card-body">
                    <p>Esta página está diseñada para ayudarte con tus cálculos. ¡No te compliques tanto, lokita! :)
                    calculadora de pensiones y capitalizaciones</p>
                </div>
                <div class="card-footer">
                    <a href="#" class="btn btn-info">Ir a la calculadora</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">¡Hola, coqueto! ¡Hay que chambear!</h3>
                </div>
                <div class="card-body">
                    <p>Puedes buscar trabajo como contador u cualquier otra cosa que desees ser. ¡Mejor si eliges ser contador! ;)
                    </p>
                </div>
                <div class="card-footer">
                    <a href="#" class="btn btn-primary">Ver historial</a>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">¡Calculadora!</h3>
                </div>
                <div class="card-body">
                    <p>Esta página está diseñada para ayudarte con tus cálculos. ¡No te compliques tanto, lokita! :)
                    calculadora de interes compuesto</p>
                </div>
                <div class="card-footer">
                    <a href="#" class="btn btn-info">Ir a la calculadora</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">¡Hola, coqueto! ¡Hay que chambear!</h3>
                </div>
                <div class="card-body">
                    <p>Puedes buscar trabajo como contador u cualquier otra cosa que desees ser. ¡Mejor si eliges ser contador! ;)</p>
                </div>
                <div class="card-footer">
                    <a href="#" class="btn btn-primary">Ver historial</a>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">¡Calculadora!</h3>
                </div>
                <div class="card-body">
                    <p>Esta página está diseñada para ayudarte con tus cálculos. ¡No te compliques tanto, lokita! :)
                    calculadora de interes simple</p>
                </div>
                <div class="card-footer">
                    <a href="#" class="btn btn-info">Ir a la calculadora</a>
                </div>
            </div>
        </div>
    </div>
</div>
@stop 

@section('css')
    <link rel="stylesheet" href="{{ asset('css/admin_custom.css') }}">
@stop

@section('js')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script>
        Swal.fire({
            title: "¡Buen trabajo, chico!",
            text: "¡Hiciste clic en el botón!",
            icon: "success"
        });
        
    </script>
@stop
