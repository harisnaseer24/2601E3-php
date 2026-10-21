<?php 
require_once("../config/connection.php");
if(isset($_GET['id'])){
$id = $_GET['id'];



$getProduct= "SELECT * from products where product_id=$id";
$getProductResult = mysqli_query($conn, $getProduct);

$row = mysqli_fetch_assoc($getProductResult);

// if ($result) {
//  echo "<script>
//  alert('Product Deleted Successfully')
//     location.href= './products.php'
//     </script>";
// } else {
//     echo "<script>
//  alert('Fail to Delete Product')
//     location.href= './products.php'
//     </script>";
// }
?>


<!-- update form -->


<?php 
include_once ("./components/header.php");


?>
     <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="page-header">
            <h3 class="page-title">
         Update product
            </h3>
          </div>
          <div class="card">
            <div class="card-body">
              <div class="row">
 <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Update Product Form</h4>
                  <p class="card-description">
                   Enter product details
                  </p>
                  <form class="forms-sample" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                      <label for="title">Title</label>
                      <input type="text" class="form-control" id="title" name="title" placeholder="title" value="<?= $row['title'] ?>">
                    </div>
                   
                
 <div class="form-gro`up">
                      <label for="price">price</label>
                      <input type="number" class="form-control" id="price" name="price" placeholder="price"  value="<?= $row['price'] ?>" >
                    </div>

                     <div class="form-group">
                      <label for="stock">stock</label>
                      <input type="number" class="form-control" id="stock" name="stock" placeholder="stock"  value="<?= $row['stock'] ?>">
                    </div>
                       <!-- <div class="form-group">
                      <label for="image">image</label>
                      <input type="text" class="form-control" id="image" name="image" placeholder="image">
                    </div> -->






                    <div class="form-group">
                      <label for="Categories">Categories</label>
                        <select class="form-control" id="Categories" name="cat_id">
                          <?php 
$getCategories="SELECT * FROM `categories`";
$getCategoriesResult= mysqli_query($conn,$getCategories);

while ($row1 = mysqli_fetch_assoc($getCategoriesResult)) {
$catId=$row1['cat_id'];
$catName=$row1['cat_name'];

if ($row1['cat_id'] == $row['cat_id']) {
    # code...
    echo "<option value='$catId' selected >$catName</option>";
} else {
    echo "<option value='$catId'>$catName</option>";
    # code...
}


}
?>   
                        </select>
                      </div>
                    <div class="form-group">
                      <label>File upload</label>
                      <input type="file" name="img" class="file-upload-default">
                      <div class="input-group col-xs-12">
                        <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                        <span class="input-group-append">
                          <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                        </span>
                      </div>
                    </div>
                   
                    <div class="form-group">
                      <label for="exampleTextarea1">Textarea</label>
                      <textarea class="form-control" name="description" id="exampleTextarea1" rows="4">
                        <?= $row['description'] ?>
                      </textarea>
                    </div>
                    <button type="submit" name="updateProduct" class="btn btn-primary mr-2">Submit</button>
                    <button class="btn btn-light">Cancel</button>
                  </form>
                </div>
              </div>
            </div>

              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2018 <a href="https://www.urbanui.com/" target="_blank">Urbanui</a>. All rights reserved.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="far fa-heart text-danger"></i></span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    <?php 
include_once ("./components/footer.php");
if(isset($_POST['updateProduct'])){
  $title = $_POST['title'];
  $price = $_POST['price'];
  $stock = $_POST['stock'];
  // $image = $_POST['image'];
  $description = $_POST['description'];
  $cat_id = $_POST['cat_id'];
$valid_types=["image/png","image/jpeg","image/jpg","image/webp","image/jfif","image/gif"];

  if($_FILES['img']['error'] == 4){
    echo "<script>alert('Please select an image first.')
  </script>";
  }
  elseif($_FILES['img']['size'] > 2000000){
    echo "<script>alert('File size too large. Please upload image under 2 MB')
  </script>";
  }
  elseif(!in_array($_FILES['img']['type'],$valid_types)){
    echo "<script>alert('Invalid File Type')
  </script>";
  }
else{


$imageName = $_FILES['img']['name'];

  $updateProduct="UPDATE `products` SET `title`='$title', `description`='$description', `price`='$price', `stock`='$stock', `image`='$imageName', `cat_id`='$cat_id' where product_id=$id";
  $result= mysqli_query($conn, $updateProduct);
  if ($result) {
move_uploaded_file($_FILES['img']['tmp_name'], "uploads/".$imageName);

echo "<script>alert('Product Updated Successfully')
location.href='./products.php'
  </script>";

  } else {
  echo "<script>alert('Failed to update product right now..!')
  </script>";
  }
  }
}

?>
  <script src="./js/file-upload.js"></script>





<?php



}else{
    echo "<script>
    location.href= './products.php'
    </script>";
}

?>