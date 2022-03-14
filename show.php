
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="public/css/all.min.css" />
    <!-- CSS Normalized -->
    <link rel="stylesheet" href="public/css/normalized.css" />
    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />

    <title>Hello, world!</title>
  </head>
  <body>
<div class="container py-5">
    <div class="row text-center">
      <a href="index.php"> Go TO Dashboard</a>

      <!-- End-->
<?php

include 'database.php';  
 $data = new Database;
           $show_data=$data->select("history");

            if($show_data){
              $i=1;
              // print_r($show_data);
        foreach($show_data as $value){
 ?>
         <!-- Books-->
      <div class="col-xl-3 col-sm-6 mb-5">
        <div class="bg-white rounded shadow py-5 px-4">
          <h5 class="mb-0"><?php echo $value['name'] ?></h5>
          <span class="small text-uppercase text-muted"><?php echo $value['description']?></span>
 
        </div>
      </div>
       <?php
      }
    }
    ?>
         
   </div>
    </div>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
