<?php
session_start();
include('../login/db.php');

// checking session is valid or not 
if (strlen($_SESSION['b_logid'] == 0)) {
    header('location:logout.php');
} else {
    ?>
<!doctype html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="icon" href="favicon.ico" type="image/x-icon" />

    <title>Business | Add Mechanics</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


    <!-- Bootstrap Core and vandor -->
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css" />

    <!-- Plugins css -->
    <link rel="stylesheet" href="assets/plugins/charts-c3/c3.min.css" />

    <link rel="stylesheet" href="assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css">

    <!-- Core css -->
    <link rel="stylesheet" href="assets/css/main.css" />
    <link rel="stylesheet" href="assets/css/theme1.css" />

    <!-- custom css -->
    <link rel="stylesheet" href="../css/style.css">
</head>

<body class="font-montserrat">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
        </div>
    </div>

    <div id="main_content">

        <?php include 'components/top_nav.php'; ?>

        <?php include 'components/leftSide_bar.php'; ?>

        <div class="page">
            <div class="section-body mt-3">
                <div class="container-fluid">
                    <div class="row ">
                        <div class="col-md-12 section-body bg-danger ">
                            <div class="page-header">
                                <div class="left">
                                    <h1 class="page-title w-text">Driver &amp; Mechanics</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row clearfix">
                        <div class="col-md-12">
                            <div class="tab-content">
                                <div class="tab-pane active show" id="Company_Settings">
                                    <div class="card mt-3">
                                        <div class="card-header">
                                            <h3 class="card-title">Add Driver &amp; Mechanics</h3>
                                            <div class="card-options">
                                                <a href="#" class="card-options-fullscreen"
                                                    data-toggle="card-fullscreen"><i class="fa fa-arrow-up"></i></a>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <form>
                                                <div class="row">
                                                    <div class="col-md-4 col-sm-12">
                                                        <div class="form-group">
                                                            <label>Date</label>
                                                            <div class="col-md-12">
                                                                <div class="input-daterange input-group"
                                                                    data-provide="datepicker">
                                                                    <input type="text" class="form-control"
                                                                        name="start">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 col-sm-12">
                                                        <div class="form-group">
                                                            <label>Name <span class="text-danger">*</span></label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text"><i
                                                                            class="icon-envelope fa fa-user"></i></span>
                                                                </div>
                                                                <input type="text" class="form-control" value=""
                                                                    type="text" placeholder="Enter Person Name">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 col-md-4">
                                                        <div class="form-group">
                                                            <label>Select Category <span
                                                                    class="text-danger">*</span></label>
                                                            <select class="form-control" id="adv"
                                                                onchange="ShowHideDiv()">
                                                                <option value="0">Select Category</option>
                                                                <option value="d">Driver</option>
                                                                <option value="m">Mechanics</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 col-sm-12" id="mech" style="display: none;">
                                                        <div class="form-group">
                                                            <label>Mechanic ID<span class="text-danger">*</span></label>
                                                            <input class="form-control" type="text" id="txt_usrid">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 col-sm-12" id="driver" style="display: none;">
                                                        <div class="form-group">
                                                            <label>Driver ID<span class="text-danger">*</span></label>
                                                            <input class="form-control" type="text" id="txt_usrid1">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 col-sm-12">
                                                        <div class="form-group">
                                                            <label>Person Image <span
                                                                    class="text-danger">*</span></label>
                                                            <input class="form-control" value="+1 882-635-7531"
                                                                type="file">
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4 col-sm-12">
                                                        <div class="form-group">
                                                            <label>Service</label>
                                                            <input class="form-control" type="text"
                                                                placeholder="Enter Service">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 col-md-4">
                                                        <div class="form-group">
                                                            <label>Address <span class="text-danger">*</span></label>
                                                            <input class="form-control" type="text"
                                                                placeholder="Enter Address">
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-12 col-md-4">
                                                        <div class="form-group">
                                                            <label>Locality <span class="text-danger">*</span></label>
                                                            <input class="form-control" type="text"
                                                                placeholder="Enter Locality">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 col-md-4">
                                                        <div class="form-group">
                                                            <label>City</label>
                                                            <input class="form-control" type="text"
                                                                placeholder="Enter City">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 col-md-4">
                                                        <div class="form-group">
                                                            <label>Select ID Proof <span
                                                                    class="text-danger">*</span></label>
                                                            <select class="form-control" id="adv"
                                                                onchange="ShowHideDiv()">
                                                                <option value="0">Select Document</option>
                                                                <option value="d">Aadhar Card</option>
                                                                <option value="m">Pancard</option>
                                                                <option value="m">Driving License</option>
                                                                <option value="m">Voter Card</option>
                                                                <option value="m">Other</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 col-md-6">
                                                        <div class="form-group">
                                                            <label>Aadhar No. <span
                                                                    class="text-danger">*</span></label><small
                                                                class="ml-2 font-10">Must be correct</small>
                                                            <input class="form-control" type="text"
                                                                placeholder="Enter Aadhar Card">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 col-md-6">
                                                        <div class="form-group">
                                                            <label>Document Image <span
                                                                    class="text-danger">*</span></label>
                                                            <input class="form-control" type="file">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 col-md-6">
                                                        <div class="form-group">
                                                            <label>Driver | Mechanics Username <span
                                                                    class="text-danger">*</span></label>
                                                            <input class="form-control" type="email"
                                                                placeholder="Enter Locality">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 col-md-6">
                                                        <div class="form-group">
                                                            <label>Driver | Mechanics Password <span
                                                                    class="text-danger">*</span></label>
                                                            <input class="form-control" type="password"
                                                                placeholder="Enter Password">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-sm-12 text-right m-t-20 col-md-12">
                                                        <button type="button" class="btn btn-primary">SAVE</button>
                                                    </div>
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
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

    <script src="assets/bundles/lib.vendor.bundle.js"></script>

    <script src="assets/bundles/apexcharts.bundle.js"></script>
    <script src="assets/bundles/counterup.bundle.js"></script>
    <script src="assets/bundles/knobjs.bundle.js"></script>
    <script src="assets/bundles/c3.bundle.js"></script>

    <script src="assets/js/core.js"></script>
    <script src="assets/js/page/project-index.js"></script>

    <script src="assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>



    <script type="text/javascript">
        now = new Date();
        randomNum = 'MECH';
        randomNum1 = 'DRIV';
        randomNum += Math.floor(100000 + Math.random() * 900000);
        randomNum1 += Math.floor(100000 + Math.random() * 900000);
        window.onload = function () {
            document.getElementById("txt_usrid").value = randomNum;
            document.getElementById("txt_usrid1").value = randomNum1;
        }

        function ShowHideDiv() {
            var adv = document.getElementById("adv");
            var mech = document.getElementById("mech");
            var driver = document.getElementById("driver");

            mech.style.display = adv.value == "m" ? "block" : "none";
            driver.style.display = adv.value == "d" ? "block" : "none";
        }
    </script>
</body>

</html>
<?php
}
?>