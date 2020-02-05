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
                        <h4>HR File Management</h4>
                    </div>

                    <div class="x_content">
                        <form action="#" method="POST" class="form-horizontal form-label-left">
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nicNumber">NIC Number <span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" name="nicNum" id="nicNum" class="form-control col-md-7 col-sm-7 col-xs-12" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="collectedCert">Collected Certificate</label>
                                <br>
                                <div class="col-md-7 col-sm-7 col-xs-12" style="font-size: 16px" aria-required="true">
                                    <table>
                                        <tr>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                        <tr>
                                            <td><input class="" type="checkbox" name="chkCert[]" value="ol"> O/L </td>
                                            <td><input class="" type="checkbox" name="chkCert[]" value="higherEdu."> Higher Edu. </td>
                                            <div class="col-md-5 col-sm-5 col-xs-4">
                                                <td><input type="text" class="col-md-5 col-sm-5 col-xs-3 form-control"></td>
                                            </div>
                                        </tr>
                                        <tr>
                                            <td><input class="" type="checkbox" name="chkCert[]" value="al"> A/L </td>

                                        </tr>
                                        <tr>
                                            <td><input class="" type="checkbox" name="chkCert[]" value="gsCert"> GS Certificate </td>
                                            <td><input class="" type="checkbox" name="chkCert[]" value="other"> Other </td>
                                            <div class="col-md-5 col-sm-5 col-xs-4">
                                                <td><input class=" form-control col-md-5 col-sm-5 col-xs-3" type="text" name="otherCertCount"> </td>
                                            </div>
                                        </tr>
                                        <tr>
                                            <td><input class="" type="checkbox" name="chkCert[]" value="nic"> NIC Copy </td>
                                        </tr>
                                        <tr>
                                            <td><input class="" type="checkbox" name="chkCert[]" value="policeCert"> Police Certificate </td>
                                            <td><input class="" type="checkbox" name="chkCert[]" value="serviceLetter"> Service Letter </td>
                                            <td>
                                                <div class="col-md-5 col-sm-5 col-xs-4">
                                                    <input class="form-control col-md-7 col-sm-7 col-xs-12" type="text" name="sLetterCount">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><input class="" type="checkbox" name="chkCert[]" value="bond"> Bonding </td>
                                        </tr>
                                        <tr>
                                            <td><input class="" type="checkbox" name="chkCert[]" value="comAgreement"> Company Agreement </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nicNumber">Total Certificate Count <span class="required">*</span></label>
                                <div class="col-md-1 col-sm-1 col-xs-12">
                                    <input type="text" name="certTot" id="certTot" class="form-control col-md-7 col-sm-7 col-xs-12" required>
                                </div>
                            </div>
                            <div class="form-group" style="position:relative;left: 700px;">
                                <input type="submit" value="Add" class="btn btn-primary btn-lg">
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
