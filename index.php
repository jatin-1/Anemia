<?php
$insert= false;
if(isset($_POST['name'])){
    $server ="localhost";
    $username = "root";
    $password="";

    $con = mysqli_connect($server , $username, $password);

    if(!$con){
        die("connection to this databse failed due to" . mysqli_connect_error());
    
    }
    $name = $_POST['name'];
    $appointmentdate = $_POST['appointmentdate'];
    $age = $_POST['age'];
    $sex = $_POST['sex'];
    $phonenumber = $_POST['phonenumber'];
    $emailid = $_POST['emailid'];

    $sql ="INSERT INTO `anemia`.`doctorappoinment` (`name`, `appointmentdate`, `age`, `sex`, `phonenumber`, `emailid`) VALUES ('$name', '$appointmentdate', '$age', '$sex', '$phonenumber', '$emailid');";

    if($con->query($sql) == true ){
        $insert = true;

    }
    else{
        echo"error: $sql <br> $con->error";
    }
    $con->close();

}
?>
