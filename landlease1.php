<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LAND LEASE</title>
    <link rel="stylesheet" href="assets/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

  <!-- Add Bootstrap JS file (jQuery and Popper.js required) -->
   <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    
</head>


<body>
<style>
      .homebtn {
         position: fixed;
         top: 10px;
         left: 10px;
         padding: 5px 10px;
         background-color: #f5f5f5;
         border: none;
         color: #000;
         text-decoration: none;
         cursor: pointer;
         z-index: 9999;
      }
   </style>

<a href="index.html" class="homebtn">HOME</a>

    <!-- Modal -->
<div class="modal fade" id="CategoryModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add a Plot</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

            <form action="code.php" method="POST" enctype="multipart/form-data">
            <div class="modal-body">
                <div class="form-group">
                    <label for=""> Name </label>
                    <input type="text" name="plot_name" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="">Description </label>
                    <textarea name="description" rows="3" class="form-control" required></textarea>
                    
                </div>
                <div class="form-group">
                    <label for="">Mobile Number </label>
                    <input type="number" name="number" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="">Upload Image </label>
                    <input type="file" name="plot_image" id="plot_image" class="form-control" required>
                </div>
            
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" name="save_plot" class="btn btn-primary">Save</button>
            </div>
            </form>

      </div>
    </div>
  </div>

    
   
    <div class="content-wrapper">
    
    <section class="content mt-4">   
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Listings
                                <a href="#" data-toggle="modal" data-target="#CategoryModal" class="btn btn-primary float-right">Add</a>
                            </h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> 
</div>

<!-- Modal Ends Here-->

<div class="container py-5 "> 
    <div class="row mt-3">
        <div class="col-md-12">
            <h1 class="text-center"> Land Details</h1>
        </div>

    </div>

    <div class="row mt-4">
      
        <?php 
        require 'config.php';
        
        $query ="SELECT * FROM land";
        $query_run = mysqli_query($conn, $query);
        $check_plot = mysqli_num_rows($query_run) > 0;

        if($check_plot)
        {
            while($row = mysqli_fetch_array($query_run))
            {

                ?>

                    <div class="col-md-3">
                                <div class="card">
                                <img src="upload/<?php echo $row['images']; ?> " width="253px" height="200px" alt="Imagess">
                                    <div class="card-body">
                                        <h4 class="card-title"><?php echo $row['name'] ?>;</h4>
                                        <h6 class="phone"><?php echo $row['number'] ?>;</h6>
                                        
                                        <p class="text-form">
                                        <?php echo $row['description'] ?>
                                        
                                        
                                        </p>
                                        <button class="btn btn-success">View Details</button>
                                    </div>
                                </div>
                            </div>

                <?php

                
            }

        }
        else
        {
            echo "No Plot Available";
        }

        
        ?>


        
    </div>
</div>

</body>
</html>