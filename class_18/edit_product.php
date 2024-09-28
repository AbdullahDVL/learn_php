<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>
    <?php
    $id = $_GET['id'];

    $conn = mysqli_connect('localhost', 'root', '', 'testing');
    $sql = "SELECT * FROM products where p_id = $id";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    //echo "<pre>;
    //print_r ($data['p_name']);
    //echo "</pre>";
    ?>

    <div class="content m-5">

        <form action="action.php" method="POST" enctype="multipart/form-data">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Edit Product</h4>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" name="product_name" class="form-control" value="<?= $row['p_name']; ?>" required>
                            </div>
                            <div class="form-group">
                                <label>Category</label>
                                <select name="product_category" id="form-control" class="form-control">
                                    <option value="">Select Option</option>
                                    <option value="electronics">Electronics </option>
                                    <option value="clothing">Clothing</option>
                                    <option value="books">Books</option>
                                    <option value="furniture">Furniture</option>
                                    <option value=""></option>
                                    <option value=""></option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Description</label>
                                <textarea name="description" id="" rows="2" class="form-control" required><?= $row['p_description']; ?></textarea>
                            </div>
                            <div class="form-group">
                                <label>Price</label>
                                <input type="text" name="product_price" class="form-control" value="<?= $row['p_price']; ?>" required>
                            </div>
                            <div class="form-group">
                                <label>Image</label>
                                <input type="file" name="product_image" class="form-control" required>

                                <?php
                                if ($row['p_image']) { ?>
                                    <img src="images/<?= $row['p_image']; ?>" height="50" width="50" srcset="">

                                <?php } ?>

                            </div>
                            <div class="form-group mt-2">
                                <input type="hidden" name="oldImage" value="<?= $row['p_image']; ?>"> 
                                <input type="hidden" name="updateId" value="<?= $row['p_id']; ?>">
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</body>

</html>