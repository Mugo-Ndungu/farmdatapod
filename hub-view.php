<!DOCTYPE html>
<html lang="en">

<?php
include "templates/head.php";
?>


<body>

    <!-- Main Wrapper -->
    <div class="main-wrapper">
        <!-- Header -->
        <?php
        include "templates/topnav.php";
        ?>
        <!-- /Header -->

        <!-- Sidebar -->
        <?php
        include "templates/side-menu.php";
        ?>
        <!-- /Sidebar -->

        <!-- Page Wrapper -->
        <div class="page-wrapper">
            <div class="content container-fluid">
                <div class="row">
                    <div class="col-sm-5 col-4">
                        <h4 class="page-title">Hubs</h4>
                    </div>
                    <div class="col-sm-7 col-8 text-right m-b-30">
                        <a href="hub-registration" class="btn btn-primary btn-rounded"><i class="fa fa-plus"></i> Create New Hub</a>
                    </div>
                </div>
                <div class="row filter-row">
                    <div class="col-sm-6 col-md-3">
                        <div class="form-group form-focus">
                            <label class="focus-label">From</label>
                            <div class="input-group date" id="datetimepicker1" data-target-input="nearest">
                                <input type="text" class="form-control datetimepicker-input" data-target="#datetimepicker1" />
                                <div class="input-group-append" data-target="#datetimepicker1" data-toggle="datetimepicker">
                                    <div class="input-group-text"><i class="fas fa-calendar-alt"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="form-group form-focus">
                            <label class="focus-label">To</label>
                            <div class="input-group date" id="datetimepicker5" data-target-input="nearest">
                                <input type="text" class="form-control datetimepicker-input" data-target="#datetimepicker5" />
                                <div class="input-group-append" data-target="#datetimepicker5" data-toggle="datetimepicker">
                                    <div class="input-group-text"><i class="fas fa-calendar-alt"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="form-group form-focus select-focus">
                            <label class="focus-label">Status</label>
                            <select class="select floating">
                                <option>Select Status</option>
                                <option>Accepted</option>
                                <option>Declined</option>
                                <option>Expired</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <a href="#" class="btn btn-primary btn-block"> Search </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table id="hub-view" class="table table-striped custom-table datatable m-b-0">
                                <thead>
                                    <tr>
                                        <th>Hub Code</th>
                                        <th>Hub Name</th>
                                        <th>Region</th>
                                        <th>Year Established</th>
                                        <th>Floor Size</th>
                                        <th>Building Type</th>
                                        <th class="text-right">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><a href="estimate-view.html">Hub-0123</a></td>
                                        <td>Kirinyaga Hub</td>
                                        <td>Kirinyaga</td>
                                        <td>2010</td>
                                        <td>18ft X 25ft</td>
                                        <td><span class="badge badge-success-border">Permanent</span></td>
                                        <td class="text-right">
                                            <div class="dropdown dropdown-action">
                                                <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="feather-more-vertical"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" data-toggle="modal" id="viewhub" data-target="#hubDetailsModal" href="#"><i class="fas fa-eye m-r-5"></i> Hub Details</a>
                                                    <a class="dropdown-item" href="edit-estimate.html"><i class="fas fa-pen m-r-5"></i> Edit</a>
                                                    <a class="dropdown-item" href="#"><i class="fas fa-trash m-r-5"></i> Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="notification-box">
                <div class="msg-sidebar notifications msg-noti">
                    <div class="topnav-dropdown-header">
                        <span>Messages</span>
                    </div>
                    <div class="drop-scroll msg-list-scroll">
                        <ul class="list-box">
                            <li>
                                <a href="chat.html">
                                    <div class="list-item">
                                        <div class="list-left">
                                            <span class="avatar">R</span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author">Richard Miles </span>
                                            <span class="message-time">12:28 AM</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="chat.html">
                                    <div class="list-item new-message">
                                        <div class="list-left">
                                            <span class="avatar">J</span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author">John Doe</span>
                                            <span class="message-time">1 Aug</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="chat.html">
                                    <div class="list-item">
                                        <div class="list-left">
                                            <span class="avatar">T</span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author"> Tarah Shropshire </span>
                                            <span class="message-time">12:28 AM</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="chat.html">
                                    <div class="list-item">
                                        <div class="list-left">
                                            <span class="avatar">M</span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author">Mike Litorus</span>
                                            <span class="message-time">12:28 AM</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="chat.html">
                                    <div class="list-item">
                                        <div class="list-left">
                                            <span class="avatar">C</span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author"> Catherine Manseau </span>
                                            <span class="message-time">12:28 AM</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="chat.html">
                                    <div class="list-item">
                                        <div class="list-left">
                                            <span class="avatar">D</span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author"> Domenic Houston </span>
                                            <span class="message-time">12:28 AM</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="chat.html">
                                    <div class="list-item">
                                        <div class="list-left">
                                            <span class="avatar">B</span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author"> Buster Wigton </span>
                                            <span class="message-time">12:28 AM</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="chat.html">
                                    <div class="list-item">
                                        <div class="list-left">
                                            <span class="avatar">R</span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author"> Rolland Webber </span>
                                            <span class="message-time">12:28 AM</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="chat.html">
                                    <div class="list-item">
                                        <div class="list-left">
                                            <span class="avatar">C</span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author"> Claire Mapes </span>
                                            <span class="message-time">12:28 AM</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="chat.html">
                                    <div class="list-item">
                                        <div class="list-left">
                                            <span class="avatar">M</span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author">Melita Faucher</span>
                                            <span class="message-time">12:28 AM</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="chat.html">
                                    <div class="list-item">
                                        <div class="list-left">
                                            <span class="avatar">J</span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author">Jeffery Lalor</span>
                                            <span class="message-time">12:28 AM</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="chat.html">
                                    <div class="list-item">
                                        <div class="list-left">
                                            <span class="avatar">L</span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author">Loren Gatlin</span>
                                            <span class="message-time">12:28 AM</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="chat.html">
                                    <div class="list-item">
                                        <div class="list-left">
                                            <span class="avatar">T</span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author">Tarah Shropshire</span>
                                            <span class="message-time">12:28 AM</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="topnav-dropdown-footer">
                        <a href="chat.html">See all messages</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Page Wrapper -->
        <!-- Modal Fullscreen xl -->
        <div class="modal modal-fullscreen-xl" id="hubDetailsModal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Hub Detailed View</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-sm-7 col-4">
                                <h4 class="page-title">Hub Profile</h4>
                            </div>

                            <div class="col-sm-5 col-8 text-right m-b-30">
                                <a href="edit-profile.html" class="btn btn-primary btn-rounded"><i class="fa fa-plus"></i> Edit Hub Profile</a>
                            </div>
                        </div>
                        <div class="card-box">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="profile-view">
                                        <!-- <div class="profile-img-wrap">
                                            <div class="profile-img">
                                                <a href="#"><img class="avatar" src="assets/img/user.jpg" alt=""></a>
                                            </div>
                                        </div> -->
                                        <div class="profile-basic">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <h3 class="text-center mb-3">Kirinyaga Hub</h3>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="profile-info-left">
                                                        <div class="staff-id">Hub Code: H123</div>
                                                        <div class="staff-id">Hub Address : 00340 Kirinyaga</div>
                                                        <div class="staff-id">Year Established : 2010</div>
                                                        <div class="staff-id">Ownership : Mazao Ltd. Owned</div>
                                                        <div class="staff-id">Floor Size: 18ft X 25ft</div>
                                                        <!-- <div class="staff-msg"><a href="chat.html" class="btn btn-primary">Send Message</a></div> -->
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="profile-info">
                                                        <div class="staff-id">Facilities : Charcoal Cooler, Washrooms</div>
                                                        <div class="staff-id">Input Center : No</div>
                                                        <div class="staff-id">Type of Building : Permanent</div>
                                                        <div class="staff-id">Longitude : -1.2746752</div>
                                                        <div class="staff-id">Latitude : 36.8246784</div>
                                                        <!-- <div class="staff-msg"><a href="chat.html" class="btn btn-primary">Send Message</a></div> -->
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mt-3">
                                                <div class="col-md-12">
                                                    <h3 class="user-name text-center mb-3">Hub Key Contact Information</h3>
                                                </div>
                                                <div class="col-md-6">
                                                    <ul class="personal-info">
                                                        <li>
                                                            <span class="title">Last Name:</span>
                                                            <span class="text">Kariuki</span>
                                                        </li>
                                                        <li>
                                                            <span class="title">First Name:</span>
                                                            <span class="text">Lewis</span>
                                                        </li>
                                                        <li>
                                                            <span class="title">ID Number:</span>
                                                            <span class="text">30254248</span>
                                                        </li>
                                                        <li>
                                                            <span class="title">Gender:</span>
                                                            <span class="text">Male</span>
                                                        </li>
                                                        <li>
                                                            <span class="title">Date of Birth:</span>
                                                            <span class="text">19/02/1988</span>
                                                        </li>
                                                        <li>
                                                            <span class="title">Email:</span>
                                                            <span class="text">19/02/1988</span>
                                                        </li>
                                                        <li>
                                                            <span class="title">Phone No.:</span>
                                                            <span class="text">0702230821</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-6">
                                                    <ul class="personal-info">
                                                        <li>
                                                            <span class="title">Last Name:</span>
                                                            <span class="text">Nyambura</span>
                                                        </li>
                                                        <li>
                                                            <span class="title">First Name:</span>
                                                            <span class="text">Mary</span>
                                                        </li>
                                                        <li>
                                                            <span class="title">ID Number:</span>
                                                            <span class="text">33790846</span>
                                                        </li>
                                                        <li>
                                                            <span class="title">Gender:</span>
                                                            <span class="text">Female</span>
                                                        </li>
                                                        <li>
                                                            <span class="title">Date of Birth:</span>
                                                            <span class="text">19/02/1979</span>
                                                        </li>
                                                        <li>
                                                            <span class="title">Email:</span>
                                                            <span class="text">mary@gmail.com</span>
                                                        </li>
                                                        <li>
                                                            <span class="title">Phone No.:</span>
                                                            <span class="text">0728790821</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Main Wrapper -->
    <script>
        $(document).ready(function() {
            // Add class on view hub details button click
            $("#viewhub").on("click", function() {
                // $("body").removeClass("mini-sidebar");
                $("body").addClass("mini-sidebar");
            });
            // Remove class on hub details modal close
            $('#hubDetailsModal').on('hidden.bs.modal', function() {
                $("body").removeClass("mini-sidebar");
            });
        });
    </script>

    <?php
    include "templates/script.php"
    ?>
</body>

</html>