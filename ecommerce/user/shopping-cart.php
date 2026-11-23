<?php 
include_once("./components/header.php");
require_once("../config/connection.php");
// session_start();
if (!isset($_SESSION['user_id'])  && $_SESSION['role'] != 'user') {
echo "<script>
    alert('Please login first..!')
    location.href='./login.php'
</script>";
}
$grandTotal=0;

?>
            <!-- Begin Li's Breadcrumb Area -->
            <div class="breadcrumb-area">
                <div class="container">
                    <div class="breadcrumb-content">
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li class="active">Shopping Cart</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Li's Breadcrumb Area End Here -->
            <!--Shopping Cart Area Strat-->
            <div class="Shopping-cart-area pt-60 pb-60">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <form action="#">
                                <div class="table-content table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th class="li-product-remove">remove</th>
                                                <th class="li-product-thumbnail">images</th>
                                                <th class="cart-product-name">Product</th>
                                                <th class="li-product-price">Unit Price</th>
                                                <th class="li-product-quantity">Quantity</th>
                                                <th class="li-product-subtotal">Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
<?php 
$user_id=$_SESSION['user_id'];
$getCartData="SELECT * FROM `cart` as c
INNER JOIN `products` as p
ON c.product_id = p.product_id  where user_id=$user_id";
$getCartResult = mysqli_query($conn, $getCartData);
if (mysqli_num_rows($getCartResult) > 0) {
    while($row=mysqli_fetch_assoc($getCartResult)){

    $grandTotal += $row['total'];//10 20
?>
 <tr><td class="li-product-remove"><a href="#"><i class="fa fa-times"></i></a></td>
                                                <td class="li-product-thumbnail"><a href="#"><img src="../admin/uploads/<?= $row['image'] ?>" alt="Li's Product Image" height="100"></a></td>
                                                <td class="li-product-name"><a href="#"><?= $row['title'] ?></a></td>
                                                <td class="li-product-price"><span class="amount"><?= $row['price'] ?></span></td>
                                                <td class="quantity">
                                                    <label>Quantity</label>
                                                    <div class="cart-plus-minus">
                                                        <input class="cart-plus-minus-box" value="<?= $row['qty'] ?>" type="text">
                                                        <div class="dec qtybutton"><i class="fa fa-angle-down"></i></div>
                                                        <div class="inc qtybutton"><i class="fa fa-angle-up"></i></div>  </div> </td>
                                                <td class="product-subtotal"><span class="amount"><?= $row['total'] ?></span></td>
                                            </tr>
<?php
    }  
} else {
    echo "<h1>Nothing to show</h1>";
}



?>

                                           
                                           
                                        </tbody>
                                    </table>
                                </div>
                               
                                <div class="row">
                                    <div class="col-md-5 ml-auto">
                                        <div class="cart-page-total">
                                            <h2>Cart totals</h2>
                                            <ul>
                                                <li>Subtotal <span>Rs. <?= $grandTotal ?></span></li>

                                                <li>Delivery Charges <span>Rs. 1200</span></li>

                                                <li>Total <span>Rs. <?php echo $grandTotal+1200; ?></span></li>
                                            </ul>
                                            <a href="./checkout.php">Proceed to checkout</a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!--Shopping Cart Area End-->
            <!-- Begin Footer Area -->
        
<?php 
include_once("./components/footer.php")
?>