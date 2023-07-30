<?php include 'config.php' ?>
<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous"> 
    <style>
       
        .navbar{
           overflow:hidden;
           background-color:#333;
           position:fixed;
           top:0;
           width:100%;
        }
        h1,
        p{
            color: #fff;
        }
        .container {
  position: relative;
  text-align: center;
  color: white;
}
.centered {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}
        .jobs{
            border:1px solid black;
            box-shadow: 5px 5px 4px 5px grey;
            margin:10px;
            padding:10px;
   }
    </style>
    <title>Career</title>
</head>
<body>

<div class="container">
  <img src="x11.jpg" alt="Snow" class="img-fluid"  >
  <div class="bottom-left">Bottom Left</div>
  <div class="centered"><h1>JOB PORTAL</h1></div>
</div>

<div class="row">
<?php
$conn=  new mysqli('localhost','root' ,'' ,'jobs' );
$sql= "SELECT Cname,Position,Jdesc,CTC,Skills FROM jobs ";
$result=$conn->query($sql);
if($result->num_rows >0){
   while($rows=$result->fetch_assoc()){
     echo '
     <div class="col-md-4">
         <div class="jobs">
         <h3 style="text-align: center;">'.$rows['Position'].'</h3>
         <h4 style="text-align: center;">'.$rows['Cname'].'</h4>    
         <p style="color : black; text-align: justify;">'.$rows['Jdesc'].'</p>
         <p style="color : black;"><b>Skills Required : </b>'.$rows['Skills'].'</p>
         <p style="color : black;"><b>CTC:</b>'.$rows['CTC'].'</p>
         <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" aria-expanded="false" aria-controls="collapseExample">
    Apply Now
  </button>
         </div>
      </div>';  
}}
?>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">APPLICATION</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="POST">
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Name</label>
            <input type="text" class="form-control" name="name">
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">Applying For</label>
            <input type="text" class="form-control" name="apply">
     </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Qualification </label>
            <input type="text" class="form-control" name="qual">
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Year Passout</label>
            <input type="text" class="form-control" name="year">
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" name="submit" class="btn btn-primary">Apply</button>
       
      </form>
      </div>
    </div>
  </div>
</div>

</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>