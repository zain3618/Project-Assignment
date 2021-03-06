<?php
if(!isset($_SESSION['user_email'])){
    header('location: login.php?not_admin=You are not Admin!');
}

if(isset($_POST['insert_pro'])){
    //getting text data from the fields
    $pro_title = $_POST['recipe_name'];
    $pro_desc = $_POST['recipe_desc'];
    $pro_cat = $_POST['recipe_cat'];
    $pro_brand = $_POST['recipe_type'];

    //getting image from the field
    $pro_image = $_FILES['recipe_images']['name'];
    $pro_image_tmp = $_FILES['recipe_images']['tmp_name'];
    move_uploaded_file($pro_image_tmp,"product_images/$pro_image");

    $insert_product = "insert into recipe (recipe_name, recipe_desc,recipe_cat,recipe_images,recipe_type) 
                  VALUES ('$pro_title','$pro_desc','$pro_cat','$pro_image','$pro_brand');";
    $insert_pro = mysqli_query($con, $insert_product);
    if($insert_pro){
        header("location: ".$_SERVER['PHP_SELF']);
    }
}
?>
<h1 class="text-center my-4"><i class="fas fa-plus fa-md"></i> <span class="d-none d-sm-inline"> Add New </span> Item </h1>
<form action="" method="post" enctype="multipart/form-data">
    <div class="row">
        <div class="d-none d-sm-block col-sm-3 col-md-4 col-lg-2 col-xl-2 mt-auto">
            <label for="recipe_name" class="float-md-right"> <span class="d-sm-none d-md-inline"> Item </span> Name:</label>
        </div>
        <div class="col-sm-9 col-md-8 col-lg-4 col-xl-4">
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text"><i class="fas fa-file-signature"></i></div>
                </div>
                <input type="text" class="form-control" id="recipe_name" name="recipe_name" placeholder="Enter Recipe Name" >
            </div>
        </div>
        <div class="d-none d-sm-block col-sm-3 col-md-4 col-lg-2 col-xl-2 mt-auto">
            <label for="recipe_cat" class="float-md-right"><span class="d-sm-none d-md-inline"> Product </span> Category:</label>
        </div>
        <div class="col-sm-9 col-md-8 col-lg-4 col-xl-4 mt-3 mt-lg-0">
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text"><i class="fas fa-list-alt"></i></div>
                </div>
                <select class="form-control" id="recipe_cat" name="recipe_cat">
                    <option>Select Category</option>
                    <?php
                    $getCatsQuery = "select * from categories";
                    $getCatsResult = mysqli_query($con,$getCatsQuery);
                    while($row = mysqli_fetch_assoc($getCatsResult)){
                        $cat_id = $row['cat_id'];
                        $cat_title = $row['cat_title'];
                        echo "<option value='$cat_title'>$cat_title</option>";
                    }
                    ?>
                </select>
            </div>
        </div>
    </div>
    <div class="row my-3">
        <div class="d-none d-sm-block col-sm-3 col-md-4 col-lg-2 col-xl-2 mt-auto">
            <label for="recipe_type" class="float-md-right"> <span class="d-sm-none d-md-inline"> Recipe </span> Type:</label>
        </div>
        <div class="col-sm-9 col-md-8 col-lg-4 col-xl-4">
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text"><i class="fas fa-stamp"></i></div>
                </div>
                <select class="form-control" id="recipe_type" name="recipe_type">
                    <option>Select Type</option>
                    <?php
                    $getBrandsQuery = "select * from types";
                    $getBrandsResult = mysqli_query($con,$getBrandsQuery);
                    while($row = mysqli_fetch_assoc($getBrandsResult)){
                        $brand_id = $row['type_id'];
                        $brand_title = $row['type_title'];
                        echo "<option value='$brand_title'>$brand_title</option>";
                    }
                    ?>
                </select>
            </div>
        </div>
        <div class="d-none d-sm-block col-sm-3 col-md-4 col-lg-2 col-xl-2 mt-auto">
            <label for="recipe_images" class="float-md-right"><span class="d-sm-none d-md-inline"> Product </span> Image:</label>
        </div>
        <div class="col-sm-9 col-md-8 col-lg-4 col-xl-4 mt-3 mt-lg-0">
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text"><i class="far fa-image"></i></div>
                </div>
                <input class="form-control" type="file" id="recipe_images" name="recipe_images">
            </div>
        </div>
    </div>
    <div class="row my-3">
<!--        <div class="d-none d-sm-block col-sm-3 col-md-4 col-lg-2 col-xl-2 mt-auto">
            <label for="pro_price" class="float-md-right"> <span class="d-sm-none d-md-inline"> Product </span> Price:</label>
        </div>-->
<!--        <div class="col-sm-9 col-md-8 col-lg-4 col-xl-4">
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text"><i class="fas fa-money-bill"></i></div>
                </div>
                <input class="form-control" id="pro_price" name="pro_price" placeholder="Enter Product Price">
            </div>
        </div>-->
<!--        <div class="d-none d-sm-block col-sm-3 col-md-4 col-lg-2 col-xl-2 mt-auto">
            <label for="pro_kw" class="float-md-right"><span class="d-sm-none d-md-inline"> Product </span> Keyword:</label>
        </div>
        <div class="col-sm-9 col-md-8 col-lg-4 col-xl-4 mt-3 mt-lg-0">
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text"><i class="fas fa-key"></i></div>
                </div>
                <input class="form-control" type="text" id="recipe_keywords" name="pro_keywords" placeholder="Enter Product Keywords">
            </div>
        </div>-->
    </div>
    <div class="row my-3">
        <div class="d-none d-sm-block col-sm-3 col-md-4 col-lg-2 col-xl-2 mt-auto">
            <label for="recipe_desc" class="float-md-right"><span class="d-sm-none d-md-inline"> Product </span> Detail:</label>
        </div>
        <div class="col-sm-9 col-md-8 col-lg-4 col-xl-4">
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text"><i class="far fa-comment-alt"></i></div>
                </div>
                <textarea class="form-control" type="file" id="recipe_desc" name="recipe_desc" placeholder="Enter Product Detail"></textarea>
            </div>
        </div>
    </div>
    <div class="row my-3">
        <div class="d-none d-sm-block col-sm-3 col-md-4 col-lg-2 col-xl-2 mt-auto"></div>
        <div class="col-sm-9 col-md-8 col-lg-4 col-xl-4">
            <button type="submit" name="insert_pro" class="btn btn-primary btn-block"><i class="fas fa-plus"></i> Insert Now </button>
        </div>
    </div>
</form>

