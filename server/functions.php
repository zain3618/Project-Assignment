<?php
require_once "db_connection.php";

function getUsers(){
    global $con;
    $getUsersQuery = "select * from users";
    $getUsersResult = mysqli_query($con,$getUsersQuery);
    while($row = mysqli_fetch_assoc($getUsersResult)){
        $user_id = $row['user_id'];
        $user_email = $row['user_email'];
        $user_type = $row['user_type'];
        echo "<tr>
                <td>$user_id</td>
                <td>$user_email</td>
                <td>$user_type</td>
              </tr>";
    }
}
function getRecipes(){
    global $con;
    $getRecipesQuery = "select * from recipe";
    $getRecipesResult = mysqli_query($con,$getRecipesQuery);
    while($row = mysqli_fetch_assoc($getRecipesResult)){
        $recipe_id = $row['recipe_id'];
        $recipe_name = $row['recipe_name'];
        $recipe_type = $row['recipe_type'];
        $recipe_cat = $row['recipe_cat'];
        $recipe_desc = $row['recipe_desc'];
        $recipe_image = $row['recipe_images'];

      $im=  '<img src="/Project-Assignment/admin/product_images/'.$recipe_image.'" width="100" height="100" /> ';

        echo "<tr>
                <td>$recipe_id</td>
                <td>$recipe_name</td>
                <td>$recipe_cat</td>
                <td>$recipe_desc</td>
                <td>$recipe_type</td>
                <td>$im</td>
              </tr>";
    }
}


function getImages(){
    global $con;
    $getImagesQuery = "select * from recipe";
    $getImagesResult = mysqli_query($con,$getImagesQuery);
    while($row = mysqli_fetch_assoc($getImagesResult)){
        $recipe_images = $row['recipe_images'];

        echo '<img src="/Project-Assignment/admin/product_images/'.$recipe_images.'" width="200" height="200" /> \r\n';

    }
}

/*function getPro(){
    global $con;
    $getProQuery = '';
    if(!isset($_GET['cat']) && !isset($_GET['brand']) && !isset($_GET['search'])){
        $getProQuery = "select * from recipe order by RAND();";
    }
    else if(isset($_GET['cat'])){
        $pro_cat_id = $_GET['cat'];
        $getProQuery = "select * from recipe where recipe_cat = '$pro_cat_id'";
    }
    else if(isset($_GET['brand'])){
        $pro_brand_id = $_GET['brand'];
        $getProQuery = "select * from recipe where recipe_type = '$pro_brand_id'";
    }

    }
    $getProResult = mysqli_query($con,$getProQuery);
    $count_pro = mysqli_num_rows($getProResult);
    if($count_pro==0){
        echo "<h4 class='alert-warning align-center my-2 p-2'> No Product found in selected criteria </h4>";
    }
    while($row = mysqli_fetch_assoc($getProResult)){
        $pro_id = $row['recipe_id'];
        $pro_title = $row['recipe_name'];
        $pro_image = $row['recipe_images'];
        echo "
                <div class='col-sm-6 col-md-4 col-lg-3 text-center product-summary'>
                    <h5 class='text-capitalize'>$pro_title</h5>
                    <img src='admin/product_images/$pro_image'>
                    <p> <b> Rs $pro_price/-  </b> </p>
                    <a href='detail.php' class='btn btn-info btn-sm'>Details</a>
                    <a href='#'>
                        <button class='btn btn-primary btn-sm'>
                            <i class='fas fa-cart-plus'></i> Add to Cart
                        </button>
                    </a>
                </div>
        ";

}*/

/*function add_user()
{
    if(isset($_POST['submit'])) {
        $email = $_POST['Email'];
        $password = $_POST[Password];
    }

    $query = "SELECT * FROM `users` WHERE `user_email` =  $email ";
    $sqlsearch = mysqli_query($query);
    $resultcount = mysqli_numrows($sqlsearch);



    if ($resultcount > 0) {

        echo "Email already exists";

    } else {

        mysqli_query("INSERT INTO `table_name` (submission_id, formID, name, email, message)
                               VALUES ('" . $submissionData["submission_id"] . "',
									   '" . $submissionData["formID"] . "', 
									   '" . $submissionData["name"] . "',
									   '" . $submissionData["email"] . "',
									   '" . $submissionData["message"] . "' ) ") or die(mysqli_error());

    }
}*/