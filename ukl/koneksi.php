<?php
$conn=mysqli_connect ('localhost','root','','ukl');
/*check connection */
if (mysqli_connect_error()){
    printf("connet failed: %s\n", mysqli_connect_error());
    exit();
}
?>
