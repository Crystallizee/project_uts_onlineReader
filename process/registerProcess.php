<?php
    if(isset($_POST['register'])){
    include('../db.php');
    
    $name       = strtolower(stripslashes($_POST['name']));
    $username   = strtolower(stripslashes($_POST['username']));
    $password   = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $email      = $_POST['email'];
    $phone      = $_POST['phone'];
    $photo      = $_POST['photo'];

    $result = mysqli_query($con,"SELECT username FROM users WHERE username = '$username'");
        
        if (mysqli_fetch_assoc($result)) {
            echo "<script>
                    alert('username sudah terdaftar');
                </script>";
                return false;
        }
       
        $query = mysqli_query($con,"INSERT INTO users VALUES('','$name','$username','$password','$email','$phone','$photo')") or die(mysqli_error($con));
        
        if($query){
            echo
                '<script>
                alert("Register Success"); window.location = "../page/listPage.php"
                </script>';
        }else{
            echo
                '<script>
                alert("Register Failed");
                </script>';
        }
}else{
    echo
        '<script>
        window.history.back()
        </>';
}
?>