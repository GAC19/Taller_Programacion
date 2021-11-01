<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{ asset('./static/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('./static/css/carrusel.css') }}">
    <title>Document</title>
</head>
<body> 
    <header>   
        <div class="der"><img src="./static/imagen/logo.png" alt="logo" width="400" height="100"></div>
        <div><button onclick="document.location='login'">LOGIN</button></div>
    </header>
    <nav >
        <div>
            <ul>
                <li><a href="#logo">Nosotros</a>
                    <ul>
                        <li><a href="#quienessomos">Quienes Somos</a></li>
                        <li><a href="#quehacemos">Que Hacemos</a></li>
                        <li><a href="#mv">Mision y Vision</a></li>
                        <li><a href="#equipo">Nuestro Equipo</a></li>
                    </ul>
                </li>
                <li><a href="#">Fruta</a>
                    <ul>
                        <li><a href="#">Variedad Negra</a></li>
                        <li><a href="#">Variedad Verde</a></li>
                        <li><a href="#">Variedad Blanca</a></li>
                    </ul>
                </li>
            </ul>    
        </div>

        
    </nav>
    <section>
        <div><h2>Expotacion de Uvas</h2> <br>
        <p>La empresa frutas internacionales nos dedica a la exportación de uvas de mesa, 
            a distintos países. Donde seleccionamos y entregamos los mejores productos a nuestro 
            cliente y puedan disgustar los productos agrícola de Chile.</p></div><br>
        <div class="carrusel">
            <ul class="carrusel-fotos">
              <li id="foto1"><img src="./static/imagen/galeria/foto1.jpg" alt=""></li>
              <li id="foto2"><img src="./static/imagen/galeria/foto2.jpg" alt=""></li>
              <li id="foto3"><img src="./static/imagen/galeria/foto3.jpg" alt=""></li>
              <li id="foto4"><img src="./static/imagen/galeria/foto4.jpg" alt=""></li>
              <li id="foto5"><img src="./static/imagen/galeria/foto5.jpg" alt=""></li>
              <li id="foto6"><img src="./static/imagen/galeria/foto6.jpg" alt=""></li>
            </ul>
            <ul class="carrusel-menu">
              <li><a href="#foto1"><img src="./static/imagen/galeria/foto1.jpg" alt=""></a></li>
              <li><a href="#foto2"><img src="./static/imagen/galeria/foto2.jpg" alt=""></a></li>
              <li><a href="#foto3"><img src="./static/imagen/galeria/foto3.jpg" alt=""></a></li>
              <li><a href="#foto4"><img src="./static/imagen/galeria/foto4.jpg" alt=""></a></li>
              <li><a href="#foto5"><img src="./static/imagen/galeria/foto5.jpg" alt=""></a></li>
              <li><a href="#foto6"><img src="./static/imagen/galeria/foto6.jpg" alt=""></a></li>
            </ul>
          </div><hr> <br><br>
          
          <div id="quienessomos" class="content"><p>
            ¿SABIAS QUE? <br> <br>
            Exportacion ltda., somos una empresa dedicada a la venta de exportación de frutas de mesa 
            tanto en todo el territorio nacional como en el extranjero. <br>
            La cual cumplimos y damos eficacia en nuestro producto, donde se realiza todo tipo de control 
            de calidad en nuestro producto. <br>
            Además, orientada a la exportaciones en general y su objetivo era "Velar por los intereses generales
             del comercio de exportación; defender principios básicos, económicos y sociales que, junto con 
             robustecer el comercio de exportación, beneficiarán al país en general; promover entre sus asociados 
             la sujeción de todas sus actividades comerciales e industriales no sólo a las normas legales vigentes, 
             sino además a normas éticas que contribuyan a prestigiar la actividad del comercio de exportación; 
             preocuparse de la preparación, aplicación, abolición o modificación de leyes, decretos y reglamentos, etc."
          </p> </div>
          <div id="quehacemos" class="content">
              <p>SOMOS: <br><br>
                Una Empresa que nos dedicamos a la su cocsecha, proceso y distribucion de los producto al nuestro cliente, las que mantenemos 
                una diciplina y medidas extricta en los procesos: <br> <br>
                1.- Ingresa el producto por parte del proveedor (subcontratista). <br>
                2.- Producción: donde pasan por las tres áreas (selección y pesaje, embalaje y palletizaje) <br>
                3.- Control de calidad: verifica si el producto a ofrecer cumple con los estándares dependiendo de su 
                        tipo para ser aprobado o rechazado para su exportación <br>
                4.- Todo tipo de registro debe ser ingresado en planilla para posteriormente ser entregado a la sede principal y el proveedor. <br>
                5.- Preparacion para su despacho, dependiendo de su destino de origen via terreste, marina o aérea. <br>
          </p> </div>
          <div id="mv" class="content">
              <p>MISIÓN<br>
                <br> Facilitar los procesos asociados a la producción y exportación de la actividad frutícola chilena, 
                de una manera genérica, no discriminatoria, estimulando la libre competencia de los actores internos 
                y externos, sin involucración alguna en temas de carácter comercial. <br>
                <br> VISIÓN<br>
                <br> Contribuir al pleno desarrollo de la actividad frutícola chilena, a través de la apertura y defensa 
                de mercados y el desarrollo de actividades de promoción, investigación y capacitación, complementadas
                 por una estrategia de sustentabilidad cuyos pilares fundamentales están constituidos por la inocuidad 
                 alimentaria, la protección del medioambiente y la responsabilidad social empresarial, manteniendo siempre 
                 a las personas en el centro de la actividad.</p>

          </div>
          <div id="equipo" class="content">
            <p>
               integrante en proceso
            </p>
          </div>



    </section>
    <footer>
        <div>
            <div>
                <img src="./static/imagen/logo2.png" alt="piedepaguina" width="200" height="50">
            </div>
            <div>
            <span> Exportacion de Uva  - Todos los derechos reservado</span><br>
            <span>Curso Analista Programador 2020 - 2021</span>
            </div>
        </div>
        
    </footer>

</body>
</html>