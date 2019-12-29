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
        $link = Connection::connect("localhost", "root", "", "itproject");
        $data=$link->query("select * from users where email=".$email);
        echo 'zizo';
        if($data->num_rows==0)return null;
        $user=new User();
        $found=false;
        while($row = $data->fetch_assoc()) {
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