<?php
require_once "db_connection.php";
if(isset($_POST['insert_food'])){
    //getting text data from the fields
    $food_title = $_POST['food_title'];
    $food_cat = $_POST['food_cat'];
    $food_type = $_POST['food_type'];
    $food_desc = $_POST['food_desc'];
    $food_keywords = $_POST['food_keywords'];

    //getting image from the field
    $food_image = $_FILES['food_image']['name'];
    $food_image_tmp = $_FILES['food_image']['tmp_name'];
    move_uploaded_file($food_image_tmp,"Food_images/$food_image");

    $insert_item = "insert into food (food_cat, food_type,food_title,food_desc,food_image,food_keywords) 
                  VALUES ('$food_cat','$food_type','$food_title','$food_desc','$food_image','$food_keywords');";
    $insert_food = mysqli_query($con, $insert_food);
    if($insert_food){
        header("location: ".$_SERVER['PHP_SELF']);
    }
}