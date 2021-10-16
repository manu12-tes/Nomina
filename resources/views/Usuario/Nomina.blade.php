<html>
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
    <script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>

    </head>
    <body>

        <br>
        <center><div class="dropdown">
        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Inicio
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
            <a href="{{url('Alta')}}"><button class="dropdown-item" type="button">Agregar empleados</button></a>
            <a href="{{url('Nomina')}}"><button class="dropdown-item" type="button">Empleados registrados</button></a>
            <a href="{{url('Reporte')}}"><button class="dropdown-item" type="button">Reportes</button></a>
            <a href="{{url('sueldoEmp')}}"><button class="dropdown-item" type="button">Reportes Quincenales</button></a>
        </div>
        </div>
        </center>
        <br>

        <h1 class=title>NOMINA</h1>
        
        <form action="{{url('Nomina')}}" method="post">

        @csrf
            <div class="level-left">
            <p class="control">
          <input class="input" type="text" placeholder="Busqueda">
        </p>
        <p class="control">
          <button class="button is-info">Buscar</button>
        </div>
        <table class="table is-hoverable is-selected">
            <thead>
                <tr class=is-selected>
                    <th> Curp </th>
                    <th> Nombre </th>
                    <th> Apellido 1 </th>
                    <th> Apellido 2 </th>
                    <th> Sexo </th>
                    <th> NSS </th>
                    <th> RFC </th>
                    <th> Contratacion </th>
                    <th> Puesto </th>
                    <th>   </th>
                    <th>   </th>
                    <th colspan="1">Accion</th>
                </tr>
                @foreach ($empleado as $x)
                <tr>
                    <td>{{ $x -> curp }}</td>
                    <td>{{ $x -> nombreEmpleado }}</td>
                    <td>{{ $x -> apellidoPaternoEmp }}</td>
                    <td>{{ $x -> apellidoMaternoEmp }}</td>
                    <td>{{ $x -> sexo }}</td>
                    <td>{{ $x -> nss }}</td>
                    <td>{{ $x -> RFC }}</td>
                    <td>{{ $x -> fechaContratacion }}</td>
                    <td>{{ $x -> puesto }}</td>
                    <td>
                        <a href="{{url('pago')}}"><button class="button is-success" type="button" >Pagar</button></a>
                    </td>
                    <td>
                        <button class="button is-warning modal-button" type="button" data-target="#modal">Info</button>
                </div>
                    </td>
                    <td><a href ="../editar/{{ $x->curp }}">Editar</a></td>
                    <td><a href ="../eliminar/{{ $x->curp}}">Eliminar</a></td> 
                </tr>
                @endforeach 
            </thead>
         <tbody>
        </tbody>
        </table>
        <div class="modal" id="modal">
                <div class="modal-background"></div>
                    <div class="modal-content">
                        <div class="box columns ">
                            <div class="column field">
                                <label id="nombre" >Nombre:</label>
                                <input class="input" type="text" value="" readonly id="nombre">
                                <label id="apellidoP">Apellido 1:</label>
                                <input class="input"type="text" value="" readonly id="apellidoP">
                                <label id="apellidoM" >Apellido 2:</label>
                                <input class="input"type="text" value="" readonly id="apellidoM">
                                <label id="sexo" >Sexo: </label>
                                <input class="input"type="text" value=""  readonly id="sexo">
                                <label id="nss">NSS: </label>
                                <input class="input"type="text" value="" readonly id="nss">
                            </div>
                
                            <div class="column field">
                            <label id="rfc">RFC: </label>
                            <input class="input"type="text" value="" readonly id="rfc">
                            <label id="contratacion" >Contratación:</label>
                            <input class="input"type="text" value="" readonly id="contratacion">
                            <label id="puesto" >Puesto: </label>
                            <input class="input"type="text" value="" readonly id="puesto">
                            <label id="sueldo" >Sueldo Diario: </label>
                            <input class="input"type="text" value="" readonly id="sueldo">
                            <label id="periodo">Tipo de Pago: </label>
                            <input class="input"type="text" value="" readonly id="periodo">
                            </div>
                        </div>
                    </div>
                        <button class = "modal-close is-large" type="button" aria-label="close"></button>
                    </div>
            <script>
                $(".modal-button").click(function() {
                var target = $(this).data("target");
                $("html").addClass("is-clipped");
                $(target).addClass("is-active");
                });
                
                $(".modal-close").click(function() {
                $("html").removeClass("is-clipped");
                $(this).parent().removeClass("is-active");
                });
            </script>
        </form>
        
    </body>
</html>