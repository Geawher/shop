<html>
<head>
<link rel="stylesheet" href="./../CSS/bootstrap.css">
<title>Shop</title>
<link rel="stylesheet" href="./../CSS/css.css">
</head>

<body class="mb-1 bg-dark" >

<?php
     include "config.php";

     $base =connect();

     $requette2="SELECT * from categories";

     $data2 = $base->query ($requette2); 
     $requette="SELECT * from products";

     $data1 = $base->query ($requette); 
    ?> 

<nav class="navbar navbar-expand bg-light justify-content-end mb-4">

<ul class="navbar-nav">
  <li class="nav-item mx-2">
    <a class="btn btn-dark" href="#">Home</a>
  </li>
  <li class="nav-item mx-2">
    <a class="btn btn-dark" href="#">Chart</a>
  </li>
  <li class="nav-item mx-2">
    <a class="btn btn-dark" href="#">Profile</a>
  </li>
</ul>

</nav> 


<div class="vertical-nav bg-white " id="sidebar" >
  <p class="text-gray font-weight-bold text-uppercase px-3 small pb-4 mb-0">Categories</p>

  <ul class="nav flex-column bg-white mb-0">
  <?php while($category = $data2->fetchObject()) { ?> 
    <li class="nav-item">
      <a href="#" class="nav-link text-dark font-italic bg-light">
                <i class=" mr-2 text-info align-left"><?php echo $category->name     ?></i>
                
            </a>
    </li>
  <?php } ?>
  </ul>
</div>

    </div>
    <div class="page-content p-5" id="content">
    <div class="separator "></div>
    <div class="container ">
     
      <div class="row">
     <?php while($product = $data1->fetchObject()) { ?> 
     <div class="col-lg-4 col-md-4 col-sm-6 col-12">
    <div class="container border bg-light">
    <p class="text-danger font-weight-bold"> Name : <?php echo $product->name; ?></p>
                   <p> Description: <?php echo $product->description; ?></p>
                   <p> Prix: <?php echo $product->price; ?></p>
                   <p> Category: <?php 

                   $requette1="SELECT * from categories where id=$product->idCat";

                   $data = $base->query ($requette1);
                   while($category = $data->fetchObject()) {
                    echo $category->name;
                }
                    ?>    </p>
                    <button class="btn btn-outline-dark">Add to chart</button>
    </div> 
    <br>
    </div>
    <?php } ?>

    </div>

</div>
</body>

</html>