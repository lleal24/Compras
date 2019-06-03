 <?php 

for ($x = 1; $x <= 4; $x++) {
  $conexion=mysqli_connect('localhost','root','','ventas');
  $result = mysqli_query($conexion, 
  "CALL Recargar($x,15)") or die("Query fail: " . mysqli_error()); 
  mysqli_close($conexion);
  
} 
     
header("Location: index.php");

?>