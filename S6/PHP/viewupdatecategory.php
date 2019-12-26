<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./../CSS/bootstrap.css">
    <title>Document</title>
</head>

<body class="my-3">
    <?php 
    
include "./config.php";
$base = connect ();

$id = $_GET ['id'];
$requette="SELECT * from categories where id=$id";
$data =$base->query($requette);
$category=$data->fetchObject();
?>
    <div class="container">
        <form method="POST" action="./updatecategory.php?id=<?php echo $category->id; ?>">
            <div class="form-group ">
                <p>Name : </p>
                <input type="text" name="name" value="<?php  echo $category->name; ?>" class="form-control">
            </div>
            <div class="form-group">
                <input type="submit" value="Update" class="btn btn-warning">
            </div>
        </form>
    </div>
</body>

</html>