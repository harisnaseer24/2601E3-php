<?php 




session_start();
include_once("../config/connection.php");
if (isset($_SESSION['user_id'])  && $_SESSION['role'] == 'user') {
  
$user_id=$_SESSION['user_id'];
$price= $_POST['price'];//100
$qty= $_POST['qty'];//4
$product_id= $_POST['product_id'];
$total= $price * $qty; // 100 * 4= 400

$addtoCart= "INSERT INTO `cart`( `product_id`, `qty`, `user_id`, `price`, `total`) VALUES ($product_id, $qty, $user_id, $price, $total)";

$result= mysqli_query($conn, $addtoCart);
if ($result) {
echo "<script>
    alert('Added to cart successfully!')
    location.href='./shop.php'
    
</script>";
} else {
echo "<script>
    alert('Failed to add product in cart!')
     location.href='./productDetails.php?id=$product_id'
</script>";
}

} else {
  
echo "<script>
    alert('Please login first..!')
    location.href='./login.php'
</script>";
}



?>

