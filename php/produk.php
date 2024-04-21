<?php

include "../app/db.php";

var_dump($_POST['add']);

if(isset($_POST['add'])){
    $name = $_POST['name'];
    $price = $_POST['price'];
    $stok = $_POST['stok'];
    $image = $_FILES['image']['name'];
    $tmp = $_FILES['image']['tmp_name'];
    
    $path = '../assets/image/produk/' . $image;

    if(move_uploaded_file($image,$tmp)){
        $save = $conn->query("INSERT INTO product VALUES (NULL,'$name','$price','$stok','$image')");
        if($save == true){
            echo "<script>alert('data berhasil disimpan')
            location.replace('../views/product.php')</script>";
        }else{
            echo "<script>alert('data gagal disimpan')
            location.replace('../views/product.php')</script>";
        }
    }
}