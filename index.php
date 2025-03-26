<?php
#Check if data has been submitted
if(!isset($_POST['submit'])){
  #logic to calculate age in days

  $ageindays=(($_POST['currentYear']-$_POST['birthYear'])*365);
  # ******************************

  }
else {
  echo "error in data submission";
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
     <title>Days calculator with PHP </title>
     <script src="bootstrap/js/jquery-3.4.0.js "></script>
     <script src="bootstrap/js/popper.min.js "></script>
     <script src="bootstrap/js/bootstrap.js"></script>


    <link  rel="stylesheet" href="bootstrap/css/bootstrap.css"/>
  </head>
  <body>
    <br>      
    <br>
    <br>
    <br>      
    <div class="container">
    <div class="card" style="width: 100%;">
  <div class="card-body">
    <h2 class="card-title"> <?php echo $_POST['userName']. "has been on earth for ". $ageindays."days"; ?>
    </h2>
  </div>
</div>
</div>
    <div class="container">
   <form action="index.php" method="POST">
      <div class="form-group">
         <label for=" Username" >Enter Name</label>
        <input type="Text"class="form-control"  placeholder="Enter Name" name="userName">
          </div>
          <div class="form-group">
    <label for="Birth year">Input Year of Birth</label>
    <input type="Text" class="form-control"  placeholder="Enter Year of Birth" name="birthYear">
       </div>
      <div class="form-group">
     <label for="exampleCheck1">Input current year</label>
    <input type="current year" class="form-control" placeholder="Enter current year"name="currentYear">
       </div>
  <button type="submit" class="btn btn-primary" value="submit" >Calculate</button>
</form>
</div>
  </body>
</html>  