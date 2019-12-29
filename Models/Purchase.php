<?php
/**
 * Created by PhpStorm.
 * User: abdo
 * Date: 12/29/19
 * Time: 4:32 AM
 */
include 'Connection.php';
class Purchase
{
    public $userId;
    public $productId;
    public $quantity;
    public function save(){
        $link=Connection::connect();
        $qry="insert into purchases(userId,productId,quantity) 
          values($this->userId,$this->productId,$this->quantity)";
        $link->query($qry);
    }
    public static function getPurchasesForUser($userId){
        $res=array();
        $link=Connection::connect();
        $qry="select * from purchases where userId=".$userId;
        $data=mysqli_query($link,$qry);
        while($row=mysqli_fetch_array($data)){
            $purchase=new Purchase();
            $purchase->userId=$userId;
            $purchase->productId=$row['productId'];
            $purchase->quantity=$row['quantity'];
        }

    }
}