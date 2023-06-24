<?php include 'included_file.php'; ?>

<head>

    <link rel="stylesheet" href="./storestyle.css">
    <!--<link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet"> -->
  </head>
  
  <body action="display_data.php">
    <header>
      <div class="logo"><a href="./store.html">STORE</a></div>
      <div class="menu">
        <a href="#">
          <ion-icon name="close" class="close"></ion-icon>
        </a>
  
        <ul>
          <li><a href="./index.html" class="under">HOME</a></li>
          <li><a href="#" class="under">SHOP</a></li>
          <li><a href="#" class="under">OUR PRODUCTS</a></li>
          
          <li><a href="#" class="under">ABOUT US</a></li>
        </ul>
      </div>
      <div class="search">
  
        <a href=""><input type="text" placeholder="search products" id="input">
          <ion-icon class="s" name="search"></ion-icon>
        </a>
      </div>
      <div class="heading">
        <ul>
          <li><a href="./index.html" class="under">HOME</a></li>
          <li><a href="#" class="under">SHOP</a></li>
          <li><a href="#" class="under">OUR PRODUCTS</a></li>
          
          <li><a href="#" class="under">ABOUT US</a></li>
        </ul>
      </div>
      <div class="heading1">
        <ion-icon name="menu" class="ham"></ion-icon>
      </div>
    </header>
    <section>
      <div class="section">
        <div class="section1">
          <div class="img-slider">
            <img src="/assets/Products/1.jpg" alt="" class="img">
            <img src="/assets/Products/2.jpg" alt="" class="img">
            <img src="/assets/Products/3.jpg" alt="" class="img">
            <img src="/assets/Products/4.jpg" alt="" class="img">
            <img src="/assets/Products/5.jpg" alt="" class="img">
          </div>
  
        </div>
        <div class="section2">
          <div class="container">

          <h1>Data from Database</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th?>Price</th>
            <!-- Add more table headers if needed -->
        </tr>
        <?php foreach ($data as $row): ?>
            <tr>
                <td><?php echo $row['productid']; ?></td>
                <td><?php echo $row['productname']; ?></td>
                <td><?php echo $row['productprice']; ?></td>
                <!-- Add more table cells if needed -->
            </tr>
        <?php endforeach; ?>
    </table>

            <div class="items">
              <div class="img img1"><img src="/assets/Products/1.jpg" alt=""></div>
              <div class="name">Achaar</div>
              <div class="price">90Rs</div>
              <div class="info">Manga achar home made</div>
            </div>
            <div class="items">
              <div class="img img2"><img src="/assets/Products/2.jpg" alt=""></div>
              <div class="name">Mixture</div>
              <div class="price">25Rs</div>
              <div class="info">Home made tasty mixture</div>
            </div>
            <div class="items">
              <div class="img img3"><img src="/assets/Products/3.jpg" alt=""></div>
              <div class="name">Bathing Soap</div>
              <div class="price">20Rs</div>
              <div class="info">Home made herbal soap</div>
            </div>
            <div class="items">
              <div class="img img1"><img src="/assets/Products/4.jpg" alt=""></div>
              <div class="name">Sambaar Powder</div>
              <div class="price">50Rs</div>
              <div class="info">Home made Healthy Sambar Powder</div>
            </div>
            <div class="items">
              <div class="img img1"><img src="/assets/Products/5.jpg" alt=""></div>
              <div class="name">Body Wash</div>
              <div class="price">110Rs</div>
              <div class="info">Turmeric flavor body Wash</div>
            </div>
            <div class="items">
              <div class="img img1"><img src="/assets/Products/6.jpg" alt=""></div>
              <div class="name">Peanut Candy</div>
              <div class="price">30Rs</div>
              <div class="info">Kappalandi Muttai</div>
            </div>

          </div>
  
        </div>
      </div>
  
    </section>
    <footer>
      <div class="footer0">
        <h1>KUDUMBASREE STORE</h1>
      </div>
     
      </div>
      <div class="footer2">
       
      </div>
      <div class="footer3">Made by group 3 </div>
    </footer>
    <!--<script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
    <script src="./ecommerce.js"></script> -->
  
  </body>
  
  </html>