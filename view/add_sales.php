<?php
    include_once ('header.php');
    include_once ('../backend/Sale.php');
?>
    <div class="col-md-12 col-ms-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h4>Add Sales</h4>
            </div>

            <form class="form-horizontal form_label-left" method="post">
                <div class="row">
                    <!--guy code-->
                    <div class="form-group">
                        <label class="control-label col-md-3 col-ms-3 col-xs-3" for="guyCode">Guy Code</label>
                        <div class="col-md-6 col-ms-6 col-xs-12">
                            <input type="text" class="form-control col-md-7 col-xs-12" name="guyCode" id="guyCode" required>
                        </div>
                    </div>
                    <!--serial number-->
                    <div class="form-group">
                        <label class="control-label col-md-3 col-ms-3 col-xs-12" for="Serial Number">Serial Number</label>
                        <div class="col-md-6 col-ms-6 col-xs-12">
                            <input type="text" name="salesSNum" id="salesSNum" class="form-control col-md-7 col-xs-12">
                        </div>
                    </div>
                    <!--buttons-->
                    <div class="form-group addResetButtons_center">
                        <input type="button" class="btn btn-primary" onclick="addSales()" value="Add">
                        <input type="reset" class="btn btn-success" value="Reset">
                    </div>
                </div>

                <hr class="separator">

                <!--sales table-->
                <div class="row">
                    <table class="table table-striped jambo_table bulk_action" id="salesTables">
                        <thead>
                        <tr class="headings">
                            <th class="column-title">Serial Number</th>
                            <th class="column-=title">Guy Name</th>
                            <th class="column-title">Category </th>

                            <th class="column-title no-link last"><span class="nobr">Action</span>
                            </th>

                        </tr>
                        </thead>

                        <tbody id="salesitems">

                        </tbody>
                    </table>
                </div>

                <hr class="separator">

                <!--submit button-->
                <div  style="text-align: right">
                    <input type="submit" class="btn btn-primary" value="Submit">
                </div>
            </form>

        </div>
    </div>

<?php
    include_once('footer.php');
?>
<script>
    function addSales(){

        saleSNum=$('#salesSNum').val();//get sold serial numbers
        guyCode=$('#guyCode').val();//get guy code

        //getting category name for relevant serial number

        $.get("AJAX.php?type=addSales",{serialNumber:saleSNum},function(data){
            result=JSON.parse(data);
            cn=result['cat'].categoryName;

            //display added details in the table
            if(cn==null){
                alert("Enter valid number")
            }else{
                $('#salesTables').append("<tr>" +
                    "<td><input  class='form-control' type='text' name='saleSNum[]' value='"+saleSNum+"' readonly></td>" +
                    "<td><input  class='form-control' type='text' name='guyCode[]' value='"+guyCode+"' readonly></td>" +
                    "<td><input  class='form-control' type='text' name='cName' value='"+cn+"' readonly></td>" +
                    "<td><a href=\"#\" class=\"btn btn-danger btn-xs\">" +
                    "<i class=\"fa fa-trash-o\"></i> Delete </a></td></tr>");
                $c_id=$("#category_name").val();

                $('#salesSNum').val("");
                $('#salesSNum').focus();
            }

        });


    }
</script>