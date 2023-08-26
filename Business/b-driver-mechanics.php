<!doctype html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="icon" href="favicon.ico" type="image/x-icon" />

    <title>::User::Dashboard</title>

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
                    <div class="row ">
                        <div class="col-md-12 section-body bg-danger ">
                            <div class="page-header">
                                <div class="left">
                                    <h1 class="page-title w-text">Manage Driver &amp; Mechanics</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row clearfix row-deck mt-3">
                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <a href="b-add-DM.php" class="a">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Add Driver &amp; Mech.</h3>
                                    </div>
                                    <div class="card-body">
                                        <h5 class="number mb-0 font-32 text-muted-dark text-center">ADD</h5>
                                        <span class="font-12">Click Here! to add Driver and Mechanics</span>
                                    </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <a href="b-dList.php" class="a">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Driver List</h3>
                                </div>
                                <div class="card-body bg-y">
                                    <h5 class="number mb-0 font-32 counter text-dark">12</h5>
                                    <span class="font-12">Here All Driver List With Records</span>
                                </div>
                        </a>

                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <a href="b-mList.php" class="a">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Mechanics List</h3>
                            </div>
                            <div class="card-body">
                                <h5 class="number mb-0 font-32 counter text-dark">12</h5>
                                <span class="font-12">Here All Mechanics List With Records</span>
                            </div>
                    </a>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6">
                <a href="b-DUPList.php" class="a">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Emp. Username List</h3>
                        </div>
                        <div class="card-body bg-p">
                            <h5 class="number mb-0 font-32 counter text-dark">24</h5>
                            <span class="font-12">Here All Username and Password List</span>
                        </div>
                </a>
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