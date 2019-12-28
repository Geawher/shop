<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"> 
    <link rel="stylesheet" href="./../CSS/bootstrap.css">
    <title>Document</title>
</head>
<body>
<?php
     include "config.php";

     $base =connect();

     $requette="SELECT * from categories";

     $data = $base->query ($requette); 
     $requette1="SELECT * from products";

     $data1 = $base->query ($requette1); 
    ?> 
    <div class="container">
 <div class="row">

 <div class="col">
     <a href="./../HTML/addcategory.php" class="btn btn-info my-3 "> ADD Category</a>
 </div>
 </div>
 <div class="row">

 <div class="col">
     <table class="table">
         <thead>
             <tr>
                 <th>Name</th> 
                 <th>Action</th>
             </tr>
         </thead> 

         <tbody>
             <?php while($category = $data->fetchObject()) { ?> 
                <tr>
                    <td> <?php echo $category->name; ?></td>
                    <td>
                        <a href="./viewupdatecategory.php?id= <?php echo $category->id; ?>" class="btn btn-warning">Modifier</a>
                        <a href="./deletecategory.php?id= <?php echo $category->id; ?>" class="btn btn-danger">Supprimer</a>
                    </td>
                </tr>
             <?php } ?>
         </tbody>
     </table>
 </div>
 </div> 

 <a href="./viewaddproduct.php" class="btn btn-info my-3"> Add product</a>
 <div class="row">

<div class="col">
    <table class="table">
        <thead>
            <tr>
                <th>Name</th> 
                <th>Description</th>
                <th>Price</th>
                <th>Category</th>
                <th>Action</th>
            </tr>
        </thead> 

        <tbody>
            <?php while($product = $data1->fetchObject()) { ?> 
               <tr>
                   <td> <?php echo $product->name; ?></td>
                   <td> <?php echo $product->description; ?></td>
                   <td> <?php echo $product->price; ?></td>
                   <td> <?php echo $product->idCat; ?></td>

                   <td>
                       <a href="./viewupdateproduct.php?id= <?php echo $product->id; ?>" class="btn btn-warning">Modifier</a>
                       <a href="./deleteproduct.php?id= <?php echo $product->id; ?>" class="btn btn-danger">Supprimer</a>
                   </td>
               </tr>
            <?php } ?>
        </tbody>
    </table>
</div>
</div>



    </div>
    
</body>
</html>