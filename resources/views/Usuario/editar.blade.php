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

        <center><h1 style="color: red">Actualizacion de datos</h1></center>
        <br>

        <form class="form-horizontal" action="{{ url('actE') }}" method="post">
         @csrf
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <label>Curp</label>
                    <input type="text" class="form-control" name="curp" value="{{$empleado->curp}}">
                </div>

                <div class="col-6">
                    <label>NombreEmpleado</label>
                  <input type="text" class="form-control" name="nombreempleado" value={{"$empleado->nombreEmpleado"}}>
                </div>
            </div>
            <br>

            <div class="row">
                <div class="col-6">
                    <label>ApellidoPaternoEmp</label>
                     <input type="text" class="form-control" name="apellidopaternoemp" value={{"$empleado->apellidoPaternoEmp"}}>
                </div>

                <div class="col-6">
                    <label>ApellidoMaternoEmp</label>
                    <input type="text" class="form-control" name="apellidomaternoemp" value={{"$empleado->apellidoMaternoEmp"}}>
                </div>
            </div>
            <br>

            <div class="row">
                <div class="col-6">
                    <label>Sexo</label>
                    <input type="text"class="form-control" name="sexo" value={{"$empleado->sexo"}}>
                </div>

                <div class="col-6">
                    <label>NSS</label>
                    <input type="text" class="form-control" name="nss" value={{"$empleado->nss"}}>
                </div>
            </div>
            <br>

            <div class="row">
                <div class="col-6">
                    <label>RFC</label>
                    <input type="text" class="form-control" name="rfc" value={{"$empleado->RFC"}}>
                </div>

                <div class="col-6">
                    <label>Puesto</label>
                    <input type="text" class="form-control" name="puesto" value={{"$empleado->puesto"}}>
                </div>
            </div>
            <br>

            <div class="row">
                <div class="col-12">
                    <input type="submit" class="btn btn-primary" name"boton" value="Actualizar">
                </div>
            </div>
        </div>

        </form>
    </body>
</html>