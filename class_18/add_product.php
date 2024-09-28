<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>
    <div class="content m-5">

        <form action="action.php" method="POST" enctype="multipart/form-data">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Add Product</h4>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" name="product_name" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Category</label>
                                <select name="product_category" class="form-control">
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
                                <textarea name="description" id="" rows="2" class="form-control" required></textarea>
                            </div>
                            <div class="form-group">
                                <label>Price</label>
                                <input type="text" name="product_price" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Image</label>
                                <input type="file" name="product_image" class="form-control" required>
                            </div>

                            <div class="form-group mt-2">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</body>

</html>