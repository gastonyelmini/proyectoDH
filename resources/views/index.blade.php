<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>WeProject - Impulsá tu proyecto hoy</title>
    <meta name="description" content="Deje a un lado las hojas de cálculo sin actualizar, las notas rápidas y el software inadecuado para gestionar sus proyectos.">
    <link rel="stylesheet" href="styles/landing-style.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="favicon.png"/>
    <script src="http://d3js.org/d3.v3.min.js"></script>
  </head>
  <body>
    <!-- header with logo log in and register buttons -->
    <header>
      <a href="index.php">
        <div class="logo">
          <img src="logo-white.png" class="logoimage" alt="">
        </div>
      </a>
      <div class="header-right">
        <div class="faq"><a href="/faq">Faq</a></div>
        <div class="logIn"><a href="/login">Ingresar</a></div>
        <div class="register"><a href="/register">Registrarse</a></div>
      </div>
    </header>
    <!-- END OF: header with logo log in and register buttons -->

    <!-- landing's top -->
    <div class="topText ">
      <h1>WeProject es la manera gratuita y visual de organizar su proyecto.</h1>
      <p>Deje a un lado las hojas de cálculo sin actualizar, las notas rápidas y el software inadecuado para gestionar sus proyectos. WeProject le deja ver todo sobre su proyecto de un solo vistazo.</p>

      <a class="green-register" href="/register">Regístrese. ¡Es gratis!</a>

    </div>
    <!--END OF: landing's top -->

    <!-- background circle with a line on the bottom  -->
    <div class="contenedorCirculo">
      <div class="circle"></div>
      <div class="line"></div>
    </div>
    <!-- END OF: background circle with a line on the bottom  -->


    <!-- mockups section -->
    <div class="diagonal"></div>
    <div class="dinamic-diagonal-container">
        <img id="img-1" class="mockup-mac project" src="images/mockup-macbookAir.png" alt="boole-macbook">
        <p id="p-1" class="mockup-text project">Esta es nuestra linea de WeProject. Es una linea para visualizar los tiempos de tu proyecto.</p>
        <img id="img-2" class="mockup-ipad project" src="images/mockup-ipad.png" alt="boole-ipad">
    </div>
    <!-- END OF: mockups section -->

    <!-- time line width A3 node test -->

    <div class="time-line-container">
      <p class="project">Verá todo sobre su proyecto con tan solo echar un vistazo al la linea, y todo se actualiza en tiempo real. No hay nada que configurar y todo el mundo lo obtiene al instante.</p>
      <div class="nodoCompleto1">
        <div class="contenedorNodo2">
          <div class="boton">
          </div>
        </div>
        <div class="contenedorNodo">
          <div class="dinamicCircle"></div>
        </div>
      </div>
      <img class="mockup-branch-line" src="images/mockup-branch-line.png" alt="branch">
      <div class="line-down">
        <div class="line-down-red"></div>
      </div>
      <img class="mockup-line" src="images/mockup-line.png" alt="line">
    </div>
    <!-- call to a3 and add of A3 pie chart -->
    <script src="http://d3js.org/d3.v3.min.js"></script>
    <script>
      var width = 350,
          height = 350,
          τ = 2 * Math.PI;

      var arc = d3.svg.arc()
          .innerRadius(100)
          .outerRadius(135)
          .startAngle(0);

      var svg = d3.select(".dinamicCircle").append("svg")
            .attr("width", width)
            .attr("height", height)
          .append("g")
            .attr("transform", "translate(" + width / 2 + "," + height / 2 + ")")

        var background = svg.append("path")
            .datum({endAngle: τ})
            .style("fill", "#E1EEEE")
            .attr("d", arc);

        var foreground = svg.append("path")
          .datum({endAngle: 0 * τ})
            .style("fill", "#FF6161")
            .attr("d", arc);

      setInterval(function() {
        foreground.transition()
            .duration(750)
            .call(arcTween, Math.random() * τ);
      }, 1500);

        function arcTween(transition, newAngle) {

          transition.attrTween("d", function(d) {

            var interpolate = d3.interpolate(d.endAngle, newAngle);

            return function(t) {

              d.endAngle = interpolate(t);

              return arc(d);
            };
          });
      }
    </script>
    <!--END OF: time line width A3 node test -->



    <!-- Last section explaining the timeline and mini time line -->
    <div class="diagonal-b"></div>
    <div class="last-section">
      <div class="container">
        <img class="nodo-last" src="images/nodo.png" alt="nodo">
        <div class="infinite-line">
          <div class="red-line"></div>
        </div>
        <p class="project"><strong>WeProject posee herramientas intuitivas e interactivas  para visualizar los tiempos totales de su proyecto.</strong> Planifica proyectos, realiza el seguimiento del estado y colabora con otros usuarios fácilmente desde prácticamente cualquier lugar.</p>
        <img class="mini-line project" src="images/mockup-mini-line.png" alt="Mini Line">
      </div>
    </div>
    <!-- END OF: Last section explaining the timeline and mini time line -->

    <!-- Footer -->
    <footer>
      <div class="container">
        <p class="project"><strong>Descarte las notas rápidas, hojas de cálculo, correo
electrónico y el software inadecuado</strong> para gestionar sus proyectos y pase a ser una de las personas que usan WeProject. Puede añadir tantos tableros y tantas personas como desee con su cuenta gratuita.</p>
      </div>
      <a class="green-register project" href="/register">Regístrese. ¡Es gratis!</a>
    </footer>
    <!-- END OF: Footer -->

    <div class="end positionIndex">
      <p>© Copyright 2017, WeProject, Inc. Todos los derechos reservados.</p>
    </div>

    <!-- call to JQUERY -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="http://code.jquery.com/ui/1.9.2/jquery-ui.js"></script>
    <!-- call to library for controlling GIF animation -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/ScrollMagic.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/debug.addIndicators.min.js"></script>
    <!-- call to controller script -->
    <script type="text/javascript"  src="animationControllerIndex.js"></script>
  </body>
</html>
