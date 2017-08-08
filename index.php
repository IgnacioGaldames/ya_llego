<?php include '_includes/db_conn.php'; 
$sql = "SELECT db_value FROM table_estado";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $estado = $row["db_value"];
        if ($estado == 0) {
            $defcon = "defcon-5";
            $llego = "No ha llegado";

        }
        else {
            $defcon = "defcon-1";
            $llego = "Ya llegó";
            $icon = "<i class='fa fa-exclamation-triangle' aria-hidden='true'></i>";
        }
        
    }
} else {
    echo "0 resultados";
}
$conn->close();
?><!DOCTYPE html>
<html lang="es">
  <head>
<?php 
include_once("_conf/main_conf.php");
include_once("_includes/header.php");
?>
  </head>
  <body class="<?php echo $defcon ?>">
      <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="row d-flex justify-content-center align-items-center full-height text-center">
                    <div class="col-md-6 card">
                        <div class="p-3 wow pulse" data-wow-delay="0.2s">
                            
                            <h1 class="display-3">
                                <strong>
                                <?php echo $icon; ?>
                                <?php echo $llego; ?>
                                </strong>
                            </h1>
                        </div>
                        <div class="p-3  wow fadeIn" data-wow-delay="0.4s">
                            <form action="_includes/form.php" method="post" id="form">
                            <div class="radio">
                                <label>
                                    <input type="radio" name="form_value" value="true">
                                    Ya llegó
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="form_value" value="false">
                                    No ha llegado
                                </label>
                            </div>
                            </form>
                        </div>
                        <div class="p-3  wow fadeIn" data-wow-delay="0.6s">
                            <button class="btn btn-primary" type="submit" form="form" value="Submit">
                                guardar
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>
    
	<?php include_once("_includes/footer/js.php");  ?>

  </body>
</html>