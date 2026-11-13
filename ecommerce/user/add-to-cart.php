<?php 

session_start();
if (isset($_SESSION['user_id'])  && $_SESSION['role'] == 'user') {
  
echo "<script>
    alert('Added to cart!')
    
</script>";

} else {
  
echo "<script>
    alert('Please login first..!')
    location.href='./login.php'
</script>";
}



?>

