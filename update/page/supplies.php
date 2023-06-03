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
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <title>Supplies</title>
    <style>
        *{
           margin: 0;
           padding: 0;
           box-sizing: border-box;
           font-family:system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
           
       }
       body{
        background-image: url('bg2.jpg');
           background-repeat: no-repeat;
           background-attachment: fixed;
           background-size: 100% 100%;
       }
       .container{
           width: 100%;
           height: 100vh;
           display: grid;
           grid-template-rows: 5rem auto;
           
       }
       .navbar{
           width:100%;
           background:  #d3ecdc;
           display: flex;
           justify-content: space-between;
           align-items: center;
           color:black;
           padding: 2rem;
           box-shadow: 1px 1px 2px 0px black;
       }
       
       .navbar h1{
           font-family: 'Courier New', Courier, monospace;
           padding-top: auto;
         
       }

       .navbar ul li{
           list-style:none;
           padding-top: auto;
           text-transform: uppercase;
		   padding: 0 15px;
		    
       }

        .navbar ul li a:after,
        .navbar ul li a:after {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        margin: auto;
        width: 0%;
        content: '.';
        color: transparent;
        background: #aaa;
        height: 1px;
        }
        .navbar ul li a:hover:after {
        width: 100%;
        }

        .navbar ul li a {
        transition: all 0.5s;
        }

        .navbar ul li a:after {
        text-align: left;
        content: '.';
        margin: 0;
        opacity: 0;
        }
        .navbar ul li a:hover {
        color: #fff;
        z-index: 1;
        }
        .navbar ul li a:hover:after {
        z-index: -10;
        animation: fill 0.5s forwards;
        -webkit-animation: fill 0.5s forwards;
        -moz-animation: fill 0.5s forwards;
        opacity: 1;
        }

       .nav-list{
           display: inline-block;
           padding:1rem;
       }
       .nav-list a{
         
           text-decoration: none;
           color:rgb(18, 18, 18);
           font-family: "Roboto", sans-serif;
           font-weight: bold;
           
       }
       
       .content{
           height:100%;
           display: grid;
           grid-template-columns:1fr 15fr;
           background:#c4fafa5c;
           margin-top: auto;
       }
       .content .menu{
           justify-self:left ;
           align-self:center;
           height:auto;
           width: 100%;
           box-shadow: 1px 0px 3px 0px rgba(13, 13, 13, 0.397);
           border-radius: 10px;
           border-top-left-radius: 0;
           border-bottom-left-radius: 0;
           background: #d3ecdc;;
       }

       .content .menu ul li{
           padding:1.7rem;
           text-align: center;
           list-style: none;
       }
       .content .menu ul li:hover{
           background: #e0ffe4;
           transition: 0.5s;
       }
       .content .menu ul li a{
           color:black;
           text-decoration: none;
           display: grid;
           grid-template-columns: 1fr;
       }

       .wrapper{
            height: 85vh;
            width: 100%;
            display: inline-block;
            justify-content: center;
            align-items: center;
            margin-top: 20px;
        }
        .box-container{
            align-self: center;
            justify-self: center;
            height: auto;
            width: 70%;
            background:white;
            box-shadow: 0 2px 5px grey; 
            border-radius: 5px;
            padding-top: 2px;
            margin-left: 15%;
            
        }
        .box-container h1{
            margin: 6px 20px 0;
            font-size: 22px;
            padding-top: 5px;
            padding-bottom: 10px;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;

        }
        
        input[type=text], select, textarea {
            width: 30%;
            padding: 5px;
            border: 1px solid #ccc;
            border-radius: 4px;
            resize: vertical;
            }

        label {
            font-family: "Roboto", sans-serif;
            padding: 12px 12px 12px 0;
            display: inline-block;
            font-size: 12px;
            margin-left: 50px;
            }
        
        input[type=number], select, textarea {
            width: 30%;
            padding: 5px;
            border: 1px solid #ccc;
            border-radius: 4px;
            resize: vertical;
            margin-left: 0;
            font-size: 12;
            }

        input[type=submit] {
            background-color: #04AA6D;
            color: white;
            margin-left: 18%;
            padding: 5px 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            }

        input[type=submit]:hover {
            background-color: #45a049;
            }
        .col-25 {
            float: left;
            width: 10%;
            margin-top: 2px;
            }

        .col-75 {
            float: left;
            width: 75%;
            margin-top: 2px;
            }

        .row::after {
            content: "";
            display: table;
            clear: both;
            }
    
        .table {
            border-collapse: collapse;
            font-size: 0.9em;
            font-family: sans-serif;
            width: 100%;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
            margin: auto;
        }
        .table thead tr {
            background-color: #04AA6D;
            color: #ffffff;
            text-align: left;
        }
        .table th,
        .table td {
            padding: 7px 10px;
        }
        .table tbody tr {
            border-bottom: 1px solid #dddddd;
        }

        .tbody tr:nth-of-type(even) {
            background-color: #f3f3f3;
        }

        .table tbody tr:last-of-type {
            border-bottom: 2px solid #009879;
        }
        .table tbody tr.active-row {
            font-weight: bold;
            color: #009879;
        }


        
   </style>
<body>
    <div class="container">
        <div class="navbar">
           <h1 class="nav-brand">APOTHECURE</h1>
           <ul class="nav-content">
            <li class="nav-list"><a href="#">Inventory</a></li>
            <li class="nav-list"><a href="#">Home</a></li>
            <li class="nav-list"><a href="#">Log Out</a></li>
           </ul>
        </div>
        <div class="content">
            <div class="menu">
                <ul>
                    <li><a href="dash.php"><i class="fa-solid fa-chart-line"></i>Dashboard</a></li>
                    <li><a href="supplies.php">Supplies</a></li>
                    <li><a href="suppliers.php">Suppliers</a></li>
                    <li><a href="approval.php">Approval</a></li>
                    <li><a href="delete_po.php">Delete Purchase Order</a></li>
                    <li><a href="purchase_order.php">Purchase Order</a></li>
                </ul>
            </div>
            <form action="../backend/add_supplies.php" method="POST">
                
                <div class="wrapper"> 
                    <div class="row">
                        <div class="col-25">
                        <label for="item-name" id="item" >Item Name</label>
                        </div>
                        <div class="col-75">
                            <input type="text" name="item-name" id="item-item">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                        <label for="supplier">Supplier</label>
                        </div>
                        <div class="col-75">
                        <select name="supplier" id="supplier">
                         <option value="" disabled selected>Select Supplier</option>
                         <?php
                while($row = $sql->fetch(PDO::FETCH_ASSOC)){
                    echo "          
                        <option value='".$row['supplier_name']."'>".$row['supplier_name']."</option>";
                    }
            ?>
                         </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                        <label for="price">Price</label>  
                        </div>
                        <div class="col-75">
                        <input type="number" name="price" id="price" value="<?php echo $row1['amount_price'] ?>">
                        </div>
                    </div>
                    <div class="row">
                    <input type="submit" value="ADD" id="button" name="submit" >
                    </div>
                    <br>
                <div class="box-container">
                 <h1>Supplies Details</h1>
                 <table class="table">
                    <thead>
                        <th>Item Number</th>
                        <th>Item Name</th>
                        <th>Supplier</th>
                        <th>Price</th>
                        <th>Action</th>
                    </thead>
                    <tbody>
                    <?php
                     while($row1 = $sql_sup->fetch(PDO::FETCH_ASSOC)){
                        echo "<tr>
                                <td>".$row1['item_num']."</td>
                                <td>".$row1['item_name']."</td>
                                <td>".$row1['supplier_name']."</td>
                                <td>".$row1['amount_price']."</td>
                                <td><a href='edit_supply.php?id=".$row1['item_num']."'>Edit</a> <a href='../backend/delete_supplies.php?id=".$row1['item_num']."'>Delete</a></td>
                        </tr>";
                     }
                    ?>
                    </tbody>
                </table>
                         </div>
                         </div>
                
             </form>
    </body>
</html>