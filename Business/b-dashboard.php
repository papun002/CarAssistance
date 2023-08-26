
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

    <title>Business Dashboard</title>

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
                                <h4>Welcome <span style = "color: firebrick";><?php echo $_SESSION['b_name']; ?> !</span></h4>
                                <small>Business opportunities are like buses, there’s always another one coming!</small>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-12">
                        <div class="card bg-success">
                            <div class="card-header">
                                <h3 class="card-title w-text">Setup Your Buniness Profile First!</h3>
                                <div class="card-options">
                                    <a href="javascript:void(0)" class="card-options-remove" data-toggle="card-remove"><i class="fe">&#10005;</i></a>
                                    <div class="item-action dropdown ml-2">
                                        <a href="javascript:void(0)" data-toggle="dropdown"><i class="fa fa-more-vertical"></i></a>
                                    </div>
                                </div>
                            </div>                      
                        </div>
                    </div>
                    <div class="row clearfix row-deck">
                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Incomming Request</h3>
                                </div>
                                <div class="card-body bg-g">
                                <h5 class="number mb-0 font-32 counter">12</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Requested List</h3>
                                </div>
                                <div class="card-body bg-y">
                                    <h5 class="number mb-0 font-32 counter">17</h5>

                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Ava. Driver&amp;Mechanics</h3>
                                </div>
                                <div class="card-body ">
                                    <h6 class="number mb-0 font-12">Mechanics:<h5 class="number mb-0 font-25 counter">245</h5></h6>
                                    <h6 class="number mb-0 font-12">Driver:<h5 class="number mb-0 font-25 counter">53</h5></h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Feedback List</h3>
                                </div>
                                <div class="card-body bg-p">
                                   <h5 class="number mb-0 font-32 counter">25</h5>
                                </div>
                            </div>
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
    <!-- <script src="assets/js/page/project-index.js"></script> -->
</body>
</html>
<?php
}
?>