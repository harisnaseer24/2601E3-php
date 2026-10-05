<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="./result.php" method="post">
    <h1 title="heading" class="">hi</h1>
    <input type="text" name="username" placeholder="Enter your Name" required><br>
    <input type="email" name="email" placeholder="Enter your Email" required><br>
    <input type="number" name="age" placeholder="Enter your age" required><br>
    <input type="password" name="password" placeholder="Enter your strong password" required><br>
    <input type="submit" name="submit" value="submit">
</form>

    
</body>
</html>

<?php 
//superglobals $_GET, $_POST, $_REQUEST, $_FILES, $_SESSION, $_COOKIE, $_SERVER


// if(isset($_GET['submit'])){
//     $username= $_GET['Username'];
//     echo"<h1>$username</h1>";

// }

// if(isset($_POST['submit'])){
//     $username= $_POST['username'];
//     $email= $_POST['email'];
//     $age= $_POST['age'];
//     $password= $_POST['password'];

//     echo"<h1>Username : $username</h1>";
//     echo"<h1>Email : $email</h1>";
//     echo"<h1>Age : $age</h1>";
//     echo"<h1>Password ( It's secret)</h1>";

// }


// if(isset($_POST['submit'])){
//     $username= $_POST['username'];
//     $email= $_POST['email'];
//     $age= $_POST['age'];
//     $password= $_POST['password'];

//     echo"<h1>Username : $username</h1>";
//     echo"<h1>Email : $email</h1>";
//     echo"<h1>Age : $age</h1>";
//     echo"<h1>Password ( It's secret)</h1>";

// }
// if(isset($_REQUEST['submit'])){
//     $username= $_REQUEST['username'];
//     $email= $_REQUEST['email'];
//     $age= $_REQUEST['age'];
//     $password= $_REQUEST['password'];

//     echo"<h1>Username : $username</h1>";
//     echo"<h1>Email : $email</h1>";
//     echo"<h1>Age : $age</h1>";
//     echo"<h1>Password ( It's secret)</h1>";

// }

?>