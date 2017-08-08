<?php
include 'db_conn.php';

$dbtable = "table_estado";

$myValue= $_POST['form_value'];

$sql = "UPDATE $dbtable
        SET db_value=$myValue";

if ($conn->query($sql) === TRUE) {
    header( 'Location: ../index.php' ) ;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
