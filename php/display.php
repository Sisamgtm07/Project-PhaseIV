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

  <!--JS bootstrap-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

<!--databales Jquery-->
<link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">
<script type="text/javascript" charset="utf8" src="https://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>

  <title>Profile Data</title>



</head>
<body>
 <!--Navigation Menu-->
   <nav class="navbar navbar-expand-lg navbar-light bg-light py-1 " id="mainNav">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="../index.html">
                <img src="../img/logo.png" alt="Logo">
            </a>
            <button class="navbar-toggler navbar-toggler-right ml-auto" type="button" data-toggle="collapse"
                data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
                aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
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


   <!--Display data--> 
<div class="profilehead  bg-light" style="height: 100vh;">
 <div class="container">
 <div class="col-lg-12">
 <br><br>
 <h1 class=" display-4 text-center" > Profile Info </h1>
 <hr class=" divider mx-auto" />
 <br>
 <table  id="tabledata" class=" table table-striped table-hover table-bordered">
 
 <tr class="bg-dark text-white text-center">
 <th> Image </th>
 <th> Name </th>
 <th> Channel</th>
 <th> Description</th>
 <th> Delete </th>
 <th> Update </th>

 </tr >

 <?php

 include 'conn.php'; 
 $q = "select * from testcrudtable ";

 $query = mysqli_query($con,$q);

 while($res = mysqli_fetch_array($query)){
 ?>
 <tr class="text-center">
 <td><img src="../images/<?php echo $res['image'];?>" style="width:20%"></td>
 <td> <?php echo $res['name'];  ?> </td>
 <td> <?php echo $res['channel'];  ?> </td>
 <td> <?php echo $res['description'];  ?> </td>
 <td> <button class="btn-danger btn"> <a href="delete.php?id=<?php echo $res['id']; ?>" class="text-white"> Delete </a>  </button> </td>
 <td> <button class="btn-primary btn"> <a href="update.php?id=<?php echo $res['id']; ?>" class="text-white"> Update </a> </button> </td>

 </tr>

 <?php 
 }
  ?>
 
 </table>  

 </div>
 </div>
</div>

 <script type="text/javascript">
 
 $(document).ready(function(){
 $('#tabledata').DataTable();
 }) 
 
 </script>

</body>
</html>