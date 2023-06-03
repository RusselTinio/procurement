<?php 
include_once('include/conn.php');
date_default_timezone_set('Asia/Manila');

if(isset($_POST['submit'])){
    $item_num=uniqid(rand(10000,99999), true);
    $item_name=$_POST['item-name'];
    $supplier=$_POST['supplier'];
    $price=$_POST['price'];

$sql=$conn->prepare("INSERT INTO supplies(item_num,item_name,supplier_name,amount_price) VALUES(?,?,?,?)");
    if($sql->execute([$item_num,$item_name,$supplier,$price])){
        echo "<script>
            alert('Item added successfully');
            window.location.href='../page/supplies.php';
            </script>";
    }
}
?>