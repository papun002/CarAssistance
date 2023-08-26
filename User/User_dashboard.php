<!doctype html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="icon" href="favicon.ico" type="image/x-icon" />

    <title>User Dashboard</title>

    <!-- Bootstrap Core and vandor -->
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css" />

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


    <!-- Plugins css -->
    <link rel="stylesheet" href="assets/plugins/charts-c3/c3.min.css" />

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
                    <div class="row clearfix">
                        <div class="col-lg-12">
                            <div class="mb-4">
                                <h4>Welcome User!</h4>
                                <small>Drive Safe and Have A Good Day!</a></small>
                            </div>
                        </div>
                    </div>
                    <div class="row clearfix row-deck">
                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Your Request</h3>
                                </div>
                                <div class="card-body bg-y">
                                    <h5 class="number mb-0 font-32 counter">245</h5>

                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Near Mechanics</h3>
                                </div>
                                <div class="card-body bg-r">
                                    <h5 class="number mb-0 font-32 counter">17</h5>

                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">New Request</h3>
                                </div>
                                <div class="card-body bg-o">
                                    <h5 class="number mb-0 font-32 counter">12</h5>

                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Current Request </h3>
                                </div>
                                <div class="card-body bg-p">
                                    <h5 class="number mb-0 font-32 counter">1</h5>
                                    <span class="font-12">Status : Accepted</span><br>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">OnGoing Request Details</h3>
                                </div>
                                <div class="card-body bg-g">
                                    <!-- <h5 class="number mb-0 font-32 counter">12</h5> -->
                                    <span class="font-12 ">MechanicName: Khalid Kumar Mohanty</span><br>
                                    <span class="font-12 ">MobileNo: 8856124565</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <a href="">
                                <div class="card a">
                                    <div class="card-header">
                                        <h3 class="card-title">Share Live Location</h3>
                                    </div>
                                    <div class="card-body bg-g">
                                        <!-- <h5 class="number mb-0 font-32 counter">12</h5> -->
                                        <span class="font-12">Click here to Share Your Live Location to the Mechanic or
                                            Driver</span><br>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>


    <script src="assets/bundles/lib.vendor.bundle.js"></script>

    <script src="assets/bundles/apexcharts.bundle.js"></script>
    <script src="assets/bundles/counterup.bundle.js"></script>
    <script src="assets/bundles/knobjs.bundle.js"></script>
    <script src="assets/bundles/c3.bundle.js"></script>

    <script src="assets/js/core.js"></script>
    <script src="assets/js/page/project-index.js"></script>
</body>

</html>