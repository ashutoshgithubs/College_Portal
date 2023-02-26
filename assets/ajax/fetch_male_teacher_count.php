<?php

include '../conn/conn.php';
$sql = "SELECT * FROM teacher WHERE gender = 'male'";
$fire = mysqli_query($conn,$sql);
$fetchMaleTeacherCount = mysqli_num_rows($fire);

echo $fetchMaleTeacherCount ;

?>