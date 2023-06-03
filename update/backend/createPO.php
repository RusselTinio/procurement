<?php
require_once('include/conn.php');
date_default_timezone_set('Asia/Manila');
    $date=date('m/d/Y');
    $po_num=rand(10000,99999);
    $supplier =$_POST['supplier'];
    $expected_date=$_POST['expected_date'];
    $total=$_POST['total'];
    $status='PENDING';

    



$sql="INSERT INTO purchase_order(po_num,supplier,order_date,expected_date,status,order_total) VALUE(:po_num, :supplier, :order_date,:expected_dat, :status, :order_total)";
$result=$conn->prepare($sql);
$result->execute([
    'po_num' => $po_num,
    'supplier' => $_POST['supplier'],
    'order_date' => $date,
    'expected_dat'=>$expected_date,
    'status' => $status,
    'order_total' => $total
]); 

foreach($_POST['product_name'] as $key => $value){
    $order_num=rand(10000,99999);
    $name=$value;
    $quantity=$_POST['quantity'];
    $price=$_POST['price'];
    $subtotal=$_POST['subtotal'];


   $sql= "INSERT INTO order_table(order_num,po_num,item_name,quantity,price,subtotal) VALUES(:order_num, :po_num, :name, :quantity, :price, :subtotal)" ;
    $result=$conn->prepare($sql);
    $result->execute([
        'order_num' => $order_num,
        'po_num' => $po_num,
        'name'=> $value,
        'quantity'=>$_POST['quantity'][$key],
        'price'=>$_POST['price'][$key],
        'subtotal'=>$_POST['subtotal'][$key]
    ]);
}
echo "Items inserted successfully";
?>
