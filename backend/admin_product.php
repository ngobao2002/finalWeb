<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel=”stylesheet” href=”https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css” />
    <link href="../css/admin.css" rel="stylesheet" type="text/css"/>
    <title >Admin Products</title>
</head>
<body class="bg-primary-color">
    <h1 class="mx-auto p-5 text-color" style="width: 300px;text-align: center; ">Products</h1>
    <div class="d-flex justify-content-center" >
        <form style="width: 500px; background-color:white; border:10px ; border-radius:5px" class="p-2">
            <div class="mb-3">
                <h2 class="text-center">Add product</h2>
                <input class="form-control mb-2" type="text" placeholder="Name of product" aria-label="name of product">
                <input class="form-control mb-2" type="text" placeholder="Price" aria-label="price"> 
                <div class="input-group mb-3">
                    <label class="input-group-text" for="inputGroupFile01">Image</label>
                    <input type="file" class="form-control" id="inputGroupFile01">
                </div>
                <div class="d-flex justify-content-center ">
                    <button type="button" class="btn btn-success" style="position:center;">Add product</button>
                </div>
            </div>
        </form>
    </div>
</body>
</html>