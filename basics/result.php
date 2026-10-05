<?php 
if(isset($_REQUEST['submit'])){
    $username= $_REQUEST['username'];
    $email= $_REQUEST['email'];
    $age= $_REQUEST['age'];
    $password= $_REQUEST['password'];

    echo"<h1>Username : $username</h1>";
    echo"<h1>Email : $email</h1>";
    echo"<h1>Age : $age</h1>";
    echo"<h1>Password ( It's secret)</h1>";

}


?>