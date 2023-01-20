<!DOCTYPE html5>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="apple-touch-icon" sizes="76x76" href="images/utc-log.png">
  <title>UTC</title>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <div class="container">
    <aside>
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
            report_gmailerrorred
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
    </aside>

    <main>
      <h1>Dashboard</h1>
      <div class="date">
        <input type="date">
      </div>
      <div class="insights">
        <div class="sales">
          <span class="material-icons-sharp">
            analytics
          </span>
          <!--la class middle es el marco para los objetos-->
          <div class="middle">
            <div class="left">
              <h3>Total Sales</h3>
              <h1>$25,024</h1>
            </div>
            <div class="progress">
              <svg>
                <circle cx="38" cy="38" r="36"></circle>
              </svg>
              <div class="number">
                <p>81%</p>
              </div>
            </div>
          </div>
          <small class="text-muted">Last 24 Hours</small>
        </div>

        <div class="expenses">
          <span class="material-icons-sharp">
            bar_chart
          </span>
          <div class="middle">
            <div class="left">
              <h3>Total Expenses</h3>
              <h1>$25,024</h1>
            </div>
            <div class="progress">
              <svg>
                <circle cx="38" cy="38" r="36"></circle>
              </svg>
              <div class="number">
                <p>62%</p>
              </div>
            </div>
          </div>
          <small class="text-muted">Last 24 Hours</small>
        </div>

        <div class="income">
          <span class="material-icons-sharp">
            stacked_line_chart
          </span>
          <div class="middle">
            <div class="left">
              <h3>Total Income</h3>
              <h1>$25,024</h1>
            </div>
            <div class="progress">
              <svg>
                <circle cx="38" cy="38" r="36"></circle>
              </svg>
              <div class="number">
                <p>44%</p>
              </div>
            </div>
          </div>
          <small class="text-muted">Last 24 Hours</small>
        </div>
      </div>
      <!--Este class recent- orders es nesesario para poner tablas con 
      reponsive disaing no pongan tablas tipo card-->
      <div class="recent-orders">
        <h2>Recent Orders</h2>
        <table>
          <thead>
            <tr>
              <th>Product Name</th>
              <th>Product Number</th>
              <th>Payment</th>
              <th>Status</th>
            </tr>
          </thead>
          <tbody>
          </tbody>
        </table>
        <a href="#">Ver mas</a>
      </div>
    </main>

    <div class="right">
      <div class="top">
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
      </div>
      <div class="recent-update">
        <h2>Recent Update</h2>
        <div class="updates">
          <div class="update">
            <div class="profile-photo">
              <img src="../public/images/profile-2.jpg" alt="">
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
    </div>
  </div>
  <script src="js/orders.js"></script>
  <script src="js/script.js"></script>
</body>
</html>


