<!DOCTYPE html>
<html lang="en">
<head>
    <head>
        <title>certified seller</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@300&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="style.css">





      </head>
</head>
<body  class="container" >
    <!--nav bar starts-->
<?php
include "/xampp/htdocs/certified-seller/navbar.php";

?>













    <h1  class="text-center text-danger mb-3 bg-light   " style="font-family:'Roboto Slab', serif;"  > certified seller - by sufiyan sarabu</h1>
<div class="row">

<?php

#making connection1
$con = mysqli_connect('localhost', 'root');
#selectiong the databse2 
mysqli_select_db($con,'certifiedsellerdb');

#connection buildup 3

/* we want too show our output4 */
#show the query 
$query = "SELECT `name`, `image`, `Price`, `discount` FROM `shoppingcart` order by id ASC  ";
$queryshow =  mysqli_query($con,$query);
#showing the mysql table data
$num = mysqli_num_rows($queryshow);
if($num > 0){
    while($product = mysqli_fetch_array($queryshow)){
    
        ?>
 <!--sm is used for small md is used for medium lg is used for large 12 grids spacing of 3 divide by 4 = 12 -->
<div class="col-lg-3 col-md-3 col-sm-12">
    <form  enctype="multipart/form-data"  >
        <div class="card">
            <!--adding names in card title  using php  -->
            <h6 class="div-card- bg-info text-white">
<?php echo $product['name'];  ?> </h6>
          <div class="card-body bg-dark text-info ">
          <img  src=" <?php echo $product['image'];  ?>" alt="phone " class="img-fluid mb-4" >
            <h6> &#8377;<?php echo $product['Price'];?>  </h6>
            <span> (&#8377;<?php echo $product['discount'];  ?> off ) </span>
            <input type="text" name="" placeholder="quantity" id="">
            <br>
            <br>

            <div class="btn-group d-flex">
                <button class="btn btn-success flex-fill" >add to cart</button>
                <button class="btn btn-warning flex-fill" >buy</button>
            </div>
            

         <br> <br>

   
        <?php
        include"/xampp/htdocs/certified-seller/sidebar.php";

        ?>
          </div>
         
   
          
       
        </div>
    </form>
   

    </div>
  
   
 
<?php


    }
}


?>








</div>
</body>
</html>