<?php
/**
 * Created by PhpStorm.
 * User: abdo
 * Date: 12/29/19
 * Time: 5:19 AM
 */
include '../Models/Product.php';
$product=new Product();
$product->name=$_POST['name'];
$product->des=$_POST['des'];
$product->price=$_POST['price'];
$product->quantity=$_POST['quantity'];
$product->image=$_POST['image'];
$product->save();
header("http://localhost:8080/PHPWork/ITProject/Views/UpdateProductsView.php");
