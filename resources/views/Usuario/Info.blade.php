<html>
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
    </head>
    <body>
        <h1 class=title>EMPLEADO</h1>
        
        <form action="{{url('Info')}}" method="post">
        @csrf

        <div>
            <label for="nombre">Nombre:</label>
            <input type="text" value="" readonly>
            <label for="apellidoP">Apellido Paterno:</label>
            <input type="text" value="" readonly>
            <label for="apellidoM">Apellido Materno:</label>
            <input type="text" value="" readonly>
            <label for="sexo">Sexo: </label>
            <input type="text"value=""  readonly>
    
            <label for="nss">NSS: </label>
            <input type="text" value="" readonly>
            <label for="rfc">RFC: </label>
            <input type="text" value="" readonly>
            <label for="contratacion">Fecha de Contratación:</label>
            <input type="text" value="" readonly>
            <label for="puesto">Puesto: </label>
            <input type="text" value="" readonly>
            <label for="sueldo">Sueldo Diario: </label>
            <input type="text" value="" readonly>
            <label for="periodo">Periodo de Pago: </label>
            <input type="text" value="" readonly>
        </div>

        </form>
    </body>
</html>