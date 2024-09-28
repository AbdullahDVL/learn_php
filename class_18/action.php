<?php
$updateId = $_POST["updateId"];
$deleteId = $_GET["deleteId"];
$name = $_POST['product_name'];
$category = $_POST['product_category'];
$price = $_POST['product_price'];
$description = $_POST['description'];


$conn = mysqli_connect('localhost', 'root', '', 'testing');
if ($deleteId) {
    $sql = "DELETE FROM products WHERE p_id = $deleteId";
} else if ($updateId) {
    if(!empty($_FILES['product_image']['name'])) {
        $image = $_FILES['product_image']['name'];
        $target_dir = 'images/';
        $target_file = $target_dir . basename($image);
        move_uploaded_file($_FILES['product_image']['tmp_name'], $target_file);
    } else {
        $image = $_POST['oldImage'];
    }
    $sql = "UPDATE products SET p_name = '$name', p_category = '$category', p_price = '$price', p_description = '$description', p_image =  '$image'  WHERE p_id = $updateId";
}else {
    if(!empty($_FILES['product_image']['name'])) {
        $image = $_FILES['product_image']['name'];
        $target_dir = 'images/';
        $target_file = $target_dir . basename($image);
        move_uploaded_file($_FILES['product_image']['tmp_name'], $target_file);
    } else {
        $image = '';
    }
$sql = "INSERT INTO products (p_name, p_category, p_price, p_description, p_image) VALUES ('$name','$category', '$price', '$description', '$image')";

}


$conn->query($sql);


header("Location: index.php");
