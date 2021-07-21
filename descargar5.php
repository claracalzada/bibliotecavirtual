<?php
include("cn.php");

$item_id =$_GET['id'];
    $query = "SELECT * FROM septo WHERE id = '$item_id'";
    $result = mysqli_query($connection,$query) 
           or die('Error, query failed');
    list($name, $archivo, $id, $mime,$size) = mysqli_fetch_array($result);
    header("Content-length: $size");
     header("Content-type: $mime");
    header("Content-Disposition: attachment; filename=$name.stl");
   

    ob_clean();
    flush();
    echo $archivo;

mysqli_close($connection);
exit;

?>