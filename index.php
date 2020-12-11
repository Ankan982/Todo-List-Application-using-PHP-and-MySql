
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
     <h1 style="color: white; margin-left: 25px;">To Do List</h1>
    </nav>

  <div class="row ml-4 mr-4">
    <div class="col">
      <h2>Add Item</h2>


      <form class="form-inline" method="GET" >
         <input type="text" class="form-control mb-2 mr-sm-2"  placeholder="Type here.." name="itemsvalue" autocomplete="off">
         <button type="submit" class="btn btn-primary my-2" name="save">Submit</button>
       </form>
    </div>
  </div> 




  <div class="card text-center">
  
  <div class="card-body">
    <h5 class="card-title">TODO-LIST: HTML+BOOTSTRAP+PHP+MYSQL DATABASE</h5>
    <p class="card-text"><i>Want to see the list ??</i></p>
    <a href="display.php" class="btn btn-primary"><b>Show List</b></a>
  </div>
  <div class="card-footer text-muted">
  <i>Developed By Ankan Das</i>
  </div>
  
</div>

 
</body>
</html>

 <?php
  include_once 'config.php';
  if(isset($_GET['save']))
    {
      $val = $_GET['itemsvalue'];
   
      $sql = "INSERT INTO todo(item) VALUES ('$val')";

      if(mysqli_query($conn, $sql))
      {

       header("location: display.php");

     }
     else
      {
        echo "Error" .$sql."<br>".mysqli_error($conn)  ;
      }
        mysqli_close($conn);


    }
      ?>