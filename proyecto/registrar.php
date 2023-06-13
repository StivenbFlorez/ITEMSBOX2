<?php
include("conexion.php");

/*if ($conexion) 
{
  echo "Conexion establecida";
}
else 
{
  echo "Error: No se pudo conectar";
}*/

if (isset($_POST['register'])) // la función isset() evalua si una variable esta definida.  
  {
    
    if (strlen($_POST['Nombre']) && strlen($_POST['Clave'])) // La función strlen() obtiene una longitud de una cadena string
    {
      $nombre = trim($_POST['Nombre']); //la función trim() me elimina los espacios en blanco u otros caracteres al inicio y al final de una cadena de caracteres.
      $password = trim($_POST['Clave']);
      $consulta="INSERT INTO usuario(CodUsuario, Clave) VALUES ('$nombre','$password')";
      $resultado=mysqli_query($conexion,$consulta);
      
      if($resultado)
      {
        ?>
        <h3 class="ok">Muy bien</h3>
        <?PHP
      }
      else 
      {
        ?>
        <h3 class="mal">Ha ocurrido un error</h3>
        <?PHP
      }
    }
      else
      {
          ?>
          <h3 class="mal">Por favor complete los campos</h3>
          <?PHP
      }
      
  }
?>