<?php
    include_once ('header3.php');
?>
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">

        </div>
        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h4>Events</h4>
                    </div>
                    <div class="x_content">
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
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-lg" id="btnSearch" style="position: relative;left: 320px;">Search</button>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <!--start table-->
                                <table class="table table-striped jambo_table" id="saleTable">
                                    <thead>
                                    <tr class="headings">
                                        <th class="column-title" style="display: table-cell;">Organizer</th>
                                        <th class="column-title" style="display: table-cell;">Create Date</th>
                                        <th class="column-title" style="display: table-cell;">Event Date </th>
                                        <th class="column-title" style="display: table-cell;">Time </th>
                                        <th class="column-title" style="display: table-cell;">Venue </th>
                                        <th class="column-title no-link last" style="display: table-cell;"><span class="nobr">Action</span>
                                        </th>
                                        <th class="bulk-actions" colspan="7" style="display: none;">
                                            <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt">1 Records Selected</span> ) <i class="fa fa-chevron-down"></i></a>
                                        </th>
                                    </tr>
                                    </thead>

                                    <tbody>
                                    <?php
                                    /*                        foreach ($saleList as $item){
                                                                echo "<tr>

                                                        <td class=''>$item->guyName</td>
                                                        <td class=''>$item->saleDate</td>
                                                        <td class=''>$item->simCard </i></td>
                                                        <td class=''>$item->router</td>
                                                        <td class=''>$item->dtv</td>
                                                        <td class=''><a href=''>View</a>
                                                        </td>
                                                    </tr>";}
                                                            */?>

                                    </tbody>
                                </table>
                                <!--end table-->
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
    include_once ('footer.php');
?>
