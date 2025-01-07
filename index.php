
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Galería de Canales (Versión Light)</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="robots" content="noindex" />

  <!-- Estilos básicos para mejor compatibilidad -->
  <style>
    body {
      margin:0; 
      padding:0;
      background: #000;
      color: #fff;
      font-family: Arial, sans-serif; /* Más seguro que Poppins */
    }
    .search-container {
      margin: 10px auto;
      width: 95%;
      text-align: center;
    }
    input[type="text"] {
      width: 100%;
      max-width: 400px;
      font-size: 16px;
      padding: 8px;
      border-radius: 4px;
      border: 1px solid #ccc;
      outline: none;
    }
    .gallery {
      display: flex;
      flex-wrap: wrap;
      margin: 10px auto;
      width: 95%;
    }
    .poster {
      width: 20%; /* 5 col en desktops */
      padding: 5px;
    }
    .poster img {
      width: 100%;
      /* No "lazy", no transform/scale */
      border-radius: 8px;
      display: block; /* Asegurar que sea bloque */
    }
    @media (max-width: 1000px) {
      .poster { width: 25%; /* 4 col */}
    }
    @media (max-width: 800px) {
      .poster { width: 33.33%; /* 3 col */}
    }
    @media (max-width: 600px) {
      .poster { width: 50%; /* 2 col */}
    }
  </style>

  <!-- Script de búsqueda en JavaScript Vanilla -->
  <script>
    function filtrarCanales() {
      var input = document.getElementById('searchBox');
      var filter = input.value.toLowerCase();
      var posters = document.getElementsByClassName('poster');
      for (var i = 0; i < posters.length; i++) {
        var link = posters[i].getElementsByTagName('a')[0];
        if (link) {
          var title = link.getAttribute('title').toLowerCase();
          // Mostrar/ocultar según coincidencia
          if (title.indexOf(filter) > -1) {
            posters[i].style.display = "";
          } else {
            posters[i].style.display = "none";
          }
        }
      }
    }
  </script>
</head>
<body>

  <!-- Contenedor de búsqueda -->
  <div class="search-container">
    <input type="text" id="searchBox" placeholder="Buscar canal..." onkeyup="filtrarCanales()">
  </div>

  <!-- Galería dinámica -->
  <div class="gallery">
          <div class="poster">
        <a href="hbo-flow.html" target="_blank"
           title="HBO FLOW">
          <!-- Quitar loading="lazy" -->
          <img src="https://i.ibb.co/tHxcPv7/channels4-profile-1.jpg"
               alt="HBO FLOW">
        </a>
      </div>
          <div class="poster">
        <a href="hbo-2-flow.html" target="_blank"
           title="HBO 2 FLOW">
          <!-- Quitar loading="lazy" -->
          <img src="https://i.ibb.co/KsX2ZS9/ar-hbo-2-m.png"
               alt="HBO 2 FLOW">
        </a>
      </div>
          <div class="poster">
        <a href="hbo-xtreme-flow.html" target="_blank"
           title="HBO XTREME FLOW">
          <!-- Quitar loading="lazy" -->
          <img src="https://i.ibb.co/Qm692z1/ar-max-prime-panamericano-hd-m.png"
               alt="HBO XTREME FLOW">
        </a>
      </div>
          <div class="poster">
        <a href="hbo-xtreme2-flow.html" target="_blank"
           title="HBO XTREME2 FLOW">
          <!-- Quitar loading="lazy" -->
          <img src="https://i.postimg.cc/T2g6Mq1c/hbo-xtreme-logo-D424105400-seeklogo-com.png"
               alt="HBO XTREME2 FLOW">
        </a>
      </div>
          <div class="poster">
        <a href="hbo-family-flow.html" target="_blank"
           title="HBO FAMILY FLOW">
          <!-- Quitar loading="lazy" -->
          <img src="https://i.ibb.co/DMn0KSH/descarga-2.png"
               alt="HBO FAMILY FLOW">
        </a>
      </div>
          <div class="poster">
        <a href="hbo-signature-flow.html" target="_blank"
           title="HBO SIGNATURE FLOW">
          <!-- Quitar loading="lazy" -->
          <img src="https://i.ibb.co/FYgrpMP/ar-hbo-signature-m.png"
               alt="HBO SIGNATURE FLOW">
        </a>
      </div>
          <div class="poster">
        <a href="hbo-mundi-flow.html" target="_blank"
           title="HBO MUNDI FLOW">
          <!-- Quitar loading="lazy" -->
          <img src="https://i.ibb.co/dJjRPzB/ar-max-m.png"
               alt="HBO MUNDI FLOW">
        </a>
      </div>
          <div class="poster">
        <a href="hbo-plus-flow.html" target="_blank"
           title="HBO PLUS FLOW">
          <!-- Quitar loading="lazy" -->
          <img src="https://i.ibb.co/1qcpR0T/ar-hbo-plus-panamericano-hd-m.png"
               alt="HBO PLUS FLOW">
        </a>
      </div>
          <div class="poster">
        <a href="hbo-pop-flow.html" target="_blank"
           title="HBO POP FLOW">
          <!-- Quitar loading="lazy" -->
          <img src="https://i.ibb.co/VmTj2tv/ar-max-up-m.png"
               alt="HBO POP FLOW">
        </a>
      </div>
      </div>

  <!-- Mensaje si se generaron nuevos archivos -->
  
</body>
</html>

