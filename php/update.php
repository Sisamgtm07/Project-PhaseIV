<?php

include 'conn.php';

if (isset($_POST['done'])) {

    $id = $_GET['id'];
    $image = $_POST['image'];
    $name = $_POST['name'];
    $channel = $_POST['channel'];
    $q = " update crudtable set id=$id, image='$image', name='$name', channel='$channel' where id=$id  ";

    $query = mysqli_query($con, $q);

    header('location:display.php');
}

?>

<!doctype html>
<html lang="en">

<head>


    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

    <!--Custom CSS-->
    <link rel="stylesheet" type="text/css" href="../css/style.css">

    <!--JS-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    <title>Update Profile</title>
</head>

<body>

    <!--Navigation Menu-->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top py-1 " id="mainNav">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="../index.html">
                <img src="../img/logo.png" alt="Logo">
            </a>
            <button class="navbar-toggler navbar-toggler-right ml-auto" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto my-2 my-lg-0">
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="../index.html">Home</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#channel">Channel</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#qualities">Qualities</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>


    <!--Update Your Profile-->
    <div class="profilehead bg-light">
        <div class="container py-5 h-100">
            <div class="col-lg-6 m-auto">
                <form method="post" enctype='multipart/form-data'>
                    <br><br>
                    <div class="card p-1">

                        <div class="card-header bg-dark">
                            <h4 class="text-white text-center"> Update Your Profile </h4>
                        </div><br>

                        <label>Profile Image </label>
                        <input type="file" name="image" class="form-control"> <br>

                        <label>Name </label>
                        <input type="text" name="name" class="form-control"> <br>

                        <label> Channel </label>
                        <input type="text" name="channel" class="form-control"> <br>

                        <label> Description </label>
                        <input type="text" name="description" class="form-control"> <br>

                        <button class="btn btn-success" type="submit" name="done"> Submit </button><br>

                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>