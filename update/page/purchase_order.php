<?php
include_once('../backend/include/conn.php');
$sql=$conn->query("SELECT * FROM supplier");
$sql_sup=$conn->query("SELECT * FROM supplies");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Purchase Order</title>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js'></script>
    <script src='script/script.js'></script>
</head>
<body>
<a href="dash.php"><p>Home</p></a>
        <div class="form_container">
                <div id="show_alert">

                </div>
            <form action="" method="POST" id="add-form">
                    <select name="supplier" id="suppplier" class='col-md-3 mb-3 form-control'>
                    <option value="" disabled selected>Select Supplier</option>
                    <?php
                while($row = $sql->fetch(PDO::FETCH_ASSOC)){
                    echo "          
                        <option value='".$row['supplier_name']."'>".$row['supplier_name']."</option>";
                    }
            ?>
            </select>
                    </select>
                    <input type="date" name="expected_date" class="form-control" id="expected-date" required>
                <div id="show_item">
                    <div class="row">
                        <div class="col-md-3 mb-3">
                           <input type="text" name="product_name[]" class="form-control" id="item-name" placeholder="Item Name" required autocomplete="off">
                        </div>
                        <div class="col-md-3 mb-3">
                            <input type="number" name="quantity[]" class="form-control" placeholder="Quantity" id="item-qty" onchange="Calc(this);" required autocomplete="off">
                        </div>
                        <div class="col-md-2 mb-3">
                            <input type="number" name="price[]" class="form-control" placeholder="Price" id="item-price" onchange="Calc(this);" required autocomplete="off">
                        </div>
                        <div class="col-md-2 mb-3">
                            <input type="number" name="subtotal[]" class="form-control" placeholder="subtotal" id="subtotal" value=0 readonly >
                        </div>
                        <div class="col-md-2 mb-3 d-grid">
                            <button class="btn btn-success add_item_btn" type="button">Add More</button>
                        </div>
                    </div>
                    <div >
                        <div class="col-md-2 mb-3">
                        <input type="number" name="total" class="form-control" value=0 readonly id="total">
                        </div>
                        <input type="submit" value="submit" name="submit" class="btn btn-primary w-25" id="add_btn">
                        
                    </div>
                    
                </div>
            </form> 
            
        </div>
</body>
</html>