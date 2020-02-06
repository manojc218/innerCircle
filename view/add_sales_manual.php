<?php
    include_once ('header3.php');
?>
<div class="col-md-12 col-ms-12 col-xs-12">
    <!--page content-->
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">

            </div>
            <div class="clearfix"></div>

            <div class="row">

                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <div class="row">
                                <h1>Add Sales</h1>
                                <h4>Sales by Manual</h4>

                                <a href="add_sales.php" class="pull-right"><button class="btn btn-primary btn-lg">HUB Sales</button></a>
                            </div>
                        </div>

                        <div class="x_content">
                            <form class="form-horizontal form_label-left">
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Working Id :</label>
                                    <div class="col-md-7 col-sm-7 col-xs-12">
                                        <input type="text" name="workingId" id="workingId" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Sale Date : </label>
                                    <div class="col-md-7 col-sm-7 col-xs-12">
                                        <input type="date" name="saleDate" id="saleDate" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Serial No : </label>
                                    <div class="col-md-7 col-sm-7 col-xs-12">
                                        <input type="text" name="saleSerial" id="saleSerial" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input  type="submit" value="Add Sales" class="btn btn-primary btn-lg" style="position: relative;left: 525px;">
                                </div>

                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /page content -->
</div>
<?php
    include_once ('footer.php');
?>
