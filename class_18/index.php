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
    $conn = mysqli_connect('localhost', 'root', '', 'testing');
    $sql = "SELECT * FROM products";
    $result = $conn->query($sql);
    $data = $result->fetch_all(MYSQLI_ASSOC);

    ?>

    <div class="content-wrapper m-3">
        <h4>Product CRUD</h4>
        <div class="content m-5">
            <h4>Product List</h4>
            <a href="add_product.php" class="btn btn-primary">Add New Product</a>
            <table class="table">
                <thead>
                    <tr>
                        <td>SL</td>
                        <td>Name</td>
                        <td>Category</td>
                        <td>Price</td>
                        <td>Description</td>
                        <td>Image</td>
                        <td>Action</td>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $serial = 1;
                    foreach ($data as $row) { ?>
                        <tr>
                            <td><?= $serial++; ?></td>
                            <td><?= $row['p_name'] ?></td>
                            <td><?= $row['p_category'] ?></td>
                            <td><?= $row['p_price'] ?></td>
                            <td><?= $row['p_description'] ?></td>
                            <td>
                                <?php
                                if ($row['p_image']) { ?>
                                    <img src="images/<?= $row['p_image']; ?>" height="50" width="50" srcset="">

                                <?php } ?>
                            </td>
                            <td>
                                <a href="edit_product.php?id=<?= $row['p_id'] ?>" class="btn btn-primary">Edit</a>
                                <a href="action.php?deleteId=<?= $row['p_id'] ?>" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>