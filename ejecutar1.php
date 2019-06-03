
<script>
  function accion(){
    <?php 
    try{
      $conexion=mysqli_connect('localhost','root','','ventas');
      $mysqli->autocommit(FALSE);
      $result = mysqli_query($conexion, 
      "CALL Descontaritem(1,1)") or die("Query fail: " . mysqli_error()); 
      $mysqli->commit();
    }catch(Exception $e){
      echo 'Message: ' .$e->getMessage();
      $mysqli->rollback();

    }finally{
      mysqli_close($conexion);
    }
              
    ?>
  }
</script>
