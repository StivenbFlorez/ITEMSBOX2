<!DOCTYPE html>
<html>

<head>
  <meta charset='utf-8'>
  <meta http-equiv='X-UA-Compatible' content='IE=edge'>

  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
  <script src='main.js'></script>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Items's box</title>
  <link rel="shortcut icon" href="views/img/box-solid (3).svg">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@300;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="views/css/Style.css">

</head>







<body>

  <form method="POST" action="ingreso.php">

    <table align="center">

      <!-- Sección principal-->

      <body class="bg-dark">
        <section>
          <div class="row lg-0">
            <div class="col-lg-7">
              <!--Carousel-->
              <div id="carouselExampleIndicators" class="carousel slide">
                <div class="carousel-indicators">
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <!--imagen-slider-->
                    <img class="imagen-slider" src="views/img/img-1.jpeg" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img class="imagen-slider" src="views/img/img-2.png" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img class="imagen-slider" src="views/img/img-3.jpg" class="d-block w-100" alt="...">
                  </div>
                </div>
                <!--botones carousel-->
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>


            </div>
            <div class="col-lg-5 d-flex flex-column align-items-end  min-vh-100">
              <div class="icon px-lg5 pt-lg-4 pb-lg-3 p-4 w-100 mb-auto">
                <!--icono items box-->
                <i id="icono" class="fa-solid fa-box">
                  <h1 CLASS="letraitem">ITEM'S BOX</h1>
                </i>
              </div>
              <div class="px-lg5 py-lg4 p-4 w-100 align-self-center">
                <h1 class="font-weight-bold mb-9" ss="text-light"> Bien venido de vuelta</h1>
                <form>
                  <div class="mb-4">
                    <!--inputs-->
                    <label for="exampleInputEmail1" class="form-label font-weight-bold">Email <i class="fa-solid fa-envelope"></i></label>
                    <input type="email" id="boton" name="usuario" class="form-control bg-dark-x border-0  " placeholder="Ingresa tu email" id="exampleInputEmail1" aria-describedby="emailHelp">

                  </div>
                  <div class="mb-4">
                    <label for="exampleInputPassword1" class="form-label font-weight-bold">Contraseña <i class="fa-solid fa-lock"></i></label>
                    <span class="icon-2" id="icon-eye"><i id="eye" class="fa-regular fa-eye-slash"></i></span>
                    <input id="password" type="password" name="password" class="form-control bg-dark-x border-0 " placeholder="Ingresa tu contraseña">
                    <a href="#" id="emailHelp" class="form-text  text-decoration-none t">¿Has olvidado tu
                      contraseña?</a>
                  </div>
                  <button type="submit" name="button" class="btn btn-primary w-100">Iniciar sesion</button>
                </form>
              </div>
              <div class="text-center pex-lg-5 pt-lg-3 pb-lg-4 p-4 w-100 mt-auto">
                <p class="d-inline-block mb-0">¿Todavia no tienes una cuenta?</p> <a href="registro.php" class=" font-weight-bold text-decoration-none">Crea una ahora</a>

              </div>
            </div>



          </div>

        </section>
        <script src="login.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
        <script src="https://kit.fontawesome.com/9c61ead5a6.js" crossorigin="anonymous"></script>

  </form>

  <style>
    :root {
      --dark: #16191c;
      --dark: #1e2126;
      --ligth: #ffffff;
    }

    /**/
    body {
      font-family: 'League Spartan', sans-serif;
      font-weight: 300;
      color: var(--ligth);
    }

    /*ICONOS*/
    #icono {
      margin-top: 50px;
      margin-left: -8px;
      font-size: 5rem;
      color: #541eaa;
    }


    .icon-2 {
      position: absolute;
      margin-top: 3rem;
      right: 2rem;
      cursor: pointer;
    }

    /*linksS*/
    #emailHelp {
      color: #ffffff;
      line-height: 5rem;
    }

    /* INPUTS */
    #boton {
      color: #ffffff;
    }

    #password {
      color: #ffffff;
    }

    /*ESTILO INPUTS */
    .form-control,
    .btn {
      min-height: 3.125rem;
      line-height: initial;
    }

    .btn {
      background-color: #6525af;

      border-color: #6525af;
    }

    /*PLACEHOLDERS*/
    #boton::placeholder {
      color: #b3acac;
    }



    #password::placeholder {
      color: #b3acac;
    }

    /*COLOR FONDO */
    .bg-dark {
      background-color: var(--dark) !important;
    }

    .bg-dark-x {
      background-color: #2b2e35 !important;
    }


    /*H1 items box*/
    .letraitem {
      margin-left: 100px;
      margin-top: -60px;
    }

    /*estilo imagen-slider*/
    .imagen-slider {
      height: 100vh;
      width: 100%;
    }
  </style>




























  <?php


  ?>
</body>
<footer>

</footer>

</html>

</html>