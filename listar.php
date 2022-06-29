<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <link rel="stylesheet" href="styles.css">
  <link rel="stylesheet" href="estilos.css">
  <title>Document</title>
</head>
<body>

<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">

    <a class="navbar-brand col-md-1" >
    <img src="img/logo.png" alt="logo" width="170" height="67">  </a>
          

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" id="inicio" aria-current="page" href="inicio.php">INICIO</a>
            </li>


        <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="agregar.html">AGREGAR ROPA</a>
            </li>
       <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="listar.php">LISTAR ROPA</a>
            </li>

          </ul>
          <a class="btn btn-secondary" id="inicio" aria-current="page" href="login.html">Acceso Vendedores</a>
        </div>
      </div>
    </nav>

        </header>



        <h1>Tienda Online</h1>
  <div class="texto"> ENVÍOS GRATIS EN COMPRAS MAYORES A $7000
</div> <br>

<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="img/slider.jpg"  alt="slider">
          </div>
          <div class="carousel-item">
            <img src="img/slider2.png"  alt="Remeras">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
<div class="texto"> 3, 6 y 12 CUOTAS SIN INTERÉS
</div>
<div class="iconografia"> <img src="img/iconografia.jpg" alt="logo" width="" height="">
</div>

  <aside>
  <p><strong>Filtrar por:</strong> </p>

<div class="accordion" id="accordionExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingOne">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
        Marca
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <p> <button type="submit" class="btn btn-warning"> <a href="addidas.php" style="text-decoration:none">Addidas </a></button> <p>
        <p> <button type="submit" class="btn btn-warning"> <a href="portsaid.php"style="text-decoration:none">Portsaid </a></button>  </p>
        <p> <button type="submit" class="btn btn-warning"> <a href="lacoste.php"style="text-decoration:none">Lacoste </a></button>  </p>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        Talle
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
      <div class="accordion-body">
      <p> <button type="submit" class="btn btn-warning"><a href="talles.php" style="text-decoration:none">S</a></button>  </p>
      <p> <button type="submit" class="btn btn-warning"><a href="tallem.php" style="text-decoration:none">M</a></button>  </p>
      <p> <button type="submit"class="btn btn-warning"><a href="tallel.php"style="text-decoration:none">L</a></button>  </p>
</div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
        Precio
      </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
      <div class="accordion-body">

      <p> <button type="submit" class="btn btn-warning"><a href="prodmenor5000.php" style="text-decoration:none" > $0 - $5000 </a></button>  </p>
      <p> <button type="submit" class="btn btn-warning"><a href="prodmayor5000.php" style="text-decoration:none" > $5000 - $10000 </a></button>  </p>
      <p> <button type="submit" class="btn btn-warning"><a href="prodmayor10000.php" style="text-decoration:none" > $10000 - $25000 </a></button>  </p>     
    </div>
    </div>
  </div>
</div>
       </aside>

  <section>
    <div class="container">
      <div class="row">

        <?php
        // 1) Conexion
        $conexion = mysqli_connect("127.0.0.1", "root", "");
        mysqli_select_db($conexion, "tienda");

        // 2) Preparar la orden SQL
        // Sintaxis SQL SELECT
        // SELECT * FROM nombre_tabla
        // => Selecciona todos los campos de la siguiente tabla
        // SELECT campos_tabla FROM nombre_tabla
        // => Selecciona los siguientes campos de la siguiente tabla
        $consulta='SELECT * FROM ropa';

        // 3) Ejecutar la orden y obtenemos los registros
        $datos= mysqli_query($conexion, $consulta);

       //  recorro todos los registros y genero una CARD PARA CADA UNA
       while ($reg = mysqli_fetch_array($datos)) {?>



    
        <div class="card col-sm-12 col-md-6 col-lg-3">
          <img class="card-img-top" src="data:image/jpg;base64, <?php echo base64_encode($reg['imagen'])?>" alt="imagen ropa" width: 18rem; height="")>

            <h3 class="card-title" style="width: 100%; font-size:25px;"><?php echo ucwords($reg['marca']) ?></h3>
            <span> <?php echo $reg['tipodeprenda']; ?></span>
            <h5>$ <?php echo $reg['precio']; ?></h5> 

            <a class="btn btn-danger" href="borrar.php?id= <?php echo $reg['id'];?> "> Borrar </a> 
            <br>
            <a class= "btn btn-info" href="modificar.php?id=<?php echo $reg['id'];?>">Editar</a>
            <br>
            <script src="https://www.mercadopago.com.ar/integrations/v1/web-payment-checkout.js"
data-preference-id="533043428-bdf104de-3816-448d-95c1-1ac5a2ef3132" data-source="button">

</script>


       
        </div>


        <?php } ?>

      </div>
    </div>
  </section>
<br>
  <footer>
  <!-- Copyright -->
  <div class="text-center p-3">
    © 2022 Developed by
    <a class="text-dark" href="https://wa.me/+542914131566?text=Hola,%20me%20interesa%20un%20producto.">Paferdu</a>
  </div>
  <!-- Copyright -->
</footer>
 
  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
