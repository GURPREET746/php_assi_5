<?php
$conn=mysqli_connect("sql110.epizy.com","epiz_25984873","bOirGW8QwO7UuGm","epiz_25984873_reg_data");

$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];
$education=$_POST['edu'];


$sql = "INSERT INTO `user_data` (`S_NO`, `NAME`, `EMAIL`, `PASSWORD`, `EDUCATION`, `DATE`) VALUES (NULL, '$name', '$email', '$password', '$education', current_timestamp())";
$result = mysqli_query($conn,$sql);
if($result){
    echo '
    <div class="alert alert-success" style="width: 37%;" role="alert">
       Sucess!! New User registered!!
    </div>
    ';
}
?>