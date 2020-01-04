<?php
/**
 * Created by PhpStorm.
 * User: abdo
 * Date: 12/29/19
 * Time: 5:19 AM
 */
include "../Models/FileModel.php";
include '../Models/Product.php';
$product=new Product();
if($_POST['name'] == "" || $_POST['price'] == "" || $_POST['quantity'] == ""){
	header("Location: http://localhost:8080/PHPWork/ITProject/Views/AddNewProductView.php");
}else{
$product->name=$_POST['name'];
$product->des=$_POST['des'];
$product->price=$_POST['price'];
$product->quantity=$_POST['quantity'];
$product->image="../images/creepy-cat.jpg";
$product->save();
header("Location: http://localhost:8080/PHPWork/ITProject/Views/UpdateProductsView.php");
}
?>