<?php 
require_once("../config/connection.php");
if(isset($_GET['id'])){
$id = $_GET['id'];
$deleteProduct= "DELETE from products where product_id=$id";
$result = mysqli_query($conn, $deleteProduct);

if ($result) {
 echo "<script>
 alert('Product Deleted Successfully')
    location.href= './products.php'
    </script>";
} else {
    echo "<script>
 alert('Fail to Delete Product')
    location.href= './products.php'
    </script>";
}
}else{
    echo "<script>
    location.href= './products.php'
    </script>";
}

?>