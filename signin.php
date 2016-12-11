<?php
//include database connection path
include 'dbhandler.php';
//variables to return values of uinput
$uname = $_POST['username'];
$password = $_POST['pwd'];

//insert user inputted values into database for storage
$sql = "SELECT * FROM user WHERE username = '$uname' AND pwd = '$password'";
$result = mysqli_query($conn, $sql);
if(!$row = mysqli_fetch_assoc($result)){
    echo "Username or Password is incorrect. Please Try Again.";
}
else{
    //echo "Welcome User!";
    $_SESSION['idnum'] = $row['id'];
}

//Test Cases
/*echo $fname."<br>"; 
echo $lname."<br>"; 
echo $uname."<br>"; 
echo $password."<br>";*/

//return result
//return to homepage
header("Location: index.php ");

?>
