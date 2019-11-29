<?php
    include_once ('header.php');
?>


<div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
        <div class="x_title">
            <h4>UserProfile</h4>
        </div>
        <div class="x_content">
            <div class="col-md-3 col-sm-3 col-xs-12 profile_left">
                <div class="profile_img">
                    <div id="crop-avatar">
                        <!-- Current avatar -->
                        <img class="img-responsive avatar-view" src="images/picture.jpg" alt="Avatar" title="Change the avatar">
                    </div>
                </div>
                <h3>Samuel Doe</h3>

                <ul class="list-unstyled user_data">
                    <li><i class="fa fa-map-marker user-profile-icon"></i> San Francisco, California, USA
                    </li>

                    <li>
                        <i class="fa fa-briefcase user-profile-icon"></i> Software Engineer
                    </li>

                    <li class="m-top-xs">
                        <i class="fa fa-external-link user-profile-icon"></i>
                        <a href="http://www.kimlabs.com/profile/" target="_blank">www.kimlabs.com</a>
                    </li>
                </ul>

                <a class="btn btn-success"><i class="fa fa-edit m-right-xs"></i>Edit Profile</a>
                <br>

                <!-- start skills -->
                <h4>Skills</h4>
                <ul class="list-unstyled user_data">
                    <li>
                        <p>Web Applications</p>
                        <div class="progress progress_sm">
                            <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="50" aria-valuenow="49" style="width: 50%;"></div>
                        </div>
                    </li>
                    <li>
                        <p>Website Design</p>
                        <div class="progress progress_sm">
                            <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="70" aria-valuenow="69" style="width: 70%;"></div>
                        </div>
                    </li>
                    <li>
                        <p>Automation &amp; Testing</p>
                        <div class="progress progress_sm">
                            <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="30" aria-valuenow="29" style="width: 30%;"></div>
                        </div>
                    </li>
                    <li>
                        <p>UI / UX</p>
                        <div class="progress progress_sm">
                            <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="50" aria-valuenow="49" style="width: 50%;"></div>
                        </div>
                    </li>
                </ul>
                <!-- end of skills -->

            </div>
            <div class="col-md-9 col-sm-9 col-xs-12">

                <div class="profile_title">
                    <div class="col-md-6">
                        <h2>User Activity Report</h2>
                    </div>
                    <div class="col-md-6">
                        <div id="reportrange" class="pull-right" style="margin-top: 5px; background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #E6E9ED">
                            <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
                            <span>September 15, 2019 - October 14, 2019</span> <b class="caret"></b>
                        </div>
                    </div>
                </div>
                <!-- start of user-activity-graph -->
                <div id="graph_bar" style="width: 100%; height: 280px; position: relative; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);"><svg height="280" version="1.1" width="486" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="overflow: hidden; position: relative; left: -0.4px; top: -0.8px;"><desc style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Created with Raphaël @@VERSION</desc><defs style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></defs><text x="42.53125" y="213.600820665125" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal"><tspan style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" dy="4.397695665125013">0</tspan></text><path fill="none" stroke="#aaaaaa" d="M55.03125,213.600820665125H461" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="42.53125" y="166.45061549884377" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal"><tspan style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" dy="4.395927998843774">750</tspan></text><path fill="none" stroke="#aaaaaa" d="M55.03125,166.45061549884377H461" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="42.53125" y="119.3004103325625" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal"><tspan style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" dy="4.401972832562507">1,500</tspan></text><path fill="none" stroke="#aaaaaa" d="M55.03125,119.3004103325625H461" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="42.53125" y="72.15020516628124" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal"><tspan style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" dy="4.400205166281239">2,250</tspan></text><path fill="none" stroke="#aaaaaa" d="M55.03125,72.15020516628124H461" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="42.53125" y="25" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal"><tspan style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" dy="4.3984375">3,000</tspan></text><path fill="none" stroke="#aaaaaa" d="M55.03125,25H461" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="440.7015625" y="226.100820665125" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal" transform="matrix(0.8192,-0.5736,0.5736,0.8192,-62.5407,308.3107)"><tspan style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" dy="4.397695665125013">Other</tspan></text><text x="400.1046875" y="226.100820665125" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal" transform="matrix(0.8192,-0.5736,0.5736,0.8192,-91.0759,299.725)"><tspan style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" dy="4.397695665125013">iPhone 6S Plus</tspan></text><text x="359.5078125" y="226.100820665125" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal" transform="matrix(0.8192,-0.5736,0.5736,0.8192,-87.3569,268.5547)"><tspan style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" dy="4.397695665125013">iPhone 6S</tspan></text><text x="318.9109375" y="226.100820665125" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal" transform="matrix(0.8192,-0.5736,0.5736,0.8192,-102.4769,250.8545)"><tspan style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" dy="4.397695665125013">iPhone 6 Plus</tspan></text><text x="278.3140625" y="226.100820665125" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal" transform="matrix(0.8192,-0.5736,0.5736,0.8192,-98.7629,219.6931)"><tspan style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" dy="4.397695665125013">iPhone 6</tspan></text><text x="237.7171875" y="226.100820665125" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal" transform="matrix(0.8192,-0.5736,0.5736,0.8192,-109.3837,198.6949)"><tspan style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" dy="4.397695665125013">iPhone 5S</tspan></text><text x="197.1203125" y="226.100820665125" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal" transform="matrix(0.8192,-0.5736,0.5736,0.8192,-113.4484,173.1169)"><tspan style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" dy="4.397695665125013">iPhone 5</tspan></text><text x="156.5234375" y="226.100820665125" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal" transform="matrix(0.8192,-0.5736,0.5736,0.8192,-127.8932,154.8073)"><tspan style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" dy="4.397695665125013">iPhone 3GS</tspan></text><text x="115.9265625" y="226.100820665125" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal" transform="matrix(0.8192,-0.5736,0.5736,0.8192,-131.4076,128.844)"><tspan style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" dy="4.397695665125013">iPhone 4S</tspan></text><text x="75.3296875" y="226.100820665125" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal" transform="matrix(0.8192,-0.5736,0.5736,0.8192,-135.4722,103.2661)"><tspan style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" dy="4.397695665125013">iPhone 4</tspan></text><rect x="60.105859375" y="189.71138338087584" width="30.447656249999998" height="23.88943728424917" rx="0" ry="0" fill="#26b99a" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect><rect x="100.70273437499999" y="172.42297481990605" width="30.447656249999998" height="41.17784584521897" rx="0" ry="0" fill="#26b99a" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect><rect x="141.299609375" y="196.31241210415521" width="30.447656249999998" height="17.2884085609698" rx="0" ry="0" fill="#26b99a" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect><rect x="181.89648437499997" y="114.8368575768212" width="30.447656249999998" height="98.76396308830381" rx="0" ry="0" fill="#26b99a" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect><rect x="222.49335937499998" y="172.42297481990605" width="30.447656249999998" height="41.17784584521897" rx="0" ry="0" fill="#26b99a" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect><rect x="263.090234375" y="78.18543142756525" width="30.447656249999998" height="135.41538923755976" rx="0" ry="0" fill="#26b99a" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect><rect x="303.687109375" y="141.68104105149067" width="30.447656249999998" height="71.91977961363435" rx="0" ry="0" fill="#26b99a" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect><rect x="344.283984375" y="64.54330539945454" width="30.447656249999998" height="149.05751526567047" rx="0" ry="0" fill="#26b99a" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect><rect x="384.880859375" y="121.12355159899204" width="30.447656249999998" height="92.47726906613298" rx="0" ry="0" fill="#26b99a" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect><rect x="425.477734375" y="127.41024562116287" width="30.447656249999998" height="86.19057504396214" rx="0" ry="0" fill="#26b99a" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect></svg><div class="morris-hover morris-default-style" style="left: 372px; top: 111px; display: none;"><div class="morris-hover-row-label">Other</div><div class="morris-hover-point" style="color: #26B99A">
                            Geekbench:
                            1,371
                        </div></div></div>
                <!-- end of user-activity-graph -->

                <div class="" role="tabpanel" data-example-id="togglable-tabs">
                    <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Recent Activity</a>
                        </li>
                        <li role="presentation" class=""><a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Projects Worked on</a>
                        </li>
                        <li role="presentation" class=""><a href="#tab_content3" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">Profile</a>
                        </li>
                    </ul>
                    <div id="myTabContent" class="tab-content">
                        <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">

                            <!-- start recent activity -->
                            <ul class="messages">
                                <li>
                                    <img src="images/img.jpg" class="avatar" alt="Avatar">
                                    <div class="message_date">
                                        <h3 class="date text-info">24</h3>
                                        <p class="month">May</p>
                                    </div>
                                    <div class="message_wrapper">
                                        <h4 class="heading">Desmond Davison</h4>
                                        <blockquote class="message">Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua butcher retro keffiyeh dreamcatcher synth.</blockquote>
                                        <br>
                                        <p class="url">
                                            <span class="fs1 text-info" aria-hidden="true" data-icon=""></span>
                                            <a href="#"><i class="fa fa-paperclip"></i> User Acceptance Test.doc </a>
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <img src="images/img.jpg" class="avatar" alt="Avatar">
                                    <div class="message_date">
                                        <h3 class="date text-error">21</h3>
                                        <p class="month">May</p>
                                    </div>
                                    <div class="message_wrapper">
                                        <h4 class="heading">Brian Michaels</h4>
                                        <blockquote class="message">Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua butcher retro keffiyeh dreamcatcher synth.</blockquote>
                                        <br>
                                        <p class="url">
                                            <span class="fs1" aria-hidden="true" data-icon=""></span>
                                            <a href="#" data-original-title="">Download</a>
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <img src="images/img.jpg" class="avatar" alt="Avatar">
                                    <div class="message_date">
                                        <h3 class="date text-info">24</h3>
                                        <p class="month">May</p>
                                    </div>
                                    <div class="message_wrapper">
                                        <h4 class="heading">Desmond Davison</h4>
                                        <blockquote class="message">Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua butcher retro keffiyeh dreamcatcher synth.</blockquote>
                                        <br>
                                        <p class="url">
                                            <span class="fs1 text-info" aria-hidden="true" data-icon=""></span>
                                            <a href="#"><i class="fa fa-paperclip"></i> User Acceptance Test.doc </a>
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <img src="images/img.jpg" class="avatar" alt="Avatar">
                                    <div class="message_date">
                                        <h3 class="date text-error">21</h3>
                                        <p class="month">May</p>
                                    </div>
                                    <div class="message_wrapper">
                                        <h4 class="heading">Brian Michaels</h4>
                                        <blockquote class="message">Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua butcher retro keffiyeh dreamcatcher synth.</blockquote>
                                        <br>
                                        <p class="url">
                                            <span class="fs1" aria-hidden="true" data-icon=""></span>
                                            <a href="#" data-original-title="">Download</a>
                                        </p>
                                    </div>
                                </li>

                            </ul>
                            <!-- end recent activity -->

                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">

                            <!-- start user projects -->
                            <table class="data table table-striped no-margin">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Project Name</th>
                                    <th>Client Company</th>
                                    <th class="hidden-phone">Hours Spent</th>
                                    <th>Contribution</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>New Company Takeover Review</td>
                                    <td>Deveint Inc</td>
                                    <td class="hidden-phone">18</td>
                                    <td class="vertical-align-mid">
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-success" data-transitiongoal="35" style="width: 35%;" aria-valuenow="35"></div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>New Partner Contracts Consultanci</td>
                                    <td>Deveint Inc</td>
                                    <td class="hidden-phone">13</td>
                                    <td class="vertical-align-mid">
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-danger" data-transitiongoal="15" style="width: 15%;" aria-valuenow="15"></div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Partners and Inverstors report</td>
                                    <td>Deveint Inc</td>
                                    <td class="hidden-phone">30</td>
                                    <td class="vertical-align-mid">
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-success" data-transitiongoal="45" style="width: 45%;" aria-valuenow="45"></div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>New Company Takeover Review</td>
                                    <td>Deveint Inc</td>
                                    <td class="hidden-phone">28</td>
                                    <td class="vertical-align-mid">
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-success" data-transitiongoal="75" style="width: 75%;" aria-valuenow="75"></div>
                                        </div>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                            <!-- end user projects -->

                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="tab_content3" aria-labelledby="profile-tab">
                            <p>xxFood truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui
                                photo booth letterpress, commodo enim craft beer mlkshk </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
    include_once ('footer.php');
?>
