<?php
@include 'buttons.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kudumbasree Store</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="store.css">
  <style>
  </style>
  <script src="store.js" async></script>
</head>

<body>

<nav>
  <ul>
    <li><a href="../index.html">Home</a></li>
    <li><a href="#">About</a></li>
    <li><a href="#">Services</a></li>
    <li><a href="#">Contact</a></li>
  </ul>
</nav>


          

  <div class="container mt-5">
    <div class="row" id="productRow">
      <?php
      @include 'config.php';
      
      if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        exit();
      }

      // Fetch products from the database
      $query = "SELECT * FROM product";
      $result = mysqli_query($conn, $query);

      // Display product cards
      while ($row = mysqli_fetch_assoc($result)) {
        $productId = $row['product_id'];
        $productName = $row['prod_name'];
        $productPrice = $row['price'];
        $productImageUrl = $row['image_url'];

        echo '
        <div class="shop-item">
                    <span class="shop-item-title">' . $productName . '</span>
                    <img class="shop-item-image" src="' . $productImageUrl . '">
                    <div class="shop-item-details">
                    <span class="shop-item-price">Rs ' . $productPrice . '</span>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
          
        ';
      }

      // Close the database connection
      mysqli_close($conn);
      ?>
    </div>
  </div>
  
        <section class="container content-section">
            <h2 class="section-header">CART</h2>
            <div class="cart-row">
                <span class="cart-item cart-header cart-column">ITEM</span>
                <span class="cart-price cart-header cart-column">PRICE</span>
                <span class="cart-quantity cart-header cart-column">QUANTITY</span>
            </div>
            <div class="cart-items">
            </div>
            <div class="cart-total">
                <strong class="cart-total-title">Total</strong>
                <span class="cart-total-price">Rs 0</span>
            </div>
            <button class="btn btn-primary btn-purchase" type="button">PURCHASE</button>
        </section>

  <footer class="bg-light text-center py-3 mt-5">
    <p>&copy; 2023 Kudumbasree Store. All rights reserved.</p>
  </footer>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>
