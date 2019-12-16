<?php
    include_once ('header.php');
?>
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <!--start page title-->
            <div class="x_title">
                <h4>Product Distribution</h4>
            </div>
            <!--end page title-->

            <!--start add sales form-->
            <form class="form-horizontal form_label-left" action="distribute.php" method="post">
                <!--<div class="form-group">
                    <label class="control-label col-md-3 col-ms-3 col-xs-3" for="productId">Product Id</label>
                    <div class="col-md-6 col-ms-6 col-xs-12">
                        <input type="text" class="form-control col-md-7 col-xs-12" name="pId" required>
                    </div>
                </div>-->
                <div class="form-group">
                    <label class="control-label col-md-3 col-ms-3 col-xs-3" for="managerName">Manager Code</label>
                    <div class="col-md-6 col-ms-6 col-xs-12">
                        <input type="text" class="form-control col-md-7 col-xs-12" name="managerCode" id="managerCode" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3 col-ms-3 col-xs-12" for="Serial Number" id="">Serial Number</label>
                    <div class="col-md-6 col-ms-6 col-xs-12">
                        <input type="text" name="serialNumber" id="sNumber" class="form-control col-md-7 col-xs-12" required>
                    </div>
                </div>
                <div class="form-group addResetButtons_center">
                    <input type="button" class="btn btn-primary" value="Add" onclick="addTo()">
                    <input type="reset" class="btn btn-success" value="Reset">
                </div>
            </form>
            <!--end add sales form-->
            <hr class="separator">


            <div class="table-responsive">
                <!--data input table-->
                <table class="table table-striped jambo_table bulk_action">
                    <thead>
                    <tr class="headings">
                        <!--<th class="column-title">Product Id</th>-->
                        <th class="column-title">Serial Number</th>
                        <th class="column-title">Manager</th>
                        <th class="column-title">Category </th>

                        <th class="column-title no-link last"><span class="nobr">Action</span>
                        </th>
                        <th class="bulk-actions" colspan="7">
                            <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                        </th>
                    </tr>
                    </thead>

                    <tbody id="tbId">

                    </tbody>
                </table>

                <hr class="separator">

                <!--submit button-->
                <div  style="text-align: right">
                    <input type="submit" class="btn btn-primary" value="Submit">
                </div>
            </div>
            <!--End Sim card view table-->

        </div>
    </div>
<?php
    include_once ('footer.php');
?>

<script>
    function addTo() {
        sn=$('#sNumber').val();
        mName=$('#managerCode').val();
        $.get("AJAX.php?type=addTo",{serialNumber:sn},function (data) {

            result=JSON.parse(data);
            cn=result['cat'].categoryName;

            if(cn ==null){
                alert("User, Succesfully Registerd")
            }else {
                $('#tbId').append("<tr>" +
                    "<td><input  class='form-control' type='text' name='sNum[]' value='"+sn+"' readonly></td>" +
                    "<td><input  class='form-control' type='text' name='mName[]' value='"+mName+"' readonly></td>" +
                    "<td><input  class='form-control' type='text' name='categoryName' value='"+cn+"' readonly></td>" +
                    "<td><a href=\"#\" class=\"btn btn-danger btn-xs\">" +
                    "<i class=\"fa fa-trash-o\"></i> Delete </a></td></tr>");
                c_id=$("#category_name").val();

                $('#sNumber').val("");
                $('#sNumber').focus();
            }


        });

        }


</script>
