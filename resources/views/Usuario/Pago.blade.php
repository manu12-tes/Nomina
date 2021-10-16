<html>
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
    </head>
    <body>
        <h1 class="title has-text-primary" >CONFIRMAR PAGO</h1>
        
        <form action="{{url('pago')}}" method="post">
        @csrf
        <div class="columns">
            <div class="column">
                <h3 class="subtitle has-background-primary">Datos del empleado: </h3>
                <label for="nombre">Nombre:</label>
                <input class="input is-small" type="text" id="nombre" value="" readonly>
                <label for="apellidoP">Apellido Paterno:</label>
                <input class="input is-small" type="text" id="apellidoP"value="" readonly>
                <label for="apellidoM">Apellido Materno:</label>
                <input class="input is-small" type="text" id="apellidoM" value="" readonly>
                <label for="sexo">Sexo: </label>
                <input class="input is-small" type="text" id="sexo" id="sexo" value=""  readonly>
        
                <label for="nss">NSS: </label>
                <input class="input is-small" type="text" id="nss" value="" readonly>
                <label for="rfc">RFC: </label>
                <input class="input is-small" type="text" id="rfc" value="" readonly>
                <label for="contratacion">Fecha de Contratación:</label>
                <input class="input is-small" type="text" id="contratacion" value="" readonly>
                <label for="puesto">Puesto: </label>
                <input class="input is-small" type="text" id="puesto" value="" readonly>
            </div>

            <div class="column">
            <h3 class="subtitle has-background-primary">Datos de pago de nomina: </h3>
                <label for="sueldo">Sueldo Diario: </label>
                <input class="input is-small" type="text" id="sueldo" value="" readonly>
                <label for="periodo">Periodo de Pago: </label>
                <input class="input is-small" type="text" id="periodo" value="" readonly>
                <label for="total">Total a pagar: </label>
                <input class="input is-small " type="text" value="$ 0.00" readonly>

                <div class="buttons has-addons is-right">
                <button class="button is-primary" type="button">Confirmar</button>
                <a href="{{url('Nomina')}}"><button class="button is-danger" type="button">Descartar</button></a>
                </div>

            </div>
        </div>
        </form>
    </body>
</html>