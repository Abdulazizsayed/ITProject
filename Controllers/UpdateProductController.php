<?php
/**
 * Created by PhpStorm.
 * User: abdo
 * Date: 12/29/19
 * Time: 5:19 AM
 */
include '../Models/Product.php';
$product=new Product();
$product->id=$_POST['id'];
$product->name=$_POST['name'];
$product->des=$_POST['des'];
$product->price=$_POST['price'];
$product->quantity=$_POST['quantity'];
$product->update();
header("Location: http://localhost/ITProject-master/Views/UpdateProductsView.php");

