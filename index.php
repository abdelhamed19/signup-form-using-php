<?php
// include "classes/connection.class.php";
// class signup extends connection
// {
//     public function add_info()
//     {
//         if(isset($_POST["sub"]))
//         {
//             $fname=$_POST["fname"];
//             $lname=$_POST["lname"];
//             $email=$_POST["email"];
//             $username=$_POST["username"];
//             $pass=$_POST["pass"];
//         }

//         $sql="INSERT INTO info Values (?,?,?,?,?)";
//         $result=$this->connect()->prepare($sql);
//         $result->execute([$fname,$lname,$email,$username,$pass]);
//     }
// }
// $obj=new signup();
// $obj->add_info();
 ?>

<!-- <?php
//include "signup.php";
?> -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<div class="main-wrap">
           <div class="form-wrap">
               <h1>SIGN <span>UP</span></h1>
               <h6>Welcome to Our Local Host</h6>
               <form class="form" method="POST" action="signup.php">
                    <input type="text" name="fname" placeholder="First Name" required>
                    </br>
                    <input type="text" name="lname" placeholder="Last Name" required>
                    </br>
                   <input type="email" name="email" placeholder="Email" required>
                    </br>
                   <input type="text" name="username" placeholder="User Name" required>
                    </br>
                   <input type="password" name="pass" placeholder="Password" required>
                    </br>
                   <button type="submit" name="sub" class="form-btn">SIGN UP</button>
               </form>
           </div>
       </div>

<link rel="stylesheet" href="style.css">
</body>
</html>