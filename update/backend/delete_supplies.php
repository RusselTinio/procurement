<?php
 include_once('../backend/include/conn.php');
 $id=$_GET['id'];

 $sql="DELETE FROM supplies WHERE item_num=$id";
 $result=$conn->prepare($sql);
 if($result->execute()){
    echo "<script>
    alert('Puchase Order Deleted');
    window.location.href='../page/supplies.php';
    </script>";
 }

?>