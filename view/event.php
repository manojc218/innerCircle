<?php
    include_once ('header.php');
?>
<div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
        <div class="x_title">
            <h4>Create Event</h4>
        </div>
        <div class="x_content">
            <form action="#" method="POST" class="form-horizontal">
                <div class="row">
                    <!--left column-->
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <!--organizer-->
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Organizer</label>
                            <div class="col-md-7 col-sm-7 col-xs-12">
                                <input type="text" class="form-control" name="eventOrganizer" id="eventOrganizer" readonly>
                            </div>
                        </div>

                        <!--venue-->
                        <div class="form-group">
                            <label class="control-label col-md-3 col-ms-3 col-xs-3">Venue</label>
                            <div class="col-md-7 col-sm-7 col-xs-12">
                                <input type="text" class="form-control" name="venue" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Description</label>
                            <div class="col-md-7 col-sm-7 col-xs-12">
                                <textarea class="form-control" name="eventDescription" id="eventDescription" required></textarea>
                            </div>
                        </div>

                        <!--promotion items-->
                        <div class="form-group">
                            <label class="control-label col-md-3 col-ms-3 col-xs-3">Promotion Items</label>
                            <div class="col-md-7 col-sm-7 col-xs-12" style="font-size: 16px;" aria-required="true">
                                    <br>
                                    <input class="" type="checkbox" value="Sim Cards" name="chkSimCard"> SIM CARDS<br>
                                    <input class="" type="checkbox" value="4G Routers" name="chkRouter"> 4G ROUTERS<br>
                                    <input class="" type="checkbox" value="Dialog Tv" name="chkDtv"> DIALOG TV
                            </div>
                        </div>
                    </div>

                    <!--right column-->
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <!--Create date-->
                        <div class="form-group">
                            <label class="control-label col-md-3 col-ms-3 col-xs-3">Date</label>
                            <div class="col-md-7 col-sm-7 col-xs-12">
                                <input type="text" class="form-control" name="eventDate" id="eventDate" value="<?php echo date("Y-m-d")?>" readonly>
                            </div>
                        </div>

                        <!--Date od conduct-->
                        <div class="form-group">
                            <label class="control-label col-md-3 col-ms-3 col-xs-3">Date of conduct</label>
                            <div class="col-md-7 col-sm-7 col-xs-12">
                                <input type="date" class="form-control" name="eventConductDate" id="eventConductDate" required>
                            </div>
                        </div>

                        <!--Time-->
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Time</label>
                            <div class="col-md-7 col-sm-7 col-xs-12">
                                <input type="time" class="form-control" name="eventTime" id="eventTime" required>
                            </div>
                        </div>

                        <!--buttons-->
                        <div class="row" style="position: absolute;right: 125px;top: 175px;">
                            <input type="reset" class="btn btn-success btn-lg">
                            <input type="submit" class="btn btn-primary btn-lg" value="Create" id="btnEventCreate">
                        </div>

                    </div>

                </div>
            </form>
        </div>
    </div>



<?php
    include_once ('footer.php')
?>
    <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="../vendors/iCheck/icheck.min.js"></script>