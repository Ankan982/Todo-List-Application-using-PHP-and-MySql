
<?php
require_once("config.php");
$event_name = $_GET["id"];


$sql = "DELETE FROM todo WHERE id=$event_name";

if ($conn->query($sql) === TRUE) {
    echo "EVENT DELETED";
    header("Location: display.php"); 
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

?>