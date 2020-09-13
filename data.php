<?php
$conn=mysqli_connect("sql110.epizy.com","epiz_25984873","bOirGW8QwO7UuGm","epiz_25984873_reg_data");


$sql = "SELECT * FROM `user_data`";
$result = mysqli_query($conn,$sql);
   
$row = mysqli_fetch_all($result, MYSQLI_ASSOC);
exit(json_encode($row));
?>