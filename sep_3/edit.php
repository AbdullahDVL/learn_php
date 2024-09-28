<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<?php
$id = $_GET["id"];
$conn = mysqli_connect("localhost", "root", '', "testing");
$sql = "SELECT * FROM users WHERE u_id = $id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
//echo "<pre>";
// print_r($row);
//echo "</pre>";
?>

<body>
    <div class="content">
        <div class="row justify-content-conter mt-4">
            <div class="col-6">
                <div class="card p-3">
                    <div class="card-header">Update Form</div>
                    <div class="card-body">
                        <form action="action.php" method="POST">

                            <div class="form-group">
                                <label for="name">Name: <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="name" value="<?= $row['u_name']; ?>" required>
                            </div>

                            <div class="form-group">
                                <label for="mobile">Mobile: <span class="text-danger">*</span></label></label>
                                <input type="text" class="form-control" name="mobile" value="<?= $row['u_mobile']; ?>" required>
                            </div>

                            <div class="form-group">
                                <label for="email">Email: <span class="text-danger">*</span></label></label>
                                <input type="email" class="form-control" name="email" value="<?= $row['u_email']; ?>" required>
                            </div>

                            <div class="form-group">
                                <label for="password">Password: <span class="text-danger">*</span></label></label>
                                <input type="text" class="form-control" name="password" value="<?= $row['u_password']; ?>" required>
                            </div>

                            <div class="form-group">
                                <label for="address">Address: <span class="text-danger">*</span></label></label>
                                <input type="text" class="form-control" name="address" value="<?= $row['u_address']; ?>">
                            </div>
                            <div class="from-group mt-2">
                                <input type="hidden" name="updateld" value="<?= $row['u_id']; ?>">
                                <input type="submit" class="btn btn-primary" value="Update">
                            </div>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
    
</body>

</html>