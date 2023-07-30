<?php include 'header.php' ?>
<div class="content"> 
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Candidate Name</th>
      <th scope="col">Position</th>
      <th scope="col">Year Passout</th>
    </tr>
  </thead>
  <tbody>
    <?php
     
     $server='localhost';
     $username='root';
     $password='';
     $database='jobs';
     $conn= new mysqli($server,$username ,$password ,$database );
     $sql="SELECT name,apply,year FROM candidates";
     $result=$conn->query($sql);
     $i=0;
     if($result->num_rows >0){
        while($rows=$result->fetch_assoc()){
          echo '
         <tr>
            <th scope="row">'.++$i.'</th>
            <td>'.$rows["name"].'</td>
            <td>'.$rows["apply"].'</td>
            <td>'.$rows["year"].'</td>
        </tr>';
     }}
     else{
       echo"";
     }
    ?>
  </tbody>
</table>
</div>