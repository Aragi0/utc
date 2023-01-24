<!DOCTYPE html5>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="apple-touch-icon" href="images/utc-log.png">
  <title>UTC</title>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
    
    
  <!--de esta pagina toman los iconos https://fonts.google.com/icons?icon.platform=web&icon.set=Material+Icons&icon.style=Sharp
   los iconos tienen que ser icon y sharp para que tomen las propiedades de la pagina lo que tienen que copiar es (images/loque se copea.png)
  si quieren probar cualquier icono la sintaxis es
  <span class="material-icons-sharp">
    nombre en ingles
  </span>     -->
  <link rel="stylesheet" href="css/style.css">
  
</head>

<body>
  <div class="container"><!--inicio del contenedor-->
    <aside> <!--Inicio de la barra de navegacion-->
      <div class="top">
        <div class="logo">
          <img src="images/utc-log.png" alt="">
          <h2>ADM-<span class="danger">UTC</span></h2>
        </div>
        <div class="close" id="close-btn">
          <span class="material-icons-sharp">
            close
          </span>
        </div>
      </div>
      <div class="sidebar">
        <a href="#" class="active">
          <span class="material-icons-sharp">
            grid_view
          </span>
          <h3>Inicio</h3>
        </a>
        <a href="#">
          <span class="material-icons-sharp">
            person_outline
          </span>
          <h3>Maestros</h3>
        </a>
        <a href="#">
          <span class="material-icons-sharp">
            receipt_long
          </span>
          <h3>Materias</h3>
        </a>
        <a href="#">
          <span class="material-icons-sharp">
            insights
          </span>
          <h3>Estadisticas</h3>
        </a>
        <a href="#">
          <span class="material-icons-sharp">
            mail_outline
          </span>
          <h3>Mensajes</h3>
          <span class="message-count">26</span>
        </a>
        <a href="#">
          <span class="material-icons-sharp">
            inventory
          </span>
          <h3>Calificaciones</h3>
        </a>
        <a href="#">
        <span class="material-icons-sharp">
            settings
          </span>
          <h3>Reportes</h3>
        </a>
        <a href="#">
          <span class="material-icons-sharp">
            settings
          </span>
          <h3>Configuraciones</h3>
        </a>
        <a href="#">
          <span class="material-icons-sharp">
            add
          </span>
          <h3>Agregar</h3>
        </a>
        <a href="#">
          <span class="material-icons-sharp">
            logout
          </span>
          <h3>Salir</h3>
        </a>
      </div>
    </aside><!--fin de la barra de navegacion-->

    <main>
      <!-- Desde aqui puedes poner todo el contenido a mostrar de cada uno de los modulos -->
      @yield('contenido')
      <!--!!!!Apartir de aca ya no puden poner tablas y lo demas¡¡¡¡¡-->
    </main>

    <div class="right"><!--Inico de la area de notificaciones-->
      <div class="top"><!--modo negro y blanco-->
        <button id="menu-btn">
          <span class="material-icons-sharp">menu</span>
        </button>
        <div class="theme-toggler">
          <span class="material-icons-sharp active">
            light_mode
          </span>
          <span class="material-icons-sharp">
            dark_mode
          </span>
        </div>
        <div class="profile">
          <div class="info">
            <p>Hey, <b>Daniel</b></p>
            <small class="text-muted">Admin</small>
          </div>
          <div class="profile-photo">
            <img src="images/profile-1.jpg" alt="">
          </div>
        </div>
      </div><!--fin del modo negro y blanco-->
      <!--Inico de las notificaciones-->
      <div class="recent-update">
        <h2>Recent Update</h2>
        <div class="updates">
          <div class="update">
            <div class="profile-photo">
              <img src="images/profile-2.jpg" alt="">
            </div>
            <div class="message">
              <p><b>Mike Tyson</b>received his order of Night lion tech GPS drone.</p>
              <small class="text-muted">2 Minutes Ago</small>
            </div>
          </div>
          <div class="update">
            <div class="profile-photo">
              <img src="images/profile-3.jpg" alt="">
            </div>
            <div class="message">
              <p><b>Mike Tyson</b>received his order of Night lion tech GPS drone.</p>
              <small class="text-muted">2 Minutes Ago</small>
            </div>
          </div>
          <div class="update">
            <div class="profile-photo">
              <img src="images/profile-4.jpg" alt="">
            </div>
            <div class="message">
              <p><b>Mike Tyson</b>received his order of Night lion tech GPS drone.</p>
              <small class="text-muted">2 Minutes Ago</small>
            </div>
          </div>
        </div>
      </div>
      <div class="sales-analytics">
        <h2>Sales Analytics</h2>
        <div class="item online">
          <div class="icon">
            <span class="material-icons-sharp">
              shopping_cart
            </span>
          </div>
          <div class="right">
            <div class="info">
              <h3>ONLINE ORDERS</h3>
              <small class="text-muted">Last 24 Hours</small>
            </div>
            <h5 class="success">+39%</h5>
            <h3>3849</h3>
          </div>
        </div>

        <div class="item offline">
          <div class="icon">
            <span class="material-icons-sharp">
              local_mall
            </span>
          </div>
          <div class="right">
            <div class="info">
              <h3>OFFLINE ORDERS</h3>
              <small class="text-muted">Last 24 Hours</small>
            </div>
            <h5 class="danger">-17%</h5>
            <h3>1100</h3>
          </div>
        </div>

        <div class="item customers">
          <div class="icon">
            <span class="material-icons-sharp">
              person
            </span>
          </div>
          <div class="right">
            <div class="info">
              <h3>NEW CUSTOMERS</h3>
              <small class="text-muted">Last 24 Hours</small>
            </div>
            <h5 class="danger">+25%</h5>
            <h3>849</h3>
          </div>
        </div>
        <div class="item add-product">
          <div>
            <span class="material-icons-sharp">
              add
            </span>
            <h3>Add Product</h3>
          </div>
        </div>

      </div>
    </div> <!--fin de las notificaciones-->
  </div> <!--fin delconotenedor-->
  <script src="js/orders.js"></script>
  <script src="js/script.js"></script>
  @stack('scripts')
</body>

</html>