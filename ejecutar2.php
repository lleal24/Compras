 <?php 
        $conexion=mysqli_connect('localhost','root','','ventas');
        $result = mysqli_query($conexion, 
        "CALL Descontaritem(3,1)") or die("Query fail: " . mysqli_error()); 
        mysqli_close($conexion);
      
      ?>