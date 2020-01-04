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
$product->delete();
header("Location: http://localhost:8080/PHPWork/ITProject/Views/UpdateProductsView.php");

