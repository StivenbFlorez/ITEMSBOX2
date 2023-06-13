<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
 
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>

<body>


<?php  

    $conexion= new mysqli("localhost","root","", "bdfacturas");
            if ($conexion) {

                echo "conexion establecida";
                
            }

         else {
             echo "paila bro";
            }




    ?>
</body>
<footer>
   
</footer>   
</html></html>