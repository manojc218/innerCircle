<?php
    include_once ('header3.php');
?>
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
                        <h4>Welfare Items</h4>
                    </div>

                    <div class="x_content">
                        <form action="" method="POST" class="form-horizontal form-label-left">
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="welfareNIC">Guy NIC <span class="required">*</span></label>
                                <div class="col-md-7 col-sm-7 col-xs-12">
                                    <input type="text" name="welfareNIC" id="welfareNIC" class="form-control col-md-7 col-sm-7 col-xs-12" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="welfareItem" class="control-label col-md-3 col-sm-3 col-xs-12">Welfare Items <span>*</span> </label>
                                <br>
                                <div class="col-md-7 col-sm-7 col-xs-12" style="font-size: 16px" aria-required="true">
                                    <table cellspacing="10">
                                        <tr>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                        <tr>
                                            <td style="padding: 6px"><input type="checkbox" name="welfchk" value="mobile phone"> Mobile Phone</td>
                                            <td style="padding: 6px"><input type="checkbox" name="welfchk" value="sim card"> SIM Cards </td>
                                        </tr>
                                    </table>
                                </div>

                            </div>
                            <div class="form-group" style="position: relative;left:685px">
                                <input type="submit" value="Add Items" class="btn btn-primary btn-lg">
                            </div>
                        </form>


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /page content -->
<?php
    include_once ('footer.php');
?>
