<?php
    include_once ('header.php');
    include_once ('../backend/Distribute.php');
    include_once ('../backend/Product.php');

    if(isset($_POST['managerCode'])){
        $distribute=new Distribute();
        $distribute->workingId=$_POST['managerCode'];
        $distribute->productCName=$_POST['categoryName'];
        $distribute->saleSNum=$_POST['sNum'];
        $distribute->distributeDate=$_POST['distributeDate'];

        $addDistribute=$distribute->addDistribute();
    }
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

                <!--manager code-->
               <div class="row">
                   <div class="form-group">
                       <label class="control-label col-md-3 col-ms-3 col-xs-3" for="managerName">Manager Code</label>
                       <div class="col-md-6 col-ms-6 col-xs-12">
                           <input type="text" class="form-control col-md-7 col-xs-12" name="managerCode" id="managerCode" required>
                       </div>
                   </div>

                   <!--distribute Date-->
                   <div class="form-group">
                       <label class="control-label col-md-3 col-sm-3 col-xs-3" for="distributeDate">Distribute Date</label>
                       <div class="col-md-6 col-sm-6 col-xs-6">
                           <input type="date" class="form-control" name="distributeDate" id="distributeDate">
                       </div>
                   </div>

                   <!--seriel number-->
                   <div class="form-group">
                       <label class="control-label col-md-3 col-ms-3 col-xs-12" for="Serial Number" id="">Serial Number</label>
                       <div class="col-md-6 col-ms-6 col-xs-12">
                           <input type="text" name="serialNumber" id="sNumber" class="form-control col-md-7 col-xs-12">
                       </div>
                   </div>
                   <!--buttons-->
                   <div class="form-group addResetButtons_center">
                       <input type="button" class="btn btn-primary" value="Add" onclick="checkSerial(this)">
                       <input type="reset" class="btn btn-success" value="Reset">
                   </div>

               </div>
                <!--end add sales form-->
                <hr class="separator">


                <div class="row">
                    <div class="table-responsive">
                        <!--data input table-->
                        <table class="table table-striped jambo_table bulk_action">
                            <thead>
                            <tr class="headings">
                                <!--<th class="column-title">Product Id</th>-->
                                <th class="column-title">Serial Number</th>
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
                            <input type="submit" class="btn btn-primary" value="Distribute">
                        </div>
                    </div>
                </div>
                <!--end table-->
            </form>
        </div>
    </div>
<?php
    include_once ('footer.php');
?>

<script>
    function checkSerial()
            {
                sNum=$('#sNumber').val();
                $.get("AJAX.php?type=checkSerial",{serialNumber: sNum},function (data) {
                        result2=JSON.parse(data);
                        if(result2==0)
                            addTo();
                        else alert('Serial is invalid');
            }
        )
    }
    function addTo() {
        sn=$('#sNumber').val();
        mName=$('#managerCode').val();
        $.get("AJAX.php?type=addTo",{serialNumber:sn},function (data) {

            result=JSON.parse(data);
            cn=result['cat'].categoryName;

            if(cn ==null){
                alert("This item is not valid")
            }else {
                    $('#tbId').append("<tr>" +
                        "<td><input  class='form-control' type='text' name='sNum[]' value='"+sn+"' readonly></td>" +
                        "<td><input  class='form-control' type='text' name='categoryName' value='"+cn+"' readonly></td>" +
                        "<td><a href=\"#\" class=\"btn btn-danger \" onclick='remove(this)'><i class=\"fa fa-trash-o\"></i> Remove </a></td></tr>");

                    c_id=$("#category_name").val();
                    $('#sNumber').val("");
                    $('#sNumber').focus();
                }
            });

        }

        /*delete data in table*/
        function remove(btn) {
            $(btn).parent().parent().remove();
        }

</script>
