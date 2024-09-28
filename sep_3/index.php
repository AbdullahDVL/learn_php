<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="fontawesome/css/all.min.css" />
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>

<body>

    <div class="content">
        <div class="row justify-content-center mt-4">
            <div class="col-6">
                <div class="card p-3">
                    <div class="card-header">Form</div>
                    <div class="card-body">
                        <form action="action.php" method="POST">

                            <div class="form-group">
                                <label for="name">Name: <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="name" required>
                            </div>

                            <div class="form-group">
                                <label for="mobile">Mobile: <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="mobile" required>
                            </div>

                            <div class="form-group">
                                <label for="email">Email: <span class="text-danger">*</span></label>
                                <input type="email" class="form-control" name="email" required>
                            </div>

                            <div class="form-group">
                                <label for="password">Password: <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="password" required>
                            </div>

                            <div class="form-group">
                                <label for="address">Address: <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="address" required>
                            </div>
                            <div class="from-group mt-2">
                                <input type="submit" class="btn btn-primary" value="Submit">
                            </div>

                        </form>

                    </div>
                </div>
            </div>
        </div>

        <?php
        $conn = mysqli_connect('localhost', 'root', '', 'testing');
        $sql = "SELECT * FROM users";
        $result = $conn->query($sql);
        $data = $result->fetch_all(MYSQLI_ASSOC);
        ?>


        <div class="card">
            <div class="card-header">;
                <h4 class="card-title">User List</h4>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th>SL.</th>
                            <th>Name</th>
                            <th>Mobile</th>
                            <th>Email</th>
                            <th>Password</th>
                            <th>Address</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        $serial = 1;
                        foreach ($data as $row) { ?>
                            <tr>
                                <td><?= $serial++; ?></td>
                                <td><?= $row['u_name']; ?></td>
                                <td><?= $row['u_mobile']; ?></td>
                                <td><?= $row['u_email']; ?></td>
                                <td><?= $row['u_password']; ?></td>
                                <td><?= $row['u_address']; ?></td>
                                <td>
                                    <a type="button" class="btn btn-sm btn-info mr-2 editButton" id="<?= $row['u_id']; ?>" name="<?= $row['u_name']; ?>" mobile="<?= $row['u_mobile']; ?>" email="<?= $row['u_email']; ?>" password="<?= $row['u_password']; ?>" address="<?= $row['u_address']; ?>"><i class="fas fa-edit"></i> Edit</a>

                                    <a type="button" class="btn btn-sm btn-danger" href="action.php?deleteId=<?= $row['u_id']; ?>"><i class="fas fa-trash-alt"></i> Delete</a>

                                </td>
                            </tr>
                        <?php } ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="editModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="action.php" method="POST">
                <div class="modal-header">
                    <h5 class="modal-title">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    

                        <div class="form-group">
                            <label for="name">Name: <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="name" id="update_name" required>
                        </div>

                        <div class="form-group">
                            <label for="mobile">Mobile: <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="mobile" id="update_mobile" required>
                        </div>

                        <div class="form-group">
                            <label for="email">Email: <span class="text-danger">*</span></label>
                            <input type="email" class="form-control" name="email" id="update_email" required>
                        </div>

                        <div class="form-group">
                            <label for="password">Password: <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="password" id="update_password" required>
                        </div>

                        <div class="form-group">
                            <label for="address">Address: <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="address" id="update_address" required>
                        </div>
                   
                </div>
                <div class="modal-footer justify-content-between">
                    <input type="hidden" name="updateId" id="updateId">
                    <button type="submit" class="btn btn-primary">Save changes</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">close</button>
                </div>
             </form>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        $(document).ready(function() {
            $('.editButton').click(function() {
                var id = $(this).attr('id');
                var name = $(this).attr('name');
                var mobile = $(this).attr('mobile');
                var email = $(this).attr('email');
                var password = $(this).attr('password');
                var address = $(this).attr('address');
                $('#editModal').modal('show')
                $('#updateId').val(id);
                $('#update_name').val(name);
                $('#update_mobile').val(mobile);
                $('#update_email').val(email);
                $('#update_password').val(password);
                $('#update_address').val(address);

            })
        });
    </script>
</body>

</html>