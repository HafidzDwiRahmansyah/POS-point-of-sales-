<?php

include "../app/db.php";
include "../assets/bootstrap.php";

var_dump($_POST['tambah']);

if (isset($_POST['tambah'])) {
    $name = $_POST['name'];
    $price = $_POST['price'];
    $stok = $_POST['stok'];
    $image = $_FILES['image']['name'];
    $tmp = $_FILES['image']['tmp_name'];

    $path = '../assets/image/produk/' . $image;

    if (move_uploaded_file($image, $tmp)) {
        $save = $conn->query("INSERT INTO product VALUES (NULL,'$name','$price','$stok','$image')");
        if ($save == true) {
            echo "<script>alert('data berhasil disimpan')
            location.replace('../views/product.php')</script>";
        } else {
            echo "<script>alert('data gagal disimpan')
            location.replace('../views/product.php')</script>";
        }
    }
}

?>

<section class="produk">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="card border-0 shadow rounded-2">
                    <div class="card-body">
                        <h3 class="text-center py-3">Tambah Produk</h3>
                        <div class="row justify-content-center">
                            <div class="col-lg-6">
                                <form action="" method="post" enctype="multipart/form-data">
                                    <label class="form-label" for="name">Nama</label>
                                    <input class="form-control" type="text" name="name" id="name"><br>
                                    <label class="form-label" for="price">Price</label>
                                    <input class="form-control" type="number" name="price" id="price"><br>
                                    <!-- </div>
                                <div class="col-lg-6"> -->
                                    <label class="form-label" for="stok">Stok</label>
                                    <input class="form-control" type="number" name="stok" id="stok"><br>
                                    <label class="form-label" for="image">Image</label>
                                    <input class="form-control" type="file" name="image" id="image" accept=".jpg, .jpeg, .png"><br>
                                    <button class="btn btn-primary mx-auto d-blok w-100 my-5" name="tambah" type="submit">Simpan</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>