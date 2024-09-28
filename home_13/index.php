<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
</head>

<body>
    <div class="content">
        <div class="row justify-content-center mt-2">
            <div class="col-6">
                <h3>ADD PRODUCT</h3>
                <div class="card-body">
                    <form action="action.php" method="POST">
                        <div class="form-group">
                            <label for="name">Product Name:</label>
                            <input type="text" class="form-control" name="Name" required>
                        </div>
                        <div class="form-group">
                            <label for="desc">Document:</label>
                            <textarea type="text" class="form-control" name="desc" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="price">Price:</label>
                            <input type="text" class="form-control" name="price" required>
                        </div>
                        <div class="form-group mt-2">
                            <input type="submit" class="btn btn-primary" value="Add Product">
                        </div>
                    </form>

                </div>

            </div>

        </div>

    </div>
</body>

</html>