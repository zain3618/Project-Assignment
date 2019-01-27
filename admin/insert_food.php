<?php
require_once "db_connection.php";
if(isset($_POST['insert_food'])){
    //getting text data from the fields
    $Name = $_POST['Name'];
    $Category = $_POST['Category'];
    $Type = $_POST['Type'];
    $Description = $_POST['Description'];
    $Keywords = $_POST['Keywords'];

    //getting image from the field
    $food_image = $_FILES['Image']['name'];
    $food_image_tmp = $_FILES['Image']['tmp_name'];
    move_uploaded_file($food_image_tmp,"Food_images/$food_image");

    $insert_item = "insert into food (Category, Type,Name,Description,Image,Keywords) 
                            VALUES ('$Category','$Type','$Name','$Description','$Image','$Keywords');";
    $insert_food = mysqli_query($con, $insert_item);
    if($insert_food){
        header("location: ".$_SERVER['PHP_SELF']);
    }
}