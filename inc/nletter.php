<?php 
$conn = new mysqli('localhost', 'root', 'secret', 'fashion_db');

if(isset($_POST['submit'])) {
    $name = $email = "";
    $nameErr = $emailErr = "";

    if(empty($_POST['name'])) {
        $nameErr = "pls enter name";

    }else{
        $name = $_POST['name'];
    }

    if(empty($_POST['email'])) {
        $emailErr = "pls enter email";
        
    } else{
        $email =  $_POST('email');

    }

    if(empty($nameErr) && empty($emailErr)) {
      $sql = "INSERT INTO 'news'(name, email) VALUES($name, $email)";
      $result = mysqli_query($conn, $sql);

      if($result){
        echo "<script>alert('Thank you, well received')</script>";
      }else{
        echo "<script>alert('oops, something went wrong')</script>";
      }
    }

}
    



?>