<?php
/**
 * Created by PhpStorm.
 * User: abdo
 * Date: 12/29/19
 * Time: 1:29 AM
 */
include_once 'Connection.php';
class User
{
    public $name;
    public $email;
    public $image;
    public $password;
    public $id;
    public static function Login($email,$password){
        $user=new User();
        if($_POST['email']=="admin@admin.com" && $_POST['password']=="admin1234"){
            $user->name="admin";
            $user->email=$_POST['email'];
            return $user;
        }
        $link = Connection::connect();
        $query="select * from users where email='".$email."'";
        $data=mysqli_query($link,$query);
        $found=false;
        while($row = mysqli_fetch_array($data)) {
            if($row["password"]==$password){
                $user->name=$row["name"];
                $user->email=$row["email"];
                $user->image=$row["image"];
                $user->id=$row["ID"];
                $found=true;
            }
        }
        if(!$found)return null;
        return $user;
    }
    public static function isEmailExist($email){
        $link=Connection::connect();
        $query="select * from users where email='".$email."'";
        $data=mysqli_query($link,$query);
        if($data->num_rows>0)return true;
        return false;
    }
    public function save(){
        $con = Connection::connect();
        $sql = "INSERT INTO users(`name`, `password`, `email`, `image`) VALUES('".$this->name."', '".$this->password."', '".$this->email."', '".$this->image."')";
        mysqli_query($con, $sql);
        return self::Login($this->email,$this->password);
    }
}