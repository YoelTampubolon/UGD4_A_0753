<?php
    if(isset($_POST['register'])){
        
        include('../db.php');
        
        $email = $_POST['email'];
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $name = $_POST['name'];
        $phonenum = $_POST['phonenum'];
        $membership = $_POST['membership'];

        $querySearch = mysqli_query($con, "SELECT * FROM users WHERE phonenum= '$phonenum'") or die (mysqli_error($con));
        if(mysqli_num_rows($querySearch) == 0){
             
            $query = mysqli_query($con,
                "INSERT INTO users(email, password, name, phonenum, membership)
                    VALUES
             ('$email', '$password', '$name', '$phonenum', '$membership')")or die(mysqli_error($con)); 
    
    if($query){
       
        echo
            '<script>
            alert("Register Success");
            window.location = "../index.php"
            </script>';
       
        }else{
           
            echo
            '<script>
            alert("Register Failed");
            </script>';
   
        }
   
    }else{
        echo
            '<script>
            alert("Phonenum Sudah Terdaftar");
            window.location = "../index.php"
            </script>';
    }

    }else{
    
        echo
            '<script>
            window.history.back()
            </script>';
        }


       
?>
        