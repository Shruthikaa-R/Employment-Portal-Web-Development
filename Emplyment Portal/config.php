 <?php

$server='localhost';
$username='root';
$password='';
$database='jobs';

$conn=  new mysqli($server,$username ,$password ,$database );

if($conn->connect_error) {
    die("Connection failed :" . $conn->connect_error );
}
echo"";
session_start();
if(isset($_POST['Login'])){
    $email=$_POST['email'];
    $password=$_POST['password'];

    $query="SELECT * FROM users WHERE email='$email' AND password='$password'";
    $result=$conn->query($query);
    $row=mysqli_fetch_assoc ( $result);
    //var_dump(mysqli_num_rows($result));
    //die();
    if(mysqli_num_rows($result) > 0){
        header("location:indexx.php");
    }
    else{
        $error="Email id or password is invalid";
    }
}

if(isset($_POST['job'])){
    $cname=$_POST['Cname'];
    $pos=$_POST['Pos'];
    $Jdesc=$_POST['Jdesc'];
    $skills=$_POST['Skills'];
    $CTC=$_POST['CTC'];

    $job = "INSERT INTO jobs ( Cname, Position, Jdesc, Skills, CTC) VALUES ('$cname','$pos','$Jdesc','$skills','$CTC')";
    if($conn->query($job)==TRUE){
        echo "New job posted !!!";
    }   
    else{
        echo "ERROR: could not able to execute .$sql.".mysqli_error($conn);
    }
}

    //mysqli_query($conn,$job);}
    //if(mysqli_query($conn,$sql)){
     //echo "New Job Posted"; }   
    //else{echo "ERROR: Failed to post the job .$sql. " .mysqli_error($conn);}}
if(isset($_POST['submit'])){
        $name=$_POST['name'];
        $qual=$_POST['qual'];
        $apply=$_POST['apply'];
        $year=$_POST['year'];

        $sql = "INSERT INTO candidates (name, apply, qual, year) VALUES ('$name','$apply','$qual','$year')";
        $conn->query($sql);
        //mysqli_query($conn,$sql);
    } 
    mysqli_close($conn);
?>