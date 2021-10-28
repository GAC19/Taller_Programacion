<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="{{ asset('./static/css/estilo.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <HEader class="arriba">antecedentes</HEader>



    <div class="container">
        <div class="d-flex justify-content-center">
            <div class="card2">
                <div class="card2-header bg-light">
                    <div class="d-flex justify-content-end"></div>
                    <h3 class="text-green">Crear Usuario</h3>
                    <div class="form-group">
                        <a href="http://localhost/proyecto/public/">
                            <input type="button" value="volver" class="btn login_btn bg-success"></a>
                        </a>
                    </div>
                </div>
                <div class="card2-body dg-lignt">
                    <form>
                        <div>EMPRESA</div>  
                            <table><tr>
                                <td><span>Nombre</span>
                                <input type="text" class="form-control" placeholder="Name"></td>
                                <td><span>Razon Social</span>
                                <input type="text" class="form-control" placeholder="Business Name"></td></tr>
                                <tr><td><span>Direccion</span>
                                <input type="text" class="form-control" placeholder="Direction"></td>
                                <td><span>Correo Electronico</span>
                                <input type="text" class="form-control" placeholder="Email"></td></tr>
                                <br></table><hr>
                        <div>REPRESENTANTE LEGAL</div>
                            <table><tr>
                                <td><span>Nombre</span>
                                <input type="text" class="form-control" placeholder="Name"></td>
                                <td><span>Contraseña</span>
                                <input type="text" class="form-control" placeholder="Password"></td></tr>
                                <br></table>
                            <table><tr>
                                    <td><span>Telefono</span>
                                    <input type="text" class="form-control" placeholder="Fone"></td>
                                    <td><span>Correo Electronico</span>
                                    <input type="text" class="form-control" placeholder="Email"></td></tr>
                                    <br></table>
                    </form>
                    <div class="d-flex justify-content-center">
                        <div class="form-group">
                            <br><input type="button" value="Guardar" class="btn login_btn bg-success">
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</body>
</html>