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
    $requette="SELECT * from products where id=$id";
    $data =$base->query($requette);
    $product=$data->fetchObject();
    $requette1 = "SELECT * from categories";
    $data1 =$base->query($requette1);
     
    ?>
    <div class="container">
        <form method="POST" action="./updateproduct.php?id=<?php echo $product->id; ?>">
            <div class="form-group ">
                <p>Name : </p>
                <input type="text" name="name" value="<?php  echo $product->name; ?>" class="form-control">
            </div> 
            <div class="form-group ">
                <p>Description: </p>
                <input type="text" name="Description" value="<?php  echo $product->description; ?>" class="form-control">
            </div> 
            <div class="form-group ">
                <p>Price: </p>
                <input type="number" name="price" value="<?php  echo $product->price; ?>" class="form-control">
            </div>
            <select name="idCat" >
                   <?php while ($category = $data1->fetchObject()) { ?> 
                   <option value="<?php echo $category->id; ?>"> <?php echo $category->name; ?></option>
                   <?php } ?>
            </select>
            <div class="form-group">
                <input type="submit" value="Submit" class="btn btn-dark">
            </div>
        </form>
    </div>
</body>

</html>