<?php
session_start();

	require_once '../../include/db.php';
	if(isset($_POST['login'])){
        $email = $_POST['email'];
        $password = $_POST['password'];

        $query = "SELECT * FROM admin WHERE email = '$email' AND password = '$password'";

        $result = mysqli_query($conn, $query);

        if(mysqli_num_rows($result) > 0){
            $data = mysqli_fetch_assoc($result);
            $_SESSION['seller_id'] = $data['admin_id'];
            $_SESSION['seller_email'] = $data['email'];
            $_SESSION['seller_name'] = $data['name'];
            header('location:../index.php');
        }
        else{
            $_SESSION['error'] = "Username or password invalid !!";
            header('location:../login.php');

        }
    }
	if(isset($_POST['post_product'])){
        $error = false;
        $product_name = $_POST['product_name'];
        $type = $_POST['type'];
        $price = $_POST['price'];
        $quantity = $_POST['quantity'];
        $short_description = $_POST['short_description'];
        $desc = $_POST['desc'];
        $image = $_FILES['image']['name'];
        $target = "../../images/products/".basename($image);

        $query = "INSERT INTO products VALUES (NULL,'$product_name','$type','$price','$quantity','$short_description','$image')";
        if(move_uploaded_file($_FILES['image']['tmp_name'],$target)){
            mysqli_query($conn,$query);
        }
        else{
            $error = true;
            $_SESSION['error'] = "ERROR";
            header('location:../add_product.php');
        }
        if($error == false){
            $_SESSION['success'] = "Product added successfully";
            header('location:../product.php');
        }
    }

?>