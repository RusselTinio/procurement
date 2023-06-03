<?php
include_once('../backend/include/conn.php');
$id=$_GET['id'];
$sql=$conn->query("SELECT * FROM supplier ");
$sql_sup=$conn->query("SELECT * FROM supplier WHERE supplier_num=$id");
$row1 = $sql_sup->fetch(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <title>Supplier</title>
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
            display: flex;
            justify-content: center;
            align-items: center;
    
        }
        .box-container{
            align-self: center;
            justify-self: center;
            height: auto;
            width: 70%;
            background:white;
            box-shadow: 0 2px 5px grey; 
            border-radius:1rem ;
            padding: 30px;
            padding-top: 2px;
            
        }
        .box-container h1{
            margin-left: 40%;
            padding-top: 2rem;
            padding-bottom: 2rem;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;

        }
        
        input[type=text], select, textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            resize: vertical;
            }

        label {
            padding: 12px 12px 12px 0;
            display: inline-block;
            
            }
        
        input[type=number], select, textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            resize: vertical;
            }

        input[type=submit] {
            background-color: #04AA6D;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            float: right;
            }

        input[type=submit]:hover {
            background-color: #45a049;
            }
        .col-25 {
            float: left;
            width: 25%;
            margin-top: 6px;
            }

            .col-75 {
            float: left;
            width: 75%;
            margin-top: 6px;
            }

            .row::after {
            content: "";
            display: table;
            clear: both;
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
                    <li><a href="add-supplies.html">Supplies</a></li>
                    <li><a href="add-supplier.html">Suppliers</a></li>
                    <li><a href="add-supplier.html">Approval</a></li>
                    <li><a href="Purchase_Edit.html">Delete Purchase Order</a></li>
                    <li><a href="add-supplier.html">Purchase Order</a></li>
                </ul>
            </div>
            <form action="../backend/add_supplier.php" method="POST">
                <div class="wrapper"> 
                <div class="box-container">
                 <h1>Edit Suppliers</h1>
                 <div class="row">
                    <div class="col-25">
                    <label for="item-name" id="item" >Supplier Name</label>
                    </div>
                    <div class="col-75">
                    <input type="text" name="supplier-name" id="item-item" value="<?php echo $row1['supplier_name'] ?>">
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                    <label for="supplier">Address</label>
                    </div>
                    <div class="col-75">
                        <input type="text" name="address" id="item-item" value="<?php echo $row1['supplier_address'] ?>">
                        </div>
                </div>
                <div class="row">
                    <div class="col-25">
                    <label for="price">Contact Number</label>  
                    </div>
                    <div class="col-75">
                        <input type="text" name="contact_num" id="item-item" value="<?php echo $row1['contact_num'] ?>">
                        </div>
                </div>
                <br>
                <div class="row">
                <input type="submit" value="submit" id="button" name="submit" >
                </div>
                         </div>
                         </div>
                
             </form>
    </body>
</html>