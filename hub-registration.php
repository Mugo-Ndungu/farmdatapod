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
        <div class="page-wrapper dashboard-wrap">
            <div class="content container-fluid">
                <h4 class="card-title">Hub Registration Form</h4>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card-box">
                            <form action="#">
                                <h4 class="card-title">Hub Information</h4>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Region</label>
                                            <select class="select">
                                                <option>Select</option>
                                                <option value="1">A+</option>
                                                <option value="2">O+</option>
                                                <option value="3">B+</option>
                                                <option value="4">AB+</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Hub Name</label>
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Address</label>
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label class="focus-label">Year Established</label>
                                            <div class="input-group date" id="yearestablishedpicker" data-target-input="nearest">
                                                <input type="text" class="form-control datetimepicker-input" data-target="#yearestablishedpicker" />
                                                <div class="input-group-append" data-target="#yearestablishedpicker" data-toggle="datetimepicker">
                                                    <div class="input-group-text"><i class="fas fa-calendar-alt"></i></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Floor Size</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="display-block">Ownership:</label>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="gender" id="owned" value="Owned">
                                                        <label class="form-check-label" for="owned">Owned</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="gender" id="leased" value="Leased">
                                                        <label class="form-check-label" for="leased">Leased</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="display-block">Inputs Center:</label>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" onclick="toggleCheckboxDiv(true)" name="gender" id="input_yes" value="Yes">
                                                        <label class="form-check-label" for="input_yes">Yes</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" onclick="toggleCheckboxDiv(false)" name="gender" id="input_no" value="No">
                                                        <label class="form-check-label" for="input_no">No</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 row form-group" id="checkboxDiv">
                                                    <!-- <label class="col-form-label col-md-2">Facilities</label> -->
                                                    <div class="col-md-12 row">
                                                        <div class="checkbox mr-1">
                                                            <label>
                                                                <input type="checkbox" name="checkbox" value="Input A"> Input A
                                                            </label>
                                                        </div>
                                                        <div class="checkbox mr-1">
                                                            <label>
                                                                <input type="checkbox" name="checkbox" value="Input B"> Input B
                                                            </label>
                                                        </div>
                                                        <div class="checkbox mr-1">
                                                            <label>
                                                                <input type="checkbox" name="checkbox" value="Input C"> Input C
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Facilities</label>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="checkbox mr-2">
                                                        <label>
                                                            <input type="checkbox" name="checkbox" value="Charcoal Cooler"> Charcoal Cooler
                                                        </label>
                                                    </div>
                                                    <div class="checkbox mr-2">
                                                        <label>
                                                            <input type="checkbox" name="checkbox" value="Hand Washing Facility"> Hand Washing Facility
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">

                                                    <div class="checkbox mr-2">
                                                        <label>
                                                            <input type="checkbox" name="checkbox" value="Washrooms"> Washrooms
                                                        </label>
                                                    </div>
                                                    <div class="checkbox mr-2">
                                                        <label>
                                                            <input type="checkbox" name="checkbox"> Others
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Type of building</label>
                                            <select class="select">
                                                <option>Select</option>
                                                <option value="1">Permanent</option>
                                                <option value="2">Semi-Permanent</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="locationInput">Location:</label>
                                            <input type="text" class="form-control" id="locationInput" readonly>
                                            <div id="output"></div>
                                            <button id="getLocationButton" class="btn btn-success mt-2" onclick="getLocation()">Get Location</button>
                                        </div>
                                    </div>
                                </div>
                                <h4 class="card-title">Contact Information</h4>
                                <div class="row">
                                    <div class="col-md-6">
                                        <h4 class="card-title">Key Contact 1:</h4>
                                        <div class="form-group">
                                            <label>Last Name</label>
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>First Name</label>
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>ID Number</label>
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Phone No.</label>
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label class="display-block">Gender:</label>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="gender" id="gender_male" value="Male">
                                                        <label class="form-check-label" for="gender_male">Male</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="gender" id="gender_female" value="Female">
                                                        <label class="form-check-label" for="gender_female">Female</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="focus-label">Date of Birth</label>
                                            <div class="input-group date" id="datetimepicker1" data-target-input="nearest">
                                                <input type="text" class="form-control datetimepicker-input" data-target="#datetimepicker1" />
                                                <div class="input-group-append" data-target="#datetimepicker1" data-toggle="datetimepicker">
                                                    <div class="input-group-text"><i class="fas fa-calendar-alt"></i></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <h4 class="card-title">Key Contact 2:</h4>
                                        <div class="form-group">
                                            <label>Last Name</label>
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>First Name</label>
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>ID Number</label>
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Phone No.</label>
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label class="display-block">Gender:</label>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="gender" id="gender_male" value="Male">
                                                        <label class="form-check-label" for="gender_male">Male</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="gender" id="gender_female" value="Female">
                                                        <label class="form-check-label" for="gender_female">Female</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="focus-label">Date of Birth</label>
                                            <div class="input-group date" id="datetimepicker1" data-target-input="nearest">
                                                <input type="text" class="form-control datetimepicker-input" data-target="#datetimepicker1" />
                                                <div class="input-group-append" data-target="#datetimepicker1" data-toggle="datetimepicker">
                                                    <div class="input-group-text"><i class="fas fa-calendar-alt"></i></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-right">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Wrapper -->
    </div>
    <!-- /Main Wrapper -->

    <script>
        javascript: void(document.oncontextmenu = null);

        function toggleCheckboxDiv(show) {
            // Get the checkbox div element
            var checkboxDiv = document.getElementById("checkboxDiv");

            // Toggle the display based on the radio button selection
            checkboxDiv.style.display = show ? "block" : "none";
        }

        function getLocation() {
            // Check if Geolocation is supported
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(
                    // Success callback
                    function(position) {
                        var latitude = position.coords.latitude;
                        var longitude = position.coords.longitude;

                        // Update the input field
                        document.getElementById("locationInput").value = `${latitude}, ${longitude}`;

                        // Display the coordinates
                        document.getElementById("output").innerHTML = `Latitude: ${latitude} || Longitude: ${longitude}`;
                    },
                    // Error callback
                    function(error) {
                        console.error('Error getting location:', error.message);
                    }
                );
            } else {
                alert('Geolocation is not supported by your browser.');
            }
        }
    </script>
    <?php
    include "templates/script.php";
    ?>
</body>

</html>