 
<?php
        include 'config.php';
       $user=$_POST['username'];
       $password=$_POST['password'];
        $query = "INSERT INTO obsa8455.users ( username, password ) VALUES('$user', '$password') "; 
        Header("Location: login.php");
        echo  "$query";
        $results= mysqli_query($conn,$query);
        if($results==true){
            echo "error";
        } 
        
 ?>