<?php
include_once('include/conn.php');


if(isset($_POST['submit'])){
    $supplier_num=uniqid(rand(10000,99999), true);
    $supplier_name=$_POST['supplier-name'];
    $address=$_POST['address'];
    $contact_num=$_POST['contact_num'];

    $sql=$conn->prepare("INSERT INTO supplier(supplier_num,supplier_name,contact_num,supplier_address) VALUES(?,?,?,?)");
    if($sql->execute([$supplier_num,$supplier_name,$contact_num,$address])){
        echo "<script>
            alert('Item added successfully');
            window.location.href='../page/suppliers.php';
            </script>";
    }
}
?>