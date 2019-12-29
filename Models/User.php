<?php
/**
 * Created by PhpStorm.
 * User: abdo
 * Date: 12/29/19
 * Time: 1:29 AM
 */
include 'Connection.php';
class User
{
    public $name;
    public $email;
    public $image;
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
                $user->id=$row["id"];
                $found=true;
            }
        }
        if(!$found)return null;
        return $user;
    }
}