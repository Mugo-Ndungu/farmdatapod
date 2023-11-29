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
                <div class="card-box">
                    <h4 class="card-title">Aggregation Registration</h4>
                    <ul class="nav nav-tabs nav-tabs-solid nav-tabs-rounded nav-justified">
                        <li class="nav-item"><a class="nav-link active" href="#solid-rounded-justified-tab1" data-toggle="tab">Buying Center</a></li>
                        <li class="nav-item"><a class="nav-link" href="#solid-rounded-justified-tab2" data-toggle="tab">CIG</a></li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane show active" id="solid-rounded-justified-tab1">
                            <!-- <h4 class="card-title">Buyin Center Registration Form</h4> -->
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card-box">
                                        <form action="#">
                                            <h4 class="card-title">Buyin Center Registration Information</h4>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Region</label>
                                                        <select class="select">
                                                            <option>Select</option>
                                                            <option value="baringo">Baringo</option>
                                                            <option value="bomet">Bomet</option>
                                                            <option value="bungoma">Bungoma</option>
                                                            <option value="busia">Busia</option>
                                                            <option value="elgeyo marakwet">Elgeyo Marakwet</option>
                                                            <option value="embu">Embu</option>
                                                            <option value="garissa">Garissa</option>
                                                            <option value="homa bay">Homa Bay</option>
                                                            <option value="isiolo">Isiolo</option>
                                                            <option value="kajiado">Kajiado</option>
                                                            <option value="kakamega">Kakamega</option>
                                                            <option value="kericho">Kericho</option>
                                                            <option value="kiambu">Kiambu</option>
                                                            <option value="kilifi">Kilifi</option>
                                                            <option value="kirinyaga">Kirinyaga</option>
                                                            <option value="kisii">Kisii</option>
                                                            <option value="kisumu">Kisumu</option>
                                                            <option value="kitui">Kitui</option>
                                                            <option value="kwale">Kwale</option>
                                                            <option value="laikipia">Laikipia</option>
                                                            <option value="lamu">Lamu</option>
                                                            <option value="machakos">Machakos</option>
                                                            <option value="makueni">Makueni</option>
                                                            <option value="mandera">Mandera</option>
                                                            <option value="meru">Meru</option>
                                                            <option value="migori">Migori</option>
                                                            <option value="marsabit">Marsabit</option>
                                                            <option value="mombasa">Mombasa</option>
                                                            <option value="muranga">Muranga</option>
                                                            <option value="nairobi">Nairobi</option>
                                                            <option value="nakuru">Nakuru</option>
                                                            <option value="nandi">Nandi</option>
                                                            <option value="narok">Narok</option>
                                                            <option value="nyamira">Nyamira</option>
                                                            <option value="nyandarua">Nyandarua</option>
                                                            <option value="nyeri">Nyeri</option>
                                                            <option value="samburu">Samburu</option>
                                                            <option value="siaya">Siaya</option>
                                                            <option value="taita taveta">Taita Taveta</option>
                                                            <option value="tana river">Tana River</option>
                                                            <option value="tharaka nithi">Tharaka Nithi</option>
                                                            <option value="trans nzoia">Trans Nzoia</option>
                                                            <option value="turkana">Turkana</option>
                                                            <option value="uasin gishu">Uasin Gishu</option>
                                                            <option value="vihiga">Vihiga</option>
                                                            <option value="wajir">Wajir</option>
                                                            <option value="pokot">West Pokot</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Buyin Center Name</label>
                                                        <input type="text" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Address</label>
                                                        <input type="text" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="focus-label">Year Established</label>
                                                        <div class="input-group date" id="datetimepicker2" data-target-input="nearest">
                                                            <input type="text" class="form-control datetimepicker-input" data-target="#datetimepicker2" />
                                                            <div class="input-group-append" data-target="#datetimepicker2" data-toggle="datetimepicker">
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
                                                        <div class="input-group date" id="datetimepicker0" data-target-input="nearest">
                                                            <input type="text" class="form-control datetimepicker-input" data-target="#datetimepicker0" />
                                                            <div class="input-group-append" data-target="#datetimepicker0" data-toggle="datetimepicker">
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
                        <div class="tab-pane" id="solid-rounded-justified-tab2">
                            <!-- <h4 class="card-title">Hub Registration Form</h4> -->
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card-box">
                                        <form action="#">
                                            <h4 class="card-title">CIG Registration Information</h4>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <!-- <div class="form-group">
                                                        <label>Region</label>
                                                        <select class="select">
                                                            <option>Select</option>
                                                            <option value="baringo">Baringo</option>
                                                            <option value="bomet">Bomet</option>
                                                            <option value="bungoma">Bungoma</option>
                                                            <option value="busia">Busia</option>
                                                            <option value="elgeyo marakwet">Elgeyo Marakwet</option>
                                                            <option value="embu">Embu</option>
                                                            <option value="garissa">Garissa</option>
                                                            <option value="homa bay">Homa Bay</option>
                                                            <option value="isiolo">Isiolo</option>
                                                            <option value="kajiado">Kajiado</option>
                                                            <option value="kakamega">Kakamega</option>
                                                            <option value="kericho">Kericho</option>
                                                            <option value="kiambu">Kiambu</option>
                                                            <option value="kilifi">Kilifi</option>
                                                            <option value="kirinyaga">Kirinyaga</option>
                                                            <option value="kisii">Kisii</option>
                                                            <option value="kisumu">Kisumu</option>
                                                            <option value="kitui">Kitui</option>
                                                            <option value="kwale">Kwale</option>
                                                            <option value="laikipia">Laikipia</option>
                                                            <option value="lamu">Lamu</option>
                                                            <option value="machakos">Machakos</option>
                                                            <option value="makueni">Makueni</option>
                                                            <option value="mandera">Mandera</option>
                                                            <option value="meru">Meru</option>
                                                            <option value="migori">Migori</option>
                                                            <option value="marsabit">Marsabit</option>
                                                            <option value="mombasa">Mombasa</option>
                                                            <option value="muranga">Muranga</option>
                                                            <option value="nairobi">Nairobi</option>
                                                            <option value="nakuru">Nakuru</option>
                                                            <option value="nandi">Nandi</option>
                                                            <option value="narok">Narok</option>
                                                            <option value="nyamira">Nyamira</option>
                                                            <option value="nyandarua">Nyandarua</option>
                                                            <option value="nyeri">Nyeri</option>
                                                            <option value="samburu">Samburu</option>
                                                            <option value="siaya">Siaya</option>
                                                            <option value="taita taveta">Taita Taveta</option>
                                                            <option value="tana river">Tana River</option>
                                                            <option value="tharaka nithi">Tharaka Nithi</option>
                                                            <option value="trans nzoia">Trans Nzoia</option>
                                                            <option value="turkana">Turkana</option>
                                                            <option value="uasin gishu">Uasin Gishu</option>
                                                            <option value="vihiga">Vihiga</option>
                                                            <option value="wajir">Wajir</option>
                                                            <option value="pokot">West Pokot</option>
                                                        </select>
                                                    </div> -->
                                                    <div class="form-group">
                                                        <label>CIG Name <span class="text-danger">*</span></label>
                                                        <input type="text" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="focus-label">Date Established <span class="text-danger">*</span></label>
                                                        <div class="input-group date" id="datetimepicker2" data-target-input="nearest">
                                                            <input type="text" class="form-control datetimepicker-input" data-target="#datetimepicker2" />
                                                            <div class="input-group-append" data-target="#datetimepicker2" data-toggle="datetimepicker">
                                                                <div class="input-group-text"><i class="fas fa-calendar-alt"></i></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>No. of Members <span class="text-danger">*</span></label>
                                                        <input type="text" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="display-block">Constitution: <span class="text-danger">*</span></label>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-check form-check-inline">
                                                                    <input class="form-check-input" type="radio" name="gender" id="constitutionyes" value="Yes">
                                                                    <label class="form-check-label" for="constitutionyes">Yes</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-check form-check-inline">
                                                                    <input class="form-check-input" type="radio" name="gender" id="constitutionno" value="No">
                                                                    <label class="form-check-label" for="constitutionno">No</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="display-block">Registration: <span class="text-danger">*</span></label>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-check form-check-inline">
                                                                    <input class="form-check-input" type="radio" name="gender" id="registrationyes" value="Yes">
                                                                    <label class="form-check-label" for="registrationyes">Yes</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-check form-check-inline">
                                                                    <input class="form-check-input" type="radio" name="gender" id="registrationno" value="No">
                                                                    <label class="form-check-label" for="registrationno">No</label>
                                                                </div>
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
                                                        <div class="input-group date" id="datetimepicker0" data-target-input="nearest">
                                                            <input type="text" class="form-control datetimepicker-input" data-target="#datetimepicker0" />
                                                            <div class="input-group-append" data-target="#datetimepicker0" data-toggle="datetimepicker">
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
                </div>
            </div>
        </div>
        <!-- Page Wrapper -->
    </div>
    <!-- /Main Wrapper -->


    <!-- Bootstrap Core JS -->
    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <!-- Slimscroll JS -->
    <script src="assets/js/jquery.slimscroll.js"></script>

    <!-- Select2 JS -->
    <script src="assets/js/select2.min.js"></script>

    <!-- Datetimepicker JS -->
    <script src="assets/js/moment.min.js"></script>
    <script src="assets/plugins/datetimepicker/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Chart JS -->
    <script src="assets/js/apexcharts.min.js"></script>

    <!-- Custom JS -->
    <script src="assets/js/app.js"></script>
</body>

</html>