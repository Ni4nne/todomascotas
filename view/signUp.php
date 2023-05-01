<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign Up</title>
  <link rel="stylesheet" href="./css/login.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
</head>

<body>
  <div class="container">
    <img src="./images/logos/Logo.png" alt="logo" />
  </div>

  <nav>
  <h1 class="h3 mb-3 fw-normal">Regístrate: </h1>
  </nav>

  <div class="cont">
    <form action="../model/signup_validation.php" method="post">
    <div class="form-element"> 
        <label for="nombre">Nombre:</label>
        <input type="texto" name="nombre" id="nombre" placeholder="nombre" required>
      </div>

      <div class="form-element"> 
        <label for="apellido">Apellido:</label>
        <input type="texto" name="apellido" id="apellido" placeholder="apellido" required>
      </div>

      <div class="form-element"> 
        <label for="email">Email:</label>
        <input type="email" name="email" placeholder="ejemplo@ejemplo.com" required>
      </div>
      
      <div class="form-element"> 
        <label for="password">Contraseña:</label>
        <input type="password" name="password" placeholder="contraseña" required>
      </div>
      <div class="form-button">
      <input type="submit" value="Enviar">
      </div>

    </form>
  </div>


</body>

</html>