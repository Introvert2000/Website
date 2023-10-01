<?php

require_once 'connection.php';

// $sql = "SELECT * FROM restaurant";
// $all_product = $select_db->query($sql);
$select_query = mysqli_query($connection,"SELECT * FROM restaurant");


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
    <link rel="stylesheet" href="font.css">
    <link rel="stylesheet" href="styles.css">
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> -->
<style>
    .custom-button {
  display: inline-block;
  padding: 10px 20px;
  background-color: #007bff; /* Button background color */
  color: #fff; /* Button text color */
  border: none; /* Remove default border */
  border-radius: 5px; /* Add rounded corners */
  cursor: pointer; /* Change cursor on hover to indicate interactivity */
  text-align: center; /* Center text horizontally */
  text-decoration: none; /* Remove underlines for <a> elements */
}

.custom-button:hover {
  background-color: #0056b3; /* Change background color on hover */
}

.custom-button:active {
  background-color: #00479e; /* Change background color when clicked */
}

</style>
</head>


<body>
<header>
        <nav>
            <div class="container">
                <div class="logo">
                    <a href="#">Happy Diner</a>
                </div>
                <div class="search-bar">
                    <input type="text" placeholder="Search...">
                </div>
                <div class="menu">
                    <ul>
                        <li><a href="index.php">Login</a></li>
                        <li><a href="register.php">Register</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
<main>
     <?php
        while($row = mysqli_fetch_assoc($select_query)){

    ?>
     <div class="card">
         <div class="image">
             <!-- <img src="<?php echo $row["restaurant_image"]; ?>" alt="">  -->
             <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['image']); ?>" />
             <!-- <?php echo "<img src= 'images/".$row[`restaurant_image`]."' >";   ?> -->

        
            </div>
         <div class="caption">
             <!-- <p class="rate">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
             </p> -->
             <p class="product_name". ><?php echo $row["restaurant_name"]; ?></p>
            
         </div>
         <a class="custom-button " href="book.php">Book</a>
         <!-- <a class="btn btn-primary" href="#" role="button">Link</a> -->

     </div>
     <?php
}
     ?>
</main>

</body>
</html>

<?php



?>