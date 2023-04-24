<?php
			$conn = new mysqli("localhost", "root", "secret", "fashion_db");
			
			if(!$conn){
                die(mysqli_error($conn));
            }
?>