<?php
/**
 * Created by PhpStorm.
 * User: abdo
 * Date: 12/29/19
 * Time: 5:19 AM
 */
include '../Models/Product.php';
$product=new Product();
$id=$_POST['id'];
$product->name=$_POST['name'];
$product->des=$_POST['desc'];
$product->price=$_POST['price'];
$product->quantity=$_POST['quantity'];
$product->update();
header("http://localhost:8080/PHPWork/ITProject/Views/UpdateProductsView.php");

