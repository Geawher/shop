<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./../CSS/bootstrap.css">
    <title>Document</title>
</head>

<body class="my-3">
   
    <div class="container">
        <form method="POST" action="./../PHP/addCategory.php">
            <div class="form-group ">
                <p>Name : </p>
                <input type="text" name="name" class="form-control">
            </div> 
            <?php 
                if (isset($_GET['added'])) { ?>
                
                 <small class="alert-danger">Category already exist</small>   
    
                 <?php } ?>
            <div class="form-group">
                <input type="submit" value="Submit" class="btn btn-dark">
            </div>
        </form>
    </div>
</body>

</html>