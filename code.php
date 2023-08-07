<?php 

@include 'config.php';

session_start();


if(isset($_POST['save_plot']))
{
    $name = $_POST['plot_name'];
    $description = $_POST['description'];
    $number = $_POST['number'];
    $images = $_FILES["plot_image"]['name'];

    if(file_exists("upload/" . $_FILES["plot_image"]["name"]))
    {
        $store = $_FILES["plot_image"]["name"];
        $_SESSION['status']= "Image exists. '.$store.'";
        header('Location: landlease1.php');
    }
    else
    {

            $query = "INSERT INTO land(name, description, number, images) VALUES ('$name','$description', $number, '$images')";
            $query_run = mysqli_query($conn, $query);

            if($query_run)
            {
                move_uploaded_file($_FILES["plot_image"]["tmp_name"], "upload/".$_FILES["plot_image"]["name"]);
                $_SESSION['success'] = "Faculty Added";
                header('Location: landlease1.php');
            }
            else
            {
                $_SESSION['success'] = "Faculty Not Added";
                header('Location: landlease1.php');

            }

    }
}


?>