<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <title>login</title>
    <link rel=StyleSheet HREF="../css/style.css" TYPE="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" >
</head>

<body>
  <header class="p-3 cnav text-white">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="inicio.html" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
          <img src="../img/kalao.png" alt="logo Kalao">
        </a>
    
        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li><a href="inicio.html" class="nav-link px-3 text-white">Inicio</a></li>
        </ul>
    
        <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
          <input type="search" class="form-control form-control-dark text-black bg-white" placeholder="Buscar..." aria-label="Search">
        </form>
    
        <div class="text-end">
          <button type="button" class="btn btn- btn-outline-light me-2">Inciar Sesión</button>
          <button type="button" class="btn btn-warning">Registrarse</button>
        </div>
      </div>
    </div>
  </header>

  <div class="container mt-4">
      <form action="validar.php" method="post">
          <h1 class="animate__animated animate__backInLeft">Sistema de login</h1>

          <div class="mb-3 mt-3">
            <label for="email" class="form-label">Email:</label>
            <input type="email" class="form-control" id="email" placeholder="Ingrese email" name="usuario">
            <label for="pwd" class="form-label">Password:</label>
            <input type="password" class="form-control" id="pwd" placeholder="Ingrese password" name="contraseña">
          </div>

          <div class="form-check mb-3">
              <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="remember"> Recordar
              </label>
          </div>

          <button type="submit" class="btn btn-primary">Entrar</button>
      </form>
  </div>
</body>
</html>