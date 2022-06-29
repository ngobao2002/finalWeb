<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel=”stylesheet” href=”https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css” />
    <link href="../css/admin.css" rel="stylesheet" type="text/css"/>
    <script src="../js/main.js"></script>
    <title >Admin User Management</title>
</head>
<body class="bg-primary-color">
    <h1 class="mx-auto py-3 text-color" style="width: 300px;text-align: center; padding-bottom: 25px;">User</h1>
    <table class="table" style="color:white;">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Username</th>
                <th scope="col">Email</th>
                <th scope="col">Type</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>user</td>
                <td>user@gmail.com</td>
                <td>User</td>
                <td style="width:10%"><button type="button" class="btn btn-danger">Delete</button></td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>user1</td>
                <td>user1@gmail.com</td>
                <td>Admin</td>
                <td style="width:10%"><button type="button" class="btn btn-danger">Delete</button></td>
            </tr>
        </tbody>
    </table>

</body>
</html>