  
<?php

    require "config.php";

    $num = $_GET['id'];

    $select = "SELECT * FROM todo WHERE id = $num";

    $select_run = mysqli_query($conn, $select);

    if ($select_run) {
        $data = mysqli_fetch_array($select_run);
    ?>







<!DOCTYPE html>
<html>
<head>
  <title>Update List</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
            <nav class="navbar navbar-dark bg-dark">
               <a href="index.php" ><h1 style="color: white; margin-left: 25px;">To Do List</h1></a>
            </nav>




  <div class="row ml-4 mr-4">
    <div class="col">
      <h2>Update Item</h2>

      <form class="form-inline" method="POST" >
         <input type="text" class="form-control mb-2 mr-sm-2"  placeholder="Type here.." name="item" required value="<?php echo $data['item']; ?>">
         <button type="submit" class="btn btn-primary my-2" name="submit">Submit</button>
       </form>
    </div>
  </div>        



</body>
</html>

 <?php
        if (isset($_POST['submit'])) {
            
            $new_val = mysqli_real_escape_string($conn, $_POST['item']);
            
            
            $update_query = "UPDATE todo SET item = '$new_val' WHERE id = $num";

            $update_run = mysqli_query($conn, $update_query);

            if($update_query) {
            ?>
                <script>
                    alert("Record can update successfully");
                    window.location.replace("display.php");
                </script>
            <?php
            }
        }
    }
    
?>
