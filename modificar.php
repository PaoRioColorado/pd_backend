<?php
// 1) Conexion
// a) realizar la conexion con la bbdd
// b) seleccionar la base de datos a usar
$conexion=mysqli_connect("127.0.0.1","root","");
 mysqli_select_db($conexion,"tienda");
// 2) Almacenamos los datos del envío GET
// a) generar variables para el id a utilizar
$id = $_GET['id'];
// 3) Preparar la SQL
// => Selecciona todos los campos de la tabla alumno donde el campo id  sea igual a $id
// a) generar la consulta a realizar
$consulta = "SELECT * FROM ropa WHERE id=$id";
// 4) Ejecutar la orden y almacenamos en una variable el resultado
// a) ejecutar la consulta
$repuesta=mysqli_query ($conexion, $consulta);
// 5) Transformamos el registro obtenido a un array
$datos=mysqli_fetch_array($repuesta);
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <link rel="stylesheet" href="estilos.css">
  <title>inicio</title>
        <title>Tienda de Ropa</title>
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


        <?php
        // 6) asignamos a diferentes variables los respectivos valores del array $datos.
        $tipodeprenda=$datos["tipodeprenda"];
        $marca=$datos["marca"];
        $talle=$datos["talle"];
        $precio=$datos["precio"];
        $imagen=$datos['imagen'];?>
        <h2 class="texto"> <img src="img/modificar.jpg"  alt="modificar" width="250" height="166"> MODIFICACIONES</h2>
        <h3>Ingrese los nuevos datos de la prenda</h3>

        <p> </p>
        <form action="" method="post" enctype="multipart/form-data">

        <div class="row">
  <div class="col">
    <!-- Name input -->
    <div class="form-outline">
    <label class="form-label" for="form8Example3">Tipo de prenda</label>
      <input type="text" id="form8Example3" class="form-control" name="tipodeprenda" placeholder="Tipo de Prenda" value="<?php echo "$tipodeprenda"; ?>"/>
    </div>
  </div>


  <div class="col">
    <!-- Name input -->
    <div class="form-outline">
    <label class="form-label" for="form8Example3">Marca</label>
      <input type="text" id="form8Example3" class="form-control" name="marca" placeholder="Marca" value="<?php echo "$marca"; ?>" />
    </div>
  </div>
    
  <div class="col">
    <!-- Name input -->
    <div class="form-outline">
    <label class="form-label" for="form8Example4">Talle</label>
      <input type="text" id="form8Example4" class="form-control" name="talle" placeholder="Talle" value="<?php echo "$talle"; ?>">

    </div>
  </div>

  <div class="col">
    <!-- Name input -->
    <div class="form-outline">
    <label class="form-label" for="form8Example4">Precio</label>
      <input type="text" id="form8Example4" class="form-control" name="precio" placeholder="Precio" value="<?php echo "$precio"; ?>">
    </div>
  </div>
          
  <div class="col">
    <!-- Email input -->
    <div class="form-outline">
    <label class="form-label" for="form8Example5">Cargar Imagen</label>
      <input type="file" id="form8Example5" class="form-control" name="imagen" placeholder="imagen" />

    </div>
  </div>
<p> </p>
   <!-- Submit button -->
   <div class="d-grid gap-2 justify-content-center">
   <button type="submit"  name="guardar_cambios" value="Guardar Cambios" class="btn btn-success btn-block mb-4" >Guardar cambios</button>
   <button type="submit"  name="Cancelar" value="Guardar Cambios" formaction="index.html" class="btn btn-info btn-block mb-4" >Cancelar</button>
</div>
</div>

        </form>

    
        <?php
        // Si en la variable constante $_POST existe un indice llamado 'guardar_cambios' ocurre el bloque de instrucciones.
        if(array_key_exists('guardar_cambios',$_POST)){
            // 2') Almacenamos los datos actualizados del envío POST
            // a) generar variables para cada dato a almacenar en la bbdd
            // Si se desea almacenar una imagen en la base de datos usar lo siguiente:
            // addslashes(file_get_contents($_FILES['ID NOMBRE DE LA IMAGEN EN EL FORMULARIO']['tmp_name']))
            $tipodeprenda=$_POST['tipodeprenda'];
            $marca=$_POST['marca'];
            $talle=$_POST['talle'];
            $precio=$_POST['precio'];
            $imagen=addslashes(file_get_contents($_FILES['imagen']['tmp_name']));
            // 3') Preparar la orden SQL
            // "UPDATE tabla SET campo1='valor1', campo2='valor2', campo3='valor3', campo3='valor3', campo3='valor3' WHERE campo_clave=valor_clave"
            // a) generar la consulta a realizar
             $consulta = "UPDATE ropa SET tipodeprenda='$tipodeprenda', marca='$marca', talle='$talle', precio='$precio', imagen='$imagen' WHERE id=$id";
            // 4') Ejecutar la orden y actualizamos los datos
            // a) ejecutar la consulta
            mysqli_query($conexion,$consulta);
            // a) redirigir a index
            header('location: listar.php');
          } ?> 
      
<br>


      
<footer>
        <!-- Copyright -->
        <div class="text-center p-3">
          © 2022 Developed by
          <a class="text-dark" href="https://wa.me/+542914131566?text=Hola,%20me%20interesa%20un%20producto.">Paferdu</a>
        </div>
        <!-- Copyright -->
      </footer>

    </body>
</html>
