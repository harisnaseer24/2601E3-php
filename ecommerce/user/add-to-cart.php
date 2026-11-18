<?php 




session_start();
include_once("../config/connection.php");
if (isset($_SESSION['user_id'])  && $_SESSION['role'] == 'user') {
  
$user_id=$_SESSION['user_id'];
$price= $_POST['price'];//100
$qty= $_POST['qty'];//4
$product_id= $_POST['product_id'];
$total= $price * $qty; // 100 * 4= 400

$checkCart="SELECT * from cart where product_id=$product_id and user_id=$user_id ";
$checkCartResult= mysqli_query($conn, $checkCart);
if (mysqli_num_rows($checkCartResult) > 0) {

$oldData= mysqli_fetch_assoc($checkCartResult);
//  7        4       3
$newQty = $qty + $oldData['qty'];
$newTotal = $newQty * $price;//7 * 100 = 700

 $updateCart= "UPDATE `cart` set `qty`= $newQty,  `total` = $newTotal WHERE product_id=$product_id and user_id=$user_id";

$result= mysqli_query($conn, $updateCart);
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


    # code...
} else {
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
}






} else {
  
echo "<script>
    alert('Please login first..!')
    location.href='./login.php'
</script>";
}



?>

