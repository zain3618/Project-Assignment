<?php
if(!isset($_SESSION['user_email'])){
    header('location: login.php?not_admin=You are not Admin!');
}
if(isset($_GET['edit_pro'])){
    $get_id = $_GET['edit_pro'];
    $get_pro = "select * from recipe where recipe_id='$get_id'";
    $run_pro = mysqli_query($con, $get_pro);
    $row_pro = mysqli_fetch_array($run_pro);
    $pro_id = $row_pro['recipe_id'];
    $pro_title = $row_pro['recipe_name'];
    $pro_cat = $row_pro['recipe_cat'];
    $pro_brand = $row_pro['recipe_type'];
    $pro_title = $row_pro['recipe_name'];
    $pro_image = $row_pro['recipe_images'];
    $pro_desc = $row_pro['recipe_desc'];

    $get_cat = "select * from categories where cat_id = '$pro_cat'";
    $run_cat = mysqli_query($con,$get_cat);
    $row_cat = mysqli_fetch_array($run_cat);
    $cat_title = $row_cat['cat_title'];

    $get_brand = "select * from types where type_id = '$pro_brand'";
    $run_brand = mysqli_query($con,$get_brand);
    $row_brand = mysqli_fetch_array($run_brand);
    $brand_title = $row_brand['type_title'];
}
if(isset($_POST['update_pro'])){
    //getting text data from the fields
    $pro_title = $_POST['recipe_name'];
    $pro_cat = $_POST['recipe_cat'];
    $pro_brand = $_POST['recipe_type'];
    $pro_desc = $_POST['recipe_desc'];
    //getting image from the field
    $pro_image = $_FILES['recipe_images']['name'];
    $pro_image_tmp = $_FILES['recipe_images']['tmp_name'];

    move_uploaded_file($pro_image_tmp,"product_images/$pro_image");

    $update_product = "update recipe set recipe_cat = '$pro_cat', 
                                        recipe_type = '$pro_brand',
                                        recipe_name = '$pro_title' ,
                                        recipe_desc = '$pro_desc',
                                        recipe_images = '$pro_image',  
                                        where recipe_id='$pro_id'";

    $update_pro = mysqli_query($con, $update_product);
    if($update_pro){
        header("location: index.php?view_products");
    }
}
?>
<div class="row">
    <div class="offset-md-2 col-md-8">
        <form action="" method="post" enctype="multipart/form-data">
            <div class="form-group row">
                <h2 class="offset-lg-3 offset-md-2 offset-1 "> Edit & Update Product </h2>
            </div>
            <div class="form-group row">
                <label class="col-form-label col-sm-4 col-lg-3 d-none d-sm-block" for="recipe_name">Recipe Name</label>
                <div class="col-12 col-sm-8 col-lg-9">
                    <input class="form-control" type="text" id="recipe_name" name="recipe_name" placeholder="Title"
                           value="<?php echo $pro_title;?>">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-form-label col-sm-4 col-lg-3 d-none d-sm-block" for="recipe_cat">Product Category</label>
                <div class="col-12 col-sm-8 col-lg-9">
                    <select name="recipe_cat" id="recipe_cat" required class="form-control">
                        <option><?php echo $cat_title;?></option>
                        <?php
                        $get_cats = "select * from categories";
                        $run_cats = mysqli_query($con, $get_cats);
                        while ($row_cats= mysqli_fetch_array($run_cats)){
                            $cat_id = $row_cats['cat_id'];
                            $cat_title = $row_cats['cat_title'];
                            echo "<option value='$cat_id'>$cat_title </option>";
                        }
                        ?>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-form-label col-sm-4 col-lg-3  d-none d-sm-block" for="recipe_type">Product Brand</label>
                <div class="col-12 col-sm-8 col-lg-9">
                    <select name="recipe_type" id="recipe_type" required class="form-control">
                        <option><?php echo $brand_title;?></option>
                        <?php
                        $get_brands = "select * from types";
                        $run_brands = mysqli_query($con, $get_brands);
                        while ($row_brands= mysqli_fetch_array($run_brands)){
                            $brand_id = $row_brands['type_id'];
                            $brand_title = $row_brands['type_title'];
                            echo "<option value='$brand_id'>$brand_title </option>";
                        }
                        ?>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-form-label col-sm-4 col-lg-3 d-none d-sm-block" for="recipe_images">Product Image</label>
                <div class="col-12 col-sm-8 col-lg-9">
                    <img class="img-thumbnail" src='product_images/<?php echo $pro_image;?>' width='80' height='80'>
                    <input class="form-control-file" type="file" id="recipe_images" name="recipe_images" required>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-form-label col-sm-4 col-lg-3 d-none d-sm-block" for="recipe_desc">Product Description</label>
                <div class="col-12 col-sm-8 col-lg-9">
                    <textarea class="form-control"  name="recipe_desc" id="recipe_desc" rows="4" placeholder="Product Description">
                        <?php echo $pro_desc;?>
                    </textarea>
                </div>
            </div>
            <div class="form-group row">
                <div class="offset-sm-3 col-12 col-sm-6">
                    <input class="btn btn-block btn-primary btn-lg" type="submit" id="update_pro" name="update_pro"
                           value="Update Product Now">
                </div>
            </div>
        </form>
    </div>
</div>
