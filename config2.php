<?php
$username = $_POST['username'];
$password = $_POST['password'];

$conn = new mysqli('localhost','root','','dbms');
if($conn->connect_error){
    echo "$conn->connect_error";
    die("Connection Failed : ". $conn->connect_error);
} else {
$stmt = $conn->prepare("SELECT username, password FROM reg WHERE username=? AND password=? ");
    $stmt->bind_param('ss', $username, $password);
    $stmt->execute();
    $stmt->bind_result( $username, $password);
    $stmt->store_result();
    if($stmt->num_rows > 0)  //To check if the row exists
        {
        $stmt->fetch();
         $_SESSION['username'] = $username;

            echo "LOGGED-IN";
           

    }
    else {
        //$_SESSION['invalid_details']="INVALID USERNAME/PASSWORD Combination!";
        //header('location:index.html');
        echo "INCORRECT PASSWORD";
    }
    $stmt->close();
}


?>
