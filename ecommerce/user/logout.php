<?php 
session_start();
session_destroy();
echo "<script>
   alert('Logging you out..!');
location.href='./login.php'</script>";


?>
