<?php
session_start();
    $userName = $_POST['Username'];
    $MobileNumber = $_POST['mobilenumber'];
    $Password = $_POST['password'];

    if ($userName!='' && $Password!='') {
        # code...
        if (strlen($MobileNumber)==10) {
            # code...
        $conn = mysqli_connect('localhost','root','','restaurentpage') or die("could not connect");
        $query = "select mobilenumber from userdetails where mobilenumber ='".$MobileNumber."'";
        $row = mysqli_query($conn,$query);
        if(mysqli_num_rows($row) == 0){
            $query = "insert into userdetails values('".$userName."','".$MobileNumber."','".$Password."')";
            if (mysqli_query($conn,$query)) {
                # code...
                echo "You successfully Registered.";
                header('Location:login.php');
            }else {
                echo "Registration Failed";
            }
        }else {
            # code...
            echo "This mobile number already have an account";
        }

    }else {
        # code...
        echo "Please Enter Valid Details";
    }
}
?>