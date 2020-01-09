<?php
    include_once ('header.php');
    include_once ('../backend/Sale.php');

    $sale=new Sale();
    $saleList=$sale->get_all_sales_details();
?>
<div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
        <div class="x_title">
            <h4>Sales</h4>
        </div>
        <div class="x_content">
            <!--date filter-->

               <form class="form-horizontal">
                   <div class="row">
                       <div class="form-group">
                           <label class="col-md-1 col-sm-1 col-xs-12 control-label" for="startDate">From </label>
                           <div class="col-md-4 col-sm-4 col-xs-12">
                               <input type="date" class="form-control has-feedback-left" name="startDate" id="startDate">
                               <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
                           </div>
                       </div>
                       <div class="form-group">
                           <label class="col-md-1 col-sm-1 col-xs-12 control-label" for="endDate">To </label>
                           <div class="col-md-4 col-sm-4 col-xs-12">
                               <input type="date" class="form-control has-feedback-left" name="endDate" id="endDate">
                               <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
                           </div>
                       </div>
                   </div>
                   <div class="form-group">
                       <button type="submit" class="btn btn-primary btn-lg" id="btnSearch" style="position: relative;left: 300px;">Search</button>
                   </div>
               </form>
            <br>
            <!--start table-->
            <table class="table table-striped jambo_table" id="saleTable">
                <thead>
                <tr class="headings">
                    <th class="column-title" style="display: table-cell;">Guy Name </th>
                    <th class="column-title" style="display: table-cell;">Sale Date </th>
                    <th class="column-title" style="display: table-cell;">Sim Cards </th>
                    <th class="column-title" style="display: table-cell;">4G Routers </th>
                    <th class="column-title" style="display: table-cell;">Dialog Tv </th>
                    <th class="column-title no-link last" style="display: table-cell;"><span class="nobr">Action</span>
                    </th>
                    <th class="bulk-actions" colspan="7" style="display: none;">
                        <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt">1 Records Selected</span> ) <i class="fa fa-chevron-down"></i></a>
                    </th>
                </tr>
                </thead>

                <tbody>
                <?php
                foreach ($saleList as $item){
                    echo "<tr>

                    <td class=''>$item->guyName</td>
                    <td class=''>$item->saleDate</td>
                    <td class=''>$item->simCard </i></td>
                    <td class=''>$item->router</td>
                    <td class=''>$item->dtv</td>
                    <td class=''><a href=''>View</a>
                    </td>
                </tr>";}
                ?>

                </tbody>
            </table>
            <!--end table-->

            </div>
        </div>
    </div>
<?php
    include_once ('footer.php');
?>

<!-- jQuery -->
<script src="../vendors/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
<!--data tables for pdf-->
<script src="../vendors/datatables/datatables.js"></script>


<!--data tables for pdf-->
<script src="../vendors/datatables/datatables.js"></script>

<!-- Datatables -->
<script>
    $(document).ready(function(){
        $('#saleTable').DataTable({
            dom:'Bfrtip',"pageLength":20,
            buttons:[
                'copy',
                'excelHtml5',
                'csvHtml5',
                'pdfHtml5'
            ],
            "scrollY":"300px",
            "scrollCollapse": true,
            "paging":         false
        });
    });
</script>

