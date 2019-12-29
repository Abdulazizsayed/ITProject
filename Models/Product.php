<?php
/**
 * Created by PhpStorm.
 * User: abdo
 * Date: 12/29/19
 * Time: 4:32 AM
 */
include_once 'Connection.php';

class Product
{
    public $id;
    public $name;
    public $des;
    public $quantity;
    public $price;
    public $image;
    public function save(){
        $link=Connection::connect();
        $qry="insert into products(name,des,quantity,price,image)
                values('$this->name','$this->des',$this->quantity,
                $this->price,'$this->image')";
        $link->query($qry);

    }
    public function update(){
        $link=Connection::connect();
        $qry="update products set name='$this->name'
         , des='$this->des'
         ,quantity=$this->quantity
         ,price=$this->price
          where id=$this->id";
        $link->query($qry);
    }
    public function delete(){
        $link=Connection::connect();
        $qry="delete from products where id=$this->id";
        $link->query($qry);
    }
    public static function getProductById($id){
        $link = Connection::connect();
        $query="select * from products where id='".$id."'";
        $data=mysqli_query($link,$query);
        $found=false;
        $product=new Product();
        $product->id=$id;
        while($row = mysqli_fetch_array($data)) {
            $product->quantity=$row['quantity'];
            $product->price=$row['price'];
            $product->image=$row['image'];
            $product->name=$row['name'];
            $product->des=$row['des'];
        }
        return $product;
    }
    public static function getAllProducts(){
        $res=array();
        $link=Connection::connect();
        $qry="select * from products";
        $data=mysqli_query($link,$qry);

        while($row=mysqli_fetch_array($data)){
            $product=new Product();
            $product->quantity=$row['quantity'];
            $product->name=$row['name'];
            $product->image=$row['image'];
            $product->des=$row['des'];
            $product->price=$row['price'];
            $product->id=$row['ID'];
            array_push($res,$product);
        }
        return $res;
    }
}