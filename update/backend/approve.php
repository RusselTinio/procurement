<?php
    include_once('../backend/include/conn.php');
    $id=$_GET['id'];

    $sql="UPDATE purchase_order SET status= :status WHERE po_num=$id";
    $result=$conn->prepare($sql);
    $result->execute([
        'status' => 'APPROVED'
    ]);
    if($result){
        echo "<script>
            alert('Puchase Order Approved');
            window.location.href='../page/approval.php';
            </script>";
    }
?>