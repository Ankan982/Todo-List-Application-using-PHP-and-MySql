<!DOCTYPE html>
<html>
<head>
	<title>To do list in php</title>
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



         <table class="table">
              <thead class="thead-light">
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Items</th>
                  <th scope="col">Update</th>
                  <th scope="col">Done</th>
                  
                </tr>
                </thead>

     <?php
         include_once 'config.php';
        $query="select * from todo";
        $result= mysqli_query($conn,$query);
        while($rows = mysqli_fetch_assoc($result))
        {
       ?>


  <tbody>
    <tr>
  <th scope="row"><?php echo $rows['id']; ?></th>
  <td><?php echo $rows['item'];?> </td>
  <td><a href="update.php?id=<?php echo $rows['id']; ?>"><button type="submit" class="btn btn-primary">Update</button></a></td>
  <td><a href="delete.php?id=<?php echo $rows['id']; ?>"><button type="submit" class="btn btn-danger">Delete</button></a></td>
    </tr>

    <?php
    
        }

    ?> 

  </tbody>
</table>


  <div class="card text-center">
  
  <div class="card-body">
    <h5 class="card-title">TODO-LIST: HTML/BOOTSTRAP/PHP/MYSQL DATABASE</h5>
    <p class="card-text"><i> Want to add more ???</i></p>
    <a href="index.php" class="btn btn-primary">Add More</a>
  </div>
  <div class="card-footer text-muted">
  <i>Developed by Ankan Das</i>
  </div>
  
</div>

 
</body>
</html>

