function Calc(v)
{
    var index = $(v).parent().parent().index();
    var qty = document.getElementsByName("quantity[]")[index].value;
    var price = document.getElementsByName("price[]")[index].value;
    var subtotal = qty * price;
    document.getElementsByName("subtotal[]")[index].value=subtotal;
   GetTotal();
}
function GetTotal()
{
    var sum=0;
    var total =  document.getElementsByName("subtotal[]");

    for (let index = 0; index < total.length; index++)
    {
        var subtotal = total[index].value;
        sum = +(sum) +  +(subtotal) ; 
    }
    document.getElementById("total").value = sum;
}


 $(document).ready(function(e){    
           
            
        
           $(".add_item_btn").click(function(e){
           e.preventDefault();
           $("#show_item").prepend(`<div class="row append_item">
                <div class="col-md-3 mb-3">
                           <input type="text" name="product_name[]" class="form-control" id="item-name" placeholder="Item Name" required autocomplete="off">
                        </div>
                <div class="col-md-3 mb-3">
                    <input type="number" name="quantity[]" class="form-control" placeholder="Quantity" id="item-qty" onchange="Calc(this);" required autocomplete="off" >
                </div>
                <div class="col-md-2 mb-3">
                    <input type="number" name="price[]" class="form-control" placeholder="Price" id="item-price" onchange="Calc(this);" required autocomplete="off">
                </div>
                <div class="col-md-2 mb-3">
                    <input type="number" name="subtotal[]" class="form-control" placeholder="subtotal" id="subtotal" value=0 readonly >
                </div>
                <div class="col-md-2 mb-3 d-grid">
                    <button class="btn btn-danger remove_item_btn" type="button">Remove</button>
                </div>
            </div>`);
           
        });
        $(document).on('click','.remove_item_btn', function(e){
            e.preventDefault();
            let row_item = $(this).parent().parent();
            $(row_item).remove();
        });


     
              

        //ajax request to insert all form data
        $("#add-form").submit(function(e){
            e.preventDefault();
            $("#add_btn").val('Adding...');
            $.ajax({
                url:'../backend/createPO.php',
                method:'post',
                data: $(this).serialize(),
                success: function(response) {
                    $("#add_btn").val("Add");
                    $('#add-form')[0].reset();
                    $('.append_item').remove();
                    $('#show_alert').html(`<div class="alert alert-success" role="alert">${response}</div>`);
        
                }
            })
        });
    });