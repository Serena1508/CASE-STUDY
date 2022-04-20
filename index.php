<!--Nurrdinan Serena (2012998)-->

<html> <!--Laboni Akter (1822794) + Nouran Ahmad Saleh Elmughrabi (1916440)-->
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
 
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
 
 
</head>
<body>
 
<nav class="navbar navbar-dark bg-dark">
 
    <span class="navbar-brand md-0 h1">Stationery Shop</span>
 
</nav>
<div class="row">
 
    <div class="col-sm-6">
        <div class="container">
            <div class="list-group-item list-group-tem-action active">Items</div>
 
            <div class="panel-body bg-dark" style="color: white">
                <form id="tbl-project">
                    <table class="table table-bordered" style="color: white"> <!--All style(css) - Serazum Marjan (2018010)-->

                        <thead id="list" >
                            <tr>
                                
                                <th>Product</th>
                                <th>Product Description</th>
                                <th>Quantity</th>
                                <th>Price</th>
                       </tr>
                </thead>
 
                        <tr>
                            <td>
                                <input type="checkbox" name="pos" value="Pencil Box">
                                <label>Pencil Box</label>
                            </td>

                            <td> <img src = "images/pencilbox.jpg" height="90" width="90"/></td> <!--All images(css) - Sabirina Saad Jama (1835578)-->
 
                            <td> <input type="number" name="qty" id="qty"></td>

                            <td> RM8 </td>
                        </tr>
 
                        <tr>
                            <td>
                                <input type="checkbox" name="pos" value="Pencil">
                                <label>Pencil</label>
                            </td>

                            <td> <img src = "images/pencil.jpg" height="90" width="90"/></td>
 
                            <td> <input type="number" name="qty" id="qty"></td>

                            <td> RM3 </td>
                        </tr>
 
                        <tr>
                            <td>
                                <input type="checkbox" name="pos" value="Eraser">
                                <label>Eraser</label>
                            </td>

                            <td> <img src = "images/eraser.jpg" height="90" width="90"/></td>
 
                            <td> <input type="number" name="qty" id="qty"></td>

                            <td> RM1 </td>
                        </tr>

                        <tr>
                            <td>
                                <input type="checkbox" name="pos" value="Sharpener">
                                <label>Sharpener</label>
                            </td>

                            <td> <img src = "images/sharpener.jpg" height="90" width="90"/></td>
 
                            <td> <input type="number" name="qty" id="qty"></td>

                            <td> RM2 </td>
                        </tr>

                        <tr>
                            <td>
                                <input type="checkbox" name="pos" value="Notebook">
                                <label>Notebook</label>
                            </td>

                            <td> <img src = "images/notebook.jpg" height="90" width="90"/></td>
 
                            <td> <input type="number" name="qty" id="qty"></td>

                            <td> RM5 </td>
                        </tr>

                        <tr>
                            <td>
                                <input type="checkbox" name="pos" value="Ruler">
                                <label>Ruler</label>
                            </td>

                            <td> <img src = "images/ruler.jpg" height="90" width="90"/></td>
 
                            <td> <input type="number" name="qty" id="qty"></td>

                            <td> RM1 </td>
                        </tr>

                        <tr>
                            <td colspan="3" align="right">
 
                                <input type="button" class="btn btn-info"  value="Add" onclick="add()">
 
 
                            </td>
 
 
                        </tr>
 
 
                    </table>
 
 
                </form>
            </div>
 
 
 
 
        </div>
 
 
    </div>

    <div class="col-sm-4">
 
        <div class="container">
            <div class="list-group-item list-group-tem-action active">All Products</div>
 
            <table id="tbl-item" class="table table-dark table-bordered" cellspacing="0" cellpadding="0" width="100%" align="center">
                <thead>
 
                <tr>
                        <th>Delete</th>
                         <th>Item</th>
                         <th>Price</th>
                         <th>Qty</th>
                         <th>Total</th>
                </tr>
 
                <tbody>
 
                </tbody>
            </table>

            <div class="list-group-item list-group-tem-action active">Total to pay + GST 6%</div>
            <div>
                <input type="text" style="color: yellow; background: black; font-size: 30px;" id="total" name="total">
                </div>

            <div>
                <input type="button" class="btn btn-warning" id="reset" name="reset" value="Reset">
            </div>
        </div>
 
    </div>

<script src="component/jquery/jquery.js"></script>
 
<script src="component/jquery/jquery.min.js"></script>
 
<!--Nurrdinan Serena (2012998)-->
<script>
    var tot = 0;
    var total = 0;
 
    function add()
    {
 
 
        $("input[name='pos']:checked").each(function()
        {
 
            let check = $(this).val();
            var price = null;
 
 
            if(check == "Pencil Box")
            {
                price = 8.00;
            }
            else if(check == "Pencil")
            {
                price = 3.50;
            }
            else if(check == "Eraser")
            {
                price = 1.00;
 
            }
            else if(check == "Sharpener")
            {
                price = 2.00;
 
            }
            else if(check == "Notebook")
            {
                price = 5.00;
 
            }
            else if(check == "Ruler")
            {
                price = 1.00;
 
            }
 
            var qty = $(this).closest("tr").find('[name="qty"]').val() || 0;

            tot = qty * price;

            var table1 =
 
                "<tr>"+
                "<td><button type='button' name='record' class='btn btn-warning' onclick='deleterow(this)'>Delete</td> "  +
                "<td>" + check  +  "</td>"  +
                "<td>" + price  +  "</td>"  +
                "<td>" + qty  +  "</td>"  +
                "<td>" + tot  +  "</td>"  +
                "</tr>";
 
                 total += Number(tot) + (tot * 0.06);
                $('#total').val(total);
 
                $("#tbl-item tbody").append(table1);

        }
        );
 
    }
 
      function deleterow(e)
    {
        total_cost = parseInt($(e).parent().parent().find('td:last').text(),10);
        total -= total_cost;
        $('#total').val(total);
        $(e).parent().parent().remove();
    }
 
 
 
    $('#reset').click(function()
        {
            location.reload();
        }
    );
 
</script>

</body>
</html>