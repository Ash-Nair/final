<?php
session_start();

?>
<!DOCTYPE html>
<html>
<head>
    <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
    
</head>
<body style="background-color: cornflowerblue">
    <form action="signin.php" method="POST">
        <br><br><br>
        <label style="font-family:'Oswald', sans-serif; size: 30px;">Username:</label><input type="text" name="username" value="" placeholder="username" style="size: 30px"><br>
        <label style="font-family:'Oswald', sans-serif; size: 30px" >Password:</label><input type="password" name="pwd" value="" placeholder="password" style="30px"><br>
        <button type="submit">Login</button><br>
    </form>
</body>
</html>