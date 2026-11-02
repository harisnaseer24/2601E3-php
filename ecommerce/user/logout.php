<?php 
session_start();
session_destroy();
echo "<script>
   alert('Loggeing you out..!');
location.href='./login.php'</script>";


?>
