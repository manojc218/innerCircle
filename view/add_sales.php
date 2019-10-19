<?php
    include_once ('header.php');
?>
    <div class="col-md-12 col-ms-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h4>Add Sales</h4>
            </div>

            <form class="form-horizontal form_label-left" method="post">
                <div class="form-group">
                    <label class="control-label col-md-3 col-ms-3 col-xs-3" for="guyCode">Guy Code</label>
                    <div class="col-md-6 col-ms-6 col-xs-12">
                        <input type="text" class="form-control col-md-7 col-xs-12" name="guyCode" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3 col-ms-3 col-xs-12" for="Serial Number">Serial Number</label>
                    <div class="col-md-6 col-ms-6 col-xs-12">
                        <input type="text" name="salesSNum" id="salesSNum" class="form-control col-md-7 col-xs-12" required>
                    </div>
                </div>
                <div class="form-group addResetButtons_center">
                    <input type="button" class="btn btn-primary" onclick="addSales()" value="Add">
                    <input type="reset" class="btn btn-success" value="Reset">
                </div>
            </form>
            <hr class="separator">

            <!--sales table-->
            <table class="table table-striped jambo_table bulk_action">
                <thead>
                <tr class="headings">
                    <th class="column-title">Serial Number</th>
                    <th class="column-title">Category </th>

                    <th class="column-title no-link last"><span class="nobr">Action</span>
                    </th>
                    <th class="bulk-actions" colspan="7">
                        <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                    </th>
                </tr>
                </thead>

                <tbody id="salesitems">

                </tbody>
            </table>

            <hr class="separator">

            <!--submit button-->
            <div  style="text-align: right">
                <input type="submit" class="btn btn-primary" value="Submit">
            </div>
        </div>
    </div>

<?php
    include_once('footer.php');
?>
<script>
    function addSales(){
        addSale=$('#salesSNum').val();
        $.get("AJAX.php?type=addSales",{serialNumber:addSale},function(data){
            result_2=JSON.parse(data);
            cName=result_2.categoryName;
        });

        if(cName==null){
            alert("Please add valid product")
        }else{
            $('#salesitems').append("<tr><td><input type='text' name='sSerial' value='"+sn+"'></td>" +
                                    "<td>"+cn+"</td>" +
                                    "<td><a href=\"#\" class=\"btn btn-danger btn-xs\"><i class=\"fa fa-trash-o\"></i> Delete </a></td></tr>");
            $c_id=$("#category_name").val();

            $('#sSerial').val("");
            $('#sSerial').focus();
        }

    }
</script>