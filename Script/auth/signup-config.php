<?php

// $con = mysqli_connect("localhost","root","","chat-app");
$con = mysqli_connect("remotemysql.com","SoL1qfXgsW","CvieyngFhG","SoL1qfXgsW");
echo $con ?   null : mysqli_connect_error();

?>