<!DOCTYPE html>
<html>

<head>
  <meta charset='utf-8'>
  <meta http-equiv='X-UA-Compatible' content='IE=edge'>

  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
  <script src='main.js'></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@300;600&display=swap" rel="stylesheet">
</head>

<body>


  <meta charset='utf-8'>
  <meta http-equiv='X-UA-Compatible' content='IE=edge'>
  <title>login</title>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
  <script src='main.js'></script>
  </head>



  <body>

    <form method="POST" action="registrar.php">

      <div class="container">
        <h1>Crear cuenta</h1>

        <form>
          <div class="form-group">
            <label for="firstName" style="font-family: 'League Spartan', sans-serif;">Nombre de usuario:</label>
            <input type="text" name="Nombre" id="firstName" class="form-control" placeholder="Nombre" required>
          </div>

          <div class="form-group">
            <label for="email" style="font-family: 'League Spartan', sans-serif;">Correo electrónico:</label>
            <input type="text" id="email" class="form-control" placeholder="Correo electrónico" required>
          </div>

          <div class="form-group">
            <label for="password" style="font-family: 'League Spartan', sans-serif;">Contraseña:</label>
            <input type="password" id="password" class="form-control" placeholder="Contraseña" required>
            <i class="fas fa-eye eye-icon"></i>
          </div>

          <div class="form-group">
            <label for="confirmPassword" style="font-family: 'League Spartan', sans-serif;">Confirmar contraseña:</label>
            <input type="password" name="Clave" id="confirmPassword" class="form-control" placeholder="Confirmar contraseña" required>
            <i class="fas fa-eye eye-icon"></i>
          </div>

          <button type="submit" name="register" class="btn btn-primary">Crear cuenta</button>
        </form>
      </div>

      <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>


    </form>

    <style>
      :root {
        --dark: #111111;
      }

      body {
        background-color: var(--dark) !important;
      }

      .container {
        max-width: 400px;
        margin: 100px auto;
        padding: 20px;
        background-color: #4e4c4c;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      }

      h1 {
        text-align: center;
        color: #541eaa;
        margin-bottom: 30px;
        font-family: 'League Spartan', sans-serif;
      }

      .form-group label {
        font-weight: bold;
        color: #fff;
        font-family: 'League Spartan', sans-serif;
      }

      .form-group input[type="text"],
      .form-group input[type="password"] {
        border: none;
        border-radius: 5px;
        background-color: #2b2e35;
        color: #fff;
        font-family: 'League Spartan', sans-serif;
      }

      .form-group .eye-icon {
        cursor: pointer;
        position: relative;
        left: -25px;
        top: -2px;
      }

      .btn-primary {
        background-color: #541eaa;
        color: #fff;
        font-family: 'League Spartan', sans-serif;
        border: none;
      }

      .form-group input[type="text"]:focus,
      .form-group input[type="password"]:focus {
        background-color: #2b2e35;
        color: #fff;
      }

      @media (max-width: 576px) {
        .container {
          max-width: 100%;
          margin: 50px auto;
        }
      }
    </style>