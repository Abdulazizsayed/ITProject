<?php 

$id = $_POST['id'];
$q = $_POST['quantity'];

include_once "../Models/Product.php";
include_once "../Models/Purchase.php";
include_once "../Models/User.php";

session_start();

$data = Product::getProductById($id);

if($data->quantity >= $q){
	$purchase=new Purchase();
	$purchase->productId = $id;
	$purchase->userId = $_SESSION['user']->id;
	$purchase->quantity = $q;

	$purchase->save();
	$product=Product::getProductById($id);
	$product->quantity-=$q;
	$product->update();
	header("Location: http://localhost:8080/PHPWork/ITProject/Views/ProfileView.php");
}else{
	header("Location: http://localhost:8080/PHPWork/ITProject/Views/HomeView.php");
}

?>