<?php
include "connection.php";
// class signup extends connection
// {
//     public $fname;
//     public $lname;
//     public $email;
//     public $username;
//     public $pass;

//     public function add_info()
//     {
//     if(isset($_POST["sub"]))
//       {
//         $this->fname=$_POST["fname"];
//         $this->lname=$_POST["lname"];
//         $this->email=$_POST["email"];
//         $this->username=$_POST["username"];
//         $this->pass=$_POST["pass"];
//         $sql="INSERT INTO info Values (?,?,?,?,?)";
//         $result=$this->connect()->prepare($sql);
//         $result->execute([$this->fname,$this->lname,$this->email,$this->username,$this->pass]);
//       }
//     }

// }
// $obj=new signup();
// $obj->add_info();
// echo "<h1>Completed</h1>";

class signup extends connection
{
    public $fname;
    public $lname;
    public $email;
    public $username;
    public $pass;

    public function add_info()
    {
    if(isset($_POST["sub"]))
      {
        $this->fname=$_POST["fname"];
        $this->lname=$_POST["lname"];
        $this->email=$_POST["email"];
        $this->username=$_POST["username"];
        $this->pass=$_POST["pass"];
        $sql="INSERT INTO info Values (?,?,?,?,?)";
        $result=$this->connect()->prepare($sql);
        $result->execute([$this->fname,$this->lname,$this->email,$this->username,$this->pass]);
         echo "<h1>Hello $this->fname Welcome to our site</h1>";
      }
    }

}
$obj=new signup();
$obj->add_info();