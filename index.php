<?php
include 'database.php';  
 $data = new Database;
            $name = "";
	          $description = "";
           	$id = 0;
	          $update = false;

          if(isset($_POST["add"])){
            $insert_data = array(  
           'name'         =>     $_POST['name'],  
           'description'  =>      $_POST['description'] , 
           'active'       =>     $_POST['active'] 
      ); 

      if($data->insert("history", $insert_data))  
      {  
           header("location:index.php");  
      } 
        }

            if(isset($_GET['delete'])){
            $id = $_GET['delete'];
            if($data->delete("history", $id))  
      {  
           header("location:index.php");  
      } }

            if(isset($_GET["edite"])){
            // print_r($_GET["edite"]);
            $id = $_GET["edite"];
            $update = true;
            if($data->edite("history", $id))  
            $edite_data=$data->edite("history",$id);
            // print_r($edite_data);
            $name = $edite_data[0]['name'];
            $description = $edite_data[0]['description'];
            }
         
          if(isset($_POST["update"])){
            // print_r($_POST);
            $id = $_POST["id"];
            // echo $id;
            $update_data = array(  
           'name'         =>      $_POST['name'],  
           'description'  =>      $_POST['description'] , 
           'active'       =>      $_POST['active']  
      ); 
       if($data->update("history", $update_data, $id))  
      {  
           header("location:index.php");  
      }  

    }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" connectiontent="width=device-width, initial-scale=1" />
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
    <!-- <div class="container"> -->
    <div class="education d-flex justify-connectiontent-center align-items-center " >
      <div class="container">
        <a href="show.php"> Go TO show page</a>

        <form action="index.php" method="POST" enctype="multipart/form-data" class=" col-5 my-5">
          <input type="hidden" name="id" value="<?php echo $id; ?>">
          <div class="mb-3">
            <label for="exampleInputName" class="form-label">Book Name</label>
            <input type="text" class="form-connectiontrol" id="exampleInputName" name="name" value="<?php echo $name; ?>" required >
          </div>
         <div class="mb-3">
            <label for="exampleInputDescription" class="form-label">Description</label>
            <input type="text" class="form-connectiontrol" id="exampleInputDescription" name="description" value="<?php echo $description; ?>" required>
         </div>
          <input type="hidden" name="active" value="1">
          <?php if ($update == true): ?>
        	<button class="btn btn-primary" type="submit" name="update"  >update</button>
          <?php else: ?>
	        <button  class="btn btn-primary" type="submit" name="add" >Add</button>
          <?php endif ?>
          <!-- <input type="submit" value="Add" name="add"> -->
        </form>
        <table class="table shadow p-3 caption-top ">
          <h1>History</h1>

          <thead>
            <tr class="p-3">
              <th scope="col">#</th>
              <th scope="col">Book Name</th>
              <th scope="col">Description</th>
              <th scope="col">Update</th>
              <th scope="col">Delete</th>
            </tr>
          </thead>
          <tbody>
            <?php
          $show_data=$data->select("history");

            if($show_data){
              $i=1;
              // print_r($show_data);
        foreach($show_data as $value){
        echo "<tr class='p-5 my-3'>
        <td>".$i++."</td>
        <td>".$value['name']."</td>
        <td>".$value['description']."</td>
        <td><a href='index.php?edite=".$value['id']."'><i class='fas fa-pen'></i></a></td>
        <td><a class='text-danger' href='index.php?delete=".$value['id']."'>
            <i class='fas fa-trash'></i></a></td>
        </tr>";
      }
      // echo'</table>';
    ?>
          </tbody>
        </table>
        <?php
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
