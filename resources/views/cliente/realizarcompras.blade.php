<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" type="text/css" href="{{ asset('./static/css/cliente.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('./static/css/estilo.css') }}">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


  <title>Document</title>
</head>
<body>
  <aside class="izq">
    <div class="perfil">
        <div ><img src="../static/imagen/usuario.ico" alt="" width="100" height="100"></div>
        <div ><span>nombre usuario</span></div>  
    </div>
    
    <div class="item">
      <div><a href="micta">MI CUENTA</a></div>
      <div><a href="compras">HISTORIAL</a></div>
      <div><a href="realizarcompras">COMPRAR</a></div>
      <div><a href="informacion">INFORMACION</a></div>
      <div><a href="consulta">CONSULTA</a></div>
      </div>

    <div><a href="http://localhost/proyecto/public/" style="color:yellow">salir</a></div>
    </aside>
    
    


    <section>
        <div class="card">
              <table border="2">
                <tr>
                    <td colspan="3" align="CENTER"><h2>INGRESO DE PEDIDO</h2></td>
                </tr>
                <tr>
                    <td>PRODUCTO</td><td colspan="2"align="center">
                        <p>El producto ofrecido para nuestro cliente se encuentra con todas 
                        las normativa legales para su exportación, para que el cliente disfrute 
                        y saboree el producto agrícola de nuestro territorio nacional.</p></td>
                </tr>
                <tr>
                    <td>VARIEDAD</td>
                    <td><select mane="select">
                                            <option value=" value4" selected>---</option>
                                            <option value=" value1">VARIEDAD ROJA</option>
                                            <option value=" value2">VARIEDAD VERDE</option>
                                            <option value=" value3">VARIEDAD NEGRA</option></select></td>
                    <td><select mane="select2">
                                        <option value=" value1">CRIMSON SEEDLESS</option>
                                        <option value=" value2">FLAME SEEDLES</option>
                                        <option value=" value3">ALLISON</option>
                                        <option value=" value4">LADY ROSE</option>
                                        <option value=" value5">JACK´S SALUTE</option></select></td>
                </tr>
                <tr>
                    <td>CATEGORIA</td><td colspan="2"><select mane="select">
                        <option value=" value5" selected>---</option>
                        <option value=" value1">A1 (ULTRA)</option>
                        <option value=" value2">A2 (PREMIUN)</option>
                        <option value=" value3">A3 (ESTANDAR)</option>
                        <option value=" value4">A4 (BASE)</option></select></td>
                </tr>
                <tr>
                    <td>CANTIDAD</td>
                    <td><label>Cantidad de Pallet</label>
                        <input type="text" id="name" name="name" required minlength="0" maxlength="03" size="02" align="center"></td>
                        
                    <td><select mane="select2">
                            <option value=" value1">96 CAJAS</option>
                            <option value=" value2">108 CAJAS</option></select></td>
                    
                <tr>
                    <td>EMBALAJE</td>
                    <td colspan="2"><select mane="select">
                        <option value=" value5" selected>---</option>
                        <option value=" value1">AGRANEL</option>
                        <option value=" value2">CLAMSHEL</option>
                        <option value=" value3">BOLSA</option></select></td>
                </tr>
                <tr>
                    <td>OBSERVACION</td>
                    <td colspan="2">
                    <textarea rows="3" cols="80" ></textarea></td>
                </tr>
            </table>
      </div>
</section>
    </section>
</body>
</html>