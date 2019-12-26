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

    $requette = "SELECT * from categories";
   $data =$base->query($requette);
    
    ?>
    <div class="container">
        <form method="POST" action="./addproduct.php">
            <div class="form-group ">
                <p>Name : </p>
                <input type="text" name="name" class="form-control">
            </div> 
            <div class="form-group ">
                <p>Description: </p>
                <input type="text" name="Description" class="form-control">
            </div> 
            <div class="form-group ">
                <p>Price: </p>
                <input type="number" name="price" value="0" class="form-control">
            </div>
            <select name="idCat" >
                   <?php while ($category = $data->fetchObject()) { ?> 
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