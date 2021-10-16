<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
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

        <center><h1 style="color: red">Bienvenido a alta de empleados</h1></center>
        <br>

        <form class="form-horizontal" action="{{ url('AltaP')}}" method="post">
         @csrf
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <label>Curp</label>
                    <input type="text" class="form-control" name="curp">
                </div>

                <div class="col-6">
                    <label>NombreEmpleado</label>
                  <input type="text" class="form-control" name="nombreempleado">
                </div>
            </div>
            <br>

            <div class="row">
                <div class="col-6">
                    <label>ApellidoPaternoEmp</label>
                     <input type="text" class="form-control" name="apellidopaternoemp">
                </div>

                <div class="col-6">
                    <label>ApellidoMaternoEmp</label>
                    <input type="text" class="form-control" name="apellidomaternoemp">
                </div>
            </div>
            <br>

            <div class="row">
                <div class="col-6">
                    <label>Sexo</label>
                    <input type="text"class="form-control" name="sexo">
                </div>

                <div class="col-6">
                    <label>NSS</label>
                    <input type="text" class="form-control" name="nss">
                </div>
            </div>
            <br>

            <div class="row">
                <div class="col-6">
                    <label>RFC</label>
                    <input type="text" class="form-control" name="rfc">
                </div>

                <div class="col-6">
                    <label>Puesto</label>
                    <input type="text" class="form-control" name="puesto">
                </div>
            </div>
            <br>

            <div class="row">
                <div class="col-12">
                    <input type="submit" class="btn btn-primary" name"boton" value="Registrar">
                </div>
            </div>
        </div>

        </form>
    </body>
</html>