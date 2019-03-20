<?php
    session_start();
    $username = $_POST['Username'];
    $password = $_POST['password'];

    if($username!='' && $password!=''){
        $conn = mysqli_connect('localhost','root','','restaurentpage') or die ("could not connect");
        $query = "select * from userdetails where userName ='".$username."' and password ='".$password."'";

        $row = mysqli_query($conn,$query);
        if(mysqli_num_rows($row) == 1){
           // $arr = mysqli_fetch_assoc($row);
            header('Location:varities.php');
        }else {
            echo "Enter Valid Details.";
        }
    }
?>